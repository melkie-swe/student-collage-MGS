<?php
include "connection/connDb.php";
 include "Admin/common/headerClient.php";
  ?>



    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2><i>What is NEWS today ............</i></h2>
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4>alubem's </h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;">
                      Home<span class="sep"> / </span><span class="current">other linxs </span></div>
                </div>
            </div>
        </div>

        </div>
    </section>



    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="section-heading text-center">
                    <div class="col-md-12 col-xs-12">
                        <h1>our <span>Latest posts  </span></h1>
                        <p class="subheading">simple description of our College.</p>
                    </div>
                </div>
            </div>
          <div class="row">
            <?php
               $sqlselect="SELECT * FROM posts order by id desc";
                 $result=mysqli_query($conn,$sqlselect);
                   while ($row=mysqli_fetch_array($result)) {
                   ?>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 portfolio-item">
              <div class="portfolio-one">
          <img alt="no image" src="Admin/upload/<?php echo $row['image']; ?>"width="300" height="280">
              <div class="portfolio-content">
                    <h5 class="title"><?php echo $row['title']; ?></h5>
                        <p><?php echo $row['body']; ?>.</p>
                      </div>
                        <!-- End portfolio-content -->
                  </div>
                    <!-- End portfolio-item -->
                </div>
                <?php
              }
           ?>
            </div>
        </div>
  </section>
  <?php
 include "Admin/common/footerClient.php";
  ?>
