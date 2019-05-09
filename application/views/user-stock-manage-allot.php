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
    <div class="mb15 manage-panel2">
      <div class="sub-nav-panel">
        <span class="title">名商网络<em class="ml5 in-block">80010001</em>
        </span>
      </div>
      <div class="order-table">
        <table width='100%' class="">
          <tbody>
            <tr>
              <td width="30%">
                <dl class="info">
                  <dt>
                    公司名称:
                  </dt>
                  <dd>
                    杭州名商网络有限公司
                  </dd>
                </dl>
              </td>
              <td>
                <dl class="info">
                  <dt>
                    注册资本:
                  </dt>
                  <dd>
                    1000万元人民币
                  </dd>
                </dl>
              </td>
            </tr>
            <tr>
              <td>
                <dl class="info">
                  <dt>
                    法定代表人:
                  </dt>
                  <dd>
                    XXX
                  </dd>
                </dl>
              </td>
              <td>
                <dl class="info">
                  <dt>
                    在售比例:
                  </dt>
                  <dd>
                    30%
                  </dd>
                </dl>
              </td>
            </tr>
            <tr>
              <td>
                <dl class="info">
                  <dt>
                    注册日期:
                  </dt>
                  <dd>
                    2019年3月6日
                  </dd>
                </dl>
              </td>
              <td>
                <dl class="info">
                  <dt>
                    发售日期:
                  </dt>
                  <dd>
                    2019年3月6日
                  </dd>
                </dl>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="manage-panel-spec">
      <div class="sub-nav-panel">
        <span class="title">分配股权</span>
      </div>
      <div class="mt15 after-cls">
        <div class="install-box">
          <div class="auto-table">
            <table width="100%" class="">
              <tbody>
                <tr class="">
                  <td width="140" align="center" rowspan="6" class="bg-5897cd">
                    <span class="title col-white lh16 mt25 mb25 in-block pos-rela">
                      股权持有人信息
                    </span>
                  </td>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      姓名
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="text" name="" value="" placeholder="请输入姓名" class="input w190">
                  </td>
                </tr>
                <tr>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      证件类型
                    </div>
                  </td>
                  <td class="bg-fa">
                    <div class="select-panel mt10 mb10">
                      <select class="mr10 w190" name="" id="">
                        <option value="0">请选择证件类型</option>
                        <option value="1">身份证 </option>
                        <option value="2">营业执照</option>
                      </select>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                      证件号码
                    </div>
                  </td>
                  <td class="bg-fa">
                      <input type="text" name="" value="" placeholder="请输入证件号码" class="input w190">
                  </td>
                </tr>
                <tr>
                  <td width="112" class="pl10 bg-fa">
                    <div class="pr20 ta-r">
                     持股比例
                    </div>
                  </td>
                  <td class="bg-fa">
                    <div class="w190 input percent after-cls">
                        <input type="text" name="" value="1"><em>%</em>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="fl-l w-all mt30 mb10">
          <p class="ta-c mt15 mb20">
            <a href="/page/user-stock-manage" class="pub-btn w150">确认分配股权</a>
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
})
</script>
</body>
</html>
