<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function getList()
    // {
    //     $messages = Message::all();
    //     return view('messages.index',['encryptedMsg'=>$messages]);
    // }
    public function create(){
        return view('messages.create');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 

    public function chiffrer()
    {
        $str = strtolower("Hello World!");
        $msgArr=str_split($str);
        $lettres = 'abcdefghijklmnopqrstuvwxyz';
        $alpha = str_split($lettres);
        $newStr = "";
        foreach ($msgArr as $value) {
            $pos=array_search($value, $alpha);
            if($pos === false){
                $newStr.= $value;
            }else{
                $newPos = ($pos + 3)%26;
                $newChar = $alpha[$newPos];
                $newStr .= $newChar;                                 
            }
        } 
        dd($newStr);
        return view('messages.index');
    }
//
          
        
        // }
        

        // $message = str_split($msg);
        // $MsgLen = strlen($message);
        // $texteChiffre = "";
        // array_map(callback, arr1)
        // foreach ($variable as $key => $value) {
        //     # code...
        // }
        

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
