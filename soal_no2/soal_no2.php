<?php
 $prov = array(
    array(
      "provinsi" => "Jawa Timur",
      "kabupaten" => "Surabaya",
      "kecamatan" => "Jambangan",
    ),
    array(
        "provinsi" => "",
        "kabupaten" => "",
        "kecamatan" => "Wonokromo",
    ),
    array(
        "provinsi" => "",
        "kabupaten" => "Sidoarjo",
        "kecamatan" => "Taman",
    ),
    array(
        "provinsi" => "",
        "kabupaten" => "",
        "kecamatan" => "Waru",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Semarang",
        "kecamatan" => "Kecamatan 1",
    ),
    array(
        "provinsi" => "",
        "kabupaten" => "",
        "kecamatan" => "kecamatan 2",
    ),
    array(
        "provinsi" => "",
        "kabupaten" => "Solo",
        "kecamatan" => "Kecamatan 1",
    ),
    array(
        "provinsi" => "",
        "kabupaten" => "",
        "kecamatan" => "kecamatan 2",
    ),
  );
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <center>
  <h2>Data Penduduk</h2>
  </center>
  <table border ="1" width = "900" align = "center">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Provinsi</th>
        <th scope="col">Kabupaten</th>
        <th scope="col">Kecamatan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no =1;
      foreach($prov as $b){
        echo "<tr>";
        echo "<td>".$no."</td>
        <td>".$b['provinsi']."</td>
        <td>".$b['kabupaten']."</td>
        <td>".$b['kecamatan']."</td>";
        echo "</tr>";
        $no++;
      }
      ?>
    </tbody>
  </table>
</body>
</html>

