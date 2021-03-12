<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require ("conexao.php");
$cpf = "123456789";
$nome = "Fernanda";
$sobrenome = "Maresi";
$stmt = $con->prepare("INSERT INTO cliente(cpf, nome,sobrenome) VALUES(?,?,?)");
$stmt->bind_param('sss',$cpf,$nome,$sobrenome);
$stmt->execute();

