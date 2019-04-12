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
          <a href="/page/user-cocn-settings" class="on">通用设置</a>
          <a href="/page/user-cocn-news" class="">新闻中心</a>
          <a href="/page/user-cocn-product" class="">产品中心</a>
          <a href="/page/user-cocn-comment" class="">用户评论</a>
          <a href="/page/user-cocn-business" class="">工商信息</a>
          <a href="/page/user-cocn-limit" class="">权限设置</a>
        </p>
      </div>
      <div class="mt25 after-cls">
        <div class="personal-box">
          <div class="hd dsf">
            <span class="title">公司实名网址（品牌）</span>
          </div>
          <div class="bd">
            <table width="" class="fl-l mt30">
              <tbody>
                <tr>
                  <td>
                    <div class="ml25 col-default f16 lh30">
                      <font class="ta-r mr5 in-block pl5">ming.com</font>
                      <em class="block-a-renzheng">有效期275天</em>
                    </div>
                  </td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
            <div class="bottom">
              <a href="#" class="col-default f12 in-block">暂停官网
              </a>
              <a href="#" class="col-default f12 in-block">续费
              </a>
              <a href="#" class="col-default f12 in-block">升级
                <i class="ico-blue-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="personal-box">
          <div class="hd gs-yhzh">
            <span class="title">联系方式</span>
          </div>
          <div class="bd h150">
            <table width="" class="fl-l mt30">
              <tbody>
                <tr>
                  <td width="">
                    <dl class="info">
                      <dt>地址：</dt>
                      <dd class="col-gray9">暂无
                      </dd>
                    </dl>
                  </td>
                  <td width="">
                    <dl class="info">
                      <dt>服务热线：</dt>
                      <dd class="">2494794248
                      </dd>
                    </dl>
                  </td>
                  <td width="">
                    <dl class="info">
                      <dt>微博：</dt>
                      <dd>ming.weibo.cn</dd>
                    </dl>
                  </td>
                </tr>
                <tr>
                  <td>
                    <dl class="info">
                      <dt>QQ：</dt>
                      <dd>4937494
                        <em class="block-a-renzheng">有效</em>
                      </dd>
                    </dl>
                  </td>
                  <td>
                    <dl class="info">
                      <dt>邮箱地址：</dt>
                      <dd>yii@marksmile.com</dd>
                    </dl>
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
            <span class="title">公司介绍</span>
          </div>
          <div class="bd">
            <table width="" class="fl-l mt8">
              <tbody>
                <tr>
                  <td colspan="3">
                    <dl class="info">
                      <dt>经营范围：</dt>
                      <dd class="">
                        <em class="block-a-zanwu">暂无</em>
                      </dd>
                    </dl>
                  </td>
                </tr>
                <tr>
                  <td colspan="3">
                    <dl class="info">
                      <dt>企业介绍：</dt>
                      <dd class="">
                        <em class="block-a-dairenzheng">待审核</em>
                      </dd>
                    </dl>
                  </td>
                </tr>
                <tr>
                  <td colspan="3">
                    <dl class="info">
                      <dt>关于我们：</dt>
                      <dd class="">
                        <em class="block-a-youxiao">有效</em>
                      </dd>
                    </dl>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="bottom">
              <a href="#" class="col-default f12 in-block">设置<i class="ico-blue-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="personal-box">
          <div class="hd dsf">
            <span class="title">标志设置</span>
          </div>
          <div class="bd">
            <table width="" class="fl-l mt8">
              <tbody>
                <tr>
                  <td colspan="3">
                    <dl class="info">
                      <dt>网站标识：</dt>
                      <dd class="">
                        <em class="block-a-youxiao">有效</em>
                      </dd>
                    </dl>
                  </td>
                </tr>
                <tr>
                  <td colspan="3">
                    <dl class="info">
                      <dt>微信公众号（二维码）</dt>
                      <dd class="">
                        <em class="block-a-zanwu">暂无</em>
                      </dd>
                    </dl>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="bottom">
              <a href="#" class="col-default f12 in-block">设置<i class="ico-blue-arrow"></i>
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
