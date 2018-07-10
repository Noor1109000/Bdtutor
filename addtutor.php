<?php include("header.php"); ?>

  <section id="contact-page">
    <div class="container">
      <div class="center">
        <h2>Add Tutor</h2>
        </div>
      <div class="row contact-wrap">
        <div class="status alert alert-success" style="display: none"></div>
        <div class="col-md-6 col-md-offset-3">
          
          
          <form action="inc/addtutordata.php" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="required"  />
              
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"required="required" />
             
            </div>
			<div class="form-group">
              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Your Mobile Number" required="required" />
             
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="qualification" id="subject" placeholder="Your Qualification" required="required" />
            
            </div>
			 <div class="form-group">
              <textarea class="form-control" name="area" rows="5"   placeholder="Area" required="required"></textarea>
             
            </div>
            <div class="form-group">
              <textarea class="form-control" name="subject" rows="5"   placeholder="Teaching Subject" required="required"></textarea>
             
            </div>
            <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" >Submit Message</button></div>
          </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->

<?php include("footer.php"); ?>
