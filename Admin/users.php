
<?php
include "common/header.php";
include "../connection/connDb.php";
if (isset($_GET['user_id'])) {
    $user_id=$_GET['user_id'];
    $sqldelete="DELETE FROM users WHERE id='$user_id'";
       $result=mysqli_query($conn ,$sqldelete);
  }
 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Users Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">user management</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<section class="content">
    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 col-md-9">
                    <a href="add_user.php" class="btn btn-primary">add new user</a>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div id="example1_filter" class="dataTables_filter">
                      <label>Search:
                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1">
                      </label></div></div>
                    </div>
                <div class="row"><div class="col-sm-12">
    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                         aria-describedby="example1_info">
      <thead>
          <tr >
               <th>S.No</th>
               <th>first name</th>
               <th>last name</th>
               <th>Phone</th>
               <th>email</th>
               <th>action</th>
          </tr>
          </thead>
          <tbody>

         <?php
          $sqlselect ="SELECT * FROM users";
          $result=mysqli_query($conn,$sqlselect);
        if ($result) {
          $sn=1;
   while ($row =mysqli_fetch_array($result)) {
         ?>
            <tr role="row" class="odd">
            <td ><?php echo $sn; ?></td>
            <td ><?php echo $row['first_name'] ; ?></td>
            <td ><?php echo $row['last_name'] ; ?></td>
            <td ><?php echo $row['phone'] ; ?></td>
            <td ><?php echo $row['email'] ; ?></td>
            <td>
              <a href="update_user.php?user_id=<?php echo $row['id']; ?>" type="button" class="btn  btn-info btn-xs">edit</a>
              <a href="?user_id=<?php echo $row['id']; ?>"type="button" class="btn  btn-danger btn-xs"
                onclick="alert('are you sure delete this data');">delete</a>
           </td>
          </tr>
     <?php
       $sn++;
       }
     }
     ?>
    </tbody>
    </table>
    </div>
</div>
</div>
</div>
</section>
  </div>
  <?php
  include "common/footer.php";
   ?>
