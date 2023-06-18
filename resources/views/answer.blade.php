@extends('layout')
  
@section('content')

<style>
    button#submit-btn {
  background: #04a88c;
  border-radius: 10px;
  color: #fff;
  display: block;
  font-size: 18px;
  font-weight: 700;
  height: 60px;
  letter-spacing: 1.5px;
  line-height: 60px;
  text-align: center;
  width: 100%;
  max-width: 320px;
  margin:0 auto;
}

button#submit-btn:hover {
  background: #024c3f;
  cursor: pointer;
}

button#submit-btn:disabled {
  background: #999;
  cursor: not-allowed;
}</style>

<main class="common_main" id="signup_main">
    <div id="initData" data-user-infos=null>
    <div class="register_wrap">
        <div class="common_inner_s">
            <div class="pankuzu_block">
                <ul class="pankuzu_list">
                    <li class="pankuzu_item">
                        <a href="/" class="pankuzu_link">ホーム</a>
                    </li>
                    <li class="pankuzu_item">
                        会員登録
                    </li>
                </ul>
            </div>
            <form>
                <div class="step post_bg_wrap post_start" style="display:block;" >
                    <h1 class="post_title01">口コミを投稿する</h1>
                            
                    <div class="post_bnr_block">
                        <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/bnr01_both_new.png" alt="記念キャンペーン">
                    </div>
                    <div class="common_pc">
                        <button type="button" onclick="showStep(2)" class="post_btn">
                            口コミを投稿<img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/btn_icon.svg" alt="口コミを投稿">
                        </button>
                    </div>
       
                
                    <div class="common_sp">
                        <button type="button" @click="goTo()" class="post_btn">
                            口コミを投稿<img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/btn_icon.svg" alt="口コミを投稿">
                        </button>
                    </div>
                    <div class="post_privacy_block">
                        <h3 class="post_privacy_title">保育ひろばは、<br class="common_sp_640">ユーザー様の個人情報を守ります</h3>
                        <p class="post_privacy_text">
                            投稿者情報は、年代・性別等の一般的な属性部分のみを掲載します。個人情報を適切に管理し、裁判所または行政機関からの開示命令・要請がない限り、ユーザー様の同意なく第三者に開示することはありません。
                        </p>
                    </div>
                    <h2 class="post_title02">
                        口コミにおける個人情報は<br class="common_sp_640">下記のように表示されます
                    </h2>
                    <ul class="post_review_list">
                        <li class="post_review_item" 
                        style="border: 1px #555555 solid; border-radius: 10px; padding: 25px 25px 20px; background-color: white;">
                            <div class="post_review_head">
                                <div class="post_review_head_main">
                                    <p class="post_review_head_subtitle">
                                        昭和女子大学附属 昭和こども園 の口コミ・評判
                                    </p>
                                    <div class="post_review_head_title_block">
                                        <h3 class="post_review_head_title">業務量</h3>
                                        <p class="post_review_head_text good-color">
                                            <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/face_icon01.svg" alt="良い点"	>良い点	
                                        </p>
                                    </div>
                                </div>
                                <div class="post_review_head_sub">
                                    <p class="post_review_head_rate_title">評価 :</p>
                                    <div class="post_review_head_rate">
                                        <ul class="school_star_list">
                                            <li class="school_star_item">
                                                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg" alt="star10">
                                            </li>
                                            <li class="school_star_item">
                                                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg" alt="star10">
                                            </li>
                                            <li class="school_star_item">
                                                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star10.svg" alt="star10">
                                            </li>
                                            <li class="school_star_item">
                                                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star08.svg" alt="star8">
                                            </li>
                                            <li class="school_star_item">
                                                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/star/star00.svg" alt="star0">
                                            </li>
                                        </ul>
                                        <p class="post_review_head_rate_num">3.8</p>
                                    </div>
                                </div>
                            </div>
                            <p class="post_review_info">
                                <span>〇〇〇〇さん(女性・正社員)</span>
                                <span>勤務時期:2019年~2021年</span>
                            </p>
                            <div class="post_review_box">
                                <p class="post_review_text PostText">
                                    <span data-text="予習・復習を含めた勉強スケジュールや、宿題の量を日ごとに細かく管理してくれました。試験本番までの自分の道筋が明確にできた点がよかったです。完全個別指導で親身になって対応してくれたので、安心して任せられました。">予習・復習を含めた勉強スケジュールや、宿題の量を日ごとに細かく管理してくれました。試験本番までの自分の道筋が明確にできた点がよかったです。完全個別指導で親身になって対応してくれたので、安心して任せられました。</span>
                                    <button type="button" class="post_review_read_more ReadMoreBtn">もっと見る</button>
                                </p>
                            </div>
                            <div class="post_review_btnarea">
                                <button type="button" class="post_review_like_btn LikeBtn">
                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon.svg" alt="like" class="normal">
                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/school/detail/like_icon_active.svg" alt="like" class="active">
                                    <span>いいね！</span>
                                    <small>27</small>
                                </button>
                                <p class="post_review_report_btn PopBtn" data-pop="Report">報告する</p>
                            </div>
                        </li>
                    </ul>
                </div>       
                
       
                <!-- <div class="step post_bg_wrap post_search" style="display:none;">
                    <h1 class="post_title01">保育施設を検索する</h1>
                    <div class="post_search_main">
                        <h2 class="post_title03">口コミを投稿する保育施設の検索</h2>
                        <div class="post_search_block">
                            <input type="text" name="" class="post_search_input" placeholder="ネオキャリア" autofocus
                            v-model="nurseryNameInput"
                            @keypress="enterSearchNursery"
                            >
                            <button type="button" class="post_search_submit_btn">
                                <img
                                    src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/serch_icon.svg"
                                    alt="search"
                                    @click="searchNursery">
                            </button>
                        </div>
                        <p class="post_info_text">
                            <span>※匿名でご回答いただけます</span><span>※在籍中もしくは退職済​みの保育園が対象です。</span>
                        </p>
                    </div>
                    <div class="post_search_sub">
                        <searched-nurseries-component
                        :searched-nurseries="searchedNurseries.data"
                        :go-to="goTo"
                        :select-nursery="selectNursery"
                        :user-id=1392>
                        </searched-nurseries-component>
                        <div class="align_center">
                            <button type="button" class="post_others_link" @click="goTo()">見つからない場合はこちら</button>
                        </div>
                    </div>
                </div> -->




                <!-- <div class="step ost_bg_wrap post_register post_register_complete" v-show="step == 4">
                    <h1 class="post_title01">口コミ対象の園を登録</h1>
                    <ul class="post_form_list">
                        <li class="post_form_item">
                            <h2 class="post_title03">保育施設の情報</h2>
                            <p class="post_register_result_text" v-if=reportForm.nurseryAddress>
                                <span> RRS </span>
                            </p>
                            <p class="post_register_result_text" v-if=!reportForm.nurseryAddress>
                            </p>
                            <p class="post_info_text">
                                <span>※匿名でご回答いただけます</span><span>※在籍中もしくは退職済​みの保育園が対象です。</span>
                            </p>
                        </li>
                    </ul>
                    <button type="button" class="common_btn01_s center" @click="goToIfRegisteredOnce">口コミの詳細入力へ</button>
                    <div class="align_center">
                        <button type="button" class="post_btn post_register_link" @click="goTo(2)">園検索に戻る</button>
                    </div>
                </div> -->

                <!-- <div class="step step_bg_inner ">
                    <div class="step_block">
                        <h1 class="step_title">口コミ対象保育園での在籍情報</h1>
                        <h2 class="step_subtitle">
                            <span>STEP 1</span>雇用形態をお選びください
                        </h2>
                        <ul class="step_list01">
                            <li class="step_item">
                                <label class="step_radio_label">
                                    <input type="radio" name="contract_type" value=1 v-model="reportForm.contractType" @click="goToWithText('contractTypeText','正社員')">
                                    <span>正社員</span>
                                </label>
                            </li>
                            <li class="step_item">
                                <label class="step_radio_label">
                                    <input type="radio" name="contract_type" value=2 v-model="reportForm.contractType" @click="goToWithText('contractTypeText','契約・派遣社員')">
                                    <span>契約・派遣社員</span>
                                </label>
                            </li>
                            <li class="step_item">
                                <label class="step_radio_label">
                                    <input type="radio" name="contract_type" value=3 v-model="reportForm.contractType" @click="goToWithText('contractTypeText','アルバイト・パート')">
                                    <span>アルバイト・パート</span>
                                </label>
                            </li>
                            <li class="step_item">
                                <label class="step_radio_label">
                                    <input type="radio" name="contract_type" value=4 v-model="reportForm.contractType" @click="goToWithText('contractTypeText','その他')">
                                    <span>その他</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="step_btnarea" v-if="reportForm.userId">
                        <div class="step_btnarea_main" style="justify-content: center">
                            <button type="button" class="step_save_btn" onclick="submit();"><span>口コミを一時</span>保存</button>
                        </div>
                    </div>
                    </div>
                    <div class="common_pc_640">
                        <div class="step_flow_box">
                            <div class="step_flow_bar" :style="percentStep"></div>
                        </div>
                    </div>
                </div> -->

                <div class="step step_bg_wrap" style="display:none;">
                    <div class="common_sp_640">
                        <div class="step_flow_box">
                            <div class="step_flow_bar" :style="percentStep"></div>
                        </div>
                    </div>
                    <div class="step_bg_inner step01">
                        <div class="step_block">
                            <h1 class="step_title">口コミ対象保育園での在籍情報</h1>
                            <p class="step_text">での<br class="common_sp_640">あなたの在籍状況を教えてください</p>
                            <h2 class="step_subtitle">
                                <span>STEP 1</span>雇用形態をお選びください
                            </h2>
                            <ul class="step_list01">
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" onclick="showStep(3)" class = "post_btn" name="contract_type" value=1 v-model="reportForm.contractType" @click="goToWithText('contractTypeText','正社員')">
                                        <span>正社員</span>
                                    </label>
                                </li>
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="contract_type" value=2 v-model="reportForm.contractType" @click="goToWithText('contractTypeText','契約・派遣社員')">
                                        <span>契約・派遣社員</span>
                                    </label>
                                </li>
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="contract_type" value=3 v-model="reportForm.contractType" @click="goToWithText('contractTypeText','アルバイト・パート')">
                                        <span>アルバイト・パート</span>
                                    </label>
                                </li>
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="contract_type" value=4 v-model="reportForm.contractType" @click="goToWithText('contractTypeText','その他')">
                                        <span>その他</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="step_btnarea" v-if="reportForm.userId">
                            <div class="step_btnarea_main" style="justify-content: center">
                                <button type="button" class="step_save_btn" onclick="submit();"><span>口コミを一時</span>保存</button>
                            </div>
                        </div>
                    </div>
                    <div class="common_pc_640">
                        <div class="step_flow_box">
                            <div class="step_flow_bar" :style="percentStep"></div>
                        </div>
                    </div>
                </div>

                <div class="step step_bg_wrap" style="display:none;">
                    <div class="common_sp_640">
                        <div class="step_flow_box">
                            <div class="step_flow_bar" :style="percentStep"></div>
                        </div>
                    </div>
                    <div class="step_bg_inner">
                        <div class="step_block">
                            <h1 class="step_title">口コミ対象保育園での在籍情報</h1>
                            <p class="step_text">でのあなたの在籍状況を教えてください<br class="common_sp_640">あなたの在籍状況を教えてください</p>
                            <h2 class="step_subtitle">
                                <span>STEP 2</span>在籍当時の保育士歴を<br class="common_sp_640">お選びください
                            </h2>
                            <ul class="step_list01">
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" onclick="showStep(4)" name="service_duration" value=1 v-model="reportForm.serviceDuration"  style="cursor: pointer;" @click="goToWithText('serviceDurationText','1年未満')">
                                        <span>1年未満</span>
                                    </label>
                                </li>
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="service_duration" value=2 v-model="reportForm.serviceDuration" style="cursor: pointer;" @click="goToWithText('serviceDurationText','1年以上5年未満')">
                                        <span>1年以上5年未満</span>
                                    </label>
                                </li>
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="service_duration" value=3 v-model="reportForm.serviceDuration" style="cursor: pointer;" @click="goToWithText('serviceDurationText','5年以上10年未満')">
                                        <span>5年以上10年未満</span>
                                    </label>
                                </li>
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="service_duration" value=4 v-model="reportForm.serviceDuration" style="cursor: pointer;" @click="goToWithText('serviceDurationText','10年以上')">
                                        <span>10年以上</span>
                                    </label>
                                </li>
                            </ul>
                            <div class="common_sp_640">
                                <button type="button" class="step_back_btn" @click="backTo()">
                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/arrow_back_brown.svg" alt="back">戻る
                                </button>
                            </div>
                        </div>
                        <div class="step_btnarea" v-if="reportForm.userId">
                            <div class="step_btnarea_main" style="justify-content: center">
                                <button type="button" class="step_save_btn" onclick="submit();"><span>口コミを一時</span>保存</button>
                            </div>
                        </div>
                        <div class="common_pc_640">
                            <button type="button" class="step_back_btn" @click="backTo()">
                                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/arrow_back_brown.svg" alt="back">戻る
                            </button>
                        </div>
                    </div>
                    <div class="common_pc_640">
                        <div class="step_flow_box">
                            <div class="step_flow_bar" :style="percentStep"></div>
                        </div>
                    </div>
                </div>

                
                <div class="step step_bg_wrap" style="display:none;">
                    <div class="common_sp_640">
                        <div class="step_flow_box">
                            <div class="step_flow_bar" :style="percentStep"></div>
                        </div>
                    </div>
                    <div class="step_bg_inner">
                        <div class="step_block">
                            <h1 class="step_title">口コミ対象保育園での在籍情報</h1>
                            <p class="step_text">でのあなたの在籍状況を教えてください<br class="common_sp_640">あなたの在籍状況を教えてください</p>
                            <h2 class="step_subtitle">
                                <span>STEP 3</span>勤務した時期を入力ください
                            </h2>
                            <ul class="step_list02">
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="work_period" onclick="showStep(5)" value=1 v-model="reportForm.workPeriod" @click="goToWithText('workPeriodText','2000年～2005年')">
                                        <span>2000年～2005年</span>
                                    </label>
                                </li>
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="work_period" value=2 v-model="reportForm.workPeriod" @click="goToWithText('workPeriodText','2006年～2010年')">
                                        <span>2006年～2010年</span>
                                    </label>
                                </li>
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="work_period" value=3 v-model="reportForm.workPeriod" @click="goToWithText('workPeriodText','2011年～2015年')">
                                        <span>2011年～2015年</span>
                                    </label>
                                </li>
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="work_period" value=4 v-model="reportForm.workPeriod" @click="goToWithText('workPeriodText','2016年～2020年')">
                                        <span>2016年～2020年</span>
                                    </label>
                                </li>
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="work_period" value=5 v-model="reportForm.workPeriod" @click="goToWithText('workPeriodText','2021年以降')">
                                        <span>2021年以降</span>
                                    </label>
                                </li>
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="work_period" value=6 v-model="reportForm.workPeriod" @click="goToWithText('workPeriodText','回答しない')">
                                        <span>回答しない</span>
                                    </label>
                                </li>
                            </ul>
                            <div class="common_sp_640">
                                <button type="button" class="step_back_btn" @click="backTo()">
                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/arrow_back_brown.svg" alt="back">戻る
                                </button>
                            </div>
                        </div>
                        <div class="step_btnarea" v-if="reportForm.userId">
                            <div class="step_btnarea_main" style="justify-content: center">
                                <button type="button" class="step_save_btn" onclick="submit();"><span>口コミを一時</span>保存</button>
                            </div>
                        </div>
                        <div class="common_pc_640">
                            <button type="button" class="step_back_btn" @click="backTo()">
                                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/arrow_back_brown.svg" alt="back">戻る
                            </button>
                        </div>
                    </div>
                    <div class="common_pc_640">
                        <div class="step_flow_box">
                            <div class="step_flow_bar" :style="percentStep"></div>
                        </div>
                    </div>
                </div>

                <div class="step step_bg_wrap" style="display:none;">
                    <div class="common_sp_640">
                        <div class="step_flow_box">
                            <div class="step_flow_bar" :style="percentStep"></div>
                        </div>
                    </div>
                    <div class="step_bg_inner">
                        <div class="step_block">
                            <h1 class="step_title">口コミ対象保育園での在籍情報</h1>
                            <p class="step_text">でのあなたの在籍状況を教えて<br class="common_sp_640">あなたの在籍状況を教えてください</p>
                            <h2 class="step_subtitle">
                                <span>STEP 4</span>在籍時の1日の平均残業時間を教えてください
                            </h2>
                            <ul class="step_list02">
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="average_over_hours" onclick="showStep(6)" value=1 v-model="reportForm.averageOverHours" @click="goToWithText('averageOverHoursText','ほぼ無し')">
                                        <span>ほぼ無し</span>
                                    </label>
                                </li>
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="average_over_hours" v-model="reportForm.averageOverHours" value=2 @click="goToWithText('averageOverHoursText','30分程度')">
                                        <span>30分程度</span>
                                    </label>
                                </li>
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="average_over_hours" v-model="reportForm.averageOverHours" value=3 @click="goToWithText('averageOverHoursText','1時間程度')">
                                        <span>1時間程度</span>
                                    </label>
                                </li>
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="average_over_hours" v-model="reportForm.averageOverHours" value=4 @click="goToWithText('averageOverHoursText','1時間半程度')">
                                        <span>1時間半程度</span>
                                    </label>
                                </li>
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="average_over_hours" v-model="reportForm.averageOverHours" value=5 @click="goToWithText('averageOverHoursText','2時間程度')">
                                        <span>2時間程度</span>
                                    </label>
                                </li>
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="average_over_hours" v-model="reportForm.averageOverHours" value=6 @click="goToWithText('averageOverHoursText','2時間半程度')">
                                        <span>2時間半程度</span>
                                    </label>
                                </li>
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="average_over_hours" v-model="reportForm.averageOverHours" value=7 @click="goToWithText('averageOverHoursText','3時間程度')">
                                        <span>3時間程度</span>
                                    </label>
                                </li>
                                <li class="step_item">
                                    <label class="step_radio_label">
                                        <input type="radio" name="average_over_hours" v-model="reportForm.averageOverHours" value=8 @click="goToWithText('averageOverHoursText','3時間半以上')">
                                        <span>3時間半以上</span>
                                    </label>
                                </li>
                            </ul>
                            <div class="common_sp_640">
                                <button type="button" class="step_back_btn" @click="backTo()">
                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/arrow_back_brown.svg" alt="back">戻る
                                </button>
                            </div>
                        </div>
                        <div class="step_btnarea" v-if="reportForm.userId">
                            <div class="step_btnarea_main" style="justify-content: center">
                                <button type="button" class="step_save_btn" onclick="submit();"><span>口コミを一時</span>保存</button>
                            </div>
                        </div>
                        <div class="common_pc_640">
                            <button type="button" class="step_back_btn" @click="backTo()">
                                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/common/arrow_back_brown.svg" alt="back">戻る
                            </button>
                        </div>
                    </div>
                    <div class="common_pc_640">
                        <div class="step_flow_box">
                            <div class="step_flow_bar" :style="percentStep"></div>
                        </div>
                    </div>
                </div>

                <div class="step step_bg_wrap" style="display:none;">
                    <div class="common_sp_640">
                        <div class="step_flow_box">
                            <div class="step_flow_bar" :style="percentStep"></div>
                        </div>
                    </div>
                    <div class="step_bg_inner">
                        <div class="step_block">
                            <h1 class="step_title">在籍情報の確認</h1>
                            <p class="step_text">在籍時情報の内容は<br class="common_sp_640">下記でお間違いありませんか？</p>
                            <ul class="step_confirm_list">
                                <li class="step_confirm_item">
                                    <h2 class="step_confirm_title">
                                        園名<a @click=goTo(2)>内容を修正</a>
                                    </h2>
                                    <p class="step_confirm_text">1</p>
                                </li>
                                <li class="step_confirm_item">
                                    <h2 class="step_confirm_title">
                                        雇用形態<a @click=goTo(5)>内容を修正</a>
                                    </h2>
                                    <p class="step_confirm_text">
                                        <span v-if="reportForm.contractTypeText">正社員</span>
                                        <span v-if="!reportForm.contractTypeText">正社員</span>
                                    </p>
                                </li>
                                <li class="step_confirm_item">
                                    <h2 class="step_confirm_title">
                                        当時の保育士歴<a @click=goTo(6)>内容を修正</a>
                                    </h2>
                                    <p class="step_confirm_text">
                                        <span v-if="reportForm.serviceDurationText">1年未満</span>
                                        <span v-if="!reportForm.serviceDurationText">1年未満</span>
                                    </p>
                                </li>
                                <li class="step_confirm_item">
                                    <h2 class="step_confirm_title">
                                        勤務した時期<a @click=goTo(7)>内容を修正</a>
                                    </h2>
                                    <p class="step_confirm_text">
                                        <span v-if="reportForm.workPeriodText">2006年～2010年</span>
                                        <span v-if="!reportForm.workPeriodText">2006年～2010年</span>
                                    </p>
                                </li>
                                <li class="step_confirm_item">
                                    <h2 class="step_confirm_title">
                                        1日の平均残業時間<a @click=goTo(8)>内容を修正</a>
                                    </h2>
                                    <p class="step_confirm_text">
                                        <span v-if="reportForm.averageOverHoursText">30分程度</span>
                                        <span v-if="!reportForm.averageOverHoursText">30分程度</span>
                                    </p>
                                </li>
                            </ul>
                            
                        </div>
                        <div class="step_btnarea">
                            <div class="step_btnarea_main" style="justify-content: center">
                                <button type="button" class="step_next_btn common_pc" onclick="showStep(7)">上記内容で登録を続ける</button>
                                <button type="button" class="step_next_btn common_sp w100" onclick="showStep(7)">内容確認して次へ</button>
                            </div>
                        </div>
                        
                    </div>
                    <div class="common_pc_640">
                        <div class="step_flow_box">
                            <div class="step_flow_bar" :style="percentStep"></div>
                        </div>
                    </div>
                </div>

               
            </form>
        </div>
        <div class="step step_layout_block" style="display:none">
                    <div id="group_of_form_contents">
                        <input type="hidden" name="user_id" value="1392">
                        <input type="hidden" name="nursery_id" id="nursery_id" :value="reportForm.nurseryId">
                        <input type="hidden" name="contract_type" :value="reportForm.contractType">
                        <input type="hidden" name="service_duration" :value="reportForm.serviceDuration">
                        <input type="hidden" name="work_period" :value="reportForm.workPeriod">
                        <input type="hidden" name="average_over_hours" :value="reportForm.averageOverHours">
                        <input type="hidden" name="is_draft" :value="!!reportForm.is_draft ? 1 : 0">
                        <input type="hidden" name="is_new_nursery" :value="reportForm.apply">
                    </div>
                    <aside class="step_layout_aside">
                        <h3 class="step_aside_title">口コミのカテゴリー</h3>
                        <ul class="step_result_list">
                            <li class="step_result_item">
                                
                                <p class="step_result_title">良い点</p>
                                <!-- <p class="step_result_text">あと<span>1</span>項目</p> -->
                            </li>
                            <li class="step_result_item">
                                <p class="step_result_title">改善点</p>
                                <p class="step_result_text">あと<span>1</span>項目</p>
                            </li>
                        </ul>
                        <ul class="step_aside_list">
                                        <li class="step_aside_item">
                                <label
                                    class="step_aside_label"
                                    data-tab="Tab01"
                                    @click="openTapBtn(1)"
                                    :class="{ active:answerCount['cleanness']['reach']}"
                                    >
                                    <input type="radio" name="category" value="" checked>
                                    <span>園庭・園舎</span>
                                </label>
                                <input type="hidden" name="evaluations[1][is_reached]" :value="answerCount.cleanness.reach ? 1 : 0">
                            </li>
                                        <li class="step_aside_item">
                                <label
                                    class="step_aside_label"
                                    data-tab="Tab02"
                                    @click="openTapBtn(2)"
                                    :class="{ active:answerCount['staff_relationships']['reach']}"
                                    >
                                    <input type="radio" name="category" value="" >
                                    <span>職員同士の人間関係</span>
                                </label>
                                <input type="hidden" name="evaluations[2][is_reached]" :value="answerCount.staff_relationships.reach ? 1 : 0">
                            </li>
                                        <li class="step_aside_item">
                                <label
                                    class="step_aside_label"
                                    data-tab="Tab03"
                                    @click="openTapBtn(3)"
                                    :class="{ active:answerCount['chief_director_relationships']['reach']}"
                                    >
                                    <input type="radio" name="category" value="" >
                                    <span>主任・園長との人間関係</span>
                                </label>
                                <input type="hidden" name="evaluations[3][is_reached]" :value="answerCount.chief_director_relationships.reach ? 1 : 0">
                            </li>
                                        <li class="step_aside_item">
                                <label
                                    class="step_aside_label"
                                    data-tab="Tab04"
                                    @click="openTapBtn(4)"
                                    :class="{ active:answerCount['parent_relationships']['reach']}"
                                    >
                                    <input type="radio" name="category" value="" >
                                    <span>保護者との人間関係</span>
                                </label>
                                <input type="hidden" name="evaluations[4][is_reached]" :value="answerCount.parent_relationships.reach ? 1 : 0">
                            </li>
                                        <li class="step_aside_item">
                                <label
                                    class="step_aside_label"
                                    data-tab="Tab05"
                                    @click="openTapBtn(5)"
                                    :class="{ active:answerCount['salary_benefits']['reach']}"
                                    >
                                    <input type="radio" name="category" value="" >
                                    <span>給与・福利厚生</span>
                                </label>
                                <input type="hidden" name="evaluations[5][is_reached]" :value="answerCount.salary_benefits.reach ? 1 : 0">
                            </li>
                                        <li class="step_aside_item">
                                <label
                                    class="step_aside_label"
                                    data-tab="Tab06"
                                    @click="openTapBtn(6)"
                                    :class="{ active:answerCount['shift_flexibility']['reach']}"
                                    >
                                    <input type="radio" name="category" value="" >
                                    <span>シフトの融通</span>
                                </label>
                                <input type="hidden" name="evaluations[6][is_reached]" :value="answerCount.shift_flexibility.reach ? 1 : 0">
                            </li>
                                        <li class="step_aside_item">
                                <label
                                    class="step_aside_label"
                                    data-tab="Tab07"
                                    @click="openTapBtn(7)"
                                    :class="{ active:answerCount['work_volume']['reach']}"
                                    >
                                    <input type="radio" name="category" value="" >
                                    <span>業務量</span>
                                </label>
                                <input type="hidden" name="evaluations[7][is_reached]" :value="answerCount.work_volume.reach ? 1 : 0">
                            </li>
                                        <li class="step_aside_item">
                                <label
                                    class="step_aside_label"
                                    data-tab="Tab08"
                                    @click="openTapBtn(8)"
                                    :class="{ active:answerCount['childcare_policy']['reach']}"
                                    >
                                    <input type="radio" name="category" value="" >
                                    <span>保育方針</span>
                                </label>
                                <input type="hidden" name="evaluations[8][is_reached]" :value="answerCount.childcare_policy.reach ? 1 : 0">
                            </li>
                                    </ul>
                    </aside>
                    <div class="step_layout_main">
                        <div class="step_bg_wrap">
                            <div class="common_sp_640">
                                <div class="step_flow_box">
                                    <div class="step_flow_bar" :style="percentStep"></div>
                                </div>
                            </div>
                            <div class="step_bg_inner step05">
                                <div class="step_block">
                                    <h1 class="step_title">口コミを書いてください</h1>
                                    <p class="step_text">
                                        8つのカテゴリーの中から、<br class="common_sp_640">園の良い点を2つ以上<br>
                                        園の改善点を1つ以上書いてください。
                                    </p>
                                    <h2 class="step_subtitle">
                                        <span>STEP 5</span>口コミを書く
                                    </h2>
                                    <div class="step_target_box Tab01" v-show="openTabNumber == 1">
                                        <input type="hidden" name="evaluations[1][evaluation_id]" value="1">
                                        <input type="hidden" name="evaluations[1][is_approved]" :value="reportForm.evaluations.cleanness.isApproved">

                                        <div class="step_comment_text" v-if="reportForm.evaluations.cleanness.isApproved != 0" style="color: red">すでに投稿済みのクチコミは編集できません。</div>
                                        <ul class="step_comment_list">
                                            <li class="step_comment_item">
                                                <p class="step_comment_title">園庭・園舎</p>
                                                <div class="step_comment_main">
                                                    <ul class="step_choose_list01">
                                                        <li class="step_choose_item">
                                                            <label class="step_choose_label">
                                                                <input
                                                                    type="radio"
                                                                    name="evaluations[1][is_good]"
                                                                    value=1
                                                                    v-model="reportForm.evaluations.cleanness.isGood"
                                                                    @change="setAnswer('cleanness', 'isGood', true)"
                                                                    >
                                                                <p class="step_choose_text">
                                                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/face_icon04.svg" alt="良い点" class="normal">
                                                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/face_icon04_active.svg" alt="良い点" class="active">
                                                                    <span>良い点</span>
                                                                </p>
                                                            </label>
                                                        </li>
                                                        <li class="step_choose_item">
                                                            <label class="step_choose_label">
                                                                <input
                                                                    type="radio"
                                                                    name="evaluations[1][is_good]"
                                                                    value=2
                                                                    v-model="reportForm.evaluations.cleanness.isGood"
                                                                    @change="setAnswer('cleanness', 'isGood',false)"
                                                                    >
                                                                <p class="step_choose_text">
                                                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/face_icon02.svg" alt="改善点" class="normal">
                                                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/face_icon02_active.svg" alt="改善点" class="active">
                                                                    <span>改善点</span>
                                                                </p>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="step_comment_item">
                                                <p class="step_comment_title">評価</p>
                                                <div class="step_comment_main">
                                                    <ul class="step_choose_list02">
                                                        <li class="step_choose_item">
                                                            <label class="step_choose_label">
                                                                <input
                                                                    type="radio"
                                                                    name="evaluations[1][score]"
                                                                    value=1
                                                                    v-model="reportForm.evaluations.cleanness.score"
                                                                    :disabled="reportForm.evaluations.cleanness.isGood != 2"
                                                                    class="score_choose"
                                                                    @change="setAnswer('cleanness', 'score')"
                                                                    >
                                                                <p class="step_choose_text score_choose" :disabled="reportForm.evaluations.cleanness.isGood != 2">
                                                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/face_icon01.svg" alt="とても不満" class="normal">
                                                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/face_icon01_active.svg" alt="とても不満" class="active">
                                                                    <span>とても<br>不満</span>
                                                                </p>
                                                            </label>
                                                        </li>
                                                        <li class="step_choose_item">
                                                            <label class="step_choose_label">
                                                                <input
                                                                    type="radio"
                                                                    name="evaluations[1][score]"
                                                                    value=2
                                                                    v-model="reportForm.evaluations.cleanness.score"
                                                                    :disabled="reportForm.evaluations.cleanness.isGood != 2"
                                                                    class="score_choose"
                                                                    @change="setAnswer('cleanness', 'score')"
                                                                    >
                                                                <p class="step_choose_text">
                                                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/face_icon02.svg" alt="不満" class="normal">
                                                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/face_icon02_active.svg" alt="不満" class="active">
                                                                    <span>不満</span>
                                                                </p>
                                                            </label>
                                                        </li>
                                                        <li class="step_choose_item">
                                                            <label class="step_choose_label">
                                                                <input
                                                                    type="radio"
                                                                    name="evaluations[1][score]"
                                                                    value=3
                                                                    v-model="reportForm.evaluations.cleanness.score"
                                                                    :disabled="reportForm.evaluations.cleanness.isGood != 2"
                                                                    class="score_choose"
                                                                    @change="setAnswer('cleanness', 'score')"
                                                                    >
                                                                <p class="step_choose_text">
                                                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/face_icon03.svg" alt="やや不満" class="normal">
                                                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/face_icon03_active.svg" alt="やや不満" class="active">
                                                                    <span>やや不満</span>
                                                                </p>
                                                            </label>
                                                        </li>
                                                        <li class="step_choose_item">
                                                            <label class="step_choose_label">
                                                                <input
                                                                    type="radio"
                                                                    name="evaluations[1][score]"
                                                                    value=4
                                                                    v-model="reportForm.evaluations.cleanness.score"
                                                                    :disabled="reportForm.evaluations.cleanness.isGood != 1"
                                                                    class="score_choose"
                                                                    @change="setAnswer('cleanness', 'score')"
                                                                    >
                                                                <p class="step_choose_text">
                                                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/face_icon04.svg" alt="おおむね満足" class="normal">
                                                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/face_icon04_active.svg" alt="おおむね満足" class="active">
                                                                    <span>おおむね<br>満足</span>
                                                                </p>
                                                            </label>
                                                        </li>
                                                        <li class="step_choose_item">
                                                            <label class="step_choose_label">
                                                                <input
                                                                    type="radio"
                                                                    name="evaluations[1][score]"
                                                                    value=5
                                                                    v-model="reportForm.evaluations.cleanness.score"
                                                                    :disabled="reportForm.evaluations.cleanness.isGood != 1"
                                                                    class="score_choose"
                                                                    @change="setAnswer('cleanness', 'score')"
                                                                    >
                                                                <p class="step_choose_text">
                                                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/face_icon05.svg" alt="満足" class="normal">
                                                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/face_icon05_active.svg" alt="満足" class="active">
                                                                    <span>満足</span>
                                                                </p>
                                                            </label>
                                                        </li>
                                                        <li class="step_choose_item">
                                                            <label class="step_choose_label">
                                                                <input
                                                                    type="radio"
                                                                    name="evaluations[1][score]"
                                                                    value=6
                                                                    v-model="reportForm.evaluations.cleanness.score"
                                                                    :disabled="reportForm.evaluations.cleanness.isGood != 1"
                                                                    class="score_choose"
                                                                    @change="setAnswer('cleanness', 'score')"
                                                                    >
                                                                <p class="step_choose_text">
                                                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/face_icon06.svg" alt="とても満足" class="normal">
                                                                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/post/face_icon06_active.svg" alt="とても満足" class="active">
                                                                    <span>とても<br>満足</span>
                                                                </p>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="step_commont_box">
                                            <h3 class="step_comment_box_title">
                                                口コミ内容<span><small>現在</small><span v-text="reportForm.evaluations.cleanness.comment.replace(/\s+/g,'').length"></span><small>文字</small></span>
                                            </h3>
                                            <p class="step_comment_text">100文字以上1,000文字以内で、「園庭・園舎」に関するレビューを書いてください。</p>
                                            <textarea
                                                name="evaluations[1][comment]"
                                                class="form_textarea"
                                                v-model="reportForm.evaluations.cleanness.comment"
                                                oncopy="return false;"
                                                onpaste="return false;"
                                                @change="setComment('cleanness', reportForm.evaluations.cleanness.comment.replace(/\s+/g,'').length, reportForm.evaluations.cleanness.comment)"
                                                ></textarea>
                                            <div class="step_comment_text" style="color: red" v-if="reportForm.evaluations.cleanness.isStrRepeated">※同じ文字は連続して2回まで使用可能です </div>
                                            <ul class="step_info_list">
                                                <li class="step_info_item">
                                                    <a href="https://hoikuhiroba-kuchikomi.com/guide" target="_blank">※口コミ投稿ガイドライン</a>に沿ってご投稿ください。
                                                </li>
                                                <li class="step_info_item">
                                                    ※当サイトは内部告発や被害報告をする場ではございません。他の保育士に参考となるようなポジティブなご投稿をお願いいたします。
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="step_btnarea" style="z-index: 1;">                                        
                                        <div class="step_btnarea_main" v-if="reportForm.userId">
                                            <button type="button" class="step_save_btn" onclick="submit();"><span>口コミを一時</span>保存</button>
                                            <button type="button" class="step_next_btn" :disabled="disableSubmit" @click=showstep(8)>次へ</button>
                                        </div>
                                    </div>
                                </div>
                                                        
                                </div>               
                            </div>
                            <div class="common_pc_640">
                                <div class="step_flow_box">
                                    <div class="step_flow_bar" :style="percentStep"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      </div>

      
</main>

<!-- login popup -->
<div class="popup_filter" id="LoginFilter"></div>
<div class="popup_wrap" id="LoginWindow">
    <button type="button" class="popup_close_btn PopCloseBtn">
        <img src="{{asset('assets/user/images/popup/close_icon.svg')}}" alt="close">
    </button>
    <div class="popup_inner">
        <p class="popup_title">
            こちらの機能をお使い頂くには<br>
            会員登録が必要です
        </p>
        <a href="/register" class="common_btn01 radius-small">会員登録(無料)</a>
        <div class="align_center">
            <a href="/login" class="popup_login_link">ログインはこちら</a>
        </div>
    </div>
</div>

<script>

function showStep(nextStep) {
        const steps = document.querySelectorAll('.step');
        let currentStep;
        
        // Find the currently visible step element
        for (let i = 0; i <steps.length; i++) {
            if (steps[i].style.display === 'block') {
            currentStep = steps[i];
            break;
            }
        }
        
        // Hide the current step element
        currentStep.style.display = 'none';
        
        // Show the next step element
        if(nextStep == 7)
            steps[nextStep - 1].style.display = 'flex';
        else
        {
            console.log("RRS");
            steps[nextStep - 1].style.display = 'block';
        }
    }
    // $("div.step:not(:first)").hide();
    // $(".post_btn").on("click", function() {
    //     var steps = $(".step");
    //     var currentStep = $(this).closest(".step").index();
    //     steps.eq(currentStep).hide();
    //     steps.eq(currentStep + 1).show();
    // });
// function templateLOption(id, name) {
//     var temp = '<option value="'+id+'" >'+name+'</option>';
//     return temp;
// }

// function templateQOption(id, name) {
//     var temp = '<li class="form_check_item">\
//                     <label class="form_check_label">\
//                         <input type="checkbox" name="qualifications[]" value="'+id+'" >\
//                         <span>'+name+'</span>\
//                     </label>\
//                 </li>'
//     return temp;
// }
// $(document).ready(function() {
    
//     $("#birthdayYear").empty();
//     $("#birthdayMonth").empty();
//     $("#birthdayDay").empty();
    
//     $("#birthdayYear").append('<option value="">年</option>');
//     $("#birthdayMonth").append('<option value="">月</option>');
//     $("#birthdayDay").append('<option value="">日</option>');
//     for (i=1932;i<2006;i++)
//         $("#birthdayYear").append('<option value="'+i+'" >'+i+'</option>');
//     for (i=1;i<=12;i++)
//         $("#birthdayMonth").append('<option value="'+i+'" >'+i+'</option>');
//     for (i=1;i<=31;i++)
//         $("#birthdayDay").append('<option value="'+i+'" >'+i+'</option>');

// // AJAX call on button click

//     // if ($('#name').val() === '' || $('#birthdayYear').val() === '' || $('#birthdayMonth').val() === '' || $('#birthdayDay').val() === '' || $('#gender').val() === '' || $('#postcode').val() === '' || $('#prefecture_dropdown').val() === '' || $('#qualification_list').val() === '' || $('#email').val() === '' || $('#password').val() === '') {
//     //        document.getElementById('submit-btn').disabled = true;
//     // } else {
//     //        document.getElementById('submit-btn').disabled = false;
//     // }
//     if ($('#name').val() === '' || $('#birthdayYear').val() === '' || $('#birthdayMonth').val() === '' || $('#birthdayDay').val() === '' || $('#zip_code').val() === '' || $('prefecture_dropdown').val() === '' || $('#email').val() === '' || $('#password').val() === '' || $('#gender').val() === '' || $('input[name="qualifications[]"]:checked').length == 0 || !$('input[name="terms"]').is(':checked')) {
//            document.getElementById('submit-btn').disabled = true;
//     } else {
//            document.getElementById('submit-btn').disabled = false;
//     }
//     $('#name, #birthdayYear, #qualification_list, input[name="terms"], #birthdayMonth, #birthdayDay, #gender, #zip_code, #prefecture_dropdown,  #password, #email, input[name="terms"]').on('input change', function() {
//        if ($('#name').val() === '' || $('#birthdayYear').val() === '' || $('#birthdayMonth').val() === '' || $('#birthdayDay').val() === '' || $('#zip_code').val() === '' || $('#prefecture_dropdown').val() === '' || $('#email').val() === '' || $('#password').val() === '' || $('#gender').val() === '' ||$('input[name="qualifications[]"]:checked').length == 0 || !$('input[name="terms"]').is(':checked') ) {
//            document.getElementById('submit-btn').disabled = true;
//        } else {
//            document.getElementById('submit-btn').disabled = false;
//        }
//    });
   
// //     $('#name, #birthdayYear, #birthdayMonth, #birthdayDay, #gender, #postcode, #prefecture_dropdown, #postcode, #city_dropdown, #qualification_list, #password, #email').on('input change', function() {
// //        if ($('#name').val() === '' || $('#birthdayYear').val() === '' || $('#birthdayMonth').val() === '' || $('#birthdayDay').val() === '' || $('#gender').val() === '' || $('#postcode').val() === '' || $('#prefecture_dropdown').val() === '' || $('#qualification_list').val() === '' || $('#email').val() === '' || $('#password').val() === '') {
// //            document.getElementById('submit-btn').disabled = true;
// //        } else {
// //            document.getElementById('submit-btn').disabled = false;
// //        }
// //    });

//     $('#prefecture_dropdown').on('change', function() {
//         // Get selected value
//         var selected_prefecture_id = $(this).val();

//         console.log('Selected prefecture ID: ' + selected_prefecture_id);
        
//         // Make an AJAX request to retrieve matching cities
//         $.ajax({
//             url: '/get-cities-by-prefecture-id',
//             type: 'GET',
//             dataType: 'json',
//             data: { prefecture_id: selected_prefecture_id },
//             success: function(data) {
//                 // Clear second dropdown
//                 $('#city_dropdown').empty();

//                 // Populate second dropdown with matching cities
//                 $.each(data, function(key, value) {
//                     $('#city_dropdown').append('<option name="city_id" value="' + value.id + '">' + value.name + '</option>');
//                 });
//             }
//         });
//     });
//     // $.ajax({
//     // url: "/get-prefecture-region",
//     // type: "GET",
//     // success: function(data){
//     //     // Display fetched data in the data div
//     //     $("#qualification").empty();
//     //     $("#prefecture_select").append('<option :value="null">選択してください</option>');
//     //     for(var i=0;i<data.prefectureData.length;i++){
//     //         $("#prefecture_select").append(templateLOption(data.prefectureData[i].id, data.prefectureData[i].name));
//     //     }
//     //     j
//     //     // $(".PrefectureSelect").on("click", function () {
//     //     //     $(".AreaSearch")
//     //     //         .find(".school-sp_popup_fixed_submit")
//     //     //         .prop("disabled", false);
//     //     // });
//     // }
//     // });

//     $.ajax({
//     url: "/get-qualification",
//     type: "GET",
//     success: function(data){
//         // Display fetched data in the data div
//         $("#qualification_list").empty();
//         for(var i=0;i<data.qualificationData.length;i++){
//             $("#qualification_list").append(templateQOption(data.qualificationData[i].id, data.qualificationData[i].name));
//         }
        
//         // $(".PrefectureSelect").on("click", function () {
//         //     $(".AreaSearch")
//         //         .find(".school-sp_popup_fixed_submit")
//         //         .prop("disabled", false);
//         // });
//     }
//     });
// });
        
</script>
@endsection