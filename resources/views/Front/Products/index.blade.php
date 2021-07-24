<x-site.site>
    <div class="center2 wow fadeInDown" style="background: url({{asset('assets/images/headbg.jpg')}}) center center;">
        <h2>Ürünler</h2>
    </div>

    <section id="about-us">
        <div class="container">
            <div class="row products">
                @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="item">
                            <h3>
                                <a href="{{route('front.products.show',$product->seflink)}}">
                                    {{$product->ad}}
                                </a>
                            </h3>
                            <p>{{strip_tags(Str::limit($product->aciklama, 20))}}</p>
                            <a href="{{route('front.products.show',$product->seflink)}}" class="teklif-al btn">devamı</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div><!--/.container-->
    </section><!--/about-us-->
</x-site.site>
