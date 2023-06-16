@extends('layout')
  
@section('content')
<main class="common_main">
  <div class="school-d_wrap">
      <div class="school-d_inner">
          <div class="common_inner">
              <div class="school-d_mv_block">
                  <div class="school-d_mv_main">
                      <div class="pankuzu_block">
                          <ul class="pankuzu_list">
                              <li class="pankuzu_item">
                                  <a href="https://hoikuhiroba-kuchikomi.com" class="pankuzu_link">ホーム</a>
                              </li>
                              <li class="pankuzu_item">
                                  <a href="https://hoikuhiroba-kuchikomi.com/tokyo" class="pankuzu_link">東京都</a>
                              </li>
                              <li class="pankuzu_item">
                                  品川区
                              </li>
                          </ul>
                      </div>
                                                                                          <p class="school-d_mv_label">認可保育園</p>
                                                                                  <h1 class="school-d_mv_title">アンジェリカ東品川保育園</h1>
                      <p class="school-d_mv_place">東京都品川区東品川4ー8ー8 新幹ビル1F</p>
                      <div class="school_content_relative sp_marginbt_school">
                          <div class="school-d_mv_rate ">
                              <p class="school-d_mv_rate_title">総合評価 :</p>
                              <ul class="school_star_list">
                                  <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star01.svg' alt='star01'>
                          </li>
                              </ul>
                              <p class="school-d_mv_rate_num">4.1</p>
                          </div>
                                                      </div>
                                                  <div class="company-banner-sp">
                          <a href="https://hoikuhiroba-kuchikomi.com/answer" target="_blank" rel="noopener noreferrer" class="top_mv_bnr_block">
                              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/top/banner_sp_march.png" alt="オープン記念キャンペーン" class="common_sp_640">
                          </a>
                      </div>
                                                  
                      <ul class="school-d_mv_rank_list">
                          <li class="school-d_mv_rank_item"></li>
                          
                      </ul>
                      <div class="common_sp">
                          <div class="school-d_mv_graph school_content_relative">
                              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/character01.svg" alt="保育ひろば" class="school-d_mv_character">
                              <div class="school-d_mv_graph_box not_compare_with_prefecture_ave active  ">
                                  <div class="school-d_mv_graph_main">
                                      <div class="school-d_mv_graph_pic">
                                          <div class="school-d_mv_graph_canvas">
                                            <canvas id="myChart03"></canvas>
                                          </div>
                                          <div class="school-d_graph_text_box">
                                            <div class="school-d_graph_textarea posi01">
                                              <p class="graph_title">
                                                職員同士の<br />人間関係
                                              </p>
                                              <p class="graph_num  color_red ">4.0</p>
                                            </div>
                                            <div class="school-d_graph_textarea posi02">
                                              <p class="graph_title">
                                                管理職との<br />人間関係
                                              </p>
                                              <p class="graph_num  color_red ">5.0</p>
                                            </div>
                                            <div class="school-d_graph_textarea posi03">
                                              <p class="graph_title">
                                                保護者との<br />人間関係
                                              </p>
                                              <p class="graph_num  color_red ">4.0</p>                                                  </div>
                                            <div class="school-d_graph_textarea posi04">
                                              <p class="graph_title">シフトの<br />融通</p>
                                              <p class="graph_num ">3.5</p>                                                  </div>
                                            <div class="school-d_graph_textarea posi05">
                                              <p class="graph_title">園庭・園舎</p>
                                              <p class="graph_num  color_red ">5.0</p>
                                            </div>
                                            <div class="school-d_graph_textarea posi06">
                                              <p class="graph_title">業務量</p>
                                              <p class="graph_num ">2.5</p>
                                            </div>
                                            <div class="school-d_graph_textarea posi07">
                                              <p class="graph_title">保育方針</p>
                                              <p class="graph_num  color_red ">5.0</p>
                                            </div>
                                            <div class="school-d_graph_textarea posi08">
                                              <p class="graph_title">給料<br />福利厚生</p>
                                              <p class="graph_num  color_red ">4.0</p>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                                                                          <button type="button" class="school-d_mv_graph_btn" >
                                      <span>東京都平均との比較をみる</span>
                                  </button>
                                                                      </div>
                              <div class="school-d_mv_graph_box compare_with_prefecture_ave ">
                                  <div class="school-d_mv_graph_main">
                                      <div class="school-d_mv_graph_pic average_pic">
                                          <div class="school-d_mv_graph_canvas">
                                            <canvas id="myChart04"></canvas>
                                          </div>
                                          <div class="school-d_graph_text_box">
                                            <div class="school-d_graph_textarea posi01">
                                              <p class="graph_title">
                                                職員同士の<br />人間関係
                                              </p>
                                              <p class="graph_num  color_red ">4.0</p>
                                              <p class="graph_average">県平均：3.2</p>
                                            </div>
                                            <div class="school-d_graph_textarea posi02">
                                              <p class="graph_title">
                                                管理職との<br />人間関係
                                              </p>
                                              <p class="graph_num  color_red ">5.0</p>
                                              <p class="graph_average">県平均：2.8</p>
                                            </div>
                                            <div class="school-d_graph_textarea posi03">
                                              <p class="graph_title">
                                                保護者との<br />人間関係
                                              </p>
                                              <p class="graph_num  color_red ">4.0</p>
                                              <p class="graph_average">県平均：3.7</p>
                                            </div>
                                            <div class="school-d_graph_textarea posi04">
                                              <p class="graph_title">シフトの<br />融通</p>
                                              <p class="graph_num ">3.5</p>
                                              <p class="graph_average">県平均：3.4</p>
                                            </div>
                                            <div class="school-d_graph_textarea posi05">
                                              <p class="graph_title">園庭・園舎</p>
                                              <p class="graph_num  color_red ">5.0</p>
                                              <p class="graph_average">県平均：3.4</p>
                                            </div>
                                            <div class="school-d_graph_textarea posi06">
                                              <p class="graph_title">業務量</p>
                                              <p class="graph_num ">2.5</p>
                                              <p class="graph_average">県平均：3.1</p>
                                            </div>
                                            <div class="school-d_graph_textarea posi07">
                                              <p class="graph_title">保育方針</p>
                                              <p class="graph_num  color_red ">5.0</p>
                                              <p class="graph_average">県平均：3.1</p>
                                            </div>
                                            <div class="school-d_graph_textarea posi08">
                                              <p class="graph_title">給料<br />福利厚生</p>
                                              <p class="graph_num  color_red ">4.0</p>
                                              <p class="graph_average">県平均：3.2</p>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="school-d_mv_graph_sub">
                                      <p class="school-d_mv_graph_text">
                                          <span class="box_color01"></span>アンジェリカ東品川保育園
                                      </p>
                                      <p class="school-d_mv_graph_text">
                                          <span class="box_color02"></span>東京都平均
                                      </p>
                                  </div>
                              </div>
                                                              </div>
                      </div>
                      
                      <ul class="school-d_mv_info_list">
                          <li class="school-d_mv_info_item">
                              <p class="school-d_mv_info_title">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/talk_icon.svg" alt="口コミ数">口コミ数 :
                              </p>
                              <p class="school-d_mv_info_text">
                                  <span>8</span>件
                              </p>
                          </li>
                          <li class="school-d_mv_info_item">
                                                                  <p class="school-d_mv_info_title">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/time_icon.svg" alt="平均残業時間">平均残業時間 :
                              </p>
                              <p class="school-d_mv_info_text">
                                  <span>0.5</span>時間/日
                              </p>
                                                              </li>
                      </ul>
                      <div class="school-d_mv_btnarea">
                                                          <a href="https://hoikuhiroba-kuchikomi.com/answer/0/9453" class="school-d_mv_post_btn">
                              口コミを投稿<img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/btn_icon.svg" alt="口コミを投稿">
                          </a>
                                                          <div class="school-d_mv_follow">
                                                                  <button
                                  type="button"
                                  class="school-d_mv_follow_btn FollowBtn "
                                  data-nursery_id="9453"
                              >
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/add_icon.svg" alt="add" class="normal_icon">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="check" class="active_icon">
                                  <span>フォロー</span>
                              </button>
                                                                  <p class="school-d_mv_follow_text">※新着の口コミ・求人情報をメールでお知らせします</p>
                          </div>
                      </div>
                  </div>
                  <div class="school-d_mv_sub">
                      <div class="school-d_mv_graph school_content_relative">
                          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/character01.svg" alt="保育ひろば" class="school-d_mv_character">
                          <div class="school-d_mv_graph_box not_compare_with_prefecture_ave active  ">
                              <div class="school-d_mv_graph_main">
                                  <div class="school-d_mv_graph_pic">
                                      <div class="school-d_mv_graph_canvas">
                                        <canvas id="myChart01"></canvas>
                                      </div>
                                      <div class="school-d_graph_textarea posi01">
                                        <p class="graph_title">職員同士の<br />人間関係</p>
                                        <p class="graph_num  color_red ">4.0</p>
                                      </div>
                                      <div class="school-d_graph_textarea posi02">
                                        <p class="graph_title">管理職との<br />人間関係</p>
                                        <p class="graph_num  color_red ">5.0</p>                                            </div>
                                      <div class="school-d_graph_textarea posi03">
                                        <p class="graph_title">保護者との<br />人間関係</p>
                                        <p class="graph_num  color_red ">4.0</p>                                            </div>
                                      <div class="school-d_graph_textarea posi04">
                                        <p class="graph_title">シフトの<br />融通</p>
                                        <p class="graph_num ">3.5</p>
                                      </div>
                                      <div class="school-d_graph_textarea posi05">
                                        <p class="graph_title">園庭・園舎</p>
                                        <p class="graph_num  color_red ">5.0</p>
                                      </div>
                                      <div class="school-d_graph_textarea posi06">
                                        <p class="graph_title">業務量</p>
                                        <p class="graph_num ">2.5</p>
                                      </div>
                                      <div class="school-d_graph_textarea posi07">
                                        <p class="graph_title">保育方針</p>
                                        <p class="graph_num  color_red ">5.0</p>
                                      </div>
                                      <div class="school-d_graph_textarea posi08">
                                        <p class="graph_title">給料<br />福利厚生</p>
                                        <p class="graph_num  color_red ">4.0</p>
                                      </div>
                                  </div>
                              </div>
                                                                  <button type="button" class="school-d_mv_graph_btn" >
                                  <span>東京都平均との比較</span>
                              </button>
                                                              </div>
                          <div class="school-d_mv_graph_box compare_with_prefecture_ave ">
                              <div class="school-d_mv_graph_main">
                                  <div class="school-d_mv_graph_pic average_pic">
                                      <div class="school-d_mv_graph_canvas">
                                        <canvas id="myChart02"></canvas>
                                      </div>
                                      <div class="school-d_graph_textarea posi01">
                                        <p class="graph_title">職員同士の<br />人間関係</p>
                                        <p class="graph_num  color_red ">4.0</p>
                                        <p class="graph_average">県平均：3.2</p>
                                      </div>
                                      <div class="school-d_graph_textarea posi02">
                                        <p class="graph_title">管理職との<br />人間関係</p>
                                        <p class="graph_num  color_red ">5.0</p>
                                        <p class="graph_average">県平均：2.8</p>
                                      </div>
                                      <div class="school-d_graph_textarea posi03">
                                        <p class="graph_title">保護者との<br />人間関係</p>
                                        <p class="graph_num  color_red ">4.0</p>
                                        <p class="graph_average">県平均：3.7</p>
                                      </div>
                                      <div class="school-d_graph_textarea posi04">
                                        <p class="graph_title">シフトの<br />融通</p>
                                        <p class="graph_num ">3.5</p>
                                        <p class="graph_average">県平均：3.4</p>
                                      </div>
                                      <div class="school-d_graph_textarea posi05">
                                        <p class="graph_title">園庭・園舎</p>
                                        <p class="graph_num  color_red ">5.0</p>
                                        <p class="graph_average">県平均：3.4</p>
                                      </div>
                                      <div class="school-d_graph_textarea posi06">
                                        <p class="graph_title">業務量</p>
                                        <p class="graph_num ">2.5</p>
                                        <p class="graph_average">県平均：3.1</p>
                                      </div>
                                      <div class="school-d_graph_textarea posi07">
                                        <p class="graph_title">保育方針</p>
                                        <p class="graph_num  color_red ">5.0</p>
                                        <p class="graph_average">県平均：3.1</p>
                                      </div>
                                      <div class="school-d_graph_textarea posi08">
                                        <p class="graph_title">給料<br />福利厚生</p>
                                        <p class="graph_num  color_red ">4.0</p>
                                        <p class="graph_average">県平均：3.2</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="school-d_mv_graph_sub">
                                  <p class="school-d_mv_graph_text">
                                      <span class="box_color01"></span>アンジェリカ東品川保育園
                                  </p>
                                  <p class="school-d_mv_graph_text">
                                      <span class="box_color02"></span>東京都平均
                                  </p>
                              </div>
                          </div>
                                                      </div>
                  </div>
              </div>
                                  <div class="company-banner-pc">
                  <a href="https://hoikuhiroba-kuchikomi.com/answer" target="_blank" rel="noopener noreferrer" class="top_mv_bnr_block">
                      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/top/banner_pc_march.png" alt="オープン記念キャンペーン" class="common_pc_640">
                  </a>
              </div>
                                  <section class="school-d_cat_block">
                  <h1 class="common_title02">
                      <span>アンジェリカ東品川保育園の</span>
                      カテゴリー別口コミ・評判
                  </h1>
                  <ul class="school-d_btn_list">
                                                      <li class="school-d_btn_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries/9453/kuchikomi?evaluation_ids%5B%5D=1" class="school-d_btn_link">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon07.svg" alt="園庭・園舎">園庭・園舎 (1件)
                              </a>
                          </li>
                                                      <li class="school-d_btn_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries/9453/kuchikomi?evaluation_ids%5B%5D=2" class="school-d_btn_link">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon01.svg" alt="職員同士の人間関係">職員同士の人間関係 (1件)
                              </a>
                          </li>
                                                      <li class="school-d_btn_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries/9453/kuchikomi?evaluation_ids%5B%5D=3" class="school-d_btn_link">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon02.svg" alt="主任・園長との人間関係">主任・園長との人間関係 (1件)
                              </a>
                          </li>
                                                      <li class="school-d_btn_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries/9453/kuchikomi?evaluation_ids%5B%5D=4" class="school-d_btn_link">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon03.svg" alt="保護者との人間関係">保護者との人間関係 (1件)
                              </a>
                          </li>
                                                      <li class="school-d_btn_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries/9453/kuchikomi?evaluation_ids%5B%5D=5" class="school-d_btn_link">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon04.svg" alt="給与・福利厚生">給与・福利厚生 (1件)
                              </a>
                          </li>
                                                      <li class="school-d_btn_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries/9453/kuchikomi?evaluation_ids%5B%5D=6" class="school-d_btn_link">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon08.svg" alt="シフトの融通">シフトの融通 (1件)
                              </a>
                          </li>
                                                      <li class="school-d_btn_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries/9453/kuchikomi?evaluation_ids%5B%5D=7" class="school-d_btn_link">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon06.svg" alt="業務量">業務量 (1件)
                              </a>
                          </li>
                                                      <li class="school-d_btn_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries/9453/kuchikomi?evaluation_ids%5B%5D=8" class="school-d_btn_link">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon05.svg" alt="保育方針">保育方針 (1件)
                              </a>
                          </li>
                                              </ul>
              </section>
              <section class="school-d_type_block">
                  <h1 class="common_title02">
                      <span>アンジェリカ東品川保育園の</span>
                      雇用形態別口コミ・評判
                  </h1>
                  <ul class="school-d_btn_list">
                                                      <li class="school-d_btn_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries/9453/kuchikomi?contract_types%5B%5D=1" class="school-d_btn_link"  disabled >
                                  正社員(0件)
                              </a>
                          </li>
                                                      <li class="school-d_btn_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries/9453/kuchikomi?contract_types%5B%5D=2" class="school-d_btn_link" >
                                  契約・派遣社員(8件)
                              </a>
                          </li>
                                                      <li class="school-d_btn_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries/9453/kuchikomi?contract_types%5B%5D=3" class="school-d_btn_link"  disabled >
                                  パート・アルバイト(0件)
                              </a>
                          </li>
                                                      <li class="school-d_btn_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries/9453/kuchikomi?contract_types%5B%5D=4" class="school-d_btn_link"  disabled >
                                  その他(0件)
                              </a>
                          </li>
                                              </ul>
              </section>
          </div>
      </div>
      <section class="school-d_main_block" id="kyuujin_anker">
          <div class="common_inner">
              <div class="school-d_tab_block">
                  <ul class="school-d_tab_list">
                      <li class="school-d_tab_item  active " data-tab="Tab01" onclick="location.href='https://hoikuhiroba-kuchikomi.com/nurseries/9453/kuchikomi'">口コミ・評判<span>8</span></li>
                      <li class="school-d_tab_item " data-tab="Tab02" onclick="location.href='https://hoikuhiroba-kuchikomi.com/nurseries/9453/kyuujin'">求人情報<span>0</span></li>
                  </ul>
                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/character02.svg" alt="口コミ・評判・求人情報" class="school-d_tab_icon">
              </div>
              <div class="school-d_target_block">
                  <div class="school-d_target_box Tab01  active ">
                      <div class="school-d_post_layout">
                          <aside class="school-d_post_aside">
                              <form method="get" class="search_form" id="searchNurseryShow" action="https://hoikuhiroba-kuchikomi.com/nurseries/9453/kuchikomi">
                                  <input type="hidden" name="sort" value="">
                                  <h3 class="school-d_post_search_title">条件を絞り込む</h3>
                                  <div class="school-d_aside_keyword">
                                      <input type="text" name="keyword" class="school-d_aside_input" placeholder="キーワードを入力" value="">
                                      <button type="submit" class="school-d_aside_search_btn">
                                          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/search_icon.svg" alt="search">
                                      </button>
                                  </div>
                                  <div class="school-d_post_aside_box">
                                      <p class="school-d_post_aside_title">雇用形態</p>
                                      <ul class="school-d_post_aside_list">
                                                                                              <li class="school-d_post_aside_item">
                                                  <label class="school-d_post_check_label">
                                                      <input
                                                          type="checkbox"
                                                          name="contract_types[]"
                                                          value="1"
                                                                                                                           disabled                                                             >
                                                      <p class="school-d_post_check_text">正社員(0件)</p>
                                                  </label>
                                              </li>
                                                                                              <li class="school-d_post_aside_item">
                                                  <label class="school-d_post_check_label">
                                                      <input
                                                          type="checkbox"
                                                          name="contract_types[]"
                                                          value="2"
                                                                                                                                                                                      >
                                                      <p class="school-d_post_check_text">契約・派遣社員(8件)</p>
                                                  </label>
                                              </li>
                                                                                              <li class="school-d_post_aside_item">
                                                  <label class="school-d_post_check_label">
                                                      <input
                                                          type="checkbox"
                                                          name="contract_types[]"
                                                          value="3"
                                                                                                                           disabled                                                             >
                                                      <p class="school-d_post_check_text">パート・アルバイト(0件)</p>
                                                  </label>
                                              </li>
                                                                                              <li class="school-d_post_aside_item">
                                                  <label class="school-d_post_check_label">
                                                      <input
                                                          type="checkbox"
                                                          name="contract_types[]"
                                                          value="4"
                                                                                                                           disabled                                                             >
                                                      <p class="school-d_post_check_text">その他(0件)</p>
                                                  </label>
                                              </li>
                                                                                      </ul>
                                  </div>
                                  <div class="school-d_post_aside_box">
                                      <p class="school-d_post_aside_title">性別</p>
                                      <ul class="school-d_post_aside_list">
                                                                                              <li class="school-d_post_aside_item">
                                                  <label class="school-d_post_check_label">
                                                      <input
                                                          type="checkbox"
                                                          name="genders[]"
                                                          value="1"
                                                                                                                           disabled                                                             >
                                                      <p class="school-d_post_check_text">
                                                                                                                              男性
                                                                                                                          (0件)
                                                      </p>
                                                  </label>
                                              </li>
                                                                                              <li class="school-d_post_aside_item">
                                                  <label class="school-d_post_check_label">
                                                      <input
                                                          type="checkbox"
                                                          name="genders[]"
                                                          value="2"
                                                                                                                                                                                      >
                                                      <p class="school-d_post_check_text">
                                                                                                                              女性
                                                                                                                          (8件)
                                                      </p>
                                                  </label>
                                              </li>
                                                                                      </ul>
                                  </div>
                                  <div class="school-d_post_aside_box">
                                      <p class="school-d_post_aside_title">
                                          <span>アンジェリカ東品川保育園 の</span>
                                          カテゴリー別口コミ・評判
                                      </p>
                                      <ul class="school-d_post_aside_list">
                                                                                              <li class="school-d_post_aside_item">
                                                  <label class="school-d_post_check_label">
                                                      <input
                                                          type="checkbox"
                                                          name="evaluation_ids[]"
                                                          value="1"
                                                                                                                                                                                      >
                                                      <p class="school-d_post_check_text">
                                                          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon07.svg" alt="園庭・園舎" class="normal">
                                                          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon07_active.svg" alt="園庭・園舎" class="active">
                                                          園庭・園舎 (1件)
                                                      </p>
                                                  </label>
                                              </li>
                                                                                              <li class="school-d_post_aside_item">
                                                  <label class="school-d_post_check_label">
                                                      <input
                                                          type="checkbox"
                                                          name="evaluation_ids[]"
                                                          value="2"
                                                                                                                                                                                      >
                                                      <p class="school-d_post_check_text">
                                                          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon01.svg" alt="職員同士の人間関係" class="normal">
                                                          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon01_active.svg" alt="職員同士の人間関係" class="active">
                                                          職員同士の人間関係 (1件)
                                                      </p>
                                                  </label>
                                              </li>
                                                                                              <li class="school-d_post_aside_item">
                                                  <label class="school-d_post_check_label">
                                                      <input
                                                          type="checkbox"
                                                          name="evaluation_ids[]"
                                                          value="3"
                                                                                                                                                                                      >
                                                      <p class="school-d_post_check_text">
                                                          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon02.svg" alt="主任・園長との人間関係" class="normal">
                                                          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon02_active.svg" alt="主任・園長との人間関係" class="active">
                                                          主任・園長との人間関係 (1件)
                                                      </p>
                                                  </label>
                                              </li>
                                                                                              <li class="school-d_post_aside_item">
                                                  <label class="school-d_post_check_label">
                                                      <input
                                                          type="checkbox"
                                                          name="evaluation_ids[]"
                                                          value="4"
                                                                                                                                                                                      >
                                                      <p class="school-d_post_check_text">
                                                          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon03.svg" alt="保護者との人間関係" class="normal">
                                                          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon03_active.svg" alt="保護者との人間関係" class="active">
                                                          保護者との人間関係 (1件)
                                                      </p>
                                                  </label>
                                              </li>
                                                                                              <li class="school-d_post_aside_item">
                                                  <label class="school-d_post_check_label">
                                                      <input
                                                          type="checkbox"
                                                          name="evaluation_ids[]"
                                                          value="5"
                                                                                                                                                                                      >
                                                      <p class="school-d_post_check_text">
                                                          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon04.svg" alt="給与・福利厚生" class="normal">
                                                          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon04_active.svg" alt="給与・福利厚生" class="active">
                                                          給与・福利厚生 (1件)
                                                      </p>
                                                  </label>
                                              </li>
                                                                                              <li class="school-d_post_aside_item">
                                                  <label class="school-d_post_check_label">
                                                      <input
                                                          type="checkbox"
                                                          name="evaluation_ids[]"
                                                          value="6"
                                                                                                                                                                                      >
                                                      <p class="school-d_post_check_text">
                                                          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon08.svg" alt="シフトの融通" class="normal">
                                                          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon08_active.svg" alt="シフトの融通" class="active">
                                                          シフトの融通 (1件)
                                                      </p>
                                                  </label>
                                              </li>
                                                                                              <li class="school-d_post_aside_item">
                                                  <label class="school-d_post_check_label">
                                                      <input
                                                          type="checkbox"
                                                          name="evaluation_ids[]"
                                                          value="7"
                                                                                                                                                                                      >
                                                      <p class="school-d_post_check_text">
                                                          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon06.svg" alt="業務量" class="normal">
                                                          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon06_active.svg" alt="業務量" class="active">
                                                          業務量 (1件)
                                                      </p>
                                                  </label>
                                              </li>
                                                                                              <li class="school-d_post_aside_item">
                                                  <label class="school-d_post_check_label">
                                                      <input
                                                          type="checkbox"
                                                          name="evaluation_ids[]"
                                                          value="8"
                                                                                                                                                                                      >
                                                      <p class="school-d_post_check_text">
                                                          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon05.svg" alt="保育方針" class="normal">
                                                          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon05_active.svg" alt="保育方針" class="active">
                                                          保育方針 (1件)
                                                      </p>
                                                  </label>
                                              </li>
                                                                                      </ul>
                                  </div>
                                  <button type="submit" class="common_btn02" style="margin-top: 50px;">条件を確定する</button>
                              </form>
                          </aside>
                          <div class="school-d_post_main">
                              <div class="school-d_post_result_block">
                                  <h2 class="school-d_post_result_title">
                                      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/character03.svg" alt="口コミ・評判">
                                      <span>
                                          <small>アンジェリカ東品川保育園の</small>
                                          口コミ・評判(8件)
                                      </span>
                                  </h2>
                                  <div class="common_sp">
                                      <form method="get" class="search_form" action="https://hoikuhiroba-kuchikomi.com/nurseries/9453/kuchikomi">
                                          <h3 class="school-d_post_search_title">条件を絞り込む</h3>
                                          <div class="school-d_post_keyword_block">
                                              <div class="school-d_aside_keyword">
                                                  <input type="text" name="keyword" class="school-d_aside_input" placeholder="キーワードを入力" value="">
                                                  <button type="submit" class="school-d_aside_search_btn">
                                                      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/search_icon.svg" alt="search">
                                                  </button>
                                              </div>
                                              <button type="button" class="school-d_post_search_btn PopBtn" data-pop="Search">
                                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/search_btn.svg" alt="search">
                                              </button>
                                          </div>
                                      </form>
                                      <p class="school-d_post_result_text" style="display: none;">
                                          雇用形態：正社員
                                      </p>
                                  </div>
                                  <div class="school-d_post_select_block">
                                      <p class="school-d_post_select_title">表示順</p>
                                      <select name="sort" class="school-d_post_select">
                                          <option value="score"  selected >高評価順</option>
                                          <option value="score_low" >低評価順</option>
                                          <option value="created_at" >新着順</option>
                                      </select>
                                  </div>
                              </div>
                              <ul class="school-d_post_list">
                                                                              <li class="school-d_post_item"  data-inview_evaluation_id="989"     data-offset="-400"
data-nursery_id="9453"
>
<div class="school-d_post_head">
  <div class="school-d_post_head_main">
      <p class="school-d_post_head_subtitle">
          アンジェリカ東品川保育園 の口コミ・評判
      </p>
      <div class="school-d_post_head_title_block">
          <h3 class="school-d_post_head_title">園庭・園舎</h3>
          <p class="school-d_post_head_text  good-color ">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/face_icon01.svg" alt="良い点">良い点
                              </p>
      </div>
  </div>
  <div class="school-d_post_head_sub">
      <p class="school-d_post_head_rate_title">評価 :</p>
      <div class="school-d_post_head_rate">
          <ul class="school_star_list">
                                  <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li>
                              </ul>
          <p class="school-d_post_head_rate_num">
                                  5.0
                              </p>

      </div>
  </div>
</div>
<p class="school-d_post_info">
  <span>るなさん(女性・契約・派遣社員)</span><span>勤務時期:2021年～</span>
</p>
<div class="school-d_post_box">
  <div class="common_pc_640">
                  <p class="school-d_post_text PostText">
          <span data-text="ホールがきちんとあり、学芸会的な行事の際には舞台もきちんと設置されて本格的な舞台で披露出来るのは素晴らしいと思いました。なかなか、ここまで考えている園は無いと思います。運動会も同じ建物内で充分に出来る運動場を借りて出来るのも、別に小学校などの運動場を借りて行うよりも、荷物の移動ひとつとっても便利だと思いました。ただ、園庭はコンクリートで特に砂場も無かったのが残念でした。">ホールがきちんとあり、学芸会的な行事の際には舞台もきちんと設置されて本格的な舞台で披露出来るのは素晴らしいと思いました。なかなか、ここまで考えている園は無いと思います。運動会も同じ建物内で充分に出来る運動場を借りて出来るのも、別に小学校などの運動場を借りて行うよりも、荷物の移動ひとつとっても便利だと思いました。ただ、園庭はコンクリートで特に砂場も無かったのが残念でした。</span>
                          <button type="button" class="school-d_post_read_more ReadMoreBtn">もっと見る</button>
                      </p>
              </div>
  <div class="common_sp_640">
      <p class="school-d_post_text PostText">
          <span data-text="ホールがきちんとあり、学芸会的な行事の際には舞台もきちんと設置されて本格的な舞台で披露出来るのは素晴らしいと思いました。なかなか、ここまで考えている園は無いと思います。運動会も同じ建物内で充分に出来る運動場を借りて出来るのも、別に小学校などの運動場を借りて行うよりも、荷物の移動ひとつとっても便利だと思いました。ただ、園庭はコンクリートで特に砂場も無かったのが残念でした。">ホールがきちんとあり、学芸会的な行事の際には舞台もきちんと設置されて本格的な舞台で披露出来るのは素晴らしいと思いました。なかなか、ここまで考えている園は無いと思います。運動会も同じ建物内で充分に出来る運動場を借りて出来るのも、別に小学校などの運動場を借りて行うよりも、荷物の移動ひとつとっても便利だと思いました。ただ、園庭はコンクリートで特に砂場も無かったのが残念でした。</span>
                          <button type="button" class="school-d_post_read_more ReadMoreBtn">もっと見る</button>
                      </p>
  </div>
          
  
<div class="school-d_post_read_box PopBtn" data-pop="Read" style="display: none;">
  <p class="school-d_post_text">
      ホールがきちんとあり、学芸会的な行事の際には舞台もきちんと設置されて本格的な舞台で披露出来るのは素晴らしいと思いました。なかなか、ここまで考えている園は無いと思います。運動会も同じ建物内で充分に出来る運動場を借りて出来るのも、別に小学校などの運動場を借りて行うよりも、荷物の移動ひとつとっても便利だと思いました。ただ、園庭はコンクリートで特に砂場も無かったのが残念でした。
  </p>
  <p class="school-d_post_read_title">
      閲覧にはいずれかを選択してください
  </p>
  <div class="school-d_post_read_btnarea">
      <p class="school-d_post_read_text01">口コミの投稿</p>
      <p class="school-d_post_read_text02">転職サービスに登録</p>
  </div>
</div>
</div>
<div class="school-d_post_btnarea">
          <button type="button" class="school-d_post_like_btn LikeBtn " data-evaluation_id="989">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon.svg" alt="like" class="normal">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon_active.svg" alt="like" class="active">
      <span>いいね！</span>
      <small>0</small>
  </button>
  <button type="button" class="shool-d_post_report_btn PopBtn" data-pop="Report" data-evaluation_id="989"             >
                  報告する
              </button>
      </div>
</li>                                                                                    <li class="school-d_post_item"  data-inview_evaluation_id="990"     data-offset="-400"
data-nursery_id="9453"
>
<div class="school-d_post_head">
  <div class="school-d_post_head_main">
      <p class="school-d_post_head_subtitle">
          アンジェリカ東品川保育園 の口コミ・評判
      </p>
      <div class="school-d_post_head_title_block">
          <h3 class="school-d_post_head_title">主任・園長との人間関係</h3>
          <p class="school-d_post_head_text  good-color ">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/face_icon01.svg" alt="良い点">良い点
                              </p>
      </div>
  </div>
  <div class="school-d_post_head_sub">
      <p class="school-d_post_head_rate_title">評価 :</p>
      <div class="school-d_post_head_rate">
          <ul class="school_star_list">
                                  <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li>
                              </ul>
          <p class="school-d_post_head_rate_num">
                                  5.0
                              </p>

      </div>
  </div>
</div>
<p class="school-d_post_info">
  <span>るなさん(女性・契約・派遣社員)</span><span>勤務時期:2021年～</span>
</p>
<div class="school-d_post_box">
  <div class="common_pc_640">
                  <p class="school-d_post_text PostText">
          <span data-text="とても話しやすい園長先生で、人間的にも尊敬出来る人でした。私立の場合、園長先生でも若い30代40代前半程度の人も多いですが、やはり、50代以上の経験を深く重ねた人材が求められると思いますので、上に立つ人材は、頭脳面の明晰さ以外にも、部下の話しをきちんと聞いてくれる人でないと問題が解決しませんので。その点、私が困り急な連絡した際にも、的確な迅速な対応をしてくださり、本当に助かりました。">とても話しやすい園長先生で、人間的にも尊敬出来る人でした。私立の場合、園長先生でも若い30代40代前半程度の人も多いですが、やはり、50代以上の経験を深く重ねた人材が求められると思いますので、上に立つ人材は、頭脳面の明晰さ以外にも、部下の話しをきちんと聞いてくれる人でないと問題が解決しませんので。その点、私が困り急な連絡した際にも、的確な迅速な対応をしてくださり、本当に助かりました。</span>
                          <button type="button" class="school-d_post_read_more ReadMoreBtn">もっと見る</button>
                      </p>
              </div>
  <div class="common_sp_640">
      <p class="school-d_post_text PostText">
          <span data-text="とても話しやすい園長先生で、人間的にも尊敬出来る人でした。私立の場合、園長先生でも若い30代40代前半程度の人も多いですが、やはり、50代以上の経験を深く重ねた人材が求められると思いますので、上に立つ人材は、頭脳面の明晰さ以外にも、部下の話しをきちんと聞いてくれる人でないと問題が解決しませんので。その点、私が困り急な連絡した際にも、的確な迅速な対応をしてくださり、本当に助かりました。">とても話しやすい園長先生で、人間的にも尊敬出来る人でした。私立の場合、園長先生でも若い30代40代前半程度の人も多いですが、やはり、50代以上の経験を深く重ねた人材が求められると思いますので、上に立つ人材は、頭脳面の明晰さ以外にも、部下の話しをきちんと聞いてくれる人でないと問題が解決しませんので。その点、私が困り急な連絡した際にも、的確な迅速な対応をしてくださり、本当に助かりました。</span>
                          <button type="button" class="school-d_post_read_more ReadMoreBtn">もっと見る</button>
                      </p>
  </div>
          
  
<div class="school-d_post_read_box PopBtn" data-pop="Read" style="display: none;">
  <p class="school-d_post_text">
      とても話しやすい園長先生で、人間的にも尊敬出来る人でした。私立の場合、園長先生でも若い30代40代前半程度の人も多いですが、やはり、50代以上の経験を深く重ねた人材が求められると思いますので、上に立つ人材は、頭脳面の明晰さ以外にも、部下の話しをきちんと聞いてくれる人でないと問題が解決しませんので。その点、私が困り急な連絡した際にも、的確な迅速な対応をしてくださり、本当に助かりました。
  </p>
  <p class="school-d_post_read_title">
      閲覧にはいずれかを選択してください
  </p>
  <div class="school-d_post_read_btnarea">
      <p class="school-d_post_read_text01">口コミの投稿</p>
      <p class="school-d_post_read_text02">転職サービスに登録</p>
  </div>
</div>
</div>
<div class="school-d_post_btnarea">
          <button type="button" class="school-d_post_like_btn LikeBtn " data-evaluation_id="990">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon.svg" alt="like" class="normal">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon_active.svg" alt="like" class="active">
      <span>いいね！</span>
      <small>0</small>
  </button>
  <button type="button" class="shool-d_post_report_btn PopBtn" data-pop="Report" data-evaluation_id="990"             >
                  報告する
              </button>
      </div>
</li>                                                                                    <li class="school-d_post_item"  data-inview_evaluation_id="1004"     data-offset="-400"
data-nursery_id="9453"
>
<div class="school-d_post_head">
  <div class="school-d_post_head_main">
      <p class="school-d_post_head_subtitle">
          アンジェリカ東品川保育園 の口コミ・評判
      </p>
      <div class="school-d_post_head_title_block">
          <h3 class="school-d_post_head_title">保育方針</h3>
          <p class="school-d_post_head_text  good-color ">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/face_icon01.svg" alt="良い点">良い点
                              </p>
      </div>
  </div>
  <div class="school-d_post_head_sub">
      <p class="school-d_post_head_rate_title">評価 :</p>
      <div class="school-d_post_head_rate">
          <ul class="school_star_list">
                                  <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li>
                              </ul>
          <p class="school-d_post_head_rate_num">
                                  5.0
                              </p>

      </div>
  </div>
</div>
<p class="school-d_post_info">
  <span>るなさん(女性・契約・派遣社員)</span><span>勤務時期:2021年～</span>
</p>
<div class="school-d_post_box">
  <div class="common_pc_640">
                  <p class="school-d_post_text PostText">
          <span data-text="給食で用いる食材から、東京でなく確か埼玉あたりの方で農園とか使い、育てた野菜を利用していました。なかなか、そこまでやっている保育園は無いと思います。お米も稲刈りから体験に行ったり、子ども達に脱穀まで保育園の園庭で見せたり、育てたもち米で餅を食べるところまでを体験させる園は、この園しか私はしりません。素晴らしい保育方針だと思います。">給食で用いる食材から、東京でなく確か埼玉あたりの方で農園とか使い、育てた野菜を利用していました。なかなか、そこまでやっている保育園は無いと思います。お米も稲刈りから体験に行ったり、子ども達に脱穀まで保育園の園庭で見せたり、育てたもち米で餅を食べるところまでを体験させる園は、この園しか私はしりません。素晴らしい保育方針だと思います。</span>
                          <button type="button" class="school-d_post_read_more ReadMoreBtn">もっと見る</button>
                      </p>
              </div>
  <div class="common_sp_640">
      <p class="school-d_post_text PostText">
          <span data-text="給食で用いる食材から、東京でなく確か埼玉あたりの方で農園とか使い、育てた野菜を利用していました。なかなか、そこまでやっている保育園は無いと思います。お米も稲刈りから体験に行ったり、子ども達に脱穀まで保育園の園庭で見せたり、育てたもち米で餅を食べるところまでを体験させる園は、この園しか私はしりません。素晴らしい保育方針だと思います。">給食で用いる食材から、東京でなく確か埼玉あたりの方で農園とか使い、育てた野菜を利用していました。なかなか、そこまでやっている保育園は無いと思います。お米も稲刈りから体験に行ったり、子ども達に脱穀まで保育園の園庭で見せたり、育てたもち米で餅を食べるところまでを体験させる園は、この園しか私はしりません。素晴らしい保育方針だと思います。</span>
                          <button type="button" class="school-d_post_read_more ReadMoreBtn">もっと見る</button>
                      </p>
  </div>
          
  
<div class="school-d_post_read_box PopBtn" data-pop="Read" style="display: none;">
  <p class="school-d_post_text">
      給食で用いる食材から、東京でなく確か埼玉あたりの方で農園とか使い、育てた野菜を利用していました。なかなか、そこまでやっている保育園は無いと思います。お米も稲刈りから体験に行ったり、子ども達に脱穀まで保育園の園庭で見せたり、育てたもち米で餅を食べるところまでを体験させる園は、この園しか私はしりません。素晴らしい保育方針だと思います。
  </p>
  <p class="school-d_post_read_title">
      閲覧にはいずれかを選択してください
  </p>
  <div class="school-d_post_read_btnarea">
      <p class="school-d_post_read_text01">口コミの投稿</p>
      <p class="school-d_post_read_text02">転職サービスに登録</p>
  </div>
</div>
</div>
<div class="school-d_post_btnarea">
          <button type="button" class="school-d_post_like_btn LikeBtn " data-evaluation_id="1004">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon.svg" alt="like" class="normal">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon_active.svg" alt="like" class="active">
      <span>いいね！</span>
      <small>0</small>
  </button>
  <button type="button" class="shool-d_post_report_btn PopBtn" data-pop="Report" data-evaluation_id="1004"             >
                  報告する
              </button>
      </div>
</li>                                                                                    <li class="school-d_post_item"  data-inview_evaluation_id="991"     data-offset="-400"
data-nursery_id="9453"
>
<div class="school-d_post_head">
  <div class="school-d_post_head_main">
      <p class="school-d_post_head_subtitle">
          アンジェリカ東品川保育園 の口コミ・評判
      </p>
      <div class="school-d_post_head_title_block">
          <h3 class="school-d_post_head_title">給与・福利厚生</h3>
          <p class="school-d_post_head_text  good-color ">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/face_icon01.svg" alt="良い点">良い点
                              </p>
      </div>
  </div>
  <div class="school-d_post_head_sub">
      <p class="school-d_post_head_rate_title">評価 :</p>
      <div class="school-d_post_head_rate">
          <ul class="school_star_list">
                                  <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg' alt='star00'>
                          </li>
                              </ul>
          <p class="school-d_post_head_rate_num">
                                  4.0
                              </p>

      </div>
  </div>
</div>
<p class="school-d_post_info">
  <span>るなさん(女性・契約・派遣社員)</span><span>勤務時期:2021年～</span>
</p>
<div class="school-d_post_box">
  <div class="common_pc_640">
                  <p class="school-d_post_text PostText">
          <span data-text="私は派遣なので、最初から契約に基づいた中で就業していたので、何の不満もありませんでした。福利厚生とは違うかもしれませんが、昼休み休憩時間はきちんと取ることが出来て、外出も出来ましたので、派遣で行く園でも、昼休みの外出を禁止する園も世の中にはあるので、その点は何の問題もなく自由に休憩はとれました。">私は派遣なので、最初から契約に基づいた中で就業していたので、何の不満もありませんでした。福利厚生とは違うかもしれませんが、昼休み休憩時間はきちんと取ることが出来て、外出も出来ましたので、派遣で行く園でも、昼休みの外出を禁止する園も世の中にはあるので、その点は何の問題もなく自由に休憩はとれました。</span>
                          <button type="button" class="school-d_post_read_more ReadMoreBtn">もっと見る</button>
                      </p>
              </div>
  <div class="common_sp_640">
      <p class="school-d_post_text PostText">
          <span data-text="私は派遣なので、最初から契約に基づいた中で就業していたので、何の不満もありませんでした。福利厚生とは違うかもしれませんが、昼休み休憩時間はきちんと取ることが出来て、外出も出来ましたので、派遣で行く園でも、昼休みの外出を禁止する園も世の中にはあるので、その点は何の問題もなく自由に休憩はとれました。">私は派遣なので、最初から契約に基づいた中で就業していたので、何の不満もありませんでした。福利厚生とは違うかもしれませんが、昼休み休憩時間はきちんと取ることが出来て、外出も出来ましたので、派遣で行く園でも、昼休みの外出を禁止する園も世の中にはあるので、その点は何の問題もなく自由に休憩はとれました。</span>
                          <button type="button" class="school-d_post_read_more ReadMoreBtn">もっと見る</button>
                      </p>
  </div>
          
  
<div class="school-d_post_read_box PopBtn" data-pop="Read" style="display: none;">
  <p class="school-d_post_text">
      私は派遣なので、最初から契約に基づいた中で就業していたので、何の不満もありませんでした。福利厚生とは違うかもしれませんが、昼休み休憩時間はきちんと取ることが出来て、外出も出来ましたので、派遣で行く園でも、昼休みの外出を禁止する園も世の中にはあるので、その点は何の問題もなく自由に休憩はとれました。
  </p>
  <p class="school-d_post_read_title">
      閲覧にはいずれかを選択してください
  </p>
  <div class="school-d_post_read_btnarea">
      <p class="school-d_post_read_text01">口コミの投稿</p>
      <p class="school-d_post_read_text02">転職サービスに登録</p>
  </div>
</div>
</div>
<div class="school-d_post_btnarea">
          <button type="button" class="school-d_post_like_btn LikeBtn " data-evaluation_id="991">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon.svg" alt="like" class="normal">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon_active.svg" alt="like" class="active">
      <span>いいね！</span>
      <small>0</small>
  </button>
  <button type="button" class="shool-d_post_report_btn PopBtn" data-pop="Report" data-evaluation_id="991"             >
                  報告する
              </button>
      </div>
</li>                                                                                    <li class="school-d_post_item"  data-inview_evaluation_id="1001"     data-offset="-400"
data-nursery_id="9453"
>
<div class="school-d_post_head">
  <div class="school-d_post_head_main">
      <p class="school-d_post_head_subtitle">
          アンジェリカ東品川保育園 の口コミ・評判
      </p>
      <div class="school-d_post_head_title_block">
          <h3 class="school-d_post_head_title">職員同士の人間関係</h3>
          <p class="school-d_post_head_text  good-color ">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/face_icon01.svg" alt="良い点">良い点
                              </p>
      </div>
  </div>
  <div class="school-d_post_head_sub">
      <p class="school-d_post_head_rate_title">評価 :</p>
      <div class="school-d_post_head_rate">
          <ul class="school_star_list">
                                  <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg' alt='star00'>
                          </li>
                              </ul>
          <p class="school-d_post_head_rate_num">
                                  4.0
                              </p>

      </div>
  </div>
</div>
<p class="school-d_post_info">
  <span>るなさん(女性・契約・派遣社員)</span><span>勤務時期:2021年～</span>
</p>
<div class="school-d_post_box">
  <div class="common_pc_640">
                  <p class="school-d_post_text PostText">
          <span data-text="私は各クラスで補助的に動いたので、クラス運営の深い部分には関わってませんが、自分がわからないことを普通に聞きやすい職場でした。まずは、自分から聞いて、それが的確に答えが返って来ない園も、今までには色々経験ありますが、そんな矛盾は全く感じませんでした。正社員の皆さんが良く把握されているのがわかりました。それだけスキルの高い人が集まっているのだと思いました。">私は各クラスで補助的に動いたので、クラス運営の深い部分には関わってませんが、自分がわからないことを普通に聞きやすい職場でした。まずは、自分から聞いて、それが的確に答えが返って来ない園も、今までには色々経験ありますが、そんな矛盾は全く感じませんでした。正社員の皆さんが良く把握されているのがわかりました。それだけスキルの高い人が集まっているのだと思いました。</span>
                          <button type="button" class="school-d_post_read_more ReadMoreBtn">もっと見る</button>
                      </p>
              </div>
  <div class="common_sp_640">
      <p class="school-d_post_text PostText">
          <span data-text="私は各クラスで補助的に動いたので、クラス運営の深い部分には関わってませんが、自分がわからないことを普通に聞きやすい職場でした。まずは、自分から聞いて、それが的確に答えが返って来ない園も、今までには色々経験ありますが、そんな矛盾は全く感じませんでした。正社員の皆さんが良く把握されているのがわかりました。それだけスキルの高い人が集まっているのだと思いました。">私は各クラスで補助的に動いたので、クラス運営の深い部分には関わってませんが、自分がわからないことを普通に聞きやすい職場でした。まずは、自分から聞いて、それが的確に答えが返って来ない園も、今までには色々経験ありますが、そんな矛盾は全く感じませんでした。正社員の皆さんが良く把握されているのがわかりました。それだけスキルの高い人が集まっているのだと思いました。</span>
                          <button type="button" class="school-d_post_read_more ReadMoreBtn">もっと見る</button>
                      </p>
  </div>
          
  
<div class="school-d_post_read_box PopBtn" data-pop="Read" style="display: none;">
  <p class="school-d_post_text">
      私は各クラスで補助的に動いたので、クラス運営の深い部分には関わってませんが、自分がわからないことを普通に聞きやすい職場でした。まずは、自分から聞いて、それが的確に答えが返って来ない園も、今までには色々経験ありますが、そんな矛盾は全く感じませんでした。正社員の皆さんが良く把握されているのがわかりました。それだけスキルの高い人が集まっているのだと思いました。
  </p>
  <p class="school-d_post_read_title">
      閲覧にはいずれかを選択してください
  </p>
  <div class="school-d_post_read_btnarea">
      <p class="school-d_post_read_text01">口コミの投稿</p>
      <p class="school-d_post_read_text02">転職サービスに登録</p>
  </div>
</div>
</div>
<div class="school-d_post_btnarea">
          <button type="button" class="school-d_post_like_btn LikeBtn " data-evaluation_id="1001">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon.svg" alt="like" class="normal">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon_active.svg" alt="like" class="active">
      <span>いいね！</span>
      <small>0</small>
  </button>
  <button type="button" class="shool-d_post_report_btn PopBtn" data-pop="Report" data-evaluation_id="1001"             >
                  報告する
              </button>
      </div>
</li>                                                                                    <li class="school-d_post_item"  data-inview_evaluation_id="1002"     data-offset="-400"
data-nursery_id="9453"
>
<div class="school-d_post_head">
  <div class="school-d_post_head_main">
      <p class="school-d_post_head_subtitle">
          アンジェリカ東品川保育園 の口コミ・評判
      </p>
      <div class="school-d_post_head_title_block">
          <h3 class="school-d_post_head_title">保護者との人間関係</h3>
          <p class="school-d_post_head_text  good-color ">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/face_icon01.svg" alt="良い点">良い点
                              </p>
      </div>
  </div>
  <div class="school-d_post_head_sub">
      <p class="school-d_post_head_rate_title">評価 :</p>
      <div class="school-d_post_head_rate">
          <ul class="school_star_list">
                                  <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg' alt='star00'>
                          </li>
                              </ul>
          <p class="school-d_post_head_rate_num">
                                  4.0
                              </p>

      </div>
  </div>
</div>
<p class="school-d_post_info">
  <span>るなさん(女性・契約・派遣社員)</span><span>勤務時期:2021年～</span>
</p>
<div class="school-d_post_box">
  <div class="common_pc_640">
                  <p class="school-d_post_text PostText">
          <span data-text="自分自身が保護者と直接対応することは無いポジションでしたので、深くは理解してませんが、皆さん、普通に穏やかな状況でした。私が直接見た中では、笑顔で挨拶を交わす程度でしたが、何の問題もなかったです。地域的にも普通に治安の良い環境の街でした。">自分自身が保護者と直接対応することは無いポジションでしたので、深くは理解してませんが、皆さん、普通に穏やかな状況でした。私が直接見た中では、笑顔で挨拶を交わす程度でしたが、何の問題もなかったです。地域的にも普通に治安の良い環境の街でした。</span>
                          <button type="button" class="school-d_post_read_more ReadMoreBtn">もっと見る</button>
                      </p>
              </div>
  <div class="common_sp_640">
      <p class="school-d_post_text PostText">
          <span data-text="自分自身が保護者と直接対応することは無いポジションでしたので、深くは理解してませんが、皆さん、普通に穏やかな状況でした。私が直接見た中では、笑顔で挨拶を交わす程度でしたが、何の問題もなかったです。地域的にも普通に治安の良い環境の街でした。">自分自身が保護者と直接対応することは無いポジションでしたので、深くは理解してませんが、皆さん、普通に穏やかな状況でした。私が直接見た中では、笑顔で挨拶を交わす程度でしたが、何の問題もなかったです。地域的にも普通に治安の良い環境の街でした。</span>
                          <button type="button" class="school-d_post_read_more ReadMoreBtn">もっと見る</button>
                      </p>
  </div>
          
  
<div class="school-d_post_read_box PopBtn" data-pop="Read" style="display: none;">
  <p class="school-d_post_text">
      自分自身が保護者と直接対応することは無いポジションでしたので、深くは理解してませんが、皆さん、普通に穏やかな状況でした。私が直接見た中では、笑顔で挨拶を交わす程度でしたが、何の問題もなかったです。地域的にも普通に治安の良い環境の街でした。
  </p>
  <p class="school-d_post_read_title">
      閲覧にはいずれかを選択してください
  </p>
  <div class="school-d_post_read_btnarea">
      <p class="school-d_post_read_text01">口コミの投稿</p>
      <p class="school-d_post_read_text02">転職サービスに登録</p>
  </div>
</div>
</div>
<div class="school-d_post_btnarea">
          <button type="button" class="school-d_post_like_btn LikeBtn " data-evaluation_id="1002">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon.svg" alt="like" class="normal">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon_active.svg" alt="like" class="active">
      <span>いいね！</span>
      <small>0</small>
  </button>
  <button type="button" class="shool-d_post_report_btn PopBtn" data-pop="Report" data-evaluation_id="1002"             >
                  報告する
              </button>
      </div>
</li>                                                                                    <li class="school-d_post_item"  data-inview_evaluation_id="1003"     data-offset="-400"
data-nursery_id="9453"
>
<div class="school-d_post_head">
  <div class="school-d_post_head_main">
      <p class="school-d_post_head_subtitle">
          アンジェリカ東品川保育園 の口コミ・評判
      </p>
      <div class="school-d_post_head_title_block">
          <h3 class="school-d_post_head_title">シフトの融通</h3>
          <p class="school-d_post_head_text  good-color ">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/face_icon01.svg" alt="良い点">良い点
                              </p>
      </div>
  </div>
  <div class="school-d_post_head_sub">
      <p class="school-d_post_head_rate_title">評価 :</p>
      <div class="school-d_post_head_rate">
          <ul class="school_star_list">
                                  <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star05.svg' alt='star05'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg' alt='star00'>
                          </li>
                              </ul>
          <p class="school-d_post_head_rate_num">
                                  3.5
                              </p>

      </div>
  </div>
</div>
<p class="school-d_post_info">
  <span>るなさん(女性・契約・派遣社員)</span><span>勤務時期:2021年～</span>
</p>
<div class="school-d_post_box">
  <div class="common_pc_640">
                  <p class="school-d_post_text PostText">
          <span data-text="シフトに関しては、自分から何でもやれる感じで契約していたので、それをフルに活かされていた様に思います。つまりは、日中のみの通常番の時間帯よりも、違う時間帯が多かったですが、それは、それだけ私を信頼して使ってくれてた様にも思えます。自分自身が融通が効くので、大丈夫でした。">シフトに関しては、自分から何でもやれる感じで契約していたので、それをフルに活かされていた様に思います。つまりは、日中のみの通常番の時間帯よりも、違う時間帯が多かったですが、それは、それだけ私を信頼して使ってくれてた様にも思えます。自分自身が融通が効くので、大丈夫でした。</span>
                          <button type="button" class="school-d_post_read_more ReadMoreBtn">もっと見る</button>
                      </p>
              </div>
  <div class="common_sp_640">
      <p class="school-d_post_text PostText">
          <span data-text="シフトに関しては、自分から何でもやれる感じで契約していたので、それをフルに活かされていた様に思います。つまりは、日中のみの通常番の時間帯よりも、違う時間帯が多かったですが、それは、それだけ私を信頼して使ってくれてた様にも思えます。自分自身が融通が効くので、大丈夫でした。">シフトに関しては、自分から何でもやれる感じで契約していたので、それをフルに活かされていた様に思います。つまりは、日中のみの通常番の時間帯よりも、違う時間帯が多かったですが、それは、それだけ私を信頼して使ってくれてた様にも思えます。自分自身が融通が効くので、大丈夫でした。</span>
                          <button type="button" class="school-d_post_read_more ReadMoreBtn">もっと見る</button>
                      </p>
  </div>
          
  
<div class="school-d_post_read_box PopBtn" data-pop="Read" style="display: none;">
  <p class="school-d_post_text">
      シフトに関しては、自分から何でもやれる感じで契約していたので、それをフルに活かされていた様に思います。つまりは、日中のみの通常番の時間帯よりも、違う時間帯が多かったですが、それは、それだけ私を信頼して使ってくれてた様にも思えます。自分自身が融通が効くので、大丈夫でした。
  </p>
  <p class="school-d_post_read_title">
      閲覧にはいずれかを選択してください
  </p>
  <div class="school-d_post_read_btnarea">
      <p class="school-d_post_read_text01">口コミの投稿</p>
      <p class="school-d_post_read_text02">転職サービスに登録</p>
  </div>
</div>
</div>
<div class="school-d_post_btnarea">
          <button type="button" class="school-d_post_like_btn LikeBtn " data-evaluation_id="1003">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon.svg" alt="like" class="normal">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon_active.svg" alt="like" class="active">
      <span>いいね！</span>
      <small>0</small>
  </button>
  <button type="button" class="shool-d_post_report_btn PopBtn" data-pop="Report" data-evaluation_id="1003"             >
                  報告する
              </button>
      </div>
</li>                                                                                    <li class="school-d_post_item"  data-inview_evaluation_id="992"     data-offset="-400"
data-nursery_id="9453"
>
<div class="school-d_post_head">
  <div class="school-d_post_head_main">
      <p class="school-d_post_head_subtitle">
          アンジェリカ東品川保育園 の口コミ・評判
      </p>
      <div class="school-d_post_head_title_block">
          <h3 class="school-d_post_head_title">業務量</h3>
          <p class="school-d_post_head_text  bad-color ">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/face_icon02.svg" alt="改善点">改善点
                              </p>
      </div>
  </div>
  <div class="school-d_post_head_sub">
      <p class="school-d_post_head_rate_title">評価 :</p>
      <div class="school-d_post_head_rate">
          <ul class="school_star_list">
                                  <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star05.svg' alt='star05'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg' alt='star00'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg' alt='star00'>
                          </li>
                              </ul>
          <p class="school-d_post_head_rate_num">
                                  2.5
                              </p>

      </div>
  </div>
</div>
<p class="school-d_post_info">
  <span>るなさん(女性・契約・派遣社員)</span><span>勤務時期:2021年～</span>
</p>
<div class="school-d_post_box">
  <div class="common_pc_640">
                  <p class="school-d_post_text PostText">
          <span data-text="私自身は持ち帰りやサービス残業をする様な業務は一切ありませんでした。遅番で残業があった際には、きちんと残業を申告するように言われましたし、何の問題もありませんでした。ただ、正社員の人達の場合には、自分の理想の保育をする為には、諸々と勤務時間外の業務はあったと思われます。正社員の人数を公立並みとはいかなくとも、もう少し増えた方が良いと思いました。">私自身は持ち帰りやサービス残業をする様な業務は一切ありませんでした。遅番で残業があった際には、きちんと残業を申告するように言われましたし、何の問題もありませんでした。ただ、正社員の人達の場合には、自分の理想の保育をする為には、諸々と勤務時間外の業務はあったと思われます。正社員の人数を公立並みとはいかなくとも、もう少し増えた方が良いと思いました。</span>
                          <button type="button" class="school-d_post_read_more ReadMoreBtn">もっと見る</button>
                      </p>
              </div>
  <div class="common_sp_640">
      <p class="school-d_post_text PostText">
          <span data-text="私自身は持ち帰りやサービス残業をする様な業務は一切ありませんでした。遅番で残業があった際には、きちんと残業を申告するように言われましたし、何の問題もありませんでした。ただ、正社員の人達の場合には、自分の理想の保育をする為には、諸々と勤務時間外の業務はあったと思われます。正社員の人数を公立並みとはいかなくとも、もう少し増えた方が良いと思いました。">私自身は持ち帰りやサービス残業をする様な業務は一切ありませんでした。遅番で残業があった際には、きちんと残業を申告するように言われましたし、何の問題もありませんでした。ただ、正社員の人達の場合には、自分の理想の保育をする為には、諸々と勤務時間外の業務はあったと思われます。正社員の人数を公立並みとはいかなくとも、もう少し増えた方が良いと思いました。</span>
                          <button type="button" class="school-d_post_read_more ReadMoreBtn">もっと見る</button>
                      </p>
  </div>
          
  
<div class="school-d_post_read_box PopBtn" data-pop="Read" style="display: none;">
  <p class="school-d_post_text">
      私自身は持ち帰りやサービス残業をする様な業務は一切ありませんでした。遅番で残業があった際には、きちんと残業を申告するように言われましたし、何の問題もありませんでした。ただ、正社員の人達の場合には、自分の理想の保育をする為には、諸々と勤務時間外の業務はあったと思われます。正社員の人数を公立並みとはいかなくとも、もう少し増えた方が良いと思いました。
  </p>
  <p class="school-d_post_read_title">
      閲覧にはいずれかを選択してください
  </p>
  <div class="school-d_post_read_btnarea">
      <p class="school-d_post_read_text01">口コミの投稿</p>
      <p class="school-d_post_read_text02">転職サービスに登録</p>
  </div>
</div>
</div>
<div class="school-d_post_btnarea">
          <button type="button" class="school-d_post_like_btn LikeBtn " data-evaluation_id="992">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon.svg" alt="like" class="normal">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon_active.svg" alt="like" class="active">
      <span>いいね！</span>
      <small>0</small>
  </button>
  <button type="button" class="shool-d_post_report_btn PopBtn" data-pop="Report" data-evaluation_id="992"             >
                  報告する
              </button>
      </div>
</li>                                                                            </ul>
                                                              </div>
                      </div>
                  </div>
                  <div class="school-d_target_box Tab02 "">
                      <div class="school-d_recruit_layout">
                          <div class="school-d_recruit_main">
                              <h2 class="school-d_recruit_title">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/character05.svg" alt="求人情報">
                                  <span>
                                      <small>アンジェリカ東品川保育園の</small>
                                      求人情報(0件)
                                  </span>
                              </h2>
                              <ul class="school-d_recruit_list">
                                                                      </ul>
                          </div>
                          <aside class="school-d_recruit_aside">
                              <h2 class="school-d_recruit_aside_title">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/character06.svg" alt="詳細情報">
                                  <span>
                                      <small>アンジェリカ東品川保育園の</small>
                                      詳細情報
                                  </span>
                              </h2>
                              <ul class="school-d_recruit_aside_list">
                                  <li class="school-d_recruit_aside_item">
                                      <h3 class="school-d_recruit_aside_subtitle">園名</h3>
                                      <p class="school-d_recruit_aside_text">
                                          アンジェリカ東品川保育園
                                      </p>
                                  </li>
                                  <li class="school-d_recruit_aside_item">
                                      <h3 class="school-d_recruit_aside_subtitle">施設形態</h3>
                                      <p class="school-d_recruit_aside_text">
                                          認可保育園
                                      </p>
                                  </li>
                                  <li class="school-d_recruit_aside_item">
                                      <h3 class="school-d_recruit_aside_subtitle">運営</h3>
                                      <p class="school-d_recruit_aside_text">
                                          株式会社
                                      </p>
                                  </li>
                                  <li class="school-d_recruit_aside_item">
                                      <h3 class="school-d_recruit_aside_subtitle">アクセス</h3>
                                      <p class="school-d_recruit_aside_text">
                                          
                                      </p>
                                  </li>
                                  <li class="school-d_recruit_aside_item">
                                      <h3 class="school-d_recruit_aside_subtitle">受動喫煙対策</h3>
                                      <p class="school-d_recruit_aside_text">
                                          あり：敷地内禁煙
                                      </p>
                                  </li>
                                  <li class="school-d_recruit_aside_item">
                                      <h3 class="school-d_recruit_aside_subtitle">運営元法人情報</h3>
                                      <p class="school-d_recruit_aside_text">
                                          株式会社WITHホールディングス<br>
                                          埼玉県 川口市 飯塚1-2-16<br>
                                          <a href="https://withgroup-recruit.jp/" target="_blank" rel="noopener noreferrer">https://withgroup-recruit.jp/</a>
                                      </p>
                                  </li>
                              </ul>
                          </aside>
                      </div>
                  </div>
              </div>
          </div>
      </section>
                      <section class="school-d_others_block">
              <div class="common_inner">
                  <h1 class="common_title02">
                      <span>アンジェリカ東品川保育園から</span>
                      お近くの保育園
                  </h1>
                  <div class="school-d_others_main">
                      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/character04.svg" alt="お近くの保育園" class="school-d_others_icon">
                      <ul class="school-d_others_list">
                                                              <li class="school-d_others_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">認可保育園</p>
                                  <button type="button" class="common_follow_btn FollowBtn " data-nursery_id="9687">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">ほっぺるランド東品川</h2>
  <p class="school_place_text">
      株式会社テノ.コーポレーション / 東京都品川区東品川３丁目２５-９
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star01.svg' alt='star01'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg' alt='star00'>
                          </li>
          </ul>
          <p class="school_rate_num">3.1</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>8</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon02.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">主任・園長との人間関係</h3>
                  <p class="school_talk_text">
                      園長先生はとてもいい人で東京のお母さんでした。挑戦してみたいことには背中を押してくれてのびのび保育させてくれました。主任は保育経験も浅く自分のやりたい保育を優先する傾向があったため相談は全て園長先生にしていました。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/9687/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                                                                    <li class="school-d_others_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">認可保育園</p>
                                  <button type="button" class="common_follow_btn FollowBtn " data-nursery_id="22500">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">品川区立ゆたか保育園</h2>
  <p class="school_place_text">
      品川区立ゆたか保育園 / 東京都品川区豊町1丁目18番15号
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star05.svg' alt='star05'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg' alt='star00'>
                          </li>
          </ul>
          <p class="school_rate_num">3.5</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>3</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon01.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">職員同士の人間関係</h3>
                  <p class="school_talk_text">
                      主任・園長共に気さくに接していただける方たちです。また、経験のある先生たちがほとんどですので、保育で困ったことがあれば直ぐ相談できるような良い環境でした。人によって合う、合わないはあるかもしれませんが、それを置いても良い場所だったと思います。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/22500/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                                                                    <li class="school-d_others_item">
<div class="school_box">
  <div class="school_info_block">
                      <p class="school_label">認可保育園</p>
                                  <button type="button" class="common_follow_btn FollowBtn " data-nursery_id="87">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_add_icon.svg" alt="add" class="normal_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/follow_check_icon.svg" alt="checked" class="active_icon">
              <span>フォロー</span>
          </button>
              </div>
  <h2 class="school_title">ベネッセ大崎広小路保育園</h2>
  <p class="school_place_text">
      株式会社ベネッセスタイルケア / 東京都品川区大崎４丁目4-1-2 ウィン第2五反田ビル2F
  </p>
  <div class="school_content_relative">
      <div class="school_rate_block blur score_none ">
          <ul class="school_star_list">
              <li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg' alt='star10'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star09.svg' alt='star09'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg' alt='star00'>
                          </li><li class=school_star_item>
                              <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg' alt='star00'>
                          </li>
          </ul>
          <p class="school_rate_num">2.9</p>
          
          
      </div>
              </div>
  <p class="school_post_text">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/comment_icon.svg" alt="talk">口コミ数<span>4</span>件
  </p>
  
  
  <div class="school_content_relative">
                                      <div class="school_talk_block">
              <div class="school_talk_sub">
                  <img src='https://hoikuhiroba-kuchikomi.com/assets/user/images/face/good_icon01.svg' alt="良い点">
                  <p class="shcool_talk_sub_text color-good">良い点</p>
              </div>
              <div class="school_talk_main">
                  <h3 class="school_talk_title">園庭・園舎</h3>
                  <p class="school_talk_text">
                      園庭はなし。ビルの中の２階部分が保育園なので初めての人はわかりにくい場所かもしれない。園内に水遊び場としての部屋がある。
園庭はないけれど近場の公園がたくさんあるので散歩で楽しめた。
目黒川も近いので川沿いの散歩もできる。
                  </p>
              </div>
          </div>
                              </div>
  <a href="https://hoikuhiroba-kuchikomi.com/nurseries/87/kuchikomi" class="school_detail_btn">詳細を見る</a>
</div>
</li>                                                            </ul>
                  </div>
              </div>
          </section>
                  <section class="common_qa_block school-d">
<div class="common_inner">
  <h2 class="common_title01">よくあるご質問</h1>
  <ul class="qa_list">
                                      <li class="qa_item">
              <div class="qa_quest_block QABtn">
                  <p class="qa_quest_icon">Q.</p>
                  <h3 class="qa_quest_title">
                      アンジェリカ東品川保育園で働く保育士の残業時間を知りたいです。
                  </h3>
              </div>
              <div class="qa_answer_block">
                  <p class="qa_answer_text">
                      <span class="qa_answer_icon">A.</span>
                      <span>アンジェリカ東品川保育園に実際に働いたことがある保育士の残業時間は1日あたり0.5時間です。</span>
                  </p>
              </div>
          </li>
                                          <li class="qa_item">
              <div class="qa_quest_block QABtn">
                  <p class="qa_quest_icon">Q.</p>
                  <h3 class="qa_quest_title">
                      アンジェリカ東品川保育園の保育士同士や園長、保護者との人間関係は分かりますか？
                  </h3>
              </div>
              <div class="qa_answer_block">
                  <p class="qa_answer_text">
                      <span class="qa_answer_icon">A.</span>
                      <span>アンジェリカ東品川保育園に実際に働いたことがある保育士が人間関係に関して3件口コミを投稿しています。</span>
                  </p>
              </div>
          </li>
                                                          <li class="qa_item">
          <div class="qa_quest_block QABtn">
              <p class="qa_quest_icon">Q.</p>
              <h3 class="qa_quest_title">
                  保育士の口コミ・評判を見るのは無料でできますか？
              </h3>
          </div>
          <div class="qa_answer_block">
              <p class="qa_answer_text">
                  <span class="qa_answer_icon">A.</span>
                  <span>はい、無料ですべての口コミをご覧いただけます。</span>
              </p>
          </div>
      </li>
                  <li class="qa_item">
          <div class="qa_quest_block QABtn">
              <p class="qa_quest_icon">Q.</p>
              <h3 class="qa_quest_title">
                  保育士口コミ・評判の中で、評価が高い保育園の求人を紹介していただきたいです。
              </h3>
          </div>
          <div class="qa_answer_block">
              <p class="qa_answer_text">
                  <span class="qa_answer_icon">A.</span>
                  <span>姉妹サービスである<a href="https://hitoshia-hoiku.com/agent/signup" target="_blank" rel="noopener noreferrer" style="display: inline">ヒトシア保育</a>にて口コミの評価が高いご希望に沿った保育園をご紹介することが可能です。</span>
              </p>
          </div>
      </li>
                  <li class="qa_item">
          <div class="qa_quest_block QABtn">
              <p class="qa_quest_icon">Q.</p>
              <h3 class="qa_quest_title">
                  保育ひろばに会員登録をしたら何ができるようになりますか？
              </h3>
          </div>
          <div class="qa_answer_block">
              <p class="qa_answer_text">
                  <span class="qa_answer_icon">A.</span>
                  <span>気になる保育園や求人を保存し、後日に再度閲覧ができたり、通知を受け取ったりすることが可能になります。</span>
              </p>
          </div>
      </li>
              </ul>
</div>
</section>            <section class="common_campaign_block school-d">
<div class="common_inner">
          <div class="campaign_layout_block">
      <div class="campaign_search_block">
          <h2 class="campaign_search_main_title">保育士による<br class="common_sp_640">口コミ・評判を探す</h2>
          <div class="campaign_search_box">
              <h3 class="campaign_search_title">法人名で口コミを探す</h3>
              <a href="https://hoikuhiroba-kuchikomi.com/company" class="campaign_search_btn">法人一覧を見る</a>
          </div>
                              <div class="campaign_search_box">
                  <h3 class="campaign_search_title">施設形態から口コミを探す</h3>
                  <ul class="campaign_search_list" id="CampaignList">
                                                      <li class="campaign_search_item ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=1" class="campaign_search_link">認可保育園</a>
                          </li>
                                                      <li class="campaign_search_item ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=2" class="campaign_search_link">認証保育園</a>
                          </li>
                                                      <li class="campaign_search_item ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=3" class="campaign_search_link">事業所内保育</a>
                          </li>
                                                      <li class="campaign_search_item ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=4" class="campaign_search_link">院内保育</a>
                          </li>
                                                      <li class="campaign_search_item ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=5" class="campaign_search_link">小規模保育</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=6" class="campaign_search_link">家庭的保育（保育ママ）</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=7" class="campaign_search_link">幼稚園</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=8" class="campaign_search_link">認定こども園</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=9" class="campaign_search_link">託児所</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=10" class="campaign_search_link">病児・病後児保育室</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=11" class="campaign_search_link">児童発達支援施設</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=12" class="campaign_search_link">子育てひろば</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=13" class="campaign_search_link">学童</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=14" class="campaign_search_link">ベビーシッター・ナニー</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=15" class="campaign_search_link">その他</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=16" class="campaign_search_link">保育園</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=17" class="campaign_search_link">訪問型保育</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=18" class="campaign_search_link">放課後等デイサービス</a>
                          </li>
                                                      <li class="campaign_search_item  no_active CampaignItem ">
                              <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=19" class="campaign_search_link">企業主導型保育</a>
                          </li>
                                              </ul>
                  <button type="button" class="campaign_more_btn" id="CampaignBtn"><span></span></button>
              </div>
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/character/icon07.svg" alt="保育士による口コミ・評判を探す" class="campaign_search_icon">
                      </div>
      <div class="campaign_post_block">
          <h2 class="campaign_post_title">口コミを投稿する</h2>
          <p class="campaign_post_text">
              あなたの知っているちょっとした情報が、誰かにとっては大きな一歩を踏み出す力へと変わります。保育士の保育園選びに、助け合いの輪を広げませんか？
          </p>
          <div class="campaign_post_btnarea">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/character/icon08_pc.svg" alt="口コミを投稿する" class="common_pc_640 campaign_post_icon">
              <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/character/icon08_sp.svg" alt="口コミを投稿する" class="common_sp_640 campaign_post_icon">
                                      <a href="https://hoikuhiroba-kuchikomi.com/answer" class="campaign_post_btn">口コミを投稿</a>
                              </div>
      </div>
  </div>
  
</div>
</section>            <section class="common_area_block ">
<div class="common_inner">
  <div class="common_pc_640" >
      <h2 class="common_title01">
          エリアから気になる保育園を見つける
      </h2>
      <div class="common_area_main">
          <div class="common_area_box">
              <p class="common_area_title">東京23区</p>
              <ul class="area_list">
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/chiyodaku" class="area_link">千代田区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/chuuouku" class="area_link">中央区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/minatoku" class="area_link">港区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/shinjukuku" class="area_link">新宿区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/bunkyouku" class="area_link">文京区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/taitouku" class="area_link">台東区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/sumidaku" class="area_link">墨田区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/koutouku" class="area_link">江東区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/shinagawaku" class="area_link">品川区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/meguroku" class="area_link">目黒区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/ootaku" class="area_link">大田区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/setagayaku" class="area_link">世田谷区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/shibuyaku" class="area_link">渋谷区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/nakanoku" class="area_link">中野区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/suginamiku" class="area_link">杉並区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/toshimaku" class="area_link">豊島区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/kitaku" class="area_link">北区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/arakawaku" class="area_link">荒川区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/itabashiku" class="area_link">板橋区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/nerimaku" class="area_link">練馬区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/adachiku" class="area_link">足立区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/katsushikaku" class="area_link">葛飾区</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/tokyo/edogawaku" class="area_link">江戸川区</a>
                      </li>
                                      </ul>
          </div>
          <div class="common_area_box">
              <p class="common_area_title">全国主要都市</p>
              <ul class="area_list">
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/hokkaido/sapporoshi" class="area_link">札幌市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/miyagi/sendaishi" class="area_link">仙台市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/saitama/saitamashi" class="area_link">さいたま市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/chiba/chibashi" class="area_link">千葉市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/kanagawa/kawasakishi" class="area_link">川崎市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/kanagawa/yokohamashi" class="area_link">横浜市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/niigata/niigatashi" class="area_link">新潟市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/shizuoka/hamamatsushi" class="area_link">浜松市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/kanagawa/sagamiharashi" class="area_link">相模原市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/shizuoka/shizuokashi" class="area_link">静岡市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/aichi/nagoyashi" class="area_link">名古屋市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/kyoto/kyotoshi" class="area_link">京都市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/osaka/oosakashi" class="area_link">堺市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/hyogo/koubeshihi" class="area_link">神戸市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/okayama/okayamashi" class="area_link">岡山市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/hiroshima/hiroshimashi" class="area_link">広島市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/fukuoka/kitakyuushuushi" class="area_link">福岡市</a>
                      </li>
                                              <li class="area_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/kumamoto/kumamotoshi" class="area_link">熊本市</a>
                      </li>
                                      </ul>
          </div>
      </div>
      <div class="common_area_sub">
          <ul class="common_area_list">
              <li class="common_area_item">
                  <div class="common_area_box">
                      <p class="common_area_title">北海道・東北</p>
                      <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/hokkaido" class="area_link">北海道</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/aomori" class="area_link">青森県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/iwate" class="area_link">岩手県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/miyagi" class="area_link">宮城県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/akita" class="area_link">秋田県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/yamagata" class="area_link">山形県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/fukushima" class="area_link">福島県</a>
  </li>
</ul>                        </div>
                  <div class="common_area_box">
                      <p class="common_area_title">関東</p>
                      <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/ibaraki" class="area_link">茨城県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/tochigi" class="area_link">栃木県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/gunma" class="area_link">群馬県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/saitama" class="area_link">埼玉県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/chiba" class="area_link">千葉県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/tokyo" class="area_link">東京都</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kanagawa" class="area_link">神奈川県</a>
  </li>
</ul>                        </div>
              </li>
              <li class="common_area_item">
                  <div class="common_area_box">
                      <p class="common_area_title">信越・北陸・東海</p>
                      <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/niigata" class="area_link">新潟県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/toyama" class="area_link">富山県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/ishikawa" class="area_link">石川県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/fukui" class="area_link">福井県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/yamanashi" class="area_link">山梨県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/nagano" class="area_link">長野県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/gifu" class="area_link">岐阜県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/shizuoka" class="area_link">静岡県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/aichi" class="area_link">愛知県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/mie" class="area_link">三重県</a>
  </li>
</ul>                        </div>
                  <div class="common_area_box">
                      <p class="common_area_title">近畿</p>
                      <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/shiga" class="area_link">滋賀県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kyoto" class="area_link">京都府</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/osaka" class="area_link">大阪府</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/hyogo" class="area_link">兵庫県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/nara" class="area_link">奈良県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/wakayama" class="area_link">和歌山県</a>
  </li>
</ul>                        </div>
              </li>
              <li class="common_area_item">
                  <div class="common_area_box">
                      <p class="common_area_title">中国・四国</p>
                      <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/tottori" class="area_link">鳥取県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/shimane" class="area_link">島根県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/okayama" class="area_link">岡山県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/hiroshima" class="area_link">広島県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/yamaguchi" class="area_link">山口県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/tokushima" class="area_link">徳島県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kagawa" class="area_link">香川県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/ehime" class="area_link">愛媛県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kochi" class="area_link">高知県</a>
  </li>
</ul>                        </div>
                  <div class="common_area_box">
                      <p class="common_area_title">九州</p>
                      <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/fukuoka" class="area_link">福岡県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/saga" class="area_link">佐賀県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/nagasaki" class="area_link">長崎県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kumamoto" class="area_link">熊本県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/oita" class="area_link">大分県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/miyazaki" class="area_link">宮崎県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kagoshima" class="area_link">鹿児島県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/okinawa" class="area_link">沖縄県</a>
  </li>
</ul>                        </div>
              </li>
          </ul>
      </div>
  </div>
  <div class="common_sp_640">
      <h2 class="common_title01">
          エリアから気になる<br>保育園を見つける
      </h2>
      <ul class="common_area-sp_list">
          <li class="common_area-sp_item">
              <div class="common_area-sp_head AreaBtn">
                  <p class="common_area-sp_title">東京23区</p>
                  <p class="common_area-sp_btn"></p>
              </div>
              <div class="common_area-sp_main">
                  <ul class="area_list">
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/chiyodaku" class="area_link">千代田区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/chuuouku" class="area_link">中央区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/minatoku" class="area_link">港区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/shinjukuku" class="area_link">新宿区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/bunkyouku" class="area_link">文京区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/taitouku" class="area_link">台東区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/sumidaku" class="area_link">墨田区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/koutouku" class="area_link">江東区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/shinagawaku" class="area_link">品川区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/meguroku" class="area_link">目黒区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/ootaku" class="area_link">大田区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/setagayaku" class="area_link">世田谷区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/shibuyaku" class="area_link">渋谷区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/nakanoku" class="area_link">中野区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/suginamiku" class="area_link">杉並区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/toshimaku" class="area_link">豊島区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/kitaku" class="area_link">北区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/arakawaku" class="area_link">荒川区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/itabashiku" class="area_link">板橋区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/nerimaku" class="area_link">練馬区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/adachiku" class="area_link">足立区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/katsushikaku" class="area_link">葛飾区</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/tokyo/edogawaku" class="area_link">江戸川区</a>
                          </li>
                                              </ul>
              </div>
          </li>
          <li class="common_area-sp_item">
              <div class="common_area-sp_head AreaBtn">
                  <p class="common_area-sp_title">全国主要都市</p>
                  <p class="common_area-sp_btn"></p>
              </div>
              <div class="common_area-sp_main">
                  <ul class="area_list">
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/hokkaido/sapporoshi" class="area_link">札幌市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/miyagi/sendaishi" class="area_link">仙台市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/saitama/saitamashi" class="area_link">さいたま市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/chiba/chibashi" class="area_link">千葉市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/kanagawa/kawasakishi" class="area_link">川崎市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/kanagawa/yokohamashi" class="area_link">横浜市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/niigata/niigatashi" class="area_link">新潟市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/shizuoka/hamamatsushi" class="area_link">浜松市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/kanagawa/sagamiharashi" class="area_link">相模原市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/shizuoka/shizuokashi" class="area_link">静岡市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/aichi/nagoyashi" class="area_link">名古屋市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/kyoto/kyotoshi" class="area_link">京都市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/osaka/oosakashi" class="area_link">堺市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/hyogo/koubeshihi" class="area_link">神戸市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/okayama/okayamashi" class="area_link">岡山市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/hiroshima/hiroshimashi" class="area_link">広島市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/fukuoka/kitakyuushuushi" class="area_link">福岡市</a>
                          </li>
                                                      <li class="area_item">
                              <a href="https://hoikuhiroba-kuchikomi.com/kumamoto/kumamotoshi" class="area_link">熊本市</a>
                          </li>
                                              </ul>
              </div>
          </li>
          <li class="common_area-sp_item">
              <div class="common_area-sp_head AreaBtn">
                  <p class="common_area-sp_title">北海道・東北</p>
                  <p class="common_area-sp_btn"></p>
              </div>
              <div class="common_area-sp_main">
                  <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/hokkaido" class="area_link">北海道</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/aomori" class="area_link">青森県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/iwate" class="area_link">岩手県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/miyagi" class="area_link">宮城県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/akita" class="area_link">秋田県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/yamagata" class="area_link">山形県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/fukushima" class="area_link">福島県</a>
  </li>
</ul>                    </div>
          </li>
          <li class="common_area-sp_item">
              <div class="common_area-sp_head AreaBtn">
                  <p class="common_area-sp_title">関東</p>
                  <p class="common_area-sp_btn"></p>
              </div>
              <div class="common_area-sp_main">
                  <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/ibaraki" class="area_link">茨城県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/tochigi" class="area_link">栃木県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/gunma" class="area_link">群馬県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/saitama" class="area_link">埼玉県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/chiba" class="area_link">千葉県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/tokyo" class="area_link">東京都</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kanagawa" class="area_link">神奈川県</a>
  </li>
</ul>                    </div>
          </li>
          <li class="common_area-sp_item">
              <div class="common_area-sp_head AreaBtn">
                  <p class="common_area-sp_title">信越・北陸・東海</p>
                  <p class="common_area-sp_btn"></p>
              </div>
              <div class="common_area-sp_main">
                  <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/niigata" class="area_link">新潟県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/toyama" class="area_link">富山県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/ishikawa" class="area_link">石川県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/fukui" class="area_link">福井県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/yamanashi" class="area_link">山梨県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/nagano" class="area_link">長野県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/gifu" class="area_link">岐阜県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/shizuoka" class="area_link">静岡県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/aichi" class="area_link">愛知県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/mie" class="area_link">三重県</a>
  </li>
</ul>                    </div>
          </li>
          <li class="common_area-sp_item">
              <div class="common_area-sp_head AreaBtn">
                  <p class="common_area-sp_title">近畿</p>
                  <p class="common_area-sp_btn"></p>
              </div>
              <div class="common_area-sp_main">
                  <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/shiga" class="area_link">滋賀県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kyoto" class="area_link">京都府</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/osaka" class="area_link">大阪府</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/hyogo" class="area_link">兵庫県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/nara" class="area_link">奈良県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/wakayama" class="area_link">和歌山県</a>
  </li>
</ul>                    </div>
          </li>
          <li class="common_area-sp_item">
              <div class="common_area-sp_head AreaBtn">
                  <p class="common_area-sp_title">中国・四国</p>
                  <p class="common_area-sp_btn"></p>
              </div>
              <div class="common_area-sp_main">
                  <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/tottori" class="area_link">鳥取県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/shimane" class="area_link">島根県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/okayama" class="area_link">岡山県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/hiroshima" class="area_link">広島県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/yamaguchi" class="area_link">山口県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/tokushima" class="area_link">徳島県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kagawa" class="area_link">香川県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/ehime" class="area_link">愛媛県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kochi" class="area_link">高知県</a>
  </li>
</ul>                    </div>
          </li>
          <li class="common_area-sp_item">
              <div class="common_area-sp_head AreaBtn">
                  <p class="common_area-sp_title">九州・沖縄</p>
                  <p class="common_area-sp_btn"></p>
              </div>
              <div class="common_area-sp_main">
                  <ul class="area_list">
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/fukuoka" class="area_link">福岡県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/saga" class="area_link">佐賀県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/nagasaki" class="area_link">長崎県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kumamoto" class="area_link">熊本県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/oita" class="area_link">大分県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/miyazaki" class="area_link">宮崎県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/kagoshima" class="area_link">鹿児島県</a>
  </li>
      <li class="area_item">
      <a href="https://hoikuhiroba-kuchikomi.com/okinawa" class="area_link">沖縄県</a>
  </li>
</ul>                    </div>
          </li>
      </ul>
  </div>
</div>
</section>                    </div>

  <!-- search popup -->
  <div class="common_sp">
<form method="get" action="https://hoikuhiroba-kuchikomi.com/nurseries/9453/kuchikomi">
  <!-- 条件を絞り込む -->
  <div class="school-sp_popup_block SchoolPop" id="SearchWindow" style="display:none;">
      <div class="school-sp_popup_head mb0">
          <h3 class="school-sp_popup_title">
              条件を絞り込む
          </h3>
          <button type="button" class="school-sp_popup_close_btn PopCloseBtn">キャンセル</button>
      </div>
      <div class="school-sp_popup_inner btn_fixed">
          <div class="school-d_post_aside_box">
              <p class="school-d_post_aside_title">雇用形態</p>
              <ul class="school-d_post_aside_list">
                                              <li class="school-d_post_aside_item">
                          <label class="school-d_post_check_label">
                              <input
                                  type="checkbox"
                                  name="contract_types[]"
                                  value="1"
                                                                      >
                              <p class="school-d_post_check_text">正社員(0件)</p>
                          </label>
                      </li>
                                              <li class="school-d_post_aside_item">
                          <label class="school-d_post_check_label">
                              <input
                                  type="checkbox"
                                  name="contract_types[]"
                                  value="2"
                                                                      >
                              <p class="school-d_post_check_text">契約・派遣社員(8件)</p>
                          </label>
                      </li>
                                              <li class="school-d_post_aside_item">
                          <label class="school-d_post_check_label">
                              <input
                                  type="checkbox"
                                  name="contract_types[]"
                                  value="3"
                                                                      >
                              <p class="school-d_post_check_text">パート・アルバイト(0件)</p>
                          </label>
                      </li>
                                              <li class="school-d_post_aside_item">
                          <label class="school-d_post_check_label">
                              <input
                                  type="checkbox"
                                  name="contract_types[]"
                                  value="4"
                                                                      >
                              <p class="school-d_post_check_text">その他(0件)</p>
                          </label>
                      </li>
                                      </ul>
          </div>
          <div class="school-d_post_aside_box">
              <p class="school-d_post_aside_title">性別</p>
              <ul class="school-d_post_aside_list">
                                              <li class="school-d_post_aside_item">
                          <label class="school-d_post_check_label">
                              <input
                                  type="checkbox"
                                  name="genders[]"
                                  value="1"
                                                                           disabled                                     >
                              <p class="school-d_post_check_text">
                                                                          男性
                                                                  (0件)
                              </p>
                          </label>
                      </li>
                                              <li class="school-d_post_aside_item">
                          <label class="school-d_post_check_label">
                              <input
                                  type="checkbox"
                                  name="genders[]"
                                  value="2"
                                                                                                              >
                              <p class="school-d_post_check_text">
                                                                          女性
                                                                  (8件)
                              </p>
                          </label>
                      </li>
                                      </ul>
          </div>
          <div class="school-d_post_aside_box">
              <p class="school-d_post_aside_title">
                  <span>アンジェリカ東品川保育園 の</span>
                  カテゴリー別口コミ・評判
              </p>
              <ul class="school-d_post_aside_list">
                                              <li class="school-d_post_aside_item">
                          <label class="school-d_post_check_label">
                              <input
                                  type="checkbox"
                                  name="evaluation_ids[]"
                                  value="1"
                                                                      >
                              <p class="school-d_post_check_text">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon07.svg" alt="園庭・園舎" class="normal">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon07_active.svg" alt="園庭・園舎" class="active">
                                  園庭・園舎 (1件)
                              </p>
                          </label>
                      </li>
                                              <li class="school-d_post_aside_item">
                          <label class="school-d_post_check_label">
                              <input
                                  type="checkbox"
                                  name="evaluation_ids[]"
                                  value="2"
                                                                      >
                              <p class="school-d_post_check_text">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon01.svg" alt="職員同士の人間関係" class="normal">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon01_active.svg" alt="職員同士の人間関係" class="active">
                                  職員同士の人間関係 (1件)
                              </p>
                          </label>
                      </li>
                                              <li class="school-d_post_aside_item">
                          <label class="school-d_post_check_label">
                              <input
                                  type="checkbox"
                                  name="evaluation_ids[]"
                                  value="3"
                                                                      >
                              <p class="school-d_post_check_text">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon02.svg" alt="主任・園長との人間関係" class="normal">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon02_active.svg" alt="主任・園長との人間関係" class="active">
                                  主任・園長との人間関係 (1件)
                              </p>
                          </label>
                      </li>
                                              <li class="school-d_post_aside_item">
                          <label class="school-d_post_check_label">
                              <input
                                  type="checkbox"
                                  name="evaluation_ids[]"
                                  value="4"
                                                                      >
                              <p class="school-d_post_check_text">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon03.svg" alt="保護者との人間関係" class="normal">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon03_active.svg" alt="保護者との人間関係" class="active">
                                  保護者との人間関係 (1件)
                              </p>
                          </label>
                      </li>
                                              <li class="school-d_post_aside_item">
                          <label class="school-d_post_check_label">
                              <input
                                  type="checkbox"
                                  name="evaluation_ids[]"
                                  value="5"
                                                                      >
                              <p class="school-d_post_check_text">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon04.svg" alt="給与・福利厚生" class="normal">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon04_active.svg" alt="給与・福利厚生" class="active">
                                  給与・福利厚生 (1件)
                              </p>
                          </label>
                      </li>
                                              <li class="school-d_post_aside_item">
                          <label class="school-d_post_check_label">
                              <input
                                  type="checkbox"
                                  name="evaluation_ids[]"
                                  value="6"
                                                                      >
                              <p class="school-d_post_check_text">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon08.svg" alt="シフトの融通" class="normal">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon08_active.svg" alt="シフトの融通" class="active">
                                  シフトの融通 (1件)
                              </p>
                          </label>
                      </li>
                                              <li class="school-d_post_aside_item">
                          <label class="school-d_post_check_label">
                              <input
                                  type="checkbox"
                                  name="evaluation_ids[]"
                                  value="7"
                                                                      >
                              <p class="school-d_post_check_text">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon06.svg" alt="業務量" class="normal">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon06_active.svg" alt="業務量" class="active">
                                  業務量 (1件)
                              </p>
                          </label>
                      </li>
                                              <li class="school-d_post_aside_item">
                          <label class="school-d_post_check_label">
                              <input
                                  type="checkbox"
                                  name="evaluation_ids[]"
                                  value="8"
                                                                      >
                              <p class="school-d_post_check_text">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon05.svg" alt="保育方針" class="normal">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/cat_icon05_active.svg" alt="保育方針" class="active">
                                  保育方針 (1件)
                              </p>
                          </label>
                      </li>
                                      </ul>
          </div>
      </div>
      <div class="school-sp_popup_fixed_btnarea">
          <button type="submit" class="school-sp_popup_fixed_submit">条件を確定する</button>
      </div>
  </div>
</form>
</div>
  <!-- login popup -->
  
  <!-- read popup -->
  <div class="popup_filter" id="ReadFilter"></div>
  <div class="popup_wrap" id="ReadWindow">
      <button type="button" class="popup_close_btn PopCloseBtn">
          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/popup/close_icon.svg" alt="close">
      </button>
      <div class="popup_inner">
          <p class="popup_title">
              こちらの機能をご利用頂くには<br>
              いずれかを選択してください
          </p>
          <a href="post.html" class="popup_post_btn">
              口コミの投稿<span>（最大10日間ご利用可能）</span>
          </a>
          <a href="https://hoikuhiroba-kuchikomi.com/register" class="popup_service_btn">
              転職サービスに登録<span>（3日間ご利用可能）</span>
          </a>
      </div>
  </div>

  <!-- report popup -->
  <div class="popup_filter" id="ReportFilter"></div>
<div class="popup_report_wrap" id="ReportWindow">
  <div class="common_pc pc">
      <button type="button" class="popup_close_btn PopClaimCloseBtn">
          <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/popup/close_icon.svg" alt="close">
      </button>
      <h3 class="popup_report_title">不適切として報告する</h3>
      <ul class="popup_report_list">
          <li class="popup_report_item">
              <p class="form_title">不適切と思われる具体的な理由<span>必須</span></p>
              <textarea name="comment" class="form_textarea h150"></textarea>
              
          </li>
          <li class="popup_report_item">
              <p class="form_title">対象の保育園との関係<span>必須</span></p>
              <ul class="popup_report_radio_list">
                  <li class="popup_report_radio_item">
                      <label class="form_check_label">
                          <input type="radio" name="relationship" value=1>
                          <span>現在勤務している</span>
                      </label>
                  </li>
                  <li class="popup_report_radio_item">
                      <label class="form_check_label">
                          <input type="radio" name="relationship" value=2>
                          <span>以前勤務していた</span>
                      </label>
                  </li>
                  <li class="popup_report_radio_item">
                      <label class="form_check_label">
                          <input type="radio" name="relationship" value=3>
                          <span>その他</span>
                      </label>
                  </li>
              </ul>
              
          </li>
      </ul>
      <button type="button" class="common_btn02 center w320" onClick="createClaim('pc')">報告する</button>
  </div>
  <div class="common_sp sp">
      <div class="school-sp_popup_head mb0">
          <h3 class="school-sp_popup_title">
              不適切として報告する
          </h3>
          <button type="button" class="school-sp_popup_close_btn PopClaimCloseBtn">キャンセル</button>
      </div>
      <div class="school-sp_popup_inner btn_fixed">
          <p class="popup_report_text">
              こちらの口コミの内容が不適切であると感じた場合は下記フォームからご報告お願いします。<br>
              ご報告いただいた内容については保育ひろば事務局で確認の上適宜対応を行っておりますので、反映にお時間いただく場合がございます。<br>
              またご返信は行っておりませんのでご認識のほどよろしくお願いします。<br>
              投稿者による口コミの削除依頼も受けつけておりません。
          </p>
          <ul class="popup_report_list">
              <li class="popup_report_item">
                  <p class="form_title">不適切と思われる具体的な理由<span>必須</span></p>
                  <textarea name="comment" class="form_textarea h150"></textarea>
                  
              </li>
              <li class="popup_report_item">
                  <p class="form_title">対象の保育園との関係<span>必須</span></p>
                  <ul class="popup_report_radio_list">
                      <li class="popup_report_radio_item">
                          <label class="form_check_label">
                              <input type="radio" name="relationship" value=1>
                              <span>現在勤務している</span>
                          </label>
                      </li>
                      <li class="popup_report_radio_item">
                          <label class="form_check_label">
                              <input type="radio" name="relationship" value=2>
                              <span>以前勤務していた</span>
                          </label>
                      </li>
                      <li class="popup_report_radio_item">
                          <label class="form_check_label">
                              <input type="radio" name="relationship" value=3>
                              <span>その他</span>
                          </label>
                      </li>
                  </ul>
                  
              </li>
          </ul>
      </div>
      <div class="school-sp_popup_fixed_btnarea">
          <button type="button" class="school-sp_popup_fixed_submit" onClick="createClaim('sp')">報告する</button>
      </div>
      <input type="hidden" name="evaluation_id" value="">
  </div>
</div>


<!-- login popup -->
<div class="popup_filter" id="ClainRegisteredFilter"></div>
<div class="popup_wrap" id="ClainRegisteredWindow">
  <button type="button" class="popup_close_btn PopCloseBtn">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/popup/close_icon.svg" alt="close">
  </button>
  <div class="popup_inner">
      <p class="popup_title">
          <br>
          報告が完了しました。
      </p>
  </div>
</div>

<script>
function createClaim(media){
  // TODO ここは後でバックエンドからcompactで送る変数で取得
  const evaluationId = $('#ReportWindow input[name="evaluation_id"]').val();
  const className = "." + media;
  const comment = $(className).find('textarea[name="comment"]').val();
  if(comment.length == 0){
      alert("不適切と思われる理由をご記入ください。");
      return;
  }
  const relationship = $(className).find('input:radio[name="relationship"]:checked').val();
  if(relationship == null) {
      alert("対象の保育園との関係を選択してください。");
      return;
  }

  $.ajax({
      url: '/claim/create',
      type: "POST",
      data:{
          _token: "qdKXCjkNo2vqfK2kCbsgGgDzOOFCnVOeRTPZcSgA",
          evaluation_id: evaluationId,
          comment: comment,
          relationship: relationship
      }
  }).then(
      function(res){
          $("#ReportFilter").fadeOut();
          $("#ReportWindow").hide();
          $("#ReportWindow").find('textarea[name="comment"]').val('');
          $("#ReportWindow").find('input:radio[name="relationship"]:checked').prop('checked', false);
          if(!res.data.res){
              alert(res.data.message);
              return;
          }
          console.log("ここ");
          
          $("#ClainRegisteredFilter").fadeIn();
          $("#ClainRegisteredWindow").show();
      },
      function(res){
          alert("報告の作成ができませんでした。\nお手数ですが再度ご記入ください");
          $("#ReportWindow").find('textarea[name="comment"]').val('');
          $("#ReportWindow").find('input:radio[name="relationship"]:checked').prop('checked', false);
      }
  );
}
$(document).on('click', '.PopClaimCloseBtn', function(){
  $(this).parents().prev(".popup_filter").fadeOut();
  $(this).parents(".popup_wrap,.SchoolPop,.popup_report_wrap").hide();
  $("#ReportWindow").find('textarea[name="comment"]').val('');
  $("#ReportWindow").find('input:radio[name="relationship"]:checked').prop('checked', false);
});
</script>        
<!-- Event popup -->
<div class="popup_filter" id="EventPopFilter"></div>
<div class="popup_wrap" id="EventPopWindow" style="background-color: transparent; padding: 10px 10px; max-width: 550px;">
  <button type="button" class="popup_close_btn PopCloseBtn">
    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/popup/close_icon.svg" alt="close">
  </button>
  <div class="align_center">
    <a href="https://hoikuhiroba-kuchikomi.com/answer?utm_source=popup&utm_medium=banner&utm_campaign=202303" target="_blank" rel="noopener noreferrer">
      <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/popup/event_popup_march.png" alt="event" style="width: 100%; position: relative; left: 50%; transform: translateX(-50%);">
    </a>
  </div>
</div>

</main>

@endsection