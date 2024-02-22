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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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
            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="3"></button>
        </div>

        <div class="container">
          <div class="carousel-caption text-start align-items-center" style="padding-bottom: 120px;">
            <div class="row align-items-center">
              <div class="col-auto">
                  <img src="assets/images/clsu-logo.png" alt="School Logo" class="img-fluid" style="max-height: 30px; margin-bottom: 15px;">
              </div>
              <!-- Column for the school name -->
              <div class="col" style="margin-left: -15px; margin-bottom: 13px;">
                  <span>Central Luzon State University</span>
              </div>
            </div>
            <h1>COLLEGE OF VETERINARY SCIENCE AND MEDICINE</h1>
            <br>
            <span>"Veterinarians for the Countryside"</p>
            <br>
            <p><a class="btn btn-primary" href="#">Learn More</a></p>
          </div>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="assets/images/home/home-carousel1.jpeg" alt="carousel 1" class="d-block w-100 vh-100 object-fit-cover">
              
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
              <img src="assets/images/home/home-carousel2.jpeg" alt="carousel 2" class="d-block w-100 vh-100 object-fit-cover">
          </div>
          <div class="carousel-item">
              <img src="assets/images/home/home-carousel3.jpg" alt="carousel 3" class="d-block w-100 vh-100 object-fit-cover">
          </div>
          <div class="carousel-item">
              <img src="assets/images/temporary/main-gate.JPG" alt="carousel 3" class="d-block w-100 vh-100 object-fit-cover">
              <div class="carousel-caption">
                <p><a href="https://clsu.edu.ph/" class="btn btn-lg btn-success" target="_blank" >VISIT CLSU WEBSITE</a></p>
              </div>
          </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#home-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#home-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#home-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
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
        <h3 class="section-title">COLLEGE UPDATES</h3>
      </div>

      <!-- Section News & Announcements -->
      <div class="container-fluid">
      <div class="row">

      <!-- LATEST NEWS -->
        <div class="col-lg-8 p-3">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="section-subtitle">Latest News</h5>
            <span><a class="navbar-brand text-muted" href="#">See all</a></span>
          </div>

          <!-- News Carousel -->
          <div id="news-carousel" class="carousel slide rounded" data-bs-ride="carousel">

              <div class="carousel-inner text-white" style="height: 300px;">
                  <div class="carousel-item active h-100">
                      <img src="assets/images/temporary/kaye.jpg" class="img-fluid d-block w-100 h-100 object-fit-cover" alt="Top News">
                      <div class="carousel-caption text-start">
                          <h4>Triumph at NCVMS: CLSU Students Shine in Cebu</h4>
                          <p class="card-caption">CLSU students clinch victory at the 20th National Congress of Veterinary Medicine Students in Cebu, showcasing excellence in case presentations and creative skits</p>
                      </div>
                  </div>
                  <div class="carousel-item h-100">
                      <img src="assets/images/temporary/ligtas.png" class="img-fluid d-block w-100 h-100 object-fit-cover" alt="Top News">
                      <div class="carousel-caption text-start">
                          <h4>LIGTAS-CLSU Wins 1st Place: Advocacy Against Drugs</h4>
                          <p class="card-caption">CLSU’s LIGTAS poster on drug abuse prevention clinches top spot at LEAD Cebu 2024, reinforcing commitment to drug education and awareness.</p>
                      </div>
                  </div>
                  <div class="carousel-item h-100">
                      <img src="assets/images/temporary/clsu vth.png" class="img-fluid d-block w-100 h-100 object-fit-cover" alt="Top News">
                      <div class="carousel-caption text-start">
                          <h4>Promoting Safety: CLSU-VTH's Stray Animal Handling Campaign</h4>
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
        <div class="col-lg-4 p-3">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="section-subtitle">Events</h5>
            <span><a class="navbar-brand text-muted" href="#">See all</a></span>
          </div>

          <!-- The Events -->
          <div class="container-fluid" style="height: 300px;">
            <div class="calendar row mb-2 rounded" style="height: 95px;">
                <div class="col-4 text-center text-white rounded">
                    <div class="row align-items-center event-header">
                      <span>February</span>
                    </div>
                    <div class="row align-items-center event-body">
                      <h2>23</h2>
                    </div>
                </div>
                <div class="col-8 event-description justify-content-center">
                    <div class="row event-des-title align-items-end">
                        <h6>WEBINAR ALERT!</h6>
                    </div>
                    <div class="row event-des-text align-items-start">
                        <p>Learn about Freshwater Eel Management on February 23, 2024..</p>
                    </div>
                </div>
            </div>
            <div class="calendar row mb-2 rounded" style="height: 95px;">
                <div class="col-4 text-center text-white rounded">
                    <div class="row align-items-center event-header">
                      <span>February</span>
                    </div>
                    <div class="row align-items-center event-body">
                      <h2>23</h2>
                    </div>
                </div>
                <div class="col-8 event-description justify-content-center">
                    <div class="row event-des-title align-items-end">
                        <h6>CLSU-VTH holds awarenes..</h6>
                    </div>
                    <div class="row event-des-text align-items-start">
                        <p>Senor clinicians of CLSU-College of Veterinary Science and Medicine (C..</p>
                    </div>
                </div>
            </div>
            <div class="calendar row mb-2 rounded" style="height: 95px;">
                <div class="col-4 text-center text-white rounded">
                    <div class="row align-items-center event-header">
                      <span>February</span>
                    </div>
                    <div class="row align-items-center event-body">
                      <h2>16</h2>
                    </div>
                </div>
                <div class="col-8 event-description justify-content-center">
                    <div class="row event-des-title align-items-end">
                        <h6>VKV-VLV Alum trains vet stu..</h6>
                    </div>
                    <div class="row event-des-text align-items-start">
                        <p>As part of their quick visit to different vet schools in the country, Venerable..</p>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <!-- NEWS & ANNOUNCEMENTS ENDS HERE -->


    <!-- ACADEMIC PROGRAMS STARTS HERE -->
    <div class="container my-5">

      <!-- Section Title -->
      <div class="container-fluid">
        <h3 class="section-title">ACADEMIC PROGRAMS</h3>
      </div>

      <!-- Academic Programs Container -->
        <div class="row g-0 my-3">
          <!-- Academic Program 1 -->
          <div class="col-md-6">
            <div class="container">
            <div class="card rounded">
                <img src="assets/images/temporary/Student - Dog checking.jpeg" class="img-fluid" alt="Image">
                <div class="card-overlay"></div>
                <div class="card-body  text-center">
                  <h5 class="card-title">Doctors of Veterinary Medicine</h5>
                </div>
                <div class="card-body2  text-center">
                  <h5 class="card-title">Doctors of Veterinary Medicine</h5>
                  <p class="card-text">DVM is a 6-year curricular program designed to  produce well-balanced veterinarians, knowledgeable in animal production, welfare and One Health.</p>
                  <p><a class="btn btn-sm card-btn" href="#">Learn More</a></p>
                </div>
            </div>
            </div>
          </div>

          <!-- Academic Program 2 -->
          <div class="col-md-6">
          <div class="container">
            <div class="card rounded">
                <img src="assets/images/temporary/CVSM_3.jpg" class="img-fluid" alt="Image">
                <div class="card-overlay"></div>
                <div class="card-body  text-center">
                  <h5 class="card-title">Master of Veterinary Studies</h5>
                </div>
                <div class="card-body2  text-center">
                  <h5 class="card-title">Master of Veterinary Studies</h5>
                  <p class="card-text">MVSt is a 2-year post-graduate degree for veterinarians designed to specialize in either Veterinary Public Health or Veterinary Preventive Medicine.</p>
                  <p><a class="btn btn-sm card-btn" href="#">Learn More</a></p>
                </div>
            </div>
            </div>
          </div>
        </div>
    </div>
    <!-- ACADEMIC PROGRAMS ENDS HERE -->


    <!-- ABOUT US AND RESEARCH & PUBLICATIONS STARTS HERE -->
    <div class="container-fluid g-0">

      <!-- About Us -->
      <div class="row four-view g-0">

        <!-- About Us Video-->
        <div class="col-lg-6 iframe-bg g-0">
          <!--<iframe src="https://www.youtube.com/embed/s9vrxD75PzM?autoplay=1&mute=1" style="width: 100%; height: 100%;" allowfullscreen></iframe>-->
          <!-- <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3Dpfbid0V7i1txvfj9ewtX4A7uev7hDM2bneAM3k6f2q6PinWLevaTMEtQfrrzLZSdXx9W7el%26id%3D1704530979769491&show_text=false" width="100%" class="align-items-center" style="border:none; overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> -->
            
            <div class="iframe-container">
              <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3Dpfbid0V7i1txvfj9ewtX4A7uev7hDM2bneAM3k6f2q6PinWLevaTMEtQfrrzLZSdXx9W7el%26id%3D1704530979769491&width=750&show_text=false&appId=895115338865715&height=423" width="100%" height="320" class="responsive-iframe" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>

            


        </div>

        <!-- About Us Learn More -->
        <div class="col-lg-6 position-relative">
          <div class="ov-image-container">
            <img src="assets/images/temporary/bones.jpg" class="img-fluid" alt="Picture 2">
            <div class="ov-overlay"></div>
            <div class="ov-content">
              <h3 class="ov-title">About Us</h3>
              <p class="ov-description">The College envisions to become a multi veterinary institution dedicated to countryside development by providing excellent veterinary education to produce graduates equipped with technical, entrepreneurial, managerial, and leadership skills necessary for optimum animal production. </p>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Research & Publications Learn More-->
      <div class="row four-view g-0">

        <!-- Research & Publications Learn More -->
        <div class="col-lg-6 position-relative">
          <div class="ov-image-container">
            <img src="assets/images/temporary/STudent - chicken sorting.jpg" class="img-fluid" alt="Picture 2">
            <div class="ov-overlay"></div>
            <div class="ov-content">
              <h3 class="ov-title">Research & Publications</h3>
              <p class="ov-description">CVSM is housed in two main facilities: the CVSM main building and the Veterinary Teaching Hospital. Both are equipped with lecture halls and laboratory facilities for conducive and collaborative learning of students.</p>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Research & Publications Picture-->
        <div class="col-lg-6">
          <img src="assets/images/temporary/sir errol.jpg" class="img-fluid" alt="Picture 4">
        </div>
      </div>
    </div>
    <!-- ABOUT US AND RESEARCH & PUBLICATIONS ENDS HERE -->

    
    <!-- RESOURCE & FACILITIES STARTS HERE -->
    <div class="container my-5">

      <!-- Section Title -->
      <div class="container-fluid">
        <h3 class="section-title">RESOURCE AND FACILITIES</h3>
      </div>

      <!-- Resources -->
      <div class="container-fluid my-3">
        <h5 class="section-subtitle">Resources</h5>

          <!-- The Events -->
          <div class="container-fluid my-4">
            <div class="calendar row rounded align-items-center pt-4 pb-3 px-5">
                <div class="col-sm-10">
                  <div class="row event-des-title align-items-end">
                        <h6>At CLSU CVSM, students are equipped with tools to excel in veterinary medicine.</h6>
                    </div>
                    <div class="row event-des-text align-items-start">
                        <p>By its extensive array of resources and state-of-the-art facilities dedicated to advancing veterinary education, research, and clinical practice. These resources play a pivotal role in providing students with hands-on training, facilitating cutting-edge research, and delivering high-quality veterinary care to animals.</p>
                    </div>
                </div>
                <div class="col-lg-2">
                  <p><a class="btn btn-primary" href="#">Learn More</a></p>
                </div>
            </div>
          </div>
      </div>

      <!-- Facilities -->
      <div class="container-fluid my-5">
        <!-- Facilities Subtitle -->
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="section-subtitle">Facilities</h5>
            <span><a class="navbar-brand text-muted" href="#">See all</a></span>
        </div>


          <!-- Facilities Card Lists -->
          <div class="row row-cols-1 row-cols-md-3 my-3">
              <!-- Example loop for generating items -->
              <!-- Replace the content of the div with your dynamic content -->
              <!-- This is just a placeholder example -->
              <!-- Begin loop -->
              <div class="col">
                  <div class="card rounded">
                      <img src="assets/images/temporary/lecture.jpg" class="img-fluid d-block w-100 h-100 object-fit-cover" alt="Image 3">
                      <div class="card-overlay"></div>
                      
                      <div class="card-logo-container d-flex">
                          <img src="assets/images/cvsm-logo.png" alt="Logo 1" class="card-logo">
                          <img src="assets/images/clsu-logo.png" alt="Logo 2" class="card-logo">
                      </div>
                
                      <div class="card-body1">
                          <h5 class="card-title">Lecture Halls</h5>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="card rounded">
                      <img src="assets/images/temporary/CVSM_1.jpeg" class="img-fluid d-block w-100 h-100 object-fit-cover" alt="Image 3">
                      <div class="card-overlay"></div>

                      <div class="card-logo-container d-flex">
                          <img src="assets/images/cvsm-logo.png" alt="Logo 1" class="card-logo">
                          <img src="assets/images/clsu-logo.png" alt="Logo 2" class="card-logo">
                      </div>
                      
                      <div class="card-body1">
                          <h5 class="card-title">Laboratories</h5>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="card rounded">
                      <img src="assets/images/temporary/centrad.png" class="img-fluid d-block w-100 h-100 object-fit-cover" alt="Image 3">
                      <div class="card-overlay"></div>
                      
                      <div class="card-logo-container d-flex">
                          <img src="assets/images/cvsm-logo.png" alt="Logo 1" class="card-logo">
                          <img src="assets/images/clsu-logo.png" alt="Logo 2" class="card-logo">
                      </div>

                      <div class="card-body1">
                          <h5 class="card-title">Center for Transboundary Animal Diseases (CenTrAD)</h5>
                      </div>
                  </div>
              </div>
              <!-- End loop -->
          </div>
      </div>
    </div>
    <!-- RESOURCE & FACILITIES ENDS HERE -->


    <!-- DEPARTMENTS STARTS HERE -->
    <div class="container my-5">

      <!-- Section Title -->
      <div class="container d-flex justify-content-between align-items-center">
        <h3 class="section-title">DEPARTMENTS</h3>
        <span><a class="navbar-brand text-muted" href="#">See all</a></span>
      </div>
      
      <div class="accordion accordion-flush my-3 container rounded p-1" id="accordionFlushExample">

        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Morphophysiology
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body p-0">
              <div id="accordion-img" class="accordion-img">
                  <img src="assets/images/temporary/bones.jpg" class="img-fluid" alt="Picture 4">
                  <div class="ov-content">
                      <h3 class="ov-title">The Department of Morphophysiology and Pharmacology</h3>
                      <p class="ov-description">Explore anatomy, physiology, and pharmacology in animals at CLSU CVSM, unraveling the intricacies of living organisms.</p>
                      <a href="#" class="btn btn-primary">Learn More</a>
                  </div>
                </div>
            </div>
          </div>
        </div>


        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Animal Management
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body p-0">
              <div id="accordion-img" class="accordion-img">
                <img src="assets/images/temporary/Student - milking.jpeg" class="img-fluid" alt="Picture 4">
                <div class="ov-content">
                    <h3 class="ov-title">The Department of Animal Management</h3>
                    <p class="ov-description">Delve into animal care, behavior, and welfare at CLSU CVSM, equipping students to manage diverse animal populations with compassion and skill.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              Pathobiology
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body p-0">
              <div id="accordion-img" class="accordion-img">
                <img src="assets/images/temporary/Student - fish.jpeg" class="img-fluid" alt="Picture 4">
                <div class="ov-content">
                    <h3 class="ov-title">The Department of Pathobiology</h3>
                    <p class="ov-description">Investigate disease processes in animals at CLSU CVSM, preparing students to diagnose, treat, and prevent diseases for enhanced animal health.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
              Clinical Sciences
            </button>
          </h2>
          <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
            <div id="accordion-img" class="accordion-img">
              <img src="assets/images/temporary/Student- centrifuge.jpeg" class="img-fluid" alt="Picture 4">
              <div class="ov-content">
                  <h3 class="ov-title">The Department of Clinical Science</h3>
                  <p class="ov-description">Gain hands-on experience in veterinary care at CLSU CVSM, where students learn to diagnose and treat a variety of medical and surgical conditions in animals.</p>
                  <a href="#" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- DEPARTMENTS ENDS HERE -->


    <!-- EXTENSION STARTS HERE -->
    <div class="container my-5">

      <!-- Section Title -->
      <!-- Section Title -->
      <div class="container d-flex justify-content-between align-items-center my-3">
        <h3 class="section-title">EXTENSION</h3>
        <span><a class="navbar-brand text-muted" href="#">See all</a></span>
      </div>

      <div class="container-fluid">
          <div class="row row-cols-1 row-cols-md-3">
              <div class="col">
                  <div class="card rounded">
                      <img src="assets/images/temporary/vetmission.png" class="img-fluid d-block w-100 h-100 object-fit-cover" alt="Image 3">
                      <div class="card-overlay"></div>
                      
                      <div class="card-logo-container d-flex">
                          <img src="assets/images/cvsm-logo.png" alt="Logo 1" class="card-logo">
                          <img src="assets/images/clsu-logo.png" alt="Logo 2" class="card-logo">
                      </div>
                
                      <div class="card-body1">
                          <h5 class="card-title">Vet Mission</h5>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="card rounded">
                      <img src="assets/images/temporary/cattle.jpg" class="img-fluid d-block w-100 h-100 object-fit-cover" alt="Image 3">
                      <div class="card-overlay"></div>

                      <div class="card-logo-container d-flex">
                          <img src="assets/images/cvsm-logo.png" alt="Logo 1" class="card-logo">
                          <img src="assets/images/clsu-logo.png" alt="Logo 2" class="card-logo">
                      </div>
                      
                      <div class="card-body1">
                          <h5 class="card-title">Cattle Dispersal</h5>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="card rounded">
                      <img src="assets/images/temporary/CVSM_2.jpeg" class="img-fluid d-block w-100 h-100 object-fit-cover" alt="Image 3">
                      <div class="card-overlay"></div>
                      
                      <div class="card-logo-container d-flex">
                          <img src="assets/images/cvsm-logo.png" alt="Logo 1" class="card-logo">
                          <img src="assets/images/clsu-logo.png" alt="Logo 2" class="card-logo">
                      </div>

                      <div class="card-body1">
                          <h5 class="card-title">Veterinary Teaching Hospital</h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <!-- EXTENSION ENDS HERE -->






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
                nav.classList.add('scrolled')
            } else {
                console.log("Removing scrolled class"); 
                nav.classList.remove('scrolled');
            }
        });
    });

    </script>
</body>
</html>
