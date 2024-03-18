<?php
class Home extends Controller
{
  public function index()
  {
    $user = new User();
    $arr['firstname'] = 'jhay arron';
    $data = $user->findAll($arr);
    show($data);

    $this->view('home');
  }
}