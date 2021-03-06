<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function sendResetLinkEmail(Request $request)
    {
            $this->validateEmail($request);

            $response = $this->broker()->sendResetLink(
                    $request->only('email')
                );

            return $response == Password::RESET_LINK_SENT
                                ? response()->json([
                                    'message' => 'メールを送信しました。確認してパスワードの変更を行ってください',
                                    'status' => true
                                ], 201)
                                : response()->json([
                                    'message' => 'メール送信に失敗しました。',
                                    'status' => false
                                ], 401);
    }
}
