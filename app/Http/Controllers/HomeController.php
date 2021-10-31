<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Cart;
class HomeController extends Controller
{
    public function index()
    {
       
    	$data = food::all();
        $data2 = foodchef::all();

    	return view('home', compact("data", "data2"));
    }

    public function redirects()
    {
    	$data = food::all();
        $data2 = foodchef::all();
    	$usertype = Auth::user()->usertype;
    	if ($usertype=='1') {
    		return view('admin.adminhome');
    	}

    	else
    	{
             $user_id = Auth::id();
            $count = cart::where('user_id',$user_id)->count();
    		return view('home', compact('data', 'data2', "count"));
    	}
    }

    public function addcart($id, Request $request)
    {
        if (Auth::id()) {
            $data = new cart;
            $user_id=Auth::id();

            $foodid = $id;
            $quantity = $request->quantity;

            $data->user_id = $user_id;
            $data->food_id = $foodid;
            $data->quantity = $quantity;

            $data->save();


            return redirect()->back();

        }else
        {
            return redirect('/login');
        }
    }

       public function showcart(Request $request, $id)
    {
        $data2 = cart::select('*')->where('user_id', '=' , $id)->get();

        $data = cart::where('user_id',$id)->join('food', 'carts.food_id', '=', 'food.id')->get();

        $count = cart::where('user_id', $id)->count();
        return view('showcart', compact('count', 'data', 'data2'));

    }

    public function remove($id, Request $request)
    {
        $data = cart::find($id);

        $data->delete();
    }

}







