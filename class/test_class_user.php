<?php
session_start(); 
include '../config.php';
include 'class_user.php';

$user1 =  new user($bdd, session_id());
echo "id : ".$user1->getId()."<br>";
echo "id session :".$user1->getIdSession()."<br>";


































?>