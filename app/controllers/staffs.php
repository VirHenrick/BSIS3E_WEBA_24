<?php

class staffs extends controller 
{

    
    public function index()
    {

        if(!Auth::logged_in()) 
        {

            redirect('login');

        }



        $stockModel = new stock();
        $stockRows = $stockModel->findAll();

        $salesModel = new sale(); 
        $salesRows = $salesModel->findAll();

        $this->view('staffs/staff', [
            'stocks' => $stockRows,
            'sales' => $salesRows
        ]);
    }


    public function create()
    {

        if(!Auth::logged_in()) 
        {

            redirect('login');

        }

         $x = new sale();

        if(count($_POST) > 0){
            
            $x->insert($_POST);

            redirect('staffs');

        }
        $this->view('staffs/create');
    }

}