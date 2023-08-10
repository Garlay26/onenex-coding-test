<?php

namespace App\Http\Controllers\API;

use App\Models\Comment;
use App\Models\Movie;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Cache;

class CommentController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validator = Validator::make($request->all(), [
            'movie_id' => 'required',
            'email' => 'required',
            'comment' => 'required',
        ]);

        if ($validator->fails()) {
            return apiResponse(false, 'Please Fill Required Information!', $validator, 400);
        }
        try {
            \DB::beginTransaction();
            $check_movie = Movie::find($request->movie_id);
            if($check_movie){
                $comment = Comment::create([
                    'movie_id' => $request->movie_id,
                    'email' => $request->email,
                    'comment' =>  $request->comment,
                ]);
                \DB::commit();
                return apiResponse(true, 'Comment Success!', $comment, 200);
            }
            else{
                return apiResponse(false, 'Wrong Movie ID!', $request->movie_id, 404);
            }
        } catch (\Exception $e) {
            \DB::rollback();
            return apiResponse(false, "Cannot Create!Please contact to Admin", $e, 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
