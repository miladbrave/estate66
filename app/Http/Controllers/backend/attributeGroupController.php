<?php

namespace App\Http\Controllers\backend;

use App\attributeGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class attributeGroupController extends Controller
{

    public function index()
    {
        $attributeGroup = attributeGroup::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.attribute.index',compact('attributeGroup'));
    }


    public function create()
    {
        return view('backend.attribute.create');
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'enname' => 'required',
            'franame' => 'required',
            'araname' => 'required',
        ]);

        $attribute = new attributeGroup();
        $attribute->title = $request->input('name');
        $attribute->enname = $request->input('enname');
        $attribute->franame = $request->input('franame');
        $attribute->araname = $request->input('araname');
        $attribute->type = $request->input('type');
        $attribute->save();

        Session::flash('att_create','ویژگی جدید ایجاد شد.');
        return redirect('administrator/attribute');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $att = attributeGroup::findOrFail($id);
        return view('backend.attribute.edit',compact('att'));
    }

    public function update(Request $request, $id)
    {
        $attribute = attributeGroup::findOrFail($id);
        $attribute->title = $request->input('title');
        $attribute->enname = $request->input('enname');
        $attribute->franame = $request->input('franame');
        $attribute->araname = $request->input('araname');
        $attribute->type = $request->input('type');
        $attribute->save();

        Session::flash('att_create','ویژگی جدید ایجاد شد.');
        return redirect('administrator/attribute');
    }


    public function destroy($id)
    {
        $attribute = attributeGroup::findOrFail($id);
        $attribute->delete();
        return redirect('administrator/attribute');

    }
}
