<?php
class HomeController extends Controller
{
  public function __construct()
  {
    CheckIsNotLogin();
  
}
public function index()
  {
    $this->view('home');
  }
}