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
        <h4>我的发布</h4>
      </div>
    </header>
    <div class="container pt44">
      <div class="cont-box">
        <div class="mt15">
          <div class="user-stock">
            <ul class="user-stock-ul">
              <li>
                <div class="hd">
                  <span class="name">名商网络有限名商网络有限公司名商网络有限名商网络有限公司</span>
                  <a href="#" class="cancel">取消发布</a>
                </div>
                <div class="bd">
                  <table width="100%" class="lh24">
                    <tbody>
                      <tr>
                        <td>
                        <div class="tit">
                          交易量:
                        </div>
                        <div class="cont">
                          0.6%
                        </div>
                        </td>
                        <td>
                          <div class="tit">
                            状态:
                          </div>
                          <div class="cont">
                            待审核
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td  width="50%">
                          <div class="tit">
                            出售方式:
                          </div>
                          <div class="cont">
                            投资人出价
                          </div>
                        </td>
                        <td  width="50%">
                          <div class="tit">
                            发行方式:
                          </div>
                          <div class="cont">
                            股权转让
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                        <div class="tit">
                          发布时间:
                        </div>
                        <div class="cont">
                          2019-10-09 14:08:06
                        </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </li>
              <li>
                <div class="hd">
                  <span class="name">名商网络有限名商网络有限公司名商网络有限名商网络有限公司</span>
                  <a href="#" class="cancel">取消发布</a>
                </div>
                <div class="bd">
                  <table width="100%" class="lh24">
                    <tbody>
                      <tr>
                        <td>
                        <div class="tit">
                          交易量:
                        </div>
                        <div class="cont">
                          0.6%
                        </div>
                        </td>
                        <td>
                          <div class="tit">
                            状态:
                          </div>
                          <div class="cont">
                            待审核
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td  width="50%">
                          <div class="tit">
                            出售方式:
                          </div>
                          <div class="cont">
                            拍卖
                          </div>
                        </td>
                        <td  width="50%">
                          <div class="tit">
                            发行方式:
                          </div>
                          <div class="cont">
                            股权转让
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                        <div class="tit">
                          发布时间:
                        </div>
                        <div class="cont">
                          2019-10-09 14:08:06
                        </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </li>
              <li>
                <div class="hd">
                  <span class="name">名商网络有限名商网络有限公司名商网络有限名商网络有限公司</span>
                  <a href="#" class="cancel">取消发布</a>
                </div>
                <div class="bd">
                  <table width="100%" class="lh24">
                    <tbody>
                      <tr>
                        <td>
                        <div class="tit">
                          交易量:
                        </div>
                        <div class="cont">
                          0.6%
                        </div>
                        </td>
                        <td>
                          <div class="tit">
                            状态:
                          </div>
                          <div class="cont">
                            待审核
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td  width="50%">
                          <div class="tit">
                            出售方式:
                          </div>
                          <div class="cont">
                            一口价
                          </div>
                        </td>
                        <td  width="50%">
                          <div class="tit">
                            发行方式:
                          </div>
                          <div class="cont">
                            股权转让
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                        <div class="tit">
                          发布时间:
                        </div>
                        <div class="cont">
                          2019-10-09 14:08:06
                        </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </li>
            </ul>
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
      //返回顶部
      $(".container").on("scroll",function(){
        	var $_top = $(".cont-box").offset().top;
        	var $_hh = $(".header").height();
        	var $_height = $(this).height();
          // console.log($_height);
        	if( $_top - $_hh + $_height < 0 ){
    			$("#back-top").fadeIn();
        	}else{
        		$("#back-top").fadeOut();
        	}
      });

      $(".ico-back-top").on("click",function(){//go top
      	$(".container").animate({scrollTop:0},500)
      });

      })
    </script>
    </body>
</html>
