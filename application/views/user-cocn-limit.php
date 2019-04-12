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
        <span class="title">杭州名商网络有限公司官网</span>
        <p class="mt5">
          <a href="/page/user-cocn-settings" class="">通用设置</a>
          <a href="/page/user-cocn-news" class="">新闻中心</a>
          <a href="/page/user-cocn-product" class="">产品中心</a>
          <a href="/page/user-cocn-comment" class="">用户评论</a>
          <a href="/page/user-cocn-business" class="">工商信息</a>
          <a href="/page/user-cocn-limit" class="on">权限设置</a>
        </p>
      </div>
      <div class="mt25 after-cls">
        <div class="personal-box">
          <div class="hd dsf">
            <span class="title">法定代表人</span>
          </div>
          <div class="bd">
            <table width="" class="fl-l mt30">
              <tbody>
                <tr>
                  <td>
                    <div class="ml25 col-default f16 lh30">林赞松
                    </div>
                  </td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
            <div class="bottom">
              <a href="#" class="col-default f12 in-block">更新
                <i class="ico-blue-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="personal-box">
          <div class="hd gs-yhzh">
            <span class="title">网站<br />负责人</span>
          </div>
          <div class="bd h150">
            <table width="" class="fl-l mt20">
              <tbody>
                <tr>
                  <td>
                    <dl class="info">
                      <dt>姓名：</dt>
                      <dd>立群</dd>
                    </dl>
                  </td>
                  <td>

                  </td>
                  <td>

                  </td>
                </tr>
                <tr>
                  <td>
                    <dl class="info">
                      <dt>联系电话：</dt>
                      <dd>3948834884</dd>
                    </dl>
                  </td>
                  <td>

                  </td>
                  <td>

                  </td>
                </tr>
                <tr>
                  <td>
                    <dl class="info">
                      <dt>身份证号：</dt>
                      <dd>22333445556663</dd>
                    </dl>
                  </td>
                  <td>
                  </td>
                  <td>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="bottom">
              <a href="#" class="col-default f12 in-block">设置
                <i class="ico-blue-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="personal-box">
          <div class="hd dsf">
            <span class="title">网站负责人</span>
          </div>
          <div class="bd">
            <table width="" class="fl-l mt30">
              <tbody>
                <tr>
                  <td>
                    <div class="ml25 col-gray9 f16 lh30">暂无
                    </div>
                  </td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
            <div class="bottom">
              <a href="#" class="col-default f12 in-block">添加网站负责人<i class="ico-blue-arrow"></i>
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
