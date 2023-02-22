<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'about' => \App\Models\About::first(),
            'aboutOther' => \App\Models\AboutOther::first(),
            'teachers' => \App\Models\Teacher::get(),
            'offGroups' => \App\Models\OffGroup::get(),
            'offIndivids' => \App\Models\OffIndivid::get(),
            'onGroups' => \App\Models\OnGroup::get(),
            'onIndivids' => \App\Models\OnIndivid::get(),
            'banners' => \App\Models\Banner::get(),
            'faq' => \App\Models\Faq::get(),
            'contact' => \App\Models\Contact::first(),
        ]);
    }
}
