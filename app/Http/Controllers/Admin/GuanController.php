<?php

namespace App\Http\Controllers\Admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuanController extends Controller
{
    public function index(Request $request)
    
    {
        //保存搜索的条件
        $where = [];
        $ob = DB::table('admin');
        // 判断是否搜索了name字段
        if($request->has('aname')){
            // 获取用户搜索的Name字段的值
            $name = $request->input('aname');

            $where['aname'] = $name;
            //给查询语句添加上where条件
            $ob->where('aname', 'like', '%'.$name.'%');
        }
       
        
        $list = $ob->paginate(3);
        return view('Admin.admin.list', ['lists'=>$list, 'where'=>$where]);
    }

    
    //添加管理员
    public function create(Request $request)
    {
        //返回添加页面
        return view('Admin.admin.add');
    }
    //执行添加管理员操作
    public function store(Request $request)
    {
        //获取提交的账号
        $aname = $request->aname;
        //获取提交的密码
        $apwd = $request->apwd;
        //设置时间格式
        $atime = date('Y-m-d H:i:s',time());
        // dd($aname);

        //账号密码不能为空
        if ( empty(trim($aname)) || empty(trim($apwd)) ) {
            // 返回
           return back()->with('msg', '用户名或密码不能为空');

        }else{

            $preg = '/^\w{6,12}$/';

            if (!preg_match($preg, $aname)) {

               return back()->with('msg', '用户名或密码错误');

            }else{

                DB::insert('insert into admin (aname, apwd,auth,atime) values (?, ?,?,?)', [$aname, $apwd,1,$atime]);
                // return view('Admin.admin.list');
                return redirect('/admin/admin')->with('msg','添加成功');
            }  
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        echo 333333333;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $list = DB::table('admin')->where('aid', $id)->first();
        
        return view('Admin.admin.edit', ['list'=>$list]);
    }

    /**
     * 修改
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $data = $request->except('_token', '_method');
        
        $res = DB::table('admin')->where('aid', $id)->update($data);
        
        if($res > 0){
            
            return redirect('/admin/admin')->with('msg', '修改成功');
        
        }else{
            
            return redirect('/admin/admin')->with('msg', '修改失败(或者并未修改)');
        
        }
    
    }

    /**
     * 删除
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $res = DB::table('admin')->where('aid', $id)->delete();
       
        if($res > 0){
            return redirect('/admin/admin')->with('msg', '删除成功');
        }else{
            return redirect('/admin/admin')->with('msg', '删除失败');
        }
    }
}
