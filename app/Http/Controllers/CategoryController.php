<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    public function listar() {
        return Category::with(['posts'])->get();
    }

    public function criar(Request $request) {

        $this->validate($request, [
            'title' => 'required|max:20',
            'description' => 'required|max:50'
        ]);

        $category = new Category;

        $category->title = $request->title;
        $category->description = $request->description;

        $category->save();

        return array("sucess" => true);
    }

    public function editar(Request $request) {

        $this->validate($request, [
            'title' => 'required|max:20',
            'description' => 'required|max:50'
        ]);

        $category = Category::find($request->id);

        $category->title = $request->title;
        $category->description = $request->description;

        $category->save();

        return array("sucess" => true);
    }

    public function pesquisar($id) {
        return Category::find($id);
    }

    public function deletar($id) {
        Category::destroy($id);

        return array("sucess" => true);
    }
}