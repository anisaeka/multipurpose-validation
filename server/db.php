<?php

$connect = mysqli_connect('localhost', 'root', '', 'validation');

if(!$connect){
    die ('<div class="alert alert-danger" role="alert">
        This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>');
}