<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_london.php') ?>
</head>
<body>
<?php include_once('templete/pub_nav.php') ?>
<!-- 查询 -->
<div class="container mb20 mt30">
  <div class="after-cls">
    <div class="search-panel fl-l mr10">
      <input type="text" name="" value="" placeholder="查询公司名称、法人或经营范围" class="w400">
      <button type="button" name="button">找公司</button>
      <a href="javascript:;" class="f12 col-default underline ml15 mt12 in-block">更多高级查询</a>
    </div>
    <div class="f12 fl-l ml50 mt13 col-default">
      <div class="mr5 fl-l mt1">公司类型展示：</div>
        <label class="pos-rela mr30 fl-l"><input type="checkbox" name="leixing" value="drz" checked><i></i><font>待认证</font></label>
        <label class="pos-rela mr30 fl-l"><input type="checkbox" name="leixing" value="yrz"><i></i><font>已认证</font></label>
        <label class="pos-rela mr30 fl-l"><input type="checkbox" name="leixing" value="dealing"><i></i><font>股权交易中</font></label>
    </div>
  </div>
  <div class="filter-box mt30">
    <div class="condition">
      <dl class="">
        <dt class="col-gray9">查找范围：</dt>
        <dd>
          <a href="javascript:;">企业名</a>
          <a href="javascript:;">法人或股东</a>
          <a href="javascript:;">高管</a>
          <a href="javascript:;">品牌/产品</a>
          <a href="javascript:;">联系方式</a>
          <a href="javascript:;">经营范围</a>
        </dd>
      </dl>
    </div>
    <div class="condition">
      <dl class="">
        <dt class="col-gray9">机构类型：</dt>
        <dd>
          <a href="javascript:;">企业</a>
          <a href="javascript:;">社会组织</a>
          <a href="javascript:;">香港公司</a>
          <a href="javascript:;">台湾公司</a>
        </dd>
      </dl>
    </div>
    <div class="condition">
      <dl class="">
        <dt class="col-gray9">企业类型：</dt>
        <dd>
          <a href="javascript:;">有限责任公司</a>
          <a href="javascript:;">股份有限公司</a>
          <a href="javascript:;">国企</a>
          <a href="javascript:;">外商投资企业</a>
          <a href="javascript:;">独资企业</a>
          <a href="javascript:;">合伙制企业</a>
          <a href="javascript:;">个体工商户</a>
        </dd>
      </dl>
    </div>
    <div class="condition">
      <dl class="">
        <dt class="col-gray9">企业状态：</dt>
        <dd>
          <a href="javascript:;">在业</a>
          <a href="javascript:;">存续</a>
          <a href="javascript:;">筹建</a>
          <a href="javascript:;">清算</a>
          <a href="javascript:;">迁入</a>
          <a href="javascript:;">迁出</a>
          <a href="javascript:;">停业</a>
          <a href="javascript:;">撤销</a>
          <a href="javascript:;">吊销</a>
          <a href="javascript:;">注销</a>
        </dd>
      </dl>
    </div>
    <div class="condition">
      <dl class="">
        <dt class="col-gray9">注册资本：</dt>
        <dd>
          <a href="javascript:;">500万以下</a>
          <a href="javascript:;">500～1000万</a>
          <a href="javascript:;">1000～5000万</a>
          <a href="javascript:;">5000万以上</a>
        </dd>
      </dl>
    </div>
    <div class="condition">
      <dl class="">
        <dt class="col-gray9">成立日期：</dt>
        <dd>
          <a href="javascript:;">2019（9798）</a>
          <a href="javascript:;">2018（9798）</a>
          <a href="javascript:;">2017（9798）</a>
          <a href="javascript:;">2016（998）</a>
          <a href="javascript:;">2015（98）</a>
          <a href="javascript:;">2014（8）</a>
        </dd>
      </dl>
    </div>
    <div class="condition pos-rela">
      <a href="javascript:;" class="mt10 f12 fl-r pos-abso col-gray9 f-thin" id="foldType" style="right:25px;">更多<i class="ml3 ico-down"></i></a>
      <dl class="">
        <dt class="col-gray9">行业门类：</dt>
        <dd id="bb" style="height:28px;overflow:hidden;">
          <a href="javascript:;">采矿业（9798）</a>
          <a href="javascript:;">建筑业（9798）</a>
          <a href="javascript:;">批发和零售业（9798）</a>
          <a href="javascript:;">挖煤（998）</a>
          <a href="javascript:;">采矿业（9798）</a>
          <a href="javascript:;">建筑业（9798）</a>
          <a href="javascript:;">批发和零售业（9798）</a>
          <a href="javascript:;">挖煤（998）</a>
          <a href="javascript:;">采矿业（9798）</a>
          <a href="javascript:;">建筑业（9798）</a>
          <a href="javascript:;">批发和零售业（9798）</a>
          <a href="javascript:;">挖煤（998）</a>
          <a href="javascript:;">采矿业（9798）</a>
          <a href="javascript:;">建筑业（9798）</a>
          <a href="javascript:;">批发和零售业（9798）</a>
          <a href="javascript:;">挖煤（998）</a>
          <a href="javascript:;">采矿业（9798）</a>
          <a href="javascript:;">建筑业（9798）</a>
          <a href="javascript:;">批发和零售业（9798）</a>
          <a href="javascript:;">挖煤（998）</a>
          <a href="javascript:;">2015（98）</a>
          <a href="javascript:;">2014（8）</a>
        </dd>
      </dl>
    </div>
    <div class="condition">
      <dl class="" style="border-bottom:none;">
        <dt class="col-gray9">省份地区：</dt>
        <dd>
          <a href="javascript:;">北京（9798）</a>
          <a href="javascript:;">上海（9798）</a>
          <a href="javascript:;">重庆（9798）</a>
          <a href="javascript:;">福建（998）</a>
          <a href="javascript:;">广东（98）</a>
          <a href="javascript:;">葫芦岛（8）</a>
        </dd>
      </dl>
    </div>
  </div>
  <div class="cocn-list mt10">
    <div class="hd">
      <span class="col-default" id="">股权交易中的公司</span>
      <span class="col-gray6 f-thin ml4">推荐列表</span>
    </div>
      <div class="bd">
        <div class="box">
          <div class="w800 fl-l">
            <div class="title">
              <a class="f18" href="/page/company-credit-page.php">南京名商实业有限公司</a>
              <a href="javascript:;" class="abtn-a-renzheng">认证</a>
              <a href="javascript:;" class="abtn-a-zaiye">在业</a>
              <span class="block-f3 col-f4364c">股权交易&nbsp;7000股</span>
            </div>
            <p>法定代表人： 谢青弟  注册资本：1000万元人民币  成立时间：2003-08-01  所属行业：批发和零售业地址：南京市鼓楼区建宁路37号</p>
            <div class="ft">
              与“南京名商事业有限公司”相关  评论 (78) - 关注 (995)
            </div>
          </div>
          <div class="w200 fl-r ta-c mt43">
            <a href="#" class="pub-btn-f4364c">关注</a>
          </div>
        </div>
        <div class="box">
          <div class="w800 fl-l">
            <div class="title">
              <a class="f18" href="/page/company-credit-page.php">南京名商实业有限公司</a>
              <a href="javascript:;" class="abtn-a-zaiye">在业</a>
            </div>
            <p>法定代表人： 谢青弟  注册资本：1000万元人民币  成立时间：2003-08-01  所属行业：批发和零售业地址：南京市鼓楼区建宁路37号</p>
            <div class="ft">
              与“南京名商事业有限公司”相关  评论 (78) - 关注 (995)
            </div>
          </div>
          <div class="w200 fl-r ta-c mt43">
            <a href="#" class="pub-btn had">已关注</a>
          </div>
        </div>
        <div class="box">
          <div class="w800 fl-l">
            <div class="title">
              <a class="f18" href="/page/company-credit-page.php">南京名商实业有限公司</a>
              <span class="block-f3 col-gray9">注销</span>
            </div>
            <p>法定代表人： 谢青弟  注册资本：1000万元人民币  成立时间：2003-08-01  所属行业：批发和零售业地址：南京市鼓楼区建宁路37号</p>
            <div class="ft">
              与“南京名商事业有限公司”相关  评论 (78) - 关注 (995)
            </div>
          </div>
          <div class="w200 fl-r ta-c mt43">
            <a href="#" class="pub-btn-f4364c">关注</a>
          </div>
        </div>
        <div class="box">
          <div class="w800 fl-l">
            <div class="title">
              <a class="f18" href="/page/company-credit-page.php">南京名商实业有限公司</a>
              <a href="javascript:;" class="abtn-a-renzheng">认证</a>
              <a href="javascript:;" class="abtn-a-zaiye">在业</a>
              <span class="block-f3 col-06c594">股权交易&nbsp;7000股</span>
            </div>
            <p>法定代表人： 谢青弟  注册资本：1000万元人民币  成立时间：2003-08-01  所属行业：批发和零售业地址：南京市鼓楼区建宁路37号</p>
            <div class="ft">
              与“南京名商事业有限公司”相关  评论 (78) - 关注 (995)
            </div>
          </div>
          <div class="w200 fl-r ta-c mt43">
            <a href="#" class="pub-btn-f4364c">关注</a>
          </div>
        </div>
      </div>
  </div>
</div>

<?php include_once('templete/pub_foot.php') ?>
<script type="text/javascript">
$(function(){
  $(".condition dl dd a").on("click",function(){//筛选条件，再次点击取消
      if($(this).hasClass("choosed")) {
          $(this).removeClass("choosed");
      }else {
          $(this).addClass("choosed");
      }
  })

  $("#foldType").on("click",function(){//点击收缩
			if($(this).hasClass("col-default")){//col-default表示已经收起，要做出展开动作
				$(this).removeClass("col-default").html('更多<i class="ml3 ico-down"></i>');
				$(this).siblings("dl").find("dd").css('height','28px');
			}else{
				$(this).addClass("col-default").html('收起<i class="ml3 ico-up"></i>');
        $(this).siblings("dl").find("dd").css('height','auto');
			}
		})
})
</script>
</body>
</html>
