<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
		$this->load->helper('url');

		if(!$this->session->userdata("admin_session"))
		redirect(base_url().'admin/login');
    }

	public function index() //Bu index fonksiyonu otomatik olarak çalışır
	{
		$query=$this->db->query("SELECT * FROM admin ORDER BY id");
		$data["veriler"]=$query->result();

		$this->load->view('admin/uyeler_liste',$data);

	}
	public function ekle()
	{
		$this->load->view('admin/uyeler_ekle');
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
		redirect(base_url().'admin/uyeler');
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
}
