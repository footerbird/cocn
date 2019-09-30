<!DOCTYPE html>
<html>

    <head>
    <?php include_once('templete/pub_head.php') ?>
    </head>
    <body>
    <div class="header-search history">
      <div class="weui-search-bar" id="searchBar">
        <form class="weui-search-bar__form">
          <div class="weui-search-bar__box">
            <i class="weui-icon-search"></i>
            <input type="search" class="weui-search-bar__input" id="searchInput" placeholder="公司信息" required="">
            <a href="javascript:" class="weui-icon-clear" id="searchClear"></a>
          </div>
          <label class="weui-search-bar__label" id="searchText">
            <i class="weui-icon-search"></i>
            <span>公司信息</span>
          </label>
        </form>
        <a href="javascript:history.go(-1);" id="" class="cancel">取消</a>
      </div>
    </div>
    <div class="container bg-white">
      <div class="search-history-box">
        <div class="hd">
          搜索历史
          <a href="javascript:;" id="clear_history" class="fl-r">
            <i class="ico-history-delete"></i>
          </a>
        </div>
        <div class="bd">
          <ul class="list" id="history">
            <li>
              <a href="#">nnn有限公司</a>
            </li>
            <li>
              <a href="#">nnn有限公司</a>
            </li>
            <li>
              <a href="#">nnn有限公司</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <?php include_once('templete/pub_foot.php') ?>
    <script type="text/javascript">
    $(function () {
      $("#clear_history").on("click",function () {
        $("#history").empty();
      })
    })
    </script>
    </body>
</html>
