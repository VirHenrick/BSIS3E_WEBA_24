<?php

class Tasks extends controller
{

  public function index()
    {
        $x = new Task();
        
        $rows = $x->findAll();

        $this->view('tasks/index', [
            'tasks' => $rows
        ]);
    }

    public function create(){
    
      $x = new Task();
      
      if(isset($_POST['create'])) {
          $arr['task_name'] = $_POST['task_name'];
          $arr['task_description'] = $_POST['task_description'];
          $arr['task_status'] = $_POST['task_status'];
          $arr['task_due'] = $_POST['task_due'];
  
          $x->insert($arr);
  
          redirect('tasks');
      }
  
          $this->view('tasks/create');
         }

         public function edit($id) {
          $x = new Task();
          $arr['id'] = $id;
          $row = $x->first($arr);
  
          if (isset($_POST['update'])) {
  
              $arr['task_name'] = $_POST['task_name'];
              $arr['task_description'] = $_POST['task_description'];
              $arr['task_status'] = $_POST['task_status'];
              $arr['task_due'] = $_POST['task_due'];
  
              $x->update($id, $arr);
  
              redirect('tasks');
          }
  
          $this->view('tasks/edit', [
              'task' => $row
          ]);
      }

      public function delete($id)
    {
        $x = new Task();
        $arr['id'] = $id;
        $row = $x->first($arr);

        if (isset($_POST['delete'])){
            $x->delete($id);
            redirect('tasks');
        }

        $this->view('tasks/delete', [
            'row' => $row
        ]);
    }


}