<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
    <title><?php echo $this->config->item('site_title') . ' | ' .(string) ucfirst($this->router->class); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo CSS_PATH; ?>bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Custume style -->
    <link href="<?php echo CSS_PATH; ?>bootstrap/style.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo CSS_PATH; ?>bootstrap/font-awesome.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="<?php echo CSS_PATH; ?>bootstrap/ionicons.css" rel="stylesheet" type="text/css" />
     <!-- Theme style -->
    <link href="<?php echo CSS_PATH; ?>dist/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo CSS_PATH; ?>dist/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo PLUGINS_PATH; ?>iCheck/flat/skin-yellow.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo PLUGINS_PATH; ?>morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo PLUGINS_PATH; ?>jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo PLUGINS_PATH; ?>datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="<?php echo PLUGINS_PATH; ?>daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?php echo PLUGINS_PATH; ?>bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo PLUGINS_PATH; ?>iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  	</head>
<!-- ./wrapper -->