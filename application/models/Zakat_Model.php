<?php
	class Zakat_Model extends CI_Model{

		// public $table_admin='tbuser';
		function __construct()
		{
			parent::__construct();
		}

   		function validate_login($username,$password)
		{
			$this->db->where('username', $username);
			$this->db->where('username', $username);
			$this->db->where('password', md5($password));
			$query = $this->db->get('tbuser');

			// MEMBUAT SESSION
			if ($query->num_rows() == 1) {
				$row = $query->row(); 
					$data = array (
							'IDUSER' 		=> 	$row->iduser,
							'USERNAME'		=>	$row->username,
							'PASSWORD'		=> 	$row->password,
							'NAMA_LENGKAP'	=> 	$row->NamaLengkap,
							'LEVEL'			=>	$row->Level
						);
					
				return true;
			} else {
				return false;
			}
		}

		function validate_password($old_password, $new_password)
		{
			$data = array(
	           'password' => md5($new_password)
	        );
			$this->db->where('password', md5($old_password));
			$query = $this->db->get('tbuser');
			if ($query->num_rows() == 1) {
				$this->db->update('tbuser', $data);
				$this->session->unset_userdata('IDUSER');
		 		$this->session->unset_userdata('USERNAME');
		 		$this->session->unset_userdata('PASSWORD');
		 		$this->session->unset_userdata('NAMA_LENGKAP');
		 		$this->session->unset_userdata('LEVEL');
				return true;
			} else {
				return false;
			}
		}


       function tampilmuzaki(){
		$query = $this->db->get('tbmuzaki');

				 $this->db->select('IdMuzaki, NamaMuzaki, TglLahir,JenisKelamin, AlamatMuzaki, No_Telp');
				 $this->db->from('tbmuzaki');
		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->result();
		}else{
			return false;
		}
	}

	function insertdata_muzaki($data)
	{
		$query = $this->db->insert('tbmuzaki',$data);
		return $query;
	}

	function insertdata_mustahiq($data)
	{
		$query = $this->db->insert('tbmustahiq',$data);
		return $query;
	}

	function insertdata_penerimaan($data)
	{
		$query = $this->db->insert('tbpenerimaanzakat',$data);
		return $query;
	}

	function insertdata_penyaluran($data)
	{
		$query = $this->db->insert('tbpenyaluranzakat',$data);
		return $query;
	}
	function tampilmustahiq(){
		$query = $this->db->get('tbmustahiq');

				 $this->db->select('IdMustahiq, NamaMustahiq, TglLahir,JenisKelamin, Alamat,Pendapatanbulanan,IdKategori');
				 $this->db->from('tbmustahiq');
		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->result();
		}else{
			return false;
		}
	}


	function tampiltransaksipenerimaan(){

  	$this->db->select('*');
    $this->db->from('tbpenerimaanzakat');
    $this->db->join('tbdetailpenerimaan','tbpenerimaanzakat.IdPenerimaan=tbdetailpenerimaan.IdPenerimaan','left');
    $this->db->join('tbjeniszakat','tbdetailpenerimaan.IdJenisZakat=tbjeniszakat.IdJenisZakat','left');
    $query=$this->db->get();
    if ($query->num_rows() > 0)
{
	return $query->result();

  }else{
  	return false;
  }
}

	function tampiltransaksipenyaluran(){

  	$this->db->select('*');
    $this->db->from('tbpenyaluranzakat');
    $query=$this->db->get();
    if ($query->num_rows() > 0)
{
	return $query->result();

  }else{
  	return false;
  }
}

	function muzakibyid($id)
	{
		$query =$this->db->select('*')
						 ->from('tbmuzaki')
						 ->where('IdMuzaki', $id)
						 ->get();

		if ($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function update_muzaki($data, $id)
	{
		$update = $this->db->update('tbmuzaki',$data,
					array('IdMuzaki' => $id));
		return $update;
	}	
		function mustahiqbyid($id)
	{
		$query =$this->db->select('*')
						 ->from('tbmustahiq')
						 ->where('IdMustahiq', $id)
						 ->get();

		if ($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function update_mustahiq($data, $id)
	{
		$update = $this->db->update('tbmustahiq',$data,
					array('IdMustahiq' => $id));
		return $update;
	}	

		function get_all_date(){
			$this->db->where('stok > 0');
			$query = $this->db->get('tbbarang');
			$this->db->order_by('idbarang','DESC');
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return FALSE;
			}
		}

		function simpanbarang($data){
			$insert = $this->db->insert('tbbarang', $data);
			return $insert;
		}

		function deleteMuzaki($id)
		{
			$this->db->where('IdMuzaki', $id);
			$delete = $this->db->delete('tbmuzaki');
			return $delete;
		}

		function deleteMustahiq($id)
		{
			$this->db->where('IdMustahiq', $id);
			$delete = $this->db->delete('tbmustahiq');
			return $delete;
		}

		function deletepenerimaan($id)
		{
			$this->db->where('IdPenerimaanZakat', $id);
			$delete = $this->db->delete('tbpenerimaanzakat');
			return $delete;
		}

		function deletepenyaluran($id)
		{
			$this->db->where('IdPenyaluranZakat', $id);
			$delete = $this->db->delete('tbpenyaluranzakat');
			return $delete;
		}
	}

?>



