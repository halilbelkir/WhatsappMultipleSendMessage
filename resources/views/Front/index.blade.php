<x-site.site>

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url({{ Media::getImage('assets/images/slider/bg1.jpg', 1600, 500) }})">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Turkay Sigorta</h1>
                                    <h2 class="animation animated-item-2">Evinizi, işinizi, arabanızı, sağlıgınızı güvence altına alıyoruz.</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url({{ Media::getImage('assets/images/slider/bg3.jpg', 1600, 500) }})">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Turkay Sigorta</h1>
                                    <h2 class="animation animated-item-2">Evinizi, işinizi, arabanızı, sağlıgınızı güvence altına alıyoruz.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left" style="margin-top: 14px;"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right" style="margin-top: 14px;"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="feature" >
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>TURKAY SİGORTA</h2>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Poliçe Takip</h2>
                            <h3>Araç poliçelerinizi dert etmenize gerek yok biz sizin için takip ederiz.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>7 / 24 Hizmet</h2>
                            <h3>Her türlü ihtiyaçlarınızda yanınızdayız.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-heart"></i>
                            <h2>Güvenilir</h2>
                            <h3>Gönül rahatlığıyla bize güvenebilirsiniz.</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#feature-->

    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>İş Ortaklarımız</h2>
                <p class="lead">Asistan Numaraları</p>
            </div>

            <div class="row">

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        {!! Media::createTag('assets/images/acente/ak-sigorta.jpg',['width' =>[292], 'height' => [225]],['class'=> 'img-responsive lazy','alt' => 'Ak Sigorta','title' => 'Ak Sigorta'],'lazy') !!}
                        <div class="acente">444 27 27</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        {!! Media::createTag('assets/images/acente/mapfre_logo.png',['width' =>[292], 'height' => [225]],['class'=> 'img-responsive lazy','alt' => 'mapfre Sigorta','title' => 'mapfre Sigorta'],'lazy') !!}
                        <div class="acente">0 850 755 0 755</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        {!! Media::createTag('assets/images/acente/dubaisigorta.jpg',['width' =>[292], 'height' => [225]],['class'=> 'img-responsive lazy','alt' => 'dubai Sigorta','title' => 'dubai Sigorta'],'lazy') !!}
                        <div class="acente">0 850 224 33 70 </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        {!! Media::createTag('assets/images/acente/anadolu-sigorta.png',['width' =>[292], 'height' => [225]],['class'=> 'img-responsive lazy','alt' => 'anadolu Sigorta','title' => 'anadolu Sigorta'],'lazy') !!}
                        <div class="acente">0 850 724 0 850</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="recent-work-wrap">
                        {!! Media::createTag('assets/images/acente/orient.png',['width' =>[292], 'height' => [225]],['class'=> 'img-responsive lazy','alt' => 'orient Sigorta','title' => 'orient Sigorta'],'lazy') !!}
                        <div class="acente">0850 202 35 15</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="recent-work-wrap">
                        {!! Media::createTag('assets/images/acente/hdi.png',['width' =>[292], 'height' => [225]],['class'=> 'img-responsive lazy','alt' => 'hdi Sigorta','title' => 'hdi Sigorta'],'lazy') !!}
                        <div class="acente">0850 222 8 434</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="recent-work-wrap">
                        {!! Media::createTag('assets/images/acente/sampojapon.png',['width' =>[292], 'height' => [225]],['class'=> 'img-responsive lazy','alt' => 'Sampo Japon Sigorta','title' => 'Sampo Japon Sigorta'],'lazy') !!}
                        <div class="acente">0850 250 81 81</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="recent-work-wrap">
                        {!! Media::createTag('assets/images/acente/liberty.png',['width' =>[292], 'height' => [225]],['class'=> 'img-responsive lazy','alt' => 'liberty Sigorta','title' => 'liberty Sigorta'],'lazy') !!}
                        <div class="acente">0850 222 555 7</div>
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->

    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Bir sorunuz mu var ?</h2>
                            <p>Sorularınız ve özel fiyat teklifi almak için bizi arayın.<br>
                                <strong>Telefon :</strong> <a href="tel:{{$settings->telefon}}">{{$settings->telefon}}</a>
                                @if(isset($settings->fax))
                                    <strong>Fax :</strong> {{$settings->fax}}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#conatcat-info-->

</x-site.site>
