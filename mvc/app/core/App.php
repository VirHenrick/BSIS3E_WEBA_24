<?php

class App
{

    public function_construct()
    {
        echo '<pre>';
        print_r(explode("/", trim($_GET['url'], "/")));
        echo '</pre>';
        
    }
}