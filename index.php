<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';
//
include 'includes/fncts.php';
// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Ajax Amsterdam');

$templateParser->display('head.tpl');

$templateParser->display('header.tpl');

$action = isset($_GET['action'])?$_GET['action']:'main'; 

switch($action) {

        case 'main';
            $page_nr = isset($_GET['pagenr'])?$_GET['pagenr']:1;
            $templateParser->display('sidebar.tpl');
    
            include('model/select_newsarticles.php');
            $templateParser->assign('result', $result); 
            $templateParser->display('newsarticles.tpl');
        break;
        
        case 'about';
            $templateParser->display('sidebarabout.tpl');
        
            $templateParser->display('about.tpl');
        break;
        
        case 'schema';
            $page_nr = isset($_GET['pagenr'])?$_GET['pagenr']:1;
            $templateParser->display('sidebarschema.tpl');
            
            include('model/select_schema.php');
            $templateParser->assign('result', $result);
            $templateParser->display('schema.tpl');
        break;
        
        case 'team';
            $page_nr = isset($_GET['pagenr'])?$_GET['pagenr']:1;
            $templateParser->display('sidebarteam.tpl');
            include('model/select_spelers.php');
            $templateParser->assign('result', $result);
            $templateParser->display('team.tpl');
        break;
        
        case 'cms';
            
            $templateParser->display('cms.tpl');

        break;
}

$footerText = 'Wesly Lodewijks - SchoolProject';
$templateParser->assign('footerString', $footerText);
$templateParser->display('footer.tpl');

