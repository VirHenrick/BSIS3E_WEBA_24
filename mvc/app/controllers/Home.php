<?php

class Home extends Controller
{
    public function index()
    {
        $model = new Model();
        $arr['firstname'] = 'Erwingit';
        $data = $model->where($arr);
        show($data);

       $this->view('home');
    } 
}