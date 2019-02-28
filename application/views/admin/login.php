<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head.php') ?>
</head>
<body class="page-body lockscreen-page">

  <div class="login-container">
  
    <div class="row">
    
      <div class="col-sm-7">
        
        <form role="form" id="lockscreen" class="lockcreen-form">
          
          <div class="user-thumb">
            <a href="#">
              <img src="/htdocs/admin/images/logo-collapsed@2x.png" class="img-responsive img-circle" />
            </a>
          </div>
          
          <div class="form-group">
            <h3>欢迎登录官网管理员后台!</h3>
            <p>Enter your username and password to access the admin.</p>
            
            <div class="input-group" style="width: 100%;">
              <input type="text" class="form-control input-dark" name="username" id="username" placeholder="用户名" />
            </div>
            <div class="input-group">
              <input type="password" class="form-control input-dark" name="passwd" id="passwd" placeholder="密码" />
              <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">登录</button>
              </span>
            </div>
          </div>
          
        </form>
        
      </div>
      
    </div>
    
  </div>
  
  
  
<?php include_once('templete/pub_foot.php') ?>

</body>
</html>