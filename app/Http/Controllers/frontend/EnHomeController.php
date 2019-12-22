<?php

namespace App\Http\Controllers\frontend;

use App\category;
use App\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;


class EnHomeController extends Controller
{
    public function index()
    {
        $pro = product::with(['category', 'user', 'attributevalue', 'photos'])->first();
        $product = product::orderBy('created_at', 'desc')->limit(9)->get();
        $product2 = product::orderBy('created_at', 'desc')->limit(6)->get();
        $search =product::with('category')->distinct()->get('encountry');
        $category =category::distinct()->get('enname');
        return view('frontend.En.index', compact(['product', 'product2', 'pro','search','category']));
    }

    public function service()
    {
        return view('frontend.En.service.service1');
    }

    public function info(){
        return view('frontend.En.info');
    }

    public function about(){
        return view('frontend.En.about');
    }

    public function contact(){
        return view('frontend.En.contact');
    }

    public function proj()
    {
        $product = product::orderBy('created_at', 'desc')->limit(9)->get();
        return view('frontend.En.projects.proj',compact('product'));
    }

    public function getProduct($slug)
    {
        $product = product::with(['category','user','attributevalue','photos'])->where('slug',$slug)->first();
        return view('frontend.En.projects.pro-self',compact('product'));
    }

    public function search(Request $request)
    {
        $price = $request->price;
        $room = $request->room;
        $zone = $request->zone;
        $type = $request->type;
        $encountry = $request->location;


        if ($price || $room) {
            if ($price == 1 || $room == 1) {
                $min = 50000;
                $max = 100000;
                $bedd = 1;
            }
            if ($price == 2 || $room == 2) {
                $min = 120000;
                $max = 150000;
                $bedd = 2;
            }
            if ($price == 3 || $room == 3) {
                $min = 150000;
                $max = 200000;
                $bedd = 3;
            }
            if ($price == 4 || $room == 4) {
                $min = 200000;
                $max = 250000;
                $bedd = 4;
            }
            if ($price == 5 || $room == 5) {
                $min = 250000;
                $max = 300000;
                $bedd = 5;
            }
            if ($price == 6) {
                $min = 300000;
                $max = 10000000000;
            }
        }
        if ($price) {
            $number = product::whereBetween('price', [$min, $max])->get();
        } else($number = false);
        if ($room) {
            $rom = product::with('attributevalue')->whereHas('attributevalue', function (Builder $q) use ($room) {
                $q->where('title', 'LIKE', '%' . $room . '%');
            })->get();
        } else($rom = false);
        if ($zone) {
            $zon = product::where('zone','zone')->get();
        } else($zon = null);
        if ($type) {
            $type = product::where('type', $type)->get();
        } else($type = false);
        if ($encountry) {
            $locate = product::where('encountry', $encountry)->get();
        } else($locate = false);


        return view('frontend.En.search', compact(['number', 'rom', 'type', 'locate','zon']));

    }

}
