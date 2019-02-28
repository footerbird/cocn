<script src="/htdocs/js/jquery-1.11.1.min.js?<?php echo CACHE_TIME; ?>"></script>
<script src="/htdocs/js/public.js?<?php echo CACHE_TIME; ?>"></script>
<script src="/htdocs/js/dom-ready.js?<?php echo CACHE_TIME; ?>"></script>
<script type="text/javascript">
$(function(){
  $("#user").on("click",function(){//点击用户菜单下拉
      if($(this).hasClass("on")) {
          $(this).removeClass("on");
          $("#nav_user_pannel").hide();
      }else {
          $(this).addClass("on");
          $("#nav_user_pannel").show();
      }
  })
})
</script>
