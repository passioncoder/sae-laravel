<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostingResource;
use App\Models\Posting;
use Illuminate\Http\Request;

class PostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postings = Posting::published()->latest()->with('user')->get(); // paginate(15);

        return PostingResource::collection($postings);

        // return response()->json($postings);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posting = Posting::findOrFail($id);

        // https://laravel.com/docs/8.x/eloquent-resources

        return new PostingResource($posting);
    }
}
