<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //$email = preg_replace('/[^[:alnum:]_.-]/','', $email);
    //$senha = preg_replace('/[^[:alnum:]_.-]/','', $senha);

    echo $email.'<br>';
    echo $senha.'<br>';

    $conn = mysqli_connect('localhost', 'root', 'root', 'sqlinjection');
    $sql = "SELECT * FROM usuario WHERE email='".$email."' AND senha='".$senha."'";

    echo $sql;

    $query = mysqli_query($conn, $sql);
    $resultado = mysqli_num_rows($query);

    if($resultado){
        echo '<h1>Login Efetuado com Sucesso!!</h1>';
    }else{
        echo '<h1>Falha no Login</h1>';
    }
?>