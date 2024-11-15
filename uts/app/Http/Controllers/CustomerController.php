<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Read
    public function all() {
        $customer = Customer::all();

        echo $customer;
    }

    public function find(int $id) {
        $customer = Customer::find($id);

        echo $customer;
    }

    // Create
    public function insert(Request $request) {
        $customer = new Customer;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->save();

        echo $customer;
    }

    // Update
    public function update(int $id, Request $request) {
        $customer = new Customer;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->save();

        echo $customer;
    }

    // Delete
    public function delete(int $id) {
        $customer = Customer::find($id);
        $customer->delete();

        echo $customer;
    }
}