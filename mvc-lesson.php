<?php

	$header = "PHP with HTML";

	$loggedIn = false;

	$userInfo = [
		'name' => 'Fred',
		'age' => 49,
		'occupation' => 'Rock Star'
	];

?>

<!DOCTYPE html>
<html>
	<head>
		

	</head>
	<body>
		<h1><?php echo $header; ?></h1> 

		<h3>
			<?php echo ($loggedIn) ? "Logged in!" : "Not logged in" ?>
		</h3>

		<h3>User Info</h3>

		<table>


			<tbody>
				<tr>
					<?php foreach($userInfo as $stat) { ?> 
						<td><?php echo $stat ?></td>
					<?php } ?> <!-- OPENING & CLOSING PHP tags to seperate the PHP from HTML -->

				</tr>

			</tbody>
		</table>

	</body>

</html>






