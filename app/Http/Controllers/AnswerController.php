<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\PrefectureRegion;
use App\Models\City;
use App\Models\Qual_User;
use App\Models\Users;

class AnswerController extends Controller
{
    public function index()
    {
  
        return view('answer');
    }  
    public function answer()
    {
  
        return view('answer');
    }  
    public function searchnursery()
    {
    //     $data = DB::table('tbl_nursery')
    //             ->select('tbl_cooperate.id', 'tbl_cooperate.name', 'tbl_cooperate.address', 'tbl_cooperate.postcode','tbl_prefecture_region.name as prefecture_name', 'tbl_city_region.name as city_name', 'tbl_nursery.id AS nursery_id', DB::raw('AVG(tbl_review.rating) AS review_rating'), DB::raw('COUNT(tbl_review.rating) AS review_count'))
    //             ->join('tbl_nursery', 'tbl_nursery.cooperate_id', '=', 'tbl_cooperate.id')
    //             ->join('tbl_city_region', 'tbl_cooperate.city_id', '=', 'tbl_city_region.id')
    //             ->join('tbl_prefecture_region', 'tbl_city_region.prefecture_id', '=', 'tbl_prefecture_region.id')
    //             ->leftJoin('tbl_review_relation', 'tbl_nursery.id', '=', 'tbl_review_relation.nursery_id')
    //             ->leftJoin('tbl_review', 'tbl_review_relation.id', '=', 'tbl_review.review_id')
    //             ->where('tbl_cooperate.id', $id)
    //             ->groupBy('tbl_cooperate.id', 'tbl_nursery.id')
    //             ->get();

    //   $arrayData = $data->groupBy('id')->map(function($item){
    //     $count = 0;
    //     $rating = 0;
    //     $first = $item->first();
    //     $fake_count = 0;
    //     foreach($item as $detail) {
    //       $count+=$detail->review_count;
    //       $rating+=$detail->review_rating;
    //       if($detail->review_rating) $fake_count++;
    //     }
    //     if($fake_count!=0)$rating/=$fake_count;
    //     $rating = number_format($rating, 1);
    //     $new_array['id'] = $item->first()->id;
    //     $new_array['name'] = $item->first()->name;
    //     $new_array['address'] = $item->first()->address;
    //     $new_array['postcode'] = $item->first()->postcode;
    //     $new_array['prefecture_name'] = $item->first()->prefecture_name;
    //     $new_array['city_name'] = $item->first()->city_name;
    //     $new_array['nursery_count'] = $item->count();
    //     $new_array['review_count'] = $count;
    //     $new_array['review_rating'] = $rating;

    //     return $new_array;          
    }
    //
}
