<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required | decimal:0,2',
            'stock' => 'required | integer | min:0',
        ]);
        $article = new Article();
        $article->name = $request->input('name');
        $article->price = $request->input('price');
        $article->stock = $request->input('stock');
        $article->save();
        return redirect()->route('article.index')->with('success', 'Articulo creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required | decimal:0,2',
            'stock' => 'required | integer | min:0',
        ]);
        $article->name = $request->input('name');
        $article->price = $request->input('price');
        $article->stock = $request->input('stock');
        $article->save();
        return redirect()->route('article.index')->with('success', 'Articulo modificado correctamente.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id = null)
    {
        $article = Article::find($id);
        if ($article) {
            $article->delete();
            return redirect()->route('article.index')->with('success', 'Articulo eliminado correctamente.');
        }else {
            return redirect()->route('article.index')->with('error', 'Articulo no encontrado o en su defecto ha sido eliminado.');
        }

    }
}

