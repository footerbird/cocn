<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<style type="text/css">
table {
  border-collapse: collapse;
  border-spacing: 0;
  table-layout: fixed;
  border: 1px solid #f1f1f1;
  width: 1200px;
  margin: 50px auto;
}
table th {
  line-height: 52px;
  padding: 0 10px;
  font-size: 14px;
  font-weight: bold;
  background-color: #fafafa;
  border-bottom: 1px solid #f1f1f1;
}
table td {
  line-height: 32px;
  padding: 8px 10px;
  font-size: 13px;
  color: #666;
}
table td a {
  font-size: 14px;
  font-weight: 400;
  color: #5195d5;
}
table tr:nth-child(odd) {
  background-color: #fafafa;
}
table tr:hover {
  background-color: #f5faff;
}
</style>
</head>
<body>
<table>
    <tr><th align="right" width="200">标题</th><th align="left">路由</th></tr>
    <tr>
        <td align="right">首页</td>
        <td><a href="<?php echo base_url() ?>page/home" target="_blank"><?php echo base_url() ?>page/home</a></td>
    </tr>
    <tr>
        <td align="right">首页_蓝色</td>
        <td><a href="<?php echo base_url() ?>page/home_blue" target="_blank"><?php echo base_url() ?>page/home_blue</a></td>
    </tr>
    <tr>
        <td align="right">首页_伦敦交易所</td>
        <td><a href="<?php echo base_url() ?>page/home_london" target="_blank"><?php echo base_url() ?>page/home_london</a></td>
    </tr>
    <tr>
        <td align="right">个人中心_账户资料_个人信息</td>
        <td><a href="<?php echo base_url() ?>page/user-personal" target="_blank"><?php echo base_url() ?>page/user-personal</a></td>
    </tr>
    <tr>
        <td align="right">首页_建站模版</td>
        <td><a href="<?php echo base_url() ?>page/home_model" target="_blank"><?php echo base_url() ?>page/home_model</a></td>
    </tr>
    <tr>
        <td align="right">投资图谱</td>
        <td><a href="<?php echo base_url() ?>page/cytoscape" target="_blank"><?php echo base_url() ?>page/cytoscape</a></td>
    </tr>
    <tr>
        <td align="right">公司信用查询_列表</td>
        <td><a href="<?php echo base_url() ?>page/company-credit-list" target="_blank"><?php echo base_url() ?>page/company-credit-list</a></td>
    </tr>
    <tr>
        <td align="right">公司信用查询_详细</td>
        <td><a href="<?php echo base_url() ?>page/company-credit-page" target="_blank"><?php echo base_url() ?>page/company-credit-page</a></td>
    </tr>
</table>
<table>
    <tr style="color: #f00;"><th align="right" width="200">标题</th><th align="left">管理员后台路由</th></tr>
    <tr>
        <td align="right">列表</td>
        <td><a href="<?php echo base_url() ?>admin/table" target="_blank"><?php echo base_url() ?>admin/table</a></td>
    </tr>
    <tr>
        <td align="right">登录页面</td>
        <td><a href="<?php echo base_url() ?>admin/login" target="_blank"><?php echo base_url() ?>admin/login</a></td>
    </tr>
</table>
</body>
</html>
