<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Candidate;
use App\Models\Credits;
use App\Models\PersonLedger;
use App\Models\TransferMoney;
use App\Models\Debits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TransactionController extends Controller
{
    //Credits

    public function credits($candidate_id)
    {
        $candidate = Candidate::find($candidate_id);
        $credits = Credits::all();
        return view('admin.credits', compact('candidate', 'credits'));
    }

    public function creditcandidate($candidate_id)
    {
        $banks = Accounts::all();
        $candidate = Candidate::find($candidate_id);
        return view('admin.creditcandidate', compact('banks', 'candidate'));
    }

    public function postcredit(Request $request, $candidate_id)
    {
        $candidate = Candidate::find($candidate_id);

        if (!$candidate) {
            return redirect()->back()->with('error', 'Candidate not found');
        }
        $credit = new Credits;
        $credit->candidate_id = $candidate->id;
        $credit->credit_date = $request->input('credit_date');
        $credit->credit_amount = $request->input('credit_amount');
        $credit->credit_des = $request->input('credit_des');
        $credit->accounts_id = $request->input('accounts_id');
        $credit->credit_title = $request->input('credit_title');
        $credit->credit_ref = $request->input('credit_ref');

        $credit->save();
        return redirect()->back()->with('message', 'Credit added successfully!');

    }

    public function editcredit($id)
    {
        $banks = Accounts::all();
        $credit = Credits::find($id);

        if (!$credit) {
            return redirect()->route('creditcandidate')->with('error', 'Credit not found.');
        }

        return view('admin.editcredit', compact('credit', 'banks'));
    }

    public function updatecredit(Request $request, $id)
    {
        $credit = Credits::find($id);

        if (!$credit) {
            return redirect()->route('credits')->with('error', 'Credit not found.');
        }

        $credit->credit_date = $request->input('credit_date');
        $credit->credit_amount = $request->input('credit_amount');
        $credit->credit_des = $request->input('credit_des');
        $credit->accounts_id = $request->input('accounts_id');
        $credit->credit_title = $request->input('credit_title');
        $credit->credit_ref = $request->input('credit_ref');

        $credit->save();
        return redirect()->back();
    }

    public function deletecredit($id)
    {
        $credit = Credits::find($id);

        if (!$credit) {
            return redirect()->route('credits')->with('error', 'Company not found.');
        }

        $credit->delete();

        return redirect()->back();
    }

    //Debits

    public function debits($candidate_id)
    {
        $candidate = Candidate::find($candidate_id);
        $debits = Debits::all();
        return view('admin.debits', compact('candidate', 'debits'));
    }

    public function debitcandidate($candidate_id)
    {
        $banks = Accounts::all();
        $candidate = Candidate::find($candidate_id);
        return view('admin.debitcandidate', compact('banks', 'candidate'));
    }

    public function postdebit(Request $request, $candidate_id)
    {
        $candidate = Candidate::find($candidate_id);

        if (!$candidate) {
            return redirect()->back()->with('error', 'Candidate not found');
        }
        $debit = new Debits;
        $debit->candidate_id = $candidate->id;
        $debit->debit_date = $request->input('debit_date');
        $debit->debit_amount = $request->input('debit_amount');
        $debit->debit_des = $request->input('debit_des');
        $debit->accounts_id = $request->input('accounts_id');
        $debit->debit_title = $request->input('debit_title');
        $debit->debit_ref = $request->input('debit_ref');

        $debit->save();
        return redirect()->back()->with('message', 'Debit added successfully!');
    }

    public function editdebit($id)
    {
        $banks = Accounts::all();
        $debit = Debits::find($id);

        if (!$debit) {
            return redirect()->route('creditcandidate')->with('error', 'Credit not found.');
        }

        return view('admin.editdebit', compact('debit', 'banks'));
    }

    public function updatedebit(Request $request, $id)
    {
        $debit = Debits::find($id);

        if (!$debit) {
            return redirect()->route('debits')->with('error', 'Debit not found.');
        }

        $debit->debit_date = $request->input('debit_date');
        $debit->debit_amount = $request->input('debit_amount');
        $debit->debit_des = $request->input('debit_des');
        $debit->accounts_id = $request->input('accounts_id');
        $debit->debit_title = $request->input('debit_title');
        $debit->debit_ref = $request->input('debit_ref');

        $debit->save();
        return redirect()->back();
    }

    public function deletedebit($id)
    {
        $debit = Debits::find($id);

        if (!$debit) {
            return redirect()->route('debits')->with('error', 'Company not found.');
        }

        $debit->delete();

        return redirect()->back();
    }

    //Ledger

    public function showLedger($candidate_id)
    {
        $candidate = Candidate::with('credits', 'debits')->find($candidate_id);

        if (!$candidate) {
            return redirect()->back()->with('error', 'Candidate not found');
        }

        $credits = $candidate->credits;
        $debits = $candidate->debits;

        $transactions = [];
        foreach ($credits as $credit) {
            $credit->type = 'credit';
            $transactions[] = $credit;
        }
        foreach ($debits as $debit) {
            $debit->type = 'debit';
            $transactions[] = $debit;
        }

        usort($transactions, function ($a, $b) {
            return strcmp($a->credit_date ?? $a->debit_date, $b->credit_date ?? $b->debit_date);
        });

        $balance = 0;
        foreach ($transactions as $transaction) {
            if ($transaction->type === 'credit') {
                $balance += (float) str_replace(',', '', $transaction->credit_amount);
            } elseif ($transaction->type === 'debit') {
                $balance -= (float) str_replace(',', '', $transaction->debit_amount);
            }

            $transaction->balance = $balance;
        }

        return view('admin.ledger', compact('candidate', 'transactions'));
    }
    
    public function showStatement($accounts_id)
{
    $account = Accounts::with('credits', 'debits', 'expenses','personLedger')->find($accounts_id);

    if (!$account) {
        return redirect()->back()->with('error', 'Account not found');
    }

    $transactions = [];

    foreach ($account->credits as $credit) {
        $credit->type = 'credit';
        $transactions[] = $credit;
    }

    foreach ($account->debits as $debit) {
        $debit->type = 'debit';
        $transactions[] = $debit;
    }

    foreach ($account->expenses as $expense) {
        $expense->type = 'expense';
        $transactions[] = $expense;
    }
    
    

    usort($transactions, function ($a, $b) {
        $dateA = $a->credit_date ?? $a->debit_date ?? $a->expense_date  ;
        $dateB = $b->credit_date ?? $b->debit_date ?? $b->expense_date  ;

        return strtotime($dateB) - strtotime($dateA);
    });

    $balance = 0;

    foreach ($transactions as $transaction) {
        if ($transaction->type === 'credit') {
            $balance += (float) str_replace(',', '', $transaction->credit_amount);
        } elseif ($transaction->type === 'debit') {
            $balance -= (float) str_replace(',', '', $transaction->debit_amount);
        } elseif ($transaction->type === 'expense') {
            $balance -= (float) str_replace(',', '', $transaction->expense_price);
        }

        $transaction->balance = $balance;
    }

    return view('admin.ledger2', compact('account', 'transactions'));
}

 public function showpersonLedger()
{
    $personLedger = PersonLedger::with('accounts')->get();
    $balance = 0;

    foreach ($personLedger as $entry) {
        // Assuming $entry->credit_amount and $entry->debit_amount are the column names
        $entry->balance = $balance + $entry->credit_amount - $entry->debit_amount;
        $balance = $entry->balance;
    }

    return view('admin.ledger3', compact('personLedger', 'balance'));
}

public function showtransferMoney()
{
    $transferMoney = TransferMoney::with('accounts')->get();
    $balance = 0;

    foreach ($transferMoney as $entry) {
        // Assuming $entry->credit_amount and $entry->debit_amount are the column names
        $entry->balance = $balance + $entry->credit - $entry->debit;
        $balance = $entry->balance;
    }

    return view('admin.ledger4', compact('transferMoney', 'balance'));
}


   

};
