<?php
include "connection/connDb.php";
include "Admin/common/headerClient.php";
 ?>

    <section id="features-page">
        <div class="subsection1">
            <div class="container">
                <div class="section-heading text-center">
                    <h1>Our <span>Services </span></h1>
                    <p class="subheading">List of services  to our collegenis done .</p>
                </div>
                <div class="col sm_12">
                  <?php
                  $sqlselect="SELECT * FROM services order by id desc";
                   $result=mysqli_query($conn,$sqlselect);
                    while ($row=mysqli_fetch_array($result))
                        {
                            ?>
                    <div class="col-sm-4 wpb_column flex">
                        <div class="wpb_wrapper">
                            <div class="flip">
                                <div class="iconbox iconbox-style icon-color card clearfix">
                                    <div class="face front">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-laptop boxicon"></i>
                                                        <h3><?php echo $row['title']; ?></h3>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="iconbox-box2 face back">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h3><?php echo $row['title']; ?></h3>
                                                        <p><?php echo $row['description']; ?></p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              <?php
             }
          ?>
      </div>
    </div>
    <div class="subsection2">
        <div class="container">
            <div class="col-xs-12 col-sm_12 col-md-12 col-lg-12 left">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 wpb_column">
                    <div class="wpb_wrapper">
                        <h3>We really love what we do & our work on every project truly reflects that.</h3>
                          <hr>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wpb_column flex">
                        <div class="wpb_wrapper">
                            <div class="iconbox iconbox-style-2 icon-color clearfix">
                                <div class="iconbox-icon">
                                    <i class="fa fa-lightbulb-o sl-layers boxicon"></i>
                                </div>
                                <div class="iconbox-content">
                                    <h4>IDEA</h4>
                                    <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
                                </div>
                            </div>
                            <div class="spacer"></div>
                            <div class="iconbox iconbox-style-2 icon-color clearfix">
                                <div class="iconbox-icon">
                                    <i class="fa fa-magic sl-book-open boxicon"></i>
                                </div>
                                <div class="iconbox-content nomargin">
                                    <h4>DESIGN</h4>
                                    <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wpb_column">
                        <div class="wpb_wrapper">
                            <div class="iconbox iconbox-style-2 icon-color clearfix">
                                <!-- icon-color-greyscale -->
                                <div class="iconbox-icon">
                                    <i class="fa fa-cloud-download sl-badge boxicon"></i>
                                </div>
                                <div class="iconbox-content">
                                    <h4>CONCEPT</h4>
                                    <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
                                </div>
                            </div>
                            <div class="spacer"></div>
                            <div class="iconbox iconbox-style-2 icon-color clearfix">
                                <div class="iconbox-icon">
                                    <i class="fa fa-cog sl-check boxicon"></i>
                                </div>
                                <div class="iconbox-content nomargin">
                                    <h4>DEVELOP</h4>
                                    <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <?php
   include "Admin/common/footerClient.php";
    ?>
