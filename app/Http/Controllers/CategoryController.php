<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // show category list

        return view('categories.index', [
            'categories' => $this->categoryList
        ]);
    }

    public function show(int $id)
    {
        $categoryList = [];
        foreach ($this->categoryList as $categories) {
            if($categories['id'] === $id) {
                $categoryList[] = $categories;
            }
        }
        if(empty($categoryList)) {
            abort(404);
        }
        return view('categories.show', [
            'id' => $id,
        ]);
    }

}
