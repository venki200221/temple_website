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
<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Noto+Sans+Telugu:wght@300&family=Ramabhadra&family=Roboto+Slab:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">

<style>
.qrcode{
    width:350px;
}
.heading{
    font-family: 'Ramabhadra', sans-serif;
    color:rgb(14, 14, 14)
}
.para{
    color: darkslategray;
    font-size:1.1rem;
    font-family: 'Noto Sans Telugu', sans-serif;
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
                    <button type="button" class="btn btn-primary nav-item active home">హోమ్‌</button>
                    <span class="sr-only">(current)</span></a>
                
                 <a class="nav-link nav-item con" href="#contact">
                    <button type="button" class="btn btn-primary">మమ్మల్ని సంప్రదించండి</button>
                 </a>
                 <a class="nav-link nav-item" href="/gallery">
                 <button type="button" class="btn btn-primary ">గ్యాలరీ</button>
                  </a>


                  <div class="btn-group nav-link nav-item ">
                    <button type="button" class="btn btn-primary  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        భాష
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/donate">ఆంగ్ల</a>
                      <a class="dropdown-item" href="/telgudonate">తెలుగు</a>
                      <a class="dropdown-item" href="/kannadadonate">కన్నడ</a>
                      <a class="dropdown-item" href="/hindidonate">హిందీ</a>                      
                    </div>
                  </div>
                  
                  <a class="nav-link nav-item" href="/telgudonate">
                    <button type="button" class="btn btn-primary ">మాకు విరాళం ఇవ్వండి</button>
                     </a>
   

                  
              </ul>
            </div>
          </nav>
    </div>

{{-- content --}}
<div >
    <center><h1 class="heading">మాకు విరాళం ఇవ్వండి</h1></center>
    <blockquote><p class="para">గోసంరక్షణ ఉద్యమం ప్రధానంగా భారతీయ మతపరమైనది, రక్షణ లక్ష్యంగా ఉంది
        గోవులు, దీని వధను విస్తృతంగా వ్యతిరేకించారు.</p>
    <p class="para">ఆవును హిందువులు చాలా మంది దేవతలను మరియు దేవతలను కలిగి ఉన్నట్లు భావిస్తారు. ప్రతి
        ప్రతి దేవుడు లేదా దేవత మనకు విలువైనదాన్ని అనుగ్రహిస్తారని మతం నమ్ముతుంది
        మానవజాతి యొక్క సంతోషకరమైన మరియు ఆరోగ్యకరమైన జీవనం. అంటే భారతీయ ఆవుల జాతులు
        చాలా మంది దేవుళ్లను కలిగి ఉండటం, మన సంతోషకరమైన జీవనానికి ఉపయోగపడే ఎన్నో వస్తువులను మనకు అందిస్తుంది. సంఖ్య
        తెలివైన వ్యక్తి సమాజానికి ఉపయోగపడే వాటిని నాశనం చేస్తాడు. ఆవుల భారతీయ జాతులు ఈ విధంగా ఉన్నాయి
        మానవాళికి వారి అసంఖ్యాక ప్రయోజనాల కోసం పూజించారు. పురాతన శాస్త్రవేత్తలు
        భారతదేశం, ఋషులు మరియు మునిలు ఆవుల వల్ల మానవాళికి కాని ప్రయోజనాలన్నింటినీ గ్రహించారు
        తెలియని కారణాలు, వారు రూపంలో ఈ ప్రయోజనాలన్నింటికీ ప్రతీకాత్మక ప్రాతినిధ్యం ఇచ్చారు
        దేవతల. అలాంటి ఆవులను ఇప్పుడు కనికరం లేకుండా కబేళాలకు పంపుతున్నారు
        శాస్త్రీయంగా వారి ప్రయోజనాలను పరిగణనలోకి తీసుకుంటారు, ఎందుకంటే వారు ద్వేషిస్తారు లేదా వ్యతిరేకిస్తారు
        ఇతర మతం లేదా ఇతర రాజకీయ పార్టీ చేసే పనిని వ్యతిరేకించండి.</p>
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
        <p class="para">మా సామర్థ్యంలో ఆవుల నిర్వహణ మరియు రక్షణ ప్రధాన లక్ష్యం
            నమ్మకం. ఆలయ గోశాలలోని ఆవులను ఒక జంట సహాయంతో చూసుకుంటారు
            ఆవరణలో నివసించే కుటుంబాలు మరియు వారి సంరక్షణకు హాజరవుతారు. ట్రస్ట్ అందిస్తుంది a
            ఆవుల కోసం సులభమైన మరియు ఆరోగ్యకరమైన జీవన విధానం. ప్రతి పౌర్ణమి రాత్రి, హోమం, బజనలు మరియు
            రాత్రి 8 గంటలకు గోశాల ప్రాంగణంలో గోపూజ నిర్వహిస్తారు మరియు అనంతపురం పౌరులు
            
            జిల్లా ఆలయ గోశాల వద్దకు తరలివచ్చి పవిత్ర ఆచారాన్ని ఆచరించడానికి మరియు పాల్గొనడానికి. ది
            జిల్లా ప్రజలు ప్రశాంత వాతావరణాన్ని చూసి ఆనందించడానికి వచ్చారు
            ఆవులు మరియు దూడలు ప్రశాంతంగా మేపుతున్నాయి మరియు వాటి ఆశ్రయాల క్రింద విశ్రాంతి తీసుకుంటున్నాయి.</p>
    </blockquote>
    <blockquote>
        <p>
            <b>ఆవులను చంపమని ఖురాన్ లేదా బైబిల్ లేదా ఏ మతపరమైన పుస్తకాలు చెప్పలేదు. అదనంగా
                హిందూ మత మరియు ఆయుర్వేద సాహిత్యం.</b>
        </p>
    </blockquote>
</div>
<div>
    <blockquote><p class="para">
        ఒక అందమైన పచ్చని పరిసరాలు మరియు ఆహ్లాదకరమైన గాలి అందరికి స్వాగతం పలుకుతుంది
వేణుగోపాల స్వామి దేవాలయం గోశాల సహజంగా ఏర్పడింది మరియు ఇప్పుడు అభివృద్ధి చేయబడింది
శ్రీ వేణుగోపాల స్వామి అభివృద్ధి కమిటీ ద్వారా క్రమబద్ధమైన విధానం. ఇది ఒక
ఆవులన్నీ ఆవుల నుండి తప్పించుకున్నప్పుడు ఉల్లాసంగా కదులుతున్న దృశ్యాన్ని చూసి సంతోషిస్తున్నాడు
దయలేని అమానవీయ కబేళాల దుష్ట చేతులు.
వారు ఆహారం మరియు బాగా హాజరైన మరియు బాగా పర్యవేక్షించబడుతున్నందున, వారు ప్రతి సెకనులో ఆనందిస్తారు
ఆ స్వర్గపు ప్రదేశం.
   </p>
    </blockquote>
</div>
<center><b><h4>మీరు మా వెబ్‌సైట్ <a href="/gallery">గ్యాలరీలో</a> గోశాల చిత్రాలను చూడవచ్చు  </h4></b></center>
<hr>
</body>
<Center><footer>
    <h5 id="contact">మమ్మల్ని సంప్రదించండి</h5>
    
</footer></Center>
<center>
 <a class="phone" href="https://twitter.com/search?q=%23login"><i class="fas fa-phone"></i></a>

 <a class="gmail"   href="https://mail.google.com/mail/"><i class="fas fa-mail-bulk"></i></a>
 <a class="location"   href="https://www.google.com/maps/place/Venu+Gopala+Swamy+Temple/@14.1484534,77.5554467,17z/data=!3m1!4b1!4m5!3m4!1s0x3bb11301df49397d:0x5dd9586da978b9de!8m2!3d14.1484534!4d77.5576354"><i class="fas fa-search-location"></i></a>
</center>

</html>