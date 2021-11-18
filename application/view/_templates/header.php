<!doctype html>
<html lang="en">
<head>
    <title><?php echo $this->page_title; ?> - <?php echo Config::get('META_NAME'); ?></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo Config::get('META_DESCRIPTION'); ?>">
    <meta name="keywords" content="<?php echo Config::get('META_KEYWORDS'); ?>">
    <meta name="author" content="<?php echo Config::get('META_NAME'); ?>"> 
    <!-- Open Graph -->
    <meta name="og:title" content="<?php echo $this->page_title; ?>"/>
    <meta name="og:url" content="<?php echo Config::get('URL') . $filenames[1]; ?>"/>
    <meta name="og:site_name" content="<?php echo Config::get('META_NAME'); ?>"/>
    <meta name="og:description" content="<?php echo Config::get('META_DESCRIPTION'); ?>"/>
    <!-- Twitter -->
    <meta name="twitter:card" content="<?php echo Config::get('META_NAME'); ?>">
    <meta name="twitter:url" content="<?php echo Config::get('URL') . $filenames[1]; ?>">
    <meta name="twitter:title" content="<?php echo $this->page_title; ?>">
    <meta name="twitter:description" content="<?php echo Config::get('META_DESCRIPTION'); ?>">
    <!-- send empty favicon fallback to prevent user's browser hitting the server for lots of favicon requests resulting in 404s -->
    <link rel="icon" href="<?php echo Config::get('URL'); ?>favicon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@csstools/normalize.css" />
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/custom.css" />
</head>
<body>