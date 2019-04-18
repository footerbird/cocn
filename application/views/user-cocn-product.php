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
          <a href="/page/user-cocn" class="fl-r f14 mr0">
            <i class="ico-blue-arrow-back"></i>
            返回公司官网
          </a>
        </span>
        <p class="mt5">
          <a href="/page/user-cocn-settings" class="">通用设置</a>
          <a href="/page/user-cocn-news" class="">新闻中心</a>
          <a href="/page/user-cocn-product" class="on">产品中心<i class="badge">
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
      <div class="mt20 after-cls">
        <div class="table-top-tools after-cls">
          <div class="tools-fl-l">
            <input type="text" name="" value="" placeholder="产品名称/内容">
            <a href="javascript:;" class="pub-btn f12">搜索</a>
            <label class="pos-rela ml10 f12"><input type="checkbox" name="" value=""><i class=""></i><font>仅显示已发布产品</font></label>
          </div>
          <div class="tools-fl-r">
            <div class="filter mr5">
              <a href="javascript:;" class="mr20">
                全部产品
                <em class="col-d2434a">(999)</em>
              </a>
              <a href="javascript:;" class="mr20">
                已发布
                <em class="col-d2434a">(99)</em>
              </a>
              <a href="javascript:;" class="mr20">
                待上架
                <em class="col-d2434a">(9)</em>
              </a>
            </div>
            <a href="/page/user-cocn-product-set" class="pub-btn pub-btn-5897cd">
              <i class="ico-white-add mr3"></i>
              发布新品</a>
          </div>
        </div>
        <table width="100%" class="inner-table">
          <thead>
            <tr>
              <th width="44" align="center">
                <div class="">
                  <label class="pos-rela" for="actionAll"><input type="checkbox" name="all" value="" id="actionAll" class="actionAll"><i class=""></i><font></font></label>
                </div>
              </th>
              <th width="60%" align="left">产品名称</th>
              <th width="25%" align="center">产品目录</th>
              <th width="15%" align="left">状态/时间</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td align="center">
                <label class="pos-rela" for="action1"><input type="checkbox" name="all" value="" id="action1"><i class=""></i><font></font></label>
              </td>
              <td align="">
                <p class="f12 col-default">
                  数字化电视设备
                </p>
                <p class="f12 col-gray6">
                  产品说明
                </p>
              </td>
              <td align="center" class="f12">
                套装
              </td>
              <td align="left">
                <p class="f12">
                  已发布
                </p>
                <p class="f12 col-gray9">
                  2019-10-01
                </p>
              </td>
            </tr>
            <tr class="bg-fa">
              <td align="center">
                &nbsp;
              </td>
              <td align="" colspan="3">
                <p class="f12 col-default">
                  用户名：产品订购信息等
                </p>
                <p class="f12 col-gray6">
                  2019-09-09 10:09:09
                </p>
              </td>
            </tr>
            <tr class="bg-fa">
              <td align="center">
                &nbsp;
              </td>
              <td align="" colspan="3">
                <p class="f12 col-default">
                  用户名：产品订购信息等
                </p>
                <p class="f12 col-gray6">
                  2019-09-09 10:09:09
                </p>
              </td>
            </tr>
            <tr>
              <td align="center">
                <label class="pos-rela" for="action2"><input type="checkbox" name="all" value="" id="action2"><i class=""></i><font></font></label>
              </td>
              <td align="">
                <p class="f12 col-default">
                  数字化电视设备
                </p>
                <p class="f12 col-gray6">
                  产品说明
                </p>
              </td>
              <td align="center" class="f12">
                T100系列
              </td>
              <td align="left">
                <p class="f12 col-d2434a">
                  待发布
                </p>
                <p class="f12 col-gray9">
                  2019-10-01
                </p>
              </td>
            </tr>
            <tr>
              <td align="center">
                <label class="pos-rela" for="actionAll"><input type="checkbox" name="all" value="" id="actionAll"><i class="actionAll"></i><font></font></label>
              </td>
              <td align="" colspan="3">
                <a href="javascript:;" class="pub-btn w80">
                  删除选择
                </a>
                <div class="pages fl-r mr0 mt5 mr5"><em class="fl-l">共有0条，每页显示：20条</em>
                    <a href="" class="first">首页</a>
                    <a href="" class="prev">上一页</a><b class="cur">1</b>
                    <a href="">2</a>
                    <a href="">3</a>
                    <span class="ml10 mr10 fl-l in-block">...</span>
                    <a href="">4</a>
                    <a href="">5</a>
                    <a href="">6</a>
                    <a href="" class="next">下一页</a>
                    <a href="" class="last">尾页</a><span class="ml5 mr5 fl-l in-block"><input type="text"></span>
                    <a href="" class="go">GO</a>
                </div>
              </td>
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
  //全选
  $(".actionAll").on('click',function() {
        $("input[name='all']").prop("checked", this.checked);
  });

  $("input[name='all']").on('click',function() {
        var $alls = $("input[name='all']");
        $("#all").prop("checked" , $alls.length == $alls.filter(":checked").length ? true :false);
  });
})
</script>
</body>
</html>
