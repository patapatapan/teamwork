<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Cgy;

class BlogController extends Controller
{
    public function blog()
    {
        $articles = Article::where('cgy_id', '5')->orderBy('sort', 'asc')->with('cgy')->get();
        foreach ($articles as $article) {
            $cgy[] = Cgy::find($article->cgy_id);
        }
        $bottom_articles = Article::where('author_id', '2')->orderBy('sort', 'asc')->with('cgy')->simplePaginate(11);
        foreach ($bottom_articles as $bottom_article) {
            $bottom_cgies[] = Cgy::find($bottom_article->cgy_id);
        }
        return view('site.blog', compact('articles', 'cgy', 'bottom_articles', 'bottom_cgies'));
    }
    public function blog_single($id)
    {
        $articles = Article::where('cgy_id', '5')->orderBy('sort', 'asc')->with('cgy')->get();
        foreach ($articles as $article) {
            $cgy[] = Cgy::find($article->cgy_id);
        }
        $bottom_articles = Article::where('author_id', '2')->orderBy('sort', 'asc')->with('cgy')->simplePaginate(11);
        foreach ($bottom_articles as $bottom_article) {
            $bottom_cgies[] = Cgy::find($bottom_article->cgy_id);
        }
        return view('site.blog', compact('articles', 'cgy', 'bottom_articles', 'bottom_cgies'));
    }
}
