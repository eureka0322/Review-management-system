<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailViewController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\AnswerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::post('post-registrater', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('get-prefecture-region',[HomeController::class, 'getPrefectureRegions'])->name('get.prefecture.name');
Route::get('get-facility',[HomeController::class, 'getFacilities'])->name('get.facility.name');
Route::get('get-qualification',[HomeController::class, 'getQualifications'])->name('get.qualification');

Route::get('/facility', [DetailViewController::class, 'showByFacility'])->name('get.by.facilictyIds'); 
Route::get('/byprefecture', [DetailViewController::class, 'getByPrefectures'])->name('get.by.prefecture'); 

Route::get('/nurseries', [DetailViewController::class, 'showNurseries'])->name('get.nurseries'); 
Route::get('/nurseries/{id}', [DetailViewController::class, 'showNurseryById'])->name('get.by.nurseryid'); 

Route::post('/toggle_followed_nursery', [MypageController::class, 'followNursery'])->name('post.follow.nursery');
Route::post('/toggle_liked_evaluation', [MypageController::class, 'likeReview'])->name('post.like.review');

Route::get('/company', [CompanyController::class, 'showCompanies'])->name('get.companies'); 
Route::get('/company/{id}', [CompanyController::class, 'showCompanyById'])->name('get.by.companyid'); 


Route::get('dashboard', [AuthController::class, 'dashboard'])->middleware(['auth', 'is_verify_email']); 
Route::get('account/verify/{token}', [AuthController::class, 'verifyAccount'])->name('user.verify'); 

Route::get('/terms', [HomeController::class, 'getTerms'])->name('terms');
Route::get('/sitemap', [HomeController::class, 'getSitemap'])->name('sitemap');
Route::get('/policy', [HomeController::class, 'getPolicy'])->name('policy');
Route::get('/score', [HomeController::class, 'getScore'])->name('score');
Route::get('/guide', [HomeController::class, 'getGuide'])->name('guide');

Route::get('/help', [HomeController::class, 'getHelp'])->name('help');

Route::get('answer', [AnswerController::class, 'answer'])->name('answer');

Route::get('/mypage', [MypageController::class, 'index'])->name('mypage');
Route::get('/mypage/following', [MypageController::class, 'getFollowing'])->name('mypage.following');
Route::get('/mypage/like', [MypageController::class, 'getLike'])->name('mypage.like');
Route::get('/mypage/draft', [MypageController::class, 'getDraft'])->name('mypage.draft');
Route::get('/mypage/review', [MypageController::class, 'getReview'])->name('mypage.review');
Route::get('/mypage/quiet', [MypageController::class, 'getQuiet'])->name('mypage.quiet');

Route::get('/mypage/user', [MypageController::class, 'getUser'])->name('mypage.user');
Route::get('/mypage/user/email', [MypageController::class, 'getUseremail'])->name('mypage.user.email');
Route::get('/mypage/password', [MypageController::class, 'getUserpassword'])->name('mypage.user.password');