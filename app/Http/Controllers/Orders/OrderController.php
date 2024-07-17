<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\CreateAction ;
use App\Actions\UpdateAction;
use App\Models\IteamOrder;
use App\Models\Orders;
use App\Traits\ApiResponseTrait;

class OrderController extends Controller
{
    use ApiResponseTrait ;
    public function index()
    {
        return $this->ApiResponse(Orders::all() , 'all Orders ' , 200); 

    }

   
    public function store(Request $request , CreateAction $createAction)
    {
      $orders =  Orders::create($request->all()) ;
      $orderId = $orders->id;
      foreach ($request->items as $item) {
        IteamOrder::create([
            'orders_id' => $orderId ,
            'prodect_id' => $item['prodect_id'],
            'count' => $item['quantity'],
        ]);
      
      }

      return $this->ApiResponse($orders ,  'success store'  ,201);
    }

    public function show($id)
    {
        return $this->ApiResponse(Orders::find($id) , 'all Prodects' , 200); 
    }

    public function update(Request $request, string $id , UpdateAction $updateAction)
    {
        return $updateAction->execute('Orders' , $request->all() , $id);
    }


    public function destroy(string $id)
    {
        Orders::destroy($id);
        return $this->ApiResponse('' , 'done delete' , 204 ) ;
    }
}
