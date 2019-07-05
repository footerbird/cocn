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
          <a href="javascript:;" class="fl-r f14 mr0">
            <i class="ico-blue-arrow-back"></i>
            返回公司官网
          </a>
        </span>
        <p class="mt5">
          <a href="/page/user-cocn-settings" class="on">通用设置</a>
          <a href="/page/user-cocn-news" class="">新闻中心</a>
          <a href="/page/user-cocn-product" class="">产品中心<i class="badge">
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
                      <label class="upload-label" for="">
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
            <a href="/page/user-cocn-settings" class="pub-btn w150">完成</a>
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
