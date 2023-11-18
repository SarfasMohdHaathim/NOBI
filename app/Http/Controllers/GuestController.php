<?php

namespace App\Http\Controllers;
use App\Models\Blog; 
use App\Models\Contact; 
use App\Models\Gallery; 
use App\Models\Product; 
use App\Models\ProjectImage;
use App\Models\Treatment; 
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid; 

class GuestController extends Controller
{
    public function blog() {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('guest.blog', ['blog' => $blogs]);
    }
    public function index() {
        return view('guest.index');
    }
    
    public function treatment_detail($treatment)
    {
        $treatment = Treatment::where('name', $treatment)->firstOrFail(); 
        $p_images = ProjectImage::where('treatment_id', $treatment->id)->get(); 
        
        return view('guest.treatment-inner', compact('treatment', 'p_images'));
    }
    public function contact_page() {
        return view('guest.contact');
    }
    public function about_page() {
        return view('guest.about');
    }
    public function product_page() {
        $products = Product::orderBy('created_at', 'desc')->paginate(2);
        return view('guest.product', ['products' => $products]);
    }
    public function gallery_page() {
        $galleries = Gallery::all()->sortByDesc('created_at');
        return view('guest.gallery', ['galleries' => $galleries]);
    }
    public function treatment_page() {
        $treatment = Treatment::all()->sortByDesc('created_at');
        return view('guest.treatment', ['treatments' => $treatment]);
    }
    public function services_page() {
        return view('guest.services');
    }
    public function storecontact(Request $request)
    {

        $contact = new Contact;
        $uuid = Uuid::uuid4()->toString();
        $contact->id = $uuid;
        $contact->firstname = $request->input('firstname');
        $contact->lastname = 'NULL';
        $contact->phone = $request->input('phone');
        $contact->emailaddress = $request->input('emailaddress');
        $contact->message = $request->input('msg');
        $contact->save();

        return redirect()->route('guest.contact')->with('success', 'Contact saved successfully');
    }

    public function contactdelete($id)
    {
        $contact = Contact::find($id);
        if ($contact) {
            $contact->delete();
        }
        return redirect()->route('home');
    }
}