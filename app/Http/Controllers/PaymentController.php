<?php

namespace App\Http\Controllers;


use App\Models\Billing;
use App\Models\Purchase;
use App\Mail\PurchaseMail;
use App\Traits\ResponseApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Services\PaypalService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class PaymentController extends Controller
{
    use ResponseApi;

    public function storePayment(Request $request)
    {

        $input = $request->all();
        $user = $request->user();
        // dd($input);
        $rules = [
            'total' => 'required',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Error de validacion', $validator->error()->all(), 422);

        $billing = new Billing();
        $billing->name = $user->name;
        $billing->email = $user->email;
        $billing->address = $user->address;
        $billing->rfc = $user->rfc;
        $billing->phone = $user->phone;
        $billing->comments = $input['comments'] || null;
        $billing->status = Billing::STATUS_FALSE;
        $billing->save();

        $user->billings()->save($billing);

        $paymentPlatform = resolve(PaypalService::class);

        return $paymentPlatform->handlePayment($request);
    }

    public function approval()
    {
        $paymentPlatform = resolve(PaypalService::class);

        $this->_paymentMade();

        return $paymentPlatform->handleApproval();

    }

    public function cancelled ()
    {
        return redirect()->route('page.perfil')->with('error', 'Ha ocurrido un error con el pago, vuelva a intentarlo');
    }


    public function _paymentMade ()
    {

        if (Auth::check()) {
            $user = Auth::user();

            $billing = Billing::where('user_id', $user->id)->where('status', 'False')->orderBy('id', 'desc')->first();

            $purchase = Purchase::where('user_id', $user->id)->where('status', 'Cart')->get();
            foreach ($purchase as $item) {

                $shop = Purchase::findOrFail($item->id);
                $shop->status = Purchase::STATUS_SOLD;
                $shop->billing_id = $billing->id;
                $shop->save();

            }
            $billing->status = Billing::STATUS_TRUE;
            $billing->save();

            Mail::to('laazfull@gmail.com')->send(new PurchaseMail($user));

        }
    }
}
