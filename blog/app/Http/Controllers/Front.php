<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Classes\CommonFunction;
use App\Classes\PagingFunction;
use App\Admin;
use App\User;
use Auth;
use DB;
use App\Classes\jsonRPCClient;

class Front extends Controller

{
    
    public function main(Request $request){
        
        $return_list = array();

        return view('index', $return_list);
    }

    public function introduction(Request $request){

        $return_list = array();

        $view_url = '';
        
        if($request->segment(2) == 'company'){
            $view_url .= '/introduction/company';
        }
        if($request->segment(2) == 'greeting'){
            $view_url .= '/introduction/greeting';
        }
        if($request->segment(2) == 'history'){
            $view_url .= '/introduction/history';
        }
        if($request->segment(2) == 'organization'){
            $view_url .= '/introduction/organization';
        }
        if($request->segment(2) == 'map'){
            $view_url .= '/introduction/map';
        }
     
        return view('sub/'.$view_url, $return_list);
    }
    public function research(Request $request){

        $return_list = array();

        $view_url = '';
        
        if($request->segment(2) == 'intellectual'){
            $view_url .= '/research/intellectual';
        }
        if($request->segment(2) == 'quality'){
            $view_url .= '/research/quality';
        }
        if($request->segment(2) == 'etc'){
            $view_url .= '/research/etc';
        }
        if($request->segment(2) == 'premier'){
            $view_url .= '/research/premier';
        }
     
        return view('sub/'.$view_url, $return_list);
    }

    public function list(Request $request){

        $return_list = array();

        $view_url = '';
        
        if($request->segment(1) == 'product'){
            $view_url .= '/product/list';
        }
        if($request->segment(1) == 'construction_case'){
            $view_url .= '/construction_case/list';
        }
        if($request->segment(1) == 'construction_result'){
            $view_url .= '/construction_result/list';
        }
        if($request->segment(1) == 'archives'){
            $view_url .= '/archives/list';
        }
             
        return view('sub/'.$view_url, $return_list);
    }   
     
    public function view(Request $request){

        $return_list = array();

        $view_url = '';
        
        if($request->segment(1) == 'product'){
            $view_url .= '/product/view';
        }
        if($request->segment(1) == 'construction_case'){
            $view_url .= '/construction_case/view';
        }
        if($request->segment(1) == 'construction_result'){
            $view_url .= '/construction_result/view';
        }
        if($request->segment(1) == 'archives'){
            $view_url .= '/archives/view';
        }
     
        return view('sub/'.$view_url, $return_list);
    }

    public function login(Request $request){
        
        $return_list = array();

        $view_url = '';
        
        if($request->segment(1) == 'login'){
            $view_url .= '/login';
        }
        if($request->segment(1) == 'find_member'){
            $view_url .= '/find_member';
        }

        return view('sub/login/'.$view_url, $return_list);
    }

       
    public function join(Request $request){
        
        $return_list = array();

        return view('sub/join', $return_list);
    }
    
}
?>