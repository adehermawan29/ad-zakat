<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('produk_model');
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
        echo "<script>alert('Gambar Berhasi di Simpan!.');window.location.href='".base_url('Barang/display')."';</script>";
      }else{
        echo "<script>alert('Gambar Gagal di Simpan!.');window.location.href='".base_url('Barang/display')."';</script>";
      }
    }
  }
  public function tambah()
  {
    $data['title']="tambah Produk";
    $data['isi']='produk/form';
    $this->load->view('template',$data);
  }

}