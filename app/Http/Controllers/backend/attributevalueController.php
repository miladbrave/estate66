<?php

namespace App\Http\Controllers\backend;

use App\attributeGroup;
use App\attributevalue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class attributevalueController extends Controller
{
    public function index()
    {
        $attvalue = attributevalue::with('attributeGroup')->orderBy('created_at','desc')->paginate(10);
        return view('backend.attributevalue.index',compact('attvalue'));
    }


    public function create()
    {
        $attvalue = attributeGroup::all();
        return view('backend.attributevalue.create',compact('attvalue'));
    }


    public function store(Request $request)
    {
        $attvalue = new attributevalue();
        $attvalue->title = $request->input('title');
        $attvalue->entitle = $request->input('enname');
        $attvalue->fratitle = $request->input('franame');
        $attvalue->aratitle = $request->input('araname');
        $attvalue->attribute_id = $request->input('att-group');
        $attvalue->save();
        return redirect('administrator/attributevalue');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $attV = attributevalue::with('attributegroup')->where('id',$id)->first();
        $attributeGroup = attributeGroup::all();
        return view('backend.attributevalue.edit',compact(['attV','attributeGroup']));
    }


    public function update(Request $request, $id)
    {
        $attV = attributevalue::findOrFail($id);
        $attV->title = $request->input('title');
        $attV->entitle = $request->input('enname');
        $attV->fratitle = $request->input('franame');
        $attV->aratitle = $request->input('araname');
        $attV->attribute_id = $request->input('att-group');
        $attV->save();
        return redirect('administrator/attributevalue');
    }


    public function destroy($id)
    {
        $attV = attributevalue::findOrFail($id);
        $attV->delete();
        return redirect('administrator/attributevalue');
    }
}
