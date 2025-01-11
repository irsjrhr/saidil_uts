<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Landing extends Controller
{

    public function index(){
        $data_menu = [
            "Slider" => "#slider",
            "Fitur" => "#fitur",
            "Tentang" => "#tentang",
            "Contact" => "#contact",
            "FAQ" => "#faq",
        ];
        $data_slide = [
            "class_bg.jpg",
            "class_bg2.jpg",
        ];
        $data_fitur = [
            "Fitur 1" => "Penjelasan Fitur"
        ];
        $data_faq = [
            "Pertanyaan?" => "Jawaban 1"
        ];

        $data = [];
        $data['data_menu'] = $data_menu;
        $data['data_slide'] = $data_slide;
        $data['data_fitur'] = $data_fitur;
        $data['data_faq'] = $data_faq;
        return view('landing', $data);
    }
}
