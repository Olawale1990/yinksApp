<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <title> YINKSAPP WEBSITE</title>
      <script crossorigin src="react.min.js"> </script>
        <script crossorigin src="react-dom.min.js"></script>
        <script src="babel.min.js"></script>

        <script src="bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css" />
    
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css" />
    <link rel="map" type="text/map" href="bootstrap.min.css.map" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
    </head>
    <body>
      <div class="wrapper" style="width:100%; height:100%;">
      <nav class="navbar navbar-inverse">
        <button class="navbar-toggler" type="button" data-toggle="collapse" style="float:right;" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-button" viewBox="0 0 16 16">
            <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0h8A1.5 1.5 0 0 1 11 1.5v2A1.5 1.5 0 0 1 9.5 5h-8A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-8z"/>
            <path d="m7.823 2.823-.396-.396A.25.25 0 0 1 7.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
          </svg>
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"  id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              
            </li>&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
            
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="#">Action</a><br/>
               <a class="dropdown-item" href="#">Another action</a><br/>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="#">Something else here</a>
               
             </div>
           </li>
           <li class="nav-item">
        
           </li>
          </ul>
        <div class="container-fluid">
       <div class="navbar-header">

       </div>
       <ul class="nav navbar-nav">
         <li class="active"><a href="index.html">Home</a></li>
         <li><a href="gallery.html">Gallery</a></li>
         <li><a href="contact.html">Registration/Contact/Order/AddToCart</a></li>
         <!--<li class="dropdown">
          <a class="nav-link dropdown-toggle" href="contact.html" id="navbarDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Registration
          </a>
        <ul class="dropdown-menu">
        <li><a href="#">e-mail</a></li>
        <li><a href="#">contact no.</a></li>
        <li><a href="#">address</a></li>

        </ul>
        
        </li>-->
       </ul>
       <form class="navbar-form navbar-left" action="/action_page.php">
         <div class="input-group">
           <input type="text" class="form-control" placeholder="Search" name="search">
           <div class="input-group-btn">
            <button class="btn btn-primary" type="submit">
              <span class="glyphicon glyphicon-search"></span>
              
            </button>


           </div>
         </div>
       </form>
       

      </nav>
      
    
        
         
      <div class="container-fluid">
        <div class= "header">
       <!--<img src="images/img1.jpg" width="100%" height="300px"/>-->
       <style>

        #slider{
          overflow: hidden;
        }
      
      #slider figure {
      
          position: relative;
          width: 800%;
          margin: 0;
          left: 0;
          animation: 60s slider infinite;
      }
      #slider figure img {
        width:25%;
        float:left;
      }
      @keyframes slider {
        0% {
            left: 0;
        }
        20%{
            left: 0;
        }
        25%{
            left: -100%;
        }
        45%{
            left: -100%;
        }
        50%{

            left: -200%;
        }
        70%{
            left: -200%;
        }

        75%{
            left: -300%;
        }

        95%{
            left: -300%;
        }
        100%{
            left: -400%;
        }
      }
          </style>
      
  <div id="slider">
    <figure>
 <img src="images/img1.jpg" width="100%" height="400">
 <img src="images/img2.jpg" width="100%" height="400">
 <img src="images/img4.jpg" width="100%" height="400">
 
    </figure>
    </div>
    
        </div>
        <h1 class="wat" style="text-align:center; color:blue; text-decoration:underline;text-decoration-color: red;"> Varieties of WristWatches </h1>
        <div class="row">
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/watch11.jpg" target="_blank">
                <img src="images/watch11.jpg" alt="watch" style="width:100%;height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
          <!--second watch-->
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/watch1.jpg" target="_blank">
                <img src="images/watch1.jpg" alt="watch" style="width:100%;height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
           
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/watch2.jpg" target="_blank">
                <img src="images/watch2.jpg" alt="watch" style="width:100%; height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/watch15.jpg" target="_blank">
                <img src="images/watch15.jpg" alt="watch" style="width:100%; height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/watch13.jpg" target="_blank">
                <img src="images/watch13.jpg" alt="watch" style="width:100%; height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/watch14.jpg" target="_blank">
                <img src="images/watch14.jpg" alt="watch" style="width:100%;height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
          <h1 class="wat" style="text-align:center; color:blue; text-decoration:underline;text-decoration-color: red;"> Varieties of Cars </h1>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/car1.jpg" target="_blank">
                <img src="images/car1.jpg" alt="watch" style="width:100%;height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/car2.jpg" target="_blank">
                <img src="images/car2.jpg" alt="watch" style="width:100%;height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/car3.jpg" target="_blank">
                <img src="images/car3.jpg" alt="watch" style="width:100%;height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/car4.jpg" target="_blank">
                <img src="images/car4.jpg" alt="watch" style="width:100%;height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/car5.jpg" target="_blank">
                <img src="images/car5.jpg" alt="watch" style="width:100%;height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/car7.jpg" target="_blank">
                <img src="images/car7.jpg" alt="watch" style="width:100%;height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
          <h1 class="wat" style="text-align:center; color:blue; text-decoration:underline;text-decoration-color: red;"> Varieties of bags,books and shoes </h1>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/bag13.jpg" target="_blank">
                <img src="images/bag13.jpg" alt="watch" style="width:100%;height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/bag16.jpg" target="_blank">
                <img src="images/bag16.jpg" alt="watch" style="width:100%;height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/bag18.jpg" target="_blank">
                <img src="images/bag18.jpg" alt="watch" style="width:100%;height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/img4.jpg" target="_blank">
                <img src="images/img4.jpg" alt="watch" style="width:100%;height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/book3.jpg" target="_blank">
                <img src="images/book3.jpg" alt="watch" style="width:100%;height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/img2.jpg" target="_blank">
                <img src="images/img2.jpg" alt="watch" style="width:100%;height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/shoe1.jpg" target="_blank">
                <img src="images/shoe1.jpg" alt="watch" style="width:100%;height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/shoe10.jpg" target="_blank">
                <img src="images/shoe10.jpg" alt="watch" style="width:100%;height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="images/shoe12.jpg" target="_blank">
                <img src="images/shoe12.jpg" alt="watch" style="width:100%;height:220px;">
                <div class="caption">
                 <!-- <p> This are 21st century watch sold at affordable price</p>-->
                 <center><a href="gallery.php" style="color:red; text-align:center;">Shop Now</a></center>

                </div>
              </a>
            </div>
          </div>
        </div>
         </div>
         <div class="footer" style="width:100%;height:360px; background-color:rgba(0, 0, 0, 0.726); color:aliceblue;" >
          <div class="foot1" style= "float:left; color:blanchedalmond; width:35%; height:230px; margin-left:10px;">At Yinkaprofessor web, App development  and tutoring Company<br/>
            Our Courses are: <br/>
            * Web Design <br/>
            * web Development <br/>
            * Apps design and development <br/>
            * Programming , Computer Appreciation <br/>
            * Networking..... 


          </div> 
          
            
          
          <div class="foot2" style="float:right; color:aquamarine; width:35%; height:230px; float:right;">Programming languages we teaches are:<br/>
            * Javascript and JQuery<br/>
            * PHP(hypertext preprocessor) <br/>
            * Python and Javascript....still counting..... </div>
           <center><div class="foot3" style=" width:30%; height:230px;">Ecommerce Website Developed by Yinkaprof, &copy; &reg; 2022 <a href="#">go to the top</a></div></center>
      </div>
        
      </div>
    </body>
</html>