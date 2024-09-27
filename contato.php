<?php
$nome = $_POST["nome"];
$email=$_POST["email"];
$mensagem=$_POST["mensagem"];
$genero=$_POST["genero"];
$foto=$_FILES["foto"]["name"];

//if($nome=="" || $email==""|| $foto==""){
//    echo "Há campo sem preenchimento";

//}else{
    echo "Seja bem vindos, ",$nome, "seu email ",$email;
    echo "Deseja receber mensagem $mensagem";
    echo " Seu genero é $genero";
    $uploaddir = 'C://xampp//htdocs//nemprojetoweb//uploads';
    // var/www/uploads/';
    $uploadfile = $uploaddir . basename($foto);
    
    echo '<pre>';
    if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }
    
    echo 'Here is some more debugging info:';
    print_r($_FILES);
    
    print "</pre>";
//}




?>