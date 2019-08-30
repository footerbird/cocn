<div id="right_login" class='weui-popup__container popup-right-bar login-right-bar'>
    <div class="weui-popup__overlay"></div>
    <div class="weui-popup__modal right-screen-bar">
        <div class="header bg-fa"><a href="javascript:;" class="close-popup pl15 fl-l"><i class="ico-header-back2 mr5"></i>取消</a></div>
        <div class="bd bg-fa" style="overflow-y: hidden;">
          <p class="ta-c pt20"><i class="ico-login-logo"></i></p>
          <div class="right-switch ta-c">
            <a href="javascript:;" data-switch="mima_switch" class="cur">密码登录</a>
            <a href="javascript:;" data-switch="yzm_switch">验证码登录</a>
          </div>
          <div class="login-switch" id="mima_switch">
            <form class="" action="" method="">
              <div class="weui-cells weui-cells_form">
                <div class="weui-cell">
                  <div class="weui-cell__bd">
                    <input class="weui-input" type="text" placeholder="用户名或者手机号">
                  </div>
                </div>
                <div class="weui-cell">
                  <div class="weui-cell__bd">
                    <input class="weui-input" type="password" placeholder="输入密码">
                  </div>
                </div>
              </div>
            </form>
            <p class="ta-r mb50">
              <a href="javascript:;" id="forgot_mima" class="col-base mr15">忘记密码?</a>
            </p>
            <a href="javascript:;" class="btn" id="btn_login_big">登录</a>
            <p class="ta-c mb50">
              <a href="javascript:;" id="new_reg1" class="col-base">新用户注册&nbsp;></a>
            </p>
          </div>
          <div class="login-switch" id="yzm_switch" style="display:none;">
            <form class="" action="" method="">
              <div class="weui-cells weui-cells_form">
                <div class="weui-cell">
                  <div class="weui-cell__bd">
                    <input class="weui-input" type="text" placeholder="手机号">
                  </div>
                </div>
                <div class="weui-cell weui-cell_vcode">
                  <div class="weui-cell__bd">
                    <input class="weui-input" type="tel" placeholder="手机验证码">
                  </div>
                  <div class="weui-cell__ft pr0">
                    <input type="button" name="" value="获取验证码" id="getCode1" class="weui-vcode-btn" onclick="sendCode(this.id,60)">
                  </div>
                </div>
              </div>
            </form>
            <p class="mb50">&nbsp;</p>
            <a href="javascript:;" class="btn" id="btn_login_big">登录</a>
            <p class="ta-c mb50">
              <a href="javascript:;" id="new_reg2" class="col-base">新用户注册&nbsp;></a>
            </p>
          </div>
          <div class="other-login">
            <div class="line"><em>第三方登录</em></div>
      			<a href="javascript:;" id="" class="block m-auto">
              <i class="ico-login-wechat"></i>
            </a>
          </div>
          <div class="forgot-mima-box" style="display:none;">
            <p class="ta-c f16">忘记密码</p>
            <div class="">
              <form class="" action="" method="">
                <div class="weui-cells weui-cells_form">
                  <div class="weui-cell">
                    <div class="weui-cell__bd">
                      <input class="weui-input" type="text" placeholder="手机号">
                    </div>
                  </div>
                  <div class="weui-cell weui-cell_vcode">
                    <div class="weui-cell__bd">
                      <input class="weui-input" type="tel" placeholder="手机验证码">
                    </div>
                    <div class="weui-cell__ft pr0">
                      <input type="button" name="" value="获取验证码" id="getCode2" class="weui-vcode-btn" onclick="sendCode(this.id,60)">
                    </div>
                  </div>
                  <div class="weui-cell">
                    <div class="weui-cell__bd">
                      <input class="weui-input" type="password" placeholder="密码，至少8位中英文数字组合">
                    </div>
                  </div>
                  <div class="weui-cell">
                    <div class="weui-cell__bd">
                      <input class="weui-input" type="password" placeholder="确认密码">
                    </div>
                  </div>
                </div>
              </form>
              <a href="javascript:;" class="btn" id="save_btn">提交</a>
              <p class="">
                <a href="javascript:;" id="new_reg3" class="col-base">新用户注册&nbsp;></a>
                <a href="javascript:;" id="btn_login" class="col-base fl-r">登录&nbsp;></a>
              </p>
            </div>
          </div>
          <div class="reg-box" style="display:none;">
            <p class="ta-c f16">新用户注册</p>
            <div class="">
              <form class="" action="" method="">
                <div class="weui-cells weui-cells_form">
                  <div class="weui-cell">
                    <div class="weui-cell__bd">
                      <input class="weui-input" type="text" placeholder="手机号">
                    </div>
                  </div>
                  <div class="weui-cell weui-cell_vcode">
                    <div class="weui-cell__bd">
                      <input class="weui-input" type="tel" placeholder="手机验证码">
                    </div>
                    <div class="weui-cell__ft pr0">
                      <input type="button" name="" value="获取验证码" id="getCode3" class="weui-vcode-btn" onclick="sendCode(this.id,60)">
                    </div>
                  </div>
                  <div class="weui-cell">
                    <div class="weui-cell__bd">
                      <input class="weui-input" type="password" placeholder="密码，至少8位中英文数字组合">
                    </div>
                  </div>
                  <div class="weui-cell">
                    <div class="weui-cell__bd">
                      <input class="weui-input" type="password" placeholder="确认密码">
                    </div>
                  </div>
                </div>
              </form>
              <p class="col-gray9 f12"><label for="weuiAgree" class="weui-agree in-block">
                <input id="weuiAgree" type="checkbox" class="weui-agree__checkbox">
                <span class="weui-agree__text">我已阅读并同意
                </span>
              </label><a href="javascript:;" id="" class="col-3daaef">《官网用户服务协议》</a>和
              <a href="javascript:;" id="" class="col-3daaef">《隐私条款》</a></p>
              <a href="javascript:;" id="btn_go_login" class="btn">注册</a>
              <p class="ta-c">
                <a href="javascript:;" id="btn_login2" class="col-base">登录&nbsp;></a>
              </p>
            </div>
          </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function(){
  //忘记密码
  $('#forgot_mima').on('click',function () {
    $('.login-switch,.other-login,.right-switch').hide();
    $('.forgot-mima-box').show();
  });
  //登录
  $('#btn_login').on('click',function () {
    $('.forgot-mima-box').hide();
    $('.right-switch,#mima_switch,.other-login').show();
  });
  $('#btn_login2,#btn_go_login').on('click',function () {
    $('.reg-box').hide();
    $('.right-switch,#mima_switch,.other-login').show();
  });
  $('#btn_login_big').on('click',function () {
    $.closePopup(function () {
      location.href="/mobile/user-mine.php";
    });

  });
  $("#save_btn").on("click",function(){
    $.toast('密码已重置',function () {
      $('.forgot-mima-box').hide();
      $('.right-switch,#mima_switch,.other-login').show();
    });
  })
  //新用户注册
  $('#new_reg1,#new_reg2').on('click',function () {
    $('.login-switch,.other-login,.right-switch').hide();
    $('.reg-box').show();
  });
  $('#new_reg3').on('click',function () {
    $('.forgot-mima-box').hide();
    $('.reg-box').show();
  });

})
</script>
