<?php
class App
{
  public function __construct()
  {
    print_r(explode("/",$_GET['url1']));
    echo '</pre>'
  }
}