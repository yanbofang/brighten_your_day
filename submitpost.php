<?php

include_once "global.php";

// add a new blog post

if (isset($_POST['submit'])) {
    $words = trim($_POST['words']);
    $title = $_POST['title'];
    $query = "INSERT INTO Blog (words, date_post, title, mood) VALUES ";
    if ($stmt = $conn->prepare($query." (?, NOW(), ?, ".'happy'.")")) {
        echo "hiigeognesngoghw";
        $stmt->bind_param('ss', $words, $title);
        $stmt->execute();
        $postid = $stmt->insert_id;
        $stmt->close();
    }
}

?>

<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
    <title>Keep It Simple.</title>
    <meta name="description" content="">  
    <meta name="author" content="">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/layout.css">  
    <link rel="stylesheet" href="css/media-queries.css"> 

   <!-- Script
   ================================================== -->
    <script src="js/modernizr.js"></script>

   <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.png" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="top">

    <div class="row">

        <div class="header-content twelve columns">

              <h1 id="logo-text"><a href="index.html" title="">Brighten</a></h1>
                <p id="intro">Put your awesome slogan here...</p>

            </div>          

       </div>

       <nav id="nav-wrap"> 

        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
           <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>

        <div class="row">                       

                <ul id="nav" class="nav">
                    <li class="current"><a href="index.html">Home</a></li>
                    <li class="has-children"><a href="#">Dropdown</a>
                      <ul>
                         <li><a href="#">Submenu 01</a></li>
                         <li><a href="#">Submenu 02</a></li>
                         <li><a href="#">Submenu 03</a></li>
                      </ul>
                   </li>
                   <li><a href="demo.html">Demo</a></li>    
                   <li><a href="archives.html">Archives</a></li>
                    <li class="has-children"><a href="single.html">Blog</a>
                            <ul>
                         <li><a href="blog.html">Blog Entries</a></li>
                         <li><a href="single.html">Single Blog</a></li>                      
                      </ul>
                    </li>               
                    <li><a href="page.html">Page</a></li>
                </ul> <!-- end #nav -->              

        </div> 

       </nav> <!-- end #nav-wrap -->         

   </header> <!-- Header End -->

   <!-- Content
   ================================================== -->
   <div id="content-wrap">

    <div class="row">

        <div id="main" class="eight columns">

            <form method="post">                                <!-- Submit form start-->
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php if (isset($_POST['title'])) echo $_POST['title'];?>" required>
                </div>

                <div class="form-group">
                    <label for="words">Text</label>
                    <textarea class="form-control" maxlength="10000" id="words" name="words" rows="10" required><?php if (isset($_POST['words'])) echo $_POST['words'];?></textarea>
                </div>

                <button type="submit" id="submit" name="submit" class="btn btn-default">Submit</button>
            </form>                         <!-- Submit form END-->
                        

        </div> <!-- end main -->

        <div id="sidebar" class="four columns">

            <div class="widget widget_search">
                  <h3>Search</h3> 
                  <form action="#">

                     <input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
                     <input type="submit" value="" class="submit-search">

                  </form>
               </div>

            <div class="widget widget_categories group">
                <h3>Categories.</h3> 
                <ul>
                        <li><a href="#" title="">Wordpress</a> (2)</li>
                        <li><a href="#" title="">Ghost</a> (14)</li>
                        <li><a href="#" title="">Joomla</a> (5)</li>
                        <li><a href="#" title="">Drupal</a> (3)</li>
                        <li><a href="#" title="">Magento</a> (2)</li>
                        <li><a href="#" title="">Uncategorized</a> (9)</li>                     
                    </ul>
                </div>

                <div class="widget widget_text group">
                    <h3>Widget Text.</h3>

                <p>Lorem ipsum Ullamco commodo laboris sit dolore commodo aliquip incididunt fugiat esse dolor aute fugiat minim eiusmod do velit labore fugiat officia ad sit culpa labore in consectetur sint cillum sint consectetur voluptate adipisicing Duis irure magna ut sit amet reprehenderit.</p>

            </div>

            <div class="widget widget_tags">
               <h3>Post Tags.</h3>

               <div class="tagcloud group">
                    <a href="#">Corporate</a>
                  <a href="#">Onepage</a>
                  <a href="#">Agency</a>
                  <a href="#">Multipurpose</a>
                  <a href="#">Blog</a>
                  <a href="#">Landing Page</a>
                  <a href="#">Resume</a>
               </div>
                  
            </div>

            <div class="widget widget_popular">
               <h3>Popular Post.</h3>

               <ul class="link-list">
                  <li><a href="#">Sint cillum consectetur voluptate.</a></li>
                  <li><a href="#">Lorem ipsum Ullamco commodo.</a></li>
                  <li><a href="#">Fugiat minim eiusmod do.</a></li>                     
               </ul>
                  
            </div>
            
        </div> <!-- end sidebar -->

    </div> <!-- end row -->

   </div> <!-- end content-wrap -->
   

   <!-- Footer
   ================================================== -->
   <footer>

      <div class="row"> 

        <div class="twelve columns">    
                <ul class="social-links">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>               
               <li><a href="#"><i class="fa fa-github-square"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-flickr"></i></a></li>               
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>           
        </div>
        
         <div class="six columns info">

            <h3>About Keep It Simple</h3> 

            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
            nibh id elit. 
            </p>

            <p>Lorem ipsum Sed nulla deserunt voluptate elit occaecat culpa cupidatat sit irure sint 
            sint incididunt cupidatat esse in Ut sed commodo tempor consequat culpa fugiat incididunt.</p>

         </div>

         <div class="four columns">

            <h3>Photostream</h3>
            
            <ul class="photostream group">
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
            </ul>           

         </div>

         <div class="two columns">
            <h3 class="social">Navigate</h3>

            <ul class="navigate group">
               <li><a href="#">Home</a></li>
               <li><a href="#">Blog</a></li>
               <li><a href="#">Demo</a></li>
               <li><a href="#">Archives</a></li>
               <li><a href="#">About</a></li>
            </ul>
         </div>

         <p class="copyright">&copy; Copyright 2014 Keep It Simple. &nbsp; Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a>.</p>
        
      </div> <!-- End row -->

      <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-chevron-up"></i></a></div>

   </footer> <!-- End Footer-->


   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>  
   <script src="js/main.js"></script>
   
   <script>
   $("#theForm").submit(function() {
       type: "GET",
      url: "index1.php",
      dataType: 'json',
      async: false,
      username: "0283cb2f-c798-4403-9ad6-f5a829e90107",
      password: "1DF15bZZfwng",
      data: {"text": document.getElementById("words"), "features": {
      "entities": {
      "emotion": true,
      "sentiment": true,
      "limit": 2
    },
    "keywords": {
      "emotion": true,
      "sentiment": true,
      "limit": 2
    } 
   },
      success: function (){
      alert('Thanks for your comment!'); 
  }
   }
   
   </script>

</body>

</html>