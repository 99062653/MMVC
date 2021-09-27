<?php
	if($data['connection']){
		?>
		<html>
			<?php
				foreach($result as $array => $value) {
			?>
				<div class="paard <?php echo $value['naam']?>">
	}