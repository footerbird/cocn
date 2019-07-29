<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_london.php') ?>
</head>
<body>
<?php include_once('templete/pub_nav.php') ?>
<!-- 轮播开始 -->
<div class="after-cls pos-rela sfg-top">
  <div class="banner">
    <div class="cont">
      <div class="title">我要融资</div>
      <div class="desc">股权交易平台为具备一定创新能力的中小微企业提供融资机会，<br>包括公司股权转让和增资扩股等</div>
    </div>
    <img src="" alt="">
  </div>
</div>
<div class="bg-white pb25">
  <div class="container">
    <div class="f30 ta-c col-default pt40">入住条件</div>
    <div class="fl-l lh30 ml30 mt45">
      <p class="f16 lh30 mb15">1.合法设立并有效存续的公司；</p>
      <p class="f16 lh30 mb15">2.所属行业符合国家和地区产业政策；</p>
      <p class="f16 lh30 mb15">3.股权权属清晰，或投资人投资份额及权属清晰；</p>
      <p class="f16 lh30 mb15">4.有固定的办公经营场所，生产经营正常，主营业务基本明确、独立；</p>
      <p class="f16 lh30 mb15">5.不存在重大违法违规行为；</p>
      <p class="f16 lh30 mb15">6.本平台要求的其他条件。</p>
    </div>
    <div class="fl-r mb35 mr100 mt10 pos-rela">
      <div class="fl-l after-cls w200 mt50 sfg-wyrz-animate">
        <img src="/htdocs/images/sfg-wyrz-rztj1.png" alt="" class="in-block mb15 a">
        <img src="/htdocs/images/sfg-wyrz-rztj2.png" alt="" class="in-block b">
      </div>
      <img src="/htdocs/images/sfg-wyrz-rztj3.png" alt="" class="in-block fl-r">
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<div class="bg-f2f6f8 pb50">
  <div class="container">
    <div class="f30 ta-c col-default pt40 mb50">入住材料</div>
    <div class="fl-l ml100 pb20 mt10">
      <img src="/htdocs/images/sfg-wyrz-rzcl.png" alt="" class="in-block ml20">
    </div>
    <div class="fl-r lh30 mt20 mr100 pr20">
      <p class="f16 lh30 mb15">申请入驻的公司，通过在线提交的方式上传材料。</p>
      <p class="f16 lh30 mb15">1.公司营业执照正本，或复印件加盖公章；</p>
      <p class="f16 lh30 mb15">2.公司法定代表人身份证原件，若非本人需要附加《授权委托书》；</p>
      <p class="f16 lh30 mb20">3.承诺书。</p>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<div class="bg-white pb100">
  <div class="container after-cls">
    <div class="f30 ta-c col-default pt40 mb50">入住流程</div>
    <div class="mb35 pt30">
      <img src="/htdocs/images/sfg-wyrz-rzlc.png" alt="">
    </div>
    <table width="100%" class="f14 mb50">
      <tbody>
        <tr>
          <td width="190" align="left">注册股权交易平台用户</td>
          <td width="280" align="center">提交公司认证申请</td>
          <td width="270" align="center">股权交易平台审核</td>
          <td width="260" align="center">审核通过</td>
          <td width="190" align="right">开通股权交易服务</td>
        </tr>
      </tbody>
    </table>
    <div class="pt100 ta-c">
      <a href="#" class="mt10 pub-btn-big mb15">开通股权交易</a>
    </div>
  </div>
</div>
<!-- footer -->
<?php include_once('templete/pub_foot.php') ?>
<script src="/htdocs/js/slick/slick.min.js?<?php echo CACHE_TIME; ?>"></script>
<link rel="stylesheet" href="/htdocs/js/slick/slick.css?<?php echo CACHE_TIME; ?>">
<script type="text/javascript">
$(function(){
  //幻灯片轮播，该效果会使得弹框在滚动的时候抖动？
  $(".banner-slick").slick({
    dots: true,
    autoplay:true,
    autoplaySpeed:3000,//默认3000
    arrows:false
  });
  $(".sctz-autoplay").slick({
    infinite:true,
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: true,
    autoplaySpeed: 25000,
    arrows:false,
    dots: true
  });
})
</script>
</body>
</html>
