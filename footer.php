<footer class="page-footer success-color center-on-small-only">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-6">
                     <h4 class="h4-responsive white-text">ホテルサンプル</h4>
                     <p class="grey-text text-lighten-4">
                       〒861-1313 京都市＊＊＊＊＊＊<br>
                       TEL 096-xxx-xxxx<br>
                       Email: toi@gmail.com
                     </p>
                 </div>
                 <div class="col-md-6">
                     <h5 class="white-text">Links</h5>
                     <ul>
                         <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                     </ul>
                 </div>
             </div>
         </div>
         <div class="footer-copyright text-center success-color">
             <div class="container-fluid">
                 © 2018 Copyright: <a href="http://www.navc2.co.jp">ホテルサンプル</a>
             </div>
         </div>
     </footer>

<p id="page-top"><a href="#wrap"><i class="material-icons md-48">arrow_upward</i></a></p>

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Material Design Bootstrap -->
<script type="text/javascript" src="js/mdb.js"></script>
<script type="text/javascript" src="js/heightLine.js"></script>

<!-- slick -->
<script type="text/javascript" src="./js/slick.min.js"></script>

<!-- iCheck-->
<script type="text/javascript" src="js/icheck.min.js"></script>

<!-- MDL -->
<script type="text/javascript" src="js/material.min.js"></script>


<!-- slick Scroll-->
<script type="text/javascript">
var $slider_container = $('.slider-container'),
    $slider = $('.slider');

// スライド初期化時にクラスを追加
// はじめはdisplay:noneしておき、.initializedが追加されたらdisplay:block
$slider.on('init', function(){
  $slider_container.addClass('initialized');
});

$slider.slick({
  appendArrows: $slider_container,
  prevArrow: '<div class="slider-arrow slider-prev fa fa-angle-left"></div>',
  nextArrow: '<div class="slider-arrow slider-next fa fa-angle-right"></div>',
  slidesToShow: 3,
  slidesToScroll: 3,
  infinite:false,
  responsive: [
{
  breakpoint: 767,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 2,
    infinite: false,
  }
},
],

});

// スライドの横幅を小数点以下pxまで表示
$slider.on('setPosition', function(){
  var slider_width = $slider.width(),
      slide_gutter = $slider.find('.slick-slide').eq(0).css('margin-right').split('px')[0],
      slides_num = $slider.slick('slickGetOption', 'slidesToShow'),
      slide_width = (slider_width - slide_gutter * (slides_num - 1)) / slides_num;
  $slider.find('.slick-active').css('width', slide_width + 'px');
});

</script>

<!-- iCheck select box -->
<script>
$(document).ready(function () {
  $('input').iCheck({
      //ラジオボタンのスタイル設定
      radioClass: 'iradio_flat-green',
      //チェックボックスのスタイル設定
      checkboxClass: 'icheckbox_flat-green',
  });
});

$(document).ready(function () {
	$("#iCheck3").on('ifChecked', function(event){
		$("#rsv-next").html("<a class=\"btn btn-default btn-lg btn-block register02\" href=\"registration.php\">予約を確定する</a>");
	});
});

$(document).ready(function () {
	$("#iCheck3").on('ifUnchecked', function(event){
		$("#rsv-next").html("<span class=\"btn btn-lg btn-block register02\">予約を確定する</span>");
	});
});

$(document).ready(function () {
	$("#iCheck_member").on('ifChecked', function(event){
		$("#rsv-next").html("<a class=\"btn btn-default btn-lg btn-block register02\" href=\"member_complete.php\">会員登録を確定する</a>");
	});
});

$(document).ready(function () {
	$("#iCheck_member").on('ifUnchecked', function(event){
		$("#rsv-next").html("<span class=\"btn btn-lg btn-block register02\">会員登録を確定する</span>");
	});
});

</script>

<script>
 $(function() {
  $('.flat input').iCheck({
    checkboxClass: 'icheckbox_flat-blue',
    radioClass: 'iradio_flat-blue',
    increaseArea: '20%' // optional
  });
});
</script>

<script>
$(function() {
  // number of adult
  $('div.mdl-select_adult > ul > li').click(function(e) {
    var text = $(e.target).text();
    $(e.target).parents('.mdl-select_adult').addClass('is-dirty').children('input').val(text);
});

// number of room
$('div.mdl-select_room > ul > li').click(function(e) {
  var text = $(e.target).text();
  $(e.target).parents('.mdl-select_room').addClass('is-dirty').children('input').val(text);
});


  // number of children 1
    $('div.mdl-select_children_1 > ul > li').click(function(e) {
      var text = $(e.target).text();
      $(e.target).parents('.mdl-select_children_1').addClass('is-dirty').children('input').val(text);
  });

  // number of children 1
    $('div.mdl-select_children_2 > ul > li').click(function(e) {
      var text = $(e.target).text();
      $(e.target).parents('.mdl-select_children_2').addClass('is-dirty').children('input').val(text);
  });

  // number of children 1
    $('div.mdl-select_children_3 > ul > li').click(function(e) {
      var text = $(e.target).text();
      $(e.target).parents('.mdl-select_children_3').addClass('is-dirty').children('input').val(text);
  });

  // number of children 1
    $('div.mdl-select_children_4 > ul > li').click(function(e) {
      var text = $(e.target).text();
      $(e.target).parents('.mdl-select_children_4').addClass('is-dirty').children('input').val(text);
  });

  // number of children 1
    $('div.mdl-select_children_5 > ul > li').click(function(e) {
      var text = $(e.target).text();
      $(e.target).parents('.mdl-select_children_5').addClass('is-dirty').children('input').val(text);
  });

  // number of children 1
    $('div.mdl-select_children_6 > ul > li').click(function(e) {
      var text = $(e.target).text();
      $(e.target).parents('.mdl-select_children_6').addClass('is-dirty').children('input').val(text);
  });

 // number of male
    $('div.mdl-select_male > ul > li').click(function(e) {
        var text = $(e.target).text();
        $(e.target).parents('.mdl-select_male').addClass('is-dirty').children('input').val(text);
    });

 //number of female
    $('div.mdl-select_female > ul > li').click(function(e) {
        var text = $(e.target).text();
        $(e.target).parents('.mdl-select_female').addClass('is-dirty').children('input').val(text);
    });

  //number of option #1
    $('div.mdl-select_option1 > ul > li').click(function(e) {
        var text = $(e.target).text();
        $(e.target).parents('.mdl-select_option1').addClass('is-dirty').children('input').val(text);
    });

});
</script>

<script>
$(function() {
    var topBtn = $('#page-top');
    topBtn.hide();
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 700) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});

$(function() {
	var rsvBtn = $('#rsv-btn-box');
	//rsvBtn.hide();
	//スクロールが100に達したらボタン表示
	$(window).scroll(function () {
		if ($(this).scrollTop() > 700) {
			rsvBtn.fadeIn();
		} else {
			rsvBtn.fadeOut();
		}
	});
});


$(function(){
	$("#rsv-box").css("display", "none");
	$("#rsv_btn").click(function(){
		$("#rsv-box").fadeToggle();
	});
});


</script>

</body>

</html>
