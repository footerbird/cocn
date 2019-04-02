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
        <a href="/page/user-personal" class="on">个人信息</a>
        <a href="/page/user-company-certify" class="">公司认证</a>
        <a href="/page/user-accounts" class="">收款账户</a>
        <a href="/page/user-login-log" class="">登录日志</a>
      </div>
      <div class="mt25 ml15 mr15 after-cls">
        <div class="personal-box">
          <div class="hd smrz">
            <span class="title">实名认证</span>
          </div>
          <div class="bd">
            <div class="ta-c mt25 mb15">
              <p class="col-default f16 lh30">李群</p>
              <p><em class="block-a-renzheng">认证</em><em class="block-a-shenhe">审核中</em></p>
            </div>
          <dl class="info">
            <dt>身份证：</dt>
            <dd>330103201903278888</dd>
          </dl>
          <dl class="info">
            <dt>注册时间：</dt>
            <dd>2019年2月12日</dd>
          </dl>
          <div class="bottom">
            <a href="#" class="col-default f12 in-block">查看
              <i class="ico-blue-arrow"></i>
            </a>
          </div>
          </div>
        </div>
        <div class="personal-box">
          <div class="hd lxfs">
            <span class="title">联系方式</span>
          </div>
          <div class="bd pt30">
            <div class="fl-l">
              <dl class="info">
                <dt>手机：</dt>
                <dd>
                  <font>13288888888</font><em class="block-a-renzheng">有效</em>
                </dd>
              </dl>
              <dl class="info">
                <dt>微信：</dt>
                <dd>
                  <font>w**8</font><em class="block-a-zanwu">暂无</em>
                </dd>
              </dl>
              <dl class="info">
                <dt>QQ：</dt>
                <dd>
                  <font>222222222</font>
                </dd>
              </dl>
            </div>
            <div class="fl-r">
              <dl class="info">
                <dt>新浪微博：</dt>
                <dd>
                  <font>mingshang.weibo.combak</font><em class="block-a-renzheng">有效</em>
                </dd>
              </dl>
              <dl class="info">
                <dt>电子邮箱：</dt>
                <dd>
                  <font>mingshang.marksmile.com</font><em class="block-a-renzheng">有效</em>
                </dd>
              </dl>
              <dl class="info">
                <dt>收货地址：</dt>
                <dd>
                  <font>浙江省杭州市拱墅区上塘路333号海外海商务写字楼11楼</font>
                </dd>
              </dl>
            </div>
          <div class="bottom">
            <a href="#" class="col-default f12 in-block">设置
              <i class="ico-blue-arrow"></i>
            </a>
          </div>
          </div>
        </div>
        <div class="personal-box">
          <div class="hd dsf">
            <span class="title">第三方授权</span>
          </div>
          <div class="bd pt50">
          <dl class="info">
            <dt>微信：</dt>
            <dd>39029309</dd>
          </dl>
          <dl class="info">
            <dt>微博：</dt>
            <dd>mingshang.weibo.com</dd>
          </dl>
          <div class="bottom">
            <a href="#" class="col-default f12 in-block">设置
              <i class="ico-blue-arrow"></i>
            </a>
          </div>
          </div>
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
  //切换行业数据、地区分析
  $("#col_left_tab_box .tab a").on('click',function() {
      $(this).addClass('on').siblings().removeClass('on');
      var index = $(this).index();
      number = index;
      $('#col_left_tab_box .content dd').hide();
      $('#col_left_tab_box .content dd:eq(' + index + ')').show();
  });
})
</script>
</body>
</html>