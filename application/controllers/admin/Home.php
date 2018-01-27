<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/_content');
		$this->load->view('admin/_footer');
	}
	public function ayarlar(){
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		$this->load->view('admin/ayarlar',$data);
	}

	public function ayarlar_guncelle($id){

		$data=array(
			'ad'=>$this->input->post('ad'),
			'keywords'=>$this->input->post('keywords'),
			'description'=>$this->input->post('description'),
			'telefon'=>$this->input->post('telefon'),
			'name'=>$this->input->post('name'),
			'stmpserver'=>$this->input->post('stmpserver'),
			'stmpport'=>$this->input->post('stmpport'),
			'stmpmail'=>$this->input->post('stmpmail'),
			'password'=>$this->input->post('password'),
			'adres'=>$this->input->post('adres'),
			'sehir'=>$this->input->post('sehir'),
			'tel'=>$this->input->post('tel'),
			'fax'=>$this->input->post('fax'),
			'email'=>$this->input->post('email'),
			'iletisim'=>$this->input->post('iletisim'),
			'facebook'=>$this->input->post('facebook'),
			'twitter'=>$this->input->post('twitter'),
			'instagram'=>$this->input->post('instagram'),
			'pinterest'=>$this->input->post('pinterest')
		);
		$this->Database_Model->update_data("ayarlar",$data,$id);
		redirect(base_url().'admin/home/ayarlar');
	}
}
