<?php
  
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\PrefectureRegion;
use App\Models\Facility;
use App\Models\Qualification;
use Hash;
use Illuminate\Support\Str;
use Mail; 
  
class MypageController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function index() {
      return view('mypage.index');
    }

    public function getFollowing() {
      $prefectureData = PrefectureRegion::select('id','main_id', 'name', 'en_name')->get();
      $facilityData = Facility::select('id', 'name')->get();

      $tokyoCityData = DB::table('tbl_city_region')->join('tbl_prefecture_region', 'tbl_city_region.prefecture_id', '=', 'tbl_prefecture_region.id')
                          ->where('tbl_prefecture_region.name', 'like', '%東京%')
                          ->where('tbl_city_region.flag', 1)
                          ->select('tbl_city_region.id', 'tbl_city_region.name', 'tbl_prefecture_region.id as p_id')
                          ->get();

      $majorCity = DB::table('tbl_majorcity')->get();

      $otherCityData = $majorCity->map(function($item){
        $city_ids = DB::table('tbl_city_region')->join('tbl_prefecture_region', 'tbl_city_region.prefecture_id', '=', 'tbl_prefecture_region.id')
                      ->where('tbl_city_region.name', 'like', '%'.$item->name.'%')
                      ->select('tbl_city_region.id', 'tbl_prefecture_region.id as p_id')
                      ->get();
        $partUrl = '';
        $len = count($city_ids);
        for($i=0;$i<$len;$i++) {
          $partUrl.='city_ids[]='.$city_ids[$i]->id;
          if($i < $len-1) $partUrl.='&';
        }

        return [
          'id' => $item->id,
          'p_id' => $city_ids[0]->p_id,
          'name' => $item->name,
          'cityUrl' => $partUrl
        ];
      });

      $mainPrefectureData = PrefectureRegion::select('id','main_id', 'name', 'en_name')
                                          ->whereIn('en_name', ['tokyo', 'kanagawa', 'saitama', 'chiba'])
                                          ->get();

      $data1 = compact('prefectureData', 'facilityData', 'tokyoCityData', 'otherCityData', 'mainPrefectureData');

      return view('mypage.following', $data1);
    }

    public function getLike() {
      return view('mypage.like');
    }

    public function getDraft() {
      return view('mypage.draft');
    }

    public function getReview() {
      return view('mypage.review');
    }

    public function getQuiet() {
      return view('mypage.quiet');
    }    

    public function getUser() {
      return view('mypage.user.index');
    }    
    public function getUseremail() {
      return view('mypage.user.email');
    }    
    public function getUserpassword() {
      return view('mypage.user.password');
    }    

    public function followNursery(Request $request) {
      $nursery_id = $request->input('nursery_id');
      if (Auth::check()) {
        $user = Auth::user();
        $result = DB::table('tbl_nursery_follow')->where('nursery_id', $nursery_id)->where('user_id', $user['id'])->get();
        if(count($result)>0) {
          $deleted_id = DB::table('tbl_nursery_follow')->where('nursery_id', $nursery_id)->where('user_id', $user['id'])->delete();
        }
        else {
          $id = DB::table('tbl_nursery_follow')->insert(['user_id' => $user['id'], 'nursery_id' => $nursery_id]);
        }
      }
    }

    public function likeReview(Request $request) {

      $review_id = $request->input('review_id');
      if (Auth::check()) {
        $user = Auth::user();
        $result = DB::table('tbl_review_like')->where('review_id', $review_id)->where('user_id', $user['id'])->get();
        if(count($result)>0) {
          $deleted_id = DB::table('tbl_review_like')->where('review_id', $review_id)->where('user_id', $user['id'])->delete();
        }
        else {
          $id = DB::table('tbl_review_like')->insert(['user_id' => $user['id'], 'review_id' => $review_id]);
          print_r($id);
        }
      }
    }
}