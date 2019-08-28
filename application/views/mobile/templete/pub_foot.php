<script src="/htdocs/mobile/dist/js/jquery-2.1.4.js?<?php echo CACHE_TIME; ?>"></script>
<script src="/htdocs/mobile/dist/js/fastclick.js?<?php echo CACHE_TIME; ?>"></script>
<script type="text/javascript">
$(function(){
    FastClick.attach(document.body);
})
</script>
<script src="/htdocs/mobile/dist/js/jquery-weui.min.js?<?php echo CACHE_TIME; ?>"></script>
<script src="/htdocs/mobile/dist/js/rem.js?<?php echo CACHE_TIME; ?>"></script>
<script src="/htdocs/mobile/js/public.js?<?php echo CACHE_TIME; ?>"></script>
<script src="/htdocs/mobile/js/dom-ready.js?<?php echo CACHE_TIME; ?>"></script>
<script type="text/javascript">
$(function(){
  //登录
  $("#open_login").on("click",function(){
    $("#right_login").popup();
  });
  //登录切换方式
   $(".right-switch").find("a").on("click", function() {
      $(this).addClass("cur").siblings().removeClass("cur");
      var show_id = $(this).data("switch");
      $("#" + show_id).show().siblings(".login-switch").hide();
  });
})
//倒计时发送
function sendCode(id,seconds){
    var $this = $("#"+id);
    var wait = seconds;
    $this.addClass("forbid").attr("disabled","disabled");
    time();

    function time(){
        wait--;
        if(wait<0){
            $this.removeClass("forbid").removeAttr("disabled").val("获取验证码");
            return false;
        }
        $this.val("发送成功("+wait+")");

        setTimeout(function(){
            time();
        },1000);
    }
}
</script>
