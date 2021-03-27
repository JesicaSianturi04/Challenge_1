<?php
	function biodata(){
		$name = "Jesica Sianturi";
		$age = 19;
		$address = "tambunan";
		$hobbies = "Listen music";
		$is_married = FALSE;
		$list_school = [
			["name" => "SD N 18 Mekarjaya", "year_in" => 2006, "year_out"=>2012],
			["name" => "SMP Swasta yapemri", "year_in" => 2012, "year_out"=>2015],
			["name" => "SMA Swasta Bintang Timur 1 Balige", "year_in" => 2015, "year_out"=>2018],
			["name" => "Institut Teknologi Del", "year_in" => 2018, "year_out"=>2021]
		];
		$skills = [
			["skill_name" => "Designer", "level" => "advanced"],
			["skill_name" => "Programming", "level" => "advanced"],
			["skill_name" => "Web Develop", "level" => "advanced"],
			["skill_name" => "Database Adminstrator", "level" => "advanced"]
		];
		$interest = TRUE;
		$biodata = [
			"name" => $name,
			"age" => $age,
			"address" => $address,
			"hobbies" => $hobbies,
			"is_married" => $is_married,
			"list_school" => $list_school,
			"skills" => $skills,
			"interest_in_coding" => $interest
		];
		echo json_encode($biodata);
	}
?>