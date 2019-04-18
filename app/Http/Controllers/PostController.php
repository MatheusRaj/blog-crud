<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
    public function listar() {
        return Post::with(['categories'])->get();
    }

    public function criar(Request $request) {

        $this->validate($request, [
            'titulo' => 'required|max:20',
            'autor' => 'required|max:20',
            'categoria' => 'required|max:15',
            'texto' => 'required'
        ]);

        $post = new Post;

        $post->titulo = $request->titulo;
        $post->autor = $request->autor;
        $post->categoria = $request->categoria;
        $post->texto = $request->texto;

        $post->save();

        return array("sucess" => true);
    }

    public function editar(Request $request) {

        $this->validate($request, [
            'titulo' => 'required|max:20',
            'autor' => 'required|max:20',
            'categoria' => 'required|max:15',
            'texto' => 'required',
            'id' => 'required'
        ]);

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

    public function deletar($id) {
        Post::destroy($id);

        return array("sucess" => true);
    }
}