<?php

namespace App\Http\Controllers\store;


use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\libs\api_demo;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;


class UserController extends Controller
{   

   
    //商家注册页面显示
    public function signUp()
    {
    	return view('store.user.sign_up');
    }
    
    

    //发送手机验证码
    public function sendcode(Request $request)
    {
        $config = [
            'accessKeyId'    => 'LTAIQRVwrjnVu4ta',
            'accessKeySecret' => 'iaNP95RiOXtu5fmBpay0kjwmNgE0ME',
        ];
        $input = $request->all();
        $phone = $input['phone'];
        if(preg_match("/^1[34578]{1}\d{9}$/",$phone)){ 

            // $user = DB::table('seller')->where('sname', $phone)->first();
            // if($user != null){
            //     return '手机号码已注册';
            // }
            // 检测手机号是否注册
            $isHas = false;
            if ($request->session()->has('seller')) {
                $seller = $request->session()->get('seller');
                $a = count($seller);
                for ($i=0; $i < $a; $i++) { 
                    if($phone == $seller[$i]){
                        $isHas = true;
                        return '手机号码已注册';  
                    }
                }
            }

            if(!$isHas){ //发送验证码
                $client  = new Client($config);
                $sendSms = new SendSms;
                $sendSms->setPhoneNumbers($phone);
                $sendSms->setSignName('饱否');
                $sendSms->setTemplateCode('SMS_107925045');
                $code = rand(100000, 999999);
                $request->session()->put('code', $code);
                $sendSms->setTemplateParam(['code' => $code]);
                $result = $client->execute($sendSms);
                return 'ok';
            }
        }else{
            return '手机号码不正确';
        }
    }
    // 检测验证码是否正确
    public function checkcode(Request $request)
    {
        $input = $request->all();
        $inputCode = $input['code'];

        $code = session('code');

        if($inputCode != $code){
            return '1';
        }

        return "ok";
    }
    
    
    //手机号注册实现业务逻辑
    public function dosignUp(Request $request)
    {
        $pwd = $request->pwd;
        $repwd = $request->repwd;
        $phone = $request->tel;
        // dd($phone);
        if($pwd == $repwd){
            // 插入数据库
            $user = DB::insert('insert into seller (sname, spwd,status) values (?, ?,?)', [$phone, $pwd,1]);
            // 保存到session中
            $request->session()->push('seller', $phone);
            // session([$phone => $phone]);  
            return redirect('admin/index')->with('$suser', '$phone');
             
        }else{
            return back()->with('msg', '密码输入不一致，重新输入');
        }

    }


     //登录页展示
    public function login()
    {
        return view('store.user.login');
    }
    //执行登录
    public function dologin(Request $request)
    {
       
      
        $users = DB::select('select * from seller where sname = ?', [$request->sname]);

        
        
        // $data = $request->session()->all();
        // dd($data[0]);
        if($users != null){
            $pwd = $users[0]->spwd;
            if($pwd == $request->password){
                return redirect('/store')->with('suser', $users);
            }else{
                return back()->with('msg', '密码错误');
            }  
        }else{
            return back()->with('msg', '账号错误');
        }
     }
   

    /**
     * Show a list of all of the application's users.
     *
     * @ return Response
     */
    public function index()
    {
        $users = DB::table('user')->get();

        return view('user', ['users' => $users]);
    }
}
