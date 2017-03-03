<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(
			'nama' => "Dewa Ramadhani Hermansyah Putra",
			'kampus' => "Politeknik Negeri Malang",
			'jurusan' => "Teknologi Informasi",
			'nim' => "1541180115",
			'kelas' => "TI-2C",
			'alamat' => "Pakis, Malang",
			'nomer' => "082257482797",
			'email' => "dewakolonis@gmail.com",
			'hobby1' => "Futsal",
			'hobby2' => "Bermain Drum",
			);
		$this->load->view('about', $data);	
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */

?>