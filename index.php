
<?php include("header.php"); ?>




  <section id="main-slider" class="no-margin">
    <div class="container">
      
                <div class="slogan">
                  <h2 >Welcome <span>TUTORBD</span></h2>
                  <p>Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</p>
                  
                </div>
              </div>
          

        
    <!--/.carousel-->
  </section>
  <!--/#main-slider-->


<section id="tutorlist"> 

<div class="container">
	<div class="row"> 
	<h2> Featured Tutors</h2>
	
	<?php 
	include("inc/constant.php");
	
	$sql = "SELECT *  FROM add_tutor";
	$result = $conn->query($sql);
	 if ($result->num_rows > 0) {
											// output data of each row
	while($row = $result->fetch_assoc()) {?>
	
	
		<div class="col-md-3"> 
		<div class="single-tutor">
		<div class="tutor-are">
				<div class="tutor-iteam"><h3><?php echo $row["name"] ?></h3></div>
				<div class="tutor-img"><h3><img src="images/img_avatar.png" alt="" /></h3></div>
		
		
		</div>
			
			<p><span>Qualification:</span> <?php echo $row["qualification"] ?></p>
			<p><span>Area:</span> <?php echo $row["are"] ?></p>
			<p><span>Teaching: </span><?php echo $row["teaching_sub"] ?></p>
			<a href="">Details</a>
		</div>
		</div>
		
		<?php 	}
										} ?>
		
	
	</div>
</div>
	
</section>
 



  

  <section id="conatcat-info">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="pull-left">
              <i class="fa fa-phone"></i>
            </div>
            <div class="media-body">
              <h2>Have a question or need a custom quote?</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.container-->
  </section>
  <!--/#conatcat-info-->


<?php include("footer.php"); ?>