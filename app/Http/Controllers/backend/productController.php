<?php

namespace App\Http\Controllers\backend;

use App\attributeGroup;
use App\attributevalue;
use App\category;
use App\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class productController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.product.index',compact('products'));
    }


    public function create()
    {
        $category = Category::with('childRecursive')
            ->where('parent_id',null)
            ->get();
        $attribute = attributeGroup::all();
        $attributeValue = attributevalue::all();
        return view('backend.product.create',compact(['category','attribute','attributeValue']));
    }

    public function generateSKU()
    {
        $number = mt_rand(1000, 99999);
        if($this->checkSKU($number)){
            return $this->generateSKU();
        }
        return (string)$number;
    }

    public function checkSKU($number)
    {
        return Product::where('sku',$number)->exists();
    }

    public function makeslug($title)
    {
        $slug =str_slug($title, "-");
        return $slug;
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'product_name' => 'required',
            'product_price' => 'required',
            'product_desc' => 'required',
            'product_img' => 'image|required'
        ]);

        $newProduct = new Product();
        $newProduct->title = $request->name;
        $newProduct->sku = $this->generateSKU();
        $newProduct->slug = $this->makeSlug($request->slug);
        $newProduct->status = $request->status;
        $newProduct->price = $request->price;
        $newProduct->dis_price = $request->dis_price;
        $newProduct->description = $request->des;
        $newProduct->country = $request->city;
        $newProduct->zone = $request->zone;
        $newProduct->meta_des = $request->meta_desc;
        $newProduct->meta_title = $request->meta_title;
        $newProduct->meta_keywords = $request->meta_keywords;
        $newProduct->user_id = 1;

        $newProduct->entitle = $request->entitle;
        $newProduct->enslug = $this->makeSlug($request->enslug);
        $newProduct->endes = $request->endes;
        $newProduct->encountry = $request->encity;
        $newProduct->enzone = $request->enzone;
        $newProduct->en_seo_title = $request->enmeta_title;
        $newProduct->en_seo_keywords = $request->enmeta_desc;
        $newProduct->en_seo_des = $request->enmeta_keywords;

        $newProduct->aratitle = $request->aratitle;
        $newProduct->araslug = $this->makeSlug($request->araslug);
        $newProduct->arades = $request->arades;
        $newProduct->fracountry = $request->aracity;
        $newProduct->frazone = $request->arazone;
        $newProduct->ara_seo_title = $request->arameta_title;
        $newProduct->ara_seo_keywords = $request->arameta_desc;
        $newProduct->ara_seo_des = $request->arameta_keywords;

        $newProduct->fratitle = $request->fratitle;
        $newProduct->fraslug = $this->makeSlug($request->fraslug);
        $newProduct->frades = $request->frades;
        $newProduct->aracountry = $request->fracity;
        $newProduct->arazone = $request->frazone;
        $newProduct->fra_seo_title = $request->frameta_title;
        $newProduct->fra_seo_keywords = $request->frameta_desc;
        $newProduct->fra_seo_des = $request->frameta_keywords;

        $newProduct->save();

        $attributes=explode(',', $request->input('attributes')[0]);
        $photos =explode(',',$request->input('photo_id')[0]);
        $newProduct->category()->sync($request->category);
        $newProduct->attributevalue()->sync($attributes);
        $newProduct->photos()->sync($photos);

        return redirect('administrator/product');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $product = Product::with(['attributevalue','category','photos'])->where('id',$id)->first();
        return view('backend.product.edit',compact('product'));
    }


    public function update(Request $request, $id)
    {
        $Product = Product::findOrFail($id);
        $Product->title = $request->name;
        $Product->sku = $this->generateSKU();
        $Product->slug = $this->makeSlug($request->slug);
        $Product->status = $request->status;
        $Product->price = $request->price;
        $Product->dis_price = $request->dis_price;
        $Product->description = $request->des;
        $Product->country = $request->city;
        $Product->zone = $request->zone;
        $Product->meta_des = $request->meta_desc;
        $Product->meta_title = $request->meta_title;
        $Product->meta_keywords = $request->meta_keywords;
        $Product->user_id = 1;

        $Product->entitle = $request->entitle;
        $Product->enslug = $this->makeSlug($request->enslug);
        $Product->endes = $request->endes;
        $Product->encountry = $request->encity;
        $Product->enzone= $request->enzone;
        $Product->en_seo_title = $request->enmeta_title;
        $Product->en_seo_keywords = $request->enmeta_desc;
        $Product->en_seo_des = $request->enmeta_keywords;

        $Product->aratitle = $request->fratitle;
        $Product->araslug = $this->makeSlug($request->fraslug);
        $Product->arades = $request->frades;
        $Product->fracountry = $request->fracity;
        $Product->frazone = $request->frazone;
        $Product->ara_seo_title = $request->frameta_title;
        $Product->ara_seo_keywords = $request->frameta_desc;
        $Product->ara_seo_des = $request->frameta_keywords;

        $Product->fratitle = $request->aratitle;
        $Product->fraslug = $this->makeSlug($request->araslug);
        $Product->frades = $request->arades;
        $Product->aracountry = $request->aracity;
        $Product->arazone = $request->arazone;
        $Product->fra_seo_title = $request->arameta_title;
        $Product->fra_seo_keywords = $request->arameta_desc;
        $Product->fra_seo_des = $request->arameta_keywords;

        $Product->save();

        $attributes=explode(',', $request->input('attributes')[0]);
        $photos =explode(',',$request->input('photo_id')[0]);
        $Product->category()->sync($request->category);
        $Product->attributevalue()->sync($attributes);
        $Product->photos()->sync($photos);

        return redirect('administrator/product');
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('administrator/product');

    }
}
