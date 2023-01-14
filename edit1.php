<?php
  require_once('connection.php');
  $upload_dir = 'images/';

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from pay where id=".$id;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }else {
      $errorMsg = 'Could not Find Any Record';
    }
  }

  if(isset($_POST['submit'])){
		 $username = $_POST['username'];
    $name = $_POST['name'];
	$date = $_POST['date'];
	$deposit = $_POST['deposit'];
	$month = $_POST['month'];
	$room = $_POST['room'];
	$dop = $_POST['dop'];

		$imgName = $_FILES['image']['name'];
		$imgTmp = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];

		if($imgName){

			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$image = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

				if($imgSize < 5000000){
					unlink($upload_dir.$row['image']);
					move_uploaded_file($imgTmp ,$upload_dir.$image);
				}else{
					$errorMsg = 'Image too large';
				}
			}else{
				$errorMsg = 'Please select a valid image';
			}
		}else{

			$image = $row['image'];
		}

		if(!isset($errorMsg)){
			$sql = "update pay
					set username = '".$username."',
					name = '".$name."',
					deposit = '".$deposit."',
					month = '".$month."',
					room = '".$room."',
					dop = '".$dop."',
					image = '".$image."' where id=".$id;
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record updated successfully';
				header('Location:payment.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}

	}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
	<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
  
  </head> 
   <style type="text/css">
      
		.container{
			color: black;
		}
		body{
			background-image:url(jons.jpg);
             background-size: cover;
			
		}
		img{
			border-radius:50px;
		}
		.card{
			background-image:url(jons.jpg);
             background-size: cover;
			 border-radius: 20px;
			
		}
		
			
    </style>
  <body>
 <!-- navbar -->
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="dashboard.php">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="tenants.php">Tenants</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="payment.php">Payments</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="detail.php">Details</a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>  -->  
    </ul>
  </div>  
</nav>
<br>
 <br>

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                Edit Profile
              </div>
              <div class="card-body">
                <form class="" action="" method="post" enctype="multipart/form-data">
   <div class="row">
	
	
	<div class="col-md-6">
			
			<div class="form-group ">
						<label>Image</label>
				<div class="row">
				  <div class="col-md-6 ">
				  
					  <?php if (!empty($msg)): ?>
						<div class="alert <?php echo $msg_class ?>" role="alert">
						  <?php echo $msg; ?>
						</div>
					  <?php endif; ?>
					  <div class="form-group text-center" style="position: relative;" >
						<span class="img-div">
						  <div class="text-center "  onClick="triggerClick()">
						  </div>
						  <img src="<?php echo 'images/' . $row['image'] ?>" width="90" height="90" alt="" onClick="triggerClick()" id="profileDisplay">
						</span>
						<input type="file" name="image" onChange="displayImage(this)" value="<?php echo $row['image'] ?>" id="image" class="form-control" >
					  </div>
				  </div>
				</div>
			</div>
		</div>

		<div class="col-md-6">			
				
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>SURNAME</label>
                           <input type="text" name="username" value="<?php echo $row['username'] ?>"  class="form-control" placeholder="Enter surname" Required><br></br>
                        </div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>GIVEN NAMES</label> 
							<input type="text" name="name" value="<?php echo $row['name'] ?>"  class="form-control"  placeholder="Enter name..." required>
                       </div>
				</div>
			</div>
			
		
			
			
			<div class="row">
                
				<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group ">
                            <label>DEPOSIT</label>
                            <input type="number" name="deposit" value="<?php echo $row['deposit'] ?>"  class="form-control"  required>
                        </div>
				</div>
				
				<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group ">
                            <label>MONTHS</label> 
							<input type="text" name="month" class="form-control" value="<?php echo $row['month'] ?>"    required>
                       </div>
				</div>
				
				<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group ">
                            <label>ROOM NUMBER</label> 
							<input type="number" name="room" class="form-control" value="<?php echo $row['room'] ?>"   required>
                       </div>
				</div>
			
			</div>
			
			<div class="row">
			
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>DATE OF PAYMENT</label> 
							<input type="date" name="dop" value="<?php echo $row['dop'] ?>"  class="form-control"   required>
                       </div>
				</div>
			
			</div>
		
		
			  
 <div class="form-group">
 <a href="payment.php" class="btn btn-danger ">Cancel</a>
		 <button type="submit" name="submit" class="btn btn-primary pull-left">submit</button>
  </div>
  </div>
   </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
   
  </body>
</html>
  <script src="script.js"></script>
