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
            height: 420px;
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
         $ParteInteira = (int) $numero;
         $ParteFracionaria = $ParteInteira - $numero;

         echo "Analisando o número <strong>" . number_format($numero, 3, ",", ".") ."</strong>, informado pelo usuário: ";

         echo "<ul>
             <li>A parte inteira do número é " . number_format($ParteInteira, 0, ",", ".")."</li>
             <li>A parte fracionária do número é " . number_format($ParteFracionaria, 3, ",", ".")."</li>
             </ul>";
         ?>
         <button><a href="exd005.html">Voltar</a></button>
     </section>
</body>
</html>