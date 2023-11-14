<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\apliadjob;
use App\Models\banner;
use App\Models\Candidate;
use App\Models\categories;
use App\Models\category;
use App\Models\Company;
use App\Models\Expense;
use App\Models\PersonLedger;
use App\Models\TransferMoney;
use App\Models\Expenses;
use App\Models\ExpenseCategory;
use App\Models\job;
use App\Models\postjob;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Hash;

class AdminController extends Controller
{
    public function users()
    {
        $users = User::all();
        $userdetail = DB::table('jobs')
            ->join('apliadjobs', 'jobs.user_id', '=', 'apliadjobs.user_id')
            ->select('jobs.*', 'apliadjobs.*')->get();

        return view('admin.users', compact('users', 'userdetail'));

    }
    public function banners()
    {
        return view('admin.banners');
    }
    public function addbanners()
    {
        return view('admin.adddbanner');
    }

    public function submitbanner(Request $request)
    {
        $banner = new banner;
        $banner->title = $request->input('title');
        $banner->subtitle = $request->input('subtitle');
        $banner->buttonleft = $request->input('leftbutton');
        $banner->buttonright = $request->input('buttonright');
        $file = $request->file('video');
        $file->move('bannervideos', $file->getClientOriginalName());
        $file_name = $file->getClientOriginalName();
        $banner->video = $file_name;

        $banner->save();
        return view('admin.banners');
    }

    public function deletebanner($id)
    {
        $delbanner = banner::find($id);
        $delbanner->delete();
        return redirect()->back()->with('message', 'item deleted');
    }

    public function updatebanner(Request $request, $id)
    {
        $banner = banner::find($id);
        $banner->title = $request->input('title');
        $banner->subtitle = $request->input('subtitle');
        $banner->buttonleft = $request->input('leftbutton');
        $banner->buttonright = $request->input('buttonright');
        $file = $request->file('video');
        $file->move('bannervideos', $file->getClientOriginalName());
        $file_name = $file->getClientOriginalName();
        $banner->video = $file_name;

        $banner->save();
        return view('admin.banners');

    }

    public function updatebanners($id)
    {$updatebanner = banner::find($id);
        return view('admin.addbanners', compact('updatebanner'));
    }

    public function applicants()
    {
        return view('admin.applicants');
    }

    public function addapplicants()
    {
        return view('admin.addapplicants');
    }

    public function category()
    {$category = categories::all();
        return view('admin.category', compact('category'));
    }
    public function addcategory(Request $request)
    {
        $category = new categories;
        $category->category = $request->input('category');
        $category->save();
        return redirect()->back();
    }

    public function deletecategory($id)
    {
        $category = categories::find($id);
        $category->delete();
        return redirect()->back();
    }

    public function postjob()
    {
        $category = postjob::all();
        return view('admin.postjob', compact('category'));
    }
    public function postjobs()
    {$course = categories::all();
        return view('admin.postjobs', compact('course'));
    }
    public function addjob1(Request $request)
    {
        $job = new postjob;
        $job->title = $request->input('title');
        $job->requirment = $request->input('requirment');
        $job->category = $request->input('category');
        $job->description = $request->input('description');
        $job->salary = $request->input('salary');
        $job->vacancies = $request->input('vacancies');

        $image = $request->image ?? null;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('jobimage', $imagename);
            $job->image = $imagename;
        }

        $job->save();
        return redirect()->back()->with('message', 'Job added successfully!');

    }

    public function apliadjob(Request $request)
    {
        $userId = Auth::id();

        // Store the job information in the new table
        $jobApplication = new Apliadjob();
        $jobApplication->user_id = $request->input('userid');
        $jobApplication->job_id = $request->input('jobid');
        $jobApplication->title = $request->input('title');
        $jobApplication->requirment = $request->input('requirment');
        $jobApplication->category = $request->input('category');
        $jobApplication->description = $request->input('description');

        // Add any other relevant job information to the table fields
        $jobApplication->save();

        // Redirect or perform any other action after storing the application

        // Example redirect:
        return redirect()->back()->with('success', 'Application submitted successfully!');
    }

    public function deletejobuser($id)
    {
        $delete = apliadjob::find($id);
        $delete->delete();
        return redirect()->back();
    }

    public function jobapplication()
    {
        $jobs = DB::table('jobs')
            ->join('apliadjobs', 'jobs.user_id', '=', 'apliadjobs.user_id')
            ->select('jobs.*', 'apliadjobs.*')
            ->get();

        return view('admin.jobaplied', compact('jobs'));
    }

    public function userdetail($id)
    {
        $userdetail = DB::table('jobs')
            ->join('apliadjobs', 'jobs.user_id', '=', 'apliadjobs.user_id')
            ->select('jobs.*', 'apliadjobs.*')
            ->where('apliadjobs.id', $id) // Filter by user_id from the jobs table
            ->get();

        return view('admin.userdetail', compact('userdetail'));
    }
    
    public function userdescription($id)
    {
        $userdescription = DB::table('jobs')
            ->join('apliadjobs', 'jobs.user_id', '=', 'apliadjobs.user_id')
            ->select('jobs.*', 'apliadjobs.*')
            ->where('apliadjobs.id', $id) // Filter by user_id from the jobs table
            ->get();

        return view('admin.userdescription', compact('userdescription'));
    }

    public function deleteapplication($id)
    {
        $delete = job::find($id);
        $delete->delete();
        return redirect()->back();
    }
    public function updateStatus(Request $request, $table_id)
    {
        $job = apliadjob::findOrFail($table_id);
        $job->status = $request->input('status');

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('jobimage', $imagename);
            $job->file = $imagename;
        }

        $job->save();

        return redirect()->back()->with('success', 'Job application status updated successfully.');
    }

    public function updatestatusjob(Request $request, $id)
    {
        $jobs2 = apliadjob::find($id);
        $jobs2->avialible = $request->input('avialible');
        $jobs2->save();

        return redirect()->back();
    }

    public function GetUpdateCategory($id)
    {

        $updateCategory = categories::find($id);
        return view('admin.updatecategory', compact('updateCategory'));
    }

    public function UpdateCategory(Request $request, $id)
    {
        $category = categories::find($id);
        $category->category = $request->input('category');
        $category->update();

        return redirect('/category');
    }
    public function EditJob($id)
    {

        $job = postjob::find($id);
        return view('admin.editjob', compact('job'));
    }

    public function UpdateJob(Request $request, $id)
    {

        $postjob = postjob::find($id);

        if ($request->has('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/jobimage'), $filename);
            $postjob->image = $request->file('image')->getClientOriginalName();
        }
        $postjob->title = $request['title'];
        $postjob->requirment = $request['requirment'];
        $postjob->category = $request['category'];
        $postjob->salary = $request['salary'];
        $postjob->vacancies = $request['vacancies'];

        $postjob->save();

        return redirect('/postjob');

    }

    public function DeleteJob($id)
    {
        $job = postjob::find($id);
        $job->delete();

        return redirect()->back();
    }

    public function companies()
    {
        $companies = Company::with('expenses')->get();
        return view('admin.companies', compact('companies'));

    }
    
     public function expense()
    {
        $expense = Expense::with('accounts', 'expenseCategory')->get();
        return view('admin.expense', compact('expense'));

    }
    
    public function user()
    {
        $users = User::where('usertype', 'user')->get();
        return view('admin.user', compact('users'));

    }
    
     public function personLedger()
    {
        $personLedger = PersonLedger::with('accounts')->get();
        return view('admin.person_ledger', compact('personLedger'));

    }
    
     public function transferMoney()
    {
        $transferMoney = TransferMoney::with('accounts')->get();
        return view('admin.transfer_money', compact('transferMoney'));

    }
    
    public function expenseCategory()
    {
        $expenseCategories = ExpenseCategory::all();
        return view('admin.expense_category', compact('expenseCategories'));

    }

    public function addcompany()
    {
        return view('admin.addcompany');
    }
    
     public function adduser()
    {
        return view('admin.adduser');
    }
    
     public function addexpenseCategory()
    {
        return view('admin.add_expense_category');
    }
    
    public function addexpense()
    {
        $expenseCategory = ExpenseCategory::orderBy('id', 'DESC')->get();
        $accounts = Accounts::orderBy('id', 'DESC')->get();
        return view('admin.add_expense' , compact('expenseCategory', 'accounts'));
    }
    
     public function addpersonLedger()
    {
        $accounts = Accounts::orderBy('id', 'DESC')->get();
        return view('admin.add_person_ledger' , compact('accounts'));
    }
    
    public function addtransferMoney()
    {
        $accounts = Accounts::orderBy('id', 'DESC')->get();
        return view('admin.add_transfer_money' , compact('accounts'));
    }

    public function postcompany(Request $request)
    {
        $company = new Company;
        $company->company_name = $request->input('company_name');
        $company->country = $request->input('country');
        $company->amount = $request->input('amount');
        $company->charged_amount = $request->input('charged_amount');

        $company->save();
        return redirect()->back()->with('message', 'Company added successfully!');

    }
    
     public function postuser(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
         $user->phone_number = $request->input('phone_number');
        $user->password=Hash::make($request->password);

        $user->save();
        return redirect()->back()->with('message', 'User added successfully!');

    }
    
     public function postexpenseCategory(Request $request)
    {
        $expenseCategory = new ExpenseCategory;
        $expenseCategory->name = $request->input('name');
        $expenseCategory->code = $request->input('code');

        $expenseCategory->save();
            return redirect()->back()->with('message', 'Expense Category added successfully!');

    }
    
    public function postexpense(Request $request)
    {
        $expense = new Expense;
        $expense->accounts_id = $request->input('accounts_id');
        $expense->expense_category_id = $request->input('expense_category_id');
        $expense->title = $request->input('title');
        $expense->ref_id = $request->input('ref_id');
        $expense->description = $request->input('description');
        $expense->date = $request->input('date');
         $expense->expense_price = $request->input('expense_price');

        $expense->save();
            return redirect()->back()->with('message', 'Expense added successfully!');

    }
    
    public function postpersonLedger(Request $request)
    {
        $personLedger = new PersonLedger;
        $personLedger->accounts_id = $request->input('accounts_id');
        $personLedger->title = $request->input('title');
        $personLedger->ref_id = $request->input('ref_id');
        $personLedger->description = $request->input('description');
        $personLedger->date = $request->input('date');
        $personLedger->credit_amount = $request->input('credit_amount');
         $personLedger->debit_amount = $request->input('debit_amount');

        $personLedger->save();
            return redirect()->back()->with('message', 'Person Ledger added successfully!');

    }
    
     public function posttransferMoney(Request $request)
    {
        $transferMoney = new TransferMoney;
        $transferMoney->accounts_id = $request->input('accounts_id');
        $transferMoney->date = $request->input('date');
          $transferMoney->title = $request->input('title');
           $transferMoney->ref_id = $request->input('ref_id');
        $transferMoney->credit = $request->input('credit');
         $transferMoney->debit = $request->input('debit');
       

        $transferMoney->save();
            return redirect()->back()->with('message', 'Money transfered successfully!');

    }

    public function editcompany($id)
    {
        $company = Company::find($id);

        if (!$company) {
            return redirect()->route('companies')->with('error', 'Company not found.');
        }

        return view('admin.editcompany', compact('company'));
    }
    
    public function edituser($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('user')->with('error', 'User not found.');
        }

        return view('admin.edituser', compact('user'));
    }
    
    public function editexpenseCategory($id)
    {
        $expenseCategories = ExpenseCategory::find($id);

        if (!$expenseCategories) {
            return redirect()->route('expense_category')->with('error', 'Expense Category not found.');
        }

        return view('admin.edit_expense_category', compact('expenseCategories'));
    }
    
    public function editexpense($id)
    {
        $expense = Expense::find($id);
        $expenseCategory = ExpenseCategory::orderBy('id', 'DESC')->get();
        $accounts = Accounts::orderBy('id', 'DESC')->get();

        if (!$expense) {
            return redirect()->route('expense')->with('error', 'Expense not found.');
        }

        return view('admin.edit_expense', compact('expense','expenseCategory','accounts'));
    }
    
    public function editpersonLedger($id)
    {
        $personLedger = PersonLedger::find($id);
        $accounts = Accounts::orderBy('id', 'DESC')->get();

        if (!$personLedger) {
            return redirect()->route('personledger')->with('error', 'Person Ledger not found.');
        }

        return view('admin.edit_person_ledger', compact('personLedger','accounts'));
    }
    
     public function edittransferMoney($id)
    {
        $transferMoney = TransferMoney::find($id);
        $accounts = Accounts::orderBy('id', 'DESC')->get();

        if (!$transferMoney) {
            return redirect()->route('transferMoney')->with('error', 'Money not found.');
        }

        return view('admin.edit_transfer_money', compact('transferMoney','accounts', 'account'));
    }

    public function updatecompany(Request $request, $id)
    {
        $company = Company::find($id);

        if (!$company) {
            return redirect()->route('companies')->with('error', 'Company not found.');
        }

        $company->company_name = $request->input('company_name');
        $company->country = $request->input('country');
        $company->amount = $request->input('amount');
        $company->charged_amount = $request->input('charged_amount');

        $company->save();

        return redirect()->route('companies')->with('message', 'Company updated successfully!');
    }
    
     public function updateuser(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('user')->with('error', 'User not found.');
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
         $user->phone_number = $request->input('phone_number');
        if ($request->has('password'))
        {
        $user->password=Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('user')->with('message', 'User updated successfully!');
    }
    
     public function updateexpenseCategory(Request $request, $id)
    {
        $expenseCategory = ExpenseCategory::find($id);

        if (!$expenseCategory) {
            return redirect()->route('expense_category')->with('error', 'Expense Category not found.');
        }

        $expenseCategory->name = $request->input('name');
        $expenseCategory->code = $request->input('code');

        $expenseCategory->save();

        return redirect()->back()->with('message', 'Expense Category updated successfully!');
    }
    
    public function updateexpense(Request $request, $id)
    {
        $expense = Expense::find($id);

        if (!$expense) {
            return redirect()->route('expense')->with('error', 'Expense not found.');
        }

        $expense->accounts_id = $request->input('accounts_id');
        $expense->expense_category_id = $request->input('expense_category_id');
        $expense->title = $request->input('title');
        $expense->ref_id = $request->input('ref_id');
        $expense->description = $request->input('description');
        $expense->date = $request->input('date');
        $expense->expense_price = $request->input('expense_price');

        $expense->save();

        return redirect()->back()->with('message', 'Expense updated successfully!');
    }
    
    public function updatepersonLedger(Request $request, $id)
    {
        $personLedger = PersonLedger::find($id);

        if (!$personLedger) {
            return redirect()->route('personledger')->with('error', 'Person Ledger not found.');
        }

        $personLedger->accounts_id = $request->input('accounts_id');
        $personLedger->title = $request->input('title');
        $personLedger->ref_id = $request->input('ref_id');
        $personLedger->description = $request->input('description');
        $personLedger->date = $request->input('date');
        $personLedger->credit_amount = $request->input('credit_amount');
         $personLedger->debit_amount = $request->input('debit_amount');
         
         $personLedger->save();

        return redirect()->back()->with('message', 'Person Ledger updated successfully!');
    }
    
    public function updatetransferMoney(Request $request, $id)
    {
        $transferMoney = TransferMoney::find($id);

        if (!$transferMoney) {
            return redirect()->route('transferMoney')->with('error', 'Money not found.');
        }

        $transferMoney->accounts_id = $request->input('accounts_id');
         $transferMoney->date = $request->input('date');
          $transferMoney->title = $request->input('title');
           $transferMoney->ref_id = $request->input('ref_id');
        $transferMoney->credit = $request->input('credit');
        $transferMoney->debit = $request->input('debit');
      

        $transferMoney->save();

        return redirect()->back()->with('message', 'Money Transfer updated successfully!');
    }
    
    public function deletetransferMoney($id)
    {
        $transferMoney = TransferMoney::find($id);
        
        if (!$transferMoney) {
            return redirect()->route('transferMoney')->with('error', 'Money not found.');
        }

        $transferMoney->delete();

        return redirect()->back()->with('message', 'Money Transfer deleted successfully!');
    }
    
    public function deleteuser($id)
    {
        $user = User::find($id);
        
        if (!$user) {
            return redirect()->route('user')->with('error', 'User not found.');
        }

        $user->delete();

        return redirect()->back()->with('message', 'User deleted successfully!');
    }
    
     public function deleteexpense($id)
    {
        $expense = Expense::find($id);
        
        if (!$expense) {
            return redirect()->route('expense')->with('error', 'Expense not found.');
        }

        $expense->delete();

        return redirect()->back()->with('message', 'Expense deleted successfully!');
    }
    
    public function deletepersonLedger($id)
    {
        $personLedger = PersonLedger::find($id);
        
        if (!$personLedger) {
            return redirect()->route('personledger')->with('error', 'Person Ledger not found.');
        }

        $personLedger->delete();

        return redirect()->back()->with('message', 'Person Ledger deleted successfully!');
    }

    public function deleteexpenseCategory($id)
    {
        $expenseCategory = ExpenseCategory::find($id);
        
        if (!$expenseCategory) {
            return redirect()->route('expense_category')->with('error', 'Expense Category not found.');
        }

        $expenseCategory->delete();

        return redirect()->back()->with('message', 'Expense Category deleted successfully!');
    }
    
    public function deletecompany($id)
    {
        $company = Company::find($id);

        if (!$company) {
            return redirect()->route('companies')->with('error', 'Company not found.');
        }

        $company->delete();

        return redirect()->route('companies')->with('message', 'Company deleted successfully!');
    }

    public function expenses()
    {
        $expenses = Expenses::all();
        return view('admin.expenses', compact('expenses'));
    }

    public function addexpenses()
    {
        $companies = Company::all();
        return view('admin.addexpenses', compact('companies'));
    }

    public function postexpenses(Request $request)
    {
        $expense = new Expenses;
        $expense->company_n = $request->input('company_n');
        $expense->expense = $request->input('expense');
        $expense->expense_price = $request->input('expense_price');
        $expense->expense_id = $request->input('expense_id');

        $expense->save();
        return redirect()->back()->with('message', 'Expense added successfully!');

    }

    public function editexpenses($id)
    {
        $expense = Expenses::find($id);

        if (!$expense) {
            return redirect()->route('expense')->with('error', 'Expense not found.');
        }

        return view('admin.editexpenses', compact('expense'));
    }

    public function updateexpenses(Request $request, $id)
    {
        $expenses = Expenses::find($id);

        if (!$expenses) {
            return redirect()->route('expenses')->with('error', 'Expense not found.');
        }

        // Update the expense fields
        $expenses->company_n = $request->input('company_n');
        $expenses->expense = $request->input('expense');
        $expenses->expense_price = $request->input('expense_price');
        $expenses->expense_id = $request->input('expense_id');

        $expenses->save();

        return redirect()->route('expenses')->with('message', 'Expense updated successfully!');
    }

    public function deleteexpenses($id)
    {
        $expense = Expenses::find($id);

        if (!$expense) {
            return redirect()->route('expenses')->with('error', 'Expense not found.');
        }

        $expense->delete();

        return redirect()->route('expenses')->with('message', 'Expense deleted successfully!');
    }

    public function viewcompany($id)
    {
        $company = Company::find($id);

        if (!$company) {
            return redirect()->route('companies')->with('error', 'Company not found');
        }

        $expenses = $company->expenses;

        return view('admin.viewcompany', compact('company', 'expenses'));
    }

    public function accounts()
    {
        $accounts = Accounts::all();
        return view('admin.accounts', compact('accounts'));

    }
    
     public function bankStatement()
    {
        $accounts = Accounts::all();
        return view('admin.bankstatement', compact('accounts'));

    }

    public function addaccount()
    {
        return view('admin.addaccount');
    }

    public function postaccount(Request $request)
    {
        $accounts = new Accounts;
        $accounts->account = $request->input('account');
        $accounts->name = $request->input('name');
        $accounts->balance = $request->input('balance');
        $accounts->note = $request->input('note');

        $accounts->save();
        return redirect()->back()->with('message', 'Account added successfully!');

    }

    public function editaccount($id)
    {
        $accounts = Accounts::find($id);

        if (!$accounts) {
            return redirect()->route('accounts')->with('error', 'Account not found.');
        }

        return view('admin.editaccount', compact('accounts'));
    }

    public function updateaccount(Request $request, $id)
    {
        $accounts = Accounts::find($id);

        if (!$accounts) {
            return redirect()->route('accounts')->with('error', 'Account not found.');
        }

        // Update the expense fields
        $accounts->account = $request->input('account');
        $accounts->name = $request->input('name');
        $accounts->balance = $request->input('balance');
        $accounts->note = $request->input('note');

        $accounts->save();

        return redirect()->route('accounts')->with('message', 'Account updated successfully!');
    }

    public function deleteaccount($id)
    {
        $accounts = Accounts::find($id);

        if (!$accounts) {
            return redirect()->route('accounts')->with('error', 'Expense not found.');
        }

        $accounts->delete();

        return redirect()->route('accounts')->with('message', 'Account deleted successfully!');
    }

    public function candidate()
    {
        $candidates = Candidate::with('jobs','companies')->orderBy('id', 'DESC')->get();
        return view('admin.candidate', compact('candidates'));
    }
    
    //  public function ledger()
    // {
    //     $info = Candidate::all();
    //     return view('admin.candidate', compact('info'));
    // }

    public function addcandidate()
    {
        $jobs = job::orderBy('id','DESC')->get();
        $companies = Company::orderBy('id','DESC')->get();
        return view('admin.addcandidate', compact('jobs','companies'));
    }

    public function postcandidate(Request $request)
    {
        $candidates = new Candidate;
        $candidates->jobs_id = $request->input('jobs_id');
        $candidates->companies_id = $request->input('companies_id');
        $candidates->amount_ch = $request->input('amount_ch');
        $candidates->received = $request->input('received');

        $candidates->save();
       
       return redirect()->route('candidate')->with('message', 'Candidate added successfully!');

    }

    public function editcandidate($id)
    {
        $candidate = Candidate::find($id);
         $jobs = job::orderBy('id','DESC')->get();
        $companies = Company::orderBy('id','DESC')->get();

        if (!$candidate) {
            return redirect()->route('candidate')->with('error', 'Candidate not found.');
        }

        return view('admin.editcandidate', compact('candidate','jobs','companies')); 
    }

    public function updatecandidate(Request $request, $id)
    {
        $candidate = Candidate::find($id);

        if (!$candidate) {
            return redirect()->route('candidate')->with('error', 'Candidate not found.');
        }

        // Update the candidate's fields
        $candidate->jobs_id = $request->input('jobs_id');
        $candidate->companies_id = $request->input('companies_id');
        $candidate->amount_ch = $request->input('amount_ch');
        $candidate->received = $request->input('received');

        $candidate->save();

        return redirect()->route('candidate')->with('message', 'Candidate updated successfully!');
    }

   public function deleteCandidate($id)
{
    $candidate = Candidate::find($id);

    if (!$candidate) {
        return redirect()->route('candidate')->with('error', 'Candidate not found.');
    }

    // Manually delete related records
    $candidate->credits()->delete();
    $candidate->debits()->delete();

    // Now you can safely delete the candidate
    $candidate->delete();

    return redirect()->route('candidate')->with('message', 'Candidate deleted successfully!');
}


}
