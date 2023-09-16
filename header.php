<?php  include 'dbconnect.php';  ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Library</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    <script src="validation.js"></script>
  </head>
  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(logo.jpeg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" >Home</a>
	           
	          </li>
               <li>
                <a href="add_book.php">Book</a>
            </li>
	          
            
               
               
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Report</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="btable.php">Book Table</a>
                </li>
               
               
                
                
              </ul>
            </li>
	         
	          
	        </ul>

	        <div class="footer">
	        	
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
          <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
               
                
                <li class="nav-item">
                    <a class="nav-link" href="../index.html">Logout</a>
                </li>
                
              </ul>


            </div>

          </div>
        </nav>
        