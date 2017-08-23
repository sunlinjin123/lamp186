
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/gonggong/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/gonggong/custom-plugins/picklist/picklist.css" media="screen">
<link rel="stylesheet" type="text/css" href="/gonggong/plugins/select2/select2.css" media="screen">
<link rel="stylesheet" type="text/css" href="/gonggong/plugins/ibutton/jquery.ibutton.css" media="screen">
<link rel="stylesheet" type="text/css" href="/gonggong/plugins/cleditor/jquery.cleditor.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/gonggong/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/gonggong/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/gonggong/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/gonggong/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/gonggong/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/gonggong/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/gonggong/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/gonggong/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/gonggong/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/gonggong/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/gonggong/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css" href="/gonggong/css/ssssss.css">
<title>{{ Config::get('app.title') }}</title>

</head>

<body>

    <!-- Themer (Remove if not needed) -->  
    <div id="mws-themer">
        
        <div id="mws-themer-css-dialog">
            <form class="mws-form">
                <div class="mws-form-row">
                    <div class="mws-form-item">
                        <textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Themer End -->

    <!-- Header -->
    <div id="mws-header" class="clearfix">
    
        <!-- Logo Container -->
        <div id="mws-logo-container">
        
            <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
            <div id="mws-logo-wrap">
                <img src="/gonggong/images/mws-logo.png" alt="mws admin">
            </div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
            <!-- Notifications -->
            <div id="mws-user-notif" class="mws-dropdown-menu">
                <a href="/gonggong/#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                    <div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                            <li class="read">
                                <a href="/gonggong/#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="read">
                                <a href="/gonggong/#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="/gonggong/#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="/gonggong/#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
                            <a href="/gonggong/#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
                <a href="/gonggong/#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                    <div class="mws-dropdown-content">
                        <ul class="mws-messages">
                            <li class="read">
                                <a href="/gonggong/#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="read">
                                <a href="/gonggong/#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="/gonggong/#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="/gonggong/#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
                            <a href="/gonggong/#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
                <!-- User Photo -->
                <div id="mws-user-photo">
                    <img src="/gonggong/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, John Doe
                    </div>
                    <ul>
                        <li><a href="/gonggong/#">Profile</a></li>
                        <li><a href="/gonggong/#">Change Password</a></li>
                        <li><a href="/gonggong/index.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
        <!-- Necessary markup, do not remove -->
        <div id="mws-sidebar-stitch"></div>
        <div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <!-- Searchbox -->
            <div id="mws-searchbox" class="mws-inset">
                <form action="typography.html">
                    <input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                   
                    <li class="active">
                        <a href="/gonggong/#"><i class="icon-accessibility-2"></i>用户管理</a>
                        <ul>
                            <li><a href="/admin/user">用户列表</a></li>
                            <li><a href="/admin/user/create">用户添加</a></li>
                           
                        </ul>
                    </li>
                     <li class="active">
                        <a href="/gonggong/#"><i class="icon-accessibility-2"></i>商品分类管理</a>
                        <ul>
                            <li><a href="/admin/cate/index">商品主列表</a></li>
                            <li><a href="/admin/cate/add">商品分类添加</a></li>
                           
                        </ul>
                    </li>
                
                </ul>
            </div>
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
            <!-- Inner Container Start -->
            
            <div class="container">
             @section('content')   

               
             @show   
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
            <div id="mws-footer">
                Copyright Your Website 2012. All Rights Reserved.
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/gonggong/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/gonggong/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/gonggong/js/libs/jquery.placeholder.min.js"></script>
    <script src="/gonggong/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/gonggong/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/gonggong/jui/jquery-ui.custom.min.js"></script>
    <script src="/gonggong/jui/js/jquery.ui.touch-punch.js"></script>

    <script src="/gonggong/jui/js/globalize/globalize.js"></script>
    <script src="/gonggong/jui/js/globalize/cultures/globalize.culture.en-US.js"></script>

    <!-- Plugin Scripts -->
    <script src="/gonggong/custom-plugins/picklist/picklist.min.js"></script>
    <script src="/gonggong/plugins/autosize/jquery.autosize.min.js"></script>
    <script src="/gonggong/plugins/select2/select2.min.js"></script>
    <script src="/gonggong/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/gonggong/plugins/validate/jquery.validate-min.js"></script>
    <script src="/gonggong/plugins/ibutton/jquery.ibutton.min.js"></script>
    <script src="/gonggong/plugins/cleditor/jquery.cleditor.min.js"></script>
    <script src="/gonggong/plugins/cleditor/jquery.cleditor.table.min.js"></script>
    <script src="/gonggong/plugins/cleditor/jquery.cleditor.xhtml.min.js"></script>
    <script src="/gonggong/plugins/cleditor/jquery.cleditor.icon.min.js"></script>

    <!-- Core Script -->
    <script src="/gonggong/bootstrap/js/bootstrap.min.js"></script>
    <script src="/gonggong/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/gonggong/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/gonggong/js/demo/demo.formelements.js"></script>

</body>
</html>
