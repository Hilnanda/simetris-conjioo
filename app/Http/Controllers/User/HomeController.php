<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.index');
    }

    /**
     * Display the about us page.
     */
    public function aboutUs()
    {
        return view('user.about-us');
    }

    /**
     * Display the contact page.
     */
    public function contact()
    {
        return view('user.contact');
    }

    /**
     * Display the deluxe page.
     */
    public function deluxe()
    {
        return view('user.deluxe');
    }

    /**
     * Display the news page.
     */
    public function news()
    {
        return view('user.news');
    }

    /**
     * Display the premiere page.
     */
    public function premiere()
    {
        return view('user.premiere');
    }

    /**
     * Display the rooms page.
     */
    public function rooms()
    {
        return view('user.rooms');
    }

    /**
     * Display the services page.
     */
    public function services()
    {
        return view('user.services');
    }

    /**
     * Display the superior page.
     */
    public function superior()
    {
        return view('user.superior');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
