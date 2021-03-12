<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once("conexao.php");

$result = $con->query("SELECT * FROM cliente ORDER BY id");
while ($row=$result->fetch_array()){
    echo $row['id'].",".$row['cpf'].",".$row['nome'].$row['sobrenome']."<br>";
}