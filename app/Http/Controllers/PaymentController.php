<?php

namespace App\Http\Controllers;


use App\Models\Purchase;
use App\Traits\ResponseApi;
use Illuminate\Http\Request;
use App\Services\PaypalService;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class PaymentController extends Controller
{
    use ResponseApi;

    public function storePayment(Request $request)
    {

        $input = $request->all();
        // dd($input);
        $rules = [
            'total' => 'required',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Error de validacion', $validator->error()->all(), 422);

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
        return redirect()->route('page.index')->with('error', 'Ha ocurrido un error con el pago, vuelva a intentarlo');
    }


    public function _paymentMade ()
    {

        if (Auth::check()) {
            $user = Auth::user();
            $purchase = Purchase::where('user_id', $user->id)->where('status', 'Cart')->get();
            foreach ($purchase as $item) {
                $shop = Purchase::findOrFail($item->id);
                $shop->status = Purchase::STATUS_SOLD;
                $shop->save();
            }
            // return $this->sendResponse($shop, 'Pagado', 200);
        }

        // return $this->sendResponse('index purchase', 'Usuario no autenticado', 200);
    }
}
