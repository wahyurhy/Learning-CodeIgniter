<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngoding extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('wahyurahayu');
    }

    function index() {
        $this->wahyurahayu->nama_saya();
        echo "<br/>";
        $this->wahyurahayu->nama_kamu("Rio");
    }

}