<?php
class init extends CI_Model{ 

	function init()
	{
		parent::__construct();
	}
	function getLasturl(){
		/*$controllername = $this->router->fetch_class(); 
		$ROLE=$this->session->userdata('ROLE');
		$query=$this->db->query("select id from t_menu where url='$controllername'");
		if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil= $data->id;
            }
			$data=array('id_session_menu'=>$hasil);
            $this->session->set_userdata($data);
			}*/
		} 
	function get_otoritas_menu(){
		$role=$this->session->userdata('ROLE');
		$id_session_menu=$this->session->userdata('id_session_menu') ;
		$query=$this->db->query("select count(1) as jumlah from t_otoritas where role='$role' and menu='$id_session_menu'");
 		if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil= $data->jumlah;
		    }
		}
		$this->get_otor_button();
		return $hasil;
	}	
	function get_otor_button(){
		$role=$this->session->userdata('ROLE');
		$id_session_menu=$this->session->userdata('id_session_menu') ;
		$query=$this->db->query("select * from t_otoritas where role='$role' and menu='$id_session_menu'");
  		if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
 				$data=array(
						'AKSI_TAMBAH'=>$data->tambah,
						'AKSI_UBAH'=>$data->ubah,
						'AKSI_HAPUS'=>$data->hapus,
						'AKSI_CETAK'=>$data->cetak						
				);
				$this->session->set_userdata($data);
            }
		}
 	}	
 	
}
 
?>