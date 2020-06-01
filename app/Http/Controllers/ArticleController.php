<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
   {
       $articles = DB::table('articles')
            ->join('categories', 'articles.category_id', '=', 'categories.id')
            ->orderBy('articles.created_at', 'desc')
            ->get();

       return response()->json([
            'articles'=> $articles
       ], 200);
   }

   /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles = DB::table('articles')
            ->join('categories', 'articles.category_id', '=', 'categories.id')
            ->where('articles.id', $id)
            ->get();

       return response()->json([
            'articles'=> $articles
       ], 200);
    }

   /**
     * Add a new article.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function add(Request $request)
   {
       $article = new Article([
           'category_id' => $request->input('category_id'),
           'subject' => $request->input('subject'),
           'author' => $request->input('author'),
           'created_at' => date("Y-m-d"),
           'body' => $request->input('body')
       ]);

       $article->save();

       return response()->json('Artikel succesvol toegevoegd!');
   }
}
