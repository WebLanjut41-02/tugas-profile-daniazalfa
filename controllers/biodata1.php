<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Biodata1 extends CI_Controller {
                public function __construct()
                {
                                parent::__construct();
                }
                public function index()
                {
                                $this->load->view('biodata');

                }
                
}