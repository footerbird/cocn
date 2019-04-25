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
            <table width="100%" class="">
              <tbody>
                <tr class="">
                  <td width="140" align="center" rowspan="6" class="bg-5897cd">
                    <span class="title col-white lh16 mt25 mb25 in-block pos-rela">
                      联系方式
                    </span>
                  </td>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      所在地区
                    </div>
                  </td>
                  <td class="bg-fa">
                    <div class="select-panel mt10 mb10">
                      <select class="mr10 w190" name="" id="province" onchange="selectProvince(this)">
                        <option value="">选择省份</option>
                      </select>
                      <select class="mr10 w190" name="" id="city">
                        <option value="">选择城市</option>
                      </select>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      街道地址
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="text" name="" value="" placeholder="街道/门牌" class="input w380">
                  </td>
                </tr>
                <tr>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      服务热线
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="text" name="" value="" placeholder="" class="input w190">
                  </td>
                </tr>
                <tr>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      微博
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="text" name="" value="" placeholder="" class="input w190">
                  </td>
                </tr>
                <tr>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      QQ
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="text" name="" value="" placeholder="" class="input w190">
                  </td>
                </tr>
                <tr>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                    电子邮箱
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="text" name="" value="" placeholder="" class="input w190">
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
<script type="text/javascript">
$(function(){
  //地区
  var cityJson;//城市数据
  var cityMap = {};//省份对应城市,直接用键值对形式,避免再次循环,例如cityMap['101210000'] = [{code:101210100,name:'杭州'}]这样子

  function selectProvince(obj){
      var code = $(obj).val();
      var hotCityList = cityMap[code];
      var citylist_str = '<option>选择城市</option>';
      $.each(hotCityList,function(j){
      		if(hotCityList[j].code == '100010000'){
      				return true;
      		}
      		citylist_str += '<option value="'+hotCityList[j].code+'">'+hotCityList[j].name+'</option>';
      })
      $("#city").html(citylist_str);
  }

  $(function(){

      $.ajax({
          type:"get",
          url:"/htdocs/json/city.json",
          async:true,
          success:function(data){
              cityJson = data;
              if(cityJson != undefined){
                  var allCityList = cityJson.data.cityList;
                  var provincelist_str = '<option>选择省份</option>';
                  $.each(allCityList,function(i){
                      cityMap[allCityList[i].code] = allCityList[i].subLevelModelList;
                      provincelist_str += '<option value="'+allCityList[i].code+'">'+allCityList[i].name+'</option>';
                  })
                  $("#province").html(provincelist_str);
              }
          }
      });

  })
})
</script>
</body>
</html>
