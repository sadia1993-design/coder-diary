<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use App\Models\Category;
use App\Models\Tag;

use App\Http\Requests\StoreProblemRequest;
use App\Http\Requests\UpdateProblemRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProblemController extends Controller
{
    /**
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $problems = Problem::with('category')
             ->orderBy('id', 'desc')
             ->paginate(5);


        return view('admin.problem.index' , compact('problems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories = Category::orderBy('id', 'ASC')
           ->get();
       $tags = Tag::orderBy('id', 'ASC')
           ->get();
       return view('admin.problem.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProblemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProblemRequest $request)
    {
           $request->validated();
           try{
                Problem::create([
                    'title' => $request->title,
                    'slug'  => Str::slug($request->title),
                    'description'  => $request->description,
                    'visibility'  => $request->visibility,
                    'user_id'  => \Auth::id(),
                    'category_id'  => $request->category_id,
                ]);

                return redirect()->route('problems.index')->with('info', 'Problem Created Successfully');

           }catch(\Exception $e){
                return $e;
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function show(Problem $problem)
    {
        return view('admin.problem.show', compact('problem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function edit(Problem $problem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProblemRequest  $request
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProblemRequest $request, Problem $problem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Problem $problem)
    {
        //
    }
}
