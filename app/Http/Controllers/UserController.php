<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index(){
        //DB::insert('insert into users (name,email,password) values(?,?,?)',[
        //     'Sameer','tamme12@gmail.com','12345678'
        // ]);
        //DB::update('update users set name = ? where id =1',['Tamme']);
        //DB::delete('delete from users where id=1');
        //$users = DB::select('select * from users');
        //return $users;
        //$user = new User();
        // $user->name = 'aman';
        // $user->email = 'aman@gmail.com';
        // $user->password = '12345678';
        // $user->save();
        
        //$user = new User();
        //User::where('id',3)->update(['name'=>'bablu']);

        // $user = new User();
        // User::where('id',3)->delete();
        $data = [
            'name' =>'Elon',
            'email' => 'elon@gmail.com',
            'password' =>'password',
        ];
        User::create($data);
        
        $user = User::all();
        
        return $user;
        //return view('users');
    }
}
