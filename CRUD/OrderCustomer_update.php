<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DB";
    $conn = new mysqli($servername, $username, $password,$dbname);
    mysqli_set_charset($conn, "utf8");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
  $sql = "SELECT * FROM order_customer where id='".$_GET["id"]."'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc()
    
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Order_Customer</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- font awesome for icons -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- flex slider css -->
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
        <!-- owl slider css -->
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
        <!-- jQuery UI -->
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css" media="screen">
        <!--lightbox-->
        <link href="lightbox2/dist/css/lightbox.css" rel="stylesheet">
        <!-- custom css-->
        <link href="css/restaurant-onepage-dark.css" rel="stylesheet" type="text/css" media="screen">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body data-spy="scroll">
    <br><br><br><br>
    <!--<img src="img/black_ribbon_bottom_left.png" class="black-ribbon stick-bottom stick-left"> -->
        <!-- Static navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav scroll-to navbar-right">
                        <li><a href="#Order_Customer">Order Customer</a></li>
                        <li><a href="admin.html">Back To Home</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>




        <section id="Order" class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 center-title text-center">
                        <h3>ORDER CUSTOMER</h3>
                        <span class="center-line"></span>
                        <p>
                            
                        </p>
                    </div>
                </div><!--section title-->

                <section id="add" class="about-section" >
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 center-title text-center">
                        <span class="center-line"></span>
                    </div>
                </div><!--section title-->
                <div class="row">
                  <div class="col-xs-offset-1 col-xs-10">
                <div class="panel panel-default formPanel">
                          <div class="panel-heading bg-color-1 border-color-1">
                            <h3 class="panel-title">Add Customer</h3>
                          </div>
                          <div class="panel-body">
                                <form action="OrderCustomer_edit.php?id=<?=$row["id"]?>" method="POST" role="form" enctype="multipart/form-data">
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">Name</label>
                                           <input type="text" class="form-control" name="Name" value="<?=$row["Name"]?>" required>
                                        </div>
                                      </div>
                                       <div class="form-group formField">
                                        <div class="col-xs-12">
                                              <label for="">OrderID</label>
                                               <input type="text" class="form-control" name="OrderID" value="<?=$row["OrderID"]?>" required>
                                        </div>
                                      </div>
                                      
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                              <label for="">Detail</label>
                                               <input type="text" class="form-control" name="Detail" value="<?=$row["Detail"]?>" required>
                                        </div>
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">Total</label>
                                           <input type="text" class="form-control" name="Total" value="<?=$row["Total"]?>" required>
                                        </div>
                                      </div>
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">Price</label>
                                           <input type="text" class="form-control" name="Price" value="<?=$row["Price"]?>" required>
                                        </div>
                                      </div>
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">lineTotal</label>
                                           <input type="text" class="form-control" name="linetotal" value="<?=$row["linetotal"]?>" required>
                                        </div>
                                      </div>
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">StartDate</label>
                                           <input type="text" class="form-control" name="startdate" value="<?=$row["startdate"]?>" required>
                                        </div>
                                      </div>
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">Deadline</label>
                                           <input type="text" class="form-control" name="deadline" value="<?=$row["deadline"]?>" required>
                                        </div>
                                      </div>
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">Tel</label>
                                           <input type="text" class="form-control" name="Tel" value="<?=$row["Tel"]?>" required>
                                        </div>
                                      </div>
                                      <div class="form-group formField">
                                            <div class="col-xs-12">
                                              <label></label>
                                                <input type="submit" class="btn btn-primary btn-block bg-color-3 border-color-3" value="Submit">
                                            </div>
                                      </div>
                                </form>
                   </div>
                </div>
             </div>  
         </div>
     </div>