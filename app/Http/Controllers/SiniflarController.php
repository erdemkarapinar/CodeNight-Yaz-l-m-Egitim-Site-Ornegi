<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnasayfaSinifModelleri;

class SiniflarController extends Controller
{
    public function siniflar()
    {
        // Veritabanından tüm verileri çek
        $y = AnasayfaSinifModelleri::all();
        $images = [
            'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Python.svg/640px-Python.svg.png',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/640px-PHP-logo.svg.png',
            'https://miro.medium.com/v2/resize:fit:651/1*6SKpzap0ydNfy_Sxcl4aFQ.png',
            'https://logowik.com/content/uploads/images/492_html5.jpg',
            'https://logowik.com/content/uploads/images/861_cisco.jpg',
            'https://upload.wikimedia.org/wikipedia/commons/c/c6/Wireshark_icon_new.png',
            'https://pbs.twimg.com/profile_images/1659582211073667074/VvSVuYmI_400x400.jpg',
            'https://i3.wp.com/banner2.cleanpng.com/20180614/bff/kisspng-unreal-engine-4-game-engine-video-game-5b232c4088df60.8288694515290317445606.jpg?ssl=1',
            'https://i.pinimg.com/564x/2d/5e/da/2d5eda142aa7d3a6aa81392bdff3b7c4.jpg',
            'https://www.appgefahren.de/wp-content/uploads/2022/07/move-to-ios-icon-400x400.jpg'
        ];

        $descriptions = [
            'Program Geliştirme Dersleri',
            'Web Yazılımı Geliştirme Dersleri',
            'Oyun Geliştirme Dersleri',
            'Network Geliştirme Dersleri',
            'Mobil Uygulama Geliştirme Dersleri'
        ];

        // Verileri anasayfa görünümüne gönder
        return view('anasayfa.siniflar', compact('y','images','descriptions'));
    }
}
