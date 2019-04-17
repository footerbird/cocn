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
                  <td width="140" align="center" rowspan="6" class="bg-5897cd">
                    <span class="title col-white lh16 mt25 mb25 in-block pos-rela">
                      联系方式
                    </span>
                  </td>
                  <td width="120" class="pl20 bg-fa">
                    <div class="pl25 col-default">
                      所在地区
                    </div>
                  </td>
                  <td class="bg-fa">
                    <div class="select-panel mb15">
                      <select class="mr10 w190" name="">
                        <option value="">浙江省</option>
                      </select>
                      <select class="mr10 w190" name="">
                        <option value="">杭州市</option>
                      </select>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td width="120" class="pl20 bg-fa">
                    <div class="pl25 col-default">
                      街道地址
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="text" name="" value="" placeholder="街道/门牌" class="input w380">
                  </td>
                </tr>
                <tr>
                  <td width="120" class="pl20 bg-fa">
                    <div class="pl25 col-default">
                      服务热线
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="text" name="" value="" placeholder="" class="input w190">
                  </td>
                </tr>
                <tr>
                  <td width="120" class="pl20 bg-fa">
                    <div class="pl25 col-default">
                      微博
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="text" name="" value="" placeholder="" class="input w190">
                  </td>
                </tr>
                <tr>
                  <td width="120" class="pl20 bg-fa">
                    <div class="pl25 col-default">
                      QQ
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="text" name="" value="" placeholder="" class="input w190">
                  </td>
                </tr>
                <tr>
                  <td width="120" class="pl20 bg-fa">
                    <div class="pl25 col-default">
                    电子邮箱
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="text" name="" value="" placeholder="" class="input w190">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="fl-l w-all mt30 mb10">
          <p class="ta-c mt15 mb20">
            <a href="/page/user-cocn-zero-introduce" class="pub-btn w150">完成</a>
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
