<?php
// controllers/Hubungi.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	public function index()
	{
		$this->load->view('beritaview.php');
	}
}
