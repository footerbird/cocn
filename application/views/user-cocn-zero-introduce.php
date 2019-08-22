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
          <a href="/page/user-cocn-zero-introduce" class="base on">
            <em>3</em>
            公司介绍</a>
          <a href="/page/user-cocn-zero-logo" class="base">
            <em>4</em>
            标志设置</a>
          <!-- <a href="/page/user-cocn-zero-news" class="base">
            <em>5</em>
            新闻中心</a>
          <a href="/page/user-cocn-zero-product" class="base">
            <em>6</em>
            产品中心</a> -->
          <a href="/page/user-cocn-zero-limit" class="base">
            <em>5</em>
            权限设置</a>
      </div>
      <div class="mt25 after-cls">
        <div class="install-box">
          <div class="auto-table">
            <table width="100%" class="mb10">
              <tbody>
                <tr class="">
                  <td width="140" align="center" class="bg-5897cd">
                    <span class="title col-white lh16 mt25 mb25 in-block pos-rela">
                      经营范围
                    </span>
                  </td>
                  <td class="bg-fa pl20">
                    <textarea name="name" rows="" cols="" placeholder="请输入经营范围" class="textarea"></textarea>
                  </td>
                </tr>
              </tbody>
            </table>
            
            <table width="100%" class="mb10">
              <tbody>
                <tr class="">
                  <td width="140" align="center" class="bg-5897cd">
                    <span class="title col-white lh16 mt25 mb25 in-block pos-rela">
                      关于我们
                    </span>
                  </td>
                  <td class="bg-fa pl20">
                    <!-- 加载编辑器的容器 -->
                    <div id="editor" class="editor mt20 mb20 bg-white">
                    </div>
                    <div class="mt20 col-default mb10">
                      摘要
                    </div>
                    <div class="w-all">
                      <textarea name="name" rows="" cols="" placeholder="在此输入摘要" class="textarea mt0"></textarea>
                    </div>
                    <p class="mt15 mb25 f12 col-gray9">摘要是可选的手工创建的内容总结，并可在首页或者新闻中心展示</p>
                    <div class="mt20 col-default mb10">
                      缩略图
                    </div>
                    <div class="w-all after-cls mb30">
                      <label class="upload-label">
                        <input type="file" name="" value="">
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="fl-l w-all mt30 mb10">
          <p class="ta-c mt15 mb20">
            <a href="/page/user-cocn-zero-logo" class="pub-btn w190 mr18">下一步，添加公司标识</a>
            <a href="/page/user-cocn-zero-connect" class="col-3daaef">返回，修改联系方式</a>
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
