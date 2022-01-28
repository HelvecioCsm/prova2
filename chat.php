<!DOCTYPE html>
<html lang="pt-pt">
    <head>

        <?php
            include"conexao.php";
        ?>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            img{
                width:20px ;
                right:20px ;
                background-color: rgb(151, 151, 233);
                border-radius: 10px; 
            }
            #mg{
                background-color: rgba(11, 175, 134, 0.192);
                width:400px; 
                right:400px;   
                border: dimgray 1px solid;
                border-radius: 4px; 
                box-shadow: 1px 2px 2px 1xp;

            }
        </style>
    </head>

    <body>
        <br><br>
        <form  method="post">
            <label for="">nome da pessoa</label><br>
                <input type="text" name="nome" id=""><br><br>

            <label for="">Mensagem </label><br>
                <textarea name="mensagem" id="" cols="30" rows="10"></textarea>
            <br>  
            <br>   

        <input type="submit" value="Enviar a Mensagem">
        </form>
    </body>

</html>
<?php

    //Falta chamar a conexão com a base de dados

    if (!empty($_POST['mensagem'])) {

    $nome=$_POST['nome'];
    $mensagem=$_POST['mensagem'];
    $inser="INSERT INTO chat(nome,mensagem,data_da_mensagem) VALUE('$nome','$mensagem',now())";
    $query=mysqli_query($pegar,$inser);


    }

    $mostrar="SELECT * FROM chat";
    $query1=mysqli_query($pegar,$mostrar);
    while ($res=mysqli_fetch_assoc($query1)) {
        $letra=$res['nome'];

        $letra1=$letra[0];
if ($letra1=="A") {
     echo"<br>
        <img src='Alphabet_000/A-64.png' alt=''><br>";
  
}if ($letra1=="a") {
  echo"<br>
        <img src='Alphabet_000/a_lowercase-64_000.png' alt=''><br>";
}
if ($letra1=="B") {
    echo"<br>
       <img src='Alphabet_000/B-64.png' alt=''><br>";
 
}if ($letra1=="b") {
 echo"<br>
       <img src='Alphabet_000/b_lowercase-64_000.png' alt=''><br>";
}
 
if ($letra1=="C") {
    echo"<br>
       <img src='Alphabet_000/C-64.png' alt=''><br>";
 
}if ($letra1=="c") {
 echo"<br>
       <img src='Alphabet_000/c_lowercase-64_000.png' alt=''><br>";
}
 
if ($letra1=="D") {
    echo"<br>
       <img src='Alphabet_000/D-64.png' alt=''><br>";
 
}if ($letra1=="d") {
 echo"<br>
       <img src='Alphabet_000/d_lowercase-64_000.png' alt=''><br>";
}
 
if ($letra1=="E") {
    echo"<br>
       <img src='Alphabet_000/E-64.png' alt=''><br>";
 
}if ($letra1=="e") {
 echo"<br>
       <img src='Alphabet_000/E-64.png' alt=''><br>";
}
 
if ($letra1=="F") {
    echo"<br>
       <img src='Alphabet_000/F-64.png' alt=''><br>";
 
}if ($letra1=="f") {
 echo"<br>
       <img src='Alphabet_000/f_lowercase-64_000.png' alt=''><br>";
}
 
if ($letra1=="G") {
    echo"<br>
       <img src='Alphabet_000/G-64.png' alt=''><br>";
 
}if ($letra1=="a") {
 echo"<br>
       <img src='Alphabet_000/g_lowercase-64_000.png' alt=''><br>";
}
 
if ($letra1=="H") {
    echo"<br>
       <img src='Alphabet_000/H-64.png' alt=''><br>";
 
}if ($letra1=="h") {
 echo"<br>
       <img src='Alphabet_000/h_lowercase-64_000.png' alt=''><br>";
}
 
if ($letra1=="I") {
    echo"<br>
       <img src='Alphabet_000/I-64.png' alt=''><br>";
 
}if ($letra1=="i") {
 echo"<br>
       <img src='Alphabet_000/A-64.png' alt=''><br>";
}
 
if ($letra1=="J") {
    echo"<br>
       <img src='Alphabet_000/J-64_000.png' alt=''><br>";
 
}if ($letra1=="j") {
 echo"<br>
       <img src='Alphabet_000/J-64.png' alt=''><br>";
}
 
if ($letra1=="K") {
    echo"<br>
       <img src='Alphabet_000/K-64.png' alt=''><br>";
 
}if ($letra1=="k") {
 echo"<br>
       <img src='Alphabet_000/k_lowercase-64_000.png' alt=''><br>";
}
 
if ($letra1=="L") {
    echo"<br>
       <img src='L-64.png' alt=''><br>";
 
}if ($letra1=="l") {
 echo"<br>
       <img src='Alphabet_000/l_lowercase-64.png' alt=''><br>";
}
 
if ($letra1=="M") {
    echo"<br>
       <img src='Alphabet_000/M-64_000.png' alt=''><br>";
 
}if ($letra1=="m") {
 echo"<br>
       <img src='Alphabet_000/m_lowercase-64_000.png' alt=''><br>";
}
 
if ($letra1=="N") {
    echo"<br>
       <img src='Alphabet_000/N-64.png' alt=''><br>";
 
}if ($letra1=="n") {
 echo"<br>
       <img src='Alphabet_000/n_lowercase-64_000.png' alt=''><br>";
}
 
if ($letra1=="O") {
    echo"<br>
       <img src='Alphabet_000/O-64.png' alt=''><br>";
 
}if ($letra1=="o") {
 echo"<br>
       <img src='Alphabet_000/o_lowercase-64_000.png' alt=''><br>";
}
 
if ($letra1=="P") {
    echo"<br>
       <img src='Alphabet_000/P-64.png' alt=''><br>";
 
}if ($letra1=="p") {
 echo"<br>
       <img src='Alphabet_000/p_lowercase-64_000.png' alt=''><br>";
}
 
if ($letra1=="Q") {
    echo"<br>
       <img src='Alphabet_000/Q-64.png' alt=''><br>";
 
}if ($letra1=="q") {
 echo"<br>
       <img src='Alphabet_000/q_lowercase-64_000.png' alt=''><br>";
}
 
if ($letra1=="R") {
    echo"<br>
       <img src='Alphabet_000/R-64.png' alt=''><br>";
 
}if ($letra1=="r") {
 echo"<br>
       <img src='Alphabet_000/r_lowercase-64.png' alt=''><br>";
}
 
if ($letra1=="S") {
    echo"<br>
       <img src='Alphabet_000/S-64.png' alt=''><br>";
 
}if ($letra1=="s") {
 echo"<br>
       <img src='Alphabet_000/s_lowercase-64_000.png' alt=''><br>";
}
 
if ($letra1=="T") {
    echo"<br>
       <img src='Alphabet_000/T-64.png' alt=''><br>";
 
}if ($letra1=="t") {
 echo"<br>
       <img src='Alphabet_000/t_lowercase-64_000.png' alt=''><br>";
}
 
if ($letra1=="U") {
    echo"<br>
       <img src='Alphabet_000/U-64.png' alt=''><br>";
 
}if ($letra1=="u") {
 echo"<br>
       <img src='Alphabet_000/U-64.png' alt=''><br>";
}
 
if ($letra1=="V") {
    echo"<br>
       <img src='Alphabet_000/V-64.png' alt=''><br>";
 
}if ($letra1=="v") {
 echo"<br>
       <img src='Alphabet_000/v_lowercase-64_000.png' alt=''><br>";
}
 
if ($letra1=="W") {
    echo"<br>
       <img src='Alphabet_000/W-64.png' alt=''><br>";
 
}if ($letra1=="w") {
 echo"<br>
       <img src='Alphabet_000/w_lowercase-64_000.png' alt=''><br>";
}
 
if ($letra1=="X") {
    echo"<br>
       <img src='Alphabet_000/X-64.png' alt=''><br>";
 
}if ($letra1=="x") {
 echo"<br>
       <img src='Alphabet_000/x_lowercase-64_000.png' alt=''><br>";
}
 
if ($letra1=="Y") {
    echo"<br>
       <img src='Alphabet_000/Y-64.png' alt=''><br>";
 
}if ($letra1=="y") {
 echo"<br>
       <img src='Alphabet_000/y_lowercase-64.png' alt=''><br>";
}
if ($letra1=="Z") {
    echo"<br>
       <img src='Alphabet_000/Z-64.png' alt=''><br>";
 
}if ($letra1=="z") {
 echo"<br>
       <img src='Alphabet_000/z_lowercase-64_000.png' alt=''><br>";
}

       
        
        echo"<label id='n'> nome :  ".$res['nome']."</label><br><br>";
        echo"Mensagem :<div id='mg'>   ".$res['mensagem']."</div><br><br>
       ";
        echo"Data da mensagem:<label id='mg'>    ".$res['data_da_mensagem']."</label><br><br><br><hr>";
    
 
    }
