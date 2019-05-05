<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head.php') ?>
<link rel="stylesheet" href="/htdocs/admin/js/dropzone/css/dropzone.css?<?php echo CACHE_TIME; ?>">
</head>
<body class="page-body">

  <div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
      
    <?php include_once('templete/sidebar.php') ?>
    
    <div class="main-content">
      
      <?php include_once('templete/navbar.php') ?>
      
      <div class="page-title">
        
        <div class="title-env">
          <h1 class="title">文件上传</h1>
          <p class="description">文件上传的详细介绍巴拉巴拉</p>
        </div>
        
          <div class="breadcrumb-env">
          
            <ol class="breadcrumb bc-1">
              <li><a href="<?php echo base_url() ?>admin/console"><i class="fa-home"></i>首页</a></li>
              <li><a href="<?php echo base_url() ?>admin/upload">文件</a></li>
              <li class="active"><strong>文件上传</strong></li>
            </ol>
                
        </div>
          
      </div>
      <!-- Table Styles -->
      <div class="row">
        <div class="col-md-12">
        
          <div class="panel panel-default">
            
            <div class="panel-body">
              
              <br />
              <div class="row">
                <div class="col-sm-3 text-center">
                
                  <div id="advancedDropzone" class="droppable-area">
                    Drop Files Here
                  </div>
                  
                </div>
                <div class="col-sm-9">
                  
                  <table class="table table-bordered table-striped" id="example-dropzone-filetable">
                    <thead>
                      <tr>
                        <th width="1%" class="text-center">#</th>
                        <th width="50%">Name</th>
                        <th width="20%">Upload Progress</th>
                        <th>Size</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="5">Files list will appear here</td>
                      </tr>
                    </tbody>
                  </table>
                  
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
<script src="/htdocs/admin/js/dropzone/dropzone.min.js?<?php echo CACHE_TIME; ?>"></script>
<script type="text/javascript">
$(function(){
    var i = 1,
    $example_dropzone_filetable = $("#example-dropzone-filetable"),
    example_dropzone = $("#advancedDropzone").dropzone({
        url: '<?php echo base_url() ?>admin/Index_controller/uploadFile',
        
        // Events
        addedfile: function(file)
        {
          if(i == 1)
          {
            $example_dropzone_filetable.find('tbody').html('');
          }
          
          var size = parseInt(file.size/1024, 10);
          size = size < 1024 ? (size + " KB") : (parseInt(size/1024, 10) + " MB");
          
          var	$el = $('<tr>\
                  <td class="text-center">'+(i++)+'</td>\
                  <td>'+file.name+'</td>\
                  <td><div class="progress progress-striped"><div class="progress-bar progress-bar-warning"></div></div></td>\
                  <td>'+size+'</td>\
                  <td>Uploading...</td>\
                </tr>');
          
          $example_dropzone_filetable.find('tbody').append($el);
          file.fileEntryTd = $el;
          file.progressBar = $el.find('.progress-bar');
        },
        
        uploadprogress: function(file, progress, bytesSent)
        {
          file.progressBar.width(progress + '%');
        },
        
        success: function(file)
        {
          file.fileEntryTd.find('td:last').html('<span class="text-success">Uploaded</span>');
          file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-success');
        },
        
        error: function(file)
        {
          file.fileEntryTd.find('td:last').html('<span class="text-danger">Failed</span>');
          file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-red');
        }
    });
    
    $("#advancedDropzone").css({
      minHeight: 200
    });
})
</script>
</body>
</html>