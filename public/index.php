<?php 
    
    foreach (glob('../src/*.php') as $filename){
        include $filename;
    }


    $route = new Route();

    $route->add('/', 'Home');
    $route->add('/about', 'About');
    $route->add('/contact', 'Contact');

    $route->submit();

 ?>