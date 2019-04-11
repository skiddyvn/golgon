<?php
   session_start();
   require('config/connection.php');
   
   require_once('models/ProductDAO.php');
   require_once('models/UserDAO.php');
   require_once('models/OrderDAO.php');
   require_once('models/Product.php');
   require_once('models/User.php');
   require_once('models/Order.php');
   require_once('models/Comment.php');
   
   $url = rtrim(isset($_GET['url']) ? $_GET['url'] : null,DIRECTORY_SEPARATOR);
   
   $url_array = explode('/',$url);
   
   $controller = !empty($url_array[0]) ? $url_array[0] : "Home";
   $action     = isset($url_array[1])  ? $url_array[1] : "start";
   $parameter  = isset($url_array[2])  ? $url_array[2] : null;
   
   $fileName = 'controllers/'.$controller.'Controller.php';
   
   if(file_exists($fileName)) {
       include($fileName);
       $className = ucfirst($controller).'Controller';
       $object = new $className;
       if(!method_exists($object, $action)) {
           require('404.php');
       } else {
           if (!empty($parameter)) {
               $object->$action($parameter);
           } else {
               $object->$action();
           }
       }
   } else {
       require('404.php');
   }