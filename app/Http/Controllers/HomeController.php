<?php

namespace App\Http\Controllers;
use App\Models\Product; 
use App\Models\Contact; 
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid; 
use Intervention\Image\Facades\Image;
class HomeController extends Controller
{
    public function index()
    {
        $contact = Contact::orderBy('created_at', 'desc')->get();

        return view('home', ['contact' => $contact]);
    }
    public function product()
    {
        $product = Product::orderBy('created_at', 'desc')->get();

        return view('product', ['product' => $product]);
    }
    public function addtreatment()
    {
        return view('addtreatment');
    }
    public function treatment()
    {
        return view('treatment');
    }
    public function addproduct()
    {
        return view('addproduct');
    }
    public function createproduct(Request $request)
    {
        $croppedImageData = $request->input('croppedImage');
        if ($croppedImageData) {
            $croppedImage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $croppedImageData));
            $storagePath = 'uploads/product/';
            $fileName = $request->input('product_name'). '_'.time()  . '.jpg';
            
            $croppedImageInstance = Image::make($croppedImage);
            $croppedImageInstance->save(storage_path("app/public/{$storagePath}/{$fileName}"));
            $product = new Product();
            $uuid = Uuid::uuid4()->toString();
            $product->id = $uuid;
            $product->product_name =  $request->input('product_name');
            $product->product_thumbnail = 'uploads/product/'. $fileName ;
            $product->category = $request->input('category');
            $product->save();
        }else{
            return redirect()->back()->withInput()->withErrors(['error' => 'Please select and crop image.']);
        }

        return redirect()->route('adminproduct')->with('success', 'Product added successfully.');
    }
    public function productdestroy($id)
    {
    $p = Product::find($id);
    if ($p) {
        $p->delete();
        return redirect()->route('adminproduct')->with('success', 'Product deleted successfully.');
    }
    return redirect()->route('adminproduct')->with('error', 'Product not found.');
    }


}