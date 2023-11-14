<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use App\Http\Controllers\PhoneVerificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

//View
Route::get('/index', [ViewController::class, 'index']);
Route::get('/redirect', [ViewController::class, 'redirect']);
Route::get('/editprofile' , [ProfileController::class , 'profile'])->name('editprofile');
Route::get('/editprofiles' , [ProfileController::class , 'userprofiles'])->name('editprofiles');
Route::post('/updateProfile/{id}', [ProfileController::class, 'updateProfile'])->name('updateProfile');
Route::post('/updateProfiles/{id}', [ProfileController::class, 'updateProfiles'])->name('updateProfiles');
Route::get('/', [ViewController::class, 'index']);
Route::get('/about', [ViewController::class, 'about']);
Route::get('/contact', [ViewController::class, 'contact']);
Route::get('/services', [ViewController::class, 'services']);
Route::get('/industries', [ViewController::class, 'industries']);
Route::get('/ourachivements', [ViewController::class, 'ourachivements']);
Route::get('/ourgallery', [ViewController::class, 'ourgallery']);
Route::get('/ourteam', [ViewController::class, 'ourteam']);
Route::get('/vision', [ViewController::class, 'vision']);
Route::get('/manpower', [ViewController::class, 'manpower']);
Route::get('/ouroffice', [ViewController::class, 'ouroffice']);
Route::get('/newpage', [ViewController::class, 'newpage']);
Route::get('/jobs', [ViewController::class, 'jobs']);

Route::get('/recruiter', [ViewController::class, 'recruiter']);
Route::get('/trading_contrading', [ViewController::class, 'trading_contrading']);
Route::get('/international_recruiter', [ViewController::class, 'international_recruiter']);
Route::get('/trading_testing', [ViewController::class, 'trading_testing']);
Route::get('/visa_payroll', [ViewController::class, 'visa_payroll']);
Route::get('/logistic_mobility', [ViewController::class, 'logistic_mobility']);
Route::get('/profile', [ViewController::class, 'profile']);
Route::get('/dashboard1', [ViewController::class, 'dashboard1']);

Route::get('/quality', [ViewController::class, 'quality']);
Route::get('/facilities', [ViewController::class, 'facilities']);

// ...
Route::post('/addjob', [HomeController::class, 'addJob'])->name('addJob');
Route::get('/verify-job-otp', [HomeController::class, 'verifyJobOtp'])->name('verifyJobOtp');
Route::post('/submitjob', [HomeController::class, 'submitJob'])->name('submitJob');

// Admin Controller //
Route::get('/users', [AdminController::class, 'users']);

// banners admin side //
Route::get('/banners', [AdminController::class, 'banners']);
Route::get('/addbanners', [AdminController::class, 'addbanners']);
Route::post('/submitbanner', [AdminController::class, 'submitbanner']);
Route::get('/deletebanner/{id}', [AdminController::class, 'deletebanner']);
Route::get('/updatebanners/{id}', [AdminController::class, 'updatebanners']);
Route::post('/updatebanner/{id}', [AdminController::class, 'updatebanner']);

// category//
Route::get('/category', [AdminController::class, 'category']);
Route::get('/addcategory', [AdminController::class, 'addcategory']);
Route::get('/editcategory/{id}', [AdminController::class, 'editcategory']);
Route::get('/postjob', [AdminController::class, 'postjob']);
Route::get('/postjobs', [AdminController::class, 'postjobs']);
Route::post('/addjob1', [AdminController::class, 'addjob1']);
Route::get('/deletejobuser/{id}', [AdminController::class, 'deletejobuser']);
Route::get('/jobapplication', [AdminController::class, 'jobapplication']);
Route::get('/deleteapplication/{id}', [AdminController::class, 'deleteapplication']);
Route::post('/updatestatus/{table_id}', [AdminController::class, 'updatestatus']);
Route::post('/apliadjob', [AdminController::class, 'apliadjob']);
Route::get('/userdetail/{id}', [AdminController::class, 'userdetail']);
Route::get('/userdescription/{id}', [AdminController::class, 'userdescription']);
Route::get('/editpost/{id}', [AdminController::class, 'editpost']);
Route::post('/updatestatusjob/{id}', [AdminController::class, 'updatestatusjob']);

//Applicants
Route::get('/applicants', [AdminController::class, 'applicants'])->name('applicants');
Route::get('/addapplicants', [AdminController::class, 'addapplicants']);

//Companies
Route::get('/companies', [AdminController::class, 'companies'])->name('companies');
Route::get('/addcompany', [AdminController::class, 'addcompany']);
Route::post('/postcompany', [AdminController::class, 'postcompany']);
Route::get('/editcompany/{id}', [AdminController::class, 'editcompany'])->name('editcompany');
Route::post('/updatecompany/{id}', [AdminController::class, 'updatecompany'])->name('updatecompany');
Route::get('/deletecompany/{id}', [AdminController::class, 'deletecompany'])->name('deletecompany');
Route::get('/viewcompany/{id}', [AdminController::class, 'viewcompany'])->name('viewcompany');

Route::get('/user', [AdminController::class, 'user'])->name('user');
Route::get('/adduser', [AdminController::class, 'adduser']);
Route::post('/postuser', [AdminController::class, 'postuser'])->name('postuser');
Route::get('/edituser/{id}', [AdminController::class, 'edituser'])->name('edituser');
Route::post('/updateuser/{id}', [AdminController::class, 'updateuser'])->name('updateuser');
Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser'])->name('deleteuser');

Route::get('/expensecategory', [AdminController::class, 'expenseCategory'])->name('expensecategory');
Route::get('/addexpensecategory', [AdminController::class, 'addexpenseCategory'])->name('addexpensecategory');
Route::post('/postexpensecategory', [AdminController::class, 'postexpenseCategory'])->name('postexpensecategory');
Route::get('/editexpensecategory/{id}', [AdminController::class, 'editexpenseCategory'])->name('editexpensecategory');
Route::post('/updateexpensecategory/{id}', [AdminController::class, 'updateexpenseCategory'])->name('updateexpensecategory');
Route::get('/deleteexpensecategory/{id}', [AdminController::class, 'deleteexpenseCategory'])->name('deleteexpensecategory');

Route::get('/expense', [AdminController::class, 'expense'])->name('expense');
Route::get('/addexpense', [AdminController::class, 'addexpense'])->name('addexpense');
Route::post('/postexpense', [AdminController::class, 'postexpense'])->name('postexpense');
Route::get('/editexpense/{id}', [AdminController::class, 'editexpense'])->name('editexpense');
Route::post('/updateexpense/{id}', [AdminController::class, 'updateexpense'])->name('updateexpense');
Route::get('/deleteexpense/{id}', [AdminController::class, 'deleteexpense'])->name('deleteexpense');

Route::get('/personledger', [AdminController::class, 'personLedger'])->name('personledger');
Route::get('/addpersonledger', [AdminController::class, 'addpersonLedger'])->name('addpersonledger');
Route::post('/postpersonledger', [AdminController::class, 'postpersonLedger'])->name('postpersonledger');
Route::get('/editpersonledger/{id}', [AdminController::class, 'editpersonLedger'])->name('editpersonledger');
Route::post('/updatepersonledger/{id}', [AdminController::class, 'updatepersonLedger'])->name('updatepersonledger');
Route::get('/deletepersonledger/{id}', [AdminController::class, 'deletepersonLedger'])->name('deletepersonledger');

Route::get('/transferMoney', [AdminController::class, 'transferMoney'])->name('transferMoney');
Route::get('/addtransferMoney', [AdminController::class, 'addtransferMoney'])->name('addtransferMoney');
Route::post('/posttransferMoney', [AdminController::class, 'posttransferMoney'])->name('posttransferMoney');
Route::get('/edittransferMoney/{id}', [AdminController::class, 'edittransferMoney'])->name('edittransferMoney');
Route::post('/updatetransferMoney/{id}', [AdminController::class, 'updatetransferMoney'])->name('updatetransferMoney');
Route::get('/deletetransferMoney/{id}', [AdminController::class, 'deletetransferMoney'])->name('deletetransferMoney');

//Company Expenses
Route::get('/expenses', [AdminController::class, 'expenses'])->name('expenses');
Route::get('/addexpenses', [AdminController::class, 'addexpenses'])->name('addexpenses');
Route::post('/postexpenses', [AdminController::class, 'postexpenses'])->name('postexpenses');
Route::get('/editexpenses/{id}', [AdminController::class, 'editexpenses'])->name('editexpenses');
Route::post('/updateexpenses/{id}', [AdminController::class, 'updateexpenses'])->name('updateexpenses');
Route::get('/deleteexpenses/{id}', [AdminController::class, 'deleteexpenses'])->name('deleteexpenses');

//Accounts
Route::get('/accounts', [AdminController::class, 'accounts'])->name('accounts');
Route::get('/addaccount', [AdminController::class, 'addaccount'])->name('addaccount');
Route::post('/postaccount', [AdminController::class, 'postaccount'])->name('postaccount');
Route::get('/editaccount/{id}', [AdminController::class, 'editaccount'])->name('editaccount');
Route::post('/updateaccount/{id}', [AdminController::class, 'updateaccount'])->name('updateaccount');
Route::get('/deleteaccount/{id}', [AdminController::class, 'deleteaccount'])->name('deleteaccount');
Route::get('/bank_statement', [AdminController::class, 'bankStatement'])->name('bankStatement');

//Transfer Money
Route::get('/transfer', [AdminController::class, 'transfer'])->name('transfer');
Route::get('/addtransfer', [AdminController::class, 'addtransfer'])->name('addtransfer');
Route::post('/posttransfer', [AdminController::class, 'posttransfer'])->name('posttransfer');
Route::get('/edittransfer/{id}', [AdminController::class, 'edittransfer'])->name('edittransfer');
Route::post('/updatetransfer/{id}', [AdminController::class, 'updatetransfer'])->name('updatetransfer');
Route::get('/deletetransfer/{id}', [AdminController::class, 'deletetransfer'])->name('deletetransfer');

//Candidates
Route::get('/candidate', [AdminController::class, 'candidate'])->name('candidate');
Route::get('/addcandidate', [AdminController::class, 'addcandidate'])->name('addcandidate');
Route::post('/postcandidate', [AdminController::class, 'postcandidate'])->name('postcandidate');
Route::get('/editcandidate/{id}', [AdminController::class, 'editcandidate'])->name('editcandidate');
Route::post('/updatecandidate{id}', [AdminController::class, 'updatecandidate'])->name('updatecandidate');
Route::get('/deletecandidate/{id}', [AdminController::class, 'deletecandidate'])->name('deletecandidate');

//Credits
Route::get('/credits/{id}', [TransactionController::class, 'credits'])->name('credits');
Route::get('/creditcandidate/{id}', [TransactionController::class, 'creditcandidate'])->name('creditcandidate');
Route::post('/postcredit/{id}', [TransactionController::class, 'postcredit'])->name('postcredit');
Route::get('/credits/editcredit/{id}', [TransactionController::class, 'editcredit'])->name('editcredit');
Route::post('/credits/updatecredit/{id}', [TransactionController::class, 'updatecredit'])->name('updatecredit');
Route::get('/credits/deletecredit/{id}', [TransactionController::class, 'deletecredit'])->name('deletecredit');

//Debits
Route::get('/debits/{id}', [TransactionController::class, 'debits'])->name('debits');
Route::get('/debitcandidate/{id}', [TransactionController::class, 'debitcandidate'])->name('debitcandidate');
Route::post('/postdebit/{id}', [TransactionController::class, 'postdebit'])->name('postdebit');
Route::get('/debits/editdebit/{id}', [TransactionController::class, 'editdebit'])->name('editdebit');
Route::post('/debits/updatedebit/{id}', [TransactionController::class, 'updatedebit'])->name('updatedebit');
Route::get('/credits/deletedebit/{id}', [TransactionController::class, 'deletedebit'])->name('deletedebit');

//View Ledger
Route::get('/ledger/{candidate_id}', [TransactionController::class, 'showLedger'])->name('ledger');
Route::get('/statement/{accounts_id}', [TransactionController::class, 'showStatement'])->name('showStatement');

Route::get('/personledger/{accounts_id}', [TransactionController::class, 'showpersonLedger'])->name('personledger');
Route::get('/transfermoney/{accounts_id}', [TransactionController::class, 'showtransferMoney'])->name('transfermoney');



//Account Statement
Route::get('/statement', [TransactionController::class, 'accountStatement'])->name('statement');

// edit category //
Route::get('/updatecategory/{id}', [AdminController::class, 'GetUpdateCategory']);
Route::post('/updatedcategory/{id}', [AdminController::class, 'UpdateCategory']);
Route::get('/deletecategory/{id}', [AdminController::class, 'deletecategory']);

// edit postjobs //

Route::get('/editjob/{id}', [AdminController::class, 'EditJob']);
Route::post('/editjobs/{id}', [AdminController::class, 'UpdateJob']);
Route::get('/deletejob/{id}', [AdminController::class, 'DeleteJob']);

// indutries views in view controller //
Route::get('/civil_contruction', [ViewController::class, 'civil_contruction']);
Route::get('/Petrochemical', [ViewController::class, 'Petrochemical']);
Route::get('/Medical_Services', [ViewController::class, 'Medical_Services']);
Route::get('/Agriculture', [ViewController::class, 'Agriculture']);
Route::get('/Security', [ViewController::class, 'Security']);
Route::get('/Information_Technology', [ViewController::class, 'Information_Technology']);
Route::get('/public_Utilities', [ViewController::class, 'public_Utilities']);
Route::get('/Hospitality', [ViewController::class, 'Hospitality']);
Route::get('/Logistics', [ViewController::class, 'Logistics']);
Route::get('/Administration', [ViewController::class, 'Administration']);

// ... other routes ...

// Password reset update route
Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.update');


