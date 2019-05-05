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
          <a href="/page/user-cocn-product" class="">新闻中心</a>
          <a href="/page/user-cocn-product" class="on">产品中心<i class="badge">
              <font>99+</font>
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
        <div class="mt20 col-default mb10">
          摘要
        </div>
        <div class="w-all full-textarea">
          <textarea name="name" rows="" cols="" placeholder="在此输入摘要" class="h90"></textarea>
        </div>
        <p class="mt15 mb25 f12 col-gray9">摘要是可选的手工创建的内容总结，并可在首页或者产品简介展示</p>
        <div class="mt20 col-default mb10">
          缩略图
        </div>
        <div class="w-all after-cls mb30">
          <label class="upload-label" for="">
            <input type="file" name="" value="">
          </label>
        </div>
        <div class="lh30 after-cls">
          <select class="normal-select lh30 h30 w180 fl-l" name="">
            <option value="">默认分类</option>
            <option value="">产品分类名</option>
            <option value="">产品分类名</option>
          </select>
          <a class="col-default f12 in-block ml20 mr10 fl-l" href="/page/user-cocn-product-catalog">修改目录</a>
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
editor.create()
$(function() {
  //全选
  $(".actionAll").on('click',function() {
        $("input[name='all']").prop("checked", this.checked);
  });

  $("input[name='all']").on('click',function() {
        var $alls = $("input[name='all']");
        $("#all").prop("checked" , $alls.length == $alls.filter(":checked").length ? true :false);
  });
});

</script>
</body>
</html>
