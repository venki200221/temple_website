<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SVSDT</title>
<link href="/css/home.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Noto+Sans+Telugu:wght@300&family=Roboto+Slab:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Arima+Madurai&display=swap" rel="stylesheet">
<style>
.sli_i-1{
  height:500px;
}
.sli_i-2{
  height:300px;
}
  </style>
</head>
<body>
  {{-- @include('cookie-consent::index'); --}}
    <div class="top-bar">
        <nav class="navbar  sticky-top navbar-expand-lg navbar navbar navbar-light" style="background-color:rgb(233, 233, 233);">
            <a class="navbar-brand" href="#">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwmNyVVK0xA70Ib5fW8cNeC5e5iIqxx4SMjg&usqp=CAU" width="30" height="30" class="d-inline-block align-top"  alt="">
                SVSDT
              </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                
                 
                  <a class="nav-link" href="/">
                    <button type="button" class="btn btn-primary nav-item active home">घर</button>
                    <span class="sr-only">(current)</span></a>
                
                 <a class="nav-link nav-item con" href="#contact">
                    <button type="button" class="btn btn-primary">संपर्क करें</button>
                 </a>
                 <a class="nav-link nav-item" href="/gallery">
                 <button type="button" class="btn btn-primary ">गेलरी</button>
                  </a>


                  <div class="btn-group nav-link nav-item ">
                    <button type="button" class="btn btn-primary  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        भाषा
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/">अंग्रेज़ी</a>
                      <a class="dropdown-item" href="/telgu">तेलगु</a>
                      <a class="dropdown-item" href="/telgu">कन्नड़</a>
                      <a class="dropdown-item" href="/hindi">हिन्दी</a>                      
                    </div>
                  </div>
               
                  <a class="nav-link nav-item" href="#donate">
                    <button type="button" class="btn btn-primary ">हमें दान करें</button>
                  </a>

                  
              </ul>
            </div>
          </nav>
    </div>
    <div class="top">
      <h1 class="temple_name">श्री वेणुगोपाल स्वामी मंदिर</h1>
      <img class="home_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT34wApYijZwm6CHEcgqwxyNJQQ4QghSWc14Q&usqp=CAU">
     </div>
     
     <hr>
    <div >
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <center><h3 style="font-family: 'Arima Madurai'">हमारे बारे में</h3></center>
            <img class="d-block w-100 sli_i-1" src="/images/image-7.jpeg" alt="First slide">
           
          </div>
          <div class="carousel-item" style="background-color:#FFF8F3" id="donate" >
           <center><h3 style="font-family: 'Arima Madurai'">हमें दान करें</h3></center>
            <center><img  class="d-block w-20 sli_i-2" src="/images/QR-code.jpeg" alt="Second slide"></center>
            <center><h5 class="upi">UPI ID-SVGSDTC@SBI</h5></center>
          </div>
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <br>
    <hr>
     </body>
     <Center><footer>
         <h5 id="contact">संपर्क करें</h5>
         
     </footer></Center>
     <center>
      <a class="phone" href=""><i class="fas fa-phone"></i></a>
      <a class="gmail"   href="https://mail.google.com/mail/"><i class="fas fa-mail-bulk"></i></a>
      <a class="location"   href="https://www.google.com/maps/place/Penugonda,+Andhra+Pradesh/@16.654104,81.7364836,15z/data=!3m1!4b1!4m5!3m4!1s0x3a37c682b0478361:0x870acd3c9661ed90!8m2!3d16.6547241!4d81.7445167"><i class="fas fa-search-location"></i></a>
     </center>
     </html>   

    
    