<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\TypeBook;

class TypeBookController extends Controller
{
    public function index() {
        $typebooks = Typebook::paginate(5);
        $count = Typebook::count();
        return view('typebooks.index', [
            'typebooks' => $typebooks,
            'count' => $count
        ]);
    }

    public function destroy($typebook_id) {
        Typebook::where('typebook_id', $typebook_id)->delete();
        return back();
    }
}
