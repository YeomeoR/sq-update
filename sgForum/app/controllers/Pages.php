<?php
  class Pages extends Controller {
    public function __construct(){
    }
    public function index(){ 
      if(isLoggedIn()){
        redirect('/posts');
      }


      $data = [
        'title' => 'Square Gain Forum and Docs',
        'description' => 'SG documents and media plus Forum for users'
     ];
      $this->view('pages/index', $data);
    }
    public function about(){
      $data = [
        'title' => 'About',
        'description' => 'Sharing'
      ];
      $this->view('pages/about', $data);
    }
  }