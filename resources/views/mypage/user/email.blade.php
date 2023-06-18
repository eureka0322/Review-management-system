@extends('layout')
  
@section('content')

<main class="common_main">
  <div class="register_wrap">
      <div class="common_inner_s">
          <div class="pankuzu_block">
              <ul class="pankuzu_list">
                  <li class="pankuzu_item">
                      <a href="https://hoikuhiroba-kuchikomi.com" class="pankuzu_link">ホーム</a>
                  </li>
                  <li class="pankuzu_item">
                      <a href="https://hoikuhiroba-kuchikomi.com/mypage" class="pankuzu_link">マイページ</a>
                  </li>
                  <li class="pankuzu_item">
                      メール配信設定の変更
                  </li>
              </ul>
          </div>
          <form method="post" action="https://hoikuhiroba-kuchikomi.com/mypage/user/update_email_setting">
              <input type="hidden" name="_token" value="XVqespi4Skh5QUKVeRZvwJNG3aORJNRLqLbd9RUg">                    <div class="register_bg_wrap mypage_form">
                  <h1 class="mypage_form_title">
                      メール配信設定の変更
                  </h1>
                  <p class="mypage_form_text">
                      内容を編集して「変更する」<br class="common_sp_640">ボタンを押してください。
                  </p>
                  <ul class="form_list mb55">
                      <li class="form_item">
                          <h2 class="form_title">通知を受け取る内容</h2>
                          <ul class="form_check_list">
                              <li class="form_check_item">
                                  <label class="form_check_label">
                                      <input type="checkbox" name="is_new_reviews" value="1"  checked >
                                      <span>フォローしている園の新着口コミ</span>
                                  </label>
                              </li>
                              <li class="form_check_item">
                                  <label class="form_check_label">
                                      <input type="checkbox" name="is_mail_notification" value="1"  checked >
                                      <span>保育ひろばからのお知らせメール</span>
                                  </label>
                              </li>
                              <li class="form_check_item">
                                  <label class="form_check_label">
                                      <input type="checkbox" name="is_delivery_content" value="1"  checked >
                                      <span>求人関連のコンテンツを配信するメール</span>
                                  </label>
                              </li>
                          </ul>
                          
                          <p class="form_info_text">
                              ※上記以外に新サービスのご案内など、登録ユーザーの皆様にメールをお送りする場合がございます。
                          </p>
                      </li>
                  </ul>
                  <div class="form_btnarea">
                      <button type="submit" class="common_btn01">設定を変更する</button>
                      <a href="https://hoikuhiroba-kuchikomi.com/mypage" class="common_btn04">キャンセル</a>
                  </div>
              </div>
          </form>
      </div>
  </div>
</main>
@endsection