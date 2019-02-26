<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head.php') ?>
<link rel="stylesheet" href="/htdocs/admin/js/datatables/dataTables.bootstrap.css?<?php echo CACHE_TIME; ?>">
</head>
<body class="page-body">

  <div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
      
    <?php include_once('templete/sidebar.php') ?>
    
    <div class="main-content">
      
      <?php include_once('templete/navbar.php') ?>
      
      <div class="page-title">
        
        <div class="title-env">
          <h1 class="title">会员列表</h1>
          <p class="description">会员列表的详细介绍巴拉巴拉</p>
        </div>
        
          <div class="breadcrumb-env">
          
            <ol class="breadcrumb bc-1">
              <li><a href="<?php echo base_url() ?>admin/console"><i class="fa-home"></i>首页</a></li>
              <li><a href="<?php echo base_url() ?>admin/table">会员</a></li>
              <li class="active"><strong>会员列表</strong></li>
            </ol>
                
        </div>
          
      </div>
      <!-- Table Styles -->
      <div class="row">
        <div class="col-md-12">
        
          <div class="panel panel-default">
            
            <div class="panel-body">
              
              <div class="dataTables_wrapper form-inline dt-bootstrap">
                
                <div class="row">
                  <div class="col-xs-12">
                      <select class="form-control input-sm fl-l">
                        <option value="all">全部订单类型</option>
                        <option value="1">待付款</option>
                        <option value="2">已付款</option>
                        <option value="3">等待卖家过户</option>
                      </select>
                      <label class="fl-l ml20">搜索:
                        <input type="search" class="form-control input-sm" placeholder="请输入关键词">
                      </label>
                      <a href="#" class="btn btn-turquoise btn-sm fl-l ml20">操作一</a>
                      <a href="#" class="btn btn-pink btn-sm fl-l ml20">操作二</a>
                      <a href="#" class="btn btn-danger btn-sm fl-l ml20">操作三</a>
                  </div>
                </div>
                
                <table cellspacing="0" class="table table-small-font table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>
                        <input type="checkbox" class="cbr" id="checkAll">
                      </th>
                      <th>Company</th>
                      <th data-priority="1">Last Trade</th>
                      <th data-priority="3">Trade Time</th>
                      <th data-priority="1">Change</th>
                      <th data-priority="3">Prev Close</th>
                      <th data-priority="3">Open</th>
                      <th data-priority="6">operate</th>
                    </tr>
                  </thead>
                  <tbody class="middle-align">
                    <tr>
                      <td>
                        <input type="checkbox" class="cbr checkItem">
                      </td>
                      <th>GOOG <span class="co-name">Google Inc.</span></th>
                      <td>597.74</td>
                      <td>12:12PM</td>
                      <td>14.81 (2.54%)</td>
                      <td>582.93</td>
                      <td>597.95</td>
                      <td>
                        <a href="#" class="btn btn-orange btn-sm btn-icon icon-left">查看</a>
                      </td>
                    </tr>   
                    <tr>
                      <td>
                        <input type="checkbox" class="cbr checkItem">
                      </td>
                      <th>AAPL <span class="co-name">Apple Inc.</span></th>
                      <td>378.94</td>
                      <td>12:22PM</td>
                      <td>5.74 (1.54%)</td>
                      <td>373.20</td>
                      <td>381.02</td>
                      <td>
                        <a href="#" class="btn btn-orange btn-sm btn-icon icon-left">查看</a>
                      </td>
                    </tr>   
                    <tr>
                      <td>
                        <input type="checkbox" class="cbr checkItem">
                      </td>
                      <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                      <td>191.55</td>
                      <td>12:23PM</td>
                      <td>3.16 (1.68%)</td>
                      <td>188.39</td>
                      <td>194.99</td>
                      <td>
                        <a href="#" class="btn btn-orange btn-sm btn-icon icon-left">查看</a>
                      </td>
                    </tr>    
                    <tr>
                      <td>
                        <input type="checkbox" class="cbr checkItem">
                      </td>
                      <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                      <td>31.15</td>
                      <td>12:44PM</td>
                      <td>1.41 (4.72%)</td>
                      <td>29.74</td>
                      <td>30.67</td>
                      <td>
                        <a href="#" class="btn btn-orange btn-sm btn-icon icon-left">查看</a>
                      </td>
                    </tr>   
                    <tr>
                      <td>
                        <input type="checkbox" class="cbr checkItem">
                      </td>
                      <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                      <td>25.50</td>
                      <td>12:27PM</td>
                      <td>0.66 (2.67%)</td>
                      <td>24.84</td>
                      <td>25.37</td>
                      <td>
                        <a href="#" class="btn btn-orange btn-sm btn-icon icon-left">查看</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="cbr checkItem">
                      </td>
                      <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                      <td>18.65</td>
                      <td>12:45PM</td>
                      <td>0.97 (5.49%)</td>
                      <td>17.68</td>
                      <td>18.23</td>
                      <td>
                        <a href="#" class="btn btn-orange btn-sm btn-icon icon-left">查看</a>
                      </td>
                    </tr>   
                    <tr>
                      <td>
                        <input type="checkbox" class="cbr checkItem">
                      </td>
                      <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                      <td>15.81</td>
                      <td>12:25PM</td>
                      <td>0.11 (0.67%)</td>
                      <td>15.70</td>
                      <td>15.94</td>
                      <td>
                        <a href="#" class="btn btn-orange btn-sm btn-icon icon-left">查看</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="cbr checkItem">
                      </td>
                      <th>GOOG <span class="co-name">Google Inc.</span></th>
                      <td>597.74</td>
                      <td>12:12PM</td>
                      <td>14.81 (2.54%)</td>
                      <td>582.93</td>
                      <td>597.95</td>
                      <td>
                        <a href="#" class="btn btn-orange btn-sm btn-icon icon-left">查看</a>
                      </td>
                    </tr>   
                    <tr>
                      <td>
                        <input type="checkbox" class="cbr checkItem">
                      </td>
                      <th>AAPL <span class="co-name">Apple Inc.</span></th>
                      <td>378.94</td>
                      <td>12:22PM</td>
                      <td>5.74 (1.54%)</td>
                      <td>373.20</td>
                      <td>381.02</td>
                      <td>
                        <a href="#" class="btn btn-orange btn-sm btn-icon icon-left">查看</a>
                      </td>
                    </tr>   
                    <tr>
                      <td>
                        <input type="checkbox" class="cbr checkItem">
                      </td>
                      <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                      <td>191.55</td>
                      <td>12:23PM</td>
                      <td>3.16 (1.68%)</td>
                      <td>188.39</td>
                      <td>194.99</td>
                      <td>
                        <a href="#" class="btn btn-orange btn-sm btn-icon icon-left">查看</a>
                      </td>
                    </tr>    
                    <tr>
                      <td>
                        <input type="checkbox" class="cbr checkItem">
                      </td>
                      <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                      <td>31.15</td>
                      <td>12:44PM</td>
                      <td>1.41 (4.72%)</td>
                      <td>29.74</td>
                      <td>30.67</td>
                      <td>
                        <a href="#" class="btn btn-orange btn-sm btn-icon icon-left">查看</a>
                      </td>
                    </tr>   
                    <tr>
                      <td>
                        <input type="checkbox" class="cbr checkItem">
                      </td>
                      <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                      <td>25.50</td>
                      <td>12:27PM</td>
                      <td>0.66 (2.67%)</td>
                      <td>24.84</td>
                      <td>25.37</td>
                      <td>
                        <a href="#" class="btn btn-orange btn-sm btn-icon icon-left">查看</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="cbr checkItem">
                      </td>
                      <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                      <td>18.65</td>
                      <td>12:45PM</td>
                      <td>0.97 (5.49%)</td>
                      <td>17.68</td>
                      <td>18.23</td>
                      <td>
                        <a href="#" class="btn btn-orange btn-sm btn-icon icon-left">查看</a>
                      </td>
                    </tr>   
                    <tr>
                      <td>
                        <input type="checkbox" class="cbr checkItem">
                      </td>
                      <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                      <td>15.81</td>
                      <td>12:25PM</td>
                      <td>0.11 (0.67%)</td>
                      <td>15.70</td>
                      <td>15.94</td>
                      <td>
                        <a href="#" class="btn btn-orange btn-sm btn-icon icon-left">查看</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" class="cbr checkItem">
                      </td>
                      <th>GOOG <span class="co-name">Google Inc.</span></th>
                      <td>597.74</td>
                      <td>12:12PM</td>
                      <td>14.81 (2.54%)</td>
                      <td>582.93</td>
                      <td>597.95</td>
                      <td>
                        <a href="#" class="btn btn-orange btn-sm btn-icon icon-left">查看</a>
                      </td>
                    </tr>   
                    <tr>
                      <td>
                        <input type="checkbox" class="cbr checkItem">
                      </td>
                      <th>AAPL <span class="co-name">Apple Inc.</span></th>
                      <td>378.94</td>
                      <td>12:22PM</td>
                      <td>5.74 (1.54%)</td>
                      <td>373.20</td>
                      <td>381.02</td>
                      <td>
                        <a href="#" class="btn btn-orange btn-sm btn-icon icon-left">查看</a>
                      </td>
                    </tr>   
                    <tr>
                      <td>
                        <input type="checkbox" class="cbr checkItem">
                      </td>
                      <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                      <td>191.55</td>
                      <td>12:23PM</td>
                      <td>3.16 (1.68%)</td>
                      <td>188.39</td>
                      <td>194.99</td>
                      <td>
                        <a href="#" class="btn btn-orange btn-sm btn-icon icon-left">查看</a>
                      </td>
                    </tr>    
                    <tr>
                      <td>
                        <input type="checkbox" class="cbr checkItem">
                      </td>
                      <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                      <td>31.15</td>
                      <td>12:44PM</td>
                      <td>1.41 (4.72%)</td>
                      <td>29.74</td>
                      <td>30.67</td>
                      <td>
                        <a href="#" class="btn btn-orange btn-sm btn-icon icon-left">查看</a>
                      </td>
                    </tr>   
                  </tbody>
                </table>
                
                <div class="row">
                  <div class="col-xs-6">
                    <div class="dataTables_info">共1234条记录，
                      <label>每页显示 
                        <select class="form-control input-sm">
                          <option value="10">10</option>
                          <option value="25">25</option>
                          <option value="50">50</option>
                          <option value="100">100</option>
                          <option value="-1">全部</option>
                        </select> 条记录
                      </label>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="dataTables_paginate paging_simple_numbers">
                      <ul class="pagination">
                        <li class="paginate_button first">
                          <a href="#">首页</a>
                        </li>
                        <li class="paginate_button previous">
                          <a href="#">上一页</a>
                        </li>
                        <li class="paginate_button active">
                          <a href="#">1</a>
                        </li>
                        <li class="paginate_button ">
                          <a href="#">2</a>
                        </li>
                        <li class="paginate_button ">
                          <a href="#">3</a>
                        </li>
                        <li class="paginate_button ">
                          <a href="#">4</a>
                        </li>
                        <li class="paginate_button ">
                          <a href="#">5</a>
                        </li>
                        <li class="paginate_button ">
                          <a href="#">6</a>
                        </li>
                        <li class="paginate_button next">
                          <a href="#">下一页</a>
                        </li>
                        <li class="paginate_button last">
                          <a href="#">尾页</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                
              </div>
              
            </div>
            
          </div>
          
        </div>
      </div>
      
      <?php include_once('templete/copyright.php') ?>
    </div>
    
  </div>
  
  
  
<?php include_once('templete/pub_foot.php') ?>
<script type="text/javascript">
$(function(){
    $("#checkAll").on("change",function(){
        $(".checkItem").prop('checked', this.checked).trigger('change');
    })
})
</script>
</body>
</html>