<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use Goutte;
use Illuminate\Support\Facades\Auth;

class dishwashers extends Controller
{
    public function index(){

        $crawler = Goutte::request('GET', 'https://www.appliancesdelivered.ie/dishwashers');

        $washer = $crawler->filter('.search-results-product h4 a')->each(function ($node) {
            //dump($node->attr("src"));
            $result = ($node->text());

            return $result;
        });
        $connected = Auth::id();

        return view('welcome') -> with('dishwasher', $washer) -> with('userConnect', $connected);
    }

    public function insertWish(){
       $modeldishwasher = new App\dishwashers();


        $id = Auth::id();

        if (isset($_POST['choice'])){
            $wish = $_POST['choice'];
            foreach ($wish as $wishlist){
                $modeldishwasher -> addWishList($wishlist, $id);
            }
        }

        $userWish = $modeldishwasher->mywishlist($id);


        return view('wishlist') -> with('userWish', $userWish);
    }

    public function deleteWish(){
        $modeldishwasher = new App\dishwashers();
        $iduser = Auth::id();

        if (isset($_POST['deleteChoice'])){
            $id = $_POST['deleteChoice'];
            foreach ($id as $delete){
                $modeldishwasher ->deleteWish($delete);
            }
        }


        $userWish = $modeldishwasher->mywishlist($iduser);


        return redirect('wish') -> with('userWish', $userWish);
    }
}
