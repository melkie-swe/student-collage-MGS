<?php
session_start();
include "common/headerlogin.php";
include "../connection/connDb.php";
?>
<div class="content-wrapper" style="min-height: 70px;">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin login page</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-9">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h2 class="card-title">please <small>login first</small></h3>
              </div>
              <form id="quickForm" novalidate="novalidate" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" name="user_name" class="form-control"  placeholder="Username" aria-invalid="true">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-invalid="true">
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">Remember me later <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="login" class="btn btn-primary">login</button>
                  <button type="cleare" class="btn btn-danger">cancel</button>
                </div>
                <div class="card-footer">
                <a href="#">sign up</a>
                </div>
              </form>
            </div>
            </div>
          <div class="col-md-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <?php
  if(isset($_POST['login'])){
    $user_name=mysqli_real_escape_string($conn,$_POST['user_name']) ;
    $password=mysqli_real_escape_string($conn,$_POST['password']) ;
    $decript=md5($password);
    $loginquery="SELECT * FROM users WHERE username='$user_name' and password='$decript'";
    $result=mysqli_query($conn,$loginquery);
    if ($result){
      $counter=0;
      while ($row=mysqli_fetch_array($result)) {
            $counter++;
           $first_name=$row['first_name'];
           echo  $first_name;
          }
      }
      if ($counter==1) {
          $_SESSION['user_name']= $user_name;
          $_SESSION['name']= $first_name;
             ?>
        <script type="text/javascript">
          window.location.replace("index.php");
       </script>
      <?php
    }
  }
  else {
    ?>
    <script type="text/javascript">
      window.location.replace("login.php");
    </script>
  <?php
  }
?>
  <?php
  include "common/footerlogin.php";
  ?>
