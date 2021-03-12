<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once ("conexao.php");
$id=5; //;$_POST['id'];
$result = $con->query("UPDATE cliente SET nome='Fernanda' WHERE id='$id' ");