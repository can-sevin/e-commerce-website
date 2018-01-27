<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
				$this->load->model('Database_Model');
				$this->load->helper('url');
    }
		public function ekle()
		{
			$query=$this->db->query("SELECT * FROM kategoriler ORDER BY ad");
			$data["kategoriler"]=$query->result();

			$query=$this->db->query("SELECT * FROM urunler WHERE grubu='kampanya'");
			$data["kampanya"]=$query->result();

			$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
			$data["sepet"]=$query->result();

			$query=$this->db->query("SELECT * FROM ayarlar");
			$data["veri"]=$query->result();
			$data["sayfa"]="Kayıt Sayfası  ||";
			$data["menu"]="uyeekle";
			$this->load->view('uyeekle',$data);
		}
		public function ekle_kaydet()
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
			$this->db->insert("admin",$data);
			$this->session->set_flashdata("mesaj","Üye kaydı gerçekleştirildi");
			
                        
	                $query=$this->db->query("SELECT * FROM ayarlar");
	                $dataa["veri"]=$query->result();
	
	                $config = array(
		        "protocol" => 'sendmail',
		        'stmp_host' => 'mail.220voltmarkt.xyz',
		        'stmp_port' => '25',
		        'stmp_user' => 'welcome@220voltmarkt.xyz',
		        'stmp_pass' => '123456',
		        'mailtype' => 'html',
		        'charset' => 'utf-8',
		        'wordwrap' => true,
);
	
	$this->load->library('email',$config);
	
	$this->email->from("welcome@220voltmarkt.xyz","220VoltMarkt");
	$this->email->to($data['email']);
	$this->email->subject("220VoltMarkt Kaydınız Oluşturuldu");
        $this->email->message("Merhaba,220VoltMarkt Kaydınız Oluşturuldu");

	
	
	$send = $this->email->send();

	
	if($send)
	redirect(base_url().'home');
	else
        echo $this->email->print_debugger();

		}

	public function index() //Bu index fonksiyonu otomatik olarak çalışır
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

		$data["sayfa"]="";
		$data["menu"]="anasayfa";

		$this->load->view('_header',$data);
		$this->load->view('_container');
		$this->load->view('_content');
		$this->load->view('_footer');
	}
	public function hakkimizda()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY ad");
		$data["kategoriler"]=$query->result();

		$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
		$data["sepet"]=$query->result();

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='kampanya'");
		$data["kampanya"]=$query->result();

		$data["sayfa"]="Hakkımızda ||";
		$data["menu"]="hakkimizda";


		$this->load->view('_header',$data);
		$this->load->view('_container');
		$this->load->view('hakkimizda');
		$this->load->view('_footer');
	}
	public function iletisim()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY ad");
		$data["kategoriler"]=$query->result();

		$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
		$data["sepet"]=$query->result();

		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='kampanya'");
		$data["kampanya"]=$query->result();

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="İletişim  ||";
		$data["menu"]="iletisim";
		$this->load->view('iletisim',$data);
	}
	public function bize_yazin()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY ad");
		$data["kategoriler"]=$query->result();

		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='kampanya'");
		$data["kampanya"]=$query->result();

		$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
		$data["sepet"]=$query->result();

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Bize yazın  ||";
		$data["menu"]="bize_yazin";
		$this->load->view('bize_yazin',$data);
	}
	public function mesaj_kaydet()
	{
		$data=array(
				'adsoy' => $this->input->post('adsoy'),
				'email' => $this->input->post('email'),
				'mesaj' => $this->input->post('mesaj'),
				'ip' => $_SERVER['REMOTE_ADDR']
		);
		$this->db->insert("mesajlar",$data);
		$this->session->set_flashdata("mesaj","Gönderildi");

                $query=$this->db->query("SELECT * FROM ayarlar");
	                $dataa["veri"]=$query->result();
	
	                $config = array(
		        "protocol" => 'sendmail',
		        'stmp_host' => 'mail.220voltmarkt.xyz',
		        'stmp_port' => '25',
		        'stmp_user' => 'welcome@220voltmarkt.xyz',
		        'stmp_pass' => '123456',
		        'mailtype' => 'html',
		        'charset' => 'utf-8',
		        'wordwrap' => true,
);
	
	$this->load->library('email',$config);
	
	$this->email->from("welcome@220voltmarkt.xyz","220VoltMarkt");
	$this->email->to($data['email']);
	$this->email->subject("220VoltMarkt Kaydınız Oluşturuldu");
        $this->email->message("Merhaba,220VoltMarkt Mesajiniz bize ulaşmıştır en yakın zamanda irtibata geçilecektir");

	
	
	$send = $this->email->send();

	
	if($send)
        redirect(base_url().'home/bize_yazin');	
        else
        echo $this->email->print_debugger();

		
	}
	public function login_ol(){
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Üye Login ||";
		$data["menu"]="uye";

		$this->load->view('login_ol',$data);
	}
	public function  login(){
		$email=$this->input->post("email");
		$sifre=$this->input->post("sifre");

		echo $email = $this->security->xss_clean($email);
		echo $sifre = $this->security->xss_clean($sifre);
		//exit();

		$this->load->model('Database_Model');
		$result = $this->Database_Model->flogin('admin',$email,$sifre);

		if($result)
		{
			$sess_array = array(
				'id' => $result[0]->id,
				'yetki' => $result[0]->yetki,
				'email' => $result[0]->email,
				'adsoy' => $result[0]->adsoy,
				'resim' => $result[0]->resim
			);
			//print_r($sess_array);
			//echo "Login oldu";
			$this->session->set_userdata("uye_session",$sess_array);
			redirect(base_url().'home');
		}
		else {
			$this->session->set_userdata("mesaj","Hatalı kullanıcı adı yada şifre");
			redirect(base_url().'home/login_ol');
}}
public function get_categories(){

        $this->db->select('*');
        $this->db->from('kategoriler');
        $this->db->where('parent_id', 0);

        $parent = $this->db->get();

        $kategoriler = $parent->result();
        $i=0;
        foreach($kategoriler as $p_cat){
            $kategoriler[$i]->sub = $this->sub_categories($p_cat->Id);
            $i++;
        }
        return $kategoriler;
    }

    public function sub_categories($Id){

        $this->db->select('*');
        $this->db->from('kategoriler');
        $this->db->where('parent_id', $Id);

        $child = $this->db->get();
        $kategoriler = $child->result();
        $i=0;
        foreach($kategoriler as $p_cat){

            $kategoriler[$i]->sub = $this->sub_categories($p_cat->Id);
            $i++;
        }
        return $kategoriler;
    }
		public function urundetay($id){
			$query=$this->db->query("SELECT * FROM kategoriler ORDER BY ad");
			$data["kategoriler"]=$query->result();
			$data["menu"]="urun";
			$data["sayfa"]=null;

			$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
			$data["sepet"]=$query->result();

			$query=$this->db->query("SELECT * FROM kategoriler ORDER BY ad");
			$data["kategoriler"]=$query->result();

			$data["veri"]=$this->Database_Model->get_urun($id);

			$query=$this->db->query("SELECT * FROM urunler_resim WHERE urun_id=$id");
			$data["resimler"]=$query->result();

			$this->load->view('product_detail',$data);
		}
		public function siparisler($durum){
			$query=$this->db->query("SELECT * FROM siparis WHERE siparisdurumu='$durum'");
			$data["veriler"]=$query->result();

			$this->load->view('siparisler_listesi',$data);
		}

	}
