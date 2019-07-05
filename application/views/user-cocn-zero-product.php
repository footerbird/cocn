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
      <div class="cocn-step-panel after-cls">
          <a href="/page/user-cocn-zero-web" class="base had">
            <em>1</em>
            实名网址</a>
          <a href="/page/user-cocn-zero-connect" class="base had">
            <em>2</em>
            联系方式</a>
          <a href="/page/user-cocn-zero-introduce" class="base had">
            <em>3</em>
            公司介绍</a>
          <a href="/page/user-cocn-zero-logo" class="base had">
            <em>4</em>
            标志设置</a>
          <a href="/page/user-cocn-zero-news" class="base had">
            <em>5</em>
            新闻中心</a>
          <a href="/page/user-cocn-zero-product" class="base on">
            <em>6</em>
            产品中心</a>
          <a href="/page/user-cocn-zero-limit" class="base">
            <em>7</em>
            权限设置</a>
      </div>
      <div class="mt25 after-cls">
        <div class="col-default mb10">
          发布新品
        </div>
        <div class="w-all full-input">
          <input type="text" name="" value="" placeholder="在此输入产品名称">
        </div>
        <!-- 加载编辑器的容器 -->
        <div id="editor" class="editor mt20 mb20 bg-white">
        </div>
        <div class="lh30 after-cls">
          <select class="normal-select lh30 h30 w180 fl-l" name="">
            <option value="">默认分类</option>
            <option value="">产品分类名</option>
            <option value="">产品分类名</option>
          </select>
          <em class="col-default f12 in-block ml20 mr10 fl-l">修改目录</em>
          <div class="f12 col-gray9 in-block fl-l">
            （选择将产品发布到指定的分类目录下，不选择则默认分类）
          </div>
        </div>
        <div class="hr mt20 mb30"></div>
        <div class="lh36 after-cls mb30">
          <a href="/page/user-cocn-product" class="pub-btn w120 mr13 fl-l">
            发布产品
          </a>
          <a href="/page/user-cocn-product" class="pub-btn-b pub-btn-b-a w120 mr30 fl-l">
            等待上架
          </a>
        </div>
        <div class="fl-l w-all mt30 mb10">
          <p class="ta-c mt15 mb20">
            <a href="/page/user-cocn-zero-limit" class="pub-btn w190 mr18">下一步，进行权限设置</a>
            <a href="/page/user-cocn-zero-news" class="col-3daaef">返回，修改公司新闻</a>
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
<!-- editor start， 只需要引用 JS，无需引用任何 CSS ！！！-->
<script type="text/javascript" src="/htdocs/js/wangEditor.min.js"></script>

<script type="text/javascript">
// editor start
var E = window.wangEditor
var editor = new E('#editor')
// 或者 var editor = new E( document.getElementById('editor') )
// 配置服务器端地址
editor.customConfig.uploadImgServer = '/upload'
editor.customConfig.zIndex = 10
editor.create()
$(function(){

})
</script>
</body>
</html>
