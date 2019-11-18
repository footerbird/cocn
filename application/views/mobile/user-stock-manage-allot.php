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
        <h4>股权分配</h4>
      </div>
    </header>
    <div class="container pt44 pb50">
      <div class="cont-box">
        <div class="circle-half-bg">
          <div class="user-stock">
            <ul class="user-stock-ul">
              <li>
                <div class="hd">
                  <span class="">名商网络有限名商网络有限公司名商网络有限名商网络有限公司</span>
                </div>
                <div class="bd">
                  <table width="100%" class="f14 lh24">
                    <tbody>
                      <tr>
                        <td align="right" width="25%">
                          <div class="tit ta-r">公司名称:</div></td>
                        <td align="left" width="25%">
                          <div class="cont">5.5%</div></td>
                        <td align="right" width="22%">
                          <div class="tit ta-r">注册资本:</div></td>
                        <td align="left" width="28%">
                          <div class="cont">1000万RMB</div></td>
                      </tr>
                      <tr>
                        <td align="right" width="25%">
                          <div class="tit ta-r">法定代表人:</div></td>
                        <td align="left" width="25%">
                          <div class="cont">5.5%</div></td>
                        <td align="right" width="22%">
                          <div class="tit ta-r">在售比例:</div></td>
                        <td align="left" width="28%">
                          <div class="cont">19%</div></td>
                      </tr>
                      <tr>
                        <td align="right" width="25%"><div class="tit ta-r">注册日期:</div></td>
                        <td align="left" width="25%"><div class="cont">2019-11-12</div></td>
                        <td align="right" width="22%"><div class="tit ta-r">发售日期:</div></td>
                        <td align="left" width="28%"><div class="cont">2019-11-12</div></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </li>
            </ul>
          </div>
          <div class="user-stock">
            <ul class="user-stock-ul">
              <li>
                <div class="hd">
                  <span class="name">分配股权</span>
                </div>
                <div class="bd pt0">
                  <div class="weui-cells form">
                    <div class="weui-cell">
                      <div class="weui-cell__bd">
                        <p>姓名</p>
                      </div>
                      <div class="weui-cell__ft">
                        <input type="text" name="" value="" placeholder="请输入真实姓名">
                      </div>
                    </div>
                    <div class="weui-cell">
                      <div class="weui-cell__bd" style="flex:2;">
                        <p>证件类型</p>
                      </div>
                      <div class="weui-cell__ft">
                        <input class="weui-input" type="text" name="brand" id="id_number"  placeholder="请选择证件类型">
                      </div>
                    </div>
                    <div class="weui-cell">
                      <div class="weui-cell__bd">
                        <p>证件号码</p>
                      </div>
                      <div class="weui-cell__ft">
                        <input type="text" name="" value="" placeholder="请输入证件号码"> 
                      </div>
                    </div>
                    <div class="weui-cell">
                      <div class="weui-cell__bd">
                        <p>持股比例</p>
                      </div>
                      <div class="weui-cell__ft">
                        <input type="text" name="" value="1%" placeholder="请输持股比例">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <div class="ta-c mt40 mb10">
              <a class="btn-default" href="javascript:history.go(-1);" id="">确认分配股权</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="back-top" id="back-top" >
    	<i class="ico-back-top"></i>
    </div>
    <?php include_once('templete/pub_foot.php') ?>

    <script type="text/javascript">
    $(function () {
      $("#id_number").picker({
    	  toolbarTemplate:'<div class="toolbar"><div class="toolbar-inner"><a href="javascript:;" class="picker-button-close close-picker">取消</a><h1 class="title">选择证件类型</h1><a href="javascript:;" class="picker-button close-picker">完成</a></div></div>',
    	  cols: [
    	    {
    	      textAlign: 'center',
    	      values: ['身份证','营业执照']
    	    }
    	  ]
    	});
    })
    </script>
    </body>
</html>
