<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Product</h1>
          </div><!-- /.col -->
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Product Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="php/controllers/product.php" method="post" role="form" enctype="multipart/form-data" data-parsley-validate >

                <div class="card-body">
                  
                  <div class="form-group col-md-6 mx-auto">
                    <label for="prodname" class="control-label">Product Name</label>
                     <input name="prodname" type="text" class="form-control" id="prodname" placeholder="Enter Product Name" required 
                            oninvalid="this.setCustomValidity('Enter a valid name.')" 
                            onchange="this.setCustomValidity('')">
                  </div>

                  <div class="form-group col-md-6 mx-auto">
                    <label for="caption" class="control-label">Caption</label>
                     <input name="caption" type="text" class="form-control" id="caption" placeholder="Enter Product Name" required 
                            oninvalid="this.setCustomValidity('Enter a Caption.')" 
                            onchange="this.setCustomValidity('')">
                  </div>

                  <div class="form-group col-md-6 mx-auto">
                    <label for="fullDesc" class="control-label">Production Description</label>
                     <textarea name="fullDesc" class="form-control" id="fullDesc" placeholder="Enter Product Name" required 
                            oninvalid="this.setCustomValidity('Enter a Description.')" 
                            onchange="this.setCustomValidity('')"></textarea>
                  </div>
                  <div class="form-group col-md-6 mx-auto">
                    <label for="price" class="control-label">Product Price</label>
                     <input name="price" type="number" class="form-control" id="price" placeholder="Enter Price " required 
                            oninvalid="this.setCustomValidity('Enter a Price.')" 
                            onchange="this.setCustomValidity('')">
                  </div>

                  <div class="row">
                    <div class="form-group col-sm-3 mx-auto">
                      <label for="lvl1" class="control-label">Level 1</label>
                      <input name="lvl1" type="number" class="form-control" id="lvl1" 
                       placeholder="Enter Value">
                      <small for="lvl1" class="control-label">Input Price for this level</small>
                    </div>
                    <div class="form-group col-sm-3 mx-auto">
                      <label for="lvl2" class="control-label">Level 2</label>
                      <input name="lvl2" type="number" class="form-control" id="lvl2"
                       placeholder="Enter Value">
                      <small for="lvl2" class="control-label">Input Price for this level</small>
                    </div>
                    <div class="form-group col-sm-3 mx-auto">
                      <label for="lvl3" class="control-label">Level 3</label>
                      <input  name="lvl3" type="number" class="form-control" id="lvl3"
                        placeholder="Enter Value">
                      <small for="lvl3" class="control-label">Input Price for this level</small>
                    </div>
                    <div class="form-group col-sm-3 mx-auto">
                      <label for="lvl4" class="control-label">Level 4</label>
                      <input name="lvl4" type="number" class="form-control" id="lvl4"
                        placeholder="Enter Value">
                      <small for="lvl4" class="control-label">Input Price for this level</small>
                    </div>
                    <div class="form-group col-sm-3 mx-auto">
                      <label for="lvl5" class="control-label">Level 5</label>
                      <input name="lvl5"  type="number" class="form-control" id="lvl5"
                       placeholder="Enter Value">
                      <small for="lvl5" class="control-label">Input Price for this level</small>
                    </div>
                    <div class="form-group col-sm-3 mx-auto">
                      <label  for="lvl6" class="control-label">Level 6</label>
                      <input name="lvl6" type="number" class="form-control" id="lvl6"
                       placeholder="Enter Value">
                      <small for="lvl6" class="control-label">Input Price for this level</small>
                    </div>
                    <div class="form-group col-sm-3 mx-auto">
                      <label for="lvl7" class="control-label">Level 7</label>
                      <input name="lvl7" type="number" class="form-control" id="lvl7"
                       placeholder="Enter Value">
                      <small for="lvl7" class="control-label">Input Price for this level</small>
                    </div>
                    <div class="form-group col-sm-3 mx-auto">
                      <label for="lvl8" class="control-label">Level 8</label>
                      <input name="lvl8" type="number" class="form-control" id="lvl8"
                       placeholder="Enter Value">
                      <small for="lvl8" class="control-label">Input Price for this level</small>
                    </div>
                  </div>

                  <div class="form-group col-md-6 m-3 mx-auto">
                      <input class="form-control"  name="pic1" 
                       id="pic1" type="file" placeholder="Enter Name">
                      <small for="pic1" class="control-label">Main Picture</small>
                    </div>

                    <div class="form-group col-md-6 m-3 mx-auto">
                      <input name="pic2" class="form-control" id="pic2" type="file" placeholder="Enter Name">
                      <small for="pic2" class="control-label">Picture 1</small>
                    </div>

                     <div class="form-group col-md-6 m-3 mx-auto">
                      <input name="pic3" class="form-control" id="pic3" type="file" placeholder="Enter Name">
                      <small for="pic3" class="control-label">Picture 2</small>
                    </div>

                    <div class="form-group col-md-6 m-3 mx-auto">
                      <input name="pic4" class="form-control" id="pic4" type="file" placeholder="Enter Name">
                      <small for="pic4" class="control-label">Picture 3</small>
                    </div>
                    
                    <div class="form-group col-md-6 m-3 mx-auto">
                      <input name="pic5" class="form-control" id="pic5" type="file" placeholder="Enter Name">
                      <small for="pic5" class="control-label">Picture 4</small>
                    </div>

               
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="uploadProd" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <!-- form upload end  -->
            </div>
            
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
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

<!-- REQUIRED SCRIPTS -->
<!-- standard scripts -->
<?php include 'script/script.php' ?>
<!-- link below all custom scripts -->
</html>
