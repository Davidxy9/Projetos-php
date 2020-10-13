<?php
	$conn= new PDO('mysql:host=localhost;dbname=meubd','root','');
	
	$result = $conn ->query("SELECT id,nome from famosos");
	
	if($result)
			foreach($result as $row)
				echo $row['id'].'-'.$row['nome'].'<br>';
				
	$conn->exec("DELETE FROM famosos WHERE id=15");
	$conn = null;
	



?>