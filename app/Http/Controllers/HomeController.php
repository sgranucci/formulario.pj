<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        // Evaluo si es usuario nuevo y de no serlo si tiene co-titular 
        
        $consulta_registro = DB::table('registros')
                            ->select('user_id')
                            ->where('user_id',Auth()->user()->id)
                            ->get();
        if(!isset($consulta_registro[0])){
            $usuario_nuevo = TRUE;
            $user_id = Auth::user()->id;
            $editCotitulares = false;
            
        }else{
            $usuario_nuevo = FALSE;
            $user_id = $consulta_registro[0]->user_id;
            $q_tieneCoTitular = DB::table('users')
            ->select('id')
            ->where('user_orig_id',$user_id)->get();
            
            if(isset($q_tieneCoTitular[0])){
                $editCotitulares = true;
            }else{
                $editCotitulares = false;
            }        
        }
        session(['UserId' => $user_id]);
        
        if(Auth()->user()->email == 'admin@form.com'){
            return redirect ('listadoRegistros');
        }else{
            return view('home.home2',compact('usuario_nuevo','editCotitulares'));
        }
    }
}
