<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Daftar_Servis extends CI_Controller
{

	function __construct(){
		parent::__construct();

		//$this->load->model('MLogin');
		$this->load->model('MDaftar_Servis');
	}
	
	public function index()
	{
		if ($this->session->userdata('user') != null) {
			$this->load->view('VDaftar_Servis');
		}else{
			redirect('Login');
		}
	}

	public function riwayat()
	{
		$where = array(
				'namaPelanggan' => $this->input->post('nama'),
				'noTelp' => $this->input->post('noTelp'),
				'statusService' => 'Selesai'
			);
		$queryRiw = $this->MDaftar_Servis->cekRiwayat($where);
		echo json_encode($queryRiw);
	}

	public function daftar()
	{
        $date=date('Y-m-d');
		$daftar = array(
				'kategoriBarang' => $this->input->post('kategori'),
				'modelBarang' => $this->input->post('model'),
				'kelengkapanBarang' => $this->input->post('kelengkapan'),
				'keluhan' => $this->input->post('keluhan'),
				'estimasiHarga' => $this->input->post('perkiraan'),
				'Pelanggan_idPelanggan' => '',
				'Admin_idAdmin' => $this->session->userdata('id'),
				'tanggalMasuk' => $date,
				'statusService' => 'Belum'
			);

		$AMBIL_NAMA = $this->input->post('nama');
        $phone = $this->input->post('noTelp');
        $AMBIL_modelBarang_SERVICE = $this->input->post('model');
        $AMBIL_keluhan_SERVICE = $this->input->post('keluhan');


		$where = array(
				'namaPelanggan' => $this->input->post('nama'),
				'noTelp' => $this->input->post('noTelp')
				);

		$queryPel = $this->MDaftar_Servis->cekPelanggan($where);

		if ($queryPel !== TRUE) {
			$idPel = $queryPel->idPelanggan;

			if ($idPel !== null) {
				$daftar['Pelanggan_idPelanggan'] = $idPel;

				$querySer = $this->MDaftar_Servis->simpanDataServis($daftar);

				if ($querySer == TRUE) {
					$this->session->set_flashdata('errors','<div class="alert alert-success">Data servis berhasil disimpan</div>');

					$CEK_DATA_PELANGGAN=$this->MDaftar_Servis->get_data_idpelanggan($AMBIL_NAMA,$phone);
            		$cekidpelanggan=$CEK_DATA_PELANGGAN[0]['idPelanggan'];
            		$CEK_DATA_KELUHAN=$this->MDaftar_Servis->get_data_keluhan($cekidpelanggan,$date);
					$AMBIL_ID_SERVICE=$CEK_DATA_KELUHAN[0]['idService'];
            
			
    				$pesan= "HY ".$AMBIL_NAMA." BARANG DENGAN NAMA ".$AMBIL_modelBarang_SERVICE." DENGAN KELUHAN ".$AMBIL_keluhan_SERVICE." SUDAH MASUK DALAM ANTRINAN. ID SERVICE : ".$AMBIL_ID_SERVICE;
					$kirimsms=$this->MDaftar_Servis->smsgateway($phone,$pesan);
					
					redirect('Daftar_Servis');
				}else{
					$this->session->set_flashdata('errors','<div class="alert alert-warning">Data servis tidak tersimpan bro</div>');
					redirect('Daftar_Servis');
				}
			}else{
				$this->session->set_flashdata('errors','<div class="alert alert-warning">Gagal ambil nilai ID</div>');
				redirect('Daftar_Servis');
			}

		}else{
			$idPel = $this->MDaftar_Servis->simpanDataPelanggan($where);

			if ($idPel !== FALSE) {
				$daftar['Pelanggan_idPelanggan'] = $idPel;

				$querySer = $this->MDaftar_Servis->simpanDataServis($daftar);

				if ($querySer == TRUE) {
					$this->session->set_flashdata('errors','<div class="alert alert-success">Data servis berhasil disimpan</div>');
            
			$CEK_DATA_PELANGGAN=$this->MDaftar_Servis->get_data_idpelanggan($AMBIL_NAMA,$phone);
            $cekidpelanggan=$CEK_DATA_PELANGGAN[0]['idPelanggan'];
            $CEK_DATA_KELUHAN=$this->MDaftar_Servis->get_data_keluhan($cekidpelanggan,$date);
			$AMBIL_ID_SERVICE=$CEK_DATA_KELUHAN[0]['idService'];
            
			
    		$pesan= "HY ".$AMBIL_NAMA." BARANG DENGAN NAMA ".$AMBIL_modelBarang_SERVICE." DENGAN KELUHAN ".$AMBIL_keluhan_SERVICE." SUDAH MASUK DALAM ANTRINAN. ID SERVICE : ".$AMBIL_ID_SERVICE;
			$kirimsms=$this->MDaftar_Servis->smsgateway($phone,$pesan);

                   // var_export($AMBIL_ID_SERVICE);
					redirect('Daftar_Servis');
				}else{
					$this->session->set_flashdata('errors','<div class="alert alert-warning">Data servis tidak tersimpan bro</div>');
					redirect('Daftar_Servis');
				}
			}else{
				$this->session->set_flashdata('errors','<div class="alert alert-warning">Data pelanggan tidak tersimpan</div>');
				redirect('Daftar_Servis');
			}

		}
           
	}
}