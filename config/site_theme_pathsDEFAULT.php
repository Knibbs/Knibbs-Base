<?php    
defined('C5_EXECUTE') or die(_("Access Denied."));

$v = View::getInstance();
$v->setThemeByPath('/login', "knibbs"); 
$v->setThemeByPath('/403', "knibbs");
$v->setThemeByPath('/register', "knibbs");
$v->setThemeByPath('/download_file', "knibbs");
$v->setThemeByPath('/install', "knibbs");
$v->setThemeByPath('/maintenance_mode', "knibbs");
$v->setThemeByPath('/members', "knibbs");
$v->setThemeByPath('/page_forbidden', "knibbs");
$v->setThemeByPath('/upgrade', "knibbs");
$v->setThemeByPath('/maintenance_mode', "knibbs");
$v->setThemeByPath('/page_not_found', "knibbs");
$v->setThemeByPath('/user_error', "knibbs");