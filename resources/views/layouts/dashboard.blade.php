<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Placement Portal Admin Panel</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href='{{url("admin/css/theme-default.css")}}' />
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>

    @yield('body')


        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src={{url("admin/js/plugins/jquery/jquery.min.js")}}></script>
        <script type="text/javascript" src={{url("admin/js/plugins/jquery/jquery-ui.min.js")}}></script>
        <script type="text/javascript" src={{url("admin/js/plugins/bootstrap/bootstrap.min.js")}}></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src={{url('admin/js/plugins/icheck/icheck.min.js')}}></script>        
        <script type="text/javascript" src={{url("admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js")}}></script>
        <script type="text/javascript" src={{url("admin/js/plugins/scrolltotop/scrolltopcontrol.js")}}></script>
        
        <script type="text/javascript" src={{url("admin/js/plugins/morris/raphael-min.js")}} ></script>
        <script type="text/javascript" src={{url("admin/js/plugins/morris/morris.min.js")}} ></script>       
        <script type="text/javascript" src={{url("admin/js/plugins/rickshaw/d3.v3.js")}} ></script>
        <script type="text/javascript" src={{url("admin/js/plugins/rickshaw/rickshaw.min.js")}} ></script>
        <script type='text/javascript' src={{url("admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}   ></script>
        <script type='text/javascript' src={{url("admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}    ></script>                
        <script type='text/javascript' src={{url("admin/js/plugins/bootstrap/bootstrap-datepicker.js")}}  ></script>                
        <script type="text/javascript" src={{url("admin/js/plugins/owl/owl.carousel.min.js")}}   ></script>                 
        
        <script type="text/javascript" src={{url("admin/js/plugins/moment.min.js")}} ></script>
        <script type="text/javascript" src={{url("admin/js/plugins/daterangepicker/daterangepicker.js")}}></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src={{url("admin/js/settings.js")}}></script>
        
        <script type="text/javascript" src={{url("admin/js/plugins.js")}}></script>        
        <script type="text/javascript"  src={{url("admin/js/actions.js")}}></script>
        
        <script type="text/javascript" src={{url("admin/js/demo_dashboard.js")}} ></script>
        <!-- END TEMPLATE -->
         <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src={{url("admin/js/plugins/icheck/icheck.min.js")}} ></script>
        <script type="text/javascript"  src={{url("admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js")}} ></script>
        
        <script type="text/javascript" src={{url("admin/js/plugins/datatables/jquery.dataTables.min.js")}}  ></script>
        <script type="text/javascript" src={{url("admin/js/plugins/tableexport/tableExport.js")}}  ></script>
    <script type="text/javascript" src={{url("admin/js/plugins/tableexport/jquery.base64.js")}} ></script>
    <script type="text/javascript" src={{url("admin/js/plugins/tableexport/html2canvas.js")}}></script>
    <script type="text/javascript" src={{url("admin/js/plugins/tableexport/jspdf/libs/sprintf.js")}}></script>
    <script type="text/javascript" src={{url("admin/js/plugins/tableexport/jspdf/jspdf.js")}}></script>
    <script type="text/javascript"  src={{url("admin/js/plugins/tableexport/jspdf/libs/base64.js")}} src=""></script>        
        <!-- END THIS PAGE PLUGINS-->  
    <!-- END SCRIPTS -->         
    </body>
</html>






