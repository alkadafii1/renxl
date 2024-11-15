<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // Read
    public function all() {
        $transactions = Transaction::all();
        echo $transactions;
    }

    public function find(int $id) {
        $transaction = Transaction::find($id);
        echo $transaction;
    }

    // Create
    public function insert(Request $request) {
        $transaction = new Transaction;
        $transaction->transaction_date = $request->transaction_date;
        $transaction->transaction_amount = $request->transaction_amount;
        $transaction->transaction_comment = $request->transaction_comment;
        $transaction->customer_id = $request->customer_id;
        $transaction->item_rental_id = $request->item_rental_id;
        $transaction->save();

        echo $transaction;
    }

    // Update
    public function update(int $id, Request $request) {
        $transaction = Transaction::find($id);
        $transaction->transaction_date = $request->transaction_date;
        $transaction->transaction_amount = $request->transaction_amount;
        $transaction->transaction_comment = $request->transaction_comment;
        $transaction->customer_id = $request->customer_id;
        $transaction->item_rental_id = $request->item_rental_id;
        $transaction->save();

        echo $transaction;
    }

    // Delete
    public function delete(int $id) {
        $transaction = Transaction::find($id);
        $transaction->delete();

        echo $transaction;
    }
}
