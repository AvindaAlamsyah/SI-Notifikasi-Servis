<?php

/**
 * 
 */
class MDaftar_Servis extends CI_Model
{
	
	function cekPelanggan($where){
		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->where($where);
		$query = $this->db->get();

		if ($query->num_rows() == 0) {
			return TRUE;
		}else{
			return $query->row();
		}
	}

	function cekRiwayat($where){
		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->join('service','pelanggan.idPelanggan = service.Pelanggan_idPelanggan');
		$this->db->where($where);
		$query = $this->db->get();

		if ($query->num_rows() == 0) {
			return TRUE;
		}else{
			return $query->result();
		}
	}

	function simpanDataPelanggan($data){
		$this->db->insert('pelanggan',$data);
		$id = $this->db->insert_id();

		return (isset($id)) ? $id : FALSE;
	}

	function simpanDataServis($data){
		$this->db->insert('service',$data);

		return TRUE;
	}
    
    function smsgateway($phone,$pesan){
		$ch = curl_init('https://semysms.net/api/3/sms.php');
		$post = array(
  				'phone' => '+62'.$phone,
  				'msg' => $pesan,
 				'device' => 102071,  //  Device code
 				'token' => '4ab1b3e2cf37771a686cf4ce8ef97264'
 			);

		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}

    function get_data_idpelanggan($AMBIL_NAMA,$tell){
		$query = $this->db->query("SELECT * FROM pelanggan WHERE namaPelanggan = '$AMBIL_NAMA' AND noTelp='$tell'");
		return $query->result_array();
	}
    
    function get_data_keluhan($AMBIL_ID,$date){
		$query = $this->db->query("SELECT * FROM service WHERE Pelanggan_idPelanggan = '$AMBIL_ID' AND tanggalMasuk='$date'");
		return $query->result_array();
	}
}

?>