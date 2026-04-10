<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Resultado</title>
    <style>
        section{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 360px;
            width: 340px;
            margin: 0px 0px 0px 0px;
        }

        button{
          padding: 20px 60px;
          cursor: pointer;
        }

        a{
            text-decoration: none;
        }

        h1{
            text-align: center;
        }
        p{
            color: black;
            font-size: larger;
            font-weight: 400;
        }

        li{
            text-align: center;
        }
    </style>
</head>
<body>
     <section>
         <h1>
            Analisador de Número Real
         </h1>
         <?php
         $numero = $_GET['Real'] ?? 0;
         $ParteInteira = ;
         $ParteFracionaria = ;

         echo "Analisando o número <strong>$numero</strong>, informado pelo usuário: ";
         echo " <li>A parte inteira do número é $ParteInteira.</li>   
         <li>A parte fracionária do número é $ParteFracionaria.</li>";
         ?>
         <button><a href="exd005.html">Voltar</a></button>
     </section>
</body>
</html>