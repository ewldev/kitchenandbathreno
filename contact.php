<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Contact and about Kitchen And Bath Reno">
    <meta name="keywords" content="Contact and about Kitchen And Bath Reno, kitchen and bathroom cabinets, custom made kitchen and bathroom cabinets, modern design kitchen and bathroom cabinets, high quality kitchen and bathroom cabinets, bathroom remodeling, kitchen remodeling, whole house remodeling">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,700&display=swap" rel="stylesheet">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

    <title>Contact Us KitchenAndBathReno</title>
  </head>
  <body>
	  <header class="navbar navbar-expand-lg bg-custom">
        <a href="index.html" class="navbar-brand p-3 pl-4 mr-auto"> <img src="img/kitchenandbathreno1a.png" alt="kitchenandbathreno"  width="400" class="img-fluid">
        </a>
        <div><img src="img/contact-us-1908762_640.png" alt="" width="180" class="mr-3 img-fluid"></div>	
	  </header>
	  
	 <nav class="nav1 navbar navbar-expand-lg navbar-light font-weight-bold">
		   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
        	<span class="navbar-toggler-icon"></span>
        	</button>
		  		<div class="collapse navbar-collapse" id="navbarNav1">
            		<ul class="navbar-nav m-auto">
                		<li class="nav-item">
                    		<a class="nav-link" href="index.html">HOME</a>
                		</li>
                		<li class="nav-item">
                    		<a class="nav-link" href="bathroom.html">BATHROOM</a>
                		</li>
						<li class="nav-item">
                    		<a class="nav-link" href="kitchen.html">KITCHEN</a>
						</li>
						<li class="nav-item">
                    		<a class="nav-link" href="remodeling.html">REMODELING</a>
                		</li>
						<li class="nav-item active">
                    		<a class="nav-link" href="contact.php">ABOUT/CONTACT<span class="sr-only">(current)</span></a>
                		</li>
            		</ul>
        		</div>
          </nav>
          
          <main class="container border shadow px-4 py-2 mt-4 rounded">
             <h1 class="h4 py-2">About Us</h1>
                <p>Richwood Quality Kitchen and Bath Inc. and Celio Group Inc. General Contracting are teaming up to bring you quality cabinetry and renovation expertise that your home deserves.   Looking to have your bathroom or kitchen remodelled?  Look no further, the Kitchen and Bath Reno team are here.  Serving the Greater Toronto and surrounding  area, we provide full scale remodels for your kitchen, bathroom and whole house needs.  We specialize in custom designs and complete remodels but also offer semi-custom and ready to assemble options as well.  We are dedicated to provide our customers with what they need and desire, and do it properly and within budget.</p>
                <p>Call us for your next home renovation.</p>
          </main>

          <div class="container">
              <div class="row">
                   <div class="col-sm-10 col-lg-6 my-4">
                        <h2 class="h4 mb-3">Contact Us</h2>
                        <p>For your convenience, we can be reached by email or phone. Feel free to contact us for an appointment or to speak to someone regarding your renovation.</p>
                        <p class="h4">Tel: 905-123-4567</p>
                        <p id="sendmail"></p>
                         
                        <form id="reach" class="mb-2" action="form.php" method="POST">
                          <h2 class="h5 mb-3">General Inquiry (* required)</h2>
                          <input type="text"  name="name" placeholder="* Your name" class="form-control mb-2">
                          <input type="text" name="email" placeholder="* Your email address" class="form-control mb-2">
                          <input type="text" name="phone" placeholder="Your phone number" class="form-control mb-2">
                          <input type="text" name="fax" placeholder="Your fax number" class="form-control mb-2 d-none">
                          <textarea name="inquiry" placeholder="* How can we help you?" class="form-control mb-2"></textarea>
                          <button type="submit" class="btn-block btn-success btn">Send</button>
                      </form>

                        <?php if (isset($_GET['message']) && $_GET['message'] == 'success') { ?>
                           <div class="alert alert-success">
                              Your message was sent successfully!
                          </div>
                    <?php } ?>
          <?php if (isset($_GET['message']) && $_GET['message'] == 'error') { ?>
              <div class="container pt-2">
                  <div class="row">
                      <div class="col-lg-6 offset-3">
                          <div class="alert alert-danger">
                              Sorry your message could not be sent.
                          </div>
                      </div>
                  </div>
              </div>
          <?php } ?>
          <?php if (isset($_GET['form']) && $_GET['form'] == 'error') { ?>
                  <div class="alert alert-danger">
                        Please fill in required information
                  </div>
           <?php } ?>
                      
                   </div>           
                   <div class="col-10 col-sm-10 col-md-8 col-lg-5 ml-3 my-4">
                       <p>We're locationed at:<br>
                       201 test Ave, Unit 15<br>                        
                        City, ON A1B 2C3</p>   
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2879.750404165215!2d-79.52907328519305!3d43.79879197911654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b2fa5f4be42d3%3A0xdbefaa520eba98d8!2s201+Millway+Ave%2C+Concord%2C+ON+L4K+3W4!5e0!3m2!1sen!2sca!4v1565818758318!5m2!1sen!2sca" width="520" height="390" style="border:0" allowfullscreen></iframe>                  
                  
                     
                    </div>
                 
                </div>
          </div>


          <footer class="container-fluid text-center py-2 bg-custom text-white font-weight-bold">
            <nav class="nav2 navbar navbar-expand-lg navbar-dark">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav2" aria-controls="navbarNav2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                      <div class="collapse navbar-collapse" id="navbarNav2">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="bathroom.html">BATHROOM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="kitchen.html">KITCHEN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="remodeling.html">REMODELING</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="contact.php">ABOUT/CONTACT<span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
              </nav>
            <p><small>&copy; 2019 KitchenAndBathReno.com</small></p>
            <a class="text-reset text-decoration-none" href="https://ewldesign.com/" target="_blank">EWLdesign</a>
        </footer>   
        
          
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
	    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="js/contact.js"></script>

      </body>
    </html>
