<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_model.php') ?>
</head>
<body>
<!-- 开始 -->
<div class="pub-head" id="pub_head">
  <div class="container">
    <a href="/page/home_model" class="main-logo fl-l">
      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAAAvCAYAAAAcls+BAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQyIDc5LjE2MDkyNCwgMjAxNy8wNy8xMy0wMTowNjozOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTggKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ0MTUxNUJGNDE1MDExRTk5RTBBQzJEQjJENzBCRjIzIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ0MTUxNUMwNDE1MDExRTk5RTBBQzJEQjJENzBCRjIzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDQxNTE1QkQ0MTUwMTFFOTlFMEFDMkRCMkQ3MEJGMjMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDQxNTE1QkU0MTUwMTFFOTlFMEFDMkRCMkQ3MEJGMjMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4+RaO3AAAFVElEQVR42uxca2hURxSejUnFtEaN0T4WbFQq9UdVGjFICY3FH2ksra36o1TRSogRQYwgRkRQK6LQNv1TGm0tKig2GtpiXRCjUSpiRPGJtoVEbY2GWJMYjRrjJv2OexIu2zt373v33twDH3PvzJm5M+fMnDnz2A0JG2hkYdlCBOXAW8BToA5Yf+941RnhEqEOaQiyhHfoAeQTDdnQ8EoEK1SSuoFP8JHfXBB+EYI9QLaHFNAJLA1ZbPgMBMc0WO4BY6GEBw4r4BqCN4X3qD3dYgELEskGoN653+GGvCqJvws8SgFBvyCp43CrChirgyc3iQ0vxej7JdnSxwidguC8WlqaxbKbdfC0iICkZFUBNQnSHwORQMzOKuCgRvoqmIC7gZjllA77RBPlUiDHZBk3gbPAJJ5siDqAU8AbKP8bB+r9D/AdlGv7BIv6DkEwGWhD+X/Gpb1LJhXx12xTAPAzUGBzO7LY+ylysPNMBT61UfBDEXwBlAAvAhtoMRnHtgt4HbwNCFdDETV2KKDAo6N3pl7GpvziiQh2AJn0Hq6PTFER/u/c8/XQeOAA8q2FEjbHlfUhgo38eh7pnydSgIxWAtdTQND5QIVKfIbBMqZrpH9lQPhK2gSBH4WQ6xVx2YqyKDStgDoUfCEFfGinyw8jWGwyO+0krAM+SJYX5Af6CBhkIX8RlPhSoADzlGcx/yD2AE1PwnqHapZLCuuB6etw08rZUEaOYwqA4DPZp5/smkQKy2hSK4Aiuv2+oNWT8W03ha/wWry4veyICdLiodOvP4Bek9+nVecEDdsaKCABLYOZ+MGCqZFu0zpJWJj1u9dNXXdyO1UMwQgRLRuVXzwbj+WThoyhxRUdPsnOHSrRlvWKdYBrCvjXox2v36SGe6TTzMuMYSJ27qFlhnOtzAFPPCrE+wZ421O1julsAqZ7UAFXDfD+KmI3Nv434ksGv1L5MBQqjI9/rTe67euulioR2465KGIbcxGJGaJtmzqV+BY9CtjpUQXs0csYro+Qk3BFMg+p9tKroYxm5Lug7MngfSr5xHWz2zZkgmiXsNZjwj8B7PWDF5RGl4N4P6TGI3U+CcxBvXt844byydJcvudDO4PvAFEd+UcjT66F78/S6WE9Yzv8I/C9h1bIxtxQNKxOMpnIaJtD9TqNutzi50N4zhA+pVTcDaUz5vmKTtEtfExWF2I3DPrjWnQbOMompkMMELKqgPJUuHkGcmJCjrrxnXSfdKRWQds35uggj2QRN+nvVuFdJdQvMTQkSwHL4QXNdli4tBL9EiOtU4PnkojdVDBMKHeHAd4au911qwqY4VIPfyhiNxdkRL3148ALco6GJkinvZ4DA3ES/gmosrE+c4FlJsxIL0zhZyK2szt/IClgHxp/3K7K8AGNKUI9aKNsAcqgA6ISNo89fldAyhEUQRt1J4I5IKBAAYECAkq42g4UkFxqSLVJeJgk/plWpqb84i382Aas5lUxbU9s5zi98dnh+kgbl3lExH6D0AgsAY7wN7aDZ4ni20o+KrcUGMfvU/vKk9B+qwpYA7dvkY0e2XuStER3h86xIBv5vZSfa43EK4Q/j4X6XCF4p59gbeXvVON9K+IbVfiozBGsUNofyhPy496/aYvFqgKmuTAqLgOHE/BQI6u58SSoLRwajddLbSbT+ogOm2bBZW7XMwf8BXQlySTR+e/7qKimCeKeW8s9tO9X+bVG49GDZwINnEZo5fcKHjHVbGZolLQqRlMfn1CYNjVlUJ5vaWSgTc9vaej6rwiYmYnc20MuCZ7+Y+ISKnnTDzMt//KSriw28yWIfvpPgAEAZgi0Zb5IOGoAAAAASUVORK5CYII=" alt="">
    </a>
    <div class="fl-r">
      <a href="javascript:;" id="headerToggle" class="header__toggle"><span></span></a>
      <ul class="main-nav clearfix">
        <li>
          <a href="/page/home_model">首页</a>
        </li>
        <li>
          <a href="/page/home_model_list" class="on">产品列表</a>
        </li>
        <li>
          <a href="/page/home_model_about">关于我们</a>
        </li>
        <li>
          <a href="/page/home_model_news">新闻中心</a>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="bgblack" id="bgblack"></div>
<div class="container after-cls">
  <div class="breadcrumbs">
    <a href="/page/home_model">首页</a><em></em><a href="/page/home_model_list">产品列表</a>
  </div>
  <div class="product-list-left">
    <div class="hb">侧导航</div>
    <div class="bd">
      <ul class="nav">
        <li>
          <a href="#">化工原料</a>
        </li>
        <li>
          <a href="#">化工原料</a>
        </li>
        <li>
          <a href="#">化工原料</a>
        </li>
        <li>
          <a href="#">化工原料化工原料化工原料化工原料化工原料化工原料</a>
        </li>
        <li>
          <a href="#">化工原料</a>
        </li>
        <li>
          <a href="#">化工原料</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="product-list-right product">
    <div class="hb"><span><i class="ico-list mr5"></i>所有产品</span></div>
    <div class="bd">
      <ul class="list after-cls">
        <li>
          <img src="http://iph.href.lu/225x225?text=225*225" width="" height="" alt="">
          <p class="">
            <a href="/page/home_model_list_page" class="f14">产品名称产品名称产品名称产品名称产品名称产品名称</a>
          </p>
          <!-- <p class="">
            <em class="f12 col-gray6">零售价</em>
            <em class="f18 col-f4364c">Cny&nbsp;&yen;23.98</em>
          </p> -->
        </li>
        <li>
          <img src="http://iph.href.lu/225x225?text=225*225" width="" height="" alt="">
          <p class="">
            <a href="/page/home_model_list_page" class="f14">产品名称产品名称产品名称产品名称产品名称产品名称</a>
          </p>
          <!-- <p class="">
            <em class="f12 col-gray6">零售价</em>
            <em class="f18 col-f4364c">Cny&nbsp;&yen;23.98</em>
          </p> -->
        </li>
        <li>
          <img src="http://iph.href.lu/225x225?text=225*225" width="" height="" alt="">
          <p class="">
            <a href="/page/home_model_list_page" class="f14">产品名称产品名称产品名称产品名称产品名称产品名称</a>
          </p>
          <!-- <p class="">
            <em class="f12 col-gray6">零售价</em>
            <em class="f18 col-f4364c">Cny&nbsp;&yen;23.98</em>
          </p> -->
        </li>
        <li>
          <img src="http://iph.href.lu/225x225?text=225*225" width="" height="" alt="">
          <p class="">
            <a href="/page/home_model_list_page" class="f14">产品名称产品名称产品名称产品名称产品名称产品名称</a>
          </p>
          <!-- <p class="">
            <em class="f12 col-gray6">零售价</em>
            <em class="f18 col-f4364c">Cny&nbsp;&yen;23.98</em>
          </p> -->
        </li>
        <li>
          <img src="http://iph.href.lu/225x225?text=225*225" width="" height="" alt="">
          <p class="">
            <a href="/page/home_model_list_page" class="f14">产品名称产品名称产品名称产品名称产品名称产品名称</a>
          </p>
          <!-- <p class="">
            <em class="f12 col-gray6">零售价</em>
            <em class="f18 col-f4364c">Cny&nbsp;&yen;23.98</em>
          </p> -->
        </li>
        <li>
          <img src="http://iph.href.lu/225x225?text=225*225" width="" height="" alt="">
          <p class="">
            <a href="/page/home_model_list_page" class="f14">产品名称产品名称产品名称产品名称产品名称产品名称</a>
          </p>
          <!-- <p class="">
            <em class="f12 col-gray6">零售价</em>
            <em class="f18 col-f4364c">Cny&nbsp;&yen;23.98</em>
          </p> -->
        </li>
        <li>
          <img src="http://iph.href.lu/225x225?text=225*225" width="" height="" alt="">
          <p class="">
            <a href="/page/home_model_list_page" class="f14">产品名称产品名称产品名称产品名称产品名称产品名称</a>
          </p>
          <!-- <p class="">
            <em class="f12 col-gray6">零售价</em>
            <em class="f18 col-f4364c">Cny&nbsp;&yen;23.98</em>
          </p> -->
        </li>
        <li>
          <img src="http://iph.href.lu/225x225?text=225*225" width="" height="" alt="">
          <p class="">
            <a href="/page/home_model_list_page" class="f14">产品名称产品名称产品名称产品名称产品名称产品名称</a>
          </p>
          <!-- <p class="">
            <em class="f12 col-gray6">零售价</em>
            <em class="f18 col-f4364c">Cny&nbsp;&yen;23.98</em>
          </p> -->
        </li>
      </ul>
      <div class="pages lh23 fl-r mr0 mt5 mb30"><em class="fl-l">共有0条，每页显示：20条</em>
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
          <a href="" class="go mr0">GO</a>
      </div>
    </div>
  </div>
</div>
<?php include_once('templete/pub_foot_model.php') ?>
<script type="text/javascript">
$(function(){
  $("#headerToggle").on('click',function () {
    $("#pub_head").toggleClass('pub-head-on');
    $("body").toggleClass('on');
  });
  $("#bgblack").on('click',function () {
    $("#pub_head").removeClass('pub-head-on');
    $("body").removeClass('on');

  })
})
</script>
</body>
</html>
