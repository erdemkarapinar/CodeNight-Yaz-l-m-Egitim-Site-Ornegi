<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class KategoryController extends Controller
{
    public function kategory()
    {
        // Veritabanından tüm verileri çek
        $a = Category::all();
        $images = [
            'https://www.hibedestek.com.tr/wp-content/uploads/2019/02/yzlm.jpg',
            'https://www.cevizbilisim.com.tr/dosyalar/2021/3/web-yazilim-ara-gorsel_1032021141850.jpg',
            'https://static.vecteezy.com/system/resources/previews/012/001/648/large_2x/game-development-concept-game-design-digital-technology-programming-and-codding-vector.jpg',
            'https://veriakademi.com/images/sistem-network.jpg',
            'https://deepersoft.com/Public/Tema/Default/images/resource/app-development-1.jpg'
        ];

        $descriptions = [
            'Program Geliştirme Dersleri',
            'Web Yazılımı Geliştirme Dersleri',
            'Oyun Geliştirme Dersleri',
            'Network Geliştirme Dersleri',
            'Mobil Uygulama Geliştirme Dersleri'
        ];

        // Verileri anasayfa görünümüne gönder
        return view('anasayfa.kategori', compact('a','images','descriptions'));
    }
}
