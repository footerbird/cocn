<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_london.php') ?>
</head>
<body>
<?php include_once('templete/pub_nav.php') ?>
<!-- 公司认证-->
<div class="container mt15 mb20 bg-white">
  <div class="padding20 certify-panel-only">
    <div class="certify-box after-cls">
      <h3 class="col-default f20 ta-c pt20">公司认证</h3>
       <div class="search mt50">
         <div class="pos-rela">
           <input type="text" name="" value="" placeholder="请输入公司名称或统一社会信用代码" class="pos-rela" id="certify_search_input">
           <div class="search-hot pos-abso" id="certify_search_hot" style="display:none;">
             <ul>
               <li>
                 <a href="javascript:;">杭州名商网络有限公司</a>
               </li>
               <li>
                 <a href="javascript:;">杭州名商网络有限公司2</a>
               </li>
               <li>
                 <a href="javascript:;">杭州名商网络有限公司3</a>
               </li>
             </ul>
           </div>
         </div>
        <a href="/page/certify-web-3" class="ml10 pub-btn w140 fl-r lh46 h46">审核公司信息</a>
       </div>
    </div>
  </div>
</div>

<?php include_once('templete/pub_foot.php') ?>
<script type="text/javascript">
$(function(){
  //certify-panel-only
  $(function(){
    $(".certify-panel-only").css({
        "min-height" : ($(window).height()-385)+"px"
    })
    if($(".manage-panel").length == 1){
        $(".manage-panel").css({
            "min-height" : ($(window).height()-385)+"px",
            "margin-bottom" : "0"
        })
    }
  })
  //搜索建议
  $('#certify_search_input').on('focus',function(){
    $('#certify_search_hot').show();
    $('#certify_search_hot').find('a').on('click',function () {
       var mine_hot = $(this).text();
      $('#certify_search_input').val(mine_hot);
      $('#certify_search_hot').hide();
    })
  })

})
</script>
</body>
</html>
