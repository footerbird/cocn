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
      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAAAvCAYAAAAcls+BAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQyIDc5LjE2MDkyNCwgMjAxNy8wNy8xMy0wMTowNjozOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTggKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ0MTUxNUJGNDE1MDExRTk5RTBBQzJEQjJENzBCRjIzIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ0MTUxNUMwNDE1MDExRTk5RTBBQzJEQjJENzBCRjIzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDQxNTE1QkQ0MTUwMTFFOTlFMEFDMkRCMkQ3MEJGMjMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDQxNTE1QkU0MTUwMTFFOTlFMEFDMkRCMkQ3MEJGMjMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4+RaO3AAAFVElEQVR42uxca2hURxSejUnFtEaN0T4WbFQq9UdVGjFICY3FH2ksra36o1TRSogRQYwgRkRQK6LQNv1TGm0tKig2GtpiXRCjUSpiRPGJtoVEbY2GWJMYjRrjJv2OexIu2zt373v33twDH3PvzJm5M+fMnDnz2A0JG2hkYdlCBOXAW8BToA5Yf+941RnhEqEOaQiyhHfoAeQTDdnQ8EoEK1SSuoFP8JHfXBB+EYI9QLaHFNAJLA1ZbPgMBMc0WO4BY6GEBw4r4BqCN4X3qD3dYgELEskGoN653+GGvCqJvws8SgFBvyCp43CrChirgyc3iQ0vxej7JdnSxwidguC8WlqaxbKbdfC0iICkZFUBNQnSHwORQMzOKuCgRvoqmIC7gZjllA77RBPlUiDHZBk3gbPAJJ5siDqAU8AbKP8bB+r9D/AdlGv7BIv6DkEwGWhD+X/Gpb1LJhXx12xTAPAzUGBzO7LY+ylysPNMBT61UfBDEXwBlAAvAhtoMRnHtgt4HbwNCFdDETV2KKDAo6N3pl7GpvziiQh2AJn0Hq6PTFER/u/c8/XQeOAA8q2FEjbHlfUhgo38eh7pnydSgIxWAtdTQND5QIVKfIbBMqZrpH9lQPhK2gSBH4WQ6xVx2YqyKDStgDoUfCEFfGinyw8jWGwyO+0krAM+SJYX5Af6CBhkIX8RlPhSoADzlGcx/yD2AE1PwnqHapZLCuuB6etw08rZUEaOYwqA4DPZp5/smkQKy2hSK4Aiuv2+oNWT8W03ha/wWry4veyICdLiodOvP4Bek9+nVecEDdsaKCABLYOZ+MGCqZFu0zpJWJj1u9dNXXdyO1UMwQgRLRuVXzwbj+WThoyhxRUdPsnOHSrRlvWKdYBrCvjXox2v36SGe6TTzMuMYSJ27qFlhnOtzAFPPCrE+wZ421O1julsAqZ7UAFXDfD+KmI3Nv434ksGv1L5MBQqjI9/rTe67euulioR2465KGIbcxGJGaJtmzqV+BY9CtjpUQXs0csYro+Qk3BFMg+p9tKroYxm5Lug7MngfSr5xHWz2zZkgmiXsNZjwj8B7PWDF5RGl4N4P6TGI3U+CcxBvXt844byydJcvudDO4PvAFEd+UcjT66F78/S6WE9Yzv8I/C9h1bIxtxQNKxOMpnIaJtD9TqNutzi50N4zhA+pVTcDaUz5vmKTtEtfExWF2I3DPrjWnQbOMompkMMELKqgPJUuHkGcmJCjrrxnXSfdKRWQds35uggj2QRN+nvVuFdJdQvMTQkSwHL4QXNdli4tBL9EiOtU4PnkojdVDBMKHeHAd4au911qwqY4VIPfyhiNxdkRL3148ALco6GJkinvZ4DA3ES/gmosrE+c4FlJsxIL0zhZyK2szt/IClgHxp/3K7K8AGNKUI9aKNsAcqgA6ISNo89fldAyhEUQRt1J4I5IKBAAYECAkq42g4UkFxqSLVJeJgk/plWpqb84i382Aas5lUxbU9s5zi98dnh+kgbl3lExH6D0AgsAY7wN7aDZ4ni20o+KrcUGMfvU/vKk9B+qwpYA7dvkY0e2XuStER3h86xIBv5vZSfa43EK4Q/j4X6XCF4p59gbeXvVON9K+IbVfiozBGsUNofyhPy496/aYvFqgKmuTAqLgOHE/BQI6u58SSoLRwajddLbSbT+ogOm2bBZW7XMwf8BXQlySTR+e/7qKimCeKeW8s9tO9X+bVG49GDZwINnEZo5fcKHjHVbGZolLQqRlMfn1CYNjVlUJ5vaWSgTc9vaej6rwiYmYnc20MuCZ7+Y+ISKnnTDzMt//KSriw28yWIfvpPgAEAZgi0Zb5IOGoAAAAASUVORK5CYII=" alt="" height="70">
    </a>
    <div class="fl-r">
      <a href="javascript:;" id="headerToggle" class="header__toggle"><span></span></a>
      <ul class="main-nav clearfix">
        <li>
          <a href="/page/home_model" class="on">首页</a>
        </li>
        <li>
          <a href="/page/home_model_list">产品列表</a>
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
<div class="layer">
  <img src="/htdocs/images/banner/model_banner.jpg" alt="" width="100%" height="auto" style="">
</div>
<div class="container">
  <div class="pub-title mt50 mb30 ta-c">
    <p class="f24">我们的产品和服务</p>
    <p class="f18 col-gray9">Our products and services</p>
  </div>
  <div class="products">
    <ul class="after-cls">
      <li>
        <img src="http://iph.href.lu/285x285?text=285*285" width="" height="" alt="">
        <div class="name">
          产品名称产品名称产品名称产品名称
        </div>
        <div class="type">
          类型
        </div>
        <p>产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么</p>
        <a href="#" class="fl-r">
          <i class="ico-go"></i>
        </a>
      </li>
      <li>
        <img src="http://iph.href.lu/285x285?text=285*285" width="" height="" alt="">
        <div class="name">
          产品名称
        </div>
        <div class="type">
          类型
        </div>
        <p>产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么</p>
        <a href="#" class="fl-r">
          <i class="ico-go"></i>
        </a>
      </li>
      <li>
        <img src="http://iph.href.lu/285x285?text=285*285" width="" height="" alt="">
        <div class="name">
          产品名称产品名称产品名称产品名称
        </div>
        <div class="type">
          类型
        </div>
        <p>产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么</p>
        <a href="#" class="fl-r">
          <i class="ico-go"></i>
        </a>
      </li>
      <li>
        <img src="http://iph.href.lu/285x285?text=285*285" width="" height="" alt="">
        <div class="name">
          产品名称
        </div>
        <div class="type">
          类型
        </div>
        <p>产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么</p>
        <a href="#" class="fl-r">
          <i class="ico-go"></i>
        </a>
      </li>
      <li class="">
        <img src="http://iph.href.lu/285x285?text=285*285" width="" height="" alt="">
        <div class="name">
          产品名称
        </div>
        <div class="type">
          类型
        </div>
        <p>产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么</p>
        <a href="#" class="fl-r">
          <i class="ico-go"></i>
        </a>
      </li>
      <li>
        <img src="http://iph.href.lu/285x285?text=285*285" width="" height="" alt="">
        <div class="name">
          产品名称
        </div>
        <div class="type">
          类型
        </div>
        <p>产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么</p>
        <a href="#" class="fl-r">
          <i class="ico-go"></i>
        </a>
      </li>
      <li>
        <img src="http://iph.href.lu/285x285?text=285*285" width="" height="" alt="">
        <div class="name">
          产品名称
        </div>
        <div class="type">
          类型
        </div>
        <p>产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么</p>
        <a href="#" class="fl-r">
          <i class="ico-go"></i>
        </a>
      </li>
      <li class="">
        <img src="http://iph.href.lu/285x285?text=285*285" width="" height="" alt="">
        <div class="name">
          产品名称
        </div>
        <div class="type">
          类型
        </div>
        <p>产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么产品简介是什么</p>
        <a href="#" class="fl-r">
          <i class="ico-go"></i>
        </a>
      </li>
    </ul>
  </div>
</div>
<div class="about">
  <div class="container">
    <div class="fl-l">
      <div class="pub-title pt50 mt50 mb30 ">
        <p class="f24">关于我们</p>
        <p class="f18 col-gray9">About us</p>
      </div>
      <p class="lh26 col-gray6">自适应布局给了你更多设计的空间，因为你只用考虑几种不同的状态。而在响应式布局中你却得考虑上百种不同的状态。虽然绝大部分状态差异较小，但仍然也算做差异。它使得把握设计最终效果变得更难，同样让响应式布局更加的难以测试和预测。但同时说难，这也算是响应式布局美的所在。
      </p>
    </div>
    <div class="fl-r">
      <img src="http://iph.href.lu/540x400?text=540*400" alt="" width="100%" height="auto">
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container">
  <div class="pub-title mt50 mb30 ta-c">
    <p class="f24">新闻中心</p>
    <p class="f18 col-gray9">News</p>
  </div>
  <div class="news-eg">
    <a href="#"><h3>华为起诉美国政府，法院已发传票，但这只是开始</h3></a>
    <p>3月7日，华为正式宣布起诉美国政府，一石激起千层浪，引发国人围观热潮。争论之声刚刚起来，一则“大好消息”横空出世，题为“华为起诉新进展！联邦法院已给美国政府发传票”的报道引发很多乐观的评论。有必要先把这个插曲解释一下，在美国司法系统的民事诉讼案中，送达传票是只是一个简单的程序，没有什么含金量。</p>
    <span class="tip">行业新闻</span>
  </div>
  <div class="news-eg">
    <a href="#"><h3>华为起诉美国政府，法院已发传票，但这只是开始</h3></a>
    <p>3月7日，华为正式宣布起诉美国政府，一石激起千层浪，引发国人围观热潮。争论之声刚刚起来，一则“大好消息”横空出世，题为“华为起诉新进展！联邦法院已给美国政府发传票”的报道引发很多乐观的评论。有必要先把这个插曲解释一下，在美国司法系统的民事诉讼案中，送达传票是只是一个简单的程序，没有什么含金量。</p>
    <span class="tip">行业新闻</span>
  </div>
</div>
<div class="contact mt15">
  <div class="container">
    <div class="after-cls">
      <div class="fl-l">
        <div class="pub-title mt50 pt40 mb30 ">
          <p class="f24">联系我们</p>
          <p class="f18 col-gray9">Contact us</p>
        </div>
        <div class="text">
          <p class="lh24 col-gray6">联系电话：0571-88888888
          </p>
          <p class="lh24 col-gray6">企业邮箱：business@cocn.com
          </p>
          <p class="lh24 col-gray6">公司地址：杭州市拱墅区上塘路333号海外海商务写字楼11层
          </p>
        </div>
      </div>
      <div class="fl-r">
        <form class="" action="index.html" method="post">
          <ul class="client-form">
            <li class="short mr20">
              <label>
                您的姓名
                <em>*</em>
              </label>
              <input type="text" name="" value="" placeholder="您的姓名">
            </li>
            <li class="short">
              <label>
                联系电话
                <em>*</em>
              </label>
              <input type="text" name="" value="" placeholder="联系电话">
            </li>
            <li>
              <label>
                电子邮箱
                <em>*</em>
              </label>
              <input type="text" name="" value="" placeholder=""电子邮箱>
            </li>
            <li>
              <label>
                留言内容
                <em>*</em>
              </label>
              <textarea name="name" rows="" cols="" placeholder="留言内容"></textarea>
            </li>
            <li>
              <label>
                验证码
                <em>*</em>
              </label>
              <input type="text" name="" value="" placeholder="验证码" class="w100">
              <a href="#" class="in-block ml10 w80 yzm">
                <img src="http://iph.href.lu/80x36?text=80*36" alt="" width="80" alt="验证码36*80">
              </a>
            </li>
            <li class="mt10">
              <a href="#" class="btn">提交</a>
            </li>
          </ul>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="foot">
  <div class="container">
    <ul>
      <li>
        <a href="#">
          <img src="http://iph.href.lu/120x40?text=120*40" alt="">
        </a>
      </li>
      <li>
        <span class="f16">快速访问</span>
        <p><a href="/page/home_model_list" class="">产品列表</a></p>
        <p><a href="/page/home_model_about" class="">关于我们</a></p>
      </li>
      <li>
        <span class="f16">联系我们</span>
        <p><a href="#" class="">400-555-9999</a></p>
        <p><a href="#" class="">business@cocn.com</a></p>
      </li>
      <li>
        <span class="f16">社交媒体</span>
        <a href="#" class="" title="微博">
          <i class="ico-weibo"></i>
        </a>
        <a href="#" class="" title="QQ">
          <i class="ico-qq"></i>
        </a>
        <a href="#" class="" title="微信">
          <i class="ico-wechat"></i>
        </a>
      </li>
    </ul>
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
