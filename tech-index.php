<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>Tech 24</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="css/font-awesome.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="style.css" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="css/responsive.css" rel="stylesheet">

<!-- Colors for this template -->
<link href="css/colors.css" rel="stylesheet">

<!-- Version Tech CSS for this template -->
<link href="css/version/tech.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>

    <div id="wrapper">
        <header>
         <?php require 'header.php'; ?>
     </header>
     <section class="section first-section">
        <div class="container-fluid">
            <div class="masonry-blog clearfix">

                <!-- fetching images from the database to the web.........   -->              
                <?php
                require 'config.php';

                $query = "SELECT * FROM images ORDER BY id DESC LIMIT 3";
                $query_run = mysqli_query($dbcon,$query);

                if (mysqli_num_rows($query_run) >0) {
                    foreach ($query_run as $row) {
                      ?>
                      <div class="last-slot">
                        <div class="masonry-box post-media">
                           <img src="<?php  echo $row['name'];?>" style="height: 370px;" alt="" >
                           <div class="shadoweffect">
                            <div class="shadow-desc">
                             
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end second-side -->
                <?php
            }
        }
        else{
            echo "No Data found";
        }

        ?>




    </div><!-- end masonry -->
</div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-top clearfix">
                        <h4 class="pull-left">Recent News <a href="#"><i class="fa fa-rss"></i></a></h4>
                    </div><!-- end blog-top -->

                    <div class="blog-list clearfix">
                        <div class="blog-box row">


                          <?php
          require 'config.php';

          $query = "SELECT * FROM  images";
          $query_run = mysqli_query($dbcon,$query);

          if (mysqli_num_rows($query_run) >0) {
            foreach ($query_run as $row) {
              ?>
              <p>
               <?php  echo $row['inform'];?>
             </p>
             <?php
           }
         }
         else{
          echo "No Data found";
        }

        ?>

                </div><!-- end second-side -->




            </div><!-- end blog-box -->

            <hr class="invis">

            <div class="blog-box row">
                <div class="col-md-4">
                    <div class="post-media">
                        <a href="tech-single.html" title="">
                            <img src="images/usb.jpg" alt="" class="img-fluid">
                            <div class="hovereffect"></div>
                        </a>
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">A device you can use both headphones and usb</a></h4>
                    <p>In case you're wondering, can you also play music through your headphones and speakers at the same time using your Android or iOS device? Yes, but there aren't any built-in settings for Android or iOS that let you do this. The easiest way is to use an audio splitter to send the sound to two or more devices.</p>
                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Cables</a></small>
                    <small><a href="tech-single.html" title="">21 July, 2020</a></small>
                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 4412</a></small>
                </div><!-- end meta -->
            </div><!-- end blog-box -->

            <hr class="invis">

            <div class="blog-box row">
                <div class="col-md-4">
                    <div class="post-media">
                        <a href="tech-single.html" title="">
                            <img src="images/new.jpg" alt="" class="img-fluid">
                            <div class="hovereffect"></div>
                        </a>
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">Two brand new laptop models from Jar Tech computer</a></h4>
                    <p>Welcome to our pick of the best laptops of 2020. On this page you'll find a huge range of brilliant laptops that suit all kinds of needs an budgets. So, we haven't just got premium, expensive laptops, but also the best budget laptops, gaming laptops and affordable Chromebooks.</p>
                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Development</a></small>
                    <small><a href="tech-single.html" title="">20 July, 2020</a></small>
                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 2313</a></small>
                </div><!-- end meta -->
            </div><!-- end blog-box -->

            <hr class="invis">

            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-spot clearfix">
                        <div class="banner-img">
                            <img src="images/tech.jpg" alt="" class="img-fluid">
                        </div><!-- end banner-img -->
                    </div><!-- end banner -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis">

            <div class="blog-box row">
                <div class="col-md-4">
                    <div class="post-media">
                        <a href="tech-single.html" title="">
                            <img src="images/pic.jpg" alt="" class="img-fluid">
                            <div class="hovereffect"></div>
                        </a>
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">Applications for taking photos of nature in your mobile phones</a></h4>
                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Design</a></small>
                    <small><a href="tech-single.html" title="">19 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 4441</a></small>
                </div><!-- end meta -->
            </div><!-- end blog-box -->

            <hr class="invis">

            <div class="blog-box row">
                <div class="col-md-4">
                    <div class="post-media">
                        <a href="tech-single.html" title="">
                            <img src="images/watch.jpg" alt="" class="img-fluid">
                            <div class="hovereffect"></div>
                        </a>
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">Say hello to colored strap models in smart hours</a></h4>
                    <p>a digital watch that not only tells times but also ur body temperature and heart beat rate.</p>
                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Materials</a></small>
                    <small><a href="tech-single.html" title="">18 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 33312</a></small>
                </div><!-- end meta -->
            </div><!-- end blog-box -->

            <hr class="invis">

            <div class="blog-box row">
                <div class="col-md-4">
                    <div class="post-media">
                        <a href="tech-single.html" title="">
                            <img src="images/old.jpg" alt="" class="img-fluid">
                            <div class="hovereffect"></div>
                        </a>
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">How about evaluating your old mobile phones in different ways?</a></h4>
                    <p>Transform your old phone into a brand new one</p>
                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Gadgets</a></small>
                    <small><a href="tech-single.html" title="">17 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 4440</a></small>
                </div><!-- end meta -->
            </div><!-- end blog-box -->

            <hr class="invis">

            <div class="blog-box row">
                <div class="col-md-4">
                    <div class="post-media">
                        <a href="tech-single.html" title="">
                            <img src="images/coffee.jpg" alt="" class="img-fluid">
                            <div class="hovereffect"></div>
                        </a>
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">Drinking coffee at the computer rests the spirit</a></h4>
                    <p>Drinking coffee at the computer rests the spirit. plus releaving </p>
                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Technology</a></small>you from the stress and if you had had a bad day, trust me it will be a gd one
                    <small><a href="tech-single.html" title="">16 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 4412</a></small>
                </div><!-- end meta -->
            </div><!-- end blog-box -->

            <hr class="invis">

            <div class="blog-box row">
                <div class="col-md-4">
                    <div class="post-media">
                        <a href="tech-single.html" title="">
                            <img src="images/phone.jpg" alt="" class="img-fluid">
                            <div class="hovereffect"></div>
                        </a>
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">If you are considering buying a new safe for your mobile phone, be sure to read this article</a></h4>
                    <p>Almost every one of us, when decides to buy a new smartphone, gets confused about what factors to consider and what to overlook.</p>
                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Reviews</a></small>
                    <small><a href="tech-single.html" title="">15 July, 2020</a></small>
                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 44123</a></small>
                </div><!-- end meta -->
            </div><!-- end blog-box -->

            <hr class="invis">

            <div class="blog-box row">
                <div class="col-md-4">
                    <div class="post-media">
                        <a href="tech-single.html" title="">
                            <img src="images/head.jpg" alt="" class="img-fluid">
                            <div class="hovereffect"></div>
                        </a>
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">Enjoy a summer with a colorful headset</a></h4>
                    <p>If you want to fall in love with music all over again, a new pair of headphones is the place to go. It's one of the best ways of making a big step up in listening quality for a relatively small amount money. </p>
                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Technology</a></small>
                    <small><a href="tech-single.html" title="">14 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 2214</a></small>
                </div><!-- end meta -->
            </div><!-- end blog-box -->

            <hr class="invis">

            <div class="blog-box row">
                <div class="col-md-4">
                    <div class="post-media">
                        <a href="tech-single.html" title="">
                            <img src="images/cod.jpg" alt="" class="img-fluid">
                            <div class="hovereffect"></div>
                        </a>
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="blog-meta big-meta col-md-8">
                    <h4><a href="tech-single.html" title="">Google has developed a brand new algorithm. Forget all your knowledge!</a></h4>
                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Gadgets</a></small>
                    <small><a href="tech-single.html" title="">13 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 3331</a></small>
                </div><!-- end meta -->
            </div><!-- end blog-box -->
        </div><!-- end blog-list -->
    </div><!-- end page-wrapper -->

    <hr class="invis">

    <div class="row">
        <div class="col-md-12">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-start">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div><!-- end col -->
    </div><!-- end row -->
</div><!-- end col -->

<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
    <div class="sidebar">
        <div class="widget">
            <div class="banner-spot clearfix">
                <div class="banner-img">
                    <img src="images/banner.jpg" alt="" class="img-fluid">
                </div><!-- end banner-img -->
            </div><!-- end banner -->
        </div><!-- end widget -->

        <div class="widget">
            <h2 class="widget-title">Trend Videos</h2>
            <div class="trend-videos">
                <div class="blog-box">
                    <div class="post-media">
                        <a href="tech-single.html" title="">
                            <img src="images/new.jpg" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span class="videohover"></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="tech-single.html" title="">We prepared the best 10 laptop presentations for you</a></h4>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="blog-box">
                    <div class="post-media">
                        <a href="tech-single.html" title="">
                            <img src="upload/tech_video_02.jpg" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span class="videohover"></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="tech-single.html" title="">We are guests of ABC Design Studio - Vlog</a></h4>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="blog-box">
                    <div class="post-media">
                        <a href="tech-single.html" title="">
                            <img src="upload/tech_video_03.jpg" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span class="videohover"></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="tech-single.html" title="">Both blood pressure monitor and intelligent clock</a></h4>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->
            </div><!-- end videos -->
        </div><!-- end widget -->

        <div class="widget">
            <h2 class="widget-title">Popular Posts</h2>
            <div class="blog-list-widget">
                <div class="list-group">
                    <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 justify-content-between">
                            <img src="upload/tech_blog_08.jpg" alt="" class="img-fluid float-left">
                            <h5 class="mb-1">5 Beautiful buildings you need..</h5>
                            <small>12 Jan, 2016</small>
                        </div>
                    </a>

                    <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 justify-content-between">
                            <img src="upload/tech_blog_01.jpg" alt="" class="img-fluid float-left">
                            <h5 class="mb-1">Let's make an introduction for..</h5>
                            <small>11 Jan, 2016</small>
                        </div>
                    </a>

                    <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 last-item justify-content-between">
                            <img src="upload/tech_blog_03.jpg" alt="" class="img-fluid float-left">
                            <h5 class="mb-1">Did you see the most beautiful..</h5>
                            <small>07 Jan, 2016</small>
                        </div>
                    </a>
                </div>
            </div><!-- end blog-list -->
        </div><!-- end widget -->

        <div class="widget">
            <h2 class="widget-title">Recent Reviews</h2>
            <div class="blog-list-widget">
                <div class="list-group">
                    <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 justify-content-between">
                            <img src="upload/tech_blog_02.jpg" alt="" class="img-fluid float-left">
                            <h5 class="mb-1">Banana-chip chocolate cake recipe..</h5>
                            <span class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                        </div>
                    </a>

                    <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 justify-content-between">
                            <img src="upload/tech_blog_03.jpg" alt="" class="img-fluid float-left">
                            <h5 class="mb-1">10 practical ways to choose organic..</h5>
                            <span class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                        </div>
                    </a>

                    <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 last-item justify-content-between">
                            <img src="upload/tech_blog_07.jpg" alt="" class="img-fluid float-left">
                            <h5 class="mb-1">We are making homemade ravioli..</h5>
                            <span class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div><!-- end blog-list -->
        </div><!-- end widget -->

        <div class="widget">
            <h2 class="widget-title">Follow Us</h2>

            <div class="row text-center">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <a href="#" class="social-button facebook-button">
                        <i class="fa fa-facebook"></i>
                        <p>27k</p>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <a href="#" class="social-button twitter-button">
                        <i class="fa fa-twitter"></i>
                        <p>98k</p>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <a href="#" class="social-button google-button">
                        <i class="fa fa-google-plus"></i>
                        <p>17k</p>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <a href="#" class="social-button youtube-button">
                        <i class="fa fa-youtube"></i>
                        <p>22k</p>
                    </a>
                </div>
            </div>
        </div><!-- end widget -->

        <div class="widget">
            <div class="banner-spot clearfix">
                <div class="banner-img">
                    <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                </div><!-- end banner-img -->
            </div><!-- end banner -->
        </div><!-- end widget -->
    </div><!-- end sidebar -->
</div><!-- end col -->
</div><!-- end row -->
</div><!-- end container -->
</section>
<footer>
  <?php require 'footer.php'; ?>
</footer>
<div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->

    <!-- Core JavaScript
        ================================================== -->
        <script src="js/jquery.min.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
    </html>