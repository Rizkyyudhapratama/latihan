<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: grey">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white">
  <div class="container-fluid">
      <img src="data:image/png;base64,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" width="60px" height="40px" alt="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tamplate.php">Home</a>
        </li><br>
        <li class="nav-item">
          <a class="nav-link active" href="vaksin.php">vaksin</a>
        </li><br>
        <li class="nav-item">
          <a class="nav-link active" href="penggajian.php">penggajian</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="pengulangan.php">pengulangan</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav><br>
<div class="card" style="width: 18rem;float:left">
  <img src="data:image/jpeg;base64,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" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">KEMENKES RI</h5>
    <p class="card-text">indonesia pertama kalinya meneripa vaksin COVID-19 buatan novavax sebanyak 134.500 dosis dari total 10jt dosis vaksin yang rencananya akan di datangkan pemerintah.</p>
    <a href="https://twitter.com/KemenkesRI/status/1465166354504249345?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Etweet" class="btn btn-primary">Twitter</a>
  </div>
</div>
    <center><fieldset>
        <form action="" method="post">
        <table class="border border-3">
            <tr>
                <th style="text-align:left">nama anda</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" size="50" />
                </td>
            </tr>
            <tr>
                <th style=text-align:left>Status Vaksin</th>
                <td>:</td>
                <td>
                    <select name="vaksin" id="">
                    <option value="sudah vaksin">sudah</option>
                    <option value="belum vaksin">belum</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>
                    <button type="submit" name="simpan">Daftar</button>
                </th>
            </tr> 
        </form>
        </table>
    </fieldset></center>
    <br>
    <div style="clear:both"></div>
    <div class="card" style="width: 18rem;">
  <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">KEMENKES RI</h5>
    <p class="card-text">update cakupan vaksinasi COVID-19 di indonesia #ayovaksin.</p>
    <a href="https://twitter.com/KemenkesRI/status/1465166354504249345?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Etweet" class="btn btn-primary">Twitter</a>
  </div>
</div>
    <?php
//penampungan data
if(isset($_POST['simpan'])){
//textfield
$nama = $_POST['nama'];


//select
echo "<div style='float:right; margin-top:-650px; margin-right:400px'>";
$vaksin = $_POST['vaksin'];

echo "Nama anda :$nama<br>";
echo "Status vaksin :$vaksin<br>";

//daftar
if ($vaksin == "sudah vaksin"){
    echo "di izinkan";
} elseif ($vaksin == "belum vaksin"){
    echo "tidak di izinkan";
    echo '<a href="https://www.pedulilindungi.id/*">silahkan daftar vaksin</a>';
}
echo "</div>";
}
?>
</body>
</html>