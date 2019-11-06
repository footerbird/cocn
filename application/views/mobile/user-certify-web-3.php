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
        <h4>审核公司信息</h4>
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
                <input type="text" name="" value="" placeholder="请输入公司名称">
              </div>
            </div>
            <div class="weui-cell">
              <div class="weui-cell__bd" style="flex:2;">
                <p>统一社会信用代码</p>
              </div>
              <div class="weui-cell__ft">
                <input type="text" name="" value="" placeholder="请输入统一社会信用代码">
              </div>
            </div>
            <div class="weui-cell">
              <div class="weui-cell__bd">
                <p>法定代表人</p>
              </div>
              <div class="weui-cell__ft">
                <input type="text" name="" value="" placeholder="请输入法定代表人">
              </div>
            </div>
            <div class="weui-cell">
              <div class="weui-cell__bd">
                <p>注册资本</p>
              </div>
              <div class="weui-cell__ft">
                <input type="text" name="" value="" placeholder="请输入注册资本">
              </div>
            </div>
            <div class="weui-cell">
              <div class="weui-cell__bd">
                <p>成立时间</p>
              </div>
              <div class="weui-cell__ft">
                <input type="text" id="date-picker" name="" value="" placeholder="请输入成立时间">
              </div>
            </div>
          </div>
          <div class="ta-c mt40 mb10">
            <a class="btn-default" href="/mobile/user-certify-web-4.php" id="">提交审核资料</a>
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
