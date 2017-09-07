<?php

namespace App\Http\Controllers;

use App\Http\Resources\PeopleResource;
use App\People;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return PeopleResource
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\People  $author
     * @return PeopleResource
     */
    public function show(People $author)
    {
        PeopleResource::withoutWrapping();

        return new PeopleResource($author);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\People  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(People $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\People  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, People $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\People  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $author)
    {
        //
    }
}
