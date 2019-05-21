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
        <a href="/page/user-personal" class="">个人信息</a>
        <a href="/page/user-company-certify" class="">公司认证</a>
        <a href="/page/user-accounts" class="on">资金账户</a>
        <a href="/page/user-login-log" class="">登录日志</a>
      </div>
      <div class="mt25 ml15 mr15 after-cls">
        <div class="install-box">
          <div class="auto-table">
            <table width="100%" class="">
              <tbody>

                <tr class="">
                  <td width="140" align="center" rowspan="6" class="bg-5897cd">
                    <span class="title col-white lh16 mt25 mb25 in-block pos-rela">
                      资金账户
                    </span>
                  </td>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      账户名称
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="text" name="" value="" placeholder="请输入名称" class="input w380">
                  </td>
                </tr>
                <tr>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      账户类型
                    </div>
                  </td>
                  <td class="bg-fa">
                    <div class="select-panel mt10 mb10">
                      <select class="mr10 w190" name="" id="select_type">
                        <option value="0">请选择账户类型</option>
                        <option value="1">公司银行账号</option>
                        <option value="2">个人银行账号</option>
                        <option value="3">支付宝</option>
                      </select>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      开户行
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="text" name="kaihu" value="" placeholder="请输入开户行" class="input w380">
                  </td>
                </tr>
                <tr>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      账号
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="text" name="" value="" placeholder="请输入账号" class="input w190">
                  </td>
                </tr>
                <tr>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      开通时间
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="text" name="" value="" placeholder="请输入开通时间" class="datetxt input w190" id="date">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="fl-l w-all mt30 mb10">
          <p class="ta-c mt15 mb20">
            <a href="/page/user-accounts" class="pub-btn w150">完成</a>
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
<script src="/htdocs/js/lyz.calendar.min.js?<?php echo CACHE_TIME; ?>"></script>
<script type="text/javascript">
$(function() {
  //类型决定是否输入开户行
    $("#select_type").on("change", function() {
        var selectVal = $(this).val();
        if(selectVal != 3){
          $("input[name=kaihu]").attr("readonly",false).removeClass("read");
        } else {
          $("input[name=kaihu]").attr("readonly",true).addClass("read");
        }
    })
    // 时间选择器
    $("#date").calendar({
  		readonly : false
  	});
})
</script>
</body>
</html>
