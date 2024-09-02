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
</html>