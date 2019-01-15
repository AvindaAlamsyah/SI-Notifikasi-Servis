<?php
/**
 * 
 */
class MDashboard extends CI_Model
{
	function tampilData(){
		/*$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->join('service','pelanggan.idPelanggan = service.Pelanggan_idPelanggan');
		$this->db->where('statusService !=','Selesai');
		$query = $this->db->get();*/

		$query = $this->db->query("SELECT * FROM pelanggan JOIN service WHERE pelanggan.idPelanggan = service.Pelanggan_idPelanggan AND statusService != 'Selesai' AND statusService != 'Batal'");

		return $query->result();
	}

	function updateSelesai($where){
		$this->db->set('statusService','Selesai');
		$this->db->set('tanggalSelesai',date('Y-m-d'));
		$this->db->where($where);
		$query = $this->db->update('service');

		return $query;
	}

	function updateData($where, $data1, $data2, $data3){
		//$this->db->set($data);
		//$this->db->where($where);
		//$query = $this->db->update('service',$data);

		$query = $this->db->query("UPDATE service SET kerusakan='$data1', statusService='$data2', biaya='$data3' WHERE idService='$where'");
		return $query;
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
    	function get_data_idpelanggan($ID){
		$query = $this->db->query("SELECT * FROM pelanggan WHERE idPelanggan = '$ID'");
		return $query->result_array();
	}
        	function get_data_keluhan($AMBIL_ID){
		$query = $this->db->query("SELECT * FROM service WHERE idService = '$AMBIL_ID'");
		return $query->result_array();
	}
    	


	function tampilMenKod($where){
		$this->db->select('*');
		$this->db->from('service');
		$this->db->where($where);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil = array(
						'idService' => $data->idService,
						'modelBarang' => $data->modelBarang,
						'kerusakan' => $data->kerusakan,
						'statusService' => $data->statusService,
						'biaya' => $data->biaya
				);
			}
			return $hasil;
		}

	}
	
	

}
?>