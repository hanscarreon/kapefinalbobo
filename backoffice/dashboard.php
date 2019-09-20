<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?php include 'util/title.txt' ?></title>

  <!-- stand css link -->
  <?php include 'css/css.php' ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->


    <!-- nav bar -->
   <?php include 'util/nav.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
       
        <!-- info box start -->
        <!-- ..............................           /////////////////////////////////////               ...................... -->
            
            <div class="row">
               <!-- /.col -->
              <div class="col-12 col-md-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-credit-card"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Payout</span>
                    <span class="info-box-number"><small>Release</small> 412,410,002.00</span>
                    <span class="info-box-number"><small>Pending</small> 412,410,002.00</span>

                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

              <div class="col-12 col-md-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Orders</span>
                    <span class="info-box-number"><small>Sold</small> 412,410,002.00</span>
                    <span class="info-box-number"><small>Pending</small> 412,410,002.00</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>


            </div>
            <div class="row">


               <!-- /.col -->
              <div class="col-12 col-md-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Members</span>
                    <span class="info-box-number"><small>Activated</small> 412,410,002.00</span>
                    <span class="info-box-number"><small>Pending</small> 412,410,002.00</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

              <div class="col-12 col-md-6 col-md-3">
                <div class="info-box">
                  <span class="info-box-icon bg-info elevation-1"><i class="far fa-money-bill-alt"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Total Sales</span>
                    <span class="info-box-number"><small>Activated</small> <small> ₱:</small>412,410,002.00</span>
                    <span class="info-box-number"><small>Pending</small>  <small>₱:</small>412,410,002.00</span>
                     
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
             

              <!-- fix for small devices only -->
              <div class="clearfix hidden-md-up"></div>

             
            </div>
        <!-- ..............................           /////////////////////////////////////               ...................... -->
        <!-- info box end -->

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">


<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- graph container start -->
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Monthly Recap Report</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <p class="text-center">
                      <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                    </p>
                    <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                      <!-- Sales Chart Canvas -->
                      <canvas id="salesChart" height="180" style="height: 180px; display: block; width: 680px;" width="680" class="chartjs-render-monitor"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                  
                  <!-- update box start -->
                      <div class=" col-sm-4">
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                          <ul class="products-list product-list-in-card pl-2 pr-2">
                            <li class="item">
                              <div class="product-img">
                                <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                              </div>
                              <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Samsung TV
                                  <span class="badge badge-warning float-right">$1800</span></a>
                                <span class="product-description">
                                  Samsung 32" 1080p 60Hz LED Smart HDTV.
                                </span>
                              </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                              <div class="product-img">
                                <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                              </div>
                              <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Bicycle
                                  <span class="badge badge-info float-right">$700</span></a>
                                <span class="product-description">
                                  26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                                </span>
                              </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                              <div class="product-img">
                                <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                              </div>
                              <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">
                                  Xbox One <span class="badge badge-danger float-right">
                                  $350
                                </span>
                                </a>
                                <span class="product-description">
                                  Xbox One Console Bundle with Halo Master Chief Collection.
                                </span>
                              </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                              <div class="product-img">
                                <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                              </div>
                              <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">PlayStation 4
                                  <span class="badge badge-success float-right">$399</span></a>
                                <span class="product-description">
                                  PlayStation 4 500GB Console (PS4)
                                </span>
                              </div>
                            </li>
                            <!-- /.item -->
                          </ul>
                        </div>
                      
                      </div>
                  <!-- update box end -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
        
            </div>
            <!-- /.card -->
          </div>
        <!-- graph container end -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php include 'util/footer.php' ?>
</div>
<!-- ./wrapper -->
<!-- standard scripts -->
<?php include 'script/script.php' ?>
<!-- link below all custom scripts -->
<script src="script/chart.js"></script>

</body>
</html>
