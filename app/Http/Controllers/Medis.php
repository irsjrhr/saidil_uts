<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Medis extends Controller{

	private $db;

	public function __construct(){
		$this->db = DB::table('data_rekam');

	}
	public function index(){	

		if ( !session('login') ) {

			session()->flash('flasher', "Kamu belum login bre!");
			return redirect('/login');

		}


		$data_rekam = $this->db->get()->map(function($item) {
			return (array) $item; // Mengonversi setiap objek menjadi array asosiatif
		})->toArray();

		$row_update = [];
		if ( isset($_GET['action']) ) {
			$id_pasien = $_GET['id_pasien'];
			$data_rekam = $this->db->where('id_pasien', $id_pasien)->get()->map(function($item) {
				return (array) $item; // Mengonversi setiap objek menjadi array asosiatif
			})->toArray();

			if ( !empty($data_rekam) ) {
				$row_update = $data_rekam[0];
			}

		}

		$data = [];
		$data['data_rekam']	= $data_rekam;
		$data['row_update']	= $row_update;
		return view('rekam', $data);
	}
	public function tambah(){

		if ( isset($_POST['submit']) ) {

			$nama_pasien = htmlspecialchars($_POST['nama_pasien']);
			$diagnosa = htmlspecialchars($_POST['diagnosa']);
			$dokter = htmlspecialchars($_POST['dokter']);
			$waktu_kunjungan = htmlspecialchars($_POST['waktu_kunjungan']);
			$waktu = date('d-m-y');

			$row_new = [
				"id_pasien" => null,
				"nama_pasien" => $nama_pasien,
				"diagnosa" => $diagnosa,
				"dokter" => $dokter,
				"waktu_kunjungan" => $waktu_kunjungan,
				"waktu" => $waktu,
			];

			$tambah = $this->db->insert( $row_new );
			if ( $tambah == true ) {
				$msg =  "Berhasil menambahkan data";
			}else{
				$msg = "Gagal menambahkan data masalah di query";
			}

			//Response validasi 
			session()->flash('flasher', 'Data pasien berhasil ditambahkan');
			return redirect('/');
		}

	}
	public function update(){

		if ( isset($_GET['id_pasien']) ) {
			$id_pasien= htmlspecialchars($_GET['id_pasien']);

			$nama_pasien = htmlspecialchars($_POST['nama_pasien']);
			$diagnosa = htmlspecialchars($_POST['diagnosa']);
			$dokter = htmlspecialchars($_POST['dokter']);
			$waktu_kunjungan = htmlspecialchars($_POST['waktu_kunjungan']);
			$waktu = date('d-m-y');

			$row_update = [
				"nama_pasien" => $nama_pasien,
				"diagnosa" => $diagnosa,
				"dokter" => $dokter,
				"waktu_kunjungan" => $waktu_kunjungan,
				"waktu" => $waktu,
			];

			$update = $this->db
			->where('id_pasien', $id_pasien)
			->update( $row_update );

			if ( $update == true ) {
				$msg =  "Berhasil menambahkan data";
			}else{
				$msg = "Gagal menambahkan data masalah di query";
			}

			//Response validasi 
			session()->flash('flasher', $msg);
			return redirect('/');
		}

	}
	public function hapus(){
		if ( isset($_GET['id_pasien']) ) {
			$id_pasien = htmlspecialchars($_GET['id_pasien']);
			$hapus = $this->db
			->where('id_pasien', $id_pasien)
			->delete();

			if ( $hapus == true ) {
				$msg =  "Berhasil mengupdate data";
			}else{
				$msg = "Gagal mengupdate data masalah di query";
			}

			session()->flash('flasher', $msg);
			return redirect('/');;
		}
	}



}
