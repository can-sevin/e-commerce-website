<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller {
	 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->model('Database_Model');
                $this->load->helper('url');

                if(!$this->session->userdata("uye_session"))
                	redirect(base_url()."home/ekle");
        }


	public function index()
	{
		$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
		$data["sepet"]=$query->result();

		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY ad");
		$data["kategoriler"]=$query->result();

		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='kampanya'");
		$data["kampanya"]=$query->result();

		$query=$this->db->query("SELECT * FROM urunler ORDER BY id DESC LIMIT 4");
		$data["yeni"]=$query->result();

		$query=$this->db->query("SELECT * FROM urunler ORDER BY RAND() LIMIT 6");
		$data["random"]=$query->result();

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		$query=$this->db->query("SELECT * FROM admin WHERE id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();

		$data["sayfa"]="Üye Paneli";
		$data["menu"]="uye";

		$this->load->view('hesabim',$data);
		$this->load->view('_footer');
	}

	public function cikis()
	{
		$this->session->unset_userdata("uye_session");
		redirect(base_url()."home");
	}

	public function hesabim()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Uye Hesabı || ";
		$data["menu"]="uye";

		$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
		$data["sepet"]=$query->result();

		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY ad");
		$data["kategoriler"]=$query->result();

		$query=$this->db->query("SELECT * FROM admin WHERE id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();

		$this->load->view('hesabim',$data);
	}

	public function uye_guncelle()
	{
		$data=array(
			'adsoy'=>$this->input->post('adsoy'),
			'email'=>$this->input->post('email'),
			'sifre'=>$this->input->post('sifre'),
			'sehir'=>$this->input->post('sehir')

		);
		$id=$this->session->uye_session["id"];

		$this->Database_Model->update_data("admin",$data,$id);
		$this->session->set_flashdata("mesaj","Uye Bilgileriniz Güncellendi");
		redirect(base_url().'uye/hesabim');
	}
public function sepete_ekle(){
	$data=array(
		'urun_id' => $this->input->post('urunid'),
		'adet' => $this->input->post('miktar'),
		'musteri_id' => $this->session->uye_session["id"]
);
//print_r($data);
//exit();

$this->db->insert("sepet",$data);

$this->session->set_flashdata("mesaj","<p align='center'> Ürün Sepete Eklendi </p>");
redirect(base_url().'home/urundetay/'.$this->input->post('urunid'));
}

public function sepetim(){
	$query=$this->db->query("SELECT * FROM ayarlar");
	$data["veri"]=$query->result();
	$data["sayfa"]="Sepetim ||";
	$data["menu"]="sepetim";
//lazım
	$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
	$data["sepet"]=$query->result();

	$query=$this->db->query("SELECT * FROM kategoriler ORDER BY ad");
	$data["kategoriler"]=$query->result();
//lazım
	$id=$this->session->uye_session["id"];
	$data['veriler']=$this->Database_Model->sepet_urunler($id);

	//print_r($data);
	$this->load->view('sepet',$data);
}

public function sepetsil($id){
	$this->db->query("SELECT * FROM sepet WHERE Id= $id");
	$this->session->set_flashdata("mesaj","<p align='center'> Ürün Sepetten Silindi </p>");
	redirect(base_url().'uye/sepetim');
}
public function satinal(){
	$query=$this->db->query("SELECT * FROM ayarlar");
	$data["veri"]=$query->result();
	$data["sayfa"]="Satın Al ||";
	$data["menu"]="uye";

	$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
	$data["sepet"]=$query->result();

	$query=$this->db->query("SELECT * FROM kategoriler ORDER BY ad");
	$data["kategoriler"]=$query->result();

	$data["toplam"]=$this->input->post('toplam');
	$id=$this->session->uye_session["id"];

	$query=$this->db->query("SELECT * FROM admin WHERE Id=$id");
	$data["uye"]=$query->result();

	$this->load->view('satinalma',$data);
}
public function siparis_tamamla(){
	//bankadan onay geldikten sonra
	$data=array(
		'adsoy' =>$this->input->post('adsoy'),
		'musteri_id' =>$this->session->uye_session["id"],
		'sehir' =>$this->input->post('sehir'),
		'tutar' =>$this->input->post('toplam'),
		'IP' => $_SERVER['REMOTE_ADDR']
	);
	//verileri sipariş tablosuna ekle
	$this->db->insert("siparis",$data);

	//Insert komutu girilen kaydın id si alınır
	$siparis_id = $this->db->insert_id();

	//Sepetteki ürünleri siparis urunlerine ekle
	$id=$this->session->uye_session["id"];

	//Sepetteki ürünleri sipariş ürünler tablosuna aktarma
	$veriler=$this->Database_Model->sepet_urunler($id);
	foreach ($veriler as $rs) {
		$data=array(
			'ad' =>$rs->urunadi,
			'fiyat' => $rs->satfiyat,
			'musteri_id' => $id,
			'urun_id' => $rs->urun_id,
			'siparis_id' => $siparis_id,
			'adet' => $rs->adet,
			'tutar' => $rs->adet*$rs->satfiyat
		);
		$this->db->insert("siparis_urunler",$data);
		//!!!!!Eklenen ürün adedi Urunler tablosundaki stok tan düşürülmeli!!!!!
	}
	//İşlem bittiğinde sepeti boşalt
	$this->db->query("DELETE FROM sepet WHERE musteri_id= $id");

	//Sipariş alındığına dair üye ye email bilgisi gönder
	redirect(base_url()."home");
}
public function siparisler(){
	$query=$this->db->query("SELECT * FROM ayarlar");
	$data["veri"]=$query->result();
	$data["sayfa"]="Siparişlerim ||";
	$data["menu"]="uye";

	$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
	$data["sepet"]=$query->result();

	$query=$this->db->query("SELECT * FROM kategoriler ORDER BY ad");
	$data["kategoriler"]=$query->result();

	$data["toplam"]=$this->input->post('toplam');
	$id=$this->session->uye_session["id"];

	$query=$this->db->query("SELECT * FROM admin WHERE Id=$id");
	$data["uye"]=$query->result();

	$query=$this->db->query("SELECT * FROM siparis WHERE musteri_id='".$this->session->uye_session["id"]."'");
	$data["veriler"]=$query->result();

	$this->load->view('siparislerim',$data);

}
public function siparisdetay($siparis_id){
	$query=$this->db->query("SELECT * FROM ayarlar");
	$data["veri"]=$query->result();
	$data["sayfa"]="Sipariş Detayı ||";
	$data["menu"]="uye";

	$id=$this->session->uye_session["id"];
	$query=$this->db->query("SELECT * FROM siparis urunler WHERE siparis_id=$siparis_id");
	$data["veriler"]=$query->result();
	//print_r($data);
	$this->load->view('siparis_detay',$data);
}
public function ekle_kaydet()
{
	$this->load->libary('email',$config);
	$query=$this->db->query("SELECT * FROM ayarlar");
	$dataa["veri"]=$query->result();
	
	$config = array(
		"protocol" => 'sendmail',
		'stmp_host' => 'mail.220voltmarkt.xyz',
		'stmp_port' => 25,
		'stmp_user' => 'welcome@220voltmarkt.xyz',
		'stmp_pass' => '123456',
		'mailtype' => 'html',
		'charset' => 'utf-8',
		'wordwrap' => true,
);
	
	$this->email->from("welcome@220voltmarkt.xyz","220VoltMarkt");
	$this->email->to("mcancaglak@hotmail.com");
	$this->email->subject("220VoltMarkt Kaydınız Oluşturuldu");
	$this->email->subject("Hoşgeldiniz");
	
	$send = $this->email->send();

	
	if($send)
	redirect(base_url().'home');
	else
	echo "Email başarısız!";
	
	//Form verileri alınır
	$data=array(
		'adsoy' => $this->input->post('adsoy'),
		'email' => $this->input->post('email'),
		'sehir' => $this->input->post('sehir'),
		'sifre' => $this->input->post('sifre'),
		'yetki' => $this->input->post('yetki'),
		'durum' => $this->input->post('durum'),
		'resim' => $this->input->post('resim')
	);
	$this->db->insert("admin",$data);
	$this->session->set_flashdata("mesaj","Üye kaydı gerçekleştirildi");
	
}
public function duzenle($id)
{
	$query=$this->db->query("SELECT * FROM admin WHERE id= $id");
	$data["veri"]= $query->result();
	$this->load->view('admin/uye_duzenle',$data);
}
public function guncelle($id)
{
	//Form verileri alınır
	$data=array(
		'adsoy' => $this->input->post('adsoy'),
		'email' => $this->input->post('email'),
		'sehir' => $this->input->post('sehir'),
		'sifre' => $this->input->post('sifre'),
		'yetki' => $this->input->post('yetki'),
		'durum' => $this->input->post('durum'),
		'resim' => $this->input->post('resim')
	);
	$this->load->model('Database_Model');
	$this->Database_Model->update_data("admin",$data,$id);

	redirect(base_url().'admin/uyeler');
}
public function sil($id)
{
	$this->db->query("DELETE FROM admin WHERE id= $id");

	redirect(base_url().'admin/uyeler');
}
public function sifremi_unuttum($id)
{
	
}
}
