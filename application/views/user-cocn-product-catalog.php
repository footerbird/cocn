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
      <div class="mt15 after-cls">
        <div class="col-default mb15">
          修改目录
        </div>
        <div class="table-top-tools after-cls">
          <div class="tools-fl-l" id="catalog_editor_entry">
            <input type="text" name="" value="" placeholder="类目名称">
            <a href="javascript:;" id="btn_addtr" class="pub-btn f12">键入</a>
          </div>
        </div>
        <table id="tabClone" style="display: none">
          <tbody>
            <tr>
              <td width="7%" align="center">
                <div class="number"></div>
              </td>
              <td width="80%">
                <div class="catalog-editor">
                  <input type="text" name="entered" value="" readonly>
                </div>
              </td>
              <td width="13%">
                <a href="javascript:;" class="f12 col-default a-editor">编辑</a>
              </td>
            </tr>
          </tbody>
        </table>
        <table width="100%" class="inner-table" id="catalog_editor_table">
          <thead>
            <tr>
              <th width="7%" align="center">序号</th>
              <th width="80%" align="left">类目名称</th>
              <th width="13%" align="left">操作</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td align="center">
                <div class="number">1</div>
              </td>
              <td align="">
                <div class="catalog-editor">
                  <input type="text" name="" value="杭州名商网络有限公司" readonly>
                </div>
              </td>
              <td>
                <a href="javascript:;" class="f12 col-default a-editor">编辑</a>
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
  //输入
  $("#catalog_editor_entry").find('input').on('change',function (){
    var shuru = $(this).val();//获值
    if(shuru.length>0){
      $("#tabClone").find(".catalog-editor input").val(shuru);//赋值
      var show_count = 20;//限制20条
      var count = 1;//递增的开始值，序号
      $("#btn_addtr").click(function () {
        var length = $("#catalog_editor_table tbody tr").length;
        if (length < show_count)//点击时候，如果当前的数字小于递增结束的条件
        {
          $("#tabClone tbody tr").clone().prependTo("#catalog_editor_table tbody");//在表格后面添加一行
          changeIndex();//更新序号
        }
      });
    }
  })

  function changeIndex(){
  	var i = 1;
  	$("#catalog_editor_table tbody tr").each(function () { //循环tab tbody下的tr
  		$(this).find(".number").text(i++);//更新序号
  	});
  }
    $(document).on("click","#catalog_editor_table tr a",function (){//生成用$(document).on()
      //获取点击的一行tr
      var tr = $(this).parent().parent();
      //获取tr的所有td元素
      var b = tr.children("td");
      //取得第二列元素
      var c = b.eq(1);
      c.find('input').removeAttr("readonly").addClass('on');
    });

  $(".catalog-editor").find("input").on("blur",function(){
    $(this).removeClass('on').attr("readonly",true);
  })
});

</script>
</body>
</html>
