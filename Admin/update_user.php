<?php
include "common/header.php";
include "../connection/connDb.php";
if (isset($_GET['user_id'])) {
    $user_id=$_GET['user_id'];
    $sqlselect ="SELECT * FROM users WHERE id='$user_id'";
    $result=mysqli_query($conn,$sqlselect);
if ($result) {
while ($row =mysqli_fetch_array($result)) {
 $first_name=$row['first_name'];
  $last_name=$row['last_name'];
      $phone=$row['phone'];
      $email=$row['email'];
    }
  }
}
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Users update form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"> update users form</li>
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
        <input type="text" class="form-control" name="first_name" value=<?php echo $first_name?>" >
    </div>
    <div class="col-md-6">
        <label for="exampleInputEmail1">last Name</label>
          <input type="text" class="form-control" name="last_name" value="<?php echo $last_name?>" >
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <label for="exampleInputEmail1">Phone </label>
            <input type="text" class="form-control" name="phone"value="<?php echo $phone?>">
    </div>
    <div class="col-md-6">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" value="<?php echo $email?>" >
    </div>
</div>

</div>
    </div>
      <div class="card-footer">
          <button type="submit" class="btn btn-primary" name="update">edit</button>
           <button type="cleare" class="btn btn-danger" name="delete">delete</button>
        </div>
      </form>

  </div>
  <?php
  if (isset($_POST['update'])){
$sqlupdate="UPDATE users SET
first_name='$_POST[first_name]',
  last_name='$_POST[last_name]',
      phone='$_POST[phone]',
      email='$_POST[email]'
   WHERE id='$user_id'";
     $result=mysqli_query($conn ,$sqlupdate);
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
