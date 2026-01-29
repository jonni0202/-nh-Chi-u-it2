<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $title = "Product List";
        return view("product.index", [
            "title" => $title,

            "products" => [
                [
                    "id" => 1,
                    'name' => "Product A",
                    'price' => 100,
                    'description' => "Description for Product A"
                ],
                [
                    "id" => 2,
                    'name' => "Product B",
                    'price' => 200,
                    'description' => "Description for Product B"
                ],
                [
                    "id" => 3,
                    'name' => "Product C",
                    'price' => 300,
                    'description' => "Description for Product C"
                ],
            ]
        ]);
    }

    public function getDetail($id = 123)
    {
        return view("product.product-detail", [
            "id" => $id
        ]);
    }

    public function create()
    {
        return view("product.add");
    }

    public function store(Request $request)
    {
        var_dump($request->input('name'));
    }

    public function login()
    {
        return view("product.login");
    }

    public function checkLogin(Request $request)
    {
        if ($request->input('username') == 'thanhtung' && $request->input('password') == '123456') {
            return "Login successful";
        } else {
            return "Login failed";
        }
    }
    public function register()
    {
        return view("product.register");
    }

    public function checkRegister()
    {

        // Sau khi đăng ký xong, chuyển hướng sang trang login
        return redirect('/product/login')->with('success', 'Đăng ký thành công! Vui lòng đăng nhập.');
    }
}
