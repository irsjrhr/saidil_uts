<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Login extends Controller{

    public $db;
    public function __construct(){
        $this->db = DB::table('users');
    }
    public function index(){


        return view('login');
    }



    public function auth(){
        if ( isset($_POST['submit']) ) {
            $user = $_POST['user'];
            $password = $_POST['password'];


            $db_user = $this->db->where('user', $user)->get()->toArray();

            if ( !empty($db_user) ) {
                $row_db = $db_user[0];
                $pass_db = $row_db->password;
                if ( $password == $pass_db ) {
                    $status = true;
                    $msg = "Berhasil login";
                }else{
                    $status = false;
                    $msg = "Gagal login, password salah";
                }
            }else{
                $status = false;
                $msg = "Gagal login, user tidak terdaftar";
            }


            if ( $status == true ) {
                session()->put('login', $user);
                session()->flash('flasher', $msg);
                return redirect('/');
            }else{
                session()->flash('flasher', $msg);
                return redirect('/login');
            }


        }
    }

    public function logout(){
        session()->forget('login'); // Menghapus session user_id
        session()->flash('flasher', "Berhasil logout!");
        return redirect('/login');
    }
}
