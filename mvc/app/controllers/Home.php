<?php

class Home extends Controller
{
    public function index()
    {
        $model = new Model();
        $arr['lastname'] = 'Tagulao';
        $data = $model->where($arr);
        show($data);

       $this->view('home');
    } 
}