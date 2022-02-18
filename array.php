<?php
    //criando array, e atribuindo valores
    $nomes = array('José da Silva', 'Samea Alencar','Vitor Aguiar');

    // exibe um texo ou um conteudo de uma variavel, sem detalhes tecnicos
    //print_r($nomes);

    //exibe os dados de um obj, ou array, ou variaveis trazendo detalhest tecnicos
    //var_dump($nomes);

    //ultilizando o echo para escrever o valor de um indice do array
    //echo($nomes[2]);

    //$dados = array ('jose da silva', 20, 1899.75);
    //var_dump($dados);

    //declarando array 
    $nomesFuncionarios = array();

    //declarando dados individuais do array
    $nomesFuncionarios [0] = 'luiz abobora';
    $nomesFuncionarios[2] = 30;

    //var_dump($nomesFuncionarios);

    $nomesClientes = array('Samea Alencar', 'Rebeca lopes', 'Rita de Cassia', 'Alexandre');

    // forma 1 de extrair dados do array com estrutura de repeticao
    $cont = 0;
    $qtdade = count($nomesClientes);
    //echo($qtdade);
    echo('***************exibindo pelo while<br>');
    while($cont < $qtdade ){
        echo($nomesClientes[$cont].'<br>');
        $cont++;
    }
    
    echo('***************exibindo pelo for<br>');
    for($cont= 0; $cont < $qtdade; $cont++){
        echo($nomesClientes[$cont].'<br>');
    }

    echo('***************exibindo pelo for each<br>');
    //permite criar uma copia do array fazendo ja a contagem
    //de quantos elementos existem em um array e permitindo que
    //na exibiçao dos valores nao seja necessario especificar o
    //indice array
    foreach($nomesClientes as $cliente){
       var_dump($cliente.'<br>');
    }

    //trabalhando com array (Chave-valor)
    //quando utilizamos o metodo da chavr valor, somente acessamos
    //o valor atraves da referencia da chave

    //    chave     valor
    //ex: 'nome'    'teclado'
    //para conseguir exibir a palavra teclado, temos que acessa-la
    //pela chave
    //echo($produtos['nome'])
    $produtos = array(
        'nome' => 'teclado',
        'descricao' => "teclado da cor preto e cinza",
        'qtdade' => 50 ,
        'valorUnitario' => 80.43


    );
    echo('<pre>');
    var_dump($produtos);
    echo('</pre>');

    //echo($produtos['qtdade']);

    //trabalhando com array de indice, chave valor
    $produtosInformatica = array(
        array(
            'nome' => 'teclado',
            'descricao'=> 'teclado rgb',
            'cor' => 'preto',
            'valor' => 100.50,
            'qtdd' => 20
        ),
        array(
            'nome' => 'mouse',
            'descricao'=> 'mouse com 5 botoes',
            'cor' => 'cinza',
            'valor' => 60.30,
            'qtdd' => 100
        )

        );
        echo('<pre>');
        var_dump($produtosInformatica);
        echo('</pre>');

        //para exibir um array(indice, chave-valor) temos que 
        //primeiro especificar qual é idice do array principal
        //depois colocamos qual chave iremos extrair o valor
        
        //echo($produtosInformatica[1]['nome']);

        foreach($produtosInformatica as $produtos){
            echo($produtos['nome']);
        }
?>