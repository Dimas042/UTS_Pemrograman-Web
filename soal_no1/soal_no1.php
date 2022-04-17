<?php 
	$buku = array(
		
        array(
            "no" => "1",
            "judul" => "Pemrograman Web dengan Laravel",
		    "pengarang" => "Budi Sutejo",
		    "tahun" => 2019
		),
		array(
		    "no" => "2",
            "judul" => "Belajar Mandiri Python",
		    "pengarang" => "Ahmad Arifin",
		    "tahun" => 2010
		),
		array(
            "no" => "3",
		    "judul" => "Microsoft Word untuk Penulisan Ilmiah",
		    "pengarang" => "Edi Rahmadi",
		    "tahun" => 2015
		)
	  );	  

?>

<!DOCTYPE html>
<html>
<head>
	<title>Soal1</title>
</head>
<body>
    <center>
    <h1>Data Buku</h1>
    </center>
	<table align= "center">
		<tr>
			<th>No</th>
			<th>Judul Buku</th>
			<th>Pengarang</th>
			<th>Tahun terbit</th>	
		</tr>
			<?php foreach ($buku as $buku) { ?>
				<tr>
					<td><?php echo $buku["no"]; ?></td>
					<td><?php echo $buku["judul"]; ?></td>
					<td><?php echo $buku["pengarang"]; ?></td>
					<td><?php echo $buku["tahun"]; ?></td>
				</tr>
			<?php } ?>
	</table>

</body>
</html>

<style type="text/css">
	.clear {
		clear: both;
	}

	table {
    	margin-top: 100px;
	  border-collapse: collapse;
	  width: 50%;
      border: 1px solid black;
	}

	th {
	  background-color: #40DFEF;
	  color: #3A3845;
	}

	th, td {
	  padding: 8px;
	  text-align: left;
	  border-bottom: 1px solid #ddd;
      border: 1px solid black;
	}

</style>
