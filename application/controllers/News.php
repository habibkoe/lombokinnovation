<?php defined('BASEPATH') OR exit('No direct script access allowed');
          /**
           * Description of News
           *
           * @author Habib Koe Tkj
           */
          class News extends CI_Controller
          {
                    
                    public function __construct()
                    {
                              parent::__construct();
                    }
                    
                    public function index()
                    {
                              $this->load->view('layout/main');
                              $this->load->view('news/index');
                    }
          }
          