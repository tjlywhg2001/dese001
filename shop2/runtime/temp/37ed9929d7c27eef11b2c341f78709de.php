<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:74:"H:\gitfiles\dese001\shop2\public/../application/admin\view\config\add.html";i:1526031940;s:66:"H:\gitfiles\dese001\shop2\application\admin\view\common\_meta.html";i:1525222954;s:64:"H:\gitfiles\dese001\shop2\application\admin\view\common\top.html";i:1524733303;s:65:"H:\gitfiles\dese001\shop2\application\admin\view\common\left.html";i:1525850320;s:67:"H:\gitfiles\dese001\shop2\application\admin\view\common\footer.html";i:1525222954;}*/ ?>
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
    <script src="/static/plus/ueditor/ueditor.config.js"></script>
    <script src="/static/plus/ueditor/ueditor.all.min.js"></script>
    <script src="/static/plus/ueditor/lang/zh-cn/zh-cn.js"></script>
    <style>
        .asdf{background: #559;}
        .page-sidebar::before{left: 0px; width: 224px;}
    </style>
    
</head>

<body onload="myfunction()">
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
<style>
ul>li{
    box-shadow: none;
}
</style>
<ul class="nav sidebar-menu">
    <!--Dashboard-->
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">商品管理</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"  style="display: block;">
<!--             <li>
                <a href="<?php echo url('config/configlst'); ?>">
                    <span class="menu-text">商品列表</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('config/lst'); ?>">
                    <span class="menu-text">添加商品</span>
                    <i class="menu-expand"></i>
                </a>
            </li> -->
            <li>
                <a href="<?php echo url('brand/lst'); ?>">
                    <span class="menu-text">商品品牌</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('cates/lst'); ?>">
                    <span class="menu-text">商品分类</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('type/lst'); ?>">
                    <span class="menu-text">商品类型</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
<!--             <li>
                <a href="<?php echo url('config/lst'); ?>">
                    <span class="menu-text">商品回收站</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
 -->        </ul>
    </li>
<!--     <li>
        <a href="#">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">控制面板</span>
            <i class="menu-expand"></i>
        </a>
    </li>                        
 -->    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">栏目模块</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"  style="display: block;">
            <li>
                <a href="<?php echo url('Category/lst'); ?>">
                    <span class="menu-text">栏目管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">文章模块</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"  style="display: block;">
            <li>
                <a href="<?php echo url('arti/lst'); ?>">
                    <span class="menu-text">文章管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('arti/imglist'); ?>">
                    <span class="menu-text">图片管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">链接模块</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"  style="display: block;">
            <li>
                <a href="<?php echo url('link/lst'); ?>">
                    <span class="menu-text">链接管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">配置模块</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"  style="display: block;">
            <li>
                <a href="<?php echo url('config/configlst'); ?>">
                    <span class="menu-text">配置项</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('config/lst'); ?>">
                    <span class="menu-text">配置管理</span>
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
                <a href="<?php echo url('attr/lst'); ?>">
                    <span class="menu-text">商品属性管理</span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>
    </li>                        
<!--     <li>
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
 --></ul>
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
                            <a href="<?php echo url('config/lst'); ?>">配置管理</a>
                        </li>
                        <li class="active">添加配置</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增配置</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">英文名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="username" placeholder="" name="config_ename" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>


                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">中文名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="username" placeholder="" name="config_cname" type="text">
                            </div>
                            <p class="help-block col-sm-4 red"></p>
                        </div>


                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">表单类型</label>
                            <div class="col-sm-6 radiooption">
                                <div class="radio" style="float:left; padding-right: 10px;">
                                    <label>
                                        <input class="inverted colored-blue" value="input" name="config_formtype" type="radio" checked="checked">
                                        <span class="text">input</span>
                                    </label>
                                </div>
                                <div class="radio" style="float:left; padding-right: 10px;">
                                    <label>
                                        <input class="inverted colored-blue" value="radio" name="config_formtype" type="radio">
                                        <span class="text">radio</span>
                                    </label>
                                </div>
                                <div class="radio" style="float:left; padding-right: 10px;">
                                    <label>
                                        <input class="inverted colored-blue" value="checked" name="config_formtype" type="radio">
                                        <span class="text">checked</span>
                                    </label>
                                </div>
                                <div class="radio" style="float:left; padding-right: 10px;">
                                    <label>
                                        <input class="inverted colored-blue" value="textarea" name="config_formtype" type="radio">
                                        <span class="text">textarea</span>
                                    </label>
                                </div>
                                <div class="radio" style="float:left; padding-right: 10px;">
                                    <label>
                                        <input class="inverted colored-blue" value="select" name="config_formtype" type="radio">
                                        <span class="text">select</span>
                                    </label>
                                </div>
                                <div class="radio" style="float:left; padding-right: 10px;">
                                    <label>
                                        <input class="inverted colored-blue" value="file" name="config_formtype" type="radio">
                                        <span class="text">file</span>
                                    </label>
                                </div>
                            </div>
                            <p class="help-block col-sm-4 red"></p>
                        </div>




                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">配置类型</label>
                            <div class="col-sm-6">
                                <div class="radio" style="float:left; padding-right: 10px;">
                                    <label>
                                        <input class="inverted colored-blue" value="1" name="config_type" type="radio" checked="checked">
                                        <span class="text">店铺配置</span>
                                    </label>
                                </div>
                                <div class="radio" style="float:left">
                                    <label>
                                        <input class="inverted colored-blue" value="0" name="config_type" type="radio">
                                        <span class="text">商品配置</span>
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group radionone"style="display: none">
                            <label for="username" class="col-sm-2 control-label no-padding-right">配置可选值</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="username" placeholder="" name="config_values" type="text">
                            </div>
                            <p class="help-block col-sm-4 red"></p>
                        </div>


                        <div class="form-group radionone"style="display: none">
                            <label for="username" class="col-sm-2 control-label no-padding-right">默认值</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="username" placeholder="" name="config_default" type="text">
                            </div>
                            <p class="help-block col-sm-4 red"></p>
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
	<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content',{initialFrameWidth:795,initialFrameHeight:300,});
    


</script>
    
    <script>
        function myfun(){
            $('.radiooption').each(function(){
                $('label').children('input').on('input propertychange',function(){
                    var type = $(this).val();
                    alert(type);
                    switch(type)
                    {
                        case ('input'):
                        $('.radionone').fadeOut();
                        break;                
                        case ('radio'):
                        $('.radionone').fadeIn();
                        break;                
                        case ('checked'):
                        $('.radionone').fadeIn();
                        break;                
                        case ('textarea'):
                        $('.radionone').fadeOut();
                        break;                
                        case ('select'):
                        $('.radionone').fadeIn();
                        break;                
                        case ('file'):
                        $('.radionone').fadeOut();
                        break;                
                    }            
                })
            })
        }
    </script>

</body></html>x