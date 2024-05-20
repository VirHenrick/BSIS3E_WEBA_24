<?php

class stocks extends controller
{

    public function index()
    {

        if(!Auth::logged_in()) 
        {

            redirect('login');

        }



        $x = new stock();
        $rows = $x->findAll();

        $this->view('stocks/index', [
            'stocks' => $rows
        ]);
    }

    public function create()
    {

        if(!Auth::logged_in()) 
        {

            redirect('login');

        }

         $x = new stock();

        if(count($_POST) > 0) {

            $x->insert($_POST);

            redirect('stocks');

        }
        $this->view('stocks/create');
    }

        public function edit($id)
        {

            if(!Auth::logged_in()) 
        {

            redirect('login');

        }

            $x = new stock();
            $arr['id'] = $id;
            $row = $x->first($arr);

            if(count($_POST) > 0){
            
            $x->update($id, $_POST);

            redirect('stocks'); 
            }

            $this->view('stocks/edit', [
                'stock' => $row
            ]);
        }
        
        public function delete($id)
        {

            if(!Auth::logged_in()) 
        {

            redirect('login');

        }

            $x = new stock();
            $arr['id'] = $id;
            $row = $x->first($arr);

            if(count($_POST) > 0){

                $x->delete($id);
            redirect('stocks');
            }
 
            $this->view('stocks/delete', [
                'stock' => $row
            ]);
        }

    }

