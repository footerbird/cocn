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
          <a href="/page/user-cocn-zero-introduce" class="base on">
            <em>3</em>
            公司介绍</a>
          <a href="/page/user-cocn-zero-logo" class="base">
            <em>4</em>
            标志设置</a>
          <a href="/page/user-cocn-zero-news" class="base">
            <em>5</em>
            新闻中心</a>
          <a href="/page/user-cocn-zero-product" class="base">
            <em>6</em>
            产品中心</a>
          <a href="/page/user-cocn-zero-limit" class="base">
            <em>7</em>
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
                      公司介绍
                    </span>
                  </td>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      经营范围
                    </div>
                  </td>
                  <td class="bg-fa">
                    <textarea name="name" rows="" cols="" placeholder="请输入经营范围" class="textarea"></textarea>
                  </td>
                </tr>
                <tr>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      企业介绍
                    </div>
                  </td>
                  <td class="bg-fa">
                      <textarea name="name" rows="" cols="" placeholder="请输入企业介绍" class="textarea"></textarea>
                  </td>
                </tr>
                <tr>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      关于我们
                    </div>
                  </td>
                  <td class="bg-fa">
                    <textarea name="name" rows="" cols="" placeholder="请输入关于公司" class="textarea"></textarea>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="fl-l w-all mt30 mb10">
          <p class="ta-c mt15 mb20">
            <a href="/page/user-cocn-zero-logo" class="pub-btn w190 mr18">下一步，添加公司标识</a>
            <a href="/page/user-cocn-zero-connect" class="col-3daaef">返回，修改联系方式</a>
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
