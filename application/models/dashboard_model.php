<?php
class dashboard_model extends CI_Model{ 

	function dashboard_model()
	{
		parent::__construct();
	}
	function getdata($limit='',$offset=''){
		$key=$this->input->post('key');
		$query=$this->db->query("select * from negara  where 
			nicename like'%$key%'
			or iso3 like'%$key%'
			or numcode like'%$key%'
			or phonecode like'%$key%'
			order by id ASC LIMIT $limit,$offset");
 			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$menus[]=$data;
				}
				return $menus;
			}
	}
	function count($id=''){		 
		$key=$this->input->post('key');
		$query=$this->db->query("select count(1) as jumlah from negara where nicename like'%$key%'
			or iso3 like'%$key%'
			or numcode like'%$key%'
			or phonecode like'%$key%'	
			");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$jumlah=$data->jumlah;
 				}
				return $jumlah;
			}
	}
	 
 
	
}
 
?>