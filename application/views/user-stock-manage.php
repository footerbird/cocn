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
    <div class="mb15 manage-panel2">
      <div class="sub-nav-panel">
        <span class="title">名商网络<em class="ml5 in-block">80010001</em>
        </span>
      </div>
      <div class="order-table">
        <table width='100%' class="">
          <tbody>
            <tr>
              <td width="30%">
                <dl class="info">
                  <dt>
                    公司名称:
                  </dt>
                  <dd>
                    杭州名商网络有限公司
                  </dd>
                </dl>
              </td>
              <td>
                <dl class="info">
                  <dt>
                    注册资本:
                  </dt>
                  <dd>
                    1000万元人民币
                  </dd>
                </dl>
              </td>
            </tr>
            <tr>
              <td>
                <dl class="info">
                  <dt>
                    法定代表人:
                  </dt>
                  <dd>
                    XXX
                  </dd>
                </dl>
              </td>
              <td>
                <dl class="info">
                  <dt>
                    在售比例:
                  </dt>
                  <dd>
                    30%
                  </dd>
                </dl>
              </td>
            </tr>
            <tr>
              <td>
                <dl class="info">
                  <dt>
                    注册日期:
                  </dt>
                  <dd>
                    2019年3月6日
                  </dd>
                </dl>
              </td>
              <td>
                <dl class="info">
                  <dt>
                    发售日期:
                  </dt>
                  <dd>
                    2019年3月6日
                  </dd>
                </dl>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="manage-panel-spec">
      <div class="sub-nav-panel">
        <span class="title">股权持有人列表</span>
        <div class="fl-r ta-r col-5897cd">
          <a href="/page/user-stock-manage-allot" class="f14 col-5897cd mr0">
            <i class="ico-blue-add"></i>
            分配股权
          </a>
          <em class="in-block">/</em>
          <a href="/page/user-stock-manage-add" class="f14 col-5897cd mr0">
            新增股权持有人
          </a>
        </div>
      </div>
      <table width="100%" class="inner-table mt10">
        <thead>
          <tr>
            <th width="6%" align="center">序号</th>
            <th width="18%" align="left">股权持有人</th>
            <th width="8%" align="left">持有量</th>
            <th width="12%" align="left">证件类型</th>
            <th width="12%" align="left">证件号码</th>
            <th width="12%" align="left">联系方式</th>
            <th width="12%" align="left">用户状态</th>
            <th width="20%" align="right">
              &nbsp;
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td align="center">1</td>
            <td align="">
            XXX
            </td>
            <td align="left">0.5%</td>
            <td align="left">身份证</td>
            <td align="left">330103201905091234</td>
            <td align="left">132*****0365</td>
            <td align="left">正常</td>
            <td align="right">
              <a href="javascript:;" class="col-default ml10">新增股权</a>
            </td>
          </tr>
          <tr>
            <td align="center">1</td>
            <td align="">
            XXX
            </td>
            <td align="left">0.5%</td>
            <td align="left">信用代码</td>
            <td align="left">-</td>
            <td align="left">-</td>
            <td align="left">未激活</td>
            <td align="right">
              <a href="javascript:;" class="col-default ml10">取消分配</a>
              <a href="javascript:;" class="col-default ml10">重发邀请</a>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="cocn-kaitong">
          <p class="ta-c f18 col-default pt30 pb30">
            您可以根据工商登记现状合法分配股权
          </p>
          <img src="/htdocs/images/inner-nothing.png" alt="" class="m-auto">
          <p class="ta-c col-gray6 lh28 pt30 pb50">
            与工商登记信息保持一致
          </p>
          <div class="ta-c pb30 pt20">
            <a href="/page/user-stock-manage-allot" class="w140 pub-btn">
              分配股权
            </a>
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
