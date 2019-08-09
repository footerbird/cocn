<script src="/htdocs/js/jquery-1.11.1.min.js?<?php echo CACHE_TIME; ?>"></script>
<script src="/htdocs/js/public.js?<?php echo CACHE_TIME; ?>"></script>
<script src="/htdocs/js/dom-ready.js?<?php echo CACHE_TIME; ?>"></script>
<script type="text/javascript">
$(function(){
  
  $(".nav-login").on("mouseenter",function(){//点击用户菜单下拉
      $(this).find(".user").addClass("on");
      $("#nav_user_panel").show();
  }).on("mouseleave",function(){
      $(this).find(".user").removeClass("on");
      $("#nav_user_panel").hide();
  })
  
  $("#manage_leftnav li a").on('click',function(){//左侧菜单切换样式
    $(this).parent('li').addClass('cur').siblings('li').removeClass('cur');
  })
    //manage-panel-only
    $(function(){
      $(".manage-panel-only").css({
          "min-height" : ($(window).height()-85)+"px"
      })
      // 普通全屏
      if($(".manage-panel").length == 1){
          $(".manage-panel").css({
              "min-height" : ($(window).height()-85)+"px",
              "margin-bottom" : "0"
          })
      }
    });
})
</script>
