<?php /* Smarty version Smarty-3.1.18, created on 2016-10-27 09:35:07
         compiled from "views\schema.tpl" */ ?>
<?php /*%%SmartyHeaderCode:618958024e8c88f897-14613239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b295056efdd3a7f56de855f3a4990e7bb88eb837' => 
    array (
      0 => 'views\\schema.tpl',
      1 => 1477560881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '618958024e8c88f897-14613239',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58024e8c8c5303_85640305',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58024e8c8c5303_85640305')) {function content_58024e8c8c5303_85640305($_smarty_tpl) {?><div class="newsarticles">
    <div class="berichtenschema">
        <h1 id="schematitel">Wedstrijdschema 2016-2017</h1>
    <div class="pagenation">
        <ul>
            <li><a href="?action=schema&pagenr=1">1</a></li>
            <li><a href="?action=schema&pagenr=2">2</a></li>
            <li><a href="?action=schema&pagenr=3">3</a></li>
            <li><a href="?action=schema&pagenr=4">4</a></li>
        </ul>
    </div>
        <div id="schematable">
        <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
            <div class="wedstrijd">
            <p class="datum">
                <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['datum'];?>

            </p>
            <p class="wedstrijdinfo">
                <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['thuisteam'];?>

                <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['tijd'];?>

                <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['uitteam'];?>

            </p>
            </div>
        <?php } ?>
    </div>
    <div class="pagenation">
        <ul>
            <li><a href="?action=schema&pagenr=1">1</a></li>
            <li><a href="?action=schema&pagenr=2">2</a></li>
            <li><a href="?action=schema&pagenr=3">3</a></li>
            <li><a href="?action=schema&pagenr=4">4</a></li>
        </ul>
    </div>
</div>
</div>
</main>


<?php }} ?>
