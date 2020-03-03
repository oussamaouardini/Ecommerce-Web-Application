<?php

namespace App\Http\Controllers;

use App\WishList;
use Illuminate\Http\Request;

class WishListController extends Controller
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

    public function remove($id,$product_id)
    {
        WishList::where('user_id',$id)->where('product_id',$product_id)->delete();
        return redirect()->back()  ;
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

        return redirect()->back() ;
    }
    public function inLikes($id,$product_id){
        return   WishList::where('user_id',$id)->where('product_id',$product_id)->get();
        // return $wishes ;
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
     * @param  \App\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function show(WishList $wishList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function edit(WishList $wishList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WishList $wishList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function destroy(WishList $wishList)
    {
        //
    }
}
