<x-site.site>
    <div class="center2 wow fadeInDown" style="background: url({{asset('assets/images/headbg.jpg')}}) center center;">
        <h2>Referanslarımız</h2>
    </div>

    <section id="about-us">
        <div class="container">
            @foreach($references as $reference)
                <div class="col-md-6">
                    <i style="margin-top: -6px;" class="material-icons">play_arrow</i> {{$reference->ad}}
                    <br><br>
                </div>
            @endforeach
            <div class="col-md-12 teklif-al" style="text-align: center;">VE İSMİNİ YAZAMADIĞIMIZ BİNLERCE DEĞERLİ SİGORTALIMIZ </div>
        </div>
        </div><!--/.container-->
    </section><!--/about-us-->
</x-site.site>
