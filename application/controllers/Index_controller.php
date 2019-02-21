<?php
class Index_controller extends CI_Controller {
    
    public function index(){//高保路由
        
        $this->load->view('routes');
        
    }
    
    public function page($page){//高保页面
        
        $this->load->view($page);
        
    }
    
}
?>