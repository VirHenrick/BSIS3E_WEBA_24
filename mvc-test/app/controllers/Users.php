<?php

class Users extends controller
{
    
    public function index()
    {
        $user = new User();

        if (isset($_POST['btnSubmit'])) {

            $arr['firstname'] = $_POST['firstname'];
            $arr['lastname'] = $_POST['lastname'];
            $arr['email'] = $_POST['email'];
            $arr['password'] = $_POST['password'];

            $user->insert($arr);

        }
        
        $this->view('users');
    }
}