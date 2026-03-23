<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerificationEmail;
use App\Mail\welcomeEmail;
use App\Models\User;
use App\Models\verifyToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /**
     * Show the registration form.
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request.
     */
    public function register(Request $request)
    {
        $request->validate([
            'first_name'   => 'required',
            'last_name'    => 'required',
            'email'        => 'required|email|unique:users',
            'address'      => 'required',
            'phone'        => 'required',
            'country'      => 'required',
            'account_type' => 'required',
            'account_pin'  => 'required|digits:4',
            'password'     => 'string|required|confirmed|min:3',
        ]);

        $country = $request->input('country');
        $currencyMap = [
            'Afghanistan' => '؋', 'Albania' => 'Lek', 'Algeria' => 'دج',
            'American Samoa' => '$', 'Andorra' => '€', 'Angola' => 'Kz',
            'Anguilla' => '$', 'Antarctica' => '$', 'Antigua and Barbuda' => '$',
            'Argentina' => '$', 'Armenia' => '֏', 'Aruba' => 'ƒ',
            'Australia' => '$', 'Austria' => '€', 'Azerbaijan' => 'AZN',
            'Bahamas' => '$', 'Bahrain' => 'د.', 'Bangladesh' => 'ó',
            'Barbados' => '$', 'Belarus' => 'Br', 'Belgium' => '€',
            'Belize' => '$', 'Benin' => 'CFA', 'Bermuda' => '$',
            'Bhutan' => 'Nu', 'Bolivia' => 'Bs', 'Bosnia and Herzegovina' => 'KM',
            'Botswana' => 'P', 'Bouvet Island' => 'kr', 'Brazil' => 'R$',
            'British Indian Ocean Territory' => '$', 'Brunei Darussalam' => 'B$',
            'Bulgaria' => 'Лв.', 'Burkina Faso' => 'CFA', 'Burundi' => 'FBu',
            'Cambodia' => '៛', 'Cameroon' => 'FCFA', 'Canada' => '$',
            'Cape Verde' => '$', 'Cayman Islands' => '$', 'Central African Republic' => 'FCFA',
            'Chad' => 'FCFA', 'Chile' => '$', 'China' => '¥',
            'Christmas Island' => '$', 'Cocos (Keeling) Islands' => '$', 'Colombia' => '$',
            'Comoros' => 'CF', 'Congo' => 'FC', 'Democratic Republic of the Congo' => 'FC',
            'Cook Islands' => '$', 'Costa Rica' => '₡', "Cote D'Ivoire" => 'CFA',
            'Croatia' => 'Kn', 'Cuba' => '$', 'Cyprus' => '€',
            'Czech Republic' => 'Kč', 'Denmark' => 'kr', 'Djibouti' => 'Fdj',
            'Dominica' => '$', 'Dominican Republic' => 'RD$', 'Ecuador' => 'S/.',
            'Egypt' => 'E£', 'El Salvador' => '₡', 'Equatorial Guinea' => 'FCFA',
            'Eritrea' => 'Nkf', 'Estonia' => 'kr', 'Ethiopia' => 'Br',
            'Falkland Islands (Malvinas)' => '£', 'Faroe Islands' => 'kr', 'Fiji' => 'FJ$',
            'Finland' => 'mk', 'France' => '€', 'French Guiana' => '€',
            'French Polynesia' => '₣', 'French Southern Territories' => '€',
            'Gabon' => 'FCFA', 'Gambia' => 'D', 'Georgia' => 'GEL',
            'Germany' => '€', 'Ghana' => 'GH₵', 'Gibraltar' => '£',
            'Greece' => '€', 'Greenland' => 'Kr.', 'Grenada' => '$',
            'Guadeloupe' => '€', 'Guam' => '$', 'Guatemala' => 'Q',
            'Guernsey' => '£', 'Guinea' => 'FG', 'Guinea-Bissau' => 'CFA',
            'Guyana' => 'G$', 'Haiti' => 'G', 'Heard Island and McDonald Islands' => '$',
            'Holy See (Vatican City State)' => '₤', 'Honduras' => 'HNL', 'Hong Kong' => 'HK$',
            'Hungary' => 'Ft', 'Iceland' => 'kr', 'India' => '₹',
            'Indonesia' => 'Rp', 'Islamic Republic of Iran' => 'IRR', 'Iraq' => 'د.ع',
            'Ireland' => '€', 'Isle of Man' => '£', 'Israel' => '₪',
            'Italy' => '€', 'Jamaica' => 'J$', 'Japan' => '¥',
            'Jersey' => '£', 'Jordan' => 'د.ا', 'Kazakhstan' => '₸',
            'Kenya' => 'KSh', 'Kiribati' => '$', "Korea, Democratic People's Republic of" => '₩',
            'Korea, Republic of' => '₩', 'Kuwait' => 'د.ك', 'Kyrgyzstan' => 'лв',
            "Lao People's Democratic Republic" => '₭', 'Latvia' => 'LVL',
            'Lebanon' => 'ل.ل', 'Lesotho' => 'L', 'Liberia' => 'L$',
            'Libyan Arab Jamahiriya' => 'LD', 'Liechtenstein' => 'CHF', 'Lithuania' => 'Lt',
            'Luxembourg' => '€', 'Macao' => 'MOP$', 'The Former Yugoslav Republic of Macedonia' => 'den',
            'Madagascar' => 'Ar', 'Malawi' => 'K', 'Malaysia' => 'RM',
            'Maldives' => 'Rf', 'Mali' => 'MAF', 'Malta' => '€',
            'Marshall Islands' => '$', 'Martinique' => '€', 'Mauritania' => 'MRU',
            'Mauritius' => '₨', 'Mayotte' => '€', 'Mexico' => '$',
            'Federated States of Micronesia' => '$', 'Republic of Moldova' => 'L',
            'Monaco' => '€', 'Mongolia' => '₮', 'Montenegro' => '€',
            'Montserrat' => '$', 'Morocco' => 'MAD', 'Mozambique' => 'MT',
            'Myanmar' => 'K', 'Namibia' => 'N$', 'Nauru' => '$',
            'Nepal' => 'Rs', 'Netherlands' => 'ANG', 'Netherlands Antilles' => 'NAf',
            'New Caledonia' => '₣', 'New Zealand' => '$', 'Nicaragua' => 'C$',
            'Niger' => 'XOF', 'Nigeria' => '₦', 'Niue' => '$',
            'Norfolk Island' => '$', 'Northern Mariana Islands' => '$', 'Norway' => 'kr',
            'Oman' => 'ر.ع.', 'Pakistan' => '₨', 'Palau' => '$',
            'Occupied Palestinian Territory' => '$', 'Panama' => 'B/.',
            'Papua New Guinea' => 'K', 'Paraguay' => '₲', 'Peru' => 'S/.',
            'Philippines' => '₱', 'Pitcairn' => '$', 'Poland' => 'zł',
            'Portugal' => '€', 'Puerto Rico' => '$', 'Qatar' => 'QR',
            'Reunion' => '€', 'Romania' => 'lei', 'Russian Federation' => '₽',
            'Rwanda' => 'FRw', 'Saint Barthélemy' => '€', 'Saint Helena' => '£',
            'Saint Kitts and Nevis' => '$', 'Saint Lucia' => '$', 'Saint Martin' => 'ƒ',
            'Saint Pierre and Miquelon' => '€', 'Saint Vincent and the Grenadines' => 'X$',
            'Samoa' => '$', 'San Marino' => '€', 'Sao Tome and Principe' => 'Db',
            'Saudi Arabia' => '﷼', 'Senegal' => 'CFA', 'Serbia' => 'din',
            'Seychelles' => 'SCR', 'Sierra Leone' => 'Le', 'Singapore' => 'S$',
            'Slovakia' => 'SKK', 'Slovenia' => '€', 'Solomon Islands' => 'Si$',
            'Somalia' => 'Sh.so.', 'South Africa' => 'R',
            'South Georgia and the South Sandwich Islands' => '£',
            'Spain' => '€', 'Sri Lanka' => 'Rs', 'Sudan' => '£SD',
            'Suriname' => '$', 'Svalbard and Jan Mayen' => 'kr', 'Swaziland' => 'L',
            'Sweden' => 'kr', 'Switzerland' => 'CHf', 'Syrian Arab Republic' => 'LS',
            'Taiwan' => 'NT$', 'Tajikistan' => 'SM', 'United Republic of Tanzania' => 'TSh',
            'Thailand' => '฿', 'Timor-Leste' => '$', 'Togo' => 'CFA',
            'Tokelau' => '$', 'Tonga' => 'T$', 'Trinidad and Tobago' => 'TT$',
            'Tunisia' => 'د.ت', 'Turkey' => '₺', 'Turkmenistan' => 'T',
            'Turks and Caicos Islands' => '$', 'Tuvalu' => '$', 'Uganda' => 'USh',
            'Ukraine' => '₴', 'United Arab Emirates' => 'د.إ', 'United Kingdom' => '£',
            'United States' => '$', 'United States Minor Outlying Islands' => '$',
            'Uruguay' => '$', 'Uzbekistan' => 'лв', 'Vanuatu' => 'VT',
            'Venezuela' => 'Bs.', 'Vietnam' => '₫', 'British, Virgin Islands' => '$',
            'U.S., Virgin Islands' => '$', 'Wallis And Futuna' => 'Fr',
            'Western Sahara' => 'د.م.', 'Yemen' => '﷼', 'Zambia' => 'ZK',
            'Zimbabwe' => 'Z$',
        ];
        $currency      = $currencyMap[$country] ?? '$';
        $accountNumber = rand(1000000000, 9999999999);

        $data = array_merge($request->all(), [
            'currency' => $currency,
            'a_number' => $accountNumber,
        ]);

        $user = $this->createUser($data);

        $validToken = rand(1234, 9999);
        $get_token          = new verifyToken();
        $get_token->token   = $validToken;
        $get_token->email   = $user->email;
        $get_token->save();

        Mail::to($user->email)->send(new VerificationEmail($validToken));

        return redirect("verify/{$user->id}");
    }

    /**
     * Show the email verification form.
     */
    public function showVerifyForm($id)
    {
        $user = User::findOrFail($id);

        return view('auth.verify', [
            'email' => $user->email,
            'hash'  => $user->password,
            'id'    => $user->id,
        ]);
    }

    /**
     * Verify the submitted email token.
     */
    public function verifyEmail(Request $request)
    {
        $token = $request->input('digit');
        $verifyToken = verifyToken::where('token', $token)->first();

        if (!$verifyToken) {
            return back()->with('error', 'Incorrect Activation Code!');
        }

        $user = User::where('email', $verifyToken->email)->firstOrFail();
        $user->is_activated = 1;
        $user->save();

        // Log the user in after successful verification
        Auth::login($user);

        Mail::to($user->email)->send(new welcomeEmail([
            'name'     => $user->first_name,
            'a_number' => $user->a_number,
            'email'    => $user->email,
            'password' => '*********',
        ]));

        return redirect('dashboard')->with('status', 'Your account has been verified successfully.');
    }

    /**
     * Resend the verification code to the user.
     */
    public function resendCode($id)
    {
        $user       = User::findOrFail($id);
        $validToken = rand(1234, 9999);

        $user->token = $validToken;
        $user->save();

        Mail::to($user->email)->send(new VerificationEmail($validToken));

        return redirect("verify/{$user->id}")->with('message', 'Verification code has been resent to your email.');
    }

    /**
     * Create a new user in the database.
     */
    protected function createUser(array $data): User
    {
        return User::create([
            'first_name'   => $data['first_name'],
            'last_name'    => $data['last_name'],
            'email'        => $data['email'],
            'address'      => $data['address'],
            'phone_number' => $data['phone'],
            'country'      => $data['country'],
            'account_type' => $data['account_type'],
            'account_pin'  => $data['account_pin'],
            'currency'     => $data['currency'],
            'a_number'     => $data['a_number'],
            'password'     => Hash::make($data['password']),
        ]);
    }
}
