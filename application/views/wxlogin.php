<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>微信登录</title>
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no' />
<link rel="icon" href="/htdocs/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/htdocs/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/htdocs/css/impowerApp3696b4.css?<?php echo CACHE_TIME; ?>">
</head>
<body style="background-color: rgb(51, 51, 51); padding: 50px;">
    
    <div class="main impowerBox">
      <div class="loginPanel normalPanel">
        <div class="title">微信登录</div>
        <div class="waiting panelContent">
          <div class="wrp_code"><img class="qrcode lightBorder" src="/htdocs/images/qrcode.jpg" /></div>
          <div class="info">
            <div class="status status_browser js_status normal" id="wx_default_tip">
                      <p>请使用微信扫描二维码登录</p>
                            <p>“官网”</p>
                  </div>
                  <div class="status status_succ js_status normal" style="display:none" id="wx_after_scan">
                      <i class="status_icon icon38_msg succ"></i>
                      <div class="status_txt">
                          <h4>扫描成功</h4>
                          <p>请在微信中点击确认即可登录</p>
                      </div>
                  </div>
                  <div class="status status_fail js_status normal" style="display:none" id="wx_after_cancel">
                      <i class="status_icon icon38_msg warn"></i>
                      <div class="status_txt">
                          <h4>您已取消此次登录</h4>
                          <p>您可再次扫描登录，或关闭窗口</p>
                      </div>
                  </div>
              </div>
        </div>
      </div>
    </div>
    
<script src="/htdocs/js/jquery-1.11.1.min.js?<?php echo CACHE_TIME; ?>"></script>
<script type="text/javascript">
$(function(){
    setTimeout(function(){
        $(".js_status").hide();
        $("#wx_after_scan").show();
        setTimeout(function(){
            location.href = '<?php echo base_url() ?>page/home';
        },2000)
    },2000)
})
</script>
</body>
</html>
