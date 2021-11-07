<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Billing;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Purchase;
use Barryvdh\DomPDF\PDF;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;




class PagesController extends Controller
{

    public function viewHome()
    {
        $recommendations = Product::where('status', 1)->limit(3)->get();

        $top =  Product::where('status', 1)->inRandomOrder()->limit(5)->get();

        return view('pages.index', [
            'recommendations' => $recommendations,
            'top' => $top
        ]);
    }

    public function viewIdentity()
    {
        return view('pages.identity');
    }

    public function viewPrivacy()
    {
        return view('pages.privacy');
    }
    public function viewTerms()
    {
        return view('pages.terms');
    }
    public function viewAbout()
    {
        return view('pages.about');
    }

    // Contacto
    public function viewContact()
    {
        return view('pages.contact');
    }
    public function storeContact(Request $request)
    {
        $input = $request->all();

        $rules = array(
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Validator', $validator->errors()->all(), 422);

        $contact = new Contact();
        $contact->fill($input);
        $contact->save();

        Mail::to('laazfull@gmail.com')->send(new ContactMail($contact));


        return 'Mensaje enviado';
    }
    public function viewStore()
    {
        $products = Product::where('status', 1)->get();
        return view('pages.store', ['products' => $products]);
    }

    public function viewLogin()
    {
        return view('pages.login');
    }

    public function viewRegister()
    {
        return view('pages.register');
    }

    public function viewShoppingCart()
    {
        return view('pages.shoppingCart');
    }

    public function viewProductDetails($id)
    {
        $product = Product::findOrFail($id);

        return view('pages.productDetails', ['product' => $product]);
    }

    public function viewProfile()
    {
        $user = Auth::user();

        $billings = $user->billings()->with('purchases')->get();

        return view('pages.profile', ['user' => $user], ['billings' => $billings]);
    }


    public function viewBilling()
    {
        $users = User::all();

        return view('page.billing', ['users' => $users]);
    }

    public function viewCheckout()
    {
        return view('pages.checkout');
    }


    public function show($id){

        $user = user::findOrFail($id);

        return view('page.createBilling', ['user' => $user]);
    }

    public function store(Request $request){

        $input = $request->all();
        // dd($input);
        $user = user::findOrFail($input['id']);

        $rules = array(
            'name' => 'required',
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Validator', $validator->errors()->all(), 422);


        $billing = new Billing();
        $billing->fill($input);
        $billing->save();


        $user->billings()->save($billing);

        return redirect()->route("page.billing");
    }

    public function billing($id)
    {

        $user = Auth::user();


        $billings = $user->billings()->where('id', $id)->with('purchases')->get();
        dd($billings);
        // $prefix = 'comprobante_';

        $pdf = \PDF::loadView('pages.proofOfPayment', ['user' => $user])->setPaper('DL', 'landscape');
        // $storage_path = 'app/public/PDF/' . $prefix . $user->id . '.pdf';
        // $pdf->save(storage_path($storage_path));
        // $response = 'storage/PDF/' . $prefix . $user->id . '.pdf';

        return $pdf->download('archivo.pdf');
    }


}
