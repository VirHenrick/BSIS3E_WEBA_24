<?php

class sales extends controller 
{

    //DISPLAY YUNG PAGE
    public function index()
    {

        if(!Auth::logged_in()) 
        {

            redirect('login');

        }

        $x = new sale();
        $rows = $x->findAll();

        $this->view('sales/index', [ 
            'sales' => $rows
        ]);
    }



    //CREATE
    public function create()
    {

        if(!Auth::logged_in()) 
        {

            redirect('login');

        }

         $x = new sale();

        if(count($_POST) > 0){
            $x->insert($_POST);
            
            redirect('sales');

        }
        $this->view('sales/create');
    }

}