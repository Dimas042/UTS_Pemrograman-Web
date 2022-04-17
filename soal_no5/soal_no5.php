<?php

error_reporting(0);

include "./SpreadsheetReader.php";

$reader = new SpreadsheetReader('soal_no5.xlsx');
$sheets = $reader->Sheets();

$ambil_sheet = 0;
$reader->ChangeSheet($ambil_sheet); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <center>
        <h1> Data Mahasiswa</h1>
    </center>
	    <table align= "center">
            <tr>
                <th width="60">
                    <b>No.</b>
                </th>
                <th width="100">
                    <b>NIM</b>
                </th>
                <th width="200">
                    <b>Nama</b>
                </th>
                <th width="90">
                    <b>JK</b>
                </th>
                <th width="200">
                    <b>Program studi</b>
                </th>
                <th width="130">
                    <b>Alamat</b>
                </th>
                <th width="75">
                    <b>Kota</b>
                </th>
                <th width="65">
                    <b>Email</b>
                </th>
            </tr>
            <?php foreach($reader as $i => $kolom):
                if ($i == 0 || (empty($kolom[0]) && empty($kolom[1]) && empty($kolom[2])))
                continue ?>
                <tr>
                    <th><?=$kolom[0]?></th>
                    <td><?=$kolom[1]?></td>
                    <td><?=$kolom[2]?></td>
                    <td><?=$kolom[3]?></td>
                    <td><?=$kolom[4]?></td>
                    <td><?=$kolom[5]?></td>
                    <td><?=$kolom[6]?></td>
                    <td><?=$kolom[7]?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>