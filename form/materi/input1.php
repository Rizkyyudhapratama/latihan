<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Input Folmulir</legend>
        <form action="" method="get">
            <label for="">Masukan nama</label>
            <input type="text" name="nama" required>
            <br>
            <button type="submit" name="save">simpan</button>
        </form>
    </fieldset>
    <?php
    if (isset($_GET['save'])) {
        $a = $_GET['nama'];
        echo "nama saya adalah <b>$a</b>";
    }
    ?>
</body>
</html>