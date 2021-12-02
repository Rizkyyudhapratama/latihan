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
        <center><h2>penggajian karyawan</h2></center>
        <center><h1>PT.SELALU MAKMUR JAYA</h1></center>
        <table>
            <tr>
                <th style="text-align:left">Nama bendahara</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" size="50" />
                </td>
            </tr>
            <tr>
                <th style="text-align:left">Nama pekerja</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" size="50" />
                </td>
            </tr>
            <tr>
                <th style="text-align:left">Jenis kelamin</th>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="laki-laki" /> Laki-laki
                    <input type="radio" name="jk" value="perempuan" /> Perempuan
                </td>
            </tr>
            <tr>
                <th style="text-align:left">tanggal gaji</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" size="20" />
                </td>
            </tr>
            <tr>
                <th style=text-align:left>jabatan</th>
                <td>:</td>
                <td>
                    <select name="pilih jabatan" id="">
                    <option value="direktur">Direktur</option>
                    <option value="manager">Manager</option>
                    <option value="sekertaris">sekertaris</option>
                    <option value="karyawan">karyawan</option>
                    <option value="ob">Ob</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th style=text-align:left>pendidikan terakhir</th>
                <td>:</td>
                <td>
                    <select name="pendidikan terakhir" id="">
                    <option value="sd">SD</option>
                    <option value="smp">SMP</option>
                    <option value="smk">SMK</option>
                    <option value="s1">S1</option>
                    <option value="s2">S2</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th style="text-align:left">status pegawai</th>
                <td>:</td>
                <td>
                    <input type="radio" name="sp" value="tetap" /> Tetap
                    <input type="radio" name="sp" value="kontrak" /> Kontrak
                </td>
            </tr>
            <tr>
                <th style="text-align:left">lembur</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" size="50" /> Hari/ RP 20.000
                </td>
            </tr>
            <tr>
                <th style="text-align:left">potongan bpjs</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" size="50" />
                </td>
            </tr>
            <tr>
                <th>
                    <button type="submit" name="simpan">Kirim</button>
                </th>
            </tr>

            <?php
            
            if(isset($_POST['simpan'])){

                echo "Nama bendahara : " . $nama . "<br>";
            }

?>
        </table>
    </fieldset>
</body>
</html>