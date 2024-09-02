
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<html lang="en" class="" style="height: auto;"><head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>CHAT BOT - IOTI</title>
    <link rel="icon" href="http://localhost/chatbot_IOTI/uploads/1723637040_CHATBOT_IOTI.png" />
    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://localhost/chatbot_IOTI/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="http://localhost/chatbot_IOTI/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- DataTables -->
  <link rel="stylesheet" href="http://localhost/chatbot_IOTI/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="http://localhost/chatbot_IOTI/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="http://localhost/chatbot_IOTI/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="http://localhost/chatbot_IOTI/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="http://localhost/chatbot_IOTI/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="http://localhost/chatbot_IOTI/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="http://localhost/chatbot_IOTI/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/chatbot_IOTI/dist/css/adminlte.css">
    <link rel="stylesheet" href="http://localhost/chatbot_IOTI/dist/css/custom.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="http://localhost/chatbot_IOTI/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="http://localhost/chatbot_IOTI/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="http://localhost/chatbot_IOTI/plugins/summernote/summernote-bs4.min.css">
     <!-- SweetAlert2 -->
  <link rel="stylesheet" href="http://localhost/chatbot_IOTI/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <style type="text/css">/* Chart.js */
      @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
    </style>

     <!-- jQuery -->
    <script src="http://localhost/chatbot_IOTI/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="http://localhost/chatbot_IOTI/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="http://localhost/chatbot_IOTI/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="http://localhost/chatbot_IOTI/plugins/toastr/toastr.min.js"></script>
    <script>
        var _base_url_ = 'http://localhost/chatbot_IOTI/';
    </script>
    <script src="http://localhost/chatbot_IOTI/dist/js/script.js"></script>
    <!--?xml version="1.0" encoding="utf-8"?-->
<script>
 $(function(){
   var code = (Math.random() + 1).toString(36).substring(2);
   var data = $('<div>')
   data.attr('id',code)
   data.css('top','4.5em')
   data.css('position','fixed')
   data.css('right','-1.5em')
   data.css('width','auto')
   data.css('opacity','.5')
   data.css('z-index','9999999')
   data.find('a').css('color','#7e7e7e')
   data.find('a').css('font-weight','bolder')
   data.find('a').css('background','#ebebeb')
   data.find('a').css('padding','1em 3em')
   data.find('a').css('border-radius','50px')
   data.find('a').css('text-decoration','unset')
   data.find('a').css('font-size','11px')
   $('body').append(data)
   var is_right = true
   data.find('a').on('mouseover', function(){
    if(is_right){
      data.css('right','unset')
      data.css('left','-1.5em')
      is_right = false
    }else{
      data.css('left','unset')
      data.css('right','-1.5em')
      is_right = true
    }
   })
 })</script>
  </head>    <body class="sidebar-mini layout-fixed control-sidebar-slide-open layout-navbar-fixed sidebar-mini-md sidebar-mini-xs text-sm" data-new-gr-c-s-check-loaded="14.991.0" data-gr-ext-installed="" style="height: auto;">
    <div class="wrapper">
     <style>
  .user-img{
        position: absolute;
        height: 27px;
        width: 27px;
        object-fit: cover;
        left: -7%;
        top: -12%;
  }
  .btn-rounded{
        border-radius: 50px;
  }
</style>
<!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-light shadow text-sm">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="http://localhost/chatbot_IOTI/" class="nav-link">CHAT BOT - IOTI - Admin</a>
          </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li> -->
          <!-- Messages Dropdown Menu -->
          <li class="nav-item">
            <div class="btn-group nav-link">
                  <button type="button" class="btn btn-rounded badge badge-light dropdown-toggle dropdown-icon" data-toggle="dropdown">
                    <span><img src="http://localhost/chatbot_IOTI/uploads/avatars/1.png?v=1649834664" class="img-circle elevation-2 user-img" alt="User Image"></span>
                    <span class="ml-3">Adminstrator Admin</span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="http://localhost/chatbot_IOTI/admin/?page=user"><span class="fa fa-user"></span> My Account</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="http://localhost/chatbot_IOTI//classes/Login.php?f=logout"><span class="fas fa-sign-out-alt"></span> Logout</a>
                  </div>
              </div>
          </li>
          <li class="nav-item">
            
          </li>
         <!--  <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.navbar -->     <style>
  aside.main-sidebar{
    background-image:url('http://localhost/chatbot_IOTI/uploads/cover.png') !important;
    background-size:cover;
    background-repeat:no-repeat;
    background-position:center center;
  }
</style>
<!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-no-expand">
        <!-- Brand Logo -->
        <a href="http://localhost/chatbot_IOTI/admin" class="brand-link bg-gradient-navy text-sm">
        <img src="http://localhost/chatbot_IOTI/uploads/1723637040_CHATBOT_IOTI.png" alt="Store Logo" class="brand-image img-circle elevation-3" style="opacity: .8;width: 1.5rem;height: 1.5rem;max-height: unset">
        <span class="brand-text font-weight-light">IOTI </span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
          <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
          </div>
          <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
          </div>
          <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 646px;"></div>
          <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
              <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                <!-- Sidebar user panel (optional) -->
                <div class="clearfix"></div>
                <!-- Sidebar Menu -->
                <nav class="mt-4">
                   <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact nav-flat nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item dropdown">
                      <a href="./" class="nav-link nav-home">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Dashboard
                        </p>
                      </a>
                    </li> 
                    <li class="nav-item dropdown">
                      <a href="http://localhost/chatbot_IOTI/admin/?page=responses" class="nav-link nav-responses">
                        <i class="nav-icon fas fa-comment-dots"></i>
                        <p>
                          Responses
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="http://localhost/chatbot_IOTI/admin/?page=reports" class="nav-link nav-reports">
                        <i class="nav-icon far fa-circle"></i>
                        <p>
                          Report
                        </p>
                      </a>
                    </li>
                                        <li class="nav-header">Maintenance</li>
                    <li class="nav-item dropdown">
                      <a href="http://localhost/chatbot_IOTI/admin/?page=user/list" class="nav-link nav-user/list">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                          User List
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="http://localhost/chatbot_IOTI/admin/?page=system_info" class="nav-link nav-system_info">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                          Settings
                        </p>
                      </a>
                    </li>
                                      </ul>
                </nav>
                <!-- /.sidebar-menu -->
              </div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="height: 55.017%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar-corner"></div>
        </div>
        <!-- /.sidebar -->
      </aside>
      <script>
    $(document).ready(function(){
      var page = 'responses/manage_response';
      var s = '';
      page = page.replace(/\//g,'_');
      console.log(page)

      if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
        if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
          $('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
        }
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

      }
      $('.nav-link.active').addClass('bg-gradient-navy')
    })
  </script>           
           <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper  pt-3" style="min-height: 567.854px;">
     
        <!-- Main content -->
        <section class="content  text-dark">
          <div class="container-fluid">
            <div class="content px-2 py-5 bg-gradient-primary">
	<h4 class="my-3"><b>Update Response Details</b></h4>
</div>
<div class="row mt-n5 justify-content-center">
	<div class="col-lg-8 col-md-10 col-sm-12 col-xs-12">
		<div class="card rounded-0 shadow">
			<div class="card-body">
				<div class="container-fluid">
					<form action="" id="response-form">
						<input type="hidden" name ="id" value="73">
						<div class="form-group">
							<label for="response" class="control-label">Description</label>
							<textarea type="text" name="response" id="response" class="form-control form-control-sm rounded-0" required><p>Infrastruktur Operasional Teknologi Informasi</p><p><br></p></textarea>
						</div>
						<div class="form-group">
							<label for="status" class="control-label">Status</label>
							<select name="status" id="status" class="form-control form-control-sm rounded-0" required>
								<option value="1" selected>Active</option>
								<option value="0" >Inactive</option>
							</select>
						</div>
						<div class="clear-fix mt-3"></div>
						<div class="row bg-gradient-primary">
							<div class="col-11 border m-0 px-2 py-1">Keyword</div>
							<div class="col-1 border m-0 px-2 py-1">Action</div>
						</div>
						<div id="keyword-list" class="mb-3">
																					<div class="row bg-gradient-light align-items-center kw-item" style="height:4.5em">
								<div class="col-11 border m-0 px-2 py-1 h-100">
									<textarea name="keyword[]" cols="30" rows="2" class="form-control form-control-sm rounded-0" required="required" style="resize:none">apa itu IOTI?</textarea>
								</div>
								<div class="col-1 border m-0 px-2 py-1 text-center align-items-center h-100 justify-content-center d-flex">
									<div class="col-auto">
										<button class="btn-outline-danger btn btn-sm rounded-0 rem-item" type="button"><i class="fa fa-times"></i></button>
									</div>
								</div>
							</div>
																				</div>
						<div class="text-right">
							<button class="btn btn-primary btn-sm rounded-0" type="button" id="add_kw_item"><i class="far fa-plus-square mb-n2 mr-1"></i>Add Keyword Item</button>
						</div>
						<div class="clear-fix mt-3"></div>
						<div class="row bg-gradient-primary">
							<div class="col-11 border m-0 px-2 py-1">Suggestion</div>
							<div class="col-1 border m-0 px-2 py-1">Action</div>
						</div>
						<div id="suggestion-list" class="mb-3">
																					<div class="row bg-gradient-light align-items-center sg-item" style="height:4.5em">
								<div class="col-11 border m-0 px-2 py-1 h-100">
									<textarea name="suggestion[]" cols="30" rows="2" class="form-control form-control-sm rounded-0" style="resize:none">IOTI</textarea>
								</div>
								<div class="col-1 border m-0 px-2 py-1 text-center align-items-center h-100 justify-content-center d-flex">
									<div class="col-auto">
										<button class="btn-outline-danger btn btn-sm rounded-0 rem-item" type="button"><i class="fa fa-times"></i></button>
									</div>
								</div>
							</div>
																					<div class="row bg-gradient-light align-items-center sg-item" style="height:4.5em">
								<div class="col-11 border m-0 px-2 py-1 h-100">
									<textarea name="suggestion[]" cols="30" rows="2" class="form-control form-control-sm rounded-0" style="resize:none"></textarea>
								</div>
								<div class="col-1 border m-0 px-2 py-1 text-center align-items-center h-100 justify-content-center d-flex">
									<div class="col-auto">
										<button class="btn-outline-danger btn btn-sm rounded-0 rem-item" type="button"><i class="fa fa-times"></i></button>
									</div>
								</div>
							</div>
						</div>
						<div class="text-right">
							<button class="btn btn-primary btn-sm rounded-0" type="button" id="add_suggestion_item"><i class="far fa-plus-square mb-n2 mr-1"></i>Add Suggestion Item</button>
						</div>
					</form>
				</div>
			</div>
			<div class="card-footer py-1 text-center">
				<button class="btn btn-sm btn-primary bg-gradient-primary rounded-0" form="response-form"><i class="fa fa-save"></i> Save</button>
				<a class="btn btn-sm btn-light bg-gradient-light border rounded-0" href="./?page=responses"><i class="fa fa-angle-left"></i> Cancel</a>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('#keyword-list .kw-item').find('.rem-item').click(function(){
			if($('#keyword-list .kw-item').length > 1){
				$(this).closest('.kw-item').remove()
			}else{
				$(this).closest('.kw-item').find('[name="keyword[]"]').val('').focus()
			}
		})
		$('#suggestion-list .sg-item').find('.rem-item').click(function(){
			if($('#suggestion-list .sg-item').length > 1){
				$(this).closest('.sg-item').remove()
			}else{
				$(this).closest('.sg-item').find('[name="suggestion[]"]').val('').focus()
			}
		})
		$('#add_kw_item').click(function(){
			var item = $('#keyword-list .kw-item:nth-child(1)').clone()
			item.find('[name="keyword[]"]').val('').removeClass('border-danger')
			$('#keyword-list').append(item)
			item.find('[name="keyword[]"]').focus()
			item.find('.rem-item').click(function(){
				if($('#keyword-list .kw-item').length > 1){
					item.remove()
				}else{
					item.find('[name="keyword[]"]').val('').focus()
				}
			})
		})
		$('#add_suggestion_item').click(function(){
			var item = $('#suggestion-list .sg-item:nth-child(1)').clone()
			item.find('[name="suggestion[]"]').val('').removeClass('border-danger')
			$('#suggestion-list').append(item)
			item.find('[name="suggestion[]"]').focus()
			item.find('.rem-item').click(function(){
				if($('#suggestion-list .sg-item').length > 1){
					item.remove()
				}else{
					item.find('[name="suggestion[]"]').val('').focus()
				}
			})
		})
		$('#response').summernote({
			height: "15em",
			toolbar: [
				[ 'style', [ 'style' ] ],
				[ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
				[ 'fontname', [ 'fontname' ] ],
				[ 'fontsize', [ 'fontsize' ] ],
				[ 'color', [ 'color' ] ],
				[ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
				[ 'table', [ 'table' ] ],
				['insert', ['link', 'picture', 'video']],
				[ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
			]
		})
		$('#response-form').submit(function(e){
			e.preventDefault();
            var _this = $(this)
			 $('.err-msg').remove();
			 $('.border-danger').removeClass('border-danger')
			 var el = $('<div>')
				 el.addClass("alert alert-danger err-msg")
				 el.hide()
			start_loader();
			$.ajax({
				url:_base_url_+"classes/Master.php?f=save_response",
				data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
				error:err=>{
					console.log(err)
					alert_toast("An error occured",'error');
					end_loader();
				},
				success:function(resp){
					if(typeof resp =='object' && resp.status == 'success'){
						location.href = './?page=responses/view_response&id='+resp.rid
					}else if(resp.status == 'failed' && !!resp.msg){
						if('kw_index' in resp){
							$('[name="keyword[]"]').eq(resp.kw_index).addClass('border-danger').focus()
							$('[name="keyword[]"]').eq(resp.kw_index)[0].setCustomValidity(resp.msg)
							$('[name="keyword[]"]').eq(resp.kw_index)[0].reportValidity()
							$('[name="keyword[]"]').eq(resp.kw_index).on('input', function(){
								$(this).removeClass('border-danger')
								$(this)[0].setCustomValidity("")
							})
						}else{
                            el.text(resp.msg)
                            _this.prepend(el)
                            el.show('slow')
                            $("html, body,.modal").scrollTop(0);
						}
                    }else{
						alert_toast("An error occured",'error');
					}
					end_loader()
				}
			})
		})

	})
</script>          </div>
        </section>
        <!-- /.content -->
  <div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-right"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
      </div>
      <!-- /.content-wrapper -->
      <script>
  $(document).ready(function(){
     window.viewer_modal = function($src = ''){
      start_loader()
      var t = $src.split('.')
      t = t[1]
      if(t =='mp4'){
        var view = $("<video src='"+$src+"' controls autoplay></video>")
      }else{
        var view = $("<img src='"+$src+"' />")
      }
      $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
      $('#viewer_modal .modal-content').append(view)
      $('#viewer_modal').modal({
              show:true,
              backdrop:'static',
              keyboard:false,
              focus:true
            })
            end_loader()  

  }
    window.uni_modal = function($title = '' , $url='',$size=""){
        start_loader()
        $.ajax({
            url:$url,
            error:err=>{
                console.log()
                alert("An error occured")
            },
            success:function(resp){
                if(resp){
                    $('#uni_modal .modal-title').html($title)
                    $('#uni_modal .modal-body').html(resp)
                    if($size != ''){
                        $('#uni_modal .modal-dialog').addClass($size+'  modal-dialog-centered')
                    }else{
                        $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
                    }
                    $('#uni_modal').modal({
                      show:true,
                      backdrop:'static',
                      keyboard:false,
                      focus:true
                    })
                    end_loader()
                }
            }
        })
    }
    window._conf = function($msg='',$func='',$params = []){
       $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
       $('#confirm_modal .modal-body').html($msg)
       $('#confirm_modal').modal('show')
    }
  })
</script>
<footer class="main-footer text-sm">
        <strong>Copyright © 2024. 
        <!-- <a href=""></a> -->
        </strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>IOTI (by: <a>Fajar Aqillah</a>)</b> 
        </div>
      </footer>
    <div id="sidebar-overlay"></div></div>
    <!-- ./wrapper -->
   
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="http://localhost/chatbot_IOTI/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="http://localhost/chatbot_IOTI/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="http://localhost/chatbot_IOTI/plugins/sparklines/sparkline.js"></script>
    <!-- Select2 -->
    <script src="http://localhost/chatbot_IOTI/plugins/select2/js/select2.full.min.js"></script>
    <!-- JQVMap -->
    <script src="http://localhost/chatbot_IOTI/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="http://localhost/chatbot_IOTI/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="http://localhost/chatbot_IOTI/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="http://localhost/chatbot_IOTI/plugins/moment/moment.min.js"></script>
    <script src="http://localhost/chatbot_IOTI/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="http://localhost/chatbot_IOTI/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="http://localhost/chatbot_IOTI/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="http://localhost/chatbot_IOTI/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="http://localhost/chatbot_IOTI/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="http://localhost/chatbot_IOTI/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="http://localhost/chatbot_IOTI/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- overlayScrollbars -->
    <!-- <script src="http://localhost/chatbot_IOTI/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="http://localhost/chatbot_IOTI/dist/js/adminlte.js"></script>
</body>
</html>  </body>
</html>
