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
        <span class="title">消息中心
        </span>
      </div>
      <div class="mt15 after-cls">
        <div class="table-top-tools after-cls">
          <div class="tools-fl-l">
            <input type="text" name="" value="" placeholder="消息内容">
            <a href="javascript:;" class="pub-btn f12">搜索</a>
          </div>
          <div class="tools-fl-r">
            <div class="filter mr5">
              <a href="javascript:;" class="mr20">
                全部
                <em class="col-d2434a">(999)</em>
              </a>
              <a href="javascript:;" class="mr20">
                系统消息
                <em class="col-d2434a">(99)</em>
              </a>
              <a href="javascript:;" class="mr20">
                股权交易
                <em class="col-d2434a">(9)</em>
              </a>
              <a href="javascript:;" class="mr20">
                官网
                <em class="col-d2434a">(9)</em>
              </a>
              <a href="javascript:;" class="mr20">
                用户评论
                <em class="col-d2434a">(9)</em>
              </a>
              <a href="javascript:;" class="mr20">
                垃圾箱
                <em class="col-d2434a">(9)</em>
              </a>
            </div>
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
              <th width="" align="left">消息摘要</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td align="center">
                <label class="pos-rela" for="action1"><input type="checkbox" name="all" value="" id="action1"><i class=""></i><font></font></label>
              </td>
              <td align="">
                <p>
                  <a href="javascript:;" class="f14 col-default user-message-title"><i class="ico-blue-circle mr5"></i>2019年官网五一劳动节放假公告</a>
                </p>
                <p class="f12 col-gray9 user-message-content" style="display: none;">
                  您好！根据国家法定节假日并结合实际情况，官网2019年五一劳动节假期安排如下：2019年5月1日至5月4日放假，假期共4天。假日期间，官网将暂停相关服务工作，感谢您一直以来对官网的关注和支持！
                </p>
                <p class="f12 col-gray6">
                  2019-01-09 10:00:00
                </p>
              </td>
            </tr>
            <tr>
              <td align="center">
                <label class="pos-rela" for="action2"><input type="checkbox" name="all" value="" id="action2"><i class=""></i><font></font></label>
              </td>
              <td align="">
                <p>
                  <a href="javascript:;" class="f14 col-default user-message-title">杭州名商网络有限公司股权转让交易成功（订单号：12345678）</a>
                </p>
                <p class="f12 col-gray9 user-message-content" style="display: none;">
                  杭州名商网络有限公司股权转让交易成功（订单号：12345678），<a href="/page/user-dealing-succ-transfer" target="_blank" class="col-default">点击查看</a>
                </p>
                <p class="f12 col-gray6">
                  2019-01-09 10:00:00
                </p>
              </td>
            </tr>
            <tr>
              <td align="center">
                <label class="pos-rela" for="actionAll"><input type="checkbox" name="all" value="" id="actionAll"><i class="actionAll"></i><font></font></label>
              </td>
              <td align="">
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
$(function() {
  //全选
  $(".actionAll").on('click',function() {
        $("input[name='all']").prop("checked", this.checked);
  });

  $("input[name='all']").on('click',function() {
        var $alls = $("input[name='all']");
        $("#all").prop("checked" , $alls.length == $alls.filter(":checked").length ? true :false);
  });
  
  $(".user-message-title").on("click",function(){
      $(this).find(".ico-blue-circle").remove();
      var $content = $(this).parents("td").find(".user-message-content");
      if($content.length == 1){
          $content.toggle();
      }
  })
});

</script>
</body>
</html>
