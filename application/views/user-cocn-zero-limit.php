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
      <div class="cocn-step-panel after-cls">
          <a href="/page/user-cocn-zero-web" class="base had">
            <em>1</em>
            实名网址</a>
          <a href="/page/user-cocn-zero-connect" class="base had">
            <em>2</em>
            联系方式</a>
          <a href="/page/user-cocn-zero-introduce" class="base had">
            <em>3</em>
            公司介绍</a>
          <a href="/page/user-cocn-zero-logo" class="base had">
            <em>4</em>
            标志设置</a>
          <!-- <a href="/page/user-cocn-zero-news" class="base had">
            <em>5</em>
            新闻中心</a>
          <a href="/page/user-cocn-zero-product" class="base had">
            <em>6</em>
            产品中心</a> -->
          <a href="/page/user-cocn-zero-limit" class="base on">
            <em>5</em>
            权限设置</a>
      </div>
      <div class="mt25 after-cls">
        <div class="install-box">
          <div class="auto-table">
            <table width="100%" class="">
              <tbody>
                <tr class="">
                  <td width="140" align="center" rowspan="3" class="bg-5897cd">
                    <span class="title col-white lh16 mt25 mb25 in-block pos-rela">
                      网站负责人
                    </span>
                  </td>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                    姓名
                    </div>
                  </td>
                  <td class="bg-fa">
                    <input type="text" name="" value="" placeholder="请输入姓名" class="input w190">
                  </td>
                </tr>
                <tr>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                    联系电话
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="text" name="" value="" placeholder="请输入联系电话" class="input w190">
                  </td>
                </tr>
                <tr>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      身份证号码
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="text" name="" value="" placeholder="请输入身份证号码" class="input w190">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="fl-l w-all mt30 mb10">
          <p class="ta-c mt15 mb20">
            <a href="/page/user-cocn-zero-last" class="pub-btn w190 mr18">完成初始化设置</a>
            <a href="/page/user-cocn-zero-logo" class="col-3daaef">返回，修改公司标识</a>
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
