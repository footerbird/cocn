<!DOCTYPE html>
<html>

    <head>
    <?php include_once('templete/pub_head.php') ?>
    </head>
    <body>
    <header class="header">
      <div class="header-title">
        <a href="javascript:history.go(-1);" id="" class="back">
          <i class="ico-header-back"></i>
        </a>
        <h4>提交审核资料</h4>
      </div>
    </header>
    <div class="container pt44 pb50">
      <div class="cont-box">
        <div class="mine-set">
          <div class="weui-cells form">
            <div class="weui-cell">
              <div class="weui-cell__bd">
                <p>公司名称</p>
              </div>
              <div class="weui-cell__ft">
                贸易公司
              </div>
            </div>
            <div class="weui-cell">
              <div class="weui-cell__bd">
                <p>法定代表人</p>
              </div>
              <div class="weui-cell__ft">
                解军
              </div>
            </div>
          </div>
          <div class="ta-c mb20 mt40">
            <label class="upload-label identity-zhizhao m-auto">
              <input id="" class="input" type="file" accept="image/*" multiple="">
            </label>
            <p class="lh30">点击上传公司营业执照<font class="col-gray9">(复印件盖章)</font></p>
          </div>
          <div class="ta-c mb20">
            <label class="upload-label identity-front m-auto">
              <input id="" class="input" type="file" accept="image/*" multiple="">
            </label>
            <p class="lh30">点击上传身份证正面</p>
          </div>
          <div class="ta-c mb20">
            <label class="upload-label identity-back m-auto">
              <input id="" class="input" type="file" accept="image/*" multiple="">
            </label>
            <p class="lh30">点击上传身份证正面</p>
          </div>
          <div class="ta-c mt40 mb10">
            <a class="btn-default" href="/mobile/user-certify-web-5.php" id="">确认审核</a>
          </div>
        </div>
      </div>
    </div>
    <?php include_once('templete/pub_foot.php') ?>
    <script type="text/javascript">
    $(function () {
       $("#date-picker").calendar();
    })
    </script>
    </body>
</html>
