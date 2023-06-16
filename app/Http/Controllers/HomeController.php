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
  
class HomeController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
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

      return view('home', $data1)
        ->with('title', 'Home');
    }

    public function getPrefectureRegions(){
      $prefectureData = PrefectureRegion::select('id','main_id', 'name', 'en_name')->get();
      $data = compact('prefectureData');
      return response()->json($data);
    }

    public function getFacilities(){
      $facilityData = Facility::select('id', 'name')->get();
      $data = compact('facilityData');
      return response()->json($data);
    }

    public function getQualifications(){
      $qualificationData = Qualification::select('id', 'name')->get();
      $data = compact('qualificationData');
      return response()->json($data);
    }

    public function getTerms() {
      return view('terms');
    }

    public function getSitemap() {
      return view('sitemap');
    }

    public function getPolicy() {
      return view('policy');
    }

    public function getScore() {
      return view('score');
    }

    public function getGuide() {
      return view('guide');
    }

    public function getHelp() {
      return view('help');
    }    
}