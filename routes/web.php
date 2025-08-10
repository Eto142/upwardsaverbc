<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BankStatementController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\controllers\HomeController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\TradeController;
use App\Http\controllers\UserController;
use App\Http\controllers\UserManagementController;
use Illuminate\Support\Facades\Route;







// use App\Http\Controllers\BankStatementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home.homepage');
});
Route::get('/about', function () {
    return view('home.about');
});
Route::get('/contact', function () {
    return view('home.contact');
});



Route::get('/terms', function () {
    return view('home.terms');
});


Route::get('/faq', function () {
    return view('home.faq');
});



Route::get('/ultimate', function () {
    return view('home.ultimate');
});

Route::get('/health-saving', function () {
    return view('home.health-saving');
});

Route::get('/individual-retirement', function () {
    return view('home.individual-retirement');
});

Route::get('/overdraft-protection', function () {
    return view('home.overdraft-protection');
});

Route::get('/business-essential', function () {
    return view('home.business-essential');
});

Route::get('/business-savings', function () {
    return view('home.business-savings');
});


Route::get('/personal', function () {
    return view('home.personal');
});

Route::get('/business', function () {
    return view('home.business');
});

Route::get('/credit-card', function () {
    return view('home.credit-card');
});

Route::get('/loans', function () {
    return view('home.loans');
});

Route::get('/commercial-real', function () {
    return view('home.commercial-real');
});


;




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

 //Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
 

});


 



 
 
 
 Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard'); 
 Route::get('login', [CustomAuthController::class, 'index'])->name('login');
 Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
 Route::get('verify/{id}', [CustomAuthController::class, 'verify'])->name('verify');
 Route::post('email-verify', [CustomAuthController::class, 'emailVerify'])->name('code'); 
 Route::get('resend-code/{id}', [CustomAuthController::class, 'resendCode'])->name('resendCode'); 
 Route::get('register', [CustomAuthController::class, 'registration'])->name('register-user');
 Route::get('register', [CustomAuthController::class, 'registration'])->name('register');
 Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
 Route::get('log_out', [CustomAuthController::class, 'signOut'])->name('logout');
 Route::get('/logout', [CustomAuthController::class, 'logOut'])->name('logOut');
 Route::post('/user/logout', [CustomAuthController::class, 'UserlogOut'])->name('user.logout');
 
 

Route::post('send-mail', [SendMailController::class, 'sendMail'])->name('send-mail');
 
 //User Dashboard routes

 
// Route::post('/send-bank-statement', [BankStatementController::class, 'sendBankStatement'])->name('send.bank.statement');
 Route::post('send-bank-statement', [DashboardController::class, 'sendBankStatement'])->name('send.bank.statement');
 Route::get('withdrawal-completed', [DashboardController::class, 'Completed'])->name('withdrawal_completed');
 Route::get('card', [DashboardController::class, 'card'])->name('card');
 Route::post('upload-kyc', [DashboardController::class, 'uploadKyc'])->name('upload.kyc');
 Route::post('make-deposit', [DashboardController::class, 'makeDeposit'])->name('make.deposit');
 Route::post('requestcard-delivery', [DashboardController::class, 'requestCardDelivery'])->name('requestcard.delivery');
 Route::post('make-payment', [DashboardController::class, 'makePayment'])->name('make.payment');
 Route::get('transfer', [DashboardController::class, 'transferPage'])->name('transfer.page');
 Route::get('user-profile', [DashboardController::class, 'userProfile'])->name('user.profile');
 Route::post('save_nft', [DashboardController::class, 'saveNft'])->name('save.nft');
 Route::get('request-card/{user_id}', [DashboardController::class, 'requestCard'])->name('request.card');
 Route::get('change-password', [DashboardController::class, 'userChangePassword'])->name('user.change.password');
 Route::get('deposit', [DashboardController::class, 'deposit'])->name('deposit');
 Route::post('get-deposit', [DashboardController::class, 'getDeposit']);
 Route::post('make-cdeposit', [DashboardController::class, 'makeCDeposit']);
 Route::post('make-cryptodeposit', [DashboardController::class, 'makeCryptoDeposit'])->name('make.cryptodeposit');
 Route::get('make-deposit', [DashboardController::class, 'makeDeposit'])->name('make.deposit');
 Route::get('loan', [DashboardController::class, 'loan'])->name('loan');
  Route::get('paybills', [DashboardController::class, 'paybills'])->name('paybills');
 Route::get('loan-user', [DashboardController::class, 'LoanUser'])->name('loan-user');
 Route::post('make-loan', [DashboardController::class, 'makeLoan'])->name('make.loan');
 Route::post('continue-loan', [DashboardController::class, 'ContinueLoan'])->name('continue.loan');
 Route::get('notification', [DashboardController::class, 'notification'])->name('notification');
 Route::get('transactions', [DashboardController::class, 'transactions'])->name('transactions');
  Route::get('bankstatement', [DashboardController::class, 'bankstatement'])->name('bankstatement');
 Route::get('pending-transfer', [DashboardController::class, 'pendingTransfer'])->name('pending-transfer');
 Route::get('settings', [DashboardController::class, 'settings'])->name('settings');
 Route::get('make_withdrawal', [DashboardController::class, 'getWithdrawal'])->name('withdrawal');
 Route::get('profile', [DashboardController::class, 'profile'])->name('profile');
 Route::get('transaction-history', [DashboardController::class, 'transactionHistory'])->name('transaction.history');
 Route::get('view_invoice/{user_id}', [DashboardController::class, 'viewInvoice'])->name('view.invoice');
 Route::get('ticket', [DashboardController::class, 'ticket'])->name('ticket');
 Route::get('international-transfer', [DashboardController::class, 'internationalTransfer'])->name('international-transfer');
 Route::get('domestic-transfer', [DashboardController::class, 'domesticTransfer'])->name('domestic-transfer');
 Route::get('skrill', [DashboardController::class, 'skrill'])->name('skrill');
 Route::get('paypal', [DashboardController::class, 'paypal'])->name('paypal');
 Route::get('bank', [DashboardController::class, 'bank'])->name('bank');
 Route::get('crypto', [DashboardController::class, 'crypto'])->name('crypto');
  Route::get('cryptopage', [DashboardController::class, 'cryptopage'])->name('cryptopage');
 Route::get('crypto_deposit', [DashboardController::class, 'cryptoDeposit'])->name('crypto_deposit');
  Route::get('cfx', [DashboardController::class, 'Cfx'])->name('cfx');
 Route::get('card', [DashboardController::class, 'card'])->name('card');
 Route::get('card_withdrawal', [DashboardController::class, 'CardWithdrawal'])->name('card_withdrawal');
 Route::get('token', [DashboardController::class, 'token'])->name('token.page');
 Route::post('crypto-deposit', [DashboardController::class, 'cryptoDeposit'])->name('crypto.deposit');
 Route::post('transfer', [DashboardController::class, 'transferFunds'])->name('transfer-fund');
 Route::post('personal-details', [DashboardController::class, 'personalDetails'])->name('personal.details');
 Route::post('personal-dp', [DashboardController::class, 'personalDp'])->name('personal.dp');
 Route::post('transfer_funds', [DashboardController::class, 'transferFunds'])->name('transfer.funds');
 Route::post('paypal-transfer', [DashboardController::class, 'paypalTransfer'])->name('paypal.transfer');
 Route::post('skrill-transfer', [DashboardController::class, 'skrillTransfer'])->name('skrill.transfer');
 Route::post('crypto-transfer', [DashboardController::class, 'cryptoTransfer'])->name('crypto.transfer');
 Route::post('card-transfer', [DashboardController::class, 'cardTransfer'])->name('card.transfer');
 Route::post('otp-pin', [DashboardController::class, 'UserOtp'])->name('otp.pin');
 Route::post('bank-transfer', [DashboardController::class, 'bankTransfer'])->name('bank.transfer');

 Route::get('/bank-transfer-step1', [DashboardController::class, 'showStep1'])->name('bank.transfer.step1');
Route::post('/bank-transfer-step2', [DashboardController::class, 'showStep2'])->name('bank.transfer.step2');
Route::post('/bank-transfer-complete', [DashboardController::class, 'bankTransfer'])->name('bank.transfer');

 Route::post('/change-password', [DashboardController::class, 'updatePassword'])->name('update-password');
//  Route::post('bank-statement', [DashboardController::class, 'Userbankstatement'])->name('user.bankstatement');
Route::post('/send-bank-statement', [DashboardController::class, 'sendBankStatement'])->name('send.bank.statement');


//trade controller
// Route::post('/api/trade', [TradeController::class, 'store']);
Route::post('/trades', [TradeController::class, 'store'])->name('trades.store');
Route::get('/api/trades', [TradeController::class, 'history']);






Route::prefix('admin')->name('admin.')->group(function () {
Route::get('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login']);
Route::post('logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout');

Route::middleware('auth:admin')->group(function () {
Route::get('/dashboard', [AdminController::class, 'admindashboard'])->name('dashboard');

 // Admin Controller

 Route::get('manage-users', [AdminController::class, 'ManageUsers'])->name('manage.users');
 Route::get('users', [AdminController::class, 'users'])->name('view.users');
 Route::get('update_wallet', [AdminController::class, 'eth'])->name('update.wallet');
 Route::get('admin_upload_nft', [AdminController::class, 'uploadNft'])->name('admin.upload.nft');
 Route::get('uploaded-nfts', [AdminController::class, 'allNfts'])->name('users.uploaded.nft');
 Route::post('admin_save_nft', [AdminController::class, 'adminSaveNft'])->name('admin.save.nft');
 Route::get('user_transactions', [AdminController::class, 'usersTransaction'])->name('user.transaction');
 Route::get('user_investments', [AdminController::class, 'userInvestment'])->name('user.investment');
 Route::get('user_cards', [AdminController::class, 'userCards'])->name('user.cards');  
 Route::get('user_loans', [AdminController::class, 'usersLoans'])->name('user.loans');
 Route::get('admin_nft_market', [AdminController::class, 'nftMarket'])->name('admin.buy.nft');
 Route::post('admin_update_wallet', [AdminController::class, 'updateWallet'])->name('admin.save.wallet');
 Route::post('transfer', [AdminController::class, 'transferFunds'])->name('transfer-fund');
 Route::post('reflection-pin', [AdminController::class, 'reflectionPin'])->name('reflection');
 Route::get('/profile/{id}/', [AdminController::class, 'userProfile'])->name('profile');
//  Route::get('/delete/{id}', [AdminController::class, 'deleteUser'])->name('delete');
Route::delete('/delete/{id}', [AdminController::class, 'deleteUser'])->name('delete');
 Route::get('admin-change-password', [AdminController::class, 'adminChangePassword'])->name('admin.change.password');
 Route::match(['get', 'post'],'admin-update-password', [AdminController::class, 'adminUpdatePassword'])->name('update.password');
 Route::match(['get', 'post'], 'approve-id_card/{id}/', [AdminController::class, 'ApproveId'])->name('approve.id');
 Route::match(['get', 'post'], 'credit-user', [AdminController::class, 'creditUser'])->name('credit.user');
 Route::match(['get', 'post'], 'debit-user', [AdminController::class, 'debitUser'])->name('debit.user');
 Route::match(['get', 'post'], 'verify_user/{id}/', [AdminController::class, 'verifyUser'])->name('verify_user');
 Route::match(['get', 'post'], 'unfreeze_user/{id}/', [AdminController::class, 'unfreezeUser'])->name('unfreeze_user');
 Route::match(['get', 'post'], 'user_activity/{id}/', [AdminController::class, 'UserActivity'])->name('user_activity');
 Route::match(['get', 'post'], 'iuser_activity/{id}/', [AdminController::class, 'iUserActivity'])->name('iuser_activity');
 
 Route::match(['get', 'post'], 'user_block/{id}/', [AdminController::class, 'UserBlock'])->name('user_block');
 Route::match(['get', 'post'], 'iuser_block/{id}/', [AdminController::class, 'iUserBlock'])->name('iuser_block');
 
 Route::match(['get', 'post'], 'update_otp/{id}/', [AdminController::class, 'updateOtp'])->name('update.otp');
 Route::match(['get', 'post'], 'update_eligible/{id}/', [AdminController::class, 'updateEligibleLoan'])->name('update.eligible');
  Route::match(['get', 'post'], 'update_email/{id}/', [AdminController::class, 'updateEmail'])->name('update.email');
 Route::match(['get', 'post'], 'update_ssn/{id}/', [AdminController::class, 'updateSsn'])->name('update.ssn');



//  Route::match(['get', 'post'], 'approve-loan/{id}', [AdminController::class, 'ApproveLoan'])->name('approve-loan');





 Route::match(['get', 'post'], 'decline-loan/{id}', [AdminController::class, 'DeclineLoan'])->name('decline-loan');
  Route::post('/approve-loan/{id}/', [AdminController::class, 'ApproveLoan'])->name('approve-loan'); 
 Route::post('/decline-loan/{id}/', [AdminController::class, 'DeclineLoan'])->name('decline-loan'); 


// admin deposit control
//   Route::get('/approve-deposit/{id}/', [AdminController::class, 'ApproveDeposit']);
  Route::post('/approve-deposit/{id}', [AdminController::class, 'ApproveDeposit'])->name('approve-deposit');
  Route::post('/decline-deposit/{id}', [AdminController::class, 'DeclineDeposit'])->name('decline-deposit');


   Route::post('/approve-card/{id}', [AdminController::class, 'ApproveCard'])->name('approve-card');
//   Route::get('/approve-card/{id}/', [AdminController::class, 'ApproveCard']);

Route::post('/approve-transaction/{id}', [AdminController::class, 'ApproveTransaction'])->name('approve-transaction'); 
Route::post('/update-transaction-date/{id}', [AdminController::class, 'updateTransactionDate'])->name('update-transaction-date');
Route::post('/decline-transaction/{id}', [AdminController::class, 'DeclineTransaction'])->name('decline-transaction'); 
Route::post('/decline-card/{id}', [AdminController::class, 'DeclineCard'])->name('decline-card'); 



  //admin kyc controller
  Route::post('/accept-kyc/{id}', [AdminController::class, 'acceptKyc'])->name('accept-kyc'); 
  Route::post('/decline-kyc/{id}', [AdminController::class, 'rejectKyc'])->name('decline-kyc'); 


 // payment 
Route::get('/update-wallet',[AdminController::class, 'updateWallet'])->name('wallet');
Route::post('/choose-wallet',[AdminController::class, 'chooseWallet'])->name('choose.wallet');
Route::post('/update-trc',[AdminController::class, 'updateTrc'])->name('update-trc');
Route::post('/update-btc',[AdminController::class, 'updateBtc'])->name('update-btc');
Route::post('/update-eth',[AdminController::class, 'updateEth'])->name('update-eth');



  Route::get('/send-mail/{id}/', [AdminController::class, 'sendMail'])->name('send.mail');
  Route::get('/send-user-mail/{id}/', [AdminController::class, 'sendUserMail'])->name('send-user-mail');
  Route::get('send_mail', [AdminController::class, 'sendTestMail'])->name('user.mail');
  
  Route::post('/send-user-email', 'App\Http\Controllers\AdminController@sendUserEmail');
  
  
  Route::post('send-mail', [AdminController::class, 'sendMail'])->name('send.mail');
  
    // Route::get('send_mail', [AdminController::class, 'sendTestMail'])->name('user.mail');


    });
});

