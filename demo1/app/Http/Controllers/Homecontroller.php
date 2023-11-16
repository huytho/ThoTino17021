<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;

use App\Mail\ContactMail;
use Mail;
use Auth;

class Homecontroller extends Controller
{
    public function index(){
        $cat = Category::all();

        $pro = Product::orderBy('id')->paginate(8);
        $cus = Customer::orderBy('id')->paginate(4);

        return view('index',compact('pro','cus','cat'));
    }
    public function about(){
      
        return view('about');
    }
    public function cart(){
      
        return view('cart.view');
    }
    public function blog(){
      
        return view('blog');
    }
    public function contact(){
      
        return view('contact');
    }

    
    public function detail(Product $product){
      
      
        return view('detail', compact('product'));
    }
    public function product(){
        $pro = Product::all();
        return view('product',compact('pro'));
    }
     public function category(){
        $pro = Product::where('category_id',1)->get();
        return view('category',compact('pro'));
    }
    public function category2(){
        $pro = Product::where('category_id',2)->get();
        return view('category2',compact('pro'));
    }
    public function category3(){
        $pro = Product::where('category_id',3)->get();
        return view('category2',compact('pro'));
    }
    public function category4(){
      $pro = Product::orderBy('price','DESC')->get();
      return view('category4',compact('pro'));
  }
  public function category5(){
    $pro = Product::orderBy('price','ASC')->get();
    return view('category5',compact('pro'));
}

  
    public function postcontact(Request $req){
        $email = $req->email;
        $data  = $req->only('name','email','message');
        Mail::to($email)->send(new ContactMail( $data ));
      return view('contact');
    } 


    public function login(){
        return view('login');
          }
          public function register(){
            return view('register');
              }
              public function logout(){
                auth('cus')->logout();
                return redirect()->route('login');
                  }
                  public function check_login(Request $req){
                    $req->validate([
                      'email' =>'required|email|exists:customers',
                      'password' =>'required'
                    ],
                    [
                      'email.required'=> 'không được để rỗng',
                      'email.email'=> 'Vui lòng nhập đúng định dạng!',
                      'email.exists'=> 'Tài khoản không hoặc mật khẩu không chính xác!',
                      'password.required' => 'không được để rỗng'
                    ]
                  );
                    $routeName = request('returnUrl', 'index');
                    $formData = $req->only('email','password');
                    if(auth('cus')->attempt($formData)){

                        return redirect()->route( $routeName)->with('ok','Dang ki  thành công');
                        ; 
                    }
                    return redirect()->back();
                  }    

          public function postregister(Request $req){
          
            $form_data = $req->only('name','address','phone','email','password','confirm_password');

            $req->validate([
              'name' =>'required',
              'address'=>'required',
              'phone' =>'required',
              'email' =>'required',
              'password' =>'required',
              'confirm_password' =>'required'
            ],
            [
                'name.required' => 'không được để rỗng',
                'address.required'=>'không được để rỗng',
                'phone.required' =>'không được để rỗng',
                'email.required'=> 'không được để rỗng',
                'password.required' => 'không được để rỗng',
                'confirm_password.required' => 'không được để rỗng'
            ]
          
          
          );
         $form_data['password'] = bcrypt($req->password);
         if(Customer::create($form_data)){
          return redirect()->route('login')->with('ok','Đăng kí thành công');;
         }
         return redirect()->back();
          } 

        }   