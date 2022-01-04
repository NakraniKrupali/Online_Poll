<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class adminController extends Controller
{
   public function adminlogin(Request $request)
   {
       $rec=DB::table('tbladmin')->where('Name',$request->uname)
                                 ->where('Password',$request->psw)
                                 ->count();
        if($rec == 1){
           return redirect('polls');
        }else{
            return redirect('/admin/login');
        }
   }
   public function logout()
   {
    return redirect('/admin/login');
}

}
