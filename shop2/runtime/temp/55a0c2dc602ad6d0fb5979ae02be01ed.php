<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:68:"C:\dese001\shop2\public/../application/admin\view\category\edit.html";i:1524757450;s:57:"C:\dese001\shop2\application\admin\view\common\_meta.html";i:1524741633;s:55:"C:\dese001\shop2\application\admin\view\common\top.html";i:1524741633;s:56:"C:\dese001\shop2\application\admin\view\common\left.html";i:1524741633;s:58:"C:\dese001\shop2\application\admin\view\common\footer.html";i:1524741633;}*/ ?>
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
            <span class="menu-text">栏目模块</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"  style="display: block;">
            <li>
                <a href="<?php echo url('Category/lst'); ?>">
                    <span class="menu-text">栏目分类</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('Category/lst'); ?>">
                    <span class="menu-text">文章分类</span>
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
                            <a href="<?php echo url('category/lst'); ?>">分类管理</a>
                        </li>
                        <li class="active">添加分类</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">编辑分类</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="cate_id" value="<?php echo $categorys['cate_id']; ?>">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">上级分类</label>
                            <div class="col-sm-6">
                                <select name="cate_pid">
                                    <?php if(is_array($catelist) || $catelist instanceof \think\Collection || $catelist instanceof \think\Paginator): $i = 0; $__LIST__ = $catelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$categoryd): $mod = ($i % 2 );++$i;?>
                                    <option <?php if($categoryd['cate_pid'] == $categoryd['cate_id'] && $categoryd['cate_pid'] != 0): ?>
                                    selected="selected" value="<?php echo $categoryd['cate_id']; ?>">

                                    <?php elseif($categoryd['cate_pid'] == 0): ?>
                                    selected="selected" value="<?php echo $categoryd['cate_id']; ?>">
                                    <?php else: ?>
                                    style="display: none" value="<?php echo $categoryd['cate_id']; ?>">
                                    <?php endif; if($categoryd['cate_pid'] != 0): ?>
                                     |
                                    <?php endif; ?>
                                        <?php echo str_repeat('-',$categoryd['lever']*5) ?>
                                        <?php echo $categoryd['cate_name']; ?>
                                    </option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>


                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">栏目名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="username" placeholder="" name="cate_name" type="text" required="" value="<?php echo $categorys['cate_name']; ?>" >
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>


                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">分类类型</label>
                            <div class="col-sm-6">
                                <div class="radio" style="float:left; padding-right: 10px;">
                                    <label>
                                        <input class="inverted colored-blue" value="1" name="cate_type" type="radio" <?php if($categorys['cate_type'] == 1): ?> checked="checked" <?php endif; ?>>
                                        <span class="text">系统分类</span>
                                    </label>
                                </div>
                                <div class="radio" style="float:left; padding-right: 10px;">
                                    <label>
                                        <input class="inverted colored-blue" value="2" name="cate_type" type="radio" <?php if($categorys['cate_type'] == 2): ?> checked="checked" <?php endif; ?>>
                                        <span class="text">帮助分类</span>
                                    </label>
                                </div>
                                <div class="radio" style="float:left; padding-right: 10px;">
                                    <label>
                                        <input class="inverted colored-blue" value="3" name="cate_type" type="radio" <?php if($categorys['cate_type'] == 3): ?> checked="checked" <?php endif; ?>>
                                        <span class="text">网店帮助</span>
                                    </label>
                                </div>
                                <div class="radio" style="float:left; padding-right: 10px;">
                                    <label>
                                        <input class="inverted colored-blue" value="4" name="cate_type" type="radio" <?php if($categorys['cate_type'] == 4): ?> checked="checked" <?php endif; ?>>
                                        <span class="text">网店信息</span>
                                    </label>
                                </div>
                                <div class="radio" style="float:left; padding-right: 10px;">
                                    <label>
                                        <input class="inverted colored-blue" value="5" name="cate_type" type="radio" <?php if($categorys['cate_type'] == 5): ?> checked="checked" <?php endif; ?>>
                                        <span class="text">普通分类</span>
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">栏目关键词</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="username" placeholder="" name="cate_keywords" value="<?php echo $categorys['cate_keywords']; ?>" type="text">
                            </div>
                            <p class="help-block col-sm-4 red"></p>
                        </div>


                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">栏目描述</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" id="username" placeholder="" name="cate_description" value="<?php echo $categorys['cate_description']; ?>" type="text"></textarea>
                            </div>
                            <p class="help-block col-sm-4 red"></p>
                        </div>


<!--                         <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">品牌LOGO</label>
                            <div class="col-sm-6">
                                <input class="" id="username" name="brand_img" type="file">
                            </div>
                        </div>

 -->
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">显示导航</label>
                            <div class="col-sm-6">
                                <div class="radio" style="float:left; padding-right: 10px;">
                                    <label>
                                        <input class="inverted colored-blue" checked="checked" value="1" name="cate_shownav" type="radio" <?php if($categorys['cate_shownav'] == 1): ?> checked="checked" <?php endif; ?>>
                                        <span class="text">是</span>
                                    </label>
                                </div>
                                <div class="radio" style="float:left">
                                    <label>
                                        <input class="inverted colored-blue" value="0" name="cate_shownav" type="radio" <?php if($categorys['cate_shownav'] == 0): ?> checked="checked" <?php endif; ?>>
                                        <span class="text">否</span>
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