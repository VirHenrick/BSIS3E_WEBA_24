<?php
class Home extends Controller
{
  public function index()
  {
    $model = new Model();
    $arr['firstname'] = '';
    $data = $model->where($arr);
    $data = $model->findAll();
    show($data);

    $this->view('home');
  }
}