<?php
  require_once('connection.php');
  $upload_dir = 'images/';

  if (isset($_POST['submit'])) {
	  
    $username = $_POST['username'];
    $name = $_POST['name'];
	$deposit = $_POST['deposit'];
	$room = $_POST['room'];
	$month = $_POST['month'];
	$dop = $_POST['dop'];
	

    $imgName = $_FILES['image']['name'];
		$imgTmp = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];

    if(empty($username)){
			$errorMsg = 'Please input username';// surname
		}elseif(empty($name)){
			$errorMsg = 'Please input name';// given name
		}elseif(empty($deposit)){
			$errorMsg = 'Please input deposit';//
		}elseif(empty($room)){
			$errorMsg = 'Please input room';//
		}elseif(empty($month)){
			$errorMsg = 'Please input month';//
		}elseif(empty($dop)){
			$errorMsg = 'Please input dop';//date of payment
		}
		
		else{

			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$image = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

				if($imgSize < 5000000){
					move_uploaded_file($imgTmp ,$upload_dir.$image);
				}else{
					$errorMsg = 'Image too large';
				}
			}else{
				$errorMsg = 'Please select a valid image';
			}
		}


		if(!isset($errorMsg)){
					
			$sql = "insert into pay(username, name, deposit, room, month, dop, image)
					values('".$username."', '".$name."', '".$deposit."', '".$room."', '".$month."', '".$dop."', '".$image."')";
					
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record added successfully';
				header('Location:payment.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}
  }
?>
