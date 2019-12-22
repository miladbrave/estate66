<?php

namespace App\Http\Controllers\backend;

use App\attributeGroup;
use App\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class categoryController extends Controller
{

    public function index()
    {
        $category = category::all();
        return view('backend.category.index',compact('category'));
    }


    public function create()
    {
        $categories = Category::with('childRecursive')
            ->where('parent_id',null)
            ->get();
        return view('backend.category.create',compact('categories'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'enname' => 'required',
            'franame' => 'required',
            'araname' => 'required',
        ]);

        $category = new Category();
        $category->name = $request->input('name');
        $category->parent_id = $request->input('category_parent');
        $category->meta_title = $request->input('meta_title');
        $category->meta_des = $request->input('meta_desc');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->enname = $request->input('enname');
        $category->franame = $request->input('franame');
        $category->araname = $request->input('araname');
        $category->save();

        Session::flash('create','دسته بندی جدید افزوده شد');
        return redirect('administrator/category');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::with('childRecursive')
            ->where('parent_id',null)
            ->get();
        $categories = Category::findOrFail($id);
        return view('backend.category.edit',compact(['category','categories']));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->input('name');
        $category->parent_id = $request->input('category_parent');
        $category->enname = $request->input('enname');
        $category->franame = $request->input('franame');
        $category->araname = $request->input('araname');
        $category->meta_title = $request->input('meta_title');
        $category->meta_des = $request->input('meta_desc');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->save();

        return redirect('administrator/category');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('administrator/category');
    }

    public function indexSetting($id)
    {
        $category = Category::findOrFail($id);
        $attributeGroups= attributeGroup::all();
        return view('backend.category.indexSetting',compact(['category','attributeGroups']));
    }

    public function saveSetting(Request $request,$id)
    {
        $category =Category::findOrFail($id);
        $category->AttributeGroups()->sync($request->att);
        $category->save();

        return redirect('administrator/category');
    }

    public function apiIndex()
    {
        $categories = Category::with('childRecursive')
            ->where('parent_id',null)
            ->get();

        $response = ['categories' => $categories];
        return response()->json($response,200);
    }
    public function apiAttribute(Request $request)
    {
        $categories = $request->all();
        $attributeGroup = attributeGroup::with('attributevalue','category')
            ->whereHas('category',function ($q) use ($categories){
                $q->where('category_id',$categories);
            })
            ->get();
        $response = ['attributes' => $attributeGroup];
        return response()->json($response,200);
    }
}
