<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>25 Tipos de String - CONFIRA NO CORPO DO CÓDIGO</title>
</head>
<body>
    
    <?php
        echo "<p>1 - Ultilizando o <strong>printf()</strong></p>";
        $a = 4;
        $b = "Leite";
        printf ("O valor do %s é %.2f",$b, $a); 
        //Ele formatou a $a em duas casas depois da virgula "4,00" e mostrou a variavel $b.
        //lemnbrando s = string e f = float d = decimal com (+ e -) u = decimal sem sinal

        echo "<br>";
        echo "<br>";

        echo "<p>2 - Ultilizando o <strong>print_r()</strong></p>";
        $x[0] = 4;
        $x[1] = 8;
        $x[2] = 7;
        $x[3] = 6;
        print_r($x); 
        //Mostra o Vetor

        echo "<br>";
        echo "<br>";

        echo "<p>3 - Ultilizando o <strong>wordwrap()</strong></p>";
        $txt = "Aqui aparecerá uma mensagem onde irá mostrar o funcionamento da função wordwrap, ele irá quebrar o texto";
        $r = wordwrap($txt , 20, "<br>");
        echo $r;

        echo "<br>";
        echo "<br>";

        echo "<p>4 - Ultilizando o <strong>strlen()</strong></p>";
        $frase = "Curso em Video";
        $tamanho = strlen($frase); 
        //Ele vai dizer o tamanho da string. obs: o espaço conta como string 
        echo "A frase = '$frase' tem o tamanho de $tamanho";

        echo "<br>";
        echo "<br>";

        echo "<p>5 - Ultilizando o <strong>trim()</strong></p>";
        $frase2 = "  Curso em Video  ";
        $tamanho2 = trim($frase2); //Ele não vai mostrar o espaçamento criado no comeco e no final da variável $frase2 
        echo $frase2;

        echo "<br>";
        echo "<br>";

        echo "<p>6 - Ultilizando o <strong>ltrim()</strong></p>";
        $frase3 = "  Curso em Video  ";
        $tamanho3 = ltrim($frase3); 
        //Ele não vai mostrar o espaçamento criado no comeco variável $frase3 mas vai mostrar o espaçamento do final 
        echo "$frase3";
        
        echo "<br>";
        echo "<br>";
        
        echo "<p>7 - Ultilizando o <strong>rtrim()</strong></p>";
        $frase4 = "  Curso em Video  ";
        $tamanho4 = rtrim($frase4); 
        //Ele não vai mostrar o espaçamento criado no final variável $frase3 mas vai mostrar o espaçamento do inicio 
        echo "$frase4"; 

        echo "<br>";
        echo "<br>";
        
        echo "<p>8 - Ultilizando o <strong>str_word_count()</strong></p>";
        $frase5 = "Eu vou estudar PHP";
        $cont = str_word_count($frase5, 0); 
        //Ele contar quantas palavras tem na frase. Importante colocar o "0", caso vc coloque o "1" ele vai criar um vetor
        echo "A frase  = '$frase5' tem $cont palavras."; 

        echo "<br>";
        echo "<br>";
        
        echo "<p>9 - Ultilizando o <strong>explode()</strong></p>";
        $site = "Curso em video";
        $vetor = explode(" ",$site); 
        //Cria um vetor (Cada palavra ele joga no vetor)
        print_r($vetor);

        echo "<br>";
        echo "<br>";
        
        echo "<p>10 - Ultilizando o <strong>str_split()</strong></p>";
        $nome = "Maria";
        $vetor1 = str_split($nome); 
        //Cria um vetor (Cada letra ele joga no vetor)
        print_r($vetor1);

        echo "<br>";
        echo "<br>";
        
        echo "<p>11 - Ultilizando o <strong>implode()</strong></p>";
        $ve[0] = "Curso";
        $ve[1] = "em";
        $ve[2] = "video";
        $vetor2 = implode("#",$ve); 
        //Junta os vetores. Pode colocar também "join()" que funciona da mesma forma
        print_r($vetor2);

        echo "<br>";
        echo "<br>";
        
        echo "<p>12 - Ultilizando o <strong>chr()</strong></p>";
        $letra = chr(67);
        echo "A letra do código 67 é $letra";
        //Cada letra no teclado tem um código, nessa função ele mostra, nesse exemplo toda vez que apertamos na letra "C" estamos ativando o código 67

        echo "<br>";
        echo "<br>";
        
        echo "<p>13 - Ultilizando o <strong>ord()</strong></p>";
        $letra1 = "C";
        $cod = ord($letra1);
        echo "A letra $letra tem o código $cod";
        //É o contrario do chr(), pq ele descobre o código da letra.

        echo "<br>";
        echo "<br>";
        
        echo "<p>14 - Ultilizando o <strong>strtolower()</strong></p>";
        $nome1 = "LucAs RibeiRo";
        echo "O seu nome é " . strtolower($nome1);
        //Ele vai deixar todas as letras do nome em minusculo

        echo "<br>";
        echo "<br>";
        
        echo "<p>15 - Ultilizando o <strong>strtoupper()</strong></p>";
        $nome2 = "LucAs RibeiRo";
        echo "O seu nome é " . strtoupper($nome2);
        //Ele vai deixar todas as letras do nome em MAIUSCULO
        
        echo "<br>";
        echo "<br>";
        
        echo "<p>16 - Ultilizando o <strong>ucfirst()</strong></p>";
        $nome3 = "lucas ribeiro";
        echo "O seu nome é " . ucfirst($nome3);
        //Ele vai colocar a primeira letra do primeiro nome em MAIUSCULO

        echo "<br>";
        echo "<br>";
        
        echo "<p>17 - Ultilizando o <strong>ucwords()</strong></p>";
        $nome4 = "lucas ribeiro";
        echo "O seu nome é " . ucwords($nome4);
        //Ele vai colocar a primeira letra MAIUSCULO em cada nome

        echo "<br>";
        echo "<br>";

        echo "<p>18 - Ultilizando o <strong>strrev()</strong></p>";
        $nome5 = "lucas ribeiro";
        echo "O seu nome ao contrário é " . strrev($nome5);
        //Ele vai colocar seu nome ao contrário

        echo "<br>";
        echo "<br>";

        echo "<p>19 - Ultilizando o <strong>strpos()</strong></p>";
        $frase6 = "Estou aprendendo PHP";
        $pos = strpos($frase6, "PHP");
        echo "Na frase = '$frase6' estamos vendo onde a palavra 'PHP' fica posicionado, graças as strpos() sabemos que ele está posicionado no espaçamento $pos";
        //Ele encontrar o pocicionamento da string preocurada. obs: Não pode colocar no exemplo a cima 'php' por que o a string está em MAIUSCULO

        echo "<br>";
        echo "<br>";

        echo "<p>20 - Ultilizando o <strong>stripos()</strong></p>";
        $frase7 = "Estou aprendendo PHP";
        $ipos = stripos($frase7, "php");
        echo "Na frase = '$frase7' estamos vendo onde a palavra 'php' fica posicionado, graças as strpos() sabemos que ele está posicionado no espaçamento $ipos";
        //Ele encontrar o pocicionamento da string preocurada. obs: Nessa função não tem o problema da função anterior, se colocar "php" ele vai entender
        
        echo "<br>";
        echo "<br>";

        echo "<p>21 - Ultilizando o <strong>substr_count()</strong></p>";
        $frase8 = "Estou aprendendo PHP no Curso em video de PHP";
        $cont1 = substr_count($frase8, "PHP");
        echo "Na frase = '$frase8' é encontrado a palavra 'PHP' $cont1 vezes";
        //Ele conta quantas vezes a palavra se repete. obs: Não pode colocar no exemplo a cima 'php' por que o a string está em MAIUSCULO

        echo "<br>";
        echo "<br>";

        echo "<p>22 - Ultilizando o <strong>substr()</strong></p>";
        $site1 = "Curso em video de PHP";
        $sub = substr($site1, 0, 5);
        echo "$sub ";
        //Ele quebra a frase, nesse exemplo o (0 = A primeira letra e o 5 = É a sexta letra) então só mostrará da primera letra a sexta letra. 
        //OBS: O espaço entre as palavras contam

        echo "<br>";
        echo "<br>";

        echo "<p>23 - Ultilizando o <strong>str_pad()</strong></p>";
        $nome6 = "Lucas Ribeiro"; 
        $novo = str_pad($nome6, 30, " ");
        echo "Seu nome é $nome6 num é?";

        echo "<br>";
        echo "<br>";

        echo "<p>24 - Ultilizando o <strong>str_repeat()</strong></p>";
        $texto = str_repeat("PHP " ,5);
        echo "Texto gerado foi $texto ";
        //Ele repete o texto, nesse caso ele vai repetir 'PHP' 5 vezes. 

        echo "<br>";
        echo "<br>";

        echo "<p>25 - Ultilizando o <strong>str_replace()</strong></p>";
        $site2 = "Gosto de estudar Física";
        $novaFrase = str_replace("Física" , "PHP", $site2);
        echo "A antiga frase era = '$site2', mas usando o str_replace() eu consegui substituir... Nova Frase = '$novaFrase' ";
        //Ele Subistitui palavras 
        //Se colocar str_ireplace() pode colocar letra minuscula ou não que ele vai identificar o "Fisica"
  
  ?>

</body>
</html>