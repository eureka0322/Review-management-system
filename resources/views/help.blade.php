@extends('layout')
  
@section('content')

<main class="common_main" id="help_main">
  <div class="others_wrap">
      <div class="common_inner_m">
          <div class="pankuzu_block mb20">
              <ul class="pankuzu_list">
                  <li class="pankuzu_item">
                      <a href="/" class="pankuzu_link">ホーム</a>
                  </li>
                  <li class="pankuzu_item">
                      ヘルプ
                  </li>
              </ul>
          </div>
          <h1 class="others_title02">
              ヘルプ
          </h1>
          <div class="common_sp_640">
              <div class="others_help_search">
                  <input type="text" name="keyword" v-model="keyword" class="others_help_input" placeholder="検索">
                  <button type="button" class="others_help_search_btn" @click="searchHelpContents">
                      <img src="{{asset('assets/user/images/school/search_icon_gray.svg')}}" alt="search">
                  </button>
              </div>
          </div>
          <div class="others_help_layout">
              <div class="others_help_block">
                  <div class="others_help_box" v-for="helpContent in helpContents.slice(0, helpContents.length / 2)" :key="helpContent.categoryName">
                      <h2 class="others_help_title">{{ helpContent.categoryName }}</h2>
                      <ul class="others_help_list">
                          <li
                              class="others_help_item"
                              v-for="(content, contentIndex) in helpContent.contents"
                              :key="content.question"
                              @click="toggleIsActive(helpContent.index, contentIndex)"
                          >
                              <div class="others_help_quest_block" :class="{ active: content.isActive }">
                                  <p class="others_help_quest_icon">Q.</p>
                                  <h2 class="others_help_quest_title">
                                      <span v-html="content.question"></span>
                                  </h2>
                              </div>
                              <div class="others_help_answer_block" :class="{ active: content.isActive }">
                                  <p class="others_help_answer_text">
                                      <span class="others_help_answer_icon">A.</span>
                                      <span v-html="content.answer"></span>
                                  </p>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="others_help_block">
                  <div class="others_help_box" v-for="helpContent in helpContents.slice(helpContents.length / 2)" :key="helpContent.categoryName">
                      <h2 class="others_help_title">{{ helpContent.categoryName }}</h2>
                      <ul class="others_help_list">
                          <li 
                              class="others_help_item" 
                              v-for="(content, contentIndex) in helpContent.contents" 
                              :key="content.question"
                              @click="toggleIsActive(helpContent.index, contentIndex)"
                          >
                              <div class="others_help_quest_block" :class="{ active: content.isActive }">
                                  <p class="others_help_quest_icon">Q.</p>
                                  <h2 class="others_help_quest_title">
                                      <span v-html="content.question"></span>
                                  </h2>
                              </div>
                              <div class="others_help_answer_block" :class="{ active: content.isActive }">
                                  <p class="others_help_answer_text">
                                      <span class="others_help_answer_icon">A.</span>
                                      <span v-html="content.answer"></span>
                                  </p>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div>
              <div class="others_help_contact_block">
                  <h3 class="others_help_contact_title">お問い合わせ窓口</h3>
                  <p class="others_help_contact_text">
                      受付時間: 365日<br>
                      対応時間: 平日10:00~18:00<br class="common_sp_640">（土日祝を除く）
                  </p>
                  <div class="others_help_contact_btnarea">
                      <a href="/help/contact2" class="common_btn01">ユーザー(保育士)の方</a>
                      <a href="/help/contact1" class="common_btn05">法人(保育園)の方</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>

@endsection