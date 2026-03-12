<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController as UserLoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\TradeController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Laravel\Fortify\Http\Controllers\NewPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// __ Public / Home pages ________________________________________________

Route::get('/', fn () => view('home.homepage'));
Route::get('/about', fn () => view('home.about'));
Route::get('/contact', fn () => view('home.contact'));
Route::get('/terms', fn () => view('home.terms'));
Route::get('/faq', fn () => view('home.faq'));
Route::get('/ultimate', fn () => view('home.ultimate'));
Route::get('/health-saving', fn () => view('home.health-saving'));
Route::get('/individual-retirement', fn () => view('home.individual-retirement'));
Route::get('/overdraft-protection', fn () => view('home.overdraft-protection'));
Route::get('/business-essential', fn () => view('home.business-essential'));
Route::get('/business-savings', fn () => view('home.business-savings'));
Route::get('/personal', fn () => view('home.personal'));
Route::get('/business', fn () => view('home.business'));
Route::get('/credit-card', fn () => view('home.credit-card'));
Route::get('/loans', fn () => view('home.loans'));
Route::get('/commercial-real', fn () => view('home.commercial-real'));

// __ Guest auth routes (login / register) _______________________________

Route::middleware('guest')->group(function () {
    Route::get('login',    [UserLoginController::class, 'showLoginForm'])->name('login');
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');

    // Password reset
    Route::get('forgot-password',         [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password',        [PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::get('reset-password/{token}',  [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password',         [NewPasswordController::class, 'store'])->name('password.update');
});

Route::post('custom-login',        [UserLoginController::class, 'login'])->name('login.custom');
Route::get('login-otp',            [UserLoginController::class, 'showOtpForm'])->name('login.otp');
Route::post('login-otp/verify',    [UserLoginController::class, 'verifyOtp'])->name('login.otp.verify');
Route::post('login-otp/resend',    [UserLoginController::class, 'resendOtp'])->name('login.otp.resend');
Route::post('custom-registration', [RegisterController::class, 'register'])->name('register.custom');
Route::get('verify/{id}',          [RegisterController::class, 'showVerifyForm'])->name('verify');
Route::post('email-verify',        [RegisterController::class, 'verifyEmail'])->name('code');
Route::get('resend-code/{id}',     [RegisterController::class, 'resendCode'])->name('resendCode');

// Logout
Route::get('log_out',       [UserLoginController::class, 'signOut'])->name('sign.out');
Route::get('/logout',       [UserLoginController::class, 'legacyLogout'])->name('logOut');
Route::post('/user/logout', [UserLoginController::class, 'logout'])->name('user.logout');

// __ Authenticated user routes __________________________________________

Route::middleware('auth')->group(function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('send-mail',           [SendMailController::class, 'sendMail'])->name('send-mail');
    Route::post('send-bank-statement', [DashboardController::class, 'sendBankStatement'])->name('send.bank.statement');

    // Transfers
    Route::get('transfer',                 [DashboardController::class, 'transferPage'])->name('transfer.page');
    Route::get('/bank-transfer-step1',     [DashboardController::class, 'showStep1'])->name('bank.transfer.step1');
    Route::post('/bank-transfer-step2',    [DashboardController::class, 'showStep2'])->name('bank.transfer.step2');
    Route::post('/bank-transfer-complete', [DashboardController::class, 'bankTransfer'])->name('bank.transfer.complete');
    Route::post('bank-transfer',           [DashboardController::class, 'bankTransfer'])->name('bank.transfer');
    Route::post('transfer_funds',          [DashboardController::class, 'transferFunds'])->name('transfer.funds');
    Route::post('transfer',                [DashboardController::class, 'transferFunds'])->name('transfer-fund');
    Route::post('paypal-transfer',         [DashboardController::class, 'paypalTransfer'])->name('paypal.transfer');
    Route::post('skrill-transfer',         [DashboardController::class, 'skrillTransfer'])->name('skrill.transfer');
    Route::post('crypto-transfer',         [DashboardController::class, 'cryptoTransfer'])->name('crypto.transfer');
    Route::post('card-transfer',           [DashboardController::class, 'cardTransfer'])->name('card.transfer');

    // Deposits
    Route::get('deposit',             [DashboardController::class, 'deposit'])->name('deposit');
    Route::get('make-deposit',        [DashboardController::class, 'makeDeposit'])->name('make.deposit.page');
    Route::post('make-deposit',       [DashboardController::class, 'makeDeposit'])->name('make.deposit');
    Route::post('get-deposit',        [DashboardController::class, 'getDeposit']);
    Route::post('make-cdeposit',      [DashboardController::class, 'makeCDeposit']);
    Route::post('make-cryptodeposit', [DashboardController::class, 'makeCryptoDeposit'])->name('make.cryptodeposit');
    Route::get('crypto_deposit',      [DashboardController::class, 'cryptoDeposit'])->name('crypto_deposit');
    Route::post('crypto-deposit',     [DashboardController::class, 'cryptoDeposit'])->name('crypto.deposit');

    // Payments & Withdrawals
    Route::post('make-payment',        [DashboardController::class, 'makePayment'])->name('make.payment');
    Route::get('make_withdrawal',      [DashboardController::class, 'getWithdrawal'])->name('withdrawal');
    Route::get('withdrawal-completed', [DashboardController::class, 'Completed'])->name('withdrawal_completed');
    Route::get('paybills',             [DashboardController::class, 'paybills'])->name('paybills');
    Route::post('otp-pin',             [DashboardController::class, 'UserOtp'])->name('otp.pin');

    // Cards
    Route::get('card',                   [DashboardController::class, 'card'])->name('card');
    Route::get('request-card/{user_id}', [DashboardController::class, 'requestCard'])->name('request.card');
    Route::post('requestcard-delivery',  [DashboardController::class, 'requestCardDelivery'])->name('requestcard.delivery');
    Route::get('card_withdrawal',        [DashboardController::class, 'CardWithdrawal'])->name('card_withdrawal');

    // Loans
    Route::get('loan',           [DashboardController::class, 'loan'])->name('loan');
    Route::get('loan-user',      [DashboardController::class, 'LoanUser'])->name('loan-user');
    Route::post('make-loan',     [DashboardController::class, 'makeLoan'])->name('make.loan');
    Route::post('continue-loan', [DashboardController::class, 'ContinueLoan'])->name('continue.loan');

    // Crypto & wallets
    Route::get('crypto',         [DashboardController::class, 'crypto'])->name('crypto');
    Route::get('cryptopage',     [DashboardController::class, 'cryptopage'])->name('cryptopage');
    Route::get('cfx',            [DashboardController::class, 'Cfx'])->name('cfx');
    Route::get('skrill',         [DashboardController::class, 'skrill'])->name('skrill');
    Route::get('paypal',         [DashboardController::class, 'paypal'])->name('paypal');
    Route::get('bank',           [DashboardController::class, 'bank'])->name('bank');
    Route::get('token',          [DashboardController::class, 'token'])->name('token.page');

    // KYC & NFT
    Route::post('upload-kyc', [DashboardController::class, 'uploadKyc'])->name('upload.kyc');
    Route::post('save_nft',   [DashboardController::class, 'saveNft'])->name('save.nft');

    // Profile & Settings
    Route::get('profile',          [DashboardController::class, 'profile'])->name('profile');
    Route::get('user-profile',     [DashboardController::class, 'userProfile'])->name('user.profile');
    Route::get('settings',         [DashboardController::class, 'settings'])->name('settings');
    Route::post('personal-details',[DashboardController::class, 'personalDetails'])->name('personal.details');
    Route::post('personal-dp',     [DashboardController::class, 'personalDp'])->name('personal.dp');
    Route::get('change-password',  [DashboardController::class, 'userChangePassword'])->name('user.change.password');
    Route::post('/change-password',[DashboardController::class, 'updatePassword'])->name('update-password');

    // Transactions & statements
    Route::get('transactions',           [DashboardController::class, 'transactions'])->name('transactions');
    Route::get('transaction-history',    [DashboardController::class, 'transactionHistory'])->name('transaction.history');
    Route::get('bankstatement',          [DashboardController::class, 'bankstatement'])->name('bankstatement');
    Route::get('notification',           [DashboardController::class, 'notification'])->name('notification');
    Route::get('pending-transfer',       [DashboardController::class, 'pendingTransfer'])->name('pending-transfer');
    Route::get('view_invoice/{user_id}', [DashboardController::class, 'viewInvoice'])->name('view.invoice');
    Route::get('ticket',                 [DashboardController::class, 'ticket'])->name('ticket');
    Route::get('international-transfer', [DashboardController::class, 'internationalTransfer'])->name('international-transfer');
    Route::get('domestic-transfer',      [DashboardController::class, 'domesticTransfer'])->name('domestic-transfer');

    // Trade
    Route::post('/trades',    [TradeController::class, 'store'])->name('trades.store');
    Route::get('/api/trades', [TradeController::class, 'history']);
});

// __ Admin routes _______________________________________________________

Route::prefix('admin')->name('admin.')->group(function () {

    // Admin auth - no middleware needed here
    Route::get('login',   [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login',  [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // Protected admin area
    Route::middleware('auth:admin')->group(function () {

        Route::get('/dashboard', [AdminController::class, 'admindashboard'])->name('dashboard');

        // User management
        Route::get('manage-users',    [AdminController::class, 'ManageUsers'])->name('manage.users');
        Route::get('users',           [AdminController::class, 'users'])->name('view.users');
        Route::get('/profile/{id}',   [AdminController::class, 'userProfile'])->name('profile');
        Route::delete('/delete/{id}', [AdminController::class, 'deleteUser'])->name('delete');
        Route::get('/impersonate/{id}',[AdminController::class, 'impersonate'])->name('impersonate');

        // User status
        Route::match(['get', 'post'], 'verify_user/{id}',    [AdminController::class, 'verifyUser'])->name('verify_user');
        Route::match(['get', 'post'], 'unfreeze_user/{id}',  [AdminController::class, 'unfreezeUser'])->name('unfreeze_user');
        Route::match(['get', 'post'], 'user_activity/{id}',  [AdminController::class, 'UserActivity'])->name('user_activity');
        Route::match(['get', 'post'], 'iuser_activity/{id}', [AdminController::class, 'iUserActivity'])->name('iuser_activity');
        Route::match(['get', 'post'], 'user_block/{id}',     [AdminController::class, 'UserBlock'])->name('user_block');
        Route::match(['get', 'post'], 'iuser_block/{id}',    [AdminController::class, 'iUserBlock'])->name('iuser_block');

        // User data
        Route::match(['get', 'post'], 'update_otp/{id}',      [AdminController::class, 'updateOtp'])->name('update.otp');
        Route::match(['get', 'post'], 'update_eligible/{id}', [AdminController::class, 'updateEligibleLoan'])->name('update.eligible');
        Route::match(['get', 'post'], 'update_email/{id}',    [AdminController::class, 'updateEmail'])->name('update.email');
        Route::match(['get', 'post'], 'update_ssn/{id}',      [AdminController::class, 'updateSsn'])->name('update.ssn');
        Route::match(['get', 'post'], 'approve-id_card/{id}', [AdminController::class, 'ApproveId'])->name('approve.id');

        // Credit / Debit
        Route::match(['get', 'post'], 'credit-user',  [AdminController::class, 'creditUser'])->name('credit.user');
        Route::match(['get', 'post'], 'debit-user',   [AdminController::class, 'debitUser'])->name('debit.user');
        Route::post('transfer',       [AdminController::class, 'transferFunds'])->name('transfer-fund');
        Route::post('reflection-pin', [AdminController::class, 'reflectionPin'])->name('reflection');

        // Transactions
        Route::get('user_transactions',              [AdminController::class, 'usersTransaction'])->name('user.transaction');
        Route::post('/approve-transaction/{id}',     [AdminController::class, 'ApproveTransaction'])->name('approve-transaction');
        Route::post('/decline-transaction/{id}',     [AdminController::class, 'DeclineTransaction'])->name('decline-transaction');
        Route::post('/update-transaction-date/{id}', [AdminController::class, 'updateTransactionDate'])->name('update-transaction-date');

        // Deposits
        Route::post('/approve-deposit/{id}', [AdminController::class, 'ApproveDeposit'])->name('approve-deposit');
        Route::post('/decline-deposit/{id}', [AdminController::class, 'DeclineDeposit'])->name('decline-deposit');

        // Loans
        Route::get('user_loans',                                                     [AdminController::class, 'usersLoans'])->name('user.loans');
        Route::match(['get', 'post'], 'decline-loan/{id}', [AdminController::class,  'DeclineLoan'])->name('decline-loan');
        Route::post('/approve-loan/{id}',                  [AdminController::class,  'ApproveLoan'])->name('approve-loan');

        // Cards
        Route::get('user_cards',          [AdminController::class, 'userCards'])->name('user.cards');
        Route::post('/approve-card/{id}', [AdminController::class, 'ApproveCard'])->name('approve-card');
        Route::post('/decline-card/{id}', [AdminController::class, 'DeclineCard'])->name('decline-card');

        // KYC
        Route::post('/accept-kyc/{id}',  [AdminController::class, 'acceptKyc'])->name('accept-kyc');
        Route::post('/decline-kyc/{id}', [AdminController::class, 'rejectKyc'])->name('decline-kyc');

        // Investments
        Route::get('user_investments', [AdminController::class, 'userInvestment'])->name('user.investment');

        // NFT
        Route::get('admin_upload_nft',      [AdminController::class, 'uploadNft'])->name('admin.upload.nft');
        Route::get('uploaded-nfts',         [AdminController::class, 'allNfts'])->name('users.uploaded.nft');
        Route::post('admin_save_nft',       [AdminController::class, 'adminSaveNft'])->name('admin.save.nft');
        Route::get('admin_nft_market',      [AdminController::class, 'nftMarket'])->name('admin.buy.nft');

        // Wallet
        Route::get('update_wallet',        [AdminController::class, 'eth'])->name('update.wallet');
        Route::get('/update-wallet',       [AdminController::class, 'updateWallet'])->name('wallet');
        Route::post('admin_update_wallet', [AdminController::class, 'updateWallet'])->name('admin.save.wallet');
        Route::post('/choose-wallet',      [AdminController::class, 'chooseWallet'])->name('choose.wallet');
        Route::post('/update-trc',         [AdminController::class, 'updateTrc'])->name('update-trc');
        Route::post('/update-btc',         [AdminController::class, 'updateBtc'])->name('update-btc');
        Route::post('/update-eth',         [AdminController::class, 'updateEth'])->name('update-eth');

        // Admin password
        Route::get('admin-change-password', [AdminController::class, 'adminChangePassword'])->name('admin.change.password');
        Route::match(['get', 'post'], 'admin-update-password', [AdminController::class, 'adminUpdatePassword'])->name('update.password');

        // Mail
        Route::get('/send-mail/{id}',      [AdminController::class, 'sendMail'])->name('send.mail');
        Route::get('/send-user-mail/{id}', [AdminController::class, 'sendUserMail'])->name('send-user-mail');
        Route::get('send_mail',            [AdminController::class, 'sendTestMail'])->name('user.mail');
        Route::post('/send-user-email',    [AdminController::class, 'sendUserEmail']);
        Route::post('send-mail',           [AdminController::class, 'sendMail'])->name('send.mail.send');

    });
});
