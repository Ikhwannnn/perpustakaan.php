<?php 
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM buku WHERE id=$id");

    $buku = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])) {
        
        $nama = $_POST["nama"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];

        $query = mysqli_query($db, "UPDATE buku SET nama='$nama', isbn='$isbn', unit=$unit WHERE id=$id");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Buku</title>
</head>
<body>
    <h1>Form edit buku</h1>

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input value="<?php echo $buku['nama'] ?>" type="text" id="nama" name="nama">
        <br>
        <br>
        <label for="isbn">ISBN</label>
        <input value="<?php echo $buku['isbn'] ?>" type="text" id="isbn" name="isbn">
        <br>
        <br>
        <label for="unit">Unit</label>
        <input value="<?php echo $buku['unit'] ?>" type="number" id="unit" name="unit">
        <br>
        <br>
        <button type="submit" name="submit">SUBMIT</button>
    <br>
    <br>
    <a href="./buku.php">Kembali ke daftar buku</a>
</body>
</html>