
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
?>

<!DOCTYPE html>
<html>
<head>
<title>LOGIN PAGE</title>
<meta charset="utf-8">
    <title>Mini_cite</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
	 <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
  
    <style type="text/css">
	.container{
			color: black;
			
			
		}
		body{
			background-image:url(jons.jpg);
             background-size: cover;
			
		}
		img{
			
			border-radius: 50px;
		}
		.card{
			background-image:url(jons.jpg);
             background-size: cover;
			 border-radius: 20px;
			
		}
		label{
			
			font-size: 10px;
		}
		
			
</style>
</head>
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
              <div class="card-body">
           
              <div class="row">
               
                <div class="col-md-12">
                  
					
					
					
			<div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>SURNAME</label>
							 <h5 class="form-control"><i class="fa fa-user-tag">
								<span><?php echo $row['username'] ?></span>
							</i></h5>
                        </div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group ">
                            <label>GIVEN NAMES</label> 
							<h5 class="form-control"><i class="fa fa-user-tag">
								<span><?php echo $row['name'] ?></span>
							</i></h5>       
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>DATE OF BIRTH</label> 
								<h5 class="form-control"><i class="fa fa-user-tag">
									<span><?php echo $row['date'] ?></span>
								</i></h5>          
						</div>
				</div>
		
                <div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>PLACE OF BIRTH</label> 
								<h5 class="form-control"><i class="fa fa-user-tag">
									<span><?php echo $row['place'] ?></span>
								</i></h5>     
						</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>SEX</label> 
							 <h5 class="form-control"><i class="fa fa-user-tag">
								<span><?php echo $row['sex'] ?></span>
							</i></h5>
                         </div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>CITY</label>  
							<h5 class="form-control"><i class="fa fa-user-tag">
								<span><?php echo $row['city'] ?></span>
							</i></h5>                       </div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group ">
                            <label>OCCUPATION</label>  
							<h5 class="form-control"><i class="fa fa-user-tag">
								<span><?php echo $row['profession'] ?></span>
							</i></h5>                       </div>
				</div>
			</div>
			 <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>FATHER</label>
							<h5 class="form-control"><i class="fa fa-user-tag">
								<span><?php echo $row['father'] ?></span>
							</i></h5>                    
						</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>MOTHER</label> 
							<h5 class="form-control"><i class="fa fa-user-tag">
								<span><?php echo $row['mother'] ?></span>
							</i></h5>           
						</div>
				</div>
			</div>
			 <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group ">
                            <label>MOBILE</label>
							<h5 class="form-control"><i class="fa fa-user-tag">
								<span><?php echo $row['mobile'] ?></span>
							</i></h5>          
						</div>
				</div>
				
			</div>
			
			 <div class="row">
			 <div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>ADRESSE/ADDRESS</label> 
							<h5 class="form-control"><i class="fa fa-user-tag">
								<span><?php echo $row['address'] ?></span>
							</i></h5>      
						</div>
				</div>
                <div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>IDENTIFICATION POST</label>
							<h5 class="form-control"><i class="fa fa-user-tag">
								<span><?php echo $row['o'] ?></span>
							</i></h5>           
						</div>
				</div>
				</div>
				 <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>UNIQUE IDENTIFIER</label> 
							<h5 class="form-control"><i class="fa fa-user-tag">
								<span><?php echo $row['i'] ?></span>
							</i></h5>                   
						</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>NATIONALITY</label> 
							<h5 class="form-control"><i class="fa fa-user-tag">
								<span><?php echo $row['nation'] ?></span>
							</i></h5>                   
						</div>
				</div>
					</div>
					
					
					<a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-info"><i class="fa fa-user-edit">EDIT</i></a>
					
					

                    
					  <a class="btn btn-outline-danger" href="detail.php"><i class="fa fa-sign-out-alt"></i><span>Back</span></a>
					

                </div>
              </div>

      
	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>

</body>
</html>
