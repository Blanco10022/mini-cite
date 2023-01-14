


<?php
  include('connection.php');
  $upload_dir = 'images/';

  if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$sql = "select * from card where id = ".$id;
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$image = $row['image'];
			
			$sql = "delete from card where id=".$id;
			if(mysqli_query($conn, $sql)){
				header('location:detail.php');
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

 
 <!-- Table -->
		   <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                      <div class="card-body">
					  <input class="form-control" id="myInput" type="text" placeholder="Search.."><br></br>

					  <div class="table-responsive">
                      <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                 <th >#</th>
							  <th>SURNAME</th>
							  <th>GIVEN NAMES</th>
							  <th>DATE OF BIRTH</th>
							  <th>PLACE OF BIRTH</th>
							  <th>SEX</th>
							  <th>CITY</th>
							  <th>OCCUPATION</th>
							  <th>FATHER</th>
							  <th>MOTHER</th>
							  <th>MOBILE</th>
							  <th>ADDRESS</th>
							  <th>IDENTIFICATION POST</th>
							  <th>UNIQUE IDENTIFIER</th>
							  <th>NATIONALITY</th>
							  <th>View Profile</th>
							  <th>Edit</th>
							  <th>Delete</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                          <?php
                            $sql = "select * from card";
                            $result = mysqli_query($conn, $sql);
                    				if(mysqli_num_rows($result)){
                    					while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['username']; ?></td>
							<td><?php echo $row['name']; ?></td> 
							<td><?php echo $row['date']; ?></td>
							<td><?php echo $row['place']; ?></td>
							<td><?php echo $row['sex']; ?></td>
							<td><?php echo $row['city']; ?></td>
							<td><?php echo $row['profession']; ?></td>
							<td><?php echo $row['father']; ?></td>
							<td><?php echo $row['mother']; ?></td>
							<td><?php echo $row['mobile']; ?></td>
							<td><?php echo $row['address']; ?></td>
							<td><?php echo $row['o']; ?></td>
							<td><?php echo $row['i']; ?></td>
							<td><?php echo $row['nation']; ?></td>
							<td class="text-center"> <a href="view.php?id=<?php echo $row['id'] ?>" class="btn btn-danger"><i class="fa fa-eye"></i></a> </td>
							<td class="text-center">  <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-info"><i class="fa fa-user-edit"></i></a> </td>
							<td class="text-center"> <a href="detail.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash-alt"></i></a> </td>
                            
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


    
	  </body>
	  </html>
	    