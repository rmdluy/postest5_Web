<?php 
    require 'conf.php';

    $result = mysqli_query($db, "SELECT * FROM data");
?>

<!DOCTYPE html>
<body>
    <table width="100%" border="1">
        <tr>
            <td>
                nama
            </td>
            <td>
                rasa
            </td>
            <td>
                harga
            </td>
            <td></td>
            <td></td>
        </tr>
    
        <?php 
            $i = 1;
            while($row = mysqli_fetch_array($result)){
        ?>

        <tr>
            <td>
            <?=$row['Nama']?>
            </td>
            <td>
            <?=$row['Rasa']?>
            </td>
            <td>
            <?=$row['Harga']?>
            </td>
            
            <td><a href="edit.php?id=<?=$row['id']?>"> edit </a></+td>
            <td><a href="hapus.php?id=<?=$row['id']?>">hapus</a></td>
        </tr>
        <?php 
             $i++;
                }
            ?>   
    </table>
    <a href="form.php"> tambah data </a>
</body>