<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
    <title>PORTFOLIO IZZNUR</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + JohnDoe main styles -->
	<link rel="stylesheet" href="assets/css/johndoe.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
        <div class="container">
            
        </div>
    </header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link">Resume</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div id="about" class="row about-section">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Who am I ?</h3>
                <span class="line mb-5"></span>
                <ul class="navbar-nav brand">
                    <img src="assets/imgs/logo (2).png" alt="" class="brand-img">
                </ul>
                <h5 class="mb-3">Izznur Syakirah Binti Aziz </h5>
                <p class="mt-20">2022947419</p>
                <p class="mt-20">I am a student who is studying at Faculty Science Computer and Mathematics, Uitm Shah Alam, that has strong knowledge of
                    CSS, Database, and HTML that providesan opportunity to capitalize on my technical skills and abilities in the field of information technology.</p>

            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Personal Info</h3>
                <span class="line mb-5"></span>
                <?php
                        $sql = "SELECT * FROM user"; 
                                    $qry=mysqli_query($conn,$sql);
                                    $row=mysqli_num_rows($qry);

                                    if($row > 0)
                    {
                        $d = mysqli_fetch_assoc($qry)

                ?>
                <ul class="mt40 info list-unstyled">
                    <li><span>Full Name </span> : <?php echo $d['name']; ?></li>
                    <li><span>IC Number</span> :<?php echo $d['id_num']; ?> </li>
                    <li><span>Age</span> :<?php echo $d['age']; ?> </li>
                    <li><span>Phone</span> : <?php echo $d['phonenum']; ?></li>
                    <li><span>Student ID</span> : <?php echo $d['student_id']; ?> </li>
                    <li><span>Date of Birth</span> : <?php echo $d['dob']; ?></li>
                    <li><span>Gender </span> : <?php echo $d['gender']; ?></li>
                    <li><span>Height</span> : <?php echo $d['height']; ?></li>
                    <li><span>Weight</span> : <?php echo $d['weight']; ?></li>
                    <li><span>Email</span> :  <?php echo $d['email']; ?></li>
                    <li><span>Nationality</span> : <?php echo $d['nationality']; ?></li>
                    <li><span>Language</span> : <?php echo $d['language']; ?></li>
                    <li><span>Address</span> :  <?php echo $d['address']; ?></li>
                </ul>

                <?php
                    }?>
        
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">My Expertise</h3>
                <span class="line mb-5"></span>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-widget icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>UX Design</h6>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-paint-bucket icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Web Development</h6>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-stats-up icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Programming Language</h6>
                        <p class="subtitle">HTML, CSS, JavaScript</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Resume Section-->
    <section class="section" id="resume">
        <div class="container">
            <h2 class="mb-5"><span class="text-danger">My</span> Resume</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                       <div class="card-header">
                            <div class="mt-2">
                                <h4>WORK EXPERIENCE</h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="title text-danger"> January 2020 </h6>
                            <P>Mitsui Outlet Park, Sepang</P>
                            <P class="subtitle">Part time as Saleswoman</P>
                            <hr>
                            <h6 class="title text-danger">September 2018 - Jun 2019</h6>
                            <P>Secret Recipe, Kip mall Kota Warisan</P>
                            <P class="subtitle">Fulltime worker as Waiter</P>
                    
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                       <div class="card-header">
                            <div class="mt-2">
                                <h4>Education</h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="title text-danger">2022 - Present</h6>
                            <P>Bachelor Of Computer Science Netcentric Computing</P>
                            <P class="subtitle">University Teknologi Mara Shah Alam</P>
                            <hr>
                            <h6 class="title text-danger">2019 - 2022</h6>
                            <P>Diploma in Computer Science</P>
                            <P class="subtitle">University Teknologi Mara Cawangan Terengganu Campus Kuala Terengganu</P>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope  -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>
    
    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="assets/js/johndoe.js"></script>

</body>
</html>
