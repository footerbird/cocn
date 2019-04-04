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
        <a href="/page/user-security" class="">安全设置</a>
      </div>
      <div class="mt25 after-cls">
        <table width="100%">
          <tbody>
            <tr>
              <td width="33.33%">
                <div class="security-panel">
                  <div class="ta-c f16 col-default mb15 mt10">
                    密码设置
                  </div>
                  <div class="m-auto">
                    <dl class="">
                      <dt>登录密码：</dt>
                      <dd class="col-gray9">已设置</dd>
                      <dt>登录密码：</dt>
                      <dd class="col-gray9">已设置</dd>
                      <dt>手机号码：</dt>
                      <dd class="">13288888888</dd>
                    </dl>
                    <p class="ta-r">
                      <a href="#" class="col-default f12 in-block">设置
                        <i class="ico-blue-arrow"></i>
                      </a>
                    </p>
                  </div>
                </div>
              </td>
              <td width="33.33%">
                <div class="security-panel">
                  <div class="ta-c f16 col-default mb15 mt10">
                    登录设置
                  </div>
                  <div class="m-auto">
                    <dl class="">
                      <dt>微信扫码：</dt>
                      <dd class="">
                        <div class="switch-panel">
                          <input type="checkbox" name="" value="" class="" id="weixin" checked>
                          <label class="" for="weixin">
                            <i></i>
                          </label>
                        </div>
                      </dd>
                      <dt>微博授权：</dt>
                      <dd class="">
                        <div class="switch-panel">
                          <input type="checkbox" name="" value="" class="" id="wb">
                          <label class="" for="wb">
                            <i></i>
                          </label>
                        </div>
                      </dd>
                      <dt>手机验证码：</dt>
                      <dd class="">
                        <div class="switch-panel">
                          <input type="checkbox" name="" value="" class="" id="phoneyzm">
                          <label class="" for="phoneyzm">
                            <i></i>
                          </label>
                        </div>
                      </dd>
                    </dl>
                  </div>
                </div>
              </td>
              <td width="33.33%">
                <div class="security-panel">
                  <div class="ta-c f16 col-default mb15 mt10">
                    交易提醒
                  </div>
                  <div class="m-auto">
                    <dl class="" style="width:48% !important">
                      <dt>开拍：</dt>
                      <dd class="">
                        <div class="switch-panel">
                          <input type="checkbox" name="" value="" class="" id="kaipai" checked>
                          <label class="" for="kaipai">
                            <i></i>
                          </label>
                        </div>
                      </dd>
                      <dt>违约：</dt>
                      <dd class="">
                        <div class="switch-panel">
                          <input type="checkbox" name="" value="" class="" id="weiyue" checked>
                          <label class="" for="weiyue">
                            <i></i>
                          </label>
                        </div>
                    </dd>
                      <dt>议价：</dt>
                      <dd class="">
                        <div class="switch-panel">
                          <input type="checkbox" name="" value="" class="" id="yijia" checked>
                          <label class="" for="yijia">
                            <i></i>
                          </label>
                        </div>
                    </dd>
                    </dl>
                    <dl class="" style="width:50% !important">
                      <dt>新交易：</dt>
                      <dd class="">
                        <div class="switch-panel">
                          <input type="checkbox" name="" value="" class="" id="newjiaoyi" checked>
                          <label class="" for="newjiaoyi">
                            <i></i>
                          </label>
                        </div>
                      </dd>
                      <dt>等待回复：</dt>
                      <dd class="">
                        <div class="switch-panel">
                          <input type="checkbox" name="" value="" class="" id="waithuifu" checked>
                          <label class="" for="waithuifu">
                            <i></i>
                          </label>
                        </div>
                      </dd>
                      <dt>交易完成：</dt>
                      <dd class="">
                        <div class="switch-panel">
                          <input type="checkbox" name="" value="" class="" id="dealwancheng" checked>
                          <label class="" for="dealwancheng">
                            <i></i>
                          </label>
                        </div>
                      </dd>
                    </dl>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="security-panel">
                  <div class="ta-c f16 col-default mb15 mt10">
                    信息提示
                  </div>
                  <div class="m-auto">
                    <dl class="">
                      <dt>异常登录：</dt>
                      <dd class="">
                        <div class="switch-panel">
                          <input type="checkbox" name="" value="" class="" id="yichang">
                          <label class="" for="yichang">
                            <i></i>
                          </label>
                        </div>
                      </dd>
                      <dt>可疑评论：</dt>
                      <dd class="">
                        <div class="switch-panel">
                          <input type="checkbox" name="" value="" class="" id="keyi">
                          <label class="" for="keyi">
                            <i></i>
                          </label>
                        </div>
                      </dd>
                    </dl>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
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
  //切换行业数据、地区分析
  $("#col_left_tab_box .tab a").on('click',function() {
      $(this).addClass('on').siblings().removeClass('on');
      var index = $(this).index();
      number = index;
      $('#col_left_tab_box .content dd').hide();
      $('#col_left_tab_box .content dd:eq(' + index + ')').show();
  });
})
</script>
</body>
</html>
