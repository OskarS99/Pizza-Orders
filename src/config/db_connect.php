<?php 
$conn = mysqli_connect('localhost', 'oskar99', 'Piolop#12', 'pizzas');

if(!$conn){
    echo 'Connection error:' . mysqli_connect_error();
}?>