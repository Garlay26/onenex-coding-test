<?php

namespace App\Http\Controllers\API;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use PDF;
use Str;
use Validator;

class MovieController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $movies = Movie::select('id', 'title', 'summary')->orderbydesc('id')->paginate(10);
        return apiResponse(true, 'Movie List Fetch', $movies, 200);
    }

    public function publicList()
    {
        $movies = Movie::select('id', 'title', 'summary')->with('comment')->orderbydesc('id')->paginate(10);
        return apiResponse(true, 'Public Movie List Fetch', $movies, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'summary' => 'required',
            'genres' => 'required',
            'author' => 'required',
            'tags' => 'required',
            'imdb' => 'required',
        ]);

        if ($validator->fails()) {
            return apiResponse(false, 'Please Fill Required Information!', $validator, 400);
        }
        try {
            if ($request->file('image')) {
                $image = $request->file('image');
                $destinationPath = 'images/movie';
                $coverImage = Str::random(12) . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $coverImage);
            }
            $coverImage = $coverImage ?? null;
            $array_tags = $request->tags;
            $tags = null;
            foreach ($array_tags as $key => $array_tag) {
                if ($key == 0) {
                    $tags .= "$array_tag";
                } else {
                    $tags .= ",$array_tag";
                }

            }
            $movie = Movie::create([
                'title' => $request->title,
                'summary' => $request->summary,
                'genres' => $request->genres,
                'author' => $request->author,
                'imdb' => $request->imdb,
                'tags' => $tags,
                'cover_image' => asset("images/movie/$coverImage"),
            ]);
            \DB::commit();
            return apiResponse(true, 'Movie Created', $movie, 200);
        } catch (\Exception $e) {
            \DB::rollback();
            return apiResponse(false, "Cannot Create!Please contact to Admin", $e, 500);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $movie = Movie::with('comment')->find($id);
        if ($movie) {
            if (Cache::has("movieDetail_$id")) {
                $movie = Cache::get("movieDetail_$id");
                return apiResponse(true, 'Movie Detail Fetch From Cache', $movie, 200);
            } else {
                $tags = explode(',', $movie->tags);
                $related_movies = Movie::where('author', $movie->author)
                    ->orWhere('genres', $movie->genres)
                    ->orWhere('imdb', $movie->imdb)
                    ->orWhereIn('tags', $tags)
                    ->paginate(7);
                $movie->pdf_download = asset("api/downloadPdf/$movie->id");
                $movie->related_movies = $related_movies;
                Cache::forever("movieDetail_$id", $movie);
                return apiResponse(true, 'Movie Detail Fetch From Database', $movie, 200);
            }

        } else {
            return apiResponse(false, 'Wrong Movie ID!', $id, 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'summary' => 'required',
            'genres' => 'required',
            'author' => 'required',
            'tags' => 'required',
            'imdb' => 'required',
            'id' => 'required',
        ]);
        if ($validator->fails()) {
            return apiResponse(false, 'Please Fill Required Information!', $validator, 400);
        }
        try {
            \DB::beginTransaction();
            $movie = Movie::find($request->id);
            if ($movie) {
                $array_tags = $request->tags;
                $tags = null;
                foreach ($array_tags as $key => $array_tag) {
                    if ($key == 0) {
                        $tags .= "$array_tag";
                    } else {
                        $tags .= ",$array_tag";
                    }

                }
                if ($request->file('image')) {
                    $image = $request->file('image');
                    $destinationPath = 'images/movie';
                    $coverImage = Str::random(12) . "." . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $coverImage);

                    $movie->update([
                        'title' => $request->title,
                        'summary' => $request->summary,
                        'genres' => $request->genres,
                        'author' => $request->author,
                        'imdb' => $request->imdb,
                        'tags' => $tags,
                        'cover_image' => asset("images/movie/$coverImage"),
                    ]);
                } else {
                    $movie->update([
                        'title' => $request->title,
                        'summary' => $request->summary,
                        'genres' => $request->genres,
                        'author' => $request->author,
                        'imdb' => $request->imdb,
                        'tags' => $tags,
                    ]);
                }
                Cache::forget("movieDetail_$request->id");
                \DB::commit();

                return apiResponse(true, 'Movie Updated', $movie, 200);
            } else {
                return apiResponse(false, 'Wrong Movie ID!', $request->id, 404);
            }
        } catch (\Exception $e) {
            \DB::rollback();
            return apiResponse(false, "Cannot Update!Please contact to Admin", $e, 500);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);
        if ($validator->fails()) {
            return apiResponse(false, 'Please Fill Required Information!', $validator, 400);
        }

        try {
            \DB::beginTransaction();
            $movie = Movie::find($request->id);
            if ($movie) {
                $movie->delete();
                Cache::forget("movieDetail_$request->id");
                \DB::commit();
                return apiResponse(true, 'Movie Deleted!', $movie, 200);
            } else {
                return apiResponse(false, 'Wrong Movie ID!', $request->id, 404);
            }

        } catch (\Exception $e) {
            \DB::rollback();
            return apiResponse(false, "Cannot Delete!Please contact to Admin", $e, 500);
        }

    }

    // Generate PDF
    public function createPDF($id)
    {
        $movie = Movie::find($id)->toarray();
        view()->share('movie', $movie);
        $pdf = PDF::loadView('pdf_view', $movie);
        return $pdf->download("movie.pdf");
    }
}
