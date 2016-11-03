<?php /* Smarty version Smarty-3.1.18, created on 2016-11-02 22:33:38
         compiled from "views\sidebarteam.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25783580de496b63645-55809628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85e69cc122641972e6fdc3d5bf7f77af5b8a7748' => 
    array (
      0 => 'views\\sidebarteam.tpl',
      1 => 1478126016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25783580de496b63645-55809628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580de496b90430_98367249',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580de496b90430_98367249')) {function content_580de496b90430_98367249($_smarty_tpl) {?><main> 
    <div class="side_contentteam">
        <div class="sidebar">
            <form>
                Zoek speler:<br><br><input type="text" name="users" placeholder="speler - positie" onkeyup="showUser(this.value)">
            </form>
            
            <div id="txtHint"><b></b></div>  
        </div> 
        <?php }} ?>
