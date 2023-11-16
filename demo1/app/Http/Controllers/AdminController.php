<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Auth;

use App\Models\User;
class AdminController extends Controller
{
    public function index(){
        $pro = Product::orderBy('id')->paginate(8);
      
     

        return view('admin',compact('pro'));
      
    }
    
public function login(){
    // User::create([
    //   'name' => 'Khúc Huy Thọ',
    //   'email' => 'Tho@gmail.com',
    //   'password' => bcrypt(123456)
    // ]);
    
    return view('admin.login');
  

  }

  public function register(){
    return view('admin.register');
  }

  public function post_register(Request $req){
    $data = $req->only('name', 'email', 'password');
    $req->validate([
      'name' =>'required',
      'email' =>'required',
      'password' =>'required'
    ],
    [
      'name.required' => 'không được để rỗng',
      'email.required' => 'không được để rỗng',
      'password.required' => 'không được để rỗng',
    ]
    );
    User::create($data); 
    return redirect()->route('admin.login')->with('ok','Đăng kí thành công !');
  }

  public function check_login(Request $req){
    $form_data = $req->only('email', 'password');
    $check_login = Auth::attempt( $form_data);
    
    $req->validate([
    
      'email' =>'required|email|exists:users',
                      'password' =>'required'
                    ],
                    [
                      'email.required'=> 'không được để rỗng',
                      'email.email'=> 'Vui lòng nhập đúng định dạng!',
                      'email.exists'=> 'Tài khoản không hoặc mật khẩu không chính xác!',
                      'password.required' => 'không được để rỗng'
                    ]
    );
  if($check_login){
    return redirect()->route('admin');
  }else{
    return redirect()->back();
  }
  
  }
  public function logout(){
    Auth::logout();
    return redirect()->route('admin.login');
  }
}