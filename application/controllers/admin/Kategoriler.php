<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoriler extends CI_Controller {
	 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->model('Database_Model');
                $this->load->helper('url');

                if(!$this->session->userdata("admin_session"))
                	redirect(base_url().'admin/login');
        }

	public function index()
	{

		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY Id");
		$data["kategoriler"]=$query->result();

		$this->load->view('admin\kategoriler_ekle',$data);
	}
	public function ekle()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY Id");
		$data["kategoriler"]=$query->result();
		$this->load->view('admin\kategoriler_ekle',$data);



	}
	public function ekle_kaydet()
	{
		//Form verilerini alacağız
		$data=array(
			'ad' => $this->input->post('ad'), //post('adi') formdaki isim


		);
		$this->db->insert("kategoriler",$data);
		$this->session->set_flashdata("mesaj","Kategori kaydı gerçekleştirildi!");
		$this->load->view('admin/kategoriler_ekle',$data);
		redirect(base_url().'admin/kategoriler',$data);
	}

	public function duzenle($id)
	{
		//$query=$this->db->query("SELECT * FROM haberler WHERE yetki='Admin'");
		//$data["Admin"]=$query->result();
		$query=$this->db->query("SELECT * FROM kategoriler WHERE Id=$id");
		$data["veri"]=$query->result();


		$this->load->view('admin\kategoriler_ekle',$data);

	}

	public function guncelle($id)
	{

		//Form verilerini alacağız
		$data=array(
			'ad' => $this->input->post('ad'), //post('adsoy') formdaki isim

		);

		$this->load->model('Database_Model');
		$this->session->set_flashdata("mesaj","Kategori Güncellendi!");
		$this->Database_Model->update_data("kategoriler",$data,$id);


		redirect(base_url().'admin/kategoriler');

	}

	public function sil($id)
	{
		$this->db->query("DELETE FROM kategoriler WHERE Id=$id");
		redirect(base_url().'admin/kategoriler');

	}
	public function resim_yukle($id)
	{
		$query=$this->db->query("SELECT * FROM haberler WHERE Id=$id");
		$data["veri"]=$query->result();

		$data["id"]=$id;
		$this->load->view('admin\haberler_resim_yukle',$data);

	}

	public function resim_kaydet($id)
	{
		$data["id"]=$id;

		//upload edilecek dosyaya ait ayarlar ve limitler
		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png'; //desteklenen türler
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;

                //Ayarlar ile kütüphaneyi çağır

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('resim')) //Yükle ->Eğer hata varsa
                {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata("mesaj","Yüklemede hata oluştu :".$error);
                        $this->load->view('admin\haberler_resim_yukle',$data);
                }
                else  //Hata yoksa
                {
                    $upload_data = $this->upload->data();
                    $data=array(
                   'resim'=>$upload_data["file_name"]

		);
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("haberler",$data,$id);


		redirect(base_url().'admin/haberler'); //veri tabanına kaydetme


                }

	}


	public function galeri_yukle($id)
	{
		$query=$this->db->query("SELECT * FROM haberler_resim WHERE haber_id=$id");
		$data["veriler"]=$query->result();

		$data["id"]=$id;
		$this->load->view('admin\haberler_galeri_yukle',$data);

	}

	public function galeri_kaydet($id)
	{
		$data["id"]=$id;

		//upload edilecek dosyaya ait ayarlar ve limitler
		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png'; //desteklenen türler
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;

                //Ayarlar ile kütüphaneyi çağır

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('resim')) //Yükle ->Eğer hata varsa
                {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata("mesaj","Yüklemede hata oluştu :".$error);
                        redirect(base_url().'admin/haberler/galeri_yukle/'.$id);
                }
                else  //Hata yoksa
                {
                	//Veritabanına kayıt
                    $upload_data = $this->upload->data();
                    $data=array(
                   		'haber_id'=>$id,
                   		'resim'=>$upload_data["file_name"]

		);


					$this->db->insert("haberler_resim",$data);
					//veritabanına kayıt
					$this->session->set_flashdata("mesaj","Resim Galeriye Yüklendi!");
					redirect(base_url().'admin/haberler/galeri_yukle/'.$id);



                }

	}

	public function galeri_sil($haberid,$resimid)
	{
		$this->db->query("DELETE FROM haberler_resim WHERE Id=$resimid");
		$this->session->set_flashdata("mesaj","Resim Galeriden Silindi");
		redirect(base_url().'admin/haberler/galeri_yukle/'.$haberid);

	}
}
