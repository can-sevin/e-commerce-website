<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urunler extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
				$this->load->model('Database_Model');
				$this->load->helper('url');
				if(!$this->session->userdata("admin_session"))
				redirect(base_url().'admin/login');
    }

	public function index() //Bu index fonksiyonu otomatik olarak çalışır
	{
		//$query=$this->db->query("SELECT * FROM Urunler");
		//$data["veriler"]=$query->result();

		$this->load->model('Database_Model');
		$data["veriler"]=$this->Database_Model->get_urunler();
		$this->load->view('admin/urun_liste',$data);
	}
	public function resim_ekle($id)
	{
		$query=$this->db->query("SELECT * FROM urunler WHERE id= $id");
		$data["veri"]= $query->result();

		$data["id"]=$id;
		$this->load->view('admin/urun_resim_ekle',$data);
	}
	public function galeri_ekle($id)
	{
		$query=$this->db->query("SELECT * FROM urunler_resim WHERE urun_id= $id");
		$data["veriler"]= $query->result();

		$data["id"]=$id;
		$this->load->view('admin/urun_galeri_ekle',$data);
	}
	public function resim_kaydet($id)
  {
								$data["id"]=$id;

                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('resim'))
                {
                        $error = array('error' => $this->upload->display_errors());
												$this->session->set_flashdata("mesaj","Resim istenen kriterleri sağlamıyor");
                      	$this->load->view('admin/urun_resim_ekle',$data);
                }
                else
                {
	                      $upload_data = $this->upload->data();
												$file_name = $upload_data['file_name'];//Yüklendiği resmin adı

												$data=array(
														'resim' => $file_name
												);
												//print_r($data);
												//exit();
												$this->load->model('Database_Model');
												$this->Database_Model->update_data("urunler",$data,$id);

												$this->session->set_flashdata("mesaj","Ürün Resmi Yüklendi:".$file_name);
												redirect(base_url().'admin/urunler');
								}
  }
	public function galeri_kaydet($id)
  {
								$data["id"]=$id;

                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('resim'))
                {
                        $error = $this->upload->display_errors();
												$this->session->set_flashdata("mesaj","Yüklemede hata oluştu".$error);
												redirect(base_url().'admin/urunler/galeri_ekle/'.$id);
								}
                else
                {
									//veritabanına kayıt
	                      $upload_data = $this->upload->data();
												$data=array(
														'urun_id' => $id,
														'resim' => $upload_data["file_name"]
												);
													$this->db->insert("urunler_resim",$data);

													$this->session->set_flashdata("mesaj","Resim Galeriye yüklendi");
												redirect(base_url().'admin/urunler/galeri_ekle/'.$id);
								}
  }

	public function galeri_sil($urunid,$resimid)
	{
		$this->db->query("DELETE FROM urunler_resim WHERE id= $resimid");
		$this->session->set_flashdata("mesaj","Resim Galeriden Silindi");
		redirect(base_url().'admin/urunler/galeri_ekle/'.$urunid);
	}

	public function ekle_kaydet()
	{
		//Form verileri alınır
		$data=array(
			'ad' => $this->input->post('ad'),
			'stok' => $this->input->post('stok'),
			'kategori' => $this->input->post('kategori'),
			'afiyat' => $this->input->post('afiyat'),
			'sfiyat' => $this->input->post('sfiyat'),
			'resim' => $this->input->post('resim')
		);
		$this->db->insert("admin",$data);
		$this->session->set_flashdata("mesaj","Ürün kaydı gerçekleştirildi");
		$this->load->view('admin/urun_ekle',$data,$id);
		redirect(base_url().'admin/urunler');
	}
	public function duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM kategoriler");
		$data["veriler"]= $query->result();
		$data["veri"]=$this->Database_Model->get_urun($id);
		$this->load->view('admin/urun_duzenle',$data);
	}
	public function guncelle($id)
	{
		//Form verileri alınır
		$data=array(
			'ad' => $this->input->post('ad'),
			'stok' => $this->input->post('stok'),
			'keywords' => $this->input->post('keywords'),
			'aciklama' => $this->input->post('aciklama'),
			'description' => $this->input->post('description'),
			'kategori' => $this->input->post('kategori'),
			'afiyat' => $this->input->post('afiyat'),
			'sfiyat' => $this->input->post('sfiyat')
		);
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("urunler",$data,$id);

		redirect(base_url().'admin/urunler');
	}
	public function sil($id)
	{
		$this->db->query("DELETE FROM urunler WHERE id= $id");

		redirect(base_url().'admin/urunler');
	}
	public function ekle()
	{
		$this->load->view('admin/urun_ekle');
	}
	public function urun_ekle_kaydet()
	{
		//Form verileri alınır
		$data=array(
			'ad' => $this->input->post('ad'),
			'kodu' => $this->input->post('kodu'),
			'stok' => $this->input->post('stok'),
			'kategori' => $this->input->post('kategori'),
			'afiyat' => $this->input->post('afiyat'),
			'sfiyat' => $this->input->post('sfiyat'),
			'resim' => $this->input->post('resim'),
			'keywords' => $this->input->post('keywords'),
			'aciklama' => $this->input->post('aciklama'),
			'description' => $this->input->post('description')
		);
		$this->db->insert("urunler",$data);
		$this->session->set_flashdata("mesaj","Ürün kaydı gerçekleştirildi");
		redirect(base_url().'admin/urunler');
	}
}
