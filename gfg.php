<?php
	
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
	function get_data() {
		
		$file_name='EmployeesData'. '.json';

	
			$current_data=file_get_contents("$file_name");
			$array_data=json_decode($current_data, true);

							
			$extra=array(
				'Id' => $_POST['ID'],
				'Name' => $_POST['name'],
				'Email' => $_POST['email'],
				'Department' => $_POST['department'],
				'Dirth-date' => $_POST['birth-date'],
				'Img' => $_POST['img'],
			);
			$array_data[]=$extra;
			return json_encode($array_data);

		
		}

	$file_name='EmployeesData'. '.json';
	
	if(file_put_contents("$file_name", get_data())) {
		echo 'success';
	}				
	else {
		echo 'There is some error';				
	}
}

	
?>

