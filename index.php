<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>SaraDev</title>
</head>
<body>
	<h1>Find The Longest Gap Between Binaries</h1>
	<div class="box">
		<form action="" method="post">
			<h3>Insert Decimal Numbers</h3>
			<input type="number" name="number" id="number">
			<button type="submit" name="check">Check</button>
		</form>
		<?php
		
		if(isset($_POST['number'])){ 
			$dec = $_POST['number'];

			if($dec != 0){

			$biner="";
			$prevDig = 0;
			$gap = [];
			$tempGap = 0;
			while($dec > 0){
				if($dec % 2 == 0) {
					$biner .= "0";
					if($prevDig == 1){
						$tempGap++;
					}
				}else if($dec % 2 == 1) {
					$biner .= "1";
					$prevDig = 1;
					$gap[] += $tempGap;
					$tempGap = 0;
				}
				$dec = floor($dec / 2);
				$arr_gap[] = $gap;
			}
		} else {
			$biner = "0";
			$gap[] ="";
		}
			
		}

		?>
		<div class="result">
			<h3>Here's Your Binary</h3>
			<div class="binary"><?php if(isset($_POST['number'])) { echo $biner; } ?></div>
			<h3>Here's The Longest Gap</h3>
			<div class="gap"><?php if(isset($_POST['number'])) { echo max($gap); } ?></div>
		</div>
	</div>
</body>
</html>