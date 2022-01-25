<?php

require 'functions.php';

if(isset($_POST['masuk'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query ($conn, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if(mysqli_num_rows($result) == 1){

        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_Verify($password, $row['password'])){
            header("Location:index.php");
            exit;
        }
    }
}

    echo "ADUH GAGAL TERUS NICH !";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama"> Nama</label>
                <input type="text" id="name="nama" class="form-control" placeholder="Masukkan Nama">
            </li>
        </ul> 
        </ul>
            </li>
                <label for="password"> Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Password">
            </li>
        </ul>
        </ul>
            </li>
                <button name="submit" type="submit">Submit</button>
           </li>
         </ul>
      </form>
    </body>
</html>