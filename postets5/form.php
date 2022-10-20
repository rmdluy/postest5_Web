<?php

    require 'conf.php';

    if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $rasa = $_POST['rasa'];
        $harga = $_POST['harga'];

        $result = mysqli_query($db, 
        "INSERT INTO data_menu (nama, rasa, harga) 
        VALUES ('$nama','$rasa','$harga')");

        if($result){
            echo "
                <script>
                    alert('Data Berhasil Dikirim');
                </script>
            ";
        }else {
            echo "
                <script>
                    alert('Data Gagal Dikirim');
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="login-page">
    <div class="form">
    <form action="" method="post">
        <label for=""><h3>DATA PESANAN</h3></label>
        <input type="text" name="nama" placeholder="Nama Menu"><br><br>
        <input type="text" name="rasa" placeholder=" Rasa "><br><br>
        <input type="text" name="harga" placeholder="Harga"><br><br>
        <input type="submit" name="kirim">
    </form>
    </div>
    </div> 
</body>
</html>