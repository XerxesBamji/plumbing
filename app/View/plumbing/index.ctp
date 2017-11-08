<!-- About Section -->
<section id="about" class="about">
  <div class="container text-center">
    <h2>About Us</h2>
      <div class="about_text">
        <p class="lead">At All Time Plumbing we offer a speedy and efficient service to help you with what ever your plumbing needs may be. With a 24/7 call out service, you can rely on us to be on hand when ever any plumbing emergency may occur, at any time of the year!</p>
      </div>
  </div>
  <!-- /.container -->
</section>

<!-- Services -->
<section id="services" class="services bg-primary text-white">
  <div class="container">
    <div class="row text-center">
      <div class="text-center col-lg-10 col-md-offset-1">
        <h2>Our Services</h2>
        <hr class="small">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="service-item">
              <h4>
                <?php echo $this->Html->image('sink.png', array('width' => '50%'));?>
                  <br></br>
                <strong>Kitchen and Bathroom Installations</strong>
              </h4>
              <p>We offer a full bathroom installation service. We remove old suite, tilling, pipe work and install new suite, pipe work and full tiling of all types.</p>
              <!-- <a href="#contact" class="btn btn-light">Learn More</a> -->
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="service-item">
              <h4>
                <?php echo $this->Html->image('radiator.png', array('width' => '80%'));?>
                  <br></br>
                <strong>Heating Services</strong>
              </h4>
              <p>Whether it is central heating, hot water systems, LPG or under-floor heating, our specialist team of plumbing experts have a wide range of experience providing heating solutions to our customers.</p>
              <!-- <a href="#contact" class="btn btn-light">Learn More</a> -->
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="service-item">
              <h4>
                <?php echo $this->Html->image('gasl3.png', array('width' => '72%'));?>
                  <br></br>
                <strong>Gas Services</strong>
              </h4>
              <p>We provide a fast response for all domestic gas emergencies including gas leak rectification and gas central heating problems and services.</p>
              <!-- <a href="#contact" class="btn btn-light">Learn More</a> -->
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="service-item">
              <h4>
                <?php echo $this->Html->image('washingmachine2.png', array('width' => '47%'));?>
                  <br></br>
                <strong>Plumbing (Commercial and Domestic)</strong>
              </h4>
              <p>We are capable of dealing with all type of plumbing issues. Whether its overflows, faulty valves, blocked drains or washing machines, we are able to help.</p>
              <!-- <a href="#contact" class="btn btn-light">Learn More</a> -->
            </div>
          </div>

        </div>
          <i class="fa fa-phone fa-2x fa-fw"></i>
          <a style="color:white;font-size:24px; text-decoration:none;" href="tel:07503167132">Click Here To Call Us Now For A Quick Quote!</a>
        <!-- /.row (nested) -->
      </div>
      <!-- /.col-lg-10 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>

<!-- Gallery -->
<section id="gallery" class="gallery">
   <!-- <div class="container">
    <div class="row">
      <div class="text-center col-lg-10 col-md-offset-1"> -->

        <!-- <hr class="small">
        <div class="row">
          <div class="col-lg-10 col-md-offset-1">  -->
            <div class="gallery-item">
              <div  id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                  <li data-target="#myCarousel" data-slide-to="4"></li>
                  <li data-target="#myCarousel" data-slide-to="5"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <?php echo $this->Html->image('plumber-9.jpg',array('width' => '75%'));?>
                  </div>

                  <div class="item">
                    <?php echo $this->Html->image('plumber11.jpg',array('width' => '75%'));?>
                  </div>

                  <div class="item">
                   <?php echo $this->Html->image('plumber12.jpg',array('width' => '75%'));?>
                  </div>

                  <div class="item">
                    <?php echo $this->Html->image('plumber13.jpg',array('width' => '75%'));?>
                  </div>

                  <div class="item">
                    <?php echo $this->Html->image('plumber14.jpg',array('width' => '75%'));?>
                  </div>

                  <div class="item">
                    <?php echo $this->Html->image('plumber15.jpg',array('width' => '75%'));?>
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
          </div>
      <div>
      <!-- /.col-lg-10 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>

<!-- Some Text to Split Sections -->
<aside class="call-to-action bg-primary text-white">
  <div class="container text-center">
    <h3>The Map Below Shows Our Location. Visit Us For A quote!</h3>
  </div>
</aside>

<!-- Google Maps -->
<section id="contact" class="map">
  <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://snazzymaps.com/embed/25348" width="100%" height="600px" style="border:none;"></iframe>
  <!-- <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.3528745905837!2d-3.579542567089305!3d51.50674180671851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486e6c340adb257d%3A0xf87eaa9ff168e1d!2s26+Dunraven+Pl%2C+Bridgend+CF31+1JB!5e0!3m2!1sen!2suk!4v1509010293673"></iframe>
  <br/>-->
  <small>
    <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.3528745905837!2d-3.579542567089305!3d51.50674180671851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486e6c340adb257d%3A0xf87eaa9ff168e1d!2s26+Dunraven+Pl%2C+Bridgend+CF31+1JB!5e0!3m2!1sen!2suk!4v1509010293673"></a>
  </small>
</section>
