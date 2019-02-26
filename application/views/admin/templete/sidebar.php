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
      <li>
        <a href="<?php echo base_url() ?>admin/console">
          <i class="linecons-desktop"></i>
          <span class="title">系统</span>
        </a>
        <ul>
          <li>
            <a href="<?php echo base_url() ?>admin/console">
              <span class="title">管理员主页</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>admin/email_set">
              <span class="title">邮件</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>admin/sms_set">
              <span class="title">短信</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>admin/param_set">
              <span class="title">短信</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="active opened active">
        <a href="<?php echo base_url() ?>admin/table">
          <i class="linecons-star"></i>
          <span class="title">会员</span>
        </a>
        <ul>
          <li class="active">
            <a href="<?php echo base_url() ?>admin/table">
              <span class="title">会员列表</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>admin/member_audit">
              <span class="title">会员审核</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>admin/human_reg">
              <span class="title">手工注册</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class="linecons-params"></i>
          <span class="title">机构和项目</span>
        </a>
        <ul>
          <li>
            <a href="#">
              <span class="title">机构列表</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="title">机构审核</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="title">手工添加</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="title">屏蔽词库</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="title">议价词库</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="title">敏感关键词</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class="linecons-database"></i>
          <span class="title">财务</span>
        </a>
        <ul>
          <li>
            <a href="#">
              <span class="title">充值记录</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="title">系统明细</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="title">用户明细</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="title">机构明细</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="title">冻结</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="title">手工充值</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="title">汇总报表</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
        
  </div>
  
</div>