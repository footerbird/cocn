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
    <div class="mb15 manage-panel">
      <div class="sub-nav-panel">
        <span class="title">意向内容</span>
      </div>
      <div class="order-table">
        <table width='100%' class="">
          <tbody>
            <tr>
              <td width="30%">
                <dl class="info">
                  <dt>
                    项目编号:
                  </dt>
                  <dd>
                    438384
                  </dd>
                </dl>
              </td>
              <td>
                <dl class="info">
                  <dt>
                    标的公司:
                  </dt>
                  <dd>
                    <a href="/page/user-cocn-settings" class="col-default">杭州名商网络有限公司</a>
                  </dd>
                </dl>
              </td>
            </tr>
            <tr>
              <td>
                <dl class="info">
                  <dt>
                    投资方式:
                  </dt>
                  <dd>
                    股权转让
                  </dd>
                </dl>
              </td>
              <td>
                <dl class="info">
                  <dt>
                    交易类型:
                  </dt>
                  <dd>
                    投资人出价
                  </dd>
                </dl>
              </td>
            </tr>
            <tr>
              <td>
                <dl class="info">
                  <dt>
                    意向股权:
                  </dt>
                  <dd>
                    1%
                  </dd>
                </dl>
              </td>
              <td>
                <dl class="info">
                  <dt>
                    意向出价:
                  </dt>
                  <dd>
                    120,000元/人民币
                  </dd>
                </dl>
              </td>
            </tr>
            <tr>
              <td>
                <dl class="info">
                  <dt>
                    意向用户:
                  </dt>
                  <dd>
                    ID:oikuhuo / 我
                  </dd>
                </dl>
              </td>
              <td>
                <dl class="info">
                  <dt>
                    意向时间:
                  </dt>
                  <dd>
                    2019-09-09
                  </dd>
                </dl>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="manage-panel">
      <div class="sub-nav-panel mb50">
        <span class="title">意向状态</span>
      </div>
      <div class="ta-c pb30 pt20">
        <a href="javascript:;" class="w140 pub-btn mr10">同意</a>
        <a href="javascript:;" class="w140 pub-btn pub-btn-d2434a">拒绝</a>
      </div>
      <div class="pt15">
        <p class="ta-c f20 col-4eb470 mb20 lh22">
          <i class="alert-ico-succ mr4"></i>
          已同意
        </p>
        <p class="col-gray9 ta-c mb35">
          2019-09-09 16:00:00
        </p>
      </div>
      <div class="pt15">
        <p class="ta-c f20 col-f4364c mb20 lh22">
          <i class="alert-ico-fail mr4"></i>
          已拒绝
        </p>
        <p class="col-gray9 ta-c mb35">
          2019-09-09 16:00:00
        </p>
      </div>
      <div class="pt15">
        <p class="ta-c f20 col-f2743d mb20 lh22">
          <i class="alert-ico-wait mr4"></i>
          待处理
        </p>
        <p class="col-gray9 ta-c mb35">
          2019-09-09 16:00:00
        </p>
      </div>
      
      <div class="trading-rank pl40 pr40 pb50">
        <div class="f16 col-default pb20 ml30">
          投资人出价记录
        </div>
        <table width="100%" class="inner-table ml30">
          <thead>
            <tr>
              <th width="25%">
                时间
              </th>
              <th align="left" width="25%">
                操作
              </th>
              <th align="left" width="25%">
                买入比例
              </th>
              <th align="left" width="25%">
                我的意向出价
              </th>
            </tr>
          </thead>
          <tbody>
            <tr align="center">
              <td>2019-09-08 19:18:11</td>
              <td align="left" >对方已同意</td>
              <td align="left" >1.2%</td>
              <td align="left" class="">&yen;129,000</td>
            </tr>
            <tr align="center">
              <td>2019-09-08 19:18:11</td>
              <td align="left" >发起询价</td>
              <td align="left" >1.2%</td>
              <td  align="left" class="">&yen;129,000</td>
            </tr>
            <tr align="center">
              <td>2019-09-08 19:18:11</td>
              <td align="left" >对方未应答，交易取消</td>
              <td align="left" >1.2%</td>
              <td  align="left" class="">&yen;129,000</td>
            </tr>
            <tr align="center">
              <td>2019-09-08 19:18:11</td>
              <td align="left" >询价失效</td>
              <td align="left" >1.2%</td>
              <td  align="left" class="">&yen;129,000</td>
            </tr>
          </tbody>
        </table>
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
