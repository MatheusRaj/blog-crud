<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
    public function listar() {
        return Post::all();
    }

    public function criar(Request $request) {
        $post = new Post;

        $post->titulo = $request->titulo;
        $post->autor = $request->autor;
        $post->categoria = $request->categoria;
        $post->texto = $request->texto;

        $post->save();

        return array("sucess" => true);
    }

    public function editar(Request $request) {
        $post = Post::find($request->id);

        $post->titulo = $request->titulo;
        $post->autor = $request->autor;
        $post->categoria = $request->categoria;
        $post->texto = $request->texto;

        $post->save();

        return array("sucess" => true);
    }

    public function pesquisar($id) {
        return Post::find($id);
    }

    public function deletar(Request $request) {
        Post::destroy($request->id);

        return array("sucess" => true);
    }
}