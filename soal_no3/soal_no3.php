<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Setting the pages character encoding -->
	<meta charset="UTF-8">
	
	<!-- The meta viewport will scale my content to any device width -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Link to my stylesheet -->
	<link rel="stylesheet" href="style.css"> 
	<title>Soal3</title>
</head>
<body>

	<h2>Toko Baju Muslim Pria</h2>

	<table>
	
		<!-- The tables header -->
		<tr>
			<th>Product Image</th>
			<th>Name</th>
			<th>Price</th>
			<th>Ukuran</th>
			<th>Warna</th>
			<th>Actions</th>
		</tr>
		
		<?php
			$json_data = file_get_contents("jualan.json");
			$jualan = json_decode($json_data, true);
			if(count($jualan) != 0 ){
				foreach($jualan as $product){
					?>

		<!-- The html template we will use in our loop -->
		<tr>
			<td> <img src="<?php echo $product['gambar']?>" alt="" </td>
			<td> <?php echo $product['name']?> </td>
			<td> <?php echo $product['price']?> </td>
			<td> <?php echo $product['ukuran']?> </td>
			<td> <?php echo $product['warna']?> </td>
			<td>
				<!-- Edit actions -->
				<select name="actions" id="actions">
					<option value="">Select action</option>
					<option value="remove">Remove</option>
					<option value="edit">Edit</option>
					<option value="sold-out">Sold out</option>
				</select>
			</td>
		</tr>
		<?php
				}
			}
		?>
	</table>
</body>
</html>
