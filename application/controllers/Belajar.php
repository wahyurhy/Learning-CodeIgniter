<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('html');
        $this->load->model('m_data');
    }

    public function index() {
        $data = array(
            'judul' => "Cara Menggunakan Helper HTML Pada CodeIgniter",
            'tutorial' => "CodeIgniter"
        );
        $this->load->view('ngoding/view_belajar', $data);
    }

    public function halo() {
        // $data['nama_web'] = "WahyuRahayu.com";
        $data = array(
            'judul' => "Cara Membuat View Pada CodeIgniter",
            'tutorial' => "CodeIgniter"
        );
        $this->load->view('ngoding/view_belajar', $data);
    }

    function user() {
        $data['user'] = $this->m_data->ambil_data()->result();
        $this->load->view('v_user.php', $data);
    }

}