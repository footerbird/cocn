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
        <span class="title sub f16">杭州名商网络有限公司官网
          <a href="javascript:;" class="fl-r f14 mr0">
            <i class="ico-blue-arrow-back"></i>
            返回公司官网
          </a>
        </span>
        <p class="mt5">
          <a href="/page/user-cocn-settings" class="on">通用设置</a>
          <a href="/page/user-cocn-news" class="">新闻中心</a>
          <a href="/page/user-cocn-product" class="">产品中心<i class="badge">
              <font>99</font>
            </i>
          </a>
          <a href="/page/user-cocn-comment" class="">用户评论
            <i class="badge">
                <font>99</font>
              </i>
          </a>
          <a href="/page/user-cocn-business" class="">工商信息</a>
          <a href="/page/user-cocn-limit" class="">权限设置</a>
        </p>
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
