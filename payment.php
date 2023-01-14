 
 
 
 <?php
  include('connection.php');
  $upload_dir = 'images/';

  if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$sql = "select * from pay where id = ".$id;
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$image = $row['image'];
			
			$sql = "delete from pay where id=".$id;
			if(mysqli_query($conn, $sql)){
				header('location:payment.php');
			}
		}
	}
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
 
 
 
  <!-- Payment registration modal-->
 
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-image: url(jons.jpg)">
     
	  
	  
    <div class="modal-body mx-3">
	  
	  
	  
	  
      <!-- PAYEMENTS INFORMATION -->
			<form class="" action="add1.php" method="post" enctype="multipart/form-data">
			<h2><b><strong>Payments Information</strong></b><h2>
			
			
				<div class="col-xs-12 col-sm-12 col-md-12">
			
					<div class="form-group ">
			
						<label>Payment Reciept</label>
						
						<div class="row">
				
							<div class="col-md-12 ">
				  
									<?php if (!empty($msg)): ?>
								<div class="alert <?php echo $msg_class ?>" role="alert">
									<?php echo $msg; ?>
								</div>
									<?php endif; ?>
								<div class="form-group text-center" style="position: relative;" >
									<span class="img-div">
										<div class="text-center "  onClick="triggerClick()">
										</div>
										<img src="shot.jpg" onClick="triggerClick()" id="profileDisplay">
									</span>
										<input type="file" name="image" onChange="displayImage(this)" id="image" class="form-control" required>
								</div>
								
							</div>
							
						</div>
						
					</div>
			
				</div>
				
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
		<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group ">
                            <label>DEPOSIT</label>
                            <input type="number" name="deposit" class="form-control" value=""   placeholder="Example; 25000FCFA" required>
                        </div>
				</div>
				
				<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group ">
                            <label>MONTHS</label> 
							<input type="text" name="month" class="form-control" value=""   placeholder="January, Feb... " required>
                       </div>
				</div>
				
				<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group ">
                            <label>ROOM NUMBER</label> 
							<input type="number" name="room" class="form-control" value=""   placeholder="Example; 1,2,3..." required>
                       </div>
				</div>
			</div>
			
			
			<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group ">
                            <label>DATE OF PAYMENTS</label>
                            <input type="date" name="dop" class="form-control" value="" placeholder="Enter date of deposit..."  required>
                        </div>
				</div>
			</div>
		
		




    </div>
	  
	  
    <div class="modal-footer d-flex justify-content-center">
        
		
		<div class="form-group">
			<a href="dashboard.php" class="btn btn-danger ">Cancel</a>
			<button type="submit" name="submit" class="btn btn-primary pull-left">submit</button>
		</div>
		
		
    </div>
	  
    </div>
  </div>
</div>


 
 
 <br>
 <br>
 
 
 
 <!-- Table -->
		   <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
					<div class="card-header">
								<b>List of Payments</b>
								<span class="float:right"><a class="btn btn-primary btn-block btn-sm col-sm-2 float-right" href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm"">
								<i class="fa fa-plus"></i> New Payments
								</a></span>
					</div>
                      <div class="card-body">
					   <input class="form-control" id="myInput" type="text" placeholder="Search.."><br></br>

					  <div class="table-responsive">
                      <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                 <th >#</th>
							  <th>IMAGE</th>  
							  <th>SURNAME</th>
							  <th>GIVEN NAMES</th>
							  <th>DATE OF PAYMENT</th>
							  <th>DEPOSIT</th>
							  <th>MONTHS</th>
							  <th>ROOMS</th>
							  <th>View Payment</th>
							  <th>Edit</th>
							  <th>Delete</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                          <?php
                            $sql = "select * from pay";
                            $result = mysqli_query($conn, $sql);
                    				if(mysqli_num_rows($result)){
                    					while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><img src="<?php echo 'images/' . $row['image'] ?>" width="90" height="90" alt=""></td>
                            <td><?php echo $row['username']; ?></td>
							<td><?php echo $row['name']; ?></td> 
							<td><?php echo $row['dop']; ?></td>
							<td><?php echo $row['deposit']; ?></td>
							<td><?php echo $row['month']; ?></td>
							<td><?php echo $row['room']; ?></td>
							<td class="text-center"> <a href="view1.php?id=<?php echo $row['id'] ?>" class="btn btn-danger"><i class="fa fa-eye"></i></a> </td>
							<td class="text-center">  <a href="edit1.php?id=<?php echo $row['id'] ?>" class="btn btn-info"><i class="fa fa-user-edit"></i></a> </td>
							<td class="text-center"> <a href="payment.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash-alt"></i></a> </td>
                            
                          </tr>
                          <?php
                              }
                            }
                          ?>
                        </tbody>
                      </table>
					  </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
	  
	   <!-- This script is for the the search engine in the table-->
	  <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
	  
	  <!-- This script is for the modal-->
	    <script src="js/bootstrap.min.js" charset="utf-8"></script>
   
	  </body>
	  </html>
	    <script src="script.js"></script>