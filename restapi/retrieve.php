<?php
    include('config.php');
	$query = "SELECT * FROM storeuserdata_tbl";
	$result = mysqli_query($connection, $query);
	if (!$result){
        echo $errorAccessdb;
    }
	$rows = mysqli_num_rows($result);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoreData</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div>
    		<table border="1px"  width="50%" align="center">
				<tr>
					<td >FIRST NAME</td>
                    <td >LAST NAME</td>
                    <td >AGE</td>
				</tr>
				<?php
					while ($row=mysqli_fetch_assoc($result)) 
					{
				?> 
			
				<tr>
					<td ><?php  echo $row['firstname']; ?></td>
					<td ><?php  echo $row['lastname']; ?></td>
					<td ><?php  echo $row['age']; ?></td>

				</tr>

				<?php
					}
				?>

			</table>
		</div>
</body>
</html>


