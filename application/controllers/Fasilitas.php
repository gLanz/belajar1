<?php
// nama file Fasilitas.php
// lokasi /application/controllers/Fisiltas.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {
	public function index()
	{
		$this->load->view('fasilitasview.php');
	}
}
