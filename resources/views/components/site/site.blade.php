<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow" />
    <title>Turkay Sigorta</title>
    <meta name="description" content="FİRMAMIZ 2003 YILINDA TURGUT KAYGUN ACENTELİĞİ İLE SİGORTACILIK HAYATINA BAŞLAMIŞ OLUP BU SÜREÇTE TEK FİRMA ACENTELİĞİ İLE GÖSTERMİŞ OLDUĞU BAŞARI VE BÜYÜME NETİCESİNDE 2006 YILINDA ŞİRKET SAYILARINI ARTIRARAK TURKAY SİGORTA İSMİ İLE KURUMSALLAŞMIŞ OLUP ÇALIŞMA HAYATINA DEVAM ETMİŞTİR. BU SÜREÇTE DEĞERLİ SİGORTALILARIMIZIN GÖSTERMİŞ OLDUĞU İLGİ VE ALAKAYA KAYITSIZ KALMAYARAK SADECE SATIŞ SÜRECİ DEĞİL HİZMET SÜRECİNDE DE BAŞARILARINI ARTIRARAK SEKTÖRDE ÖN SIRALARA GEÇMEYİ BAŞARMIŞTIR. 2016 YILI İTİBARI İLE BAŞARILARLA DOLU BİR DÖNEMİ GERİDE BIRAKAN FİRMAMIZ TÜM ÇALIŞANLARI VE SİGORTALILARI İLE 2017 İÇİNDE HEDEFLERİ DOĞRULTUSUNDA SAMİMİ DÜRÜST İLKELİ VE EN ÖENMLİSİ MÜŞTERİ ODAKLI ÇALIŞMALARINA DEVAM ETMEYİ KENDİNE HEDEF SEÇEREK YOLUNA DEVAM ETMEKTEDİR.">
    <meta name="keywords" content="turkay, gaziantep, sigorta, sigortacı, firmalari, aracılık, hizmetleri, kasko, araba, ev">

    <!-- core CSS -->
    <link href="{{mix('css/site/site.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('assets/images/ico/favicon.ico')}}">

    <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="preload" as="image" href="{{ Media::getImage('assets/images/slider/bg1.jpg', 1600, 500) }}">
</head><!--/head-->

<body>

<div class="modal fade teklif" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="background-color:rgba(17, 48, 58, 0.71);z-index:1060;position:fixed;width:100%; height:100%; display:none; text-align:center; font-size: 30px; color:black !important;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #60bbe6;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
                <h4 class="modal-title" style="text-align: center !important;color: white;" id="exampleFormModalLabel">KASKO TRAFİK FİYATLARINIZI YARIM SAATTE DÖNELİM</h4>
            </div>
            <form class="row submitForm" method="POST" action="{{route('offer.submit')}}" style="padding: 26px;">
                @csrf
                <div class="col-md-12">
                    <div class="alert alert-danger orta" style="font-size: 16px;padding: 6px;">Belge seri numarası ruhsatın kimlik bilgilerinin olduğu kısmın sağ alt köşesinde bulunmaktadır.</div>
                </div>
                <div class="col-md-6" style="margin-bottom: 10px;">
                    <input type="text" placeholder="Ad & Soyad" name="ad_soyad" id="ad" class="form-control" required>
                </div>

                <div class="col-md-6" style="margin-bottom: 10px;">
                    <input type="text" placeholder="Konu" name="konu" id="konu_1" class="form-control" required>
                </div>

                <div class="col-md-6" style="margin-bottom: 10px;">
                    <input type="text" placeholder="Telefon" name="telefon" id="tel" class="form-control" required>
                </div>

                <div class="col-md-6" style="margin-bottom: 10px;">
                    <input type="text" placeholder="Ruhsat Sahibinin TC Numarası" name="tc" id="tc" class="form-control" required>
                </div>

                <div class="col-md-6" style="margin-bottom: 10px;">
                    <input type="text" placeholder="Plaka" id="plaka" name="plaka" class="form-control" required>
                </div>

                <div class="col-md-6" style="margin-bottom: 10px;">
                    <input type="text"  placeholder="Ruhsatın Belge Seri No'su" name="belge" id="belge" class="form-control" required>
                </div>
                <div class="col-md-12">
                    <img src="{{asset('assets/images/ruhsat.jpg')}}" style="width: 100%;margin-bottom: 20px;" alt="">
                </div>



                <div class="col-md-12" style="font-size: 16px;float: right;"> <button type="submit" style="float: right;" class="teklif-al">Teklif Al</button></div>



            </form>
        </div>
    </div>
</div>

<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-7">
                    <div class="top-number"><a href="tel:{{$settings->telefon}}"><i class="fa fa-phone-square"></i> {{$settings->telefon}} </a></div>
                </div>
                <div class="col-sm-6 col-xs-5">
                    <div class="social">
                        <a data-toggle="modal" data-target=".teklif" class="teklif-al btn">Teklif Al</a>
                        <div class="search">
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->

    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="margin-top: 21px;">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('index')}}"><img style="height: 84px;" src="{{asset('assets/images/logo.png')}}" alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class=""><a href="{{route('index')}}">Anasayfa</a></li>
                    <li class=""><a href="{{route('about')}}">Kurumsal</a></li>
                    <li class=""><a href="{{route('front.products.index')}}">Ürünler</a></li>
                    <li class=""><a href="https://www.sbm.org.tr/tr/OnlineIslemler/Sayfalar/TrafikPoliceSorgula.aspx" target="_blank">Trafik Sorgula</a></li>
                    <li class=""><a href="https://www.sbm.org.tr/tr/OnlineIslemler/Sayfalar/KaskoPoliceSorgula.aspx" target="_blank">Kasko Sorgula</a></li>
                    <li class=""><a href="{{route('damage')}}">Hasar</a></li>
                    <li class=""><a href="{{route('front.references.index')}}">Referanslar</a></li>
                    <li class=""><a href="{{route('contact')}}">İletişim</a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header-->
{{$slot}}
<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                Copyright 2021 © Turkay Sigorta - Tüm Hakları Saklıdır. | Design by <a target="_blank" href="http://www.halilbelkir.com" target="_blank">Halil İbrahim BELKIR</a>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src="{{mix('js/site/site.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
<div id="yukari">
    <a href="javascript:;">

        <i class="material-icons" id="yukari_boyut">keyboard_arrow_up</i>
    </a>
</div>
</body>
</html>
