/*navのアンカーリンククリックで閉める*/
function nav_close(){
  $('input[name="sp_nav"]').prop('checked', false);
}
$(function () { 
  $('li.luxbar-item a.check').click(function() {
    // もしチェックが入っていたら
    if ($('input[name="sp_nav"]').prop('checked')) {
      // チェックを外す関数を読み込み
        setTimeout("nav_close()", 1600);
    // もしチェックが外れていたら
    } else {
      $('input[name="sp_nav]').prop('checked', true);
    }
  });
});
/*
$(function(){
    var headerHight = 60;
  $('a[href^=#]:not(a.notscroll)').click(function(){
    var speed = 1600;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top-headerHight;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});
*/
/* =========================
  acordion
========================= */
$(function() {
  var isAcordionCreator = false;
  var isAcordionStudio = false;
  $("li.acordion-creator").click(function() {
    if (isAcordionStudio) {
      $(".acordion-menu.acordion-menu-studio").fadeToggle(800);
      isAcordionStudio = false;
    }
    $(".acordion-menu.acordion-menu-creator").fadeToggle(800);
    isAcordionCreator = !isAcordionCreator;
  });
  $("li.acordion-studio").click(function() {
    if (isAcordionCreator) {
      $(".acordion-menu.acordion-menu-creator").fadeToggle(800);
      isAcordionCreator = false;
    }
    $(".acordion-menu.acordion-menu-studio").fadeToggle(800);
    isAcordionStudio = !isAcordionStudio;
  });
});

/* =========================
  background line
========================= */
$(function(){
  var delaytime1 = [ 1000,2000,3000,4000,5000,6000,7000,8000,9000,10000, 11000, 12000, 13000, 14000, 15000, 16000, 17000, 18000, 19000, 20000, 21000, 22000, 23000, 24000, 25000, 26000, 27000, 28000, 29000, 30000, 31000, 32000, 33000, 34000, 35000, 36000, 37000, 38000, 39000, 40000, 41000, 42000, 43000, 44000, 45000, 46000, 47000, 48000, 49000, 50000, 51000, 52000, 53000, 54000, 55000, 56000, 57000, 58000, 59000, 60000 ] ;
  var delaytime2 = delaytime1[ Math.floor( Math.random() * delaytime1.length ) ] ;
  var delaytime3 = delaytime1[ Math.floor( Math.random() * delaytime1.length ) ] ;
  var delaytime4 = delaytime1[ Math.floor( Math.random() * delaytime1.length ) ] ;
  $('.line1').delay(delaytime2).queue(function(){
    $(this).addClass('line1-start').dequeue();
  });
  $('.line2').delay(delaytime3).queue(function(){
    $(this).addClass('line2-start').dequeue();
  });
  $('.line3').delay(delaytime4).queue(function(){
    $(this).addClass('line3-start').dequeue();
  });
});

$(function(){
    setTimeout(function(){
      $('.split1').css('display' , 'block');
      $('.split1').addClass('split-start');
    },500);
    setTimeout(function(){
      $('.split1').css('display' , 'none');
      $('.split2').css('display' , 'block');
      $('.split2').addClass('split-start');
    },2300);
    setTimeout(function(){
      $('.split2').css('display' , 'none');
      $('.split3').css('display' , 'block');
      $('.split3').addClass('split-start');
    },3950);
    setTimeout(function(){
      $('.split3').css('display' , 'none');
      $('.split4').css('display' , 'block');
      $('.split4').addClass('split-start');
      $('.fade-img').hide();
    },5550);
    setTimeout(function(){
      $('.split4').css('display' , 'none');
      $('.fade-img').fadeIn(350);
      $('.split5').css('display' , 'block');
      $('.split5').addClass('split-final');
    },7900);
});

/* =========================
  一文字ごとclass追加
========================= */
$(function(){
    var setElm = $('.split'),
    className = 'sliceTxt';
 
    setElm.children().addBack().contents().each(function(){
        var elmThis = $(this);
        if (this.nodeType == 3) {
            var $this = $(this);
            $this.replaceWith($this.text().replace(/(\S)/g, '<span>$&</span>'));
        }
        setElm.each(function(){
            $(this).find('span').each(function(i){
                i = i+1;
                $(this).addClass(className+i);
            });
        });
    });
});

/* =========================
  fade tab
========================= */
$(document).ready(function() {
     //初期表示
     $(".tab-content").hide();//全ての.tab-contentを非表示
     $("ul.tabs li:first").addClass("active").show();//tabs内最初のliに.activeを追加
     $(".tab-content:first").show();//最初の.tab-contentを表示
     //タブクリック時
     $("ul.tabs li").click(function() {
          //all_allを表示させる
          $("ul.tabs-child li").removeClass("active");//.activeを外す
          $(".tab-content-child").hide();//全ての.tab-content-childを非表示
          $(".all_all").fadeIn();//アクティブタブコンテンツをフェードイン
          $(".all_btn").addClass("active");//アクティブタブコンテンツをフェードイン
          $("#equipments").fadeIn();//アクティブタブコンテンツをフェードイン
          $("#equipments-c").fadeIn();//アクティブタブコンテンツをフェードイン

          $("ul.tabs li").removeClass("active");//.activeを外す
          $(this).addClass("active");//クリックタブに.activeを追加
          $(".tab-content").hide();//全ての.tab-contentを非表示
          var activeTab = $(this).find("a").attr("href");//アクティブタブコンテンツ
          $(activeTab).fadeIn();//アクティブタブコンテンツをフェードイン
          return false;
     });
});
$(document).ready(function() {
     //初期表示
     $(".tab-content-child").hide();//全ての.tab-content-childを非表示
     $("ul.tabs-child li:first").addClass("active").show();//tabs内最初のliに.activeを追加
     $(".tab-content-child:first").show();//最初の.tab-content-childを表示
     //タブクリック時
     $("ul.tabs-child li").click(function() {
          $("ul.tabs-child li").removeClass("active");//.activeを外す
          $(this).addClass("active");//クリックタブに.activeを追加
          $(".tab-content-child").hide();//全ての.tab-content-childを非表示
          var activeTab = $(this).find("a").attr("href");//アクティブタブコンテンツ
          $(activeTab).fadeIn();//アクティブタブコンテンツをフェードイン
          return false;
     });
});

$(function() {
　if(document.URL.match('#access')) {
          $("ul.tabs li").removeClass("active");//.activeを外す
          $("ul.tabs li.access").addClass("active");//クリックタブに.activeを追加
          $(".tab-content").hide();//全ての.tab-contentを非表示
          var activeTab = $("ul.tabs li.access").find("a").attr("href");//アクティブタブコンテンツ
          $(activeTab).fadeIn();//アクティブタブコンテンツをフェードイン
　}
});


$(document).ready(function() {
  //非表示にしたい要素
  var hide_elm = $('.header,.footer,.sidebar');
  //ボタンをクリック
  $('.print-button').click(function(){
    //非表示
    hide_elm.addClass('print');
    //印刷
    window.print();
    //元に戻す
    hide_elm.removeClass('print');
  });
});