<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $sliderdata=Product::limit(4)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata
        ]);
    }

    public function test()
    {
       return view('home.test');
    }

    public function param($id,$number)
    {
        //echo "parameter 1 :", $id;
        //echo "sum: " ,$id+$number;

        return view('home.test2',
            [
                'id' => $id,
                'number' => $number

            ]);
    }
        public function save(Request $request)
    {
        echo "save function";
        echo "Name: ", $_REQUEST['fname'];
        /*return view('home.test',
            [
            'fname'=>$_REQUEST("fname"),
            'lname'=>$_REQUEST("lname")

        ]); */

    }


}
