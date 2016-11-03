<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 11:25:11
         compiled from "views\cms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9157581b1d09d6f610-15176319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dddc4a85fe77008d47b97268c1af4cbcc502f75' => 
    array (
      0 => 'views\\cms.tpl',
      1 => 1478172309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9157581b1d09d6f610-15176319',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581b1d09d948b6_77076767',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581b1d09d948b6_77076767')) {function content_581b1d09d948b6_77076767($_smarty_tpl) {?>
        
<div class="newsarticles">
    <div class="berichtenabout">
        <div class="abouttable">
            
            <form action="includes/cms.php" method="post">
            niewsbericht toevoegen <br><br>
            title:<input type="text" name="title"><br><br>
            cont:<input type="text" name="content"><br><br>
            img:<input type="text" name="image"><br><br>
            tags:<input type="text" name="tags"><br><br>
            link:<input type="text" name="link"><br><br>
            <input type="submit">
        </form>

</div>
</div>
</main><?php }} ?>
