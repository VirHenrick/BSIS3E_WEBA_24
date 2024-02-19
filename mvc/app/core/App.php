<?php

class App
{

    public function_construct()
    {
        $url = $this->splitURL();

        echo '<pre>';
        print_r();
        echo '</pre>';
    }

    private function splitURL()
    {
        if (isset($_GET['url'])){
        $url = explode("/", trim($_GET['url'], "/"));
        return $url;
        }       
    }
}