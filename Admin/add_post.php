<?php
include "common/header.php";
include "../connection/connDb.php";
 ?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> posts add form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active"> Add posts form</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<form action="add_post.php" method="POST" enctype="multipart/form-data">
        <div class="card-body">
        <div class="form-group">
   <div class="row">
     <div class="col-md-9">
       <label for="exampleInputEmail1">images</label>
       <input class="form-control" type="file"  name="image" >
    </div>
  </div>
    <div class="row">
      <div class="col-md-9">
      <label for="exampleInputEmail1">title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter post title">
    </div>
</div>

<div class="row">
     <div class="col-md-9">
        <label for="exampleInputEmail1">details</label>
        <textarea type="text" class="form-control" name="body" placeholder="Enter post details"></textarea>
    </div>
</div><br>
</div>
    </div>
  <div class="card-footer">
     <button type="submit" class="btn btn-primary" name="send">post</button>
     <button type="cleare" class="btn btn-danger">cancel</button>
  </div>
      </form>
  </div>

<?php
if (isset($_POST['send'])) {
  $file_name=$_FILES['image']['name'];
    $file_tmp_path=$_FILES['image']['tmp_name'];
      $currentDIR="upload/$file_name";
  if (move_uploaded_file($file_tmp_path, $currentDIR)) {
       $title=$_POST['title'];
         $body=$_POST['body'];
         $posted_date=date('y-m-d');

$sqlnsert="INSERT INTO posts VALUE('','$title','$body','$file_name','$posted_date','$posted_by')";
       $result=mysqli_query($conn ,$sqlnsert);
     if ($result) {
        ?>
        <script type="text/javascript">
          window.location.replace("posts.php");
        </script>
         <?php
}
}
  }

?>

  <?php
  include "common/footer.php";
   ?>
