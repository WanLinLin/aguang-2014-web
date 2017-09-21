<?php 
  session_start();
  include("dbconfig.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>阿廣告白吧！告別黑白吧！ - 影音藝廊</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/my-navbar-2.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
        <link href="res/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <link href='img/pagelogo.ico' rel='icon' type='image/x-icon'/>
        <link rel="SHORTCUT ICON" href="img/pagelogo.ico">

        <style>
        </style>

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '270166026515153',
          xfbml      : true,
          version    : 'v2.1'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/zh_tw/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container" id="navbar_container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <a class="navbar-brand" href="/aguang2014" style="padding: 0px;"><img class="img-responsive" src="img/logo.png" alt="阿廣告白吧！告別黑白吧！"></a>
        <div
          class="fb-like navbar-text navbar-left"
          data-send="true"
          data-layout="button_count" 
          data-action="like" 
          data-show-faces="false" 
          data-share="false"
          data-href="http://www.aguangnsysu.com/aguang2014/">
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="takepartin.html"><i class="fa fa-pencil fa-fw"></i> 報名參加</a></li>
            <li><a href="news.php"><i class="fa fa-home fa-fw"></i> 最新消息</a></li>
            <li><a href="howtotakepartin.html"><i class="fa fa-database fa-fw"></i> 比賽流程</a></li>
            <li><a href="video_gallery.php"><i class="fa fa-video-camera fa-fw"></i> 影音藝廊</a></li>
            <li><a href="https://www.facebook.com/pages/%E7%AC%AC%E4%BA%94%E5%B1%86%E9%98%BF%E5%BB%A3%E5%91%8A%E7%99%BD%E5%90%A7-%E5%89%B5%E6%84%8F%E5%BB%A3%E5%91%8A%E7%AB%B6%E8%B3%BD/847470911954286" target="_blank"><i class="fa fa-thumbs-o-up fa-fw"></i>臉書粉專</a></li>
            <li><a href="http://www.rainbowpaint.com.tw/index.aspx" style="padding: 0 10px;" target="_blank"><img class="img-responsive" src="img/rainbow_tr_sm.png" alt="Rainbow" ></a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <script type="text/javascript">
      function pop_window(url){
        window.open(url,'Share This Video on Facebook!','width=500,height=300');

      }
    </script>

    <div id="wrap">
    
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron video_cover">
        <div class="container text_fadein">
          <h1>影音藝廊</h1>
          <p>“A true photograph need not be explained nor can it be contained in words” - Ansel Adams</p>
          <p>真正的攝影作品不需要解釋，它也無法用言語說明</p>
        </div>
      </div>

      <div class="container news_container">
        <div class="row"> <!--row1-->

          <div class="col-md-4 video_box glow">
            <div class="thumbnail video_thumbnail">
              <div class="lazyload_thumbnail">
                <!-- <img class="float-shadow" src="img/t1.jpg" data-toggle="modal" data-target="#video_m_1" /> -->
              </div>
              <div class="caption">
                <h4 style="border-bottom: 1px solid #bfccd0; padding-bottom: 8px;">
                  詐漆
                </h4>
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <div class="btn btn_green_border" data-toggle="modal" data-target="#video_m_1">SHOW</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade video_modal" id="video_m_1" 
          tabindex="-1" role="dialog" aria-labelledby="video_m_1_label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header video_m_header">
                  <h2 class="modal-title" id="video_m_1_label">
                    詐漆
                  </h2>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="responsive_video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/4fo4rcXJ8BE?rel=0"></iframe>
                      </div>  
                    </div>
                    <div class="col-md-4">
                      <h4 align="center"><b>影片敘述</b></h4>
                      <p>本片以幽默詼諧的無聲電影手法拍攝。</p>
                      <p>片中正在被警察追趕的兩名逃犯，突發奇想利用油漆潑在自己身上，得以利用障眼法逃過警察的追趕。</p>
                      <p>不料使用他牌油漆的逃犯，因油漆來不及乾且掉漆而被警察發現，使用虹牌油漆的逃犯則因為速乾不掉漆而逃過一劫</p>
                    </div>
                  </div>
                </div>
                <div class="modal-footer video_m_footer">
                  <a class="btn btn_green_border" onclick="pop_window('https://www.facebook.com/sharer/sharer.php?app_id=113869198637480&sdk=joey&u=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D4fo4rcXJ8BE&display=popup&ref=plugin')">SHARE</a>
                  <button type="button" class="btn" data-dismiss="modal">CLOSE</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 video_box glow">
            <div class="thumbnail video_thumbnail">
              <div class="lazyload_thumbnail">
                <!-- <img class="float-shadow" src="img/t2.jpg" data-toggle="modal" data-target="#video_m_2" /> -->
              </div>
              <div class="caption">
                <h4 style="border-bottom: 1px solid #bfccd0; padding-bottom: 8px;">
                  虹牌油漆－空氣篇
                </h4>
                </h4>
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <div class="btn btn_green_border" data-toggle="modal" data-target="#video_m_2">SHOW</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade video_modal" id="video_m_2" 
          tabindex="-1" role="dialog" aria-labelledby="video_m_2_label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header video_m_header">
                  <h2 class="modal-title" id="video_m_2_label">
                    虹牌油漆－空氣篇
                  </h2>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="responsive_video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1fR2XdmIFJU?rel=0"></iframe>
                      </div>  
                    </div>
                    <div class="col-md-4">
                      <h4 align="center"><b>影片敘述</b></h4>
                      <p>你受夠空氣中的汙染了嗎？</p>
                      <p>現代人尋求如同大自然般純淨的空氣，但你家呢？</p>
                      <p>虹牌油漆讓你在無毒安心的環境中，自由徜徉。</p>
                    </div>
                  </div>
                </div>
                <div class="modal-footer video_m_footer">
                  <a class="btn btn_green_border" onclick="pop_window('https://www.facebook.com/sharer/sharer.php?app_id=113869198637480&sdk=joey&u=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D1fR2XdmIFJU&display=popup&ref=plugin')">SHARE</a>
                  <button type="button" class="btn" data-dismiss="modal">CLOSE</button>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-4 video_box glow">
            <div class="thumbnail video_thumbnail">
              <div class="lazyload_thumbnail">
                <!-- <img class="float-shadow" src="img/t3.jpg" data-toggle="modal" data-target="#video_m_3" /> -->
              </div>
              <div class="caption">
                <h4 style="border-bottom: 1px solid #bfccd0; padding-bottom: 8px;">
                  讓每個人都有屬於自己的繽紛，虹牌油漆
                </h4>
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <div class="btn btn_green_border" data-toggle="modal" data-target="#video_m_3">SHOW</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade video_modal" id="video_m_3" 
          tabindex="-1" role="dialog" aria-labelledby="video_m_3_label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header video_m_header">
                  <h2 class="modal-title" id="video_m_3_label">
                    讓每個人都有屬於自己的繽紛，虹牌油漆
                  </h2>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="responsive_video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rAfLIM_Wy14?rel=0"></iframe>
                      </div>  
                    </div>
                    <div class="col-md-4">
                      <h4 align="center"><b>影片敘述</b></h4>
                      <p>顏色，可以表現出一個人的個性及喜好，就讓虹牌油漆來成就屬於你的繽紛生活吧！</p>
                    </div>
                  </div>
                </div>
                <div class="modal-footer video_m_footer">
                  <a class="btn btn_green_border" onclick="pop_window('https://www.facebook.com/sharer/sharer.php?app_id=113869198637480&sdk=joey&u=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DrAfLIM_Wy14&display=popup&ref=plugin')">SHARE</a>
                  <button type="button" class="btn" data-dismiss="modal">CLOSE</button>
                </div>
              </div>
            </div>
          </div>
        </div> <!--row1-->

        <div class="row"> <!--row2-->
          
          <div class="col-md-4 video_box glow">
            <div class="thumbnail video_thumbnail">
              <div class="lazyload_thumbnail">
                <!-- <img class="float-shadow" src="img/t4.jpg" data-toggle="modal" data-target="#video_m_4" /> -->
              </div>
              <div class="caption">
                <h4 style="border-bottom: 1px solid #bfccd0; padding-bottom: 8px;">
                  挑戰沒有極限
                </h4>
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <div class="btn btn_green_border" data-toggle="modal" data-target="#video_m_4">SHOW</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade video_modal" id="video_m_4" 
          tabindex="-1" role="dialog" aria-labelledby="video_m_4_label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header video_m_header">
                  <h2 class="modal-title" id="video_m_4_label">
                    挑戰沒有極限
                  </h2>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="responsive_video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nSGokbT_MHY?rel=0"></iframe>
                      </div>  
                    </div>
                    <div class="col-md-4">
                      <h4 align="center"><b>影片敘述</b></h4>
                      <p>當全世界都在挑戰冰桶的時候，我們挑戰油漆，挑戰自己，做跟別人不一樣的事，活出自己的色彩。</p>
                      <p>演員：邱韋傑<br/>旁白：陳威志<br />後製：李明駿 潘岳廷 許珈禎 林育璿<br/>指導教授：王溪泉<br/>配樂：Pacific Rim (feat. Tom Morello)</p>
                    </div>
                  </div>
                </div>
                <div class="modal-footer video_m_footer">
                  <a class="btn btn_green_border" onclick="pop_window('https://www.facebook.com/sharer/sharer.php?app_id=113869198637480&sdk=joey&u=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DnSGokbT_MHY&display=popup&ref=plugin')">SHARE</a>
                  <button type="button" class="btn" data-dismiss="modal">CLOSE</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 video_box glow">
            <div class="thumbnail video_thumbnail">
              <div class="lazyload_thumbnail">
                <!-- <img class="float-shadow" src="img/t5.jpg" data-toggle="modal" data-target="#video_m_5" /> -->
              </div>
              <div class="caption">
                <h4 style="border-bottom: 1px solid #bfccd0; padding-bottom: 8px;">
                  阿廣告白吧 安娜肥爾與虹牌油漆 
                </h4>
                </h4>
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <div class="btn btn_green_border" data-toggle="modal" data-target="#video_m_5">SHOW</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade video_modal" id="video_m_5" 
          tabindex="-1" role="dialog" aria-labelledby="video_m_5_label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header video_m_header">
                  <h2 class="modal-title" id="video_m_5_label">
                    阿廣告白吧 安娜肥爾與虹牌油漆 
                  </h2>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="responsive_video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rWRHFd_7JK0?rel=0"></iframe>
                      </div>  
                    </div>
                    <div class="col-md-4">
                      <h4 align="center"><b>影片敘述</b></h4>
                      <p>訴說虹牌油漆的branding，和一些比較美好無負擔的安納肥爾軼事</p>
                    </div>
                  </div>
                </div>
                <div class="modal-footer video_m_footer">
                  <a class="btn btn_green_border" onclick="pop_window('https://www.facebook.com/sharer/sharer.php?app_id=113869198637480&sdk=joey&u=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DrWRHFd_7JK0&display=popup&ref=plugin')">SHARE</a>
                  <button type="button" class="btn" data-dismiss="modal">CLOSE</button>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-4 video_box glow">
            <div class="thumbnail video_thumbnail">
              <div class="lazyload_thumbnail">
                <!-- <img class="float-shadow" src="img/t6.jpg" data-toggle="modal" data-target="#video_m_6" /> -->
              </div>
              <div class="caption">
                <h4 style="border-bottom: 1px solid #bfccd0; padding-bottom: 8px;">
                  愛，不褪色
                </h4>
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <div class="btn btn_green_border" data-toggle="modal" data-target="#video_m_6">SHOW</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade video_modal" id="video_m_6" 
          tabindex="-1" role="dialog" aria-labelledby="video_m_6_label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header video_m_header">
                  <h2 class="modal-title" id="video_m_6_label">
                    愛，不褪色
                  </h2>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="responsive_video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/f4ZXL4XJdow?rel=0"></iframe>
                      </div>  
                    </div>
                    <div class="col-md-4">
                      <h4 align="center"><b>影片敘述</b></h4>
                      <p>"有沒有一種愛，是永遠不會改變的？"</p>
                      <p>許多的片刻即可成為永恆， 鮮明的在心中無法褪去。</p>
                      <p>虹牌油漆陪著你度過每一刻的永恆！</p>
                    </div>
                  </div>
                </div>
                <div class="modal-footer video_m_footer">
                  <a class="btn btn_green_border" onclick="pop_window('https://www.facebook.com/sharer/sharer.php?app_id=113869198637480&sdk=joey&u=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3Df4ZXL4XJdow&display=popup&ref=plugin')">SHARE</a>
                  <button type="button" class="btn" data-dismiss="modal">CLOSE</button>
                </div>
              </div>
            </div>
          </div>
        </div> <!--row2-->

        <div class="row"> <!--row3-->
          
          <div class="col-md-4 video_box glow">
            <div class="thumbnail video_thumbnail">
              <div class="lazyload_thumbnail">
                <!-- <img class="float-shadow" src="img/t7.jpg" data-toggle="modal" data-target="#video_m_7" /> -->
              </div>
              <div class="caption">
                <h4 style="border-bottom: 1px solid #bfccd0; padding-bottom: 8px;">
                  單行道的正義
                </h4>
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <div class="btn btn_green_border" data-toggle="modal" data-target="#video_m_7">SHOW</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade video_modal" id="video_m_7" 
          tabindex="-1" role="dialog" aria-labelledby="video_m_7_label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header video_m_header">
                  <h2 class="modal-title" id="video_m_7_label">
                    單行道的正義
                  </h2>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="responsive_video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/4s3CkMuR93Y?rel=0"></iframe>
                      </div>  
                    </div>
                    <div class="col-md-4">
                      <h4 align="center"><b>影片敘述</b></h4>
                      <p>製作團隊【絕命六龜葡萄】</p>
                      <p>
                      製作 | 林正揚<br/>
                      導演 | 陳浤 <br/>
                      腳本 | 葉士瑜 <br/>
                      場務 | 曾駿翔 曾柏升 葉士瑜 <br/>
                      演出 | 郭珮瑜 <br/>
                      後製 | 陳浤 <br/>
                      特別感謝 | 吳冠廷 吳迪翰 楊子康<br/>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="modal-footer video_m_footer">
                  <a class="btn btn_green_border" onclick="pop_window('https://www.facebook.com/sharer/sharer.php?app_id=113869198637480&sdk=joey&u=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D4s3CkMuR93Y&display=popup&ref=plugin')">SHARE</a>
                  <button type="button" class="btn" data-dismiss="modal">CLOSE</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 video_box glow">
            <div class="thumbnail video_thumbnail">
              <div class="lazyload_thumbnail">
                <!-- <img class="float-shadow" src="img/t8.jpg" data-toggle="modal" data-target="#video_m_8" /> -->
              </div>
              <div class="caption">
                <h4 style="border-bottom: 1px solid #bfccd0; padding-bottom: 8px;">
                  虹牌讓你塗個快樂
                </h4>
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <div class="btn btn_green_border" data-toggle="modal" data-target="#video_m_8">SHOW</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade video_modal" id="video_m_8" 
          tabindex="-1" role="dialog" aria-labelledby="video_m_8_label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header video_m_header">
                  <h2 class="modal-title" id="video_m_8_label">
                    虹牌讓你塗個快樂
                  </h2>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="responsive_video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kXE5kHkCck4?rel=0"></iframe>
                      </div>  
                    </div>
                    <div class="col-md-4">
                      <h4 align="center"><b>影片敘述</b></h4>
                      <p>紅牌，虹牌；圖，塗，快樂。</p>
                      <p>玩色，莫那魯道爆於本廣告中運用雙關、幽默的創意來表現。</p>
                      <p>虹牌油漆可說是油漆類產品中的理想品牌，因而使用「紅牌」作為雙關；而「圖」與「塗」二字雙關，則表現油漆的美化功能性，並以此一表現方式強調「塗」油漆的這個簡單動作，是即將迎接嶄新氣象的「快樂」意象，而使觀眾對於「虹牌油漆」品牌留下深刻印象。 
                      </p>                    
                    </div>
                  </div>
                </div>
                <div class="modal-footer video_m_footer">
                  <a class="btn btn_green_border" onclick="pop_window('https://www.facebook.com/sharer/sharer.php?app_id=113869198637480&sdk=joey&u=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DkXE5kHkCck4&display=popup&ref=plugin')">SHARE</a>
                  <button type="button" class="btn" data-dismiss="modal">CLOSE</button>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-4 video_box glow">
            <div class="thumbnail video_thumbnail">
              <div class="lazyload_thumbnail">
                <!-- <img class="float-shadow" src="img/t9.jpg" data-toggle="modal" data-target="#video_m_9" /> -->
              </div>
              <div class="caption">
                <h4 style="border-bottom: 1px solid #bfccd0; padding-bottom: 8px;">
                  神以前也是人，可是他做了人做不到的事
                </h4>
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <div class="btn btn_green_border" data-toggle="modal" data-target="#video_m_9">SHOW</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade video_modal" id="video_m_9" 
          tabindex="-1" role="dialog" aria-labelledby="video_m_9_label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header video_m_header">
                  <h2 class="modal-title" id="video_m_9_label">
                    神以前也是人，可是他做了人做不到的事
                  </h2>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="responsive_video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Q_ZZuiLGS88?rel=0"></iframe>
                      </div>  
                    </div>
                    <div class="col-md-4">
                      <h4 align="center"><b>影片敘述</b></h4>
                      <p>以詼諧有趣的旁白配合著逗趣的音樂 結合虹牌油漆的解說 好玩好看又好笑！！</p>
                    </div>
                  </div>
                </div>
                <div class="modal-footer video_m_footer">
                  <a class="btn btn_green_border" onclick="pop_window('https://www.facebook.com/sharer/sharer.php?app_id=113869198637480&sdk=joey&u=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DQ_ZZuiLGS88&display=popup&ref=plugin')">SHARE</a>
                  <button type="button" class="btn" data-dismiss="modal">CLOSE</button>
                </div>
              </div>
            </div>
          </div>
        </div> <!--row3-->

        <div class="row"> <!--row4-->
          
          <div class="col-md-4 video_box glow">
            <div class="thumbnail video_thumbnail">
              <div class="lazyload_thumbnail">
                <!-- <img class="float-shadow" src="img/t10.jpg" data-toggle="modal" data-target="#video_m_10" /> -->
              </div>
              <div class="caption">
                <h4 style="border-bottom: 1px solid #bfccd0; padding-bottom: 8px;">
                  虹牌油漆 氣氛的好幫手
                </h4>
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <div class="btn btn_green_border" data-toggle="modal" data-target="#video_m_10">SHOW</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade video_modal" id="video_m_10" 
          tabindex="-1" role="dialog" aria-labelledby="video_m_10_label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header video_m_header">
                  <h2 class="modal-title" id="video_m_10_label">
                    虹牌油漆 氣氛的好幫手
                  </h2>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="responsive_video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/s0DGwev5Wy8?rel=0"></iframe>
                      </div>  
                    </div>
                    <div class="col-md-4">
                      <h4 align="center"><b>影片敘述</b></h4>
                      <p>小北一邊和男朋友甜蜜地講著電話，一邊和財財玩。突然，電話另一邊傳來尖叫聲...  </p>
                      <p> ====  虹牌油漆 氣氛的好幫手 =] </p>
                      <p> 第五屆 阿廣告白吧  參賽隊伍：急徵小型犬</p>
                    </div>
                  </div>
                </div>
                <div class="modal-footer video_m_footer">
                  <a class="btn btn_green_border" onclick="pop_window('https://www.facebook.com/sharer/sharer.php?app_id=113869198637480&sdk=joey&u=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3Ds0DGwev5Wy8&display=popup&ref=plugin')">SHARE</a>
                  <button type="button" class="btn" data-dismiss="modal">CLOSE</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 video_box glow">
            <div class="thumbnail video_thumbnail">
              <div class="lazyload_thumbnail">
                <!-- <img class="float-shadow" src="img/t11.jpg" data-toggle="modal" data-target="#video_m_11" /> -->
              </div>
              <div class="caption">
                <h4 style="border-bottom: 1px solid #bfccd0; padding-bottom: 8px;">
                  壁咚牆 My Wall of Kabedon
                </h4>
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <div class="btn btn_green_border" data-toggle="modal" data-target="#video_m_11">SHOW</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade video_modal" id="video_m_11" 
          tabindex="-1" role="dialog" aria-labelledby="video_m_11_label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header video_m_header">
                  <h2 class="modal-title" id="video_m_11_label">
                    壁咚牆 My Wall of Kabedon
                  </h2>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="responsive_video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HdD_3uU8Eu0?rel=0"></iframe>
                      </div>  
                    </div>
                    <div class="col-md-4">
                      <h4 align="center"><b>影片敘述</b></h4>
                      <p>洋洋，原本是一個每天飄在眾多粉紅色泡泡裡的一顆黑色泡泡  魯魯，又宅宅，每天只能左青龍右白虎</p>
                      <p>直到有一天，他在生命的轉捩點、人生的分水嶺、情路上的交叉路口、從古今中外的偶像劇中悟出了一條真理⋯⋯一條無所不在、比比皆是、俯拾可及的真理</p> 
                      <p>如何在就算先天不足、後天失調的狀況下捕獲少女的芳心，令少女心跳加速、臉紅心跳？</p>
                      <p>這就是當今少女最招架不住的——  壁咚（壁ドン，Kabedon)</p>
                      <p>一種把女生逼到牆邊用手困住，居高臨下深情款款地看著她的偶像劇慣用招式</p>
                      <p>因此， 洋洋懂了。</p>
                      <p>從此  他只需要一面牆，就能征服無數的青春少女  </p>
                      <p>高中畢業當天，洋洋走到他高中最具代表性和紀念性的戰績牆前，很是欣慰感動</p>
                      <p>進入大學後，洋洋也沿用了這萬年招式，但大學畢業當天，壁咚牆卻重現不了</p>
                      <p>到底發生什麼事了呢？</p>
                    </div>
                  </div>
                </div>
                <div class="modal-footer video_m_footer">
                  <a class="btn btn_green_border" onclick="pop_window('https://www.facebook.com/sharer/sharer.php?app_id=113869198637480&sdk=joey&u=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DHdD_3uU8Eu0&display=popup&ref=plugin')">SHARE</a>
                  <button type="button" class="btn" data-dismiss="modal">CLOSE</button>
                </div>
              </div>
            </div>
          </div>

        </div> <!--row4-->

      </div> <!-- /container --> 

    </div> <!-- #wrap -->


    <footer id="footer" class="jumbotron">
      <div class="container">
          <div class="row">
            <div class="col-md-12">

              <div>
                <span>主辦單位:</span>
                <span><img src="img/nsysu.png" alt="nsysu-bm-ad"> 國立中山大學企業管理學系系學會廣告行銷組</span>
                <span><img src="img/nsysu.png" alt="nsysu-bm"> 國立中山大學企業管理學系</span>
              </div>
              <div>
                <span>聯絡我們: <small>《服務時間:上午九點至晚上九點》</small></span>
                <span><i class="fa fa-fw fa-phone"></i> 黃愉庭/0933105235</span>
                <span><i class="fa fa-fw fa-phone"></i> 黃怡婷/0987840438</span>
                <span><i class="fa fa-fw fa-phone"></i> 黃煜翔/0932733029</span>
                <span><i class="fa fa-fw fa-envelope"></i> aguang106107@gmail.com</span>
              </div>

            </div>
          </div>
      </div>
    </footer> 

    

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/bootstrap-autohidingnavbar/dist/jquery.bootstrap-autohidingnavbar.min.js"></script>
        <script src="js/imsky-holder/holder.js"></script>
        <script src="js/jquery.lazyload-any.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script>

          $(document).ready(function(){

            function lazyloadimg(img) {
              img.fadeOut(0, function() {
                img.fadeIn(1000);
              });
            }

            // lazyload
            $(".lazyload_thumbnail").lazyload({
              trigger: "appear",
              load: lazyloadimg
            });

            // Autohiding navbar
            $(".navbar-fixed-top").autoHidingNavbar({});
            
          });

          // Prevent embedded youtube in modal from playing after modal has been closed.
          $('.modal').on('hide.bs.modal', function(e) {
            // console.log($(this).attr('id'));
            var victim = $(this).find('iframe');
            var victim_src = victim.attr('src');
            victim.attr('src', '');
            victim.attr('src', victim_src);
          });


        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','第五屆阿廣告白吧');ga('send','pageview');
        </script>
    </body>
</html>