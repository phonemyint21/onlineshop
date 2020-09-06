<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Brand;
use App\Category;
use App\Subcategory;

class ShopController extends Controller
{
    function showIndex(){

        $items = Item::all();
        $discountItems = Item::where('discount','>',0)->take(6)->get();
        $brands = Brand::take(6)->get();
        $categories = Category::take(8)->get();

    return view('index',compact('items','discountItems','brands','categories'));

    }
    function showPromotion (){
        $items = Item::all();
        return view('promotion',compact('items'));
    }
    
    public function filteritems($id)
      {
        $subcategory = Subcategory::find($id);
        $subcategory->setRelation('items', $subcategory->items()->paginate(3));
        return view('filteritems',compact('subcategory'));
      }


    function showLogin (){
        return view('login');
    }
    function showRegister (){
        return view('register');
    }
    function showShoppingcart (){
        return view('shoppingcart');
    }
    function showSubcategory (){
        return view('subcategory');
    }

    function showBrand($id)
    {
        $brand = Brand::find($id);
        return view('brand',compact('brand'));
    }

    function showItemdetail($id)
    {
        $item = Item::find($id);
        return view('itemdetail',compact('item'));
    }

    public function showcategory($id)
  {
    $category = Category::find($id);
    return view('category',compact('category'));
  }

}
