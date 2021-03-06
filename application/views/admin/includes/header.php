<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Essensa | Admin Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="<?php echo base_url('assets/global/plugins/morris/morris.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/global/plugins/fullcalendar/fullcalendar.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/global/plugins/jqvmap/jqvmap/jqvmap.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?php echo base_url('assets/global/css/components.min.css'); ?>" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?php echo base_url('assets/global/css/plugins.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="<?php echo base_url('assets/layouts/layout/css/layout.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/layouts/layout/css/themes/darkblue.css'); ?>" rel="stylesheet" type="text/css" id="style_color" />
    <link href="<?php echo base_url('assets/layouts/layout/css/custom.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/layouts/layout/css/extend.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/global/favicon.ico'); ?>" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>
<!-- END HEAD -->

<!--body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white"-->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
<!-- BEGIN HEADER INNER -->

<div class="page-header-inner ">

<!-- BEGIN LOGO -->

<div class="page-logo">
    <a href="<?php echo base_url('dashboard'); ?>">
    <!--div class="menu-toggler sidebar-toggler">
        <span></span>
    </div-->
</div>
<!-- END LOGO -->
<!-- BEGIN RESPONSIVE MENU TOGGLER -->
<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
    <span></span>
</a>

<!-- END RESPONSIVE MENU TOGGLER -->
<!-- BEGIN TOP NAVIGATION MENU -->
<div class="top-menu">
<ul class="nav navbar-nav pull-right">
<!-- BEGIN NOTIFICATION DROPDOWN -->
<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
<!-- END NOTIFICATION DROPDOWN -->
<!-- BEGIN INBOX DROPDOWN -->
<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

<!-- END INBOX DROPDOWN -->
<!-- BEGIN TODO DROPDOWN -->

<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

<!-- END TODO DROPDOWN -->
<!-- BEGIN USER LOGIN DROPDOWN -->
<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
<?php
    $user = $this->ion_auth_admin->user()->row();
?>
<li class="dropdown dropdown-user">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <img alt="" class="img-circle" src="<?php echo base_url('assets/layouts/layout2/img/default-profile.png'); ?>" />
        <span class="username username-hide-on-mobile"><?php echo $user->first_name.' '.$user->last_name; ?> </span>
        <i class="fa fa-angle-down"></i>
    </a>
    <ul class="dropdown-menu dropdown-menu-default">
        <!--li>
            <a href="page_user_profile_1.html">
                <i class="icon-user"></i> My Profile </a>
        </li-->
        <li>
            <a href="<?php echo base_url('admin/logout'); ?>">
                <i class="icon-key"></i> Log Out </a>
        </li>
    </ul>
</li>
<!-- END USER LOGIN DROPDOWN -->
<!-- BEGIN QUICK SIDEBAR TOGGLER -->
<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
<!--
<li class="dropdown dropdown-quick-sidebar-toggler">
    <a href="javascript:;" class="dropdown-toggle">
        <i class="icon-logout"></i>
    </a>
</li>
->
<!-- END QUICK SIDEBAR TOGGLER -->
</ul>
</div>
<!-- END TOP NAVIGATION MENU -->
</div>

<!-- END HEADER INNER -->

</div>

<!-- END HEADER -->

<!-- BEGIN HEADER & CONTENT DIVIDER -->

<div class="clearfix"> </div>

<!-- END HEADER & CONTENT DIVIDER -->