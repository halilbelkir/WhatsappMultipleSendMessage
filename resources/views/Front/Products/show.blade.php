<x-site.site>
    <div class="center2 wow fadeInDown" style="background: url({{asset('assets/images/headbg.jpg')}}) center center;">
        <h2>{{$products->ad}}</h2>
    </div>

    <section id="about-us">
        <div class="container">
            <h2>{{$products->ad}}</h2>
            {!! $products->aciklama !!}
        </div><!--/.container-->
    </section><!--/about-us-->
</x-site.site>
