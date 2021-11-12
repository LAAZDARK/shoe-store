<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Billing;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Purchase;
use Barryvdh\DomPDF\PDF;
use App\Mail\ContactMail;
use App\Traits\ResponseApi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;




class PagesController extends Controller
{
    use ResponseApi;

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

    public function listProduct()
    {
        $products = Product::where('status', 1)->get();

        foreach ($products as $product) {
            $product['url'] = url("detalles/$product->id");
        }

        return $this->sendResponse($products, 'Lista de productos', 200);
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
        $recommendations = Product::where('status', 1)->limit(3)->get();

        return view('pages.productDetails',
        [
            'product' => $product,
            'recommendations' => $recommendations
        ]);
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


        $billings = Billing::where('id', $id)->where('user_id', $user->id)->with('purchases')->get();

        $pdf = \PDF::loadView('pages.proofOfPayment', ['billings' => $billings])->setPaper(array(0, 0, 595, 841), 'portrait');


        return $pdf->download('archivo.pdf');
    }

    /**
     * Vista para el registro de productos en la base de datos
     * @return view('pages.product')
     */

    public function viewProduct()
    {
        return view('pages.product');
    }

    /**
     * Registra los productos en la db
     *
     * @param \Illuminate\Http\Request  $request
     * @return Object $product
     */
    public function storeProduct(Request $request): Object
    {
        $input = $request->all();

        $rules = array(
            'title' => 'required',
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Validator', $validator->errors()->all(), 422);


        $product = new Product();
        $product->fill($input);
        $product->save();


        return $this->sendResponse($product, 'Se agrego correctamente', 200);
    }


}
