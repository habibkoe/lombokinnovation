<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Home
 *
 * @author Habib Koe Tkj
 */
class Home extends CI_Controller {

          public function __construct() {
                    parent::__construct();
          }

          public function index() {
                    $this->load->view('layout/main');
                    $this->load->view('index');
          }

}
