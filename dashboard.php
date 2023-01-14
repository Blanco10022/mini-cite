
<?php
  include('connection.php');
  
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mini_cite</title>
	<!--<meta http-equiv = "refresh" content = "0; url = http://localhost/mini_cite/login.php" />-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
	 <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
  </head>
  <style>
body{
			background-image:url(jons.jpg);
             background-size: cover;
			
		}
		img{
			
			border-radius: 50px;
		}
      #box{
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }
    .container1{
        width:100%;
        height: 100vh;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card{
        /*border: 1px solid red;*/
        width: 22vw;
        height: auto;
        position: relative; 
        border-radius:0.4rem ;
        overflow: hidden;
        box-shadow: 1px 1px 1rem rgb(201, 201, 201);
    }
    .img_holder {
        width: 100%;
        position: relative;
        height: 45vh;
        border-radius: 0.5rem;
        overflow: hidden;
    }
    #img{
        height: 45vh;
        width: 100% 45vh;
      
        background-size: cover;
        background-position: center; 
        background-repeat: no-repeat;
        transition: 0.2s;
    }
   #img:hover {
    transform: scale(1.3);
   }

   #details {
    width: 100%;
    position: center;
    padding: 1vh;
   }
   .details h2{
    font-size: 2vw;
    text-transform: capitalize;
    color: rgb(82, 82, 82);
    margin-bottom: 1vh;
   } 

    button {
    background: rgb(78, 78, 78);
    border: none;
    height: 1%;
    font-size: 1.4vm;
    margin: 2vh 0 1vh 0;
    outline: none;
    color: gray;
    text-transform: capitalize;
    transition: 0.2s;
    border-radius: 0.2rem;
    width: 70%;
    transform: translateX(45px);

   }
  button:hover {
    background: indigo;
    color: white;
    cursor: pointer;
   }

   .nav-item1{
    float: right;
   }
.card{
			background-image:url(jons.jpg);
             background-size: cover;
			 border-radius: 20px;
			
		}
		
h2{color: black;}

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



  <div class="container1" id="box">
   
    <div class="card">
	<a class="btn" href="tenants.php">
        <div class="img_holder">
            <div id="img" style="background-image: url(q.png);"></div>
        </div>
        <div class="details">
            <h2 style="text-align:center;">Tennants</h2>    
        </div>
    </div>
	 </a>
	<br><br>
    
    <div class="card">
        <a class="btn" href="detail.php">
		<div class="img_holder">
            <div id="img" style="background-image: url(D.png);"></div>
        </div>
        <div class="details">
            <h2 style="text-align:center;">Details</h2>    
        </div>
       
    </div>
	</a>
      <br><br>
	  
	  
      <div class="card">
	  <a class="btn" href="payment.php">
        <div class="img_holder">
            <div id="img" style="background-image: url(m.png);"></div>
        </div>
        <div class="details">
            <h2 style="text-align:center;">Payments</h2>    
        </div>
    </div>
  </div>
  </a>
  
  
  
</body>
</html>