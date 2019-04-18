<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_london.php') ?>
</head>
<body>
<?php include_once('templete/pub_nav.php') ?>

<div class="container">
    <div id="editor" class="mt20 mb20" style="background-color: #fff;">
        <p>欢迎使用 <b>wangEditor</b> 富文本编辑器</p>
    </div>
</div>

<!-- footer -->
<div class="mt10">
</div>
<?php include_once('templete/pub_foot.php') ?>
<script src="/htdocs/js/slick/slick.min.js?<?php echo CACHE_TIME; ?>"></script>
<link rel="stylesheet" href="/htdocs/js/slick/slick.css?<?php echo CACHE_TIME; ?>">
<!-- 注意， 只需要引用 JS，无需引用任何 CSS ！！！-->
<script type="text/javascript" src="/htdocs/js/wangEditor.min.js"></script>
<script type="text/javascript">

var E = window.wangEditor
var editor = new E('#editor')
// 或者 var editor = new E( document.getElementById('editor') )
// 配置服务器端地址
editor.customConfig.uploadImgServer = '/upload'
editor.create()

$(function(){
  //切换行业数据、地区分析
  $("#col_left_tab_box .tab a").on('click',function() {
      $(this).addClass('on').siblings().removeClass('on');
      var index = $(this).index();
      number = index;
      $('#col_left_tab_box .content dd').hide();
      $('#col_left_tab_box .content dd:eq(' + index + ')').show();
  });
  //幻灯片轮播，该效果会使得弹框在滚动的时候抖动？
  $(".banner-slick").slick({
    dots: true,
    autoplay:true,
    autoplaySpeed:3000,//默认3000
    arrows:false
  });
  $(".sctz-autoplay").slick({
    infinite:true,
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: true,
    autoplaySpeed: 25000,
    arrows:false,
    dots: true
  });
})
</script>
</body>
</html>