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
        <h4></h4>
      </div>
    </header>
    <div class="container pt44 bg-white">
      <div class="cont-box mt10 pt50">
        <i class="ico-alert-fail m-auto"></i><!-- 失败 -->
        <i class="ico-alert-succ m-auto"></i><!-- 成功 -->
        <p class="f16 ta-c mt10 mb15">审核失败</p><!-- 通用 -->
        <p class="f12 ta-c mb35">公司名称公司名称</p><!-- 通用 -->
        <div class="ml15 mr15">
          <div class="line"></div>
        </div>
        <div class="ta-c col-gray9 mt30 mb50 lh25">失败原因：描述，由管理员手动输入<br/>（系统将提供管理员个别快捷选项）<br/>官网服务周期 2019年01月01日 - 2022年01月01日</div>
        <div class="ta-c mt50"><!-- 失败 -->
          <a href="/mobile/user-certify-web-2.php" class="btn-default">重新提交材料，发起复审</a>
        </div>
        <div class="ta-c mt50"><!-- 成功 -->
          <a href="/mobile/user-cocn-zero.php" class="btn-default mb25">设置官网</a>
          <a href="#" class="btn-default-b">我要融资</a>
        </div>
      </div>
    </div>
    <div class="back-top" id="back-top" >
    	<i class="ico-back-top"></i>
    </div>
    <?php include_once('templete/pub_foot.php') ?>
    <script type="text/javascript">
    $(function () {
    })
    </script>
    </body>
</html>
