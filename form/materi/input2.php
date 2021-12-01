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
        <legend>Pendaftaran peserta didik baru</legend>
        <form action="proses2.php" method="post">
            <table>
                <tr>
                    <th style="text-align:left">nama lengkap</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" size="50" />
                    </td>
                </tr>
                <tr>
                    <th style="text-align:left">Email</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="email" size="50" />
                    </td>
                </tr>
                <tr>
                    <th style="text-align:left">Jenis kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="laki-laki" /> L
                        <input type="radio" name="jk" value="perempuan" /> P
                    </td>
                </tr>
                <tr>
                    <th style=text-align:left>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="">
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="budha">Budha</option>
                        <option value="konghucu">Konghucu</option>
                        </select>
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
                            name="tb"
                            min="1"
                            max="100"
                            placeholder="Berat badan"
                        />
                    </td>
                </tr>
                <tr>
                    <th style="text-align:left">Kelengkapan persyaratan</th>
                    <th>:</th>
                    <td>
                        <input type="checkbox" name="sSehat" id=""/>surat sehat
                        <input type="checkbox" name="kk" id=""/>kartu keluarga
                        <input type="checkbox" name="skl" id=""/>surat keterangan lulus
                    </td>
                </tr>
                <tr>
                    <th style="text-align:left">nomor telepon / HP</th>
                    <th>:</th>
                    <td><input type="number" name="nomor"/></td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="simpan">Daftar</button>
                        <button type="reset">Bersihkan folmulir</button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>