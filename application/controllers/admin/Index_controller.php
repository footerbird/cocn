<?php
class Index_controller extends CI_Controller {
    
    public function page($page){//高保页面
        
        $this->load->view('admin/'.$page);
        
    }
    
}
?>