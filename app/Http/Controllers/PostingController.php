<?php

namespace App\Http\Controllers;

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
        $postings = Posting::published()->latest()->with('user')->paginate(15); // ->featured()

        /*
        $postings = Posting::query()
            ->where('is_featured', true)
            ->whereNotNull('published_at')->where('published_at', '<', now())
            ->orderBy('updated_at', 'desc')
            ->paginate(12);
        */

        return view('postings.index', compact('postings')); // ['postings' => $postings]
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posting = new Posting;

        return view('postings.create', compact('posting'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'title' => 'required|min:3|max:255',
            'content' => 'nullable',
            'published_at' => 'nullable|date_format:Y-m-d',
        ]);

        $posting = new Posting;
        $posting->fill($request->all());
        $posting->is_featured = $request->has('is_featured');
        $posting->user_id = auth()->id();
        $posting->save();

        return redirect()->route('postings.show', $posting->id)->with('success', 'Posting created! :)');
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

        return view('postings.show', compact('posting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $posting = Posting::findOrFail($id);

        $this->authorize('update-posting', $posting);

        $posting->fill($request->old());
        // $posting->is_featured = $request->old('is_featured');

        return view('postings.edit', compact('posting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // https://laravel.com/docs/8.x/validation#available-validation-rules

        $this->validate($request, [

           'title' => 'required|min:3|max:255',
           'content' => 'nullable',
           'published_at' => 'nullable|date_format:Y-m-d',
        ]);

        $posting = Posting::findOrFail($id);

        $this->authorize('update-posting', $posting);

        $posting->fill($request->all());
        $posting->is_featured = $request->has('is_featured');
        $posting->save();

        return redirect()->route('postings.show', $id)->with('success', 'Posting updated! :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posting = Posting::findOrFail($id);

        $this->authorize('update-posting', $posting);

        $posting->delete();

        return redirect()->route('postings.index')->with('success', 'Posting deleted. :(');
    }
}
