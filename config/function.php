<?php

function __autoload($classname) {
  if ( is_array($classname) ) {
    foreach ($classname as $class) {
      if ( file_exists(APP."libs/". $class .".php") ) {
        include_once(APP."libs/". $class .".php");
      } elseif ( file_exists("../libs/". $class .".php")) {
        include "../app/libs/". $class .".php";
      }

    }
  } else {
    if ( file_exists(APP."libs/". $classname .".php") ) {
      include_once(APP."libs/". $classname .".php");
    } elseif (file_exists("../libs/". $classname .".php")) {
      include "../app/libs/". $classname .".php";
    }
  }
}

function view($page)
{
  // echo DIR;
  include DIR.'public/views/'. $page .'.php';
}

function return_json($data){

  header('Content-Type: application/json');
  echo json_encode($data);
}

function app($name) {
  include 'app.php';

  if ( isset($app[$name]) ) {
    return $app[$name];
  }
  return 0;
}