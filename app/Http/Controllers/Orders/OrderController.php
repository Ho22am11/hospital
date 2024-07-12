<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\CreateAction ;
use App\Models\IteamOrder;
use App\Models\Orders;
use App\Traits\ApiResponseTrait;

class OrderController extends Controller
{
    use ApiResponseTrait ;
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request , CreateAction $createAction)
    {
       

      $orders =  Orders::create($request->all()) ;
      $orderId = $orders->id;
      foreach ($request->items as $item) {
        IteamOrder::create([
            'orders_id' => $orderId ,
            'prodect_id' => $item['prodect_id'],
            'count' => $item['quantity'],
        ]);

        $createAction->storeInvoice('id_orders' ,  $orderId , $orders->total , $orders->patients_id );

      
      }

      return $this->ApiResponse($orders ,  'success store'  ,201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
