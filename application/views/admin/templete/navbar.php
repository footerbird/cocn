<!-- User Info, Notifications and Menu Bar -->
<nav class="navbar user-info-navbar" role="navigation">
  
  <!-- Left links for user info navbar -->
  <ul class="user-info-menu left-links list-inline list-unstyled">
    
    <li class="hidden-sm hidden-xs">
      <a href="#" data-toggle="sidebar">
        <i class="fa-bars"></i>
      </a>
    </li>
    
    <li class="dropdown hover-line">
      <a href="<?php echo base_url() ?>admin/message">
        <i class="fa-envelope-o"></i>
        <span class="badge badge-green">15</span>
      </a>
    </li>
    
    <li class="dropdown hover-line">
      <a href="<?php echo base_url() ?>admin/inform">
        <i class="fa-bell-o"></i>
        <span class="badge badge-purple">7</span>
      </a>
    </li>
    
  </ul>
  
  
  <!-- Right links for user info navbar -->
  <ul class="user-info-menu right-links list-inline list-unstyled">
    
    <li class="dropdown user-profile">
      <a href="#" data-toggle="dropdown">
        <img src="/htdocs/admin/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
        <span>
          Arlind Nushi
          <i class="fa-angle-down"></i>
        </span>
      </a>
      
      <ul class="dropdown-menu user-profile-menu list-unstyled">
        <li>
          <a href="<?php echo base_url() ?>admin/authority">
            <i class="fa-wrench"></i>权限管理
          </a>
        </li>
        <li>
          <a href="<?php echo base_url() ?>admin/member">
            <i class="fa-user"></i>用户管理
          </a>
        </li>
        <li class="last">
          <a href="<?php echo base_url() ?>admin/login">
            <i class="fa-lock"></i>退出登录
          </a>
        </li>
      </ul>
    </li>
    
  </ul>
  
</nav>