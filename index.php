<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLSU College of Veterinary Science and Medicine</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/cvsm-logo.png">
    <!-- Bootstrap 5  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Include header.php -->
    <?php include 'header.php'; ?>

    <!-- CAROUSEL STARTS HERE -->
    <div id="home-carousel" class="carousel slide w-100 vh-100" data-bs-ride="carousel">
        <!-- Gradient Overlay -->
        <div class="gradient-overlay position-absolute top-0 start-0 w-100 vh-100"></div>

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="2"></button>
        </div>

        <div class="container">
          <div class="carousel-caption text-start align-items-center" style="padding-bottom: 120px;">
            <div class="row align-items-center">
              <div class="col-auto">
                  <img src="assets/images/clsu-logo.png" alt="School Logo" class="img-fluid" style="max-height: 30px; margin-bottom: 15px;">
              </div>
              <!-- Column for the school name -->
              <div class="col" style="margin-left: -15px;">
                  <p>Central Luzon State University</p>
              </div>
            </div>
            <h1>COLLEGE OF VETERINARY SCIENCE AND MEDICINE</h1>
            <p>"Veterinarians for the Countryside"</p>
            <br>
            <p><a class="btn btn-primary" href="#">Learn More</a></p>
          </div>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="assets/images/home/home-carousel1.jpeg" alt="Los Angeles" class="d-block w-100 vh-100 object-fit-cover">
              
              <!-- IF THEY WANT DIFF CAPTION IN EVERY CAROUSEL use this template in every carousel-item -->
              <!--<div class="container">
                <div class="carousel-caption text-start">
                  <div class="row align-items-center">
                    <div class="col-auto">
                        <img src="assets/images/clsu-logo.png" alt="School Logo" class="img-fluid" style="max-height: 30px; margin-bottom: 15px;">
                    </div>
                    <div class="col" style="margin-left: -15px;">
                        <p>Central Luzon State University</p>
                    </div>
                  </div>
                  <h1>COLLEGE OF VETERINARY <br>SCIENCE AND MEDICINE</h1>
                  <p>"Veterinarians for the Countryside"</p>
                  <p><a class="btn btn-md btn-primary" href="#">Learn More</a></p>
                </div>
              </div>-->

          </div>
          <div class="carousel-item">
              <img src="assets/images/home/home-carousel2.jpeg" alt="Chicago" class="d-block w-100 vh-100 object-fit-cover">
          </div>
          <div class="carousel-item">
              <img src="assets/images/home/home-carousel3.jpg" alt="New York" class="d-block w-100 vh-100 object-fit-cover">
          </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#home-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#home-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <!-- CAROUSEL ENDS HERE -->


    <!-- NEWS & ANNOUNCEMENTS STARTS HERE -->
    <div class="container my-5">
      <!-- Section Title -->
      <div class="container-fluid">
        <h3 class="section-title">NEWS & ANNOUNCEMENTS</h3>
      </div>

      <!-- Section News & Announcements -->
      <div class="container-fluid">
      <div class="row">

      <!-- LATEST NEWS -->
        <div class="col-sm-8 p-3 bg-primary text-white">
          <div class="d-flex justify-content-between align-items-center bg-secondary mb-3">
            <h5 class="section-subtitle">Latest News</h5>
            <span><a class="navbar-brand" href="#">See all</a></span>
          </div>

          <!-- News Carousel -->
          <div id="news-carousel" class="carousel slide" data-bs-ride="carousel">

              <div class="carousel-inner" style="height: 300px;">
                  <div class="carousel-item active h-100">
                      <img src="assets/images/home/home-carousel1.jpeg" class="d-block w-100 object-fit-cover" alt="Top News">
                      <div class="carousel-caption text-start">
                          <h4>CLSU College of Veterinary Science and Medicine breed a new type of pig</h4>
                          <p class="card-caption">Just In! Central Luzon State University, College of Veterinary Science and Medicine breed a new type of pig. this pig is so big as a human</p>
                      </div>
                  </div>
                  <div class="carousel-item h-100">
                      <img src="assets/images/home/home-carousel2.jpeg" class="d-block w-100 object-fit-cover" alt="Top News">
                      <div class="carousel-caption text-start">
                          <h4>CLSU College of Veterinary Science and Medicine breed a new type of pig</h4>
                          <p class="card-caption">Just In! Central Luzon State University, College of Veterinary Science and Medicine breed a new type of pig. this pig is so big as a human</p>
                      </div>
                  </div>
                  <div class="carousel-item h-100">
                      <img src="assets/images/home/home-carousel3.jpg" class="d-block w-100 object-fit-cover" alt="Top News">
                      <div class="carousel-caption text-start">
                          <h4>CLSU College of Veterinary Science and Medicine breed a new type of pig</h4>
                          <p class="card-caption">Just In! Central Luzon State University, College of Veterinary Science and Medicine breed a new type of pig. this pig is so big as a human</p>
                      </div>
                  </div>
              </div>

              <!-- Left and right controls/icons -->
              <button class="carousel-control-prev" type="button" data-bs-target="#news-carousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#news-carousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
          </div>
        </div>

        <!-- UPCOMING EVENTS -->
        <div class="col-sm-4 p-3 bg-dark text-white">
          <div class="d-flex justify-content-between align-items-center bg-secondary mb-3">
            <h5 class="section-subtitle">Upcoming Events</h5>
            <span><a class="navbar-brand" href="#">See all</a></span>
          </div>

          <!-- The Events -->
          <div class="container-fluid" style="height: 300px;">
            <div class="row bg-secondary mb-2" style="height: 95px;">
                <div class="calendar col-4 text-center">
                    <div class="row bg-secondary align-items-center calendar-header" style="height: 30%;">
                      <span>February</span>
                    </div>
                    <div class="row align-items-center calendar-body" style="height: 70%;">
                      <h2>26-28</h2>
                    </div>
                </div>
                <div class="col-8">
                    
                </div>
            </div>
            <div class="row bg-secondary mb-2" style="height: 95px;">
                <div class="calendar col-4 text-center">
                    <div class="row bg-secondary align-items-center calendar-header" style="height: 30%;">
                      <span>February</span>
                    </div>
                    <div class="row align-items-center calendar-body" style="height: 70%;">
                      <h2>26-28</h2>
                    </div>
                </div>
                <div class="col-sm-8">
                    <!-- Content for the second column of the second row -->
                    Column 2, Row 2
                </div>
            </div>
            <div class="row bg-secondary" style="height: 95px;">
                <div class="calendar col-4 text-center">
                    <div class="row bg-secondary align-items-center calendar-header" style="height: 30%;">
                      <span>February</span>
                    </div>
                    <div class="row align-items-center calendar-body" style="height: 70%;">
                      <h2>26-28</h2>
                    </div>
                </div>
                <div class="col-sm-8">
                    <!-- Content for the second column of the third row -->
                    Column 2, Row 3
                </div>
            </div>
          </div>


          
        </div>

      </div>
      </div>
    </div>
    <!-- NEWS & ANNOUNCEMENTS ENDS HERE -->


    <!-- ACADEMIC PROGRAMS STARTS HERE -->
    <!-- ACADEMIC PROGRAMS ENDS HERE -->


    <!-- ABOUT US AND RESEARCH & PUBLICATIONS STARTS HERE -->
    <!-- ABOUT US AND RESEARCH & PUBLICATIONS ENDS HERE -->

    
    <!-- RESOURCE & FACILITIES STARTS HERE -->
    <!-- RESOURCE & FACILITIES ENDS HERE -->


    <!-- DEPARTMENTS STARTS HERE -->
    <!-- DEPARTMENTS ENDS HERE -->


    <!-- EXTENSION STARTS HERE -->
    <!-- EXTENSION ENDS HERE -->


<!-- Main Content Area -->
<div class="container my-5 d-grid gap-5">
      <div class="p-5 border">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
          natus iusto fugit id saepe neque rerum magni laudantium accusantium
          dolorem numquam quasi.
        </p>
      </div>
      <div class="p-5 border">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
          natus iusto fugit id saepe neque rerum magni laudantium accusantium
          dolorem numquam quasi.
        </p>
      </div>
      <div class="p-5 border">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
          natus iusto fugit id saepe neque rerum magni laudantium accusantium
          dolorem numquam quasi.
        </p>
      </div>
      <div class="p-5 border">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
          natus iusto fugit id saepe neque rerum magni laudantium accusantium
          dolorem numquam quasi.
        </p>
      </div>
      <div class="p-5 border">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
          natus iusto fugit id saepe neque rerum magni laudantium accusantium
          dolorem numquam quasi. df
        </p>
      </div>
    </div>




    <!-- Include footer.php -->
    <?php include 'footer.php'; ?>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="assets/js/scripts.js"></script>
    <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
        // Your code here
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 100) {
                console.log("Adding scrolled class"); 
                nav.classList.add('scrolled');
            } else {
                console.log("Removing scrolled class"); 
                nav.classList.remove('scrolled');
            }
        });
    });

    </script>
</body>
</html>
