<x-site.site>
    <div class="center2 wow fadeInDown" style="background: url({{asset('assets/images/headbg.jpg')}}) center center;">
        <h2>İLETİŞİM</h2>
    </div>
    <section id="contact-info">
        <div class="gmap-area">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 map-content">
                        <ul class="row">
                            <li class="col-md-3">
                                <address>
                                    <h5><i class="material-icons">location_on</i> Adres</h5>
                                    <p>{{$settings->adres}}</p>
                                </address>
                            </li>

                            <li class="col-md-3">
                                <address>
                                    <h5><i class="material-icons">phone</i> Telefon</h5>
                                    <p><a href="tel:{{$settings->telefon}}">{{$settings->telefon}} </a></p>
                                </address>
                            </li>

                            @if(isset($settings->fax))
                                <li class="col-md-3">
                                    <address>
                                        <h5><i class="material-icons">print</i>Fax</h5>
                                        <p>{{$settings->fax}}</p>
                                    </address>
                                </li>
                            @endif
                            <li class="col-md-3">
                                <address>
                                    <h5><i class="material-icons">mail_outline</i> Mail</h5>
                                    <p>{{$settings->email}}</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12735.179648517384!2d37.371006!3d37.0623702!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9f7ff9b0768097db!2sTurkay%20Sigorta!5e0!3m2!1str!2str!4v1627137503192!5m2!1str!2str" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    <section id="contact-page">
        <div class="container">
            <div class=" col-sm-offset-1">
                <h2>İletişim Formu</h2>
            </div>
            <form class="row contact-wrap submitForm" method="POST" action="{{route('contact.submit')}}">
                <div class="status alert alert-success" style="display: none"></div>
                @csrf
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>İsim *</label>
                        <input type="text" name="ad_soyad" id="ad_1" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="email" id="e_mail" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Telefon *</label>
                        <input type="text" name="telefon" id="telefon" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Mesaj *</label>
                        <textarea id="mesaj" name="mesaj" required="required" class="form-control" rows="8"></textarea>
                    </div>
                </div><div class="clearfix"></div>
                <div class="col-sm-5  col-sm-offset-1">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-md">Gönder</a>
                    </div>
                </div>
            </form><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
</x-site.site>
