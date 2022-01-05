<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SVGSDC</title>
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
<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Benne&family=Noto+Sans+Kannada:wght@700&family=Noto+Sans+Telugu:wght@300&family=Ramabhadra&family=Roboto+Slab:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
<style>
.qrcode{
    width:350px;
}
.heading{
    margin-top: 5px;
    font-family: 'Noto Sans Kannada', sans-serif;
    color:rgb(14, 13, 13)
}
.para{
    color: darkslategray;
    font-size:1.1rem;
    font-family: 'Benne', serif;
    font-weight: 600;
    padding: 2rem;
}
.sli_i-1{
  height:400px;
}
.sli_i-2{
  height:400px;
}
.corosel{
    margin:2px;
    margin-bottom: 7px;
}
.content{
    margin-top:10px;
    overflow: hidden;
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
                    <button type="button" class="btn btn-primary nav-item active home">ಮನೆ</button>
                    <span class="sr-only">(current)</span></a>
                
                 <a class="nav-link nav-item con" href="#contact">
                    <button type="button" class="btn btn-primary">ನಮ್ಮನ್ನು ಸಂಪರ್ಕಿಸಿ</button>
                 </a>
                 <a class="nav-link nav-item" href="/gallery">
                 <button type="button" class="btn btn-primary ">ಗ್ಯಾಲರಿ</button>
                  </a>


                  <div class="btn-group nav-link nav-item ">
                    <button type="button" class="btn btn-primary  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ಭಾಷೆ
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/donate">ಆಂಗ್ಲ</a>
                      <a class="dropdown-item" href="/telgudonate">ತೆಲುಗು</a>
                      <a class="dropdown-item" href="/kannadadonate">ಕನ್ನಡ</a>
                      <a class="dropdown-item" href="/hindidonate">ಹಿಂದಿ</a>                      
                    </div>
                  </div>
                  
                  <a class="nav-link nav-item" href="/kannadadonate">
                    <button type="button" class="btn btn-primary ">ನಮಗೆ ದಾನ ಮಾಡಿ</button>
                     </a>
   

                  
              </ul>
            </div>
          </nav>
    </div>

{{-- content --}}
<div >
    <center><h1 class="heading">ನಮಗೆ ದಾನ ಮಾಡಿ</h1></center>
    <blockquote><p class="para">ಗೋಸಂರಕ್ಷಣಾ ಆಂದೋಲನವು ಪ್ರಧಾನವಾಗಿ ಭಾರತೀಯ ಧಾರ್ಮಿಕವಾಗಿದೆ, ಇದು ರಕ್ಷಿಸುವ ಗುರಿಯನ್ನು ಹೊಂದಿದೆ
        ಹಸುಗಳ ಹತ್ಯೆಯನ್ನು ವ್ಯಾಪಕವಾಗಿ ವಿರೋಧಿಸಲಾಗಿದೆ.</p>
    <p class="para">ಹಸುವನ್ನು ಹಿಂದೂಗಳು ಅನೇಕ ದೇವತೆಗಳು ಮತ್ತು ದೇವರುಗಳನ್ನು ಹೊಂದಿದ್ದಾರೆ ಎಂದು ಪರಿಗಣಿಸಲಾಗಿದೆ. ಪ್ರತಿ
        ಪ್ರತಿಯೊಬ್ಬ ದೇವರು ಅಥವಾ ದೇವತೆಯು ನಮಗೆ ಅಮೂಲ್ಯವಾದದ್ದನ್ನು ಆಶೀರ್ವದಿಸುತ್ತಾನೆ ಎಂದು ಧರ್ಮವು ನಂಬುತ್ತದೆ
        ಮಾನವಕುಲದ ಸಂತೋಷ ಮತ್ತು ಆರೋಗ್ಯಕರ ಜೀವನ. ಅಂದರೆ, ಹಸುಗಳ ಭಾರತೀಯ ತಳಿಗಳು
        ಅನೇಕ ದೇವರುಗಳನ್ನು ಹೊಂದಿದ್ದು, ನಮ್ಮ ಸಂತೋಷದ ಜೀವನಕ್ಕೆ ಉಪಯುಕ್ತವಾದ ಅನೇಕ ವಸ್ತುಗಳನ್ನು ನಮಗೆ ನೀಡಬಹುದು. ಸಂ
        ಬುದ್ಧಿವಂತ ವ್ಯಕ್ತಿ ಸಮಾಜಕ್ಕೆ ಉಪಯುಕ್ತವಾದುದನ್ನು ನಾಶಪಡಿಸುತ್ತಾನೆ. ಹಸುಗಳ ಭಾರತೀಯ ತಳಿಗಳು ಹೀಗಿವೆ
        ಮಾನವಕುಲಕ್ಕೆ ಅವರ ಅಸಂಖ್ಯಾತ ಪ್ರಯೋಜನಗಳಿಗಾಗಿ ಪೂಜಿಸಲಾಗುತ್ತದೆ. ಪ್ರಾಚೀನ ಕಾಲದ ವಿಜ್ಞಾನಿಗಳು
        ಭಾರತ, ಋಷಿಗಳು ಮತ್ತು ಮುನಿಗಳು ಗೋವುಗಳ ಎಲ್ಲಾ ಪ್ರಯೋಜನಗಳನ್ನು ಮನುಕುಲಕ್ಕೆ ಅರಿತುಕೊಂಡರು
        ಅಜ್ಞಾತ ಕಾರಣಗಳು, ಅವರು ರೂಪದಲ್ಲಿ ಈ ಎಲ್ಲಾ ಪ್ರಯೋಜನಗಳ ಸಾಂಕೇತಿಕ ಪ್ರಾತಿನಿಧ್ಯವನ್ನು ನೀಡಿದರು
        ದೇವರುಗಳ. ಅಂತಹ ಗೋವುಗಳನ್ನು ಈಗ ನಿಷ್ಕರುಣೆಯಿಂದ ಕಸಾಯಿಖಾನೆಗಳಿಗೆ ಕಳುಹಿಸಲಾಗುತ್ತಿದೆ
        ವೈಜ್ಞಾನಿಕವಾಗಿ ಅವರ ಅನುಕೂಲಗಳನ್ನು ಪರಿಗಣಿಸಿ, ಅವರು ದ್ವೇಷಿಸುತ್ತಾರೆ ಅಥವಾ ವಿರೋಧಿಸುತ್ತಾರೆ
        ಇತರ ಧರ್ಮ ಅಥವಾ ಇತರ ರಾಜಕೀಯ ಪಕ್ಷವನ್ನು ವಿರೋಧಿಸಿ.</p>
</blockquote>
</div>


    {{-- corosel --}}
    <div class="corosel">
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <center><img class="d-block w-30 sli_i-1" src="/images/SCAN HERE.png" alt="First slide"></center>
              </div>
              <div class="carousel-item">
                <center><img class="d-block w-100 sli_i-2" src="/images/donate.jpg" alt="Second slide"></center>
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
<div class="content">
    <blockquote>
        <p class="para">ನಮ್ಮ ಸಾಮರ್ಥ್ಯದೊಳಗೆ ಗೋವುಗಳ ನಿರ್ವಹಣೆ ಮತ್ತು ರಕ್ಷಣೆ ಮುಖ್ಯ ಗುರಿಯಾಗಿದೆ
            ನಂಬಿಕೆ. ದೇವಾಲಯದ ಗೋಶಾಲೆಯ ಹಸುಗಳನ್ನು ಒಂದೆರಡು ಸಹಾಯದಿಂದ ನೋಡಿಕೊಳ್ಳಲಾಗುತ್ತದೆ
            ಆವರಣದಲ್ಲಿ ವಾಸಿಸುವ ಮತ್ತು ಅವರ ಪಾಲನೆಗೆ ಹಾಜರಾಗುವ ಕುಟುಂಬಗಳು. ಟ್ರಸ್ಟ್ ನೀಡುತ್ತದೆ ಎ
            ಹಸುಗಳಿಗೆ ಸರಳ ಮತ್ತು ಆರೋಗ್ಯಕರ ಜೀವನ ವಿಧಾನ. ಪ್ರತಿ ಪೌರ್ಣಮಿ ರಾತ್ರಿ, ಹೋಮ, ಬಜನ ಮತ್ತು
            ರಾತ್ರಿ 8 ಗಂಟೆಗೆ ಗೋಶಾಲೆ ಆವರಣದಲ್ಲಿ ಹಾಗೂ ಅನಂತಪುರದ ನಾಗರಿಕರಿಂದ ಗೋಪೂಜೆ ನೆರವೇರಿತು
            
            ಪವಿತ್ರ ಆಚರಣೆಯನ್ನು ವೀಕ್ಷಿಸಲು ಮತ್ತು ಭಾಗವಹಿಸಲು ಜಿಲ್ಲೆಯ ಜನರು ದೇವಾಲಯದ ಗೋಶಾಲೆಗೆ ಸೇರುತ್ತಾರೆ. ದಿ
            ಜಿಲ್ಲೆಯ ಜನರು ಶಾಂತಿಯುತ ವಾತಾವರಣವನ್ನು ಮೆಚ್ಚಲು ಮತ್ತು ದೃಶ್ಯವನ್ನು ಆನಂದಿಸಲು ಬಂದಿದ್ದಾರೆ
            ಹಸುಗಳು ಮತ್ತು ಕರುಗಳು ಶಾಂತವಾಗಿ ಮೇಯುತ್ತಿವೆ ಮತ್ತು ಅವುಗಳ ಆಶ್ರಯದಲ್ಲಿ ವಿಶ್ರಾಂತಿ ಪಡೆಯುತ್ತವೆ.</p>
    </blockquote>
    <blockquote>
        <p>
            <b>ಕುರಾನ್ ಅಥವಾ ಬೈಬಲ್ ಅಥವಾ ಯಾವುದೇ ಧಾರ್ಮಿಕ ಪುಸ್ತಕವು ಹಸುಗಳನ್ನು ಕೊಲ್ಲಲು ಹೇಳುವುದಿಲ್ಲ. ಜೊತೆಗೆ
                ಹಿಂದೂ ಧಾರ್ಮಿಕ ಮತ್ತು ಆಯುರ್ವೇದ ಸಾಹಿತ್ಯ.</b>
        </p>
    </blockquote>
</div>
<div>
    <blockquote><p class="para">
        ಸುಂದರವಾದ ಹಸಿರು ಪರಿಸರ ಮತ್ತು ಆಹ್ಲಾದಕರವಾದ ಗಾಳಿಯು ಎಲ್ಲರನ್ನೂ ಸ್ವಾಗತಿಸುತ್ತದೆ
ವೇಣುಗೋಪಾಲ ಸ್ವಾಮಿ ದೇವಸ್ಥಾನದ ಗೋಶಾಲೆಯು ಸ್ವಾಭಾವಿಕವಾಗಿ ರೂಪುಗೊಂಡಿತು ಮತ್ತು ಈಗ ಅ
ಶ್ರೀ ವೇಣುಗೋಪಾಲ ಸ್ವಾಮಿ ಅಭಿವೃದ್ಧಿ ಸಮಿತಿಯಿಂದ ವ್ಯವಸ್ಥಿತ ವಿಧಾನ. ಇದು ಒಂದು
ದನಗಳಿಂದ ತಪ್ಪಿಸಿಕೊಂಡಂತೆ ಎಲ್ಲ ಹಸುಗಳು ಲವಲವಿಕೆಯಿಂದ ಚಲಿಸುತ್ತಿರುವುದನ್ನು ನೋಡಿ ಸಂತೋಷಪಡುವ ತಾಣ
ನಿರ್ದಯ ಅಮಾನವೀಯ ಕಸಾಯಿಖಾನೆಗಳ ದುಷ್ಟ ಕೈಗಳು.
ಅವರಿಗೆ ಆಹಾರ ಮತ್ತು ಉತ್ತಮ ಹಾಜರಾತಿ ಮತ್ತು ಉತ್ತಮ ಮೇಲ್ವಿಚಾರಣೆಯಿಂದಾಗಿ, ಅವರು ಪ್ರತಿ ಸೆಕೆಂಡಿನಲ್ಲಿ ಸಂತೋಷಪಡುತ್ತಾರೆ
ಆ ಸ್ವರ್ಗೀಯ ಸ್ಥಳ.
</p>
    </blockquote>
</div>
<center><b><h4>ನಮ್ಮ ವೆಬ್‌ಸೈಟ್‌ನ <a href="/gallery">ಗ್ಯಾಲರಿಯಲ್ಲಿ</a> ನೀವು ಗೋಶಾಲೆಯ ಚಿತ್ರಗಳನ್ನು ವೀಕ್ಷಿಸಬಹುದು.</h4></b></center>
<hr>
</body>
<Center><footer>
    <h5 id="contact">ನಮ್ಮನ್ನು ಸಂಪರ್ಕಿಸಿ</h5>
    
</footer></Center>
<center>
 <a class="phone" href="https://twitter.com/search?q=%23login"><i class="fas fa-phone"></i></a>

 <a class="gmail"   href="https://mail.google.com/mail/"><i class="fas fa-mail-bulk"></i></a>
 <a class="location"   href="https://www.google.com/maps/place/Venu+Gopala+Swamy+Temple/@14.1484534,77.5554467,17z/data=!3m1!4b1!4m5!3m4!1s0x3bb11301df49397d:0x5dd9586da978b9de!8m2!3d14.1484534!4d77.5576354"><i class="fas fa-search-location"></i></a>
</center>

</html>