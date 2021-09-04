<?php
session_start();
include "connection/connDb.php";
 include "Admin/common/headerClient.php";
  ?>
<section id="top_banner">
    <div class="banner">
        <div class="inner text-center">
            <h2> Student/Other's login page</h2>
          </div>
      </div>
    </section>
<section id="login-reg">
        <div class="container">
            <!-- Top content -->
            <div class="row">
                <div class="col-md-6 col-sm-12 forms-right-icons">
                    <div class="section-heading">
                        <h2>Sign In With <span>bluenilecollege</span></h2>
                        <p class="subheading">
                          bluenilecollege is ..................
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fa fa-bullhorn"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4>Powerful Features of our colliege</h4>
                            <p>.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fa fa-support"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4>Customer Support</h4>
                            <p>customer suports of our colledge</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-sm-12">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3> please Login  first </h3>
                                <p>Enter username and password to log_in:</p>

                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-key"></i>
                            </div>
                        </div>
        <div class="form-bottom">
          <form role="form" action="" class="login-form" method="POST">
              <div class="input-group form-group">
                <div  id="error">
                </div>
                <span class="input-group-addon" ><i class="fa fa-user"></i></span>
                  <input name="user_name" type="text" class="form-control" placeholder="Username" >
                      </div>
                      <div class="input-group form-group">
                      <span class="input-group-addon" ><i class="fa fa-unlock"></i></span>
                    <input name="password" type="password" class="form-control" placeholder="Password" >
                  </div>
                <button type="submit" class="btn" name="login">Sign in!</button>
              </form>
            </div>
          </div>
        </div>
    </section>
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
                    }
                    echo $counter;
                }
                if ($counter==1) {
                    $_SESSION['user_name']= $user_name;
                      $_SESSION['first_name']= $first_name;
                       ?>
                      <script type="text/javascript">
                    window.location.replace("Admin/index.php");
                 </script>
                <?php
              }
            }
            else {
              ?>
              <script type="text/javascript">
              document.getElementById('error').style.display="block";
              document.getElementById('error').innnerHTML="incorect user name ore password";
              </script>
            <?php
            }
        ?>
        <?php
       include "Admin/common/footerClient.php";
        ?>
