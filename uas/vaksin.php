<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS</title>
</head>
<body>
    <fieldset>
        <center><legend>SYARAT MASUK KE MIKO MALL</legend></center>
        <form action="vaksin2.php" method="post">
            <table>
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
            </table>
        </form>
    </fieldset>
</body>
</html>