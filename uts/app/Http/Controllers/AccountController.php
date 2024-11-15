<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    // Read
    public function all() {
        $accounts = Account::all();
        echo $accounts;
    }

    public function find(int $id) {
        $account = Account::find($id);
        echo $account;
    }

    // Create
    public function insert(Request $request) {
        $account = new Account;
        $account->account_name = $request->account_name;
        $account->account_details = $request->account_details;
        $account->customer_id = $request->customer_id;
        $account->save();

        echo $account;
    }

    // Update
    public function update(int $id, Request $request) {
        $account = Account::find($id);
        $account->account_name = $request->account_name;
        $account->account_details = $request->account_details;
        $account->customer_id = $request->customer_id;
        $account->save();

        echo $account;
    }

    // Delete
    public function delete(int $id) {
        $account = Account::find($id);
        $account->delete();

        echo $account;
    }
}
