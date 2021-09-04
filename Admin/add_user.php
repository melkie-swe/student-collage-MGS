<?php
include "common/header.php";
include "../connection/connDb.php";
 ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Users add form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active"> Add users form</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<form action="" method="POST">
        <div class="card-body">
        <div class="form-group">
<div class="row">
    <div class="col-md-6">
       <label for="exampleInputEmail1">first Name</label>
        <input type="text" class="form-control" name="first_name"  placeholder="Enter first name">
    </div>
    <div class="col-md-6">
        <label for="exampleInputEmail1">last Name</label>
          <input type="text" class="form-control" name="last_name" placeholder="Enter last name">
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
    <div class="col-md-6">
        <label for="exampleInputEmail1">Phone </label>
            <input type="text" class="form-control" name="phone"placeholder="Enter phone number">
    </div>
</div>
<div class="row">
    <div class="col-md-6">

        <label >user name</label>
        <input type="text" class="form-control" name="user_name" placeholder="Enter user name">

    </div>
    <div class="col-md-6">
        <label >Password</label>
        <input type="password" class="form-control" name="password"  placeholder="Password">
    </div>
</div>
</div>
    </div>
  <div class="card-footer">
     <button type="submit" class="btn btn-primary" name="send">register</button>
     <button type="cleare" class="btn btn-danger">cancel</button>
  </div>
      </form>
  </div>
<?php
if (isset($_POST['send'])) {
     $first_name=$_POST['first_name'];
      $last_name=$_POST['last_name'];
          $phone=$_POST['phone'];
          $email=$_POST['email'];
      $user_name=$_POST['user_name'];
   $password=md5($_POST['password']);
   $sqlnsert="INSERT INTO users VALUE('','$first_name','$last_name','  $phone','  $email','$user_name','$password')";
   $result=mysqli_query($conn ,$sqlnsert);
if ($result) {
?>
<script type="text/javascript">
  window.location.replace("users.php");
</script>
<?php
}
}
?>

  <?php
  include "common/footer.php";
   ?>
