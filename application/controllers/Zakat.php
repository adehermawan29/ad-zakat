<?php

class Zakat extends CI_Controller {

  var $limit=10;
  var $offset=10; 
  private $pagesize = 10;

   function __construct()
  {

    parent::__construct();
    $this->load->helper(array('form','url'));
    $this->load->model('Zakat_Model');
  }
   Function index()

   {
    $this->load->view('login');
  }
   // {
   //    if (!$this->session->userdata('USERNAME')== ''){
   //        redirect('zakat/login');
   //    } else {
   //      redirect('zakat/tampilmuzaki');
   //    }
   //  }

 function login()
   {
    $this->load->view('zakat/login');
  }

 function login_exec()
  {
    $this->load->model('Zakat_Model');
    $username = $this->input->post('txtuser');
    $password = $this->input->post('txtpassword');
    $query = $this->Zakat_Model->validate_login($username, $password);
      if ($query) {
      echo "<script> alert  ('Login Suskes !');window.location.href='".base_url()."zakat/tampilmuzaki'</script>";
      } else {
        echo "<script> alert ('Login Gagal !');history.go(-1);</script>";
      }

  }

  function logout()
  {
    $this->session->unset_userdata('NAMALENGKAP');
    $this->session->unset_userdata('USERNAME');
    $this->session->unset_userdata('PASSWORD');
    $this->session->unset_userdata('LEVEL');
    // $this->alert->set('info','Anda telah logout');
    redirect('zakat');
  }


  function dashboard()
  { 
   $data = array(
    'title' => 'Tampil Data Muzaki',
    );
    $data['isi']='depan/dashboard';
    $this->load->view('template2',$data);
  }
  function mall()
  {
    $data['isi']='depan/mall';
    $this->load->view('template2',$data);
  }
  function hitmall(){
    $p=$this->input->post('jumlah');
    if(!(is_numeric($p))){
      echo "Kesalahan Input";
    } else {
      $var=0.025*$p;
      echo "Anda Harus Membayar Zakat Sebesar <b> <br>Rp. ".number_format($var)."</b><br><hr>";
    }
  } 
  function fitrah(){
   $data['isi']='depan/fitrah';
    $this->load->view('template2',$data);
  }
  function hitfitrah(){
    $p=$this->input->post('penghasilan');
    if(!(is_numeric($p))){
      echo "Kesalahan Input";
    } else {
      $var=3.5*$p;
      echo "Anda Harus Membayar Zakat Sebesar <b> <br>Rp. ".number_format($var)."</b><br><hr>";

    }
  } 

  public function tampilMuzaki()
  {
    $data = array(
        'title' => 'Tampil Data Muzaki',
        'data_muzaki' => $this->Zakat_Model->tampilmuzaki()
      );
    $data['isi']='zakat/muzaki';
    $this->load->view('template',$data);

  }
  public function tampiltransaksipenerimaan()
  {
    $data = array(
        'title' => 'Tampil Data Transaksi Penerimaan',
        'data_penerimaan' => $this->Zakat_Model->tampiltransaksipenerimaan()
      );
    $data['isi']='zakat/tr_penerimaan';
    $this->load->view('template',$data);

  }

   public function tampiltransaksipenyaluran()
  {
    $data = array(
        'title' => 'Tampil Data Transaksi Penyaluran',
        'data_penyaluran' => $this->Zakat_Model->tampiltransaksipenyaluran()
      );
    $data['isi']='zakat/tr_penyaluran';
    $this->load->view('template',$data);

  }

  public function tampilMustahiq()
  {
    $data = array(
        'title' => 'Tampil Data Mustahiq',
        'data_mustahiq' => $this->Zakat_Model->tampilmustahiq()
      );
    $data['isi']='zakat/mustahiq';
    $this->load->view('template',$data);

  }

  public function insertmuzaki(){
    $post = array(
        'IdMuzaki' => $this->input->post('txtid'),
        'NamaMuzaki' => $this->input->post('txtnama'),
        'TglLahir' => $this->input->post('txttgl'),
        'JenisKelamin' => $this->input->post('sjeniskelamin'),
        'AlamatMuzaki' => $this->input->post('txtalamat'),
        'No_Telp' => $this->input->post('txtnotelp'),
      );
    $simpan = $this->Zakat_Model->insertdata_muzaki($post);
    if ($simpan){
       echo "<script>alert('Data Berhasil di Simpan!.');window.location.href='".base_url('index.php/zakat/tampilmuzaki')."';</script>";
      }else{
        echo "<script>alert('Data Gagal di Simpan!.');window.location.href='".base_url('index.php/zakat/tambahmuzaki')."';</script>";
      }
  }

   public function insertmustahiq(){
    $post = array(
        'IdMustahiq' => $this->input->post('txtid'),
        'NamaMustahiq' => $this->input->post('txtnama'),
        'TglLahir' => $this->input->post('txttgl'),
        'JenisKelamin' => $this->input->post('sjeniskelamin'),
        'Alamat' => $this->input->post('txtalamat'),
        'Pendapatanbulanan' => $this->input->post('txtpendapatan'),
        'IdKategori' => $this->input->post('txtkategori'),
      );
    $simpan = $this->Zakat_Model->insertdata_mustahiq($post);
    if ($simpan){
       echo "<script>alert('Data Berhasil di Simpan!.');window.location.href='".base_url('index.php/zakat/tampilmustahiq')."';</script>";
      }else{
        echo "<script>alert('Data Gagal di Simpan!.');window.location.href='".base_url('index.php/zakat/tambahmustahiq')."';</script>";
      }
  }
 public function insertpenerimaan(){
    $post = array(
        'IdPenerimaan' => $this->input->post('txtid'),
        'IdMuzaki' => $this->input->post('txtidmuzaki'),
        'TglPenerimaan' => $this->input->post('txttgl'),
        'IdJenisZakat' => $this->input->post('sjenis'),
        'Nominal' => $this->input->post('txtnominal'),
      );
    $simpan = $this->Zakat_Model->insertdata_penerimaan($post);
    if ($simpan){
       echo "<script>alert('Data Berhasil di Simpan!.');window.location.href='".base_url('zakat/tampiltransaksipenerimaan')."';</script>";
      }else{
        echo "<script>alert('Data Gagal di Simpan!.');window.location.href='".base_url('zakat/tambahmustahiq')."';</script>";
      }
  }

   public function insertpenyaluran(){
    $post = array(
        'IdPenyaluranZakat' => $this->input->post('txtid'),
        'IdMustahiq' => $this->input->post('txtidmustahiq'),
        'TglPenyaluran' => $this->input->post('txttgl'),
        'Nominal' => $this->input->post('txtnominal'),
        'iduser' => $this->input->post('suser'),
      );
    $simpan = $this->Zakat_Model->insertdata_penyaluran($post);
    if ($simpan){
       echo "<script>alert('Data Berhasil di Simpan!.');window.location.href='".base_url('zakat/tampiltransaksipenyaluran')."';</script>";
      }else{
        echo "<script>alert('Data Gagal di Simpan!.');window.location.href='".base_url('zakat/tambahpenyaluran')."';</script>";
      }
  }


  public function insert()
  {
    $t = explode(".", $_FILES['gambarbarang']['name']);
    $ext = end($t);
    $namabarang = $this->input->post('txtnama');
    $cfgFile = array(
        'file_name' => $namabarang.'.'.$ext,
        'upload_path' => './imgbarang',
        'allowed_types' => 'gift|jpg|png|jpeg',
        'max_size' => 2048
      );
     $this->load->library('upload', $cfgFile);
    if (! $this->upload->do_upload('gambarbarang')){
      echo "<script->alert('Gambar Gagal di upload !');history.go(-1);</script>";
    }else{
      $data = $this->upload->data();
      $barang = array (
          'idbarang' => $this->input->post('txtid'),
          'merk' => $this->input->post('txtnama'),
          'jenis' => $this->input->post('txtjenis'),
          'stok' => $this->input->post('txtstok'),
          'harga' => $this->input->post('txtharga'),
          'gambar' => './imgbarang/'.$data['file_name']
        );
      $simBrg = $this->produk_model->simpanbarang($barang);
      if ($simBrg){
        echo "<script>alert('Gambar Berhasil di Diperbaharui!.');window.location.href='".base_url('Barang/display')."';</script>";
      }else{
        echo "<script>alert('Gambar Gagal di Simpan!.');window.location.href='".base_url('Barang/display')."';</script>";
      }
    }
  }

  public function rubahmuzaki()
  {
    $id = $this->uri->segment(3); //BK001
    $datazakat = $this->Zakat_Model->muzakibyid($id);
    $data = array(
        'title' => 'Rubah Data Muzaki '.$id,
        'data'  => $datazakat
    );
    $data['isi']='zakat/rubah_muzaki';
    $this->load->view('template',$data);
  }

  
  public function updatemuzaki()
  {
    $post = array(
        'NamaMuzaki' => $this->input->post('txtnama'),
        'TglLahir' => $this->input->post('txttgl'),
        'JenisKelamin' => $this->input->post('sjeniskelamin'),
        'AlamatMuzaki' => $this->input->post('txtalamat'),
        'No_Telp' => $this->input->post('txtnotelp'),
      );
    $id = $this->input->post('txtid');
    $rubah = $this->Zakat_Model->update_muzaki($post,$id);
    if ($rubah){
     echo "<script>alert('Data Berhasil di Perbaharui!.');window.location.href='".base_url('index.php/zakat/tampilmuzaki')."';</script>";
      }else{
        echo "<script>alert('Data Gagal di Simpan!.');window.location.href='".base_url('index.php/zakat/rubahmuzaki')."';</script>";
      }
  }

  public function rubahmustahiq()
  {
    $id = $this->uri->segment(3); //BK001
    $datazakat = $this->Zakat_Model->mustahiqbyid($id);
    $data = array(
        'title' => 'Rubah Data Mustahiq '.$id,
        'data'  => $datazakat
    );
    $data['isi']='zakat/rubah_mustahiq';
    $this->load->view('template',$data);
  }

  public function updatemustahiq()
  {
    $post = array(
        'NamaMustahiq' => $this->input->post('txtnama'),
        'TglLahir' => $this->input->post('txttgl'),
        'JenisKelamin' => $this->input->post('sjeniskelamin'),
        'Alamat' => $this->input->post('txtalamat'),
        'Pendapatanbulanan' => $this->input->post('txtpendapatan'),
        'IdKategori' => $this->input->post('txtkategori'),
      );
    $id = $this->input->post('txtid');
    $rubah = $this->Zakat_Model->update_mustahiq($post,$id);
    if ($rubah){
     echo "<script>alert('Data Berhasil di Perbaharui!.');window.location.href='".base_url('index.php/zakat/tampilmustahiq')."';</script>";
      }else{
        echo "<script>alert('Data Gagal di Simpan!.');window.location.href='".base_url('index.php/zakat/rubahmustahiq')."';</script>";
      }
  }


  public function tambahmuzaki()
  {
    $data['title']="tambah muzaki";
    $data['isi']='zakat/form_muzaki';
    $this->load->view('template',$data);
  }

  public function tambahmustahiq()
  {
    $data['title']="tambah mustahiq";
    $data['isi']='zakat/form_mustahiq';
    $this->load->view('template',$data);
  }

   public function tambahpenerimaan()
  {
    $data['title']="tambah penerimaan";
    $data['isi']='zakat/form_trpenerimaan';
    $this->load->view('template',$data);
  }

   public function tambahpenyaluran()
  {
    $data['title']="tambah peyaluran";
    $data['isi']='zakat/form_trpenyaluran';
    $this->load->view('template',$data);
  }

  function deletemuzaki() {
      $id = $this->uri->segment(3);
      $delete = $this->Zakat_Model->deleteMuzaki($id);
      if ($delete) {
        echo "<script>alert('Data Berhasil di Hapus!.');window.location.href='".base_url('index.php/zakat/tampilmuzaki')."';</script>";
      }else{
        echo "<script>alert('Data Gagal di Simpan!.');window.location.href='".base_url('index.php/zakat/tampilmuzaki')."';</script>";
      }
  }

   function deletemustahiq() {  
      $id = $this->uri->segment(3);
      $delete = $this->Zakat_Model->deleteMustahiq($id);
      if ($delete) {
        echo "<script>alert('Data Berhasil di Hapus!.');window.location.href='".base_url('index.php/zakat/tampilmustahiq')."';</script>";
      }else{
        echo "<script>alert('Data Gagal di Simpan!.');window.location.href='".base_url('index.php/zakat/tampilmustahiq')."';</script>";
      }
  }

  function deletetrpenerimaan() {  
      $id = $this->uri->segment(3);
      $delete = $this->Zakat_Model->deletetrpenerimaan($id);
      if ($delete) {
        echo "<script>alert('Data Berhasil di Hapus!.');window.location.href='".base_url('index.php/zakat/tampiltransaksipenerimaan')."';</script>";
      }else{
        echo "<script>alert('Data Gagal di Simpan!.');window.location.href='".base_url('index.php/zakat/tampiltransaksipenerimaan')."';</script>";
      }
  }
function deletetrpenyaluran() {  
      $id = $this->uri->segment(3);
      $delete = $this->Zakat_Model->deletepenyaluran($id);
      if ($delete) {
        echo "<script>alert('Data Berhasil di Hapus!.');window.location.href='".base_url('index.php/zakat/tampiltransaksipenyaluran')."';</script>";
      }else{
        echo "<script>alert('Data Gagal di Simpan!.');window.location.href='".base_url('index.php/zakat/tampiltransaksipenyaluran')."';</script>";
      }
  }


}
?>