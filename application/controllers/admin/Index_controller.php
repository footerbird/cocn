<?php
class Index_controller extends CI_Controller {
    
    public function page($page){//高保页面
        
        $this->load->view('admin/'.$page);
        
    }
    
    public function uploadImage(){//dropzone.js图片上传检测
        
        function uploadFile($fileInfo,$uploadPath = 'uploads/images/temp',$flag=true,$allowExt=array('jpeg','jpg','gif','png','JPEG','JPG','GIF','PNG'),$maxSize = 10485760){
            // 判断错误号
            if ($fileInfo ['error'] > 0) {
                switch ($fileInfo ['error']) {
                    case 1 :
                        $mes = '上传文件超过了PHP配置文件中upload_max_filesize选项的值';
                        break;
                    case 2 :
                        $mes = '超过了表单MAX_FILE_SIZE限制的大小';
                        break;
                    case 3 :
                        $mes = '文件部分被上传';
                        break;
                    case 4 :
                        $mes = '没有选择上传文件';
                        break;
                    case 6 :
                        $mes = '没有找到临时目录';
                        break;
                    case 7 :
                    case 8 :
                        $mes = '系统错误';
                        break;
                }
                echo ( $mes );
                return false;
            }
            $ext = pathinfo ( $fileInfo ['name'], PATHINFO_EXTENSION );
            if(!is_array($allowExt)){
                exit('系统错误');
            }
            // 检测上传文件的类型
            if (! in_array ( $ext, $allowExt )) {
                exit ( '非法文件类型' );
            }
            // 检测上传文件大小是否符合规范
            if ($fileInfo ['size'] > $maxSize) {
                exit ( '上传文件过大' );
            }
            //检测图片是否为真实的图片类型
            //$flag=true;	
            if($flag){
                if(!getimagesize($fileInfo['tmp_name'])){
                    exit('不是真实图片类型');
                }
            }
            // 检测文件是否是通过HTTP POST方式上传上来
            if (! is_uploaded_file ( $fileInfo ['tmp_name'] )) {
                exit ( '文件不是通过HTTP POST方式上传上来的' );
            }
            if (! file_exists ( $uploadPath )) {
                mkdir ( $uploadPath, 0777, true );
                chmod ( $uploadPath, 0777 );
            }
            $uniName = md5 ( uniqid ( microtime ( true ), true ) ) . '.' . $ext;
            $destination = $uploadPath . '/' . $uniName;
            
            //删除temp文件夹下的临时图片
            $dir=opendir($uploadPath);
            while ($item=readdir($dir)) {
                if($item!= "." && $item != ".."){
                    $imagePath=$uploadPath."/".$item;
                    unlink($imagePath);
                }
            }
            
            if (! @move_uploaded_file ( $fileInfo ['tmp_name'], $destination )) {
                exit ( '文件移动失败' );
            }
            
            //echo '文件上传成功';
            return array(
                'status'=>'success',
                'url'=>$destination,
                'name'=>$fileInfo['name'],
                'size'=>$fileInfo['size']
            );
        }
        
        $fileUpload = $_FILES['file'];
        $result = uploadFile($fileUpload);
        echo json_encode($result);

    }
    
    public function uploadFile(){//dropzone.js文件上传检测
        
        function uploadFile($fileInfo,$uploadPath = 'uploads/files/temp',$maxSize = 10485760){
            // 判断错误号
            if ($fileInfo ['error'] > 0) {
                switch ($fileInfo ['error']) {
                    case 1 :
                        $mes = '上传文件超过了PHP配置文件中upload_max_filesize选项的值';
                        break;
                    case 2 :
                        $mes = '超过了表单MAX_FILE_SIZE限制的大小';
                        break;
                    case 3 :
                        $mes = '文件部分被上传';
                        break;
                    case 4 :
                        $mes = '没有选择上传文件';
                        break;
                    case 6 :
                        $mes = '没有找到临时目录';
                        break;
                    case 7 :
                    case 8 :
                        $mes = '系统错误';
                        break;
                }
                echo ( $mes );
                return false;
            }
            $ext = pathinfo ( $fileInfo ['name'], PATHINFO_EXTENSION );
            // 检测上传文件大小是否符合规范
            if ($fileInfo ['size'] > $maxSize) {
                exit ( '上传文件过大' );
            }
            // 检测文件是否是通过HTTP POST方式上传上来
            if (! is_uploaded_file ( $fileInfo ['tmp_name'] )) {
                exit ( '文件不是通过HTTP POST方式上传上来的' );
            }
            if (! file_exists ( $uploadPath )) {
                mkdir ( $uploadPath, 0777, true );
                chmod ( $uploadPath, 0777 );
            }
            $uniName = md5 ( uniqid ( microtime ( true ), true ) ) . '.' . $ext;
            $destination = $uploadPath . '/' . $uniName;
            
            //删除temp文件夹下的临时图片
            $dir=opendir($uploadPath);
            while ($item=readdir($dir)) {
                if($item!= "." && $item != ".."){
                    $imagePath=$uploadPath."/".$item;
                    unlink($imagePath);
                }
            }
            
            if (! @move_uploaded_file ( $fileInfo ['tmp_name'], $destination )) {
                exit ( '文件移动失败' );
            }
            
            //echo '文件上传成功';
            return array(
                'status'=>'success',
                'url'=>$destination,
                'name'=>$fileInfo['name'],
                'size'=>$fileInfo['size']
            );
        }
        
        $fileUpload = $_FILES['file'];
        $result = uploadFile($fileUpload);
        echo json_encode($result);
    
    }
    
}
?>