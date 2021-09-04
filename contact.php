<?php
include "connection/connDb.php";
include "Admin/common/headerClient.php";
 ?>
    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2>bluenilecollege contacts</h2>
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4>Contact Us</h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;">
                      Home<span class="sep"> / </span><span class="current">Contact</span></div>
                </div>
            </div>
        </div>

        </div>
    </section>
    <section id="contact-page">
        <div class="container">
            <div class="section-heading text-center">
                <h2>Drop your <span>Message</span></h2>
                <p class="subheading">bluenilecollege clint slide.</p>
            </div>
            <div class="row contact-wrap">
        <div class="status alert alert-success" style="display: none"></div>
<form id="main-contact-form" class="contact-form" name="contact-form" method="post">
    <div class="col-sm-5 col-sm-offset-1">
        <div class="form-group">
            <label> Full Name *</label>
                  <input type="text" name="full_name" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                  <label> Email *</label>
                <input type="email" name="email" class="form-control" required="required">
              </div>
            <div class="form-group">
          <label>Phone</label>
        <input type="number" class="form-control" name="phone">
      </div>
            </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Subject *</label>
                          <input type="text" name="subject" class="form-control" required="required">
                        </div>
                      <div class="form-group">
                    <label>Message *</label>
                  <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                </div>
              <div class="form-group">
            <button type="submit" name="submitMessage" class="btn btn-default submit-button">Submit Message
              <i class="fa fa-caret-right"></i></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<?php
if (isset($_POST['submitMessage'])) {
$comented_date=date('y-m-d');
  $sqlSend="INSERT INTO contacts set
   full_name='$_POST[full_name]',
     phone='$_POST[phone]',
       email='$_POST[email]',
        subject='$_POST[subject]',
         message='$_POST[message]',
          comented_date='$comented_date'
           ";
    $result=mysqli_query($conn, $sqlSend);
    if ($result) {
    echo "send successfuly";
    }
    }
  ?>
<section id="contact">
        <div class="overlay">
            <div class="gmap-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="gmap">
                                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>
                            </div>
                        </div>
                      <div class="col-sm-7 map-content">
                    <ul class="row">
                  <li class="col-sm-6">
                <address>
									<h5>Head Office</h5>
									<p>bluenilecollege <br>
									, BahirDar,<br>
									near around lake tana,<br>
									ayer tena road, bluenilecollege building,<br>
								Ethiopia. </p>
							<p>Phone:+932854817 <br>
						Email Address:21melkie00@gmail.com</p>
					</address>
        </li>
      <li class="col-sm-6">
          <address>
							<h5>vice president</h5>
                <p>bluenilecollege <br>
  								, BahirDar,<br>
  									near around lake tana,<br>
  									ayer tena road, bluenilecollege building,<br>
  								Ethiopia. </p>
  							<p>Phone:+935882356 <br>
  						Email Address:Mesfin00@gmail.com</p>
					</address>
        </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
   include "Admin/common/footerClient.php";
    ?>
