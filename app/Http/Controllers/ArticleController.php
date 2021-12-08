<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Genre;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.articles',[
            "title" => "Articles",
            "contents" => Article::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('pages.create',[
             "title" => "Create",
             'genres'=>Genre::all()
         ]);
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'title'=>'required',
            'slug'=>'required',
            'genre_id'=>'required',
            'excerpt'=>'required',
            'body'=>'required'
        ]);
        Article::create($validatedData);
        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('pages.article',[
            'title' => $article->title,
            'content' => $article
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('pages.edit', 
        [
            'title' => 'Editing Page',
            'article' => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData=$request->validate([
            'title'=>'required',
            'slug'=>'required',
            'genre_id'=>'required',
            'excerpt'=>'required',
            'body'=>'required'
        ]);
      
         $article = Article::find($id);
         $article->title = $request->title;
         $article->slug = $request->slug;
         $article->genre_id = $request->genre_id;
         $article->excerpt = $request->excerpt;
         $article->body = $request->body;
         $article->save();
         return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete($id)
    {
        $article=Article::find($id);
        $article->delete();
        return redirect('/articles');
    }
    
}
