<!DOCTYPE html>    
<html>    
<head>    
    <title>book on rent</title>    
    <link rel="stylesheet" type="text/css" href="myprofile.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,531;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,531;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>    
<body>

  <nav>
    <div class="row" clearfix>
      <img src="images/logo.png" class="logo">

      <ul class="main-nav" id="check-class" >
        <li><a href="index.html">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">CONTACT</a></li>
        <a href="logout.php" class="btn1 btn-nav">LOGOUT</a>
        <a href="submitprofile.html" class="btn2 btn-full">MY PROFILE</a>

        <!-- <li><a href="#">LOGIN</a></li>
        <li><a href="#">REGISTER</a></li> -->
      </ul>
      <a href="#" class="mobile-icon"  onclick="slideshow()">
        <i class="fa fa-bars" ></i>

      </a>
      <ul class="sec-nav" id="check-newclass" >
        
        <a href="#" class="btn3 btn-new">CATEGORIES</a>
        <a href="#" class="btn3 btn-new">HOW IT WORKS</a>
        <a href="#" class="btn3 btn-new">PRIZE PLAN</a>
        <a href="#" class="btn3 btn-new">MY READLIST</a>
        </ul>
        
</div>
      
    </div>
  </nav>
  <div class="login">   
    <table  id="login" method="POST" action="login.php">
      <tr>
            <td>
        <input type="text" name="search" id="search" placeholder="Search Book Here..."></td> 
        <td><a href="#" ><i class="material-icons">search</i>
    </a> </td>   
        </tr>
    </table> 
</div> 

<div class="col-md-9">
  <div class="row" id="productname">
    <div class="col_sm-6">
      <div id="mainimage">
        <div id="mycarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mycarousel" data-slide-to="1" ></li>
            <li data-target="#mycarousel" data-slide-to="2" ></li>
            
          </ol>
          <div class="carousel-inner">
            <div class="card active">
              <center>
                <img src="book1.jpg" class="img-responsive">
              </center>
              
            </div>
            <div class="card">
              <center>
                <img src="book2.jpg" class="img-responsive">
              </center>
              
            </div>
            <div class="card ">
              <center>
                <img src="book3.jpg" class="img-responsive">
              </center>
              
            </div>
            
          </div>

          <a href="#mycarousel" class="left carousel-control" data-slide="prev"></a>
          <span class="glyphicon glyphicon-chevron-left"> </span>
          <span class="sr-only">Previous </span>

          <a href="#mycarousel" class="right carousel-control" data-slide="next"></a>
          <span class="glyphicon glyphicon-chevron-right"> </span>
          <span class="sr-only">Next </span>

        </div>
        
      </div>
      
    </div>

    
  </div>
</div>




</body>    
</html>     