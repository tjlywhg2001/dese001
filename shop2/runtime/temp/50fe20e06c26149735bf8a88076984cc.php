<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:73:"C:\githaha\dese001\shop2\public/../application/admin\view\brand\edit.html";i:1524233299;s:65:"C:\githaha\dese001\shop2\application\admin\view\common\_meta.html";i:1524226803;s:63:"C:\githaha\dese001\shop2\application\admin\view\common\top.html";i:1524221733;s:64:"C:\githaha\dese001\shop2\application\admin\view\common\left.html";i:1524226041;s:66:"C:\githaha\dese001\shop2\application\admin\view\common\footer.html";i:1524223925;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/static/admin/style/demo.css" rel="stylesheet">
    <link href="/static/admin/style/typicons.css" rel="stylesheet">
    <link href="/static/admin/style/animate.css" rel="stylesheet">
    <style>
        .asdf{background: #559;}
        .page-sidebar::before{left: 0px; width: 224px;}
    </style>
    
</head>

<body>
	<!-- 头部 -->
	<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="/static/admin/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/static/admin/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
<!-- Page Sidebar Header-->
<div class="sidebar-header-wrapper">
    <input class="searchinput" type="text">
    <i class="searchicon fa fa-search"></i>
    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
</div>
<!-- /Page Sidebar Header -->
<!-- Sidebar Menu -->
<ul class="nav sidebar-menu">
    <!--Dashboard-->
    <li>
        <a href="#">
            <i class="menu-icon fa fa-film"></i>
            <span class="menu-text">ThinkPHP5视频教程</span>
            <i class="menu-expand"></i>
        </a>
    </li>
    <li>
        <a href="#">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">控制面板</span>
            <i class="menu-expand"></i>
        </a>
    </li>                        
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">文档</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"  style="display: block;">
            <li>
                <a href="">
                    <span class="menu-text">文章列表</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">系统</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu" style="display: block;">
            <li>
                <a href="">
                    <span class="menu-text">用户管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="menu-text">角色管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="menu-text">权限列表</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>
    </li>                        
</ul>
<!-- /Sidebar Menu -->
</div>

            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <a href="<?php echo url('Index/index'); ?>">系统</a>
                        </li>
                                            <li>
                            <a href="<?php echo url('Brand/lst'); ?>">用户管理</a>
                        </li>
                        <li class="active">添加用户</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增品牌</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="brand_id" value="<?php echo $brands['brand_id']; ?>">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">品牌名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="username" placeholder="" name="brand_name" required="" type="text" value="<?php echo $brands['brand_name']; ?>">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>


                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">品牌地址</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="username" placeholder="" name="brand_url" required="" type="text" value="<?php echo $brands['brand_url']; ?>">
                            </div>
                            <p class="help-block col-sm-4 red"></p>
                        </div>


                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">品牌描述</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="username" placeholder="" name="brand_description" required="" type="text" value="<?php echo $brands['brand_description']; ?>">
                            </div>
                            <p class="help-block col-sm-4 red"></p>
                        </div>


                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">品牌LOGO</label>
                            <div class="col-sm-6">
                                <input class="" id="username" name="brand_img" type="file" value="<?php echo $brands['brand_img']; ?>">
                                <?php if($brands['brand_img'] != ''): ?>
                                    <img src="/static/uploadss/<?php echo $brands['brand_img']; ?>" style="height: 30px">
                                <?php else: ?>
                                    暂无图片
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">品牌状态</label>
                            <div class="col-sm-6">
                                <div class="radio" style="float:left; padding-right: 10px;">
                                    <label>
                                        <input class="inverted colored-blue" value="1" name="brand_status" type="radio" <?php if($brands['brand_status'] == 1): ?> checked="checked" <?php endif; ?>>
                                        <span class="text">显示</span>
                                    </label>
                                </div>
                                <div class="radio" style="float:left">
                                    <label>
                                        <input class="inverted colored-blue" value="0" name="brand_status" type="radio" <?php if($brands['brand_status'] == 0): ?> checked="checked" <?php endif; ?>>
                                        <span class="text">隐藏</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
        <script src="/static/admin/style/jquery_002.js"></script>
    <script src="/static/admin/style/bootstrap.js"></script>
    <script src="/static/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="/static/admin/style/beyond.js"></script>

    

</body></html>