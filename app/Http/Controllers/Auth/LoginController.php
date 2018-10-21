<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // đường dẫn đổ về trang bạn mong muốn
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    //thay đổi giao diện đăng nhập ở đây
    public function showLoginForm()
    {
        return view('auth.dangnhap');
    }
     public function username()
    {
        // lấy dữ liệu từ thể input trong form đăng nhập'
        //kiểm tra xem đó là email hay username
        //trả về trang đằng nhập thành công
        $login = request()->username;
       $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
       request()->merge([$field => $login]);
       return $field;
    }
       
    protected function loggedOut(Request $request)
    {
        return redirect('/admin/login');
    }
}
