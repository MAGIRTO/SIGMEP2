<?php
                $hostname="localhost";
                $usuario="root";
                $password="1234";
                $basededatos="sigmep";
                $mysqli = new mysqli($hostname, $usuario, $password,$basededatos);
                if ( mysqli_connect_errno() ) {
                echo "Error de conexión a la BD: ".mysqli_connect_error();
                exit();
                }             
                
                $nombre= $_POST['nombreUsuario'];
                $email= $_POST['email'];
                $password= $_POST['password'];
                $tipo_Usuario= $_POST['tipo_Usuario'];              

                $query = "INSERT INTO usuarios(nombre,email,password,tipo_Usuario) VALUES('$nombre','$email','$password','$tipo_Usuario')";  
	     		$mysqli->query($query)or die ($mysqli->error. " en la línea ");

                header('Location:../../')
   ?> 