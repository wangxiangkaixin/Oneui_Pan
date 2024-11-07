<?php
@header('Content-Type: text/html; charset=UTF-8');
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="assets/css/oneui.min.css">
</head>
<body>
<div id="page-container" class="sidebar-dark side-scroll page-header-fixed page-header-dark main-content-boxed">
    <nav id="sidebar" aria-label="主导航">
        <div class="content-header bg-white-5">
            <a class="fw-semibold text-dual" href="index.html">
                <span class="smini-visible">
                    <i class="fa fa-circle text-primary"></i>
                </span>
                <span class="smini-hide fs-5 tracking-wider"><?php echo $title; ?></span>
            </a>
            <div>

                <a class="d-lg-none btn btn-sm btn-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times"></i>
                </a>
            </div>
        </div>
        <div class="js-sidebar-scroll">
            <div class="content-side">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="/">
                            <i class="nav-main-link-icon si si-home"></i>
                            <span class="nav-main-link-name">首页</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="/upload.php">
                            <i class="nav-main-link-icon si si-rocket"></i>
                            <span class="nav-main-link-name">上传</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="/myfile.php">
                            <i class="nav-main-link-icon si si-wallet"></i>
                            <span class="nav-main-link-name">管理</span>
                        </a>
                    </li>
                 
                </ul>
            </div>
        </div>
    </nav>
    <header id="page-header">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <a class="fw-semibold fs-5 tracking-wider text-dual me-3" href="/"><?php echo $title; ?></a>
            </div>
            <div class="d-flex align-items-center">
                <div class="d-none d-lg-block">
                    <ul class="nav-main nav-main-horizontal nav-main-hover">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/">
                                <i class="nav-main-link-icon si si-home"></i>
                                <span class="nav-main-link-name">首页</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/upload.php">
                                <i class="nav-main-link-icon si si-rocket"></i>
                                <span class="nav-main-link-name">上传</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/myfile.php">
                                <i class="nav-main-link-icon si si-wallet"></i>
                                <span class="nav-main-link-name">管理</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <button type="button" class="btn btn-sm btn-secondary d-lg-none ms-1" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </div>
        </div>
    </header>
       