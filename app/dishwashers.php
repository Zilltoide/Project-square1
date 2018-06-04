<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class dishwashers extends Model
{
    public function addWishList($wish, $id){
        DB::insert("INSERT INTO wishlist(wish, id_user) VALUES ('$wish', $id)");

    }

    public function mywishlist($id){
        $wishlist = DB::table('wishlist')
        ->select ('id','wish')
            ->where('id_user', "=", $id)
            ->get();
return $wishlist;
    }

    public function deleteWish($id){
        DB::delete("DELETE FROM wishlist WHERE id = $id");
    }
}
