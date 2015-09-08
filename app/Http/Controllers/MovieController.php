<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequest;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    protected $movie;

    public function __construct(Movie $movie)
    {
        $this->movie = $movie;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $movies = $this->movie->all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(MovieRequest $request)
    {
        $movie = $this->movie->create($request->except('select2_title'));
        flash()->overlay('Success!', 'Movie inventory has been created successfully.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $movie = $this->movie->findOrFail($id);
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $movie = $this->movie->findOrFail($id);
        return view('movies.show', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(MovieRequest $request)
    {
        $movie = $this->movie->find($request->get('movie_id'))->update($request->except('_token', '_method', 'movie_id'));
        flash()->overlay('Success!', 'Movie has been updated successfully.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->movie->destroy($id);
        flash()->overlay('Success!', 'Movie has been deleted successfully.');
        return response()->json('Success!', 200);
    }
}