<?php
session_start();
if (!isset($_SESSION["username"])) {

header("Location: ../index.php");
}

$username = $_SESSION["username"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/fav.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Homegate Management Solution
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700|Work+Sans:400,700|Material+Icons" />


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <head>
  <meta charset="utf-8">
  <title>Testing Out</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
  <link rel="stylesheet" href="paper.css">
  <style>
    #invoice-POS{
  box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);padding:2mm;margin: 0 auto;width: 80mm;
  background: #FFF;
  padding-top: 20px;
}
::selection {background: #f31544; color: #FFF;}
::moz-selection {background: #f31544; color: #FFF;}
h1{
  font-size: 1.5em;
  color: #222;
}
h2{font-size: .9em;}
h3{
  font-size: 1.2em;
  font-weight: 300;
  line-height: 2em;
}
p{
  font-size: .7em;
  color: #666;
  line-height: 1.2em;
}
 
#top, #bot{ /* Targets all id with 'col-' */
  border-bottom: 2px dotted #EEE;
  margin-bottom: 10px;
}

#top{min-height: 50px;}
#mid{min-height: 50px;} 
#bot{ min-height: 50px; margin-top: 30px}

/*#top .logo{
  
  height: 46.7px;
  width: 150px;
  background: url(../assets/img/logo.png) no-repeat;
  background-size: 100%;
}*/
#top h2{
  margin-top: 10px;
  font-size: 14px;
  font-weight: bold;
}
.clientlogo{
  float: left;
  height: 60px;
  width: 60px;
  background: url(../assets/img/logo.png) no-repeat;
  background-size: 60px 60px;
  border-radius: 50px;
}
.info{
  display: block;
  text-align: center;
  margin: 0;
}
.info p{
  text-align: center;
  margin: 0;
  padding: 0;
  font-size: 12px;
}
.info-2{
  display: block;
  //float:left;
  margin-left: 0;
}
.title{
  float: right;
}
.title p{text-align: right;} 
table{
  width: 100%;
  border-collapse: collapse;
}
th{
  padding: 5px 0 5px 5px;
  //border: 1px solid #EEE
  font-weight: bold;
}
td{
  padding: 5px 0 5px 5px;
  //border: 1px solid #EEE
  font-size: 12px;
}
.tabletitle{
  padding: 5px;
  font-size: 12px;
  background: #EEE;
  text-align: center;

}
.service{border-bottom: 1px solid #EEE;font-size: 12px;text-align: center;}
.item{width: 24mm;}
.itemtext{font-size: .5em;}

#legalcopy{
  margin-top: 30px;
  text-align: center;
}
  </style>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

      <div class="logo"><a href="#" class="simple-text logo-normal">
          <img src="../assets/img/logo.png" alt="">
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-reception" aria-expanded="false" aria-controls="ui-reception">              
              <p><b>Manage Reception</b><span style="float: right;"><img src="../assets/img/icons/expand_more.svg" alt=""></span></p>       
        
            </a>
            <div class="collapse" id="ui-reception">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="./add-customer.php"><i class="material-icons">luggage</i><p>Add Customer </p></a></li>                
                <li class="nav-item"> <a class="nav-link" href="./create-reserve.php"><i class="material-icons">luggage</i><p>Create Reservation</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./customers.php"><i class="material-icons">people</i><p>View Customer List</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./creserve.php"><i class="material-icons">people</i><p>View Reserved List</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="#"><i class="material-icons">credit_card</i><p>View Assigned Keys Cards</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./add-room.php"><i class="material-icons">bed</i><p>Add Rooms</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./view-room.php"><i class="material-icons">bed</i><p>View Rooms</p></a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-accounting" aria-expanded="false" aria-controls="ui-accounting">              
              <p><b>Manage Accounting </b><span style="float: right;"><img src="../assets/img/icons/expand_more.svg" alt=""></span></p>       
        
            </a>
            <div class="collapse" id="ui-accounting">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="./view-accounting-order.php"><i class="material-icons">receipt_long</i><p>All Orders</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./view-accounting-receipt.php"><i class="material-icons">receipt_long</i><p>All Receipts</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./daily-orders.php"><i class="material-icons">receipt_long</i><p>Daily Orders</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./daily-reciept.php"><i class="material-icons">receipt</i><p>Daily Receipts</p></a></li>                
                <li class="nav-item"> <a class="nav-link" href="./view-accounting-daily.php"><i class="material-icons">receipt</i><p>Daily List Receipts</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./view-accounting-monthly.php"><i class="material-icons">receipt</i><p>Monthly List Receipts</p></a></li>
                       
              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-users" aria-expanded="false" aria-controls="ui-users">              
              <p><b>Manage Users</b><span style="float: right;"><img src="../assets/img/icons/expand_more.svg" alt=""></span></p>       
        
            </a>
            <div class="collapse" id="ui-users">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="./add-staff.php"><i class="material-icons">person_add_alt</i><p>Add Staff</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./assign-roles.php"><i class="material-icons">manage_accounts</i><p>Assign Roles</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./view-staff.php"><i class="material-icons">people_outline</i><p>Staff List</p></a></li>     
              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-kitchen" aria-expanded="false" aria-controls="ui-kitchen">              
              <p><b>Manage Kitchen</b><span style="float: right;"><img src="../assets/img/icons/expand_more.svg" alt=""></span></p>       
        
            </a>
            <div class="collapse" id="ui-kitchen">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="./add-menu.php"><i class="material-icons">restaurant_menu</i><p>Create Menu</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./view-menu.php"><i class="material-icons">menu_open</i><p>View Menu List</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./kitchen-store-add.php"><i class="material-icons">store</i><p>Create Store Item</p></a></li>                
                <li class="nav-item"> <a class="nav-link" href="./view-kitchen-store.php"><i class="material-icons">shop</i><p>View Store List</p></a></li>
                

              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-restaurant" aria-expanded="false" aria-controls="ui-restaurant">              
              <p><b>Manage Restaurant</b><span style="float: right;"><img src="../assets/img/icons/expand_more.svg" alt=""></span></p>       
        
            </a>
            <div class="collapse" id="ui-restaurant">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="add-bar-item.php"><i class="material-icons">local_bar</i><p>Create Bar List</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="view-bar-item.php"><i class="material-icons">horizontal_split</i><p>View Bar Items</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./restaurant-store-add.php"><i class="material-icons">store</i><p>Create Store Item</p></a></li>                
                <li class="nav-item"> <a class="nav-link" href="./view-restaurant-store.php"><i class="material-icons">shop</i><p>View Store List</p></a></li>             
              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-laundry" aria-expanded="false" aria-controls="ui-laundry">              
              <p><b>Manage Laundry</b><span style="float: right;"><img src="../assets/img/icons/expand_more.svg" alt=""></span></p>       
        
            </a>
            <div class="collapse" id="ui-laundry">
              <ul class="nav flex-column sub-menu">
                
                <li class="nav-item"> <a class="nav-link" href="./view-laundry-item.php"><i class="material-icons">local_laundry_service</i><p>View Laundry Item</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./laundry-customer.php"><i class="material-icons">leak_remove</i><p>Laundry Customers</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./laundry-store-add.php"><i class="material-icons">store</i><p>Create Store Item</p></a></li>
                <li class="nav-item"> <a class="nav-link" href="./view-laundry-store.php"><i class="material-icons">shop</i><p>View Store List</p></a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item"> <a class="nav-link" href="./kitchen-order.php"><i class="material-icons">soup_kitchen</i><p>Place kitchen Order</p></a></li>
          <li class="nav-item"> <a class="nav-link" href="./laundry-order.php"><i class="material-icons">checkroom</i><p>Create Laundry Order</p></a></li>
          <li class="nav-item"> <a class="nav-link" href="./bar-order.php"><i class="material-icons">wine_bar</i><p>Place Bar Order</p></a></li>
          <li class="nav-item"> <a class="nav-link" href="../logout.php"><i class="material-icons">logout</i><p>Logout</p></a></li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Welcome <?php echo ucfirst($username); ?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <b>Admin Area</b>
            <ul class="navbar-nav">

              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->