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
<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Benne&family=Noto+Sans+Kannada:wght@700&family=Noto+Sans+Telugu:wght@300&family=Palanquin+Dark:wght@600&family=Pragati+Narrow&family=Ramabhadra&family=Roboto+Slab:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
<style>
.qrcode{
    width:350px;
}
.heading{
    font-family: 'Palanquin Dark', sans-serif;
    color:black;
}
.para{
    color: darkslategray;
    font-size:1.1rem;
    font-family: 'Pragati Narrow', sans-serif;
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
                      <a class="dropdown-item" href="/donate">अंग्रेज़ी</a>
                      <a class="dropdown-item" href="/telgudonate">तेलगु</a>
                      <a class="dropdown-item" href="/kannadadonate">कन्नड़</a>
                      <a class="dropdown-item" href="/hindidonate">हिन्दी</a>                      
                    </div>
                  </div>
                  
                  <a class="nav-link nav-item" href="/hindidonate">
                    <button type="button" class="btn btn-primary ">हमें दान करें</button>
                     </a>
   

                  
              </ul>
            </div>
          </nav>
    </div>

{{-- content --}}
<div >
    <center><h1 class="heading">हमें दान करें</h1></center>
    <blockquote><p class="para">गौ रक्षा आंदोलन मुख्य रूप से भारतीय धार्मिक है, जिसका उद्देश्य रक्षा करना है
        गाय, जिनके वध का व्यापक रूप से विरोध किया गया है।</p>
    <p class="para">हिंदुओं द्वारा गाय को कई देवी-देवताओं का स्वामी माना जाता है। हर एक
        धर्म का मानना ​​है कि प्रत्येक भगवान या देवी हमें कुछ मूल्यवान के साथ आशीर्वाद देते हैं
        मानव जाति का सुखी और स्वस्थ जीवन। इसका मतलब है कि गायों की भारतीय नस्लें जो हैं
        इतने सारे देवताओं को धारण करने से हमें अपने सुखी जीवन के लिए उपयोगी बहुत सी चीजें मिल सकती हैं। नहीं
        बुद्धिमान व्यक्ति समाज के लिए उपयोगी चीजों को नष्ट कर देता है। गायों की भारतीय नस्लें इस प्रकार हैं
        मानव जाति के लिए उनके असंख्य लाभों के लिए पूजा की जाती है। प्राचीन काल के वैज्ञानिक
        भारत, ऋषियों और मुनियों ने मानव जाति के लिए गायों के उन सभी लाभों को महसूस किया लेकिन
        अज्ञात कारणों से, उन्होंने इन सभी लाभों का प्रतीकात्मक रूप में प्रतिनिधित्व किया
        देवताओं का। ऐसी गायों को अब बेरहमी से बूचड़खानों में भेजा जा रहा है
        वैज्ञानिक रूप से उनके लाभों को देखते हुए, सिर्फ इसलिए कि वे नफरत करते हैं या विरोध करते हैं
        अन्य धर्म या विरोध जो अन्य राजनीतिक दल करता है।</p>
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
        <p class="para">हमारी क्षमता के भीतर गायों का रखरखाव और संरक्षण, का मुख्य लक्ष्य है
            विश्वास। मंदिर की गोशाला की गायों की देखभाल एक जोड़े की मदद से की जाती है
            परिवार जो परिसर में रहते हैं और उनके पालन-पोषण में भाग लेते हैं। ट्रस्ट प्रदान करता है a
            गायों के जीवन का सरल और स्वस्थ तरीका। हर पूर्णिमा की रात, होमम, बजन और
            गोशाला परिसर और अनंतपुर के नागरिकों में रात 8 बजे गोपूजा की जाती है
            
            जिला मंदिर गोशाला में पवित्र अनुष्ठान का पालन करने और भाग लेने के लिए झुंड।
            जिले के लोग शांतिपूर्ण माहौल की प्रशंसा करने और देखने का आनंद लेने आए हैं
            गायें और बछड़े शांति से चरते हैं और उनके आश्रयों के नीचे आराम करते हैं।</p>
    </blockquote>
    <blockquote>
        <p>
            <b>न तो कुरान और न ही बाइबिल और न ही कोई धार्मिक ग्रंथ गायों को मारने के लिए कहता है। के अतिरिक्त
                हिंदू धार्मिक और आयुर्वेदिक साहित्य।</b>
        </p>
    </blockquote>
</div>
<div>
    <blockquote><p class="para">
        एक सुंदर हरा-भरा परिवेश और सुखद हवा सभी का स्वागत करेगी
        वेणुगोपाल स्वामी मंदिर गोशाला प्राकृतिक रूप से बनी थी और अब इसे एक में विकसित किया गया है
        श्री वेणुगोपाल स्वामी विकास समिति द्वारा व्यवस्थित दृष्टिकोण। यह है एक
        सभी गायों को इधर-उधर भागते हुए देखने के लिए आनन्दित स्थल
        निर्दयी अमानवीय बूचड़खानों के बुरे हाथ।
        जैसा कि उन्हें खिलाया जाता है और अच्छी तरह से देखभाल की जाती है और अच्छी तरह से निगरानी की जाती है, वे हर पल आनंदित होते हैं
        वह स्वर्गीय स्थान। </p>
    </blockquote>
</div>
<center><b><h4>आप हमारी वेबसाइट की <a href="/gallery">गैलरी</a> में गोशाला की तस्वीरें देख सकते हैं|</h4></b></center>
<hr>
</body>
<Center><footer>
    <h5 id="contact">संपर्क करें</h5>
    
</footer></Center>
<center>
 <a class="phone" href="https://twitter.com/search?q=%23login"><i class="fas fa-phone"></i></a>

 <a class="gmail"   href="https://mail.google.com/mail/"><i class="fas fa-mail-bulk"></i></a>
 <a class="location"   href="https://www.google.com/maps/place/Venu+Gopala+Swamy+Temple/@14.1484534,77.5554467,17z/data=!3m1!4b1!4m5!3m4!1s0x3bb11301df49397d:0x5dd9586da978b9de!8m2!3d14.1484534!4d77.5576354"><i class="fas fa-search-location"></i></a>
</center>

</html>