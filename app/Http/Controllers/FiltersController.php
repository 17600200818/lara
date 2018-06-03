<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FiltersController extends Controller
{
    public function index()
    {
//        $aa = 123;
//        $arr = ['a', 'b', 'c'];
//        return view('filters.index', compact('aa', 'arr'));
        $filters = Filter::get();
        return view('filters.index', compact('filters'));
    }

    public function create()
    {
        return view('filters.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'description' => 'required'
        ]);

        $data = $request->only('name', 'description');


//        $validator = Validator::make($request->all(), [
//            'name' => 'required|max:50',
//            'description' => 'required'
//        ]);
//
//        if ($validator->fails()) {
//            dd($validator->errors()->all());
//        }

        Filter::create($data);

        session()->flash('success', '创建成功');
        return redirect()->route('filters.index');
    }
}
