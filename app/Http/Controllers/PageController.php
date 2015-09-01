<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Home page
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $page = 'home';
        return view('pages.home', compact('page'));
    }

    public function search($query)
    {
        return "$query search results!";
    }
}
