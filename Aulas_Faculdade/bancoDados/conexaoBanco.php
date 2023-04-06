<?php

/**
 * Description of conexaoBanco
 *
 * @author aluno
 */
    $no ="Mariáh da Silva";
    $cid="Lorena";
    $sal="2000";
    
    //put your code here
    try{
        /***
         *Criar a conexão com o banco de dados
         *informar o tipo do banco mysql host=127.0.0.1
         *informar a porta port=3306
         *informar o nome do banco dbname = empresa2
         *informar o admin root
         *informar a senha ""
         */
        $conecta = new PDO("mysql:host=127.0.0.1;port=3306;dbname=empresa2","root","");
        $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Processamento no SQL
        /***
         * Criar uma variavel para armazenar os dados para enviar ao sql
         * informar a tabela corretamente
         * informar respeitando os dados que esta na tabela do banco
         * passar os valores corretamente
         */        
        $texto="INSERT INTO funcionarios(nome,cidade,salario)VALUE ('".$no."','".$cid."','".$sal."')";
        /***
         * executa as informações acima
         * chama a variavel de conexão + exec(colocar a variavel com o INSERT INTO)
         */
        $conecta->exec($texto);
        
        echo "<h1>Dados cadastrado com sucesso!!! viu?</h1>";
    } 
    catch (PDOException $erro) {
        echo"Não foi estabelecido conexão com o banco de dados!!!";
}

