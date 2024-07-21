<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Moulis : Contact Us</title>

<link rel="shortcut icon" href="mlcd.ico">

<link href="css/moulis-style.css" rel="stylesheet" type="text/css" />

<script src="js/jquery.js" type="text/javascript"></script>

<script src="js/support.js" type="text/javascript"></script>

</head>



<body>

<div class="main-wrapper">

  <!-- Header Section Starts Here -->

  <div id="header">

    <div class="logo"><a href="index.html"><img src="images/moulis-logo.gif" alt="Moulis - Established in 1959" title="Moulis - Established in 1959" width="107" height="56" /></a></div>

    <div class="share">

      <span class="s-fb" title="Facebook"></span>

      <span class="s-t" title="Twitter"></span>

      <span class="s-in" title="Linked In"></span>

    </div>

    <ul class="top-nav">

      <li><a href="index.html">Home</a></li>

      <li><a href="about_us.html">About Us</a></li>

      <li><a href="services.html">Services</a></li>

	  <li><a href="overseas_offices.html">Overseas Offices</a></li>

      <li><a href="testimonials.html">Testimonials</a></li>

      <li class="last"><a href="contact_us.html" class="active">Contact Us</a></li>

    </ul>

  </div>

  <!-- Header Section Ends Here -->

  

  <!-- Page Main Section Starts Here -->

  <div id="main-con">

    <div class="in-main-con">

      <div class="in-mc-r1">

        <div class="in-mc-r1-col-left">Contact  Us</div>

        <div class="in-mc-r1-col-rig">

          <h1>You have browsed our site. You know our story, you know our services and strengths. Feel free to give us a call or send us a detailed mail.</h1>

        </div>

      </div>

      <div class="in-mc-r2">

        <div class="in-mc">

          <div class="in-mc-col-left"><h2>MUMBAI</h2>
          


          <strong>Moulis Advertising Service Pvt. Ltd</strong><br />

          130, 1st Floor, Satra Plaza,<br />

          Plot No. 19 & 20, Sector – 19 D,<br />

          Vashi, Navi Mumbai – 400 0705.<br />

          <br />

          Tel: 91-22-2784 1014<br />

          Fax: 2784 1015<br />

          E-mail: <a href="mailto:rcmouli@moulisadvertising.com">rcmouli@moulisadvertising.com</a><br /><br />



          <div class="cont-r-main">

            <div class="cont-rm-left">

            <h2>CHENNAI</h2>

            <strong>Moulis Advertising Service Pvt. Ltd</strong><br />

            4, 1st Floor, "Rams"<br />

            22 West Cott Road, Royapettah<br />

            Chennai 600014</div>

            <div class="cont-rm-rig">

            <h2>BANGALORE</h2>

            <strong>Moulis Advertising Service Pvt. Ltd</strong><br />

            308, Swiss Complex, No.33,<br />

            Race Course Road,<br />

            Bangalore-1</div>

          </div>

          <div class="cont-r-main">

            <div class="cont-rm-left">

            <h2>NEW DELHI</h2>

            <strong>Moulis Advertising Service Pvt. Ltd</strong><br />

            B-10/7070, 2nd floor,<br />

            Vasant Kunj, <br />

            Delhi 110070</div>

            <div class="cont-rm-rig">

            <h2>KOLKATA</h2>

            <strong>Moulis Advertising Service Pvt. Ltd</strong><br />

            2B, Iswar Chowdhuri Road,<br />

            Niranjan Apts. 2nd Floor,<br />

            Kolkata - 700029</div>

          </div>

          <div class="cont-r-main">

            <div class="cont-rm-left">

            <h2>ORISSA</h2>

            <strong>Moulis Advertising Service Pvt. Ltd</strong><br />

            529, Shahid Nagar,<br />

            Bhubaheshwar- 751 007</div>

            <div class="cont-rm-rig">&nbsp;</div>

          </div>

          <div class="cont-r-main">

            <div class="cont-rm-left">

            <h2>DUBAI</h2>

            <strong>Moulis Advertising Service Pvt. Ltd</strong><br />

            No.45, 7th Floor,<br />

            Al Thuraya Tower 02,<br />

            Dubai Media City,<br />

            Dubai, UAE.</div>

            <div class="cont-rm-rig">

            <h2>MUSCAT</h2>

            <strong>Moulis Advertising Service Pvt. Ltd</strong><br />

            Al Fakher Global LLC– Moulis International<br />

            Al Khuwair,<br />

            P.O Box 3705, P.C 112,<br />

            Ruwi, Sultanate of Oman.</div>

          </div>

          <div class="cont-r-main"><strong>Also at: Hyderabad, Thiruvanathapuram, Bhopal  Nagpur and Kolkata.</strong></div>

          </div>

          <div class="in-mc-col-rig">

          	<?php if($_REQUEST['flg'] == "succ") { ?>

              <div class="cont-enq-main">

			  <h2>Thank You</h2>

			  <strong>Your message has been sent successfully. Our representative will get back to you shortly.</strong></div>

            <?php } else { ?>

            <form id="form1" name="enquiry" method="post" action="mailEnquiry.php" onsubmit="return validate(document.enquiry);">

              <div class="cont-enq-main">

              <h2>Enquiry</h2>

                <div class="cenq-r">

                  <div class="cenq-r-cl">Name:</div>

                  <div class="cenq-r-cr"><input type="text" name="txtName" id="textfield" class="txt-fld" /></div>

                </div>

                <div class="cenq-r">

                  <div class="cenq-r-cl">Email Id:</div>

                  <div class="cenq-r-cr"><input type="text" name="txtEmailId" id="textfield" class="txt-fld" /></div>

                </div>

                <div class="cenq-r">

                  <div class="cenq-r-cl">Contact No.:</div>

                  <div class="cenq-r-cr"><input name="txtMobile" type="text" class="txt-fld" id="textfield" onfocus="this.value=(this.value=='Landline/Mobile') ? '' : this.value;" onblur="this.value=(this.value=='') ? 'Landline/Mobile' : this.value;" value="Landline/Mobile" maxlength="10"/></div                  

                ></div>

                <!--<div class="cenq-r">

                  <div class="cenq-r-cl">Address:</div>

                  <div class="cenq-r-cr"><input type="text" name="textfield" id="textfield" class="txt-ar" /></div>

                </div> -->

                <div class="cenq-r">

                  <div class="cenq-r-cl"><br />

                    <br />

                  Query :</div>

                  <div class="cenq-r-cr">

                    <textarea name="txtMsg" id="textarea" class="txt-ar"></textarea>

                  </div>

                </div>

                <div class="cenq-r">

                  <div class="cenq-r-cl">Security Text:</div>

                  <div class="cenq-r-cr"><img id="imgCaptcha" src="createimage.php" name="imgCaptcha" />

                        <span>

                            <span id="change-image" class="captchalnk" onclick="document.getElementById('imgCaptcha').src='createimage.php?'+Math.random();document.getElementById('imgCaptcha').focus();"> Change Image</span></span></div>

                </div>

                <div class="cenq-r">

                  <div class="cenq-r-cl">&nbsp;</div>

                  <div class="cenq-r-cr">

                  <input name="txtCaptcha" type="text" class="txt-fld" id="txtCaptcha" onblur="validate_Captcha(this.value,document.enquiry)" />

                    <input name="validcap" id="validcap" type="hidden" value="0" /></div>

                </div>

                <div class="cenq-r">

                  <div class="cenq-r-cl"></div>

                  <div class="cenq-r-cr">

                    <input type="submit" name="button" id="button" value="Submit" class="btn"  />

                    <input type="reset" name="button2" id="button2" value="Reset" class="btn" /><!--onclick="return validate(document.enquiry);"-->

                  </div>

                </div>

              </div>

            </form>

             <?php } ?>

          </div>

        </div>

      </div>

    </div>

  </div>

  <!-- Page Main Section Ends Here -->

  

  <!-- Footer Section Starts Here -->

  <div id="footer">

    <div class="ftr-r1"><a href="index.html">Home</a> &nbsp;|&nbsp; <a href="about_us.html">About Us</a> &nbsp;|&nbsp; <a href="services.html">Services</a> &nbsp;|&nbsp; <a href="portfolio.html">Portfolio</a> &nbsp;|&nbsp; <a href="overseas_offices.html">Overseas Offices</a> &nbsp;|&nbsp; <a href="testimonials.html">Testimonials</a> &nbsp;|&nbsp; <a href="contact_us.html" class="active">Contact Us</a></div>

  Copyright © 2011 Moulis Advertising Service Pvt. Ltd</div>

  <!-- Footer Section Ends Here -->

</div>

</body>

</html>