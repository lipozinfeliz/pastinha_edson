<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova em PHP</title>
</head>
<body>
    <h1>Estrutura de Linguagem PHP</h1>
        <h3>Selecione o dia da semana: </h3>
    <p>
    <label>
        <select name="Dia da semana: " required>
            <option value="#"></option>
            <option value="domingo">Domingo</option>
            <option value="segunda">Segunda-feira</option>
            <option value="terça">Terça-feira</option>
            <option value="quarta">Quarta-feira</option>
            <option value="quinta">Quinta-feira</option>
            <option value="sexta">Sexta-feira</option>
            <option value="sabado">Sábado</option>
        </select>
    </label>
    </p>
   
        <h3>Mensagem referente ao dia da semana que escolheu: </h3>
    <p>
    <label>
        <input type="text" name="mensagem" placeholder="Exemplo: Estudar, Trabalhar, Sair..." min="" max="" required>
    </label>
    </p>

        <h3>Informe seu nome: </h3>
    <p>
    <label>
        <input type="text" name="nome" min="0" max="" required>
    </label>
    </p>
    
    <button type="submit" class="submit-btn">Exibir</button>

    <form>
    <div>



    </div>
    </form>

    <?php
    if (isset($_POST['mensagem'])){
        $mensagem = $_POST['mensagem'];
    if($mensagem >=1 && $mensagem <=8 ){

    }
    }
        
    

    ?>

</body>
</html>