@if(isset($veriler['durum']))
    {{$veriler['konu']}} formundan gelen yeni bir bildiriminiz var. <br><br>

    Ad & Soyad        : {{ $veriler['ad_soyad'] ?? '' }}  <br>
    Konu              : {{ $veriler['konu'] ?? '' }} <br>
    Telefon           : {{ $veriler['telefon'] ?? '' }} <br>
    T.C               : {{ $veriler['tc'] ?? '' }} <br>
    Plaka             : {{ $veriler['plaka'] ?? '' }} <br>
    Belge Seri No'su  : {{ $veriler['belge'] ?? '' }} <br>
@else
    {{$veriler['konu']}}ndan gelen yeni bir bildiriminiz var. <br><br>

    Ad & Soyad : {{ $veriler['ad_soyad'] ?? '' }}  <br>
    E-Mail     : {{ $veriler['email'] ?? '' }} <br>
    Telefon    : {{ $veriler['telefon'] ?? '' }} <br>
    Mesaj      : {{ $veriler['mesaj'] ?? '' }} <br>
@endif
