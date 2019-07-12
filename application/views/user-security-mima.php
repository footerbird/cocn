<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_london.php') ?>
</head>
<body>
<?php include_once('templete/pub_nav_inside.php') ?>
<!-- 用户中心开始 -->
<div class="container-full">
  <?php include_once('templete/pub_leftnav.php') ?>
  <div class="view-frt">
    <div class="manage-panel">
      <div class="sub-nav-panel">
        <a href="/page/user-personal" class="on">修改密码</a>
      </div>
      <div class="mt25 ml15 mr15 after-cls">
        <div class="install-box">
          <div class="auto-table">
            <table width="100%" class="">
              <tbody>
                <tr class="">
                  <td width="140" align="center" rowspan="6" class="bg-5897cd">
                    <span class="title col-white lh16 mt25 mb25 in-block pos-rela">
                      修改密码
                    </span>
                  </td>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      手机
                    </div>
                  </td>
                  <td class="bg-fa">
                    <input type="text" name="" value="1626337737" placeholder="" id="phone_find" readonly class="input w190">
                  </td>
                </tr>
                <tr>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      短信验证
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="text" name="" value="" placeholder="请输入短信验证码" maxlength="6" required="required" class="input w190">
                      <a href="javascript:;" onclick="" class="pub-btn-m pub-btn-m-5897cd ml10" onclick="sendCodeFindpwd(this,60,$('#phone_find').val(),'upwin_findpwd_error')">获取验证码</a>
                  </td>
                </tr>
                <tr>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      输入新密码
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="password" name="" value="" placeholder="请输入密码，至少8位数英文数字组合" class="input w380">
                  </td>
                </tr>
                <tr>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      确认新密码
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="password" name="" value="" placeholder="请确认密码" class="input w380">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="fl-l w-all mt30 mb10">
          <p class="ta-c mt15 mb20">
            <a href="/page/user-cocn-settings" class="pub-btn w150">完成</a>
          </p>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- footer -->
<?php include_once('templete/pub_foot_inside.php') ?>
<script src="/htdocs/js/slick/slick.min.js?<?php echo CACHE_TIME; ?>"></script>
<link rel="stylesheet" href="/htdocs/js/slick/slick.css?<?php echo CACHE_TIME; ?>">
<script type="text/javascript">
$(function(){

})
</script>
</body>
</html>
