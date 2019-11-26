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
        <h4>资金账户</h4>
      </div>
    </header>
    <div class="container pt44 pb50">
      <div class="cont-box">
        <div class="mine-set">
          <div class="weui-cells form">
            <div class="weui-cell">
              <div class="weui-cell__bd">
                <p>账户名称</p>
              </div>
              <div class="weui-cell__ft">
                <input type="text" name="" value="" placeholder="请输入账户名称">
              </div>
            </div>
            <div class="weui-cell">
              <div class="weui-cell__bd">
                <p>账户类型</p>
              </div>
              <div class="weui-cell__ft">
                <input class="" type="text" name="account" id="account_type"  placeholder="请选择账户类型">
              </div>
            </div>
            <div class="weui-cell">
              <div class="weui-cell__bd">
                <p>开户银行</p>
              </div>
              <div class="weui-cell__ft">
                <input type="text" name="" value="" placeholder="请输入开户银行">
              </div>
            </div>
            <div class="weui-cell">
              <div class="weui-cell__bd">
                <p>账号</p>
              </div>
              <div class="weui-cell__ft">
                <input type="text" name="" value="" placeholder="请输入账号">
              </div>
            </div>
          </div>
        </div>
        <div class="ta-c mt50 mb10">
          <a class="btn-default" href="javascript:history.go(-1);">保存</a>
        </div>
      </div>
    </div>
    <?php include_once('templete/pub_foot.php') ?>
    <script type="text/javascript">
    $(function () {
      $("#account_type").picker({
    	  toolbarTemplate:'<div class="toolbar"><div class="toolbar-inner"><h1 class="title">请选择账户类型</h1><a href="javascript:;" class="picker-button close-picker">完成</a></div></div>',
    	  cols: [
    	    {
    	      textAlign: 'center',
    	      values: ['公司银行账户','个人银行账户','支付宝']
    	    }
    	  ]
    	});
    })
    </script>
    </body>
</html>
