<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>阿廣告白吧！告別黑白吧！ - 最新消息</title>
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

    <div id="wrap">
      <div class="container news_container">
        <div class="row">
          
          <div class="col-md-offset-2 col-md-8 news_wraper text_fadein" id="news_wraper" >

              <div id="affixed_title"><h1 class="page-header">最新消息</h1></div>

              <div class="list-group news_list">
                
                <!-- <div data-contentid="news_content_1" class="list-group-item news_list_item float-shadow">
                  <div class="row">
                    <div class="col-md-4 news_date"><h2>2014/08/10</h2></div>
                    <div class="col-md-8 news_header"><h2>Camouflage paint woke the prime minister.</h2></div>
                    <div id="news_content_1" class="col-md-12 news_content news_content_hidden"></div>
                  </div>
                </div> -->

                <?php

                  # Prepare google docs spread sheet csv link
                  $spreadsheet_url="https://docs.google.com/spreadsheets/export?id=1RJUHBFHu1j5Ezj7p83T277qpyd4oZIolQ62BrRCKXhE&exportFormat=csv";
                  #$spreadsheet_url="https://docs.google.com/spreadsheets/d/1RJUHBFHu1j5Ezj7p83T277qpyd4oZIolQ62BrRCKXhE/edit#gid=0"

                  # I don't know what this does.
                  if(!ini_set('default_socket_timeout',    15)) echo "<!-- unable to change socket timeout -->";

                  # Download and read the csv file
                  if (($handle = fopen($spreadsheet_url, "r")) !== FALSE) 
                  {

                    # Parse CSV file
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
                    {
                      $spreadsheet_data[]=$data;
                    }
                    fclose($handle);
                    // print_r($spreadsheet_data);

                    # Generate HTML Code
                    // echo $spreadsheet_data;
                    if (is_array($spreadsheet_data))
                    {
                      $cnt = 0;
                      foreach ($spreadsheet_data as $row) 
                      {
                        if (count($row) < 3) 
                        {
                          echo '<!-- News format Error -->';
                        }
                        else 
                        {
                          $title = $row[0];
                          $content = $row[1];
                          $date = $row[2];

                          echo '
                            <div data-contentid="news_content_'.$cnt.'" class="list-group-item news_list_item float-shadow" style="width:100%;">
                              <div class="row">
                                <div class="col-md-4 news_date">
                                  <h2>'.$date.'</h2>
                                </div>
                                <div class="col-md-8 news_header">
                                  <h2>'.$title.'</h2>
                                </div>
                                <div id="news_content_'.$cnt.'" class="col-md-12 news_content news_content_hidden" style="padding-left:55px;">
                                  <h4>'.$content.'</h4>
                                </div>
                              </div>
                            </div>
                          ';
                        }
                        $cnt++;
                      }  
                    }
                    else 
                    {
                      echo '<h2>Sorry, There is no news :-(</h2>';
                    }
                    
                  }
                  else 
                  {
                    echo "<h2>Problem reading csv. Please contact our administrator for help.</h2>";
                  }

                ?>

              </div>

            </div>
          </div>
        </div>
      </div>
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

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script>

          $(document).ready(function(){

            // Autohiding navbar
            $(".navbar-fixed-top").autoHidingNavbar({});

            // $("#affixed_title").affix({
            //   offset: {
            //     top: 100,
            //     // bottom: function(){ return (this.bottom = $("#news_wraper").outerHeight(true)) }
            //   }
            // });
            
          });

          $(".news_list_item").click(function(){
            var target_id = $(this).attr("data-contentid");
            // console.log(target_id);
            // $("#"+target_id).toggleClass("news_content_hidden");
            if ( $("#"+target_id).is(":hidden") ) {
              $("#"+target_id).slideDown("fast");
            }
            else {
              $("#"+target_id).hide("fast");
            }
          });
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>