<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Search by location</title>
	 <link rel = "stylesheet" href ="css/style.css" />
</head>
<body>
<h1> Bachelor's Essential --> Household solution --> Plumbers  </h1>
	  <a href = "http://localhost/myProject/home.php"> Home </a>
	  
	  	  <a href = "http://localhost/myProject/gtg.php"style = "margin-left: 20px;"> Electricians </a>
	  
	  <a href = "http://localhost/myProject/water.php"style = "margin-left: 20px;"> Water supply </a>
	  
	  <a href = "http://localhost/myProject/laundry.php"style = "margin-left: 20px;"> Laundry service </a>
	  
	  <hr/>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>!!! Search for plumbers in your area !!! </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="plumadd.php" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="mohakhali/bashundhara">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Area</th>
                                    <th>Phone</th>
                                    <th>Price</th>
									
                                </tr>
                            </thead>
							 </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>