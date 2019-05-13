<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_london.php') ?>
</head>
<body>
<?php include_once('templete/pub_nav.php') ?>
<!-- 股权交易中心 -->
<div class="container mt20 mb20">
  <div class="bg-white padding20">
    <div class="trading-center after-cls">
      <div class="left">
        <div class="title lh45 col-default">
          筛选
        </div>
        <div class="search">
          <input type="text" name="" value="" placeholder="编号/公司名称">
          <a href="#" class="btn">
            <i class="ico-search"></i>
          </a>
        </div>
        <div class="select-panel after-cls">
          <p class="f12 col-gray9">投资方式</p>
          <select class="" name="">
            <option value="">全部</option>
            <option value="">股权转让</option>
            <option value="">增资扩股</option>
          </select>
        </div>
        <div class="select-panel after-cls">
          <p class="f12 col-gray9">交易类型</p>
          <select class="" name="">
            <option value="">全部</option>
            <option value="">标价</option>
            <option value="">拍卖</option>
          </select>
        </div>
        <div class="select-panel after-cls">
          <p class="f12 col-gray9">选择地区</p>
          <select  name="" class="w85" id="province" onchange="selectProvince(this)">
            <option value="">选择省份</option>
          </select>
          <select  name="" class="w85" id="city">
            <option value="">选择城市</option>
          </select>
        </div>
        <div class="fanwei">
          <p class="f12 col-gray9 mb10">经营范围</p>
          <div class="box after-cls" id="fanwei_a">
            <a href="javascript:;">文化传播</a>
            <a href="javascript:;">广告</a>
            <a href="javascript:;">房地产中介</a>
            <a href="javascript:;">房地产投资</a>
            <a href="javascript:;">教育发展</a>
            <a href="javascript:;">知识产权咨询</a>
          </div>
        </div>
        <div class="bottom after-cls">
          <a href="javascript:;" class="a fl-l">
            重新筛选
          </a>
          <a href="javascript:;" class="b fl-r">
            高级筛选
          </a>
        </div>
      </div>
      <div class="right">
        <table width="100%" class="inner-table mb20">
          <thead>
            <tr>
              <th width="10%">编号</th>
              <th width="20%">名称</th>
              <th width="10%">交易比例</th>
              <th width="10%">最新价</th>
              <th width="10%">投资方式</th>
              <th width="10%">交易类型</th>
              <th width="10%">注册资本</th>
              <th width="10%">市场流通</th>
              <th width="10%">有效期</th>
            </tr>
          </thead>
          <tbody>
            <tr align="center">
              <td>7823457875</td>
              <td>
                <a href="/page/trading-pages" class="col-default">杭州名商网络</a>
              </td>
              <td>0.08%</td>
              <td>130万</td>
              <td>增资扩股</td>
              <td>标价</td>
              <td>500万</td>
              <td>80%</td>
              <td>2019-09-09</td>
            </tr>
            <tr align="center">
              <td>7823457875</td>
              <td>
                <a href="/page/trading-pages-paimai" class="col-default">杭州商网络杭州商网络杭州商网络杭州商网络杭州商网络</a>
              </td>
              <td>0.08%</td>
              <td>130万</td>
              <td>股权转让</td>
              <td>拍卖</td>
              <td>500万</td>
              <td>80%</td>
              <td>2019-09-09</td>
            </tr>
            <tr align="center">
              <td>7823457875</td>
              <td>
                <a href="/page/trading-pages-yijia" class="col-default">杭州商网</a>
              </td>
              <td>0.08%</td>
              <td>130万</td>
              <td>股权转让</td>
              <td>议价</td>
              <td>500万</td>
              <td>80%</td>
              <td>2019-09-09</td>
            </tr>
            <tr align="center">
              <td>7823457875</td>
              <td>
                <a href="/page/trading-pages-zengzi" class="col-default">杭州商网</a>
              </td>
              <td>0.08%</td>
              <td>130万</td>
              <td>股权转让</td>
              <td>增资扩股</td>
              <td>500万</td>
              <td>80%</td>
              <td>2019-09-09</td>
            </tr>
            <tr align="center">
              <td>7823457875</td>
              <td>
                <a href="/page/trading-pages-zhuanrang" class="col-default">杭州商网</a>
              </td>
              <td>0.08%</td>
              <td>130万</td>
              <td>股权转让</td>
              <td>公司转让</td>
              <td>500万</td>
              <td>80%</td>
              <td>2019-09-09</td>
            </tr>
          </tbody>
        </table>
        <div class="no-results">
          <img src="/htdocs/images/inner-nothing.png" alt="" class="m-auto">
          <p class="ta-c col-default f18 lh24 pt20 pb20">
            没找到结果，
            <br />
            您可以换个方法，试试看...
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once('templete/pub_foot.php') ?>
<script type="text/javascript">
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
$(function(){
  $('#fanwei_a').find("a").on("click",function () {
    $(this).toggleClass("choosed");
  })

})
</script>
</body>
</html>
