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
        <h4>合格投资人认证</h4>
      </div>
    </header>
    <div class="container pt44 pb50">
      <div class="cont-box">
        <div class="mine-set">
          <ul class="normal-from mt10 mb10">
            <li>
              <input type="text" name="" value="" placeholder="请输入姓名">
            </li>
            <li>
              <input type="text" name="" value="" placeholder="请输入身份证号码">
            </li>
          </ul>
          <!-- <div class="weui-cells_form">
            <div class="weui-uploader">
              <div class="weui-uploader__bd">
                <ul class="weui-uploader__files identity" id="">
                  <li class="weui-uploader__file" style="background-image:url(http://iph.href.lu/404x232?text=404*232)"></li>
                  <li class="weui-uploader__file weui-uploader__file_status" style="background-image:url()">
                    <div class="weui-uploader__file-content">
                      <i class="weui-icon-warn"></i>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div> -->
          <div class="ta-c mb40 mt20">
            <label class="upload-label identity-front m-auto">
              <input id="" class="input" type="file" accept="image/*" multiple="">
            </label>
            <p class="lh30">点击上传身份证正面</p>
          </div>
          <div class="ta-c mb40">
            <label class="upload-label identity-back m-auto">
              <input id="" class="input" type="file" accept="image/*" multiple="">
            </label>
            <p class="lh30">点击上传身份证正面</p>
          </div>
          <p class="ta-c col-gray9 f12 w-all">
            <label for="weuiAgree" class="weui-agree in-block"><input id="weuiAgree" type="checkbox" class="weui-agree__checkbox"><span class="weui-agree__text">我已阅读并同意</span></label><a href="javascript:;" id="" class="col-3daaef">《公司条款》</a>
          </p>
          <div class="ta-c mt10 mb10">
            <a class="btn-default" href="javascript:;" id="shenhe_btn">确认审核</a>
          </div>
        </div>
      </div>
    </div>
    <?php include_once('templete/pub_foot.php') ?>
    <script type="text/javascript">
    $(function () {
      $("#shenhe_btn").on("click",function(){
         $.toast("上传成功",'200',function(){
             location.href = "javascript:history.go(-1);";
         });
     })
    })
    </script>
    </body>
</html>
