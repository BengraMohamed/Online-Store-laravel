<?php
namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;
class ProductController extends Controller
{
// public static $products = [
// ["id"=>"1", "name"=>"TV", "description"=>"Best TV", "image" => "game.png", "price"=>"1000"],
// ["id"=>"2", "name"=>"iPhone", "description"=>"Best iPhone", "image" => "safe.png", "price"=>"999"],
// ["id"=>"3", "name"=>"Chromecast", "description"=>"Best Chromecast", "image" => "submarine.png", "price"=>"30"],
// ["id"=>"4", "name"=>"Glasses", "description"=>"Best Glasses", "image" => "game.png", "price"=>"100"]
// ];
public function index()
{
$viewData = [];
$viewData["title"] = "Products - B13 STORE";
$viewData["subtitle"] = "List of products";
$viewData["products"] = Product::all();
return view('product.index')->with("viewData", $viewData);
}
public function show($id)
{
$viewData = [];
$product = Product::findOrFail($id);
$viewData["title"] = $product->getName()." - B13 STORE";
$viewData["subtitle"] = $product->getName()." - Product information";
$viewData["product"] = $product;
return view('product.show')->with("viewData", $viewData);
}

public function store(Request $request)
{
$request->validate([
"name" => "required|max:255",
"description" => "required",
"price" => "required|numeric|gt:0",
'image' => 'image',
]);
$newProduct = new Product();
$newProduct->setName($request->input('name'));
$newProduct->setDescription($request->input('description'));
$newProduct->setPrice($request->input('price'));
$newProduct->setImage("game.png");
$newProduct->save();
return back();
}

}

