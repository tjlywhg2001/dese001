<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:81:"H:\gitfiles\dese001\shop2\public/../application/admin\view\config\configlist.html";i:1525337619;s:66:"H:\gitfiles\dese001\shop2\application\admin\view\common\_meta.html";i:1525222954;s:64:"H:\gitfiles\dese001\shop2\application\admin\view\common\top.html";i:1524733303;s:65:"H:\gitfiles\dese001\shop2\application\admin\view\common\left.html";i:1525334319;s:67:"H:\gitfiles\dese001\shop2\application\admin\view\common\footer.html";i:1525222954;}*/ ?>
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
<style>
ul>li{
    box-shadow: none;
}
</style>
<ul class="nav sidebar-menu">
    <!--Dashboard-->
<!--     <li>
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
            <span class="menu-text">品牌模块</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"  style="display: block;">
            <li>
                <a href="<?php echo url('brand/lst'); ?>">
                    <span class="menu-text">品牌管理</span>
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
                        <li class="active">配置项</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">配置项</span>
            </div>
            <!-- 配置列表开始 -->
            <div class="widget-body">

                <div class="docs-example">
                    <ul class="nav nav-tabs tabs-flat">
                        <li class=""><a href="#info-tab" data-toggle="tab" aria-expanded="false">店铺配置</a></li>
                        <li class="active"><a href="#address-tab" data-toggle="tab" aria-expanded="true">商品配置</a></li>
                    </ul>

                    <form id="accountForm" method="post" class="form-horizontal bv-form" novalidate="novalidate">
                        <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;">
                        </button>
                        <div class="tab-content tabs-flat">
                            <div class="tab-pane" id="info-tab">
                                <?php foreach ($shopconflist as $k => $confs): ?>


                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $confs['config_cname']; ?></label>
                                        <div class="col-sm-6">
                                            <?php if ($confs['config_formtype'] == 'input'): ?>
                                                <!-- 单行文本 -->
                                            <input class="form-control" id="username" placeholder="" name="config_cname" type="text">
                                            <?php elseif ($confs['config_formtype'] == 'radio'): ?>
                                                <!-- 单选项 -->
                                            <input class="form-control" id="username" name="config_cname" type="radio">
                                            <?php elseif ($confs['config_formtype'] == 'checked'): ?>
                                                <!-- 复选框-->
                                            <div class="checkbox">
                                                <label for="">
                                                    <input class="form-control" id="username" name="config_cname" type="checkbox">
                                                    <span class="text">heihei</span>
                                                </label>
                                                <label for="">
                                                    <input class="form-control" id="username" name="config_cname" type="checkbox">
                                                    <span class="text">heihei</span>
                                                </label>
                                            </div>

                                            <?php elseif ($confs['config_formtype'] == 'textarea'): ?>
                                                <!-- 文本框 -->
                                            <textarea class="form-control" id="username" name="config_values" ></textarea>

                                            <?php elseif ($confs['config_formtype'] == 'select'): ?>
                                                <!-- 下拉式 -->
                                            <select class="form-control" id="username" placeholder="" name="config_cname" type="radio">
                                                <option></option>
                                            </select>

                                            <?php elseif ($confs['config_formtype'] == 'file'): ?>
                                                <!-- 文件 -->
                                            <input class="form-control" id="username" placeholder="" name="config_cname" type="file">

                                            <?php endif; ?>

                                        </div>
                                    </div>


                                <?php endforeach; ?>





<!--                                 <div class="form-group has-feedback">
                                    <label class="col-lg-4 control-label">Full name</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" name="fullName" data-bv-field="fullName" type="text"><i style="display: none;" class="form-control-feedback" data-bv-icon-for="fullName"></i><i class="form-control-feedback" data-bv-field="fullName" style="display: none;"></i>
                                    <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="fullName" data-bv-result="NOT_VALIDATED">The full name is required</small></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="col-lg-4 control-label">Company</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" name="company" data-bv-field="company" type="text"><i style="display: none;" class="form-control-feedback" data-bv-icon-for="company"></i><i class="form-control-feedback" data-bv-field="company" style="display: none;"></i>
                                    <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="company" data-bv-result="NOT_VALIDATED">The company name is required</small></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="col-lg-4 control-label">Job title</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" name="jobTitle" data-bv-field="jobTitle" type="text"><i class="form-control-feedback" data-bv-field="jobTitle" style="display: none;"></i>
                                    </div>
                                </div>
 -->
                            </div>
                            <div class="tab-pane active" id="address-tab">
                                <div class="form-group has-feedback">
                                    <label class="col-lg-4 control-label">Address</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" name="address" data-bv-field="address" type="text"><i style="display: none;" class="form-control-feedback" data-bv-icon-for="address"></i><i class="form-control-feedback" data-bv-field="address" style="display: none;"></i>
                                    <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="address" data-bv-result="NOT_VALIDATED">The address is required</small></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="col-lg-4 control-label">City</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" name="city" data-bv-field="city" type="text"><i style="display: none;" class="form-control-feedback" data-bv-icon-for="city"></i><i class="form-control-feedback" data-bv-field="city" style="display: none;"></i>
                                    <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="city" data-bv-result="NOT_VALIDATED">The city is required</small></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="col-lg-4 control-label">Country</label>
                                    <div class="col-lg-8">
                                        <select class="form-control" name="country" data-bv-field="country">
                                            <option value="">Select a country</option>
                                            <option value="FR">France</option>
                                            <option value="DE">Germany</option>
                                            <option value="IT">Italy</option>
                                            <option value="JP">Japan</option>
                                            <option value="RU">Russian</option>
                                            <option value="US">United State</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="other">Other</option>
                                        </select><i class="form-control-feedback" data-bv-field="country" style="display: none;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-8 col-lg-offset-4">
                                <button type="submit" class="btn btn-blue">Validate</button>
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
    

</body></html>