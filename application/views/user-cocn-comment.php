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
          <a href="/page/user-cocn-product" class="">产品中心<i class="badge">
              <font>99</font>
            </i>
          </a>
          <a href="/page/user-cocn-comment" class="on">用户评论
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
            <input type="text" name="" value="" placeholder="评论内容">
            <a href="javascript:;" class="pub-btn f12">搜索</a>
            <label class="pos-rela ml10 f12"><input type="checkbox" name="" value=""><i class=""></i><font>仅显示已处理的评论</font></label>
          </div>
          <div class="tools-fl-r">
            <div class="filter mr5">
              <a href="javascript:;" class="mr20">
                全部评论
                <em class="col-d2434a">(999)</em>
              </a>
              <a href="javascript:;" class="">
                已处理
                <em class="col-d2434a">(99)</em>
              </a>
            </div>
          </div>
        </div>
        <table width="100%" class="inner-table">
          <thead>
            <tr>
              <th width="60%" align="left">评论内容</th>
              <th width="25%" align="left">来源</th>
              <th width="15%" align="left">状态/时间</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td align="">
                <p class="f12 col-default">
                  非法拘禁分
                </p>
                <p class="f12 col-gray6">
                  2019-08-30
                </p>
              </td>
              <td align="left">
                  <a href="/page/news-page" target="_blank">杭州官网科技有限公司开通股权交易服务</a>
              </td>
              <td align="left">
                <p class="f12">
                  已处理
                </p>
                <p class="f12 col-gray9">
                  2019-10-01
                </p>
              </td>
            </tr>
            <tr>
              <td align="">
                <p class="f12 col-default">
                  不不不不不不
                </p>
                <p class="f12 col-gray6">
                  2019-08-30
                </p>
              </td>
              <td align="left">
                  <a href="/page/news-page" target="_blank">杭州官网科技有限公司开通股权交易服务</a>
              </td>
              <td align="left">
                <a href="javascript:;" data-commit="2" onclick="denyRumour(this)" class="col-default">申请辟谣</a>
              </td>
            </tr>
            <tr>
              <td align="">
                <p class="f12 col-default">
                  购买XXX商品（姓名——许多，电话——18767120072，邮箱——kuanker97@163.com）
                </p>
                <p class="f12 col-gray6">
                  2019-08-30
                </p>
              </td>
              <td align="left">
                  留言
              </td>
              <td align="left">
                
              </td>
            </tr>
            <tr>
              <td align="" colspan="3">
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

<!--申请辟谣弹框-->
<div id="upwin_denyRumour" class="upwin" style="display: none;">
    <div class="upwin-title">辟谣理由<a href="javascript:;" class="upwin-title-close" onclick="Pop.exit();"></a></div>
    <div class="upwin-content">
        <div class="upwin-form" style="margin-top: -20px; position: relative;">
            <div class="form-tip" id="upwin_denyRumour_error">辟谣理由不能为空</div>
            <ul>
                <li>
                    <div class="form-input-box">
                        <select id="denyRumour_type" name="denyRumour_desc" class="form-select">
                            <option>不实信息</option>
                            <option>其他</option>
                        </select>
                    </div>
                </li>
                <li id="code_num_box">
                    <div class="form-input-box">
                        <textarea id="denyRumour_desc" name="denyRumour_desc" class="form-textarea" placeholder="请填写具体理由"></textarea>
                    </div>
                </li>
            </ul>
            <a href="javascript:;" id="denyRumour_btn" class="upwin-btn mb20">提交</a>
        </div>
    </div>
</div>

<!-- footer -->
<?php include_once('templete/pub_foot_inside.php') ?>
<script src="/htdocs/js/slick/slick.min.js?<?php echo CACHE_TIME; ?>"></script>
<link rel="stylesheet" href="/htdocs/js/slick/slick.css?<?php echo CACHE_TIME; ?>">
<script type="text/javascript">
function denyRumour(obj){
    Pop.open('upwin_denyRumour');
}
$(function(){

})
</script>
</body>
</html>
