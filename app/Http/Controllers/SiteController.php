<?php

namespace App\Http\Controllers;

use App\Mail\onyuzTaleplerMailler;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\References;
use Illuminate\Support\Facades\Mail;
use Cookie;
use App\Mail\sendMail;

class SiteController extends Controller
{
    public $email;

    public function __construct()
    {
        $this->email = 'turkay@turkaysigorta.com.tr';
    }

    public function productsList()
    {
        $products = Products::get();
        return view('front.products.index',compact('products'));
    }

    public function productsShow($seflink)
    {
        $products = Products::where('seflink',$seflink)->first();
        return view('front.products.show',compact('products'));
    }

    public function referencesList()
    {
        $references = References::get();
        return view('front.references',compact('references'));
    }

    public function contactSubmit(Request $request)
    {
        if (empty(Cookie::get('contactSubmit')))
        {
            $veriler = array(
                'ad_soyad' => $request->ad_soyad,
                'email'    => $request->email,
                'telefon'  => $request->telefon,
                'mesaj'    => $request->mesaj,
                'konu'     => 'İletişim Formu'
            );
            Mail::to($this->email)->send(new sendMail($veriler));

            Cookie::queue('contactSubmit', true, 2);
            return response()->json([
                'sonuc' => 1,
                'mesaj' => 'İşlem Başarılı! En kısa süre içerisinde sizinle irtibata geçilecektir.'
            ]);
        }
        else
        {
            return response()->json([
                'sonuc' => 0,
                'mesaj' => 'Lütfen 2 dakika sonra tekrar deneyiniz.'
            ]);
        }
    }

    public function offerSubmit(Request $request)
    {
        if (empty(Cookie::get('offerSubmit')))
        {
            $veriler = array(
                'ad_soyad' => $request->ad_soyad,
                'konu'     => $request->konu,
                'telefon'  => $request->telefon,
                'tc'       => $request->tc,
                'plaka'    => $request->plaka,
                'belge'    => $request->belge,
                'konu'     => 'Teklif Al Formu',
                'durum'    => 1
            );
            Mail::to($this->email)->send(new sendMail($veriler));

            Cookie::queue('offerSubmit', true, 2);
            return response()->json([
                'sonuc' => 1,
                'mesaj' => 'İşlem Başarılı! En kısa süre içerisinde sizinle irtibata geçilecektir.'
            ]);
        }
        else
        {
            return response()->json([
                'sonuc' => 0,
                'mesaj' => 'Lütfen 2 dakika sonra tekrar deneyiniz.'
            ]);
        }
    }

    public function sitemap()
    {
        $products  = Products::get();
        $now       = Carbon::now()->toAtomString();
        $content   = view('front.sitemap', compact('now','products'));
        return response($content)->header('Content-Type', 'application/xml');
    }
}
