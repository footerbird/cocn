<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
<div class="sidebar-menu toggle-others fixed">
  
  <div class="sidebar-menu-inner">  
    
    <header class="logo-env">
      
      <!-- logo -->
      <div class="logo">
        <a href="<?php echo base_url() ?>admin/table" class="logo-expanded">
          <img src="/htdocs/admin/images/logo@2x.png?<?php echo CACHE_TIME; ?>" width="80" alt="" />
        </a>
        
        <a href="<?php echo base_url() ?>admin/table" class="logo-collapsed">
          <img src="/htdocs/admin/images/logo-collapsed@2x.png?<?php echo CACHE_TIME; ?>" width="40" alt="" />
        </a>
      </div>
      
      <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
      <div class="mobile-menu-toggle visible-xs">
        <a href="#" data-toggle="mobile-menu">
          <i class="fa-bars"></i>
        </a>
      </div>
      
    </header>
        
    
        
    <ul id="main-menu" class="main-menu">
      <!-- add class "multiple-expanded" to allow multiple submenus to open -->
      <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
      <li class="active opened active">
        <a href="<?php echo base_url() ?>admin/table">
          <i class="linecons-database"></i>
          <span class="title">列表</span>
        </a>
        <ul>
          <li class="active">
            <a href="tables-basic.html">
              <span class="title">订单列表</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
        
  </div>
  
</div>