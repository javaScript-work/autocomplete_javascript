<?php
class publicIndex
{

	function getallName()
		{
			$result = $mysqli->query("SELECT `name` FROM tbl_name");
			$row1 = $result->fetch_assoc();
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo $row['name'];
				}
			}
		}
}
?>