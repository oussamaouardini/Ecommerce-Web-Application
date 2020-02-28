<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LikeResource;
use App\User;
use App\WishList;
use Illuminate\Http\Request;
use Redirect;

class WishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $wishes =   WishList::where('user_id',$id)->get();
        return LikeResource::collection($wishes) ;
    }
    public function remove($id,$product_id)
    {
       WishList::where('user_id',$id)->where('product_id',$product_id)->delete();        
       return $this->show($id) ;
    }
    public function add($id,$product_id)
    {
       $inlikes =  $this->inLikes($id,$product_id);
     if(count($inlikes)>0){
       // do nothing 
     }else{
        $wishes = new WishList();
        $wishes->user_id = $id ;
        $wishes->product_id = $product_id ;
        $wishes->save();
     }
       
     return $this->show($id) ;
    }

    public function inLikes($id,$product_id){
       return   WishList::where('user_id',$id)->where('product_id',$product_id)->get();
     // return $wishes ;
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
