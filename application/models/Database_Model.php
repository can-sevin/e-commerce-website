<?php
class Database_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();

    }

    public function login($tablo,$email,$sifre)
    {
        $this->db->select("*");
        $this->db->from($tablo);
        $this->db->where('email',$email);
        $this->db->where('sifre',$sifre);
        $this->db->where('durum',"aktif");
        $this->db->limit(1);

        $query = $this->db->get();//Verileri getir

        if($query->num_rows() == 1){
            return $query->result();
        } else {
            return false;
        }
    }
     public function flogin($tablo,$email,$sifre)
    {
        $this->db->select("*");
        $this->db->from($tablo);
        $this->db->where('email',$email);
        $this->db->where('sifre',$sifre);
        $this->db->limit(1);

        $query = $this->db->get();//Verileri getir

        if($query->num_rows() == 1){
            return $query->result();
        } else {
            return false;
        }
    }
        public function update_data($tablo,$data,$id)//verileri güncelle
    {
        $this->db->where('id',$id);
        $this->db->update($tablo,$data);
        return true;
    }
    function get_urunler()
    {
      $query = $this->db->query('SELECT urunler.*, kategoriler.ad as katadi
      FROM urunler
      INNER JOIN kategoriler ON urunler.kategori=kategoriler.Id
      order by ad ' );

      return $query->result();
    }
    function get_urun($id)
    {
      $query = $this->db->query('SELECT urunler.*, kategoriler.ad as katadi
      FROM urunler
      INNER JOIN kategoriler ON urunler.kategori=kategoriler.Id
      WHERE urunler.Id='.$id );

      return $query->result();
    }

    public function kategoriler(){

        $this->load->model('model_categories');
	       $data = $this->model_categories->get_categories();

	//print_r($data);
    }
    function sepet_urunler($id)
    {
      $query=$this->db->query('SELECT sepet.*,urunler.resim as urunresim,urunler.ad as urunadi,urunler.sfiyat as satfiyat
        FROM sepet
        LEFT JOIN urunler ON urunler.id=sepet.urun_id
        WHERE sepet.musteri_id='.$id);

        return $query->result();
    }
  }
?>
