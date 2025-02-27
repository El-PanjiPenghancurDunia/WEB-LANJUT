<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="NIM">NIM:</label><br>
        <input type="text" id="NIM" name="NIM" value=""><br>
        <label for="nama">Nama :</label><br>
        <input type="text" id="nama" name="nama" value=""><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php 


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nim = isset($_POST["NIM"]) ? $_POST["NIM"] : ''; 
            $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
            
            echo "<p>Hello, NIM: $nim, Nama: $nama</p>";
        }
    ?>

    

</body>
</html>