<?php
  require_once('connection.php');
  $upload_dir = 'images/';

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from card where id=".$id;
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

		

		

		if(!isset($errorMsg)){
			$sql = "update card
					set username = '".$username."',
					name = '".$name."',
					date = '".$date."',
					place = '".$place."',
					sex = '".$sex."',
					city = '".$city."',
					profession = '".$profession."',
					father = '".$father."',
					mother = '".$mother."',
					mobile = '".$mobile."',
					address = '".$address."',
					o = '".$o."',
					i = '".$i."',
					nation = '".$nation."' where id=".$id;
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record updated successfully';
				header('Location:detail.php');
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
    <title>Minif_cite</title>
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
	
	
	

		<div class="col-md-12">			
				
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
				</div><br><br>
			</div>
			<div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>DATE OF BIRTH</label> 
							<input type="date" name="date" value="<?php echo $row['date'] ?>"  class="form-control"  placeholder="Enter date of birth..." required>
                        </div>
				</div>
		
                <div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>PLACE OF BIRTH</label> 
							<input type="text" name="place" value="<?php echo $row['place'] ?>"  class="form-control" placeholder="Enter place of birth..." required>
                         </div>
				</div>
			</div>
			<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>SEX</label> 
							<input type="text" id="sex" name="sex" class="form-control" value="<?php echo $row['sex'] ?>"  placeholder="Male or female" required>
                         </div>
			</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>CITY</label>  
							<input type="text" name="city" value="<?php echo $row['city'] ?>"  class="form-control"  placeholder="Enter city..." required>
                       </div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group ">
                            <label>OCCUPATION</label>  
							<input type="text" name="profession" value="<?php echo $row['profession'] ?>"  class="form-control"  placeholder="Enter profession..." required>
                       </div>
				</div>
			</div>
			 <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>FATHER</label>
                            <input type="text" name="father" value="<?php echo $row['father'] ?>"  class="form-control"  placeholder="Enter father name..." required>
                        </div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>MOTHER</label> 
							<input type="text" name="mother" value="<?php echo $row['mother'] ?>"  class="form-control"  placeholder="Enter mother name..." required>
                       </div>
				</div>
			</div>
			 <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group ">
                            <label>MOBILE</label>
                           <input type="number" name="mobile" value="<?php echo $row['mobile'] ?>"  class="form-control"   required>
                        </div>
				</div>
				
			</div>
			
			 <div class="row">
			 <div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>ADRESSE/ADDRESS</label> 
							<input type="text" name="address" value="<?php echo $row['address'] ?>"  class="form-control" placeholder="Enter address..." required>
                       </div>
				</div>
                <div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>IDENTIFICATION POST</label>
                            <input type="text" name="o" value="<?php echo $row['o'] ?>"  class="form-control"   required>
                        </div>
				</div>
				</div>
				<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>UNIQUE IDENTIFIER</label> 
							<input type="text" name="i" value="<?php echo $row['i'] ?>"  class="form-control"  required>
                       </div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>NATIONALITY</label> 
							<input type="text" name="nation" value="<?php echo $row['nation'] ?>"  class="form-control"  required>
                       </div>
				</div>
			</div>
		
		
			  
 <div class="form-group">
 <a href="detail.php" class="btn btn-danger ">Cancel</a>
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

