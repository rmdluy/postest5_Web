<?php

    require 'conf.php';

    // Menangkap id dari url yang dikirimkan
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    // Tampilkan value inputan dari id
    $result = mysqli_query($db, 
        "SELECT * FROM data_menu WHERE id='$id'");
    $row = mysqli_fetch_array($result);

    if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $rasa = $_POST['rasa'];
        $harga = $_POST['harga'];

        $result = mysqli_query($db, 
        "UPDATE data_menu SET 
            nama='$nama',
            rasa='$rasa',
            harga='$harga' 
        WHERE id='$id'");

        if($result){
            echo "
                <script>
                    alert('Data Berhasil di Update');
                    document.location.href = 'index.php';
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
</head>
<body>
    <h3>Edit Data Maba</h3>
    <form action="" method="post">
        <label for="">nama : </label><br>
        <input type="text" name="nama" value=<?=$row['nama']?>><br><br>
        <label for="">rasa : </label><br>
        <input type="text" name="rasa" value=<?=$row['rasa']?>><br><br>
        <label for="">harga : </label><br>
        <input type="text" name="harga" value=<?=$row['harga']?>><br><br>
        <input type="submit" name="kirim">
    </form>
</body>
</html>