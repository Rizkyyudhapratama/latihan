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
        <legend>MASUK TNI/POLRI</legend>
        <form action="proses-tp.php" method="post">
            <table>
                <tr>
                    <th style="text-align:left">Nama</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" size="50" />
                    </td>
                </tr>
                <tr>
                    <th style="text-align:left">Jenis kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="laki-laki" > L
                        <input type="radio" name="jk" value="perempuan" > P
                    </td>
                </tr>
                <tr>
                    <th style="text-align:left">tinggi badan dan berat badan</th>
                    <td>:</td>
                    <td>
                        <input 
                        type="text"
                        name="tb"
                        min="100"
                        max="200"
                        placeholder="Tinggi badan"
                        />
                        <input 
                            type="text"
                            name="bb"
                            min="100"
                            max="100"
                            placeholder="Berat badan"
                        />
                    </td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="simpan">Daftar</button>
                        <button type="reset">Bersihkan folmulir</button>
                    </th>
                </tr>
            </form>
        </fieldset>
</body>
</html>