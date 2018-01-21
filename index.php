<?php
    ob_start();
    //set the page title
    $page_title = null;
    $page_title = 'Welcome';
    require_once('header.php');
?>
    <main role="main">
        <div class="container">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img class="first-slide" src="img/dropship02.jpg" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h1>3D Artist</h1>
                                <p>Experienced in creating assets for real-time and pre-rendered environments.</p>
                                <p><a class="btn btn-lg btn-primary" href="gallery.html" role="button">View Gallery</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="second-slide" src="img/developer_02.png" alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Developer</h1>
                                <p>Fluent in Java, Python and, HTML/CSS application development.</p>
                                <p><a class="btn btn-lg btn-primary" href="about.html" role="button">Learn more</a></p>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>

            </div>


            <div class="container marketing">

                <!-- Three columns of text below the carousel -->
                <div class="row">

                    <div class="col">
                        <img class="rounded-circle" src="img/grenade_01.jpg" alt="Generic placeholder image" width="140" height="140">
                        <h2>3D Artist</h2>
                        <p>Working knowledge of most major 3D packages and sculpting software. Available for freelance and contract work.</p>
                        <p><a class="btn btn-primary" href="gallery.php" role="button">View Gallery &raquo;</a></p>
                    </div>
                    <!-- /.col-lg-4 -->

                    <div class="col">
                        <img class="rounded-circle" src="img/developer_01.png" alt="Generic placeholder image" width="140" height="140">
                        <h2>Developer</h2>
                        <p>Available to assist with web, application and database development. Adaptable to multiple languages and development methods. Contact for more information. </p>
                        <p><a class="btn btn-primary" href="contact.php" role="button">Contact Now &raquo;</a></p>
                    </div>
                    <!-- /.col-lg-4 -->

                </div>
                <!-- /.row -->

            </div>
        </div>
        <?php
    require_once('footer.php');
?>
