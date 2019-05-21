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
        <span class="title">我的股权</span>
      </div>
      <div class="mt15 after-cls">
        <div class="table-top-tools after-cls">
          <div class="tools-fl-l">
            <input type="text" name="" value="" placeholder="编号/公司名称">
            <a href="javascript:;" class="pub-btn f12">搜索</a>
            <label class="pos-rela ml10 f12"><input type="checkbox" name="" value=""><i class=""></i><font>隐藏0股权</font></label>
          </div>
          <div class="tools-fl-r lh36 f12">
            当前持有股权预估值：
            <font class="f16 col-f4364c mr4">999,998</font>元/人民币
          </div>
        </div>
        <table width="100%" class="inner-table">
          <thead>
            <tr>
              <th width="6%" align="center">序号</th>
              <th width="19%" align="left">名称</th>
              <th width="9%" align="left">编号</th>
              <th width="9%" align="center">持有总量</th>
              <th width="9%" align="center">可用份额</th>
              <th width="9%" align="center">异常冻结</th>
              <th width="9%" align="center">在途份额</th>
              <th width="9%" align="center">质押份额</th>
              <th width="21%" align="right">
                <a href="/page/user-stock-history" class="col-3daaef underline">资产流通记录</a>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td align="center">1</td>
              <td align="">
                <a href="/page/user-stock-change-list" class="col-default">杭州名商网络有限公司</a>
              </td>
              <td align="left">8948938</td>
              <td align="center">0.5%</td>
              <td align="center">0.1%</td>
              <td align="center">0.05%</td>
              <td align="center">0.05%</td>
              <td align="center">0.1%</td>
              <td align="right">
                <a href="/page/user-stock-publish" class="col-default ml10">发布交易</a>
                <a href="/page/user-stock-disclosure-tip" class="col-default ml10">信息披露</a>
                <a href="/page/user-stock-manage" class="col-default ml10">管理</a>
                <a href="/page/user-stock-lock" class="col-default ml10">锁仓</a>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="cocn-kaitong">
          <p class="ta-c f18 col-default pt30 pb30">
            您尚未持有任何公司
          </p>
          <img src="/htdocs/images/inner-no-chiyou.png" alt="" class="m-auto">
          <p class="ta-c col-gray6 lh28 pt30 pb50">
            您可以“<a href="/page/certify-web" class="col-default">公司官网认证</a>”出售持有公司股权，或投资其他公司股权，
            <br />进入“<a href="/page/user-dealing" class="col-default">股权交易中心</a>”获取更多股权交易信息
          </p>
          <div class="ta-c pb30 pt20">
            <a href="/page/user-stock-" class="w170 pub-btn mr10">
              出售自有公司股权
            </a>
            <a href="/page/" class="w170 pub-btn-b">
              进入股权交易中心
            </a>
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
})
</script>
</body>
</html>
