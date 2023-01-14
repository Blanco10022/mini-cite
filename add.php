<?php
  require_once('connection.php');
  $upload_dir = 'images/';

  if (isset($_POST['submit'])) {
	  
    $username = $_POST['username'];
    $name = $_POST['name'];
	$date = $_POST['date'];
    $place = $_POST['place'];
	$sex = $_POST['sex'];
	$city = $_POST['city'];
	$profession = $_POST['profession'];
	$father = $_POST['father'];
	$mother = $_POST['mother'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$o = $_POST['o'];
	$i = $_POST['i'];
	$nation = $_POST['nation'];

   

    if(empty($username)){
			$errorMsg = 'Please input username';// surname
		}elseif(empty($name)){
			$errorMsg = 'Please input name';// given name
		}elseif(empty($date)){
			$errorMsg = 'Please input date'; //date of birth
		}elseif(empty($place)){
			$errorMsg = 'Please input place';//place of birth
		}elseif(empty($sex)){
			$errorMsg = 'Please input sex';
		}elseif(empty($city)){
			$errorMsg = 'Please input city';
		}elseif(empty($profession)){
			$errorMsg = 'Please input profession';
		}elseif(empty($father)){
			$errorMsg = 'Please input father';
		}elseif(empty($mother)){
			$errorMsg = 'Please input mother';
		}elseif(empty($mobile)){
			$errorMsg = 'Please input mobile';
		}elseif(empty($address)){
			$errorMsg = 'Please input address';
		}elseif(empty($o)){
			$errorMsg = 'Please input o';//identification post
		}elseif(empty($i)){
			$errorMsg = 'Please input i';//unique identifier
		}elseif(empty($nation)){
			$errorMsg = 'Please input nation';//unique nationality
		}
		
		


		if(!isset($errorMsg)){
			$sql = "insert into card(username, name, date, place, sex, city, profession, father, mother, mobile, address, o, i,nation)
					values('".$username."', '".$name."', '".$date."', '".$place."', '".$sex."', '".$city."', '".$profession."', '".$father."', '".$mother."', '".$mobile."', '".$address."', '".$o."', '".$i."','".$nation."')";
		
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record added successfully';
				header('Location:detail.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}
  }
?>
