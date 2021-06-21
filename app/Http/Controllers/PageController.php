<?php

namespace App\Http\Controllers;

use App\Models\Page;

final class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function create()
    {
        return view('pages.create');
    }

    public function edit(Page $page)
    {
        return view('pages.edit', compact('page'));
    }
}
