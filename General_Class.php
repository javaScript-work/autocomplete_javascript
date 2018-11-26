<?php
	class General_Class{

		public function test()
		{
			return "This is just test!!!";
		}

		//$result1 = $mysqli->query("SELECT * FROM tbl_about ORDER BY SN DESC LIMIT 1");
		//$row1 = $result1->fetch_assoc();
		function RemoveSpecialChar($value){
			$result  = preg_replace('/[^a-zA-Z0-9_ -]/s','',$value);
					
			return $result;
		}
		public function view_all()
		{
			global $db;
			$sql="SELECT * FROM tbl_name";
			$result = mysqli_query($db, $sql);
			$row = $result->fetch_assoc();		
			$records=array();
			while ($row=$result->fetch_assoc()) {
				//print_r($row);	
				$records[] = "'".$this->RemoveSpecialChar($row["name"])."'";
			}
			return implode(",",$records);

			//print_r($row1);
			// if ($result->num_rows > 0) {
			// 	while($row = $result->fetch_assoc()) {
			// 		return $row['name'];
			// 	}
			// }

			// $jobtitleData = mysqli_query($db, $sql);
			// //$jobtitleData=$this->get_results($this->sql);
			// $jobtitle=array();
			// if($jobtitleData){
			// 	foreach($jobtitleData as $data)
			// 	{
			// 		$jobtitle[]="'".$this->RemoveSpecialChar($data->address)."'";
			// 	}
			// }
			// return implode(",",$jobtitle);
				
		}

	}
$objAdmin = new General_Class();