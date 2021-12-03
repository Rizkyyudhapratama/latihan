<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
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
    <fieldset>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <center><h1>WELCOME TO UAS</h1></center>
        <center><h3>RIZKY YUDHA PRATAMA</h3></center>
        <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR18Vz0-dv8CFhjt48AhXwzfa0phgvouhcCDQ&usqp=CAU" alt=""></center>
    </fieldset>
</body>
</html>