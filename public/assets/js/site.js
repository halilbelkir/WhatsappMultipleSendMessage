$('.submitForm').submit( function (e)
{
    e.preventDefault();
    $.ajax({
        type: "POST",
        dataType: "json",
        contentType: false,
        cache: false,
        processData:false,
        url: this.action,
        data: new FormData(this),
        success : function (response)
        {
            var sonuc = response.sonuc;
            var mesaj = response.mesaj;

            if (sonuc == 1)
            {
                islembasarili(mesaj);
                setTimeout(function () {location.reload(); },700);
            }
            else
            {
                islembasarisiz(mesaj);
            }
        },
        error : function (response)
        {
            var hata_json = response.responseJSON.errors;
            var hata      = '';
            for(var k in hata_json)
            {
                for (var a in hata_json[k])
                {
                    hata += hata_json[k][a]+'<br>';
                }
            }
            islembasarisiz(hata);
        }
    });
});

function islembasarili(mesaj)
{
    Swal.fire(
        {
            position: 'center',
            icon: 'success',
            text: mesaj,
            showConfirmButton: false,
        })
}

function islembasarisiz(mesaj)
{
    Swal.fire(
        {
            position: 'center',
            icon: 'warning',
            html: mesaj,
            showConfirmButton: true,
            cancelButtonText: 'Kapat',
        })
}

(function ()
{
    var callback_loaded = function (element)
    {
        $('[data-ll-status="loaded"]').removeClass('lazy');
    }

    new LazyLoad({
        callback_loaded: callback_loaded
    });
})();
$(window).scroll(function(){
    if ($(this).scrollTop() > 100)    // Sayfa ne kadar aşağı kayarsa buton görünsün. 100 sayısı = Kaydırma çubuğunun piksel konumu. Bu sayı değiştirilebilir.
        $("#yukari").fadeIn(500);    // Yukarı çık butonu ne kadar hızla ortaya çıksın. 500 milisaniye = 0,5 saniye. Bu sayı değiştirilebilir.
    else
        $("#yukari").fadeOut(500);    // Yukarı çık butonu ne kadar hızla ortadan kaybolsun. 500 milisaniye = 0,5 saniye. Bu sayı değiştirilebilir.
});

$(document).ready(function(){
    $("#yukari").click(function(){    // Yukarı çık butonuna tıklanıldığında aşağıdaki satır çalışır.
        $("html, body").animate({ scrollTop: "0" }, 500);    // Sayfa ne kadar hızla en yukarı çıksın.
        // 0 sayısı sayfanın en üstüne çıkılacağını belirtir.
        // 500 sayısı ne kadar hızla çıkılacağını belirtir. 500 milisaniye = 0,5 saniye. Bu sayı değiştirilebilir.
        return false;
    });
});
