<?php
    /* Declaração de váriaveis: 
    Ex: nomesVar = (tipoDados) valorInicial;
    */
    $nota1 = (double) 0;
    $nota2 = (double) 0;
    $nota3 = (double) 0;
    $nota4 = (double) 0;
    $media = (double) 0;

    // Validação para tratar se o botão foi clicado
    if(isset($_POST['btncalc']))
    {
        // Recebendo dados utilizando POST do formulário
        $nota1 = $_POST['txtn1'];
        $nota2 = $_POST['txtn2'];
        $nota3 = $_POST['txtn3'];
        $nota4 = $_POST['txtn4'];

        // Operadores Lógicos
            // OU - or , ||
            // E - and, &&
            // Negação - !

            // is_numeric() - permite validar se o conteúdo é um número;
            // is_String() - permite validar se o conteúdo é uma String;
            // is-integer() - permite validar se o conteúdo é um inteiro;
            // is_double() ou is_float() - permite validar se o conteúdo é um valor real;
            // is-array() - permite validar se o conteúdo é um vetor ou matriz;
            // is_bool() - permite validar se o conteúdo é boleano;
            // ... e outras opções de validação.
    
        //Tratamento de erro para validação de caixa vazia
        if($_POST['txtn1'] == "" || $_POST['txtn2'] == "" || $_POST['txtn3'] == "" || $_POST['txtn4'] == "" )
        {
            echo('<p class= "msgErro"> Verificar se todas as notas foram preenchidas!</p>');
        }
        else
        {
            // Tratamento de erro para validação de caracteres não numéricos
            if(!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3) || !is_numeric($nota4))
            {
                echo(' <p class= "msgErro"> Todos os valores digitados devem ser números válidos </p> ');
            }
            else{
                // Realizando calculo da média
                $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            }
        }
        
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Média</title>
       <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="utf-8">
    </head>
	<body>
        
        <div id="conteudo">
            <header id="titulo">
                Calculo de Médias
            </header>

            <div id="form">
                <form name="frmMedia" method="post" action="media.php">
                    <div>
                        <label>Nota 1:</label>
                        <input type="text" name="txtn1" value="<?php echo($nota1);?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 2:</label>
                        <input type="text" name="txtn2" value="<?php echo($nota2);?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 3:</label>
                        <input type="text" name="txtn3" value="<?php echo($nota3);?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 4:</label>
                        <input type="text" name="txtn4" value="<?php echo($nota4);?>" >
                    </div>
                    <div>
                        <input type="submit" name="btncalc" value ="Calcular" >
                        <div id="botaoReset">
                            <a href="media.php">
                                Novo Cálculo
                            </a>    
                        </div>
                    </div>
                </form>

            </div>
            <footer id="resultado">
                A média é:<?php echo($media);?>  
            </footer>
        </div>
        
		
	</body>

</html>