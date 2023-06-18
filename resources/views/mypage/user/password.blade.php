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
                      パスワード変更
                  </li>
              </ul>
          </div>
          <form action="https://hoikuhiroba-kuchikomi.com/mypage/change_password" method="post">
              <input type="hidden" name="_token" value="XVqespi4Skh5QUKVeRZvwJNG3aORJNRLqLbd9RUg">                    <input type="hidden" name="_method" value="put">                    <div class="register_bg_wrap mypage_form">
                  <h1 class="mypage_form_title">
                      パスワード変更
                  </h1>
                  <p class="mypage_form_text">
                      内容を編集して、「変更する」<br class="common_sp_640">ボタンを押してください。
                  </p>
                  <ul class="form_list mb55">
                      <li class="form_item">
                          <h2 class="form_title ">現在のパスワード<span>必須</span></h2>
                          <div class="form_pwd_block">
                              <input type="text" name="current_password" class="form_input " placeholder="">
                              <button type="button" class="form_pwd_btn PwdBtn active">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/form/pwd_active_icon.svg" alt="見る" class="normal_icon">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/form/pwd_icon.svg" alt="見ない" class="active_icon">
                              </button>
                          </div>
                          <p class="form_error_text"></p>
                      </li>
                      <li class="form_item">
                          <h2 class="form_title ">新しいパスワード<span>必須</span></h2>
                          <div class="form_pwd_block">
                              <input type="password" name="password" class="form_input " placeholder="">
                              <button type="button" class="form_pwd_btn PwdBtn">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/form/pwd_active_icon.svg" alt="見る" class="normal_icon">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/form/pwd_icon.svg" alt="見ない" class="active_icon">
                              </button>
                          </div>
                          <p class="form_sub_text" >
                              8文字以上でご入力ください。
                          </p>
                      </li>
                      <li class="form_item">
                          <h2 class="form_title">新しいパスワード(確認用)<span>必須</span></h2>
                          <div class="form_pwd_block">
                              <input type="password" name="password_confirmation" class="form_input" placeholder="">
                              <button type="button" class="form_pwd_btn PwdBtn">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/form/pwd_active_icon.svg" alt="見る" class="normal_icon">
                                  <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/form/pwd_icon.svg" alt="見ない" class="active_icon">
                              </button>
                          </div>
                      </li>
                  </ul>
                  <div class="form_btnarea">
                      <button type="submit" class="common_btn01">パスワードを変更する</button>
                      <a href="https://hoikuhiroba-kuchikomi.com/mypage" class="common_btn04">キャンセル</a>
                  </div>
              </div>
          </form>
      </div>
  </div>
</main>
@endsection