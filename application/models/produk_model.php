<?php
	class produk_model extends CI_Model{
		
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
	}
?>



