


<?php
  include('connection.php');
 
?>



<!DOCTYPE html>
<html>
  <head>
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
		b{color: blue;
		position: center;
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
   <br><br>
	  
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card">
             
              <div class="card-body">
                <form class="" action="add.php" method="post" enctype="multipart/form-data">
				
	<div class="row">
	
	<!-- TENANTS INFORMATION -->
	
			<h2><b><strong>Tenants Registration</strong></b><h2>
		<div class="col-xs-12, col-sm-12 col-md-12">			
				
            <div class="row">
			
                <div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>SURNAME</label>
                            <input type="text" name="username" class="form-control" value=""  placeholder="Enter surname..." required>
                        </div>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>GIVEN NAMES</label> 
							<input type="text" name="name" class="form-control" value=""  placeholder="Enter name..." required>
                       </div>
				</div>
				
			</div>
			
			<div class="row">
			
                <div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>DATE OF BIRTH</label> 
							<input type="date" name="date" class="form-control" value=""  placeholder="Enter date of birth..." required>
                        </div>
				</div>
		
                <div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>PLACE OF BIRTH</label> 
							<input type="text" name="place" class="form-control" value=""  placeholder="Enter place of birth..." required>
                         </div>
				</div>
				
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>SEX</label> 
							<input type="text" id="sex" name="sex" class="form-control" value=""  placeholder="Enter sex..." required>
                         </div>
				</div>
			
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>CITY</label>  
							<input type="text" name="city" class="form-control" value=""  placeholder="Enter city..." required>
                       </div>
				</div>
			</div>
			
			<div class="row">
			
				<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group ">
                            <label>OCCUPATION</label>  
							<input type="text" name="profession" class="form-control" value=""  placeholder="Enter profession..." required>
                       </div>
				</div>
				
			</div>
			
			<div class="row">
			 
                <div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>FATHER</label>
                            <input type="text" name="father" class="form-control" value=""  placeholder="Enter father name..." required>
                        </div>
				</div>
					
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>MOTHER</label> 
							<input type="text" name="mother" class="form-control" value=""  placeholder="Enter mother name..." required>
                       </div>
				</div>
				
			</div>
			
			<div class="row">
			
                <div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group ">
                            <label>MOBILE</label>
                            <input type="number" name="mobile" class="form-control" value=""   placeholder="Example; +23765xxxxxxx" required>
                        </div>
				</div>
				
			</div>
			
			
			<div class="row">
			
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>ADDRESS</label> 
							<input type="text" name="address" class="form-control" value=""  placeholder="Enter address..." required>
                       </div>
				</div>
				
                <div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>IDENTIFICATION POST</label>
                            <input type="number" name="o" class="form-control" value=""   required>
                        </div>
				</div>
				
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>UNIQUE IDENTIFIER</label> 
							<input type="number" name="i" class="form-control" value=""  required>
                       </div>
				</div>
				
			
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group ">
                            <label>NATIONALITY</label> 
							<input type="text" name="nation" class="form-control" value=""  placeholder="Enter nationality..." required>
                        </div>
				</div>
				
			</div>
			
		
		
		
			  
 <div class="form-group">
 <a href="dashboard.php" class="btn btn-danger ">Cancel</a>
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
	    