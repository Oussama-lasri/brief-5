<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        
      ];
     
      $this->view('pages/index', $data);
    }

    public function Blog(){
      $data = [
        
      ];

      $this->view('pages/Blog', $data);
    }
    public function ContactUs(){
      $data = [
        
      ];

      $this->view('pages/ContactUs', $data);
    }
    public function Features(){
      $data = [
        
      ];

      $this->view('pages/Features', $data);
    }
    public function NewArrival(){
      $data = [
        
      ];

      $this->view('pages/NewArrival', $data);
    }
  }