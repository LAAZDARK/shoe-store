<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Billing;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;




class PagesController extends Controller
{

    public function viewHome()
    {
        return view('pages.index');
    }

    public function viewIdentity()
    {
        return view('pages.identity');
    }

    public function viewLogin()
    {
        return view('pages.login');
    }

    public function viewRegister()
    {
        return view('pages.register');
    }

    public function viewProfile()
    {
        $user = Auth::user();
        return view('pages.profile', ['user' => $user]);
    }


    public function viewBilling()
    {
        $users = User::all();

        return view('page.billing', ['users' => $users]);
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

    public function billing($id){

        $user = User::findOrFail($id);
        // dd($user);
        // $prefix = 'comprobante_';

        $pdf = \PDF::loadView('page.proofOfPayment', ['user' => $user])->setPaper('DL', 'landscape');
        // $storage_path = 'app/public/PDF/' . $prefix . $user->id . '.pdf';
        // $pdf->save(storage_path($storage_path));
        // $response = 'storage/PDF/' . $prefix . $user->id . '.pdf';

        return $pdf->download('archivo.pdf');
    }


}
