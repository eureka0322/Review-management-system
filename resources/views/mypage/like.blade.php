@extends('layout')
  
@section('content')

<main class="common_main">
  <div class="mypage_wrap">
      <div class="mypage_inner">
          <div class="common_inner">
              <div class="pankuzu_block">
                  <ul class="pankuzu_list">
                      <li class="pankuzu_item">
                          <a href="https://hoikuhiroba-kuchikomi.com" class="pankuzu_link">ホーム</a>
                      </li>
                      <li class="pankuzu_item">
                          <a href="https://hoikuhiroba-kuchikomi.com/mypage" class="pankuzu_link">マイページ</a>
                      </li>
                      <li class="pankuzu_item">
                          気になる求人
                      </li>
                  </ul>
              </div>
              <h1 class="mypage_title">
                  気になる求人
              </h1>
              <p class="mypage_text">
                  求人についている「♥気になる」を押すと、後からでも一覧で見返すことができます。
              </p>
              <ul class="mypage_recruit_list">
                                      </ul>
              <div class="mypage_line"></div>
                                  <div class="common_inner_m common_pc">
                  <h2 class="mypage_subtitle">
                      マイページメニュー
                  </h2>
              <div class="mypage_menu_block">
<div class="mypage_menu_box">
  <h2 class="mypage_menu_title">個人設定</h2>
  <ul class="mypage_menu_list">
      <li class="mypage_menu_item">
          <a href="https://hoikuhiroba-kuchikomi.com/mypage/like" class="mypage_menu_link">気になる求人一覧</a>
      </li>
      <li class="mypage_menu_item">
          <a href="https://hoikuhiroba-kuchikomi.com/mypage/following" class="mypage_menu_link">フォロー中の保育園一覧</a>
      </li>
      <li class="mypage_menu_item">
          <a href="https://hoikuhiroba-kuchikomi.com/mypage/user/email" class="mypage_menu_link">メール配信設定</a>
      </li>
      <li class="mypage_menu_item">
          <a href="https://hoikuhiroba-kuchikomi.com/mypage/password" class="mypage_menu_link">パスワード変更</a>
      </li>
      <li class="mypage_menu_item">
          <a href="https://hoikuhiroba-kuchikomi.com/mypage/user" class="mypage_menu_link">ユーザー設定</a>
      </li>
  </ul>
</div>
<div class="mypage_menu_box">
  <h2 class="mypage_menu_title">口コミ関連情報</h2>
  <ul class="mypage_menu_list">
      <li class="mypage_menu_item">
          <a href="https://hoikuhiroba-kuchikomi.com/answer" class="mypage_menu_link">口コミ投稿</a>
      </li>
      <li class="mypage_menu_item">
          <a href="https://hoikuhiroba-kuchikomi.com/mypage/draft" class="mypage_menu_link">下書き中の口コミ一覧</a>
      </li>
      <li class="mypage_menu_item">
          <a href="https://hoikuhiroba-kuchikomi.com/mypage/review" class="mypage_menu_link">投稿済みの口コミ一覧</a>
      </li>
  </ul>
</div>
<div class="mypage_menu_box">
  <h2 class="mypage_menu_title">ユーザー情報</h2>
  <ul class="mypage_menu_list">
      <li class="mypage_menu_item">
          <a href="https://hoikuhiroba-kuchikomi.com/logout" class="mypage_menu_link">ログアウト</a>
      </li>
      <li class="mypage_menu_item">
          <a href="https://hoikuhiroba-kuchikomi.com/mypage/quiet" class="mypage_menu_link">退会の手続き</a>
      </li>
  </ul>
</div>
<div class="mypage_menu_box">
  <h2 class="mypage_menu_title">会社情報・ヘルプ・その他</h2>
  <ul class="mypage_menu_list">
      <li class="mypage_menu_item">
          <a href="https://hoikuhiroba-kuchikomi.com/terms" class="mypage_menu_link">利用規約</a>
      </li>
      <li class="mypage_menu_item">
          <a href="https://www.neo-career.co.jp/policy/" class="mypage_menu_link" target="_blank" rel="noopener noreferrer">個人情報の取り扱いについて</a>
      </li>
      <li class="mypage_menu_item">
          <a href="https://www.neo-career.co.jp/company/outline/" class="mypage_menu_link" target="_blank" rel="noopener noreferrer">運営会社</a>
      </li>
      <li class="mypage_menu_item">
          <a href="https://hoikuhiroba-kuchikomi.com/guide" class="mypage_menu_link">口コミ投稿ガイドライン</a>
      </li>
      <li class="mypage_menu_item">
          <a href="https://hoikuhiroba-kuchikomi.com/help" class="mypage_menu_link">ヘルプ</a>
      </li>
  </ul>
</div>
</div>                    </div>
          </div>
      </div>
      <section class="common_campaign_block mypage">
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
</section>
      <div class="common_pc">
                      </div>
      <div class="common_sp">
          <a href="https://hoikuhiroba-kuchikomi.com/mypage" class="common_btn01 center w300">マイページトップへ</a>
      </div>
  </div>
</main>
@endsection