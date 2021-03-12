<form action="index.php" class="formulario" method="post"> 
        <p> Formulário Produtos</p>
        
        <div class="field">
            <label for="nome">Produto:</label>
            <input type="text" id="nome" name="nome" placeholder="Produto">
        </div>
         <div class="field">
            <label for="cod">Codigo de Barras:</label>
            <input type="number" id="cod" name="cod" placeholder="Codigo de Barras">
        </div>
        <div class="field">
            <label for="valor">Valor unitário:</label>
            <input type="number" id="valor" name="cod" placeholder="Valor ">
        </div>
        <div class="field">
            <label for="qtd">Quantidade:</label>
            <input type="number" id="qtd" name="cod" placeholder="Digite o código">
        </div>
        <input type="submit" name="acao" value="Enviar">
        <button class="botao" alt="Voltar">Voltar</button>
    </form>