<form action="index.php" class="formulario" method="post"> 
        <p> Formulário Pedidos</p>
        
        <div class="field">
            <label for="ped">Data do pedido:</label>
            <input type="text" id="ped" name="nome" placeholder="Data do pedido" required>
        </div>
         <div class="field">
            <label for="id_cliente">Id CLiente:</label>
            <input type="number" id="id_cliente" name="cod" placeholder="Digite o codigo do cliente " required>
        </div>

        <input type="submit" name="acao" value="Enviar">
        <button class="botao" alt="Voltar">Voltar</button>
    </form>