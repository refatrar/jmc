<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\CustomerRequest;
use App\Http\Resources\CustomerResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Exceptions\HttpResponseException;

class CustomerController extends Controller
{
    public function store(CustomerRequest $request)
    {
        try 
        {
            $result = Customer::create($request->all());
        
            return response()->json(['message' => 'Data Inserted', 'data' => new CustomerResource($result)], 200);
        }
        catch (Exception $errors) {
            throw new HttpResponseException(response()->json([
                'message' => $errors->getMessage(),
                'errors' => $errors
            ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
        }
    }
}
