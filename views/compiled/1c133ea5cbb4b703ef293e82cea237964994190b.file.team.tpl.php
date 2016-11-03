<?php /* Smarty version Smarty-3.1.18, created on 2016-11-02 17:25:39
         compiled from "views\team.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1264258024e8e630124-84305143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c133ea5cbb4b703ef293e82cea237964994190b' => 
    array (
      0 => 'views\\team.tpl',
      1 => 1478107244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1264258024e8e630124-84305143',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58024e8e65f2c9_02939312',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58024e8e65f2c9_02939312')) {function content_58024e8e65f2c9_02939312($_smarty_tpl) {?><div class="newsarticles">
    <div class="berichtenteam">
        <h1 id="schematitel">Selectie 2016-2017</h1>
        <div class="pagenation">
            <ul>
                <li id="page1" onclick=""><a href="?action=team&pagenr=1">1</a></li>
                <li id="page2"><a href="?action=team&pagenr=2">2</a></li>
                <li id="page3"><a href="?action=team&pagenr=3">3</a></li>
                <li id="page4"><a href="?action=team&pagenr=4">4</a></li>
            </ul>
        </div>
        <div id="teamtable">
        <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
            <div class="speler">
            <p class="spelerhead">
                <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
<br>
                <img src=images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
><br>
                <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['positie'];?>

            </p>
            <p class="spelerinfo">
                <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>

            </p>
            </div>
        <?php } ?>
    </div>
    <div class="pagenation">
            <ul>
                <li><a href="?action=team&pagenr=1">1</a></li>
                <li><a href="?action=team&pagenr=2">2</a></li>
                <li><a href="?action=team&pagenr=3">3</a></li>
                <li><a href="?action=team&pagenr=4">4</a></li>
            </ul>
        </div>
</div>
</div>
</main><?php }} ?>
