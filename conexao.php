<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$con = new mysqli("localhost","usuario","senha","sistemasdepedidos");
    //("localhost", "usuario", "senha", "banco")
    
    if($con->connect_error){
        echo 'erro ao conectar';
    }

