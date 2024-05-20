<?php 

class createusers extends Controller 
{

  public function index(){

     if(!Auth::logged_in()) 
     {

         redirect('login');

     }


    $users = new User();
    $rows = $users->findAll();

    $this->view('creates/index', [
      'rows' => $rows
    ]);
  }

  public function create()
  {
    if(!Auth::logged_in()) {
    redirect('login');
    }

     $errors = [];
    $users = new User();

    if(count($_POST) > 0){

      if($users->validate($_POST)){

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $_POST['token'] = random_string(60);

        $users->insert($_POST);

        redirect('createusers');
      } else {
        $errors = $users->errors;
      }
    }
    $this->view('creates/createuser', [
      'errors' => $errors
    ]);
  }

  public function edit($id)
{
  if(!Auth::logged_in()) {
    redirect('login');
  }

  $users = new User();
  $arr['id'] = $id;
  $row = $users->first($arr);

  if(count($_POST) > 0) {
    $users->update($id, $_POST);

    redirect('createusers');
  }

  $this->view('creates/edituser', [
    'users' => $row
  ]);
}

  public function delete($id)
{

  if(!Auth::logged_in()) {
    redirect('login');
  }

  $users = new User();
  $arr['id'] = $id;
  $row = $users->first($arr);

  if(count($_POST) > 0) {
    $users->delete($id);

    redirect('createusers');
  }

  $this->view('creates/deleteuser', [
    'users' => $row
  ]);
  }
}