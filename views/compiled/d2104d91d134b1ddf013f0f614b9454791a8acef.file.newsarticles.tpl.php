<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 11:33:26
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:717757f2271a5ebc64-24249583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1478172801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '717757f2271a5ebc64-24249583',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f2271a608394_09465808',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f2271a608394_09465808')) {function content_57f2271a608394_09465808($_smarty_tpl) {?>
<div class="newsarticles">
    <div class="berichten">
    <h1 id="tablenewsh1">Niewsberichten</h1>
    <div class="pagenation">
    <ul>
        <li><a href="?action=main&pagenr=1">1</a></li>
        <li><a href="?action=main&pagenr=2">2</a></li>
        <li><a href="?action=main&pagenr=3">3</a></li>
        <li><a href=#>4</a></li>
    </ul>
    </div>
    <hr>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
        <div class="tablenews"> 
        <div class="tablenews2"> 
        <article>
            <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
            <img src=images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
><br>
            <p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</p>
            <p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['datum'];?>
</p>
        </article>
        </div>
        </div>
        <hr>
    <?php } ?>
        <div class="pagenation">
    <ul>
        <li><a href="?action=main&pagenr=1">1</a></li>
        <li><a href="?action=main&pagenr=2">2</a></li>
        <li><a href="?action=main&pagenr=3">3</a></li>
        <li><a href="#">4</a></li>
    </ul>
    </div>
</div>
</div>
</main>




<?php }} ?>
