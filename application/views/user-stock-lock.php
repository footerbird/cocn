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
        <span class="title">股权锁仓</span>
      </div>
      <div class="mt15">
        <p class="col-gray6 lh26 pb15">
          股权锁仓功能介绍...<br />锁仓功能启动以后，除交易中的股权，其他所有股权将禁止启动交易功能。<br />锁仓股权，必须经过股东大会决议，并由公司法定代表人发起。
        </p>
        <div class="col-gray9 pb20 after-cls">
          <a href="javascript:;" class="upload-label-word fl-l" id="upload_licence_btn"><i class="ico-upload"></i>上传锁仓决议</a>
          <input type="file" name="" value="" id="upload_licence_file" style="display: none;" >
          <div class="upload-result" id="upload_licence_result" style="display: none;">
              <span class="upload-result-title">XXX营业执照.png</span>
              <span class="upload-result-size">94.57K</span>
              <!-- <a href="">查看</a> -->
              <a href="" class="col-default">删除</a>
          </div>
        </div>
        <div class="hr"></div>
        <div class="pb30 pt20">
          <a href="javascript:;" class="w140 pub-btn">
            确定锁仓
          </a>
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
    $("#upload_licence_btn").on("click",function(){
        $("#upload_licence_file")[0].click();
    })

    $("#upload_licence_file").on("change",function(){
        var $this = $(this);
        var file_object = this.files[0];
        if (!file_object) {
            return
        }
        //图片限制
        // var reader = new FileReader();
        // if (!window.FileReader || !file_object || !file_object.type.match('image.*')) {
        //     popup_alert('图片格式错误！<br>请选择 .jpg 或 .png 格式图片，重新上传');
        //     return;
        // }
        // if (file_object.size > 1024*1024*5) {
        //     popup_alert('大小应小于5M');
        //     return
        // }

        $("#upload_licence_btn").html("<i class='ico-upload'></i>重新上传");

        var str = '';
        str += '<span class="upload-result-title">'+file_object.name+'</span>';
        var filesize = '';
        if(file_object.size < 1024){
            filesize = file_object.size+"B";
        }else if(file_object.size > 1024*1024){
            filesize = (file_object.size/(1024*1024)).toFixed(1)+"M";
        }else{
            filesize = (file_object.size/1024).toFixed(1)+"K";
        }
        str += '<span class="upload-result-size">'+filesize+'</span>';
        str += '<a href="" class="col-default">删除</a>';
        $("#upload_licence_result").html(str).show();

        //打印图片信息
        // reader.readAsDataURL(file_object);
        // reader.onload = function (theFile) {
        //     var img_width = 0;
        //     var img_height = 0;
        //     var image = new Image();
        //     image.src = theFile.target.result;
        //     image.onload = function () {
        //         img_width = this.width;
        //         img_height = this.height;
        //         console.log("宽度："+img_width+"px，高度："+img_height);
        //     }
        // }
    })
})
</script>
</body>
</html>
