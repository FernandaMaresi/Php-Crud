<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <form action="exibir-dados.php" class="formulario" method="post"> 
        <p> Formulario Cliente</p>
        
        <div class="field">
            <label for="nome">Seu Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome*" required>
        </div>

        <div class="field">
            <label for="email">Seu E-Mail:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu E-Mail*" required>
        </div>        
        <div class="field">
            <label for="nome">CPF:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu CPF" required>
        </div>

        <input type="submit" name="acao" value="Enviar">
    </form>


    </body>
</html>
