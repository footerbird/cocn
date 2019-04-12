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
          <a href="/page/user-cocn-business" class="on">工商信息</a>
          <a href="/page/user-cocn-limit" class="">权限设置</a>
        </p>
      </div>
      <div class="mt25 after-cls">
        <div class="personal-box">
          <div class="hd dsf">
            <span class="title">公司名称</span>
          </div>
          <div class="bd">
            <table width="" class="fl-l mt30">
              <tbody>
                <tr>
                  <td>
                    <div class="ml25 col-default f16 lh30">
                      <font class="ta-r mr5 in-block pl5">杭州名商网络有限公司</font>
                      <em class="block-a-zaiye">在业</em>
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
            <span class="title">基础信息</span>
          </div>
          <div class="bd h150">
            <table width="" class="fl-l mt20">
              <tbody>
                <tr>
                  <td width="">
                    <dl class="info">
                      <dt>类型：</dt>
                      <dd class="lh22">有限责任公司（自然人投资或控股）
                      </dd>
                    </dl>
                  </td>
                  <td width="">
                    <dl class="info">
                      <dt>住所：</dt>
                      <dd class="lh22">浙江省杭州市拱墅区上塘路329号11层
                      </dd>
                    </dl>
                  </td>
                  <td width="27%">
                    <dl class="info">
                      <dt>法定代表：</dt>
                      <dd>林赞松</dd>
                    </dl>
                  </td>
                </tr>
                <tr>
                  <td>
                    <dl class="info">
                      <dt>注册资本：</dt>
                      <dd>壹佰万元整</dd>
                    </dl>
                  </td>
                  <td>
                    <dl class="info">
                      <dt>成立日期：</dt>
                      <dd>2019年1月2日</dd>
                    </dl>
                  </td>
                  <td>
                    <dl class="info">
                      <dt>营业期限：</dt>
                      <dd>2019年1月2日 至 长期</dd>
                    </dl>
                  </td>
                </tr>
                <tr>
                  <td colspan="3">
                    <dl class="info">
                      <dt>经营范围：</dt>
                      <dd class="width-auto">
                          计算机软件、通讯设备、自动化控制设备
                      </dd>
                    </dl>
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
            <span class="title">股东及出资信息</span>
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
              <a href="#" class="col-default f12 in-block">设置<i class="ico-blue-arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="personal-box">
          <div class="hd dsf">
            <span class="title">对外投资和分析</span>
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
