<?php

namespace App\Http\Controllers;

use App\Models\Product;

use App\Models\Purchase;
use App\Traits\ResponseApi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class PurchaseController extends Controller
{
    use ResponseApi;


    public function getShop() {

        $product = Product::all();

        dd($product);

        return $this->sendResponse($product, 'Lista de todos los productos');
    }

    public function index()
    {
        // if (Auth::check()) {
        //     $user = Auth::user();
        //     $product=[];
        //     $purchase = Purchase::where('user_id', $user->id)->get();
        //     foreach ($purchase as $item) {
        //         $product[] = Product::where('id', $item->product_id)->get();
        //     }


        //     return $this->sendResponse($product, 'Se agrego correctamente', 200);
        // }

        if (Auth::check()) {
            $user = Auth::user();

            // $data = $user->purchase;

            // Plural
            $product = DB::table('products')
                ->leftJoin('purchase', 'products.id', '=', 'purchase.product_id')
                ->where('purchase.user_id', $user->id)
                ->where('purchase.status', 'Cart')
                ->get();


            return $this->sendResponse($product, 'Lista de porductos seleccionados', 200);
        }

        return $this->sendResponse($product, 'Usuario no autenticado', 200);
    }


    public function sumTotalProduct()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $total=0;
            $purchase = Purchase::where('user_id', $user->id)->where('status', 'Cart')->get();
            foreach ($purchase as $item) {
                $total += Product::where('id', $item->product_id)->sum('price');
            }
            return $this->sendResponse($total, 'Suma total de productos', 200);
        }

        return $this->sendResponse('index purchase', 'Usuario no autenticado', 200);
    }

    public function conutProducts()
    {
        if (Auth::check()) {
            $user = Auth::user();

            $count = Purchase::where('user_id', $user->id)->where('status', 'Cart')->count();

            return $this->sendResponse($count, 'Se agrego correctamente', 200);
        }

        return $this->sendResponse('index purchase', 'Usuario no autenticado', 200);
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        // dd($user);
        $input = $request->all();
        $rules = [
            'product_id' => 'required',
            'size' => 'required',
            'price' => 'required'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) return $this->sendError('Error de validacion', $validator->error()->all(), 422);

        $purchase = new Purchase();
        $purchase->productName = $request->get('productName');
        $purchase->size = $request->get('size');
        $purchase->user_id = $user->id;
        $purchase->product_id = $request->get('product_id');
        $purchase->status = Purchase::STATUS_CART;
        $purchase->price = $request->get('price');
        $purchase->save();

        return $this->sendResponse('store purchase', 'Se agrego correctamente', 200);
    }

    public function destroy($id)
    {
        $purchase = Purchase::findOrFail($id);

        $purchase->delete();

        return $this->sendResponse(true, 'se ha elimindao el articulo seleccionado');
    }
}
