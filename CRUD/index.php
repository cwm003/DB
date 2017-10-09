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
                                <form action="OrderCustomer_add.php" method="POST" role="form" enctype="multipart/form-data">
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">Name</label>
                                           <input type="text" class="form-control" name="Name" placeholder="Name" required>
                                        </div>
                                      </div>
                                       <div class="form-group formField">
                                        <div class="col-xs-12">
                                              <label for="">OrderID</label>
                                               <input type="text" class="form-control" name="OrderID" placeholder="OrderID" required>
                                        </div>
                                      </div>
                                      
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                              <label for="">Detail</label>
                                               <input type="text" class="form-control" name="Detail" placeholder="Detail" required>
                                        </div>
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">Total</label>
                                           <input type="text" class="form-control" name="Total" placeholder="Total" required>
                                        </div>
                                      </div>
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">Price</label>
                                           <input type="text" class="form-control" name="Price" placeholder="Price" required>
                                        </div>
                                      </div>
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">lineTotal</label>
                                           <input type="text" class="form-control" name="linetotal" placeholder="linetotal" required>
                                        </div>
                                      </div>
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">StartDate</label>
                                           <input type="text" class="form-control" name="startdate" placeholder="startdate" required>
                                        </div>
                                      </div>
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">Deadline</label>
                                           <input type="text" class="form-control" name="deadline" placeholder="daedline" required>
                                        </div>
                                      </div>
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">Tel</label>
                                           <input type="text" class="form-control" name="Tel" placeholder="Tel" required>
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
 
</section>
<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr bgcolor="#FFCC00">
        <th>#</th>
        <th>Name customer</th>
        <th>Order ID</th>
        <th>Detail</th>
        <th>Total</th>
        <th>Price</th>
        <th>LineTotal</th>
         <th>StartDate</th>
        <th>Deadline</th>
        <th>Tel.</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    
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
    $sql = "SELECT * FROM order_customer";
    $result = $conn->query($sql);
    ?>

<tbody>
                   <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?=$row["id"]?></td>
                        <td><?=$row["Name"]?></td>
                        <td><?=$row["OrderID"]?></td>
                        <td><?=$row["Detail"]?></td>
                        <td><?=$row["Total"]?></td>
                        <td><?=$row["Price"]?></td>
                        <td><?=$row["linetotal"]?></td>
                        <td><?=$row["startdate"]?></td>
                        <td><?=$row["deadline"]?></td>
                        <td><?=$row["Tel"]?></td>
                        <td><a href="OrderCustomer_update.php?id=<?=$row["id"]?>">update</td>
                        <td><a href="OrderCustomer_delete.php?id=<?=$row["id"]?>">delete</td>
                    </tr>
                <?php endwhile; ?>
            </tbody>

    </div></table>
</div>
        </section><!--about us-->


        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap js-->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!--easing plugin for smooth scroll-->
        <script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <script src="js/jquery.backstretch.min.js" type="text/javascript"></script>
        <!--flex slider plugin-->
        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--owl carousel slider js-->
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <!-- jQuery UI -->
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <!--pace plugin-->
        <script src="js/pace.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="js/wow.min.js" type="text/javascript"></script> 
        <!--popup js-->
        <script src="lightbox2/dist/js/lightbox.min.js" type="text/javascript"></script>
        <!--cantact form script-->
        <script src="js/contact_me.js" type="text/javascript"></script>
        <script src="js/jqBootstrapValidation.js" type="text/javascript"></script>
        <!--restaurant custom js-->
        <script src="js/restaurant-custom.js" type="text/javascript"></script>
        <!--gmap js-->
       <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript">
            var myLatlng;
            var map;
            var marker;

            function initialize() {
                myLatlng = new google.maps.LatLng(18.7954465,98.9526088);

                var mapOptions = {
                    zoom: 17,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: true,
                    draggable: true
                };
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var contentString = '<p style="line-height: 20px;"><strong>คณะวิศวกรรมศาสตร์ มหาวิทยาลัยเชียงใหม่</strong></p><p>239 ถนนห้วยแก้ว ตำบลสุเทพ อำเภอเมือง จังหวัดเชียงใหม่ 50200</p>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Marker'
                });

                google.maps.event.addListener(marker, 'click', function () {
                    infowindow.open(map, marker);
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
</html


