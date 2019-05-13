<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_london.php') ?>
</head>
<body>
<?php include_once('templete/pub_nav.php') ?>
<!-- 股权交易中心 -->
<div class="attention">
  <div class="container">
    <div class="f18 ta-c">
      您需要完成合格投资人认证才能购买公司股权。
      <a href="/page/certify-person"  class="col-f4364c underline">点击认证</a>
    </div>
  </div>
</div>
<div class="container mb20">
  <div class="bg-white">
    <div class="">
      <div class="trading-title after-cls">
        <div class="left">
          <em></em>
          <span>
            杭州名商网络有限公司5.5%股权拍卖
            <i>80010001</i>
          </span>
        </div>
        <div class="right">
          <ul>
            <li>
              <a href="#">公司信用</a>
            </li>
            <li>
              <a href="#">用户评论</a>
            </li>
            <li>
              <a href="#">风险评估</a>
            </li>
            <li>
              <a href="#">其他相关</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="trading-info after-cls">
        <div class="left after-cls">
          <dl class="info">
            <dt>项目编号：</dt>
            <dd>80010001</dd>
          </dl>
          <dl class="info">
            <dt>剩余时间：</dt>
            <dd id="countdown"></dd>
          </dl>
          <dl class="info">
            <dt>投资方式：</dt>
            <dd>股权转让</dd>
          </dl>
          <dl class="info">
            <dt>交易类型：</dt>
            <dd>拍卖</dd>
          </dl>
          <dl class="info">
            <dt>交易股权：</dt>
            <dd>5.5%</dd>
          </dl>
          <dl class="info">
            <dt>起拍价格：</dt>
            <dd>
              <em class="col-0bb56b">4,890,00元</em>/人民币
            </dd>
          </dl>
        </div>
        <div class="hr fl-l mb15"></div>
        <div class="fl-l w-all">
          <div class="col-default mb15">
            参与拍卖
          </div>
          <div class="w300">
            <div class="input">
                <input type="text" name="" value="" placeholder="输入金额"><em>元/人民币</em>
            </div>
          </div>
          <p class="mt10 mb5 col-gray9">请填写您期望购买的股权份额
          </p>
          <p class="mb25"><em class="col-gray9">示例：20000</em></p>
        </div>
        <div class="fl-l w-all mb25">
          <!-- <div class="col-default pt20 mb10">
            交易预估
          </div> -->
          <p class="lh26"><em class="w60 in-block">投资总额</em><em class="ml20 in-block">100,000元</em>/人民币</p>
          <p class="lh26"><em class="w60 in-block">保证金</em><em class="ml20 in-block col-f4364c">20,000元</em>/人民币</p>
        </div>
        <div class="fl-l w-all mb10">
          <label class=""><input type="checkbox" name="yuedu" value="yuedu" id=""><i></i><font>我已了解<a href="#" class="col-3daaef">《股权投资风险》</a></font>并同意购买公司股权</label>
          <div class="hr fl-l mt25 mb25"></div>
          <p>
            <a href="/page/trading-pay" class="pub-btn mb20">确认出价，并预付定金</a>
          </p>
        </div>
      </div>
      <div class="trading-rank pl40 pr40 pb50">
        <div class="f16 col-default pb20 ml30">
          出价记录
        </div>
        <table width="100%" class="inner-table ml30">
          <thead>
            <tr>
              <th width="25%">
                时间
              </th>
              <th align="left" width="25%">
                操作
              </th>
              <th align="left" width="50%">
                我的意向出价
              </th>
            </tr>
          </thead>
          <tbody>
            <tr align="center">
              <td>2019-09-08 19:18:11</td>
              <td align="left" >我的出价</td>
              <td  align="left" class="">&yen;129,000<em class="block-a-dairenzheng ml5">当前有效出价</em>
              </td>
            </tr>
            <tr align="center">
              <td>2019-09-08 19:18:11</td>
              <td align="left" >我的出价</td>
              <td  align="left" class="">&yen;129,000</td>
            </tr>
            <tr align="center">
              <td>2019-09-08 19:18:11</td>
              <td align="left" >我的出价</td>
              <td  align="left" class="">&yen;129,000</td>
            </tr>
            <tr align="center">
              <td>2019-09-08 19:18:11</td>
              <td align="left" >我的出价</td>
              <td  align="left" class="">&yen;129,000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include_once('templete/pub_foot.php') ?>

<script type="text/javascript">
//拍卖页面倒计时
function countDown(id,leftTime,callback){
    var $id = $("#"+id),runtime = 0,wait = leftTime/1000;
    time();

    function time(){
        var str = "";
        wait--;
        if(wait<0){
            if(typeof(callback)=="function"){
                callback();
                return false;
            }else{
                return false;
            }
        }
        var nD=Math.floor(wait/(60*60*24));
        var nH=Math.floor(wait/(60*60))%24;
        var nM=Math.floor(wait/(60)) % 60;
        var nS=wait % 60;

        if(nD){
            str+= " <font class='col-f4364c mr3'>" + nD + "</font>" + "天";
        }
        if(nD || nH){
            str+= " <font class='col-f4364c mr3'>" + nH + "</font>" + "小时";
        }
        if(nD || nH || nM){
            str+= " <font class='col-f4364c mr3'>" + nM + "</font>" + "分";
        }
        str+= " <font class='col-f4364c mr3'>" + nS + "</font>" + "秒";
        $id.html(str);

        setTimeout(function(){
            time();
        },1000)
    }
}
//竞价倒计时
	countDown("countdown",2592000*1000);//从服务器取出剩余时间，如果单位是秒
</script>
</body>
</html>
