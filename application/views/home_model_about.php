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
      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAAAvCAYAAAAcls+BAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQyIDc5LjE2MDkyNCwgMjAxNy8wNy8xMy0wMTowNjozOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTggKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ0MTUxNUJGNDE1MDExRTk5RTBBQzJEQjJENzBCRjIzIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ0MTUxNUMwNDE1MDExRTk5RTBBQzJEQjJENzBCRjIzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDQxNTE1QkQ0MTUwMTFFOTlFMEFDMkRCMkQ3MEJGMjMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDQxNTE1QkU0MTUwMTFFOTlFMEFDMkRCMkQ3MEJGMjMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4+RaO3AAAFVElEQVR42uxca2hURxSejUnFtEaN0T4WbFQq9UdVGjFICY3FH2ksra36o1TRSogRQYwgRkRQK6LQNv1TGm0tKig2GtpiXRCjUSpiRPGJtoVEbY2GWJMYjRrjJv2OexIu2zt373v33twDH3PvzJm5M+fMnDnz2A0JG2hkYdlCBOXAW8BToA5Yf+941RnhEqEOaQiyhHfoAeQTDdnQ8EoEK1SSuoFP8JHfXBB+EYI9QLaHFNAJLA1ZbPgMBMc0WO4BY6GEBw4r4BqCN4X3qD3dYgELEskGoN653+GGvCqJvws8SgFBvyCp43CrChirgyc3iQ0vxej7JdnSxwidguC8WlqaxbKbdfC0iICkZFUBNQnSHwORQMzOKuCgRvoqmIC7gZjllA77RBPlUiDHZBk3gbPAJJ5siDqAU8AbKP8bB+r9D/AdlGv7BIv6DkEwGWhD+X/Gpb1LJhXx12xTAPAzUGBzO7LY+ylysPNMBT61UfBDEXwBlAAvAhtoMRnHtgt4HbwNCFdDETV2KKDAo6N3pl7GpvziiQh2AJn0Hq6PTFER/u/c8/XQeOAA8q2FEjbHlfUhgo38eh7pnydSgIxWAtdTQND5QIVKfIbBMqZrpH9lQPhK2gSBH4WQ6xVx2YqyKDStgDoUfCEFfGinyw8jWGwyO+0krAM+SJYX5Af6CBhkIX8RlPhSoADzlGcx/yD2AE1PwnqHapZLCuuB6etw08rZUEaOYwqA4DPZp5/smkQKy2hSK4Aiuv2+oNWT8W03ha/wWry4veyICdLiodOvP4Bek9+nVecEDdsaKCABLYOZ+MGCqZFu0zpJWJj1u9dNXXdyO1UMwQgRLRuVXzwbj+WThoyhxRUdPsnOHSrRlvWKdYBrCvjXox2v36SGe6TTzMuMYSJ27qFlhnOtzAFPPCrE+wZ421O1julsAqZ7UAFXDfD+KmI3Nv434ksGv1L5MBQqjI9/rTe67euulioR2465KGIbcxGJGaJtmzqV+BY9CtjpUQXs0csYro+Qk3BFMg+p9tKroYxm5Lug7MngfSr5xHWz2zZkgmiXsNZjwj8B7PWDF5RGl4N4P6TGI3U+CcxBvXt844byydJcvudDO4PvAFEd+UcjT66F78/S6WE9Yzv8I/C9h1bIxtxQNKxOMpnIaJtD9TqNutzi50N4zhA+pVTcDaUz5vmKTtEtfExWF2I3DPrjWnQbOMompkMMELKqgPJUuHkGcmJCjrrxnXSfdKRWQds35uggj2QRN+nvVuFdJdQvMTQkSwHL4QXNdli4tBL9EiOtU4PnkojdVDBMKHeHAd4au911qwqY4VIPfyhiNxdkRL3148ALco6GJkinvZ4DA3ES/gmosrE+c4FlJsxIL0zhZyK2szt/IClgHxp/3K7K8AGNKUI9aKNsAcqgA6ISNo89fldAyhEUQRt1J4I5IKBAAYECAkq42g4UkFxqSLVJeJgk/plWpqb84i382Aas5lUxbU9s5zi98dnh+kgbl3lExH6D0AgsAY7wN7aDZ4ni20o+KrcUGMfvU/vKk9B+qwpYA7dvkY0e2XuStER3h86xIBv5vZSfa43EK4Q/j4X6XCF4p59gbeXvVON9K+IbVfiozBGsUNofyhPy496/aYvFqgKmuTAqLgOHE/BQI6u58SSoLRwajddLbSbT+ogOm2bBZW7XMwf8BXQlySTR+e/7qKimCeKeW8s9tO9X+bVG49GDZwINnEZo5fcKHjHVbGZolLQqRlMfn1CYNjVlUJ5vaWSgTc9vaej6rwiYmYnc20MuCZ7+Y+ISKnnTDzMt//KSriw28yWIfvpPgAEAZgi0Zb5IOGoAAAAASUVORK5CYII=" alt="" height="50">
    </a>
    <div class="fl-r">
      <a href="javascript:;" id="headerToggle" class="header__toggle"><span></span></a>
      <ul class="main-nav clearfix">
        <li>
          <a href="/page/home_model">首页</a>
        </li>
        <li>
          <a href="/page/home_model_list">产品列表</a>
        </li>
        <li>
          <a href="/page/home_model_about" class="on">关于我们</a>
        </li>
        <li>
          <a href="/page/home_model_news">新闻中心</a>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="bgblack" id="bgblack"></div>
<div class="container after-cls bg-white">
  <div class="news-page after-cls">
    <div class="news-hd after-cls">
      <div class="fl-l w-all after-cls">
        <div class="title">关于我们</div>
      </div>
    </div>
    <div class="news-content">
      <div class="news-desc">互联网时代，企业的品牌价值进一步提升，品牌企业需要保护互联网品牌和通过互联网对品牌进行保护，并由此产生了巨大的新商机。
      </div>
      <p>名商网（杭州名商网络有限公司）提供网络品牌专业保护服务，通过品牌资质查询、品牌资质获取、品牌在线监控、品牌资产托管和网络品牌维权等，实现对网络品牌全天候、全方位的保护，为品牌企业解决域名和商标的问题。</p>
      <p>让品牌微笑是名商网的使命。名商网自2011年成立至今，已经成功帮助新浪、阿里巴巴、淘宝、携程、中国长江三峡集团、中国平安集团、沃尔沃、美国Zynga等国内外知名公司实现网络品牌保护。</p>
      <p>2016年，名商网入选杭州G20峰会——互联网“独角兽” TOP 20 企业，为杭州创新企业代言。
      公司坐落于杭州市拱墅区上塘路329号海外海皇冠大酒店商务写字楼11层，拥有一千多平的整层办公场地，现代化办公设施齐全，交通便利。</p>
      <p>
        <img src="http://iph.href.lu/830x320?text=830*320" width="100%" height="" alt="">
        <span></span>
      </p>
      <div class="hr mb20 mt20"></div>
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
