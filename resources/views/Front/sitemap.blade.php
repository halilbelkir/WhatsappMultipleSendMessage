
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>{{ route('index') }}</loc>
        <lastmod>{{ $now }}</lastmod>
    </url>

    <url>
        <loc>{{ route('about') }}</loc>
        <lastmod>{{ $now }}</lastmod>
    </url>

    <url>
        <loc>{{ route('damage') }}</loc>
        <lastmod>{{ $now }}</lastmod>
    </url>

    <url>
        <loc>{{ route('contact') }}</loc>
        <lastmod>{{ $now }}</lastmod>
    </url>

    <url>
        <loc>{{ route('front.products.index') }}</loc>
        <lastmod>{{ $now }}</lastmod>
    </url>

    <url>
        <loc>{{ route('front.references.index') }}</loc>
        <lastmod>{{ $now }}</lastmod>
    </url>

    @foreach($products as $product)
        <url>
            <loc>{{route('front.products.show',$product->seflink)}}</loc>
            <lastmod>{{ $now }}</lastmod>
        </url>
    @endforeach


</urlset>
