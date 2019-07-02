<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_london.php') ?>
</head>
<body>
<?php include_once('templete/pub_nav.php') ?>
<!-- 帮助中心 -->
<div class="container mb20">
  <div class="breadcrumbs"><a href="/">首页</a><em></em><a href="/">帮助中心</a><em></em><a href="/">分类标题</a><em></em><a href="/">内容标题</a></div>
  <div class="after-cls">
    <div class="help-nav">
      <div class="hb">帮助中心</div>
      <div class="bd">
          <ul>
            <li>
              <a href="#" class="cur">账户问题</a>
            </li>
            <li>
              <a href="#">官网</a>
            </li>
            <li>
              <a href="#">股权交易</a>
            </li>
            <li>
              <a href="#">投资人认证</a>
            </li>
            <li>
              <a href="#">公司认证</a>
            </li>
            <li>
              <a href="#">账户安全</a>
            </li>
            <li>
              <a href="#">资金</a>
            </li>
            <li>
              <a href="#">标准文档下载</a>
            </li>
          </ul>
      </div>
    </div>
    <div class="help-r-content">
      <div class="hb">
        <div class="search-banner">
          <div class="search-box after-cls">
            <input type="text" name="" value="" placeholder="你想问什么？">
            <a href="javascript:;" class="btn">提问</a>
          </div>
        </div>
      </div>
      <div class="bd">
        <div class="title after-cls"><em class="line"></em><span>账户问题</span></div>
        <div class="help-list-item pt30 pb30 pl30 pr30">
          <ul>
            <li>
              <a href="/page/help-pages.php">实名认证</a>
            </li>
            <li>
              <a href="/page/help-pages.php">如何读取关于账号安全的重要文件</a>
            </li>
            <li>
              <a href="/page/help-pages.php">如何查询查询我的域名服务商</a>
            </li>
            <li>
              <a href="/page/help-pages.php">修改密码</a>
            </li>
            <li>
              <a href="/page/help-pages.php">个人信息修改</a>
            </li>
          </ul>
          <div class="mt20 hr"></div>
          <div class="after-cls mt20">
            <div class="pages fl-r mr0 "><em class="fl-l lh23">共有0条，每页显示：20条</em>
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
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once('templete/pub_foot.php') ?>
<script type="text/javascript">
$(function(){
    $(".help-r-content .bd").css({
        "min-height" : ($(".help-nav").outerHeight()-$(".help-r-content .hb").outerHeight(true))+'px'
    })
})
</script>
</body>
</html>
