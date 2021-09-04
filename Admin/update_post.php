<?php
include "common/header.php";
include "../connection/connDb.php";
if (isset($_GET['post_id'])) {
    $post_id=$_GET['post_id'];
    $sqlselect ="SELECT * FROM posts WHERE id='$post_id'";
    $result=mysqli_query($conn,$sqlselect);
if ($result) {
while ($row =mysqli_fetch_array($result)) {
  $image=$row['image'];
   $title=$row['title'];
     $body=$row['body'];

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
            <h1 class="m-0"> posts update form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"> update posts information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="card-body">
              <div class="form-group">

<div class="row">
  <div class="col-md-4">
    <img src="upload/<?php echo $image?>" width="200" alt="no image"> <br>
  </div>
  <div class="col-md-4">
      <label for="exampleInputEmail1"> change images</label>
      <input type="file" class="form-control" name="image" value="<?php echo $image?>" >
  </div>
  <div class="col-md-10">
      <label for="exampleInputEmail1">title of image</label>
      <input type="text" class="form-control" name="title" value="<?php echo $title?>" >
    </div>
</div>
<div class="row">
    <div class="col-md-10">
      <label for="exampleInputEmail1">detail description </label>
        <textarea class="form-control" type="text" name="body" value="<?php echo $body?>">
        </textarea>
    </div>
</div>

</div>
    </div>
      <div class="card-footer">
          <button type="submit" class="btn btn-primary" name="btn_update">edit</button>
           <button type="cleare" class="btn btn-danger" name="delete">delete</button>
        </div>
      </form>
 </div>
  <?php
  if (isset($_POST['btn_update'])){
    $file_name=$_FILES['image']['name'];
      $file_tmp_path=$_FILES['image']['tmp_name'];
        $currentDIR="upload/$file_name";
        if (move_uploaded_file($file_tmp_path ,$currentDIR)) {
          $sqlupdate="UPDATE posts SET
          image='$file_name',
            title='$_POST[title]',
              body='$_POST[body]'
             WHERE id='$post_id'";
               $result=mysqli_query($conn ,$sqlupdate);
        }else {
          $sqlupdate="UPDATE posts SET
            title='$_POST[title]',
              body='$_POST[body]'
             WHERE id='$post_id'";
               $result=mysqli_query($conn ,$sqlupdate);
        }
    if ($result) {
     ?>
    <script type="text/javascript">
       window.location.replace("posts.php");
    </script>
    <?php
    }
    }
    ?>
<?php
  include "common/footer.php";
   ?>
