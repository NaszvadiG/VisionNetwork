<?php /* Smarty version Smarty-3.1.13, created on 2013-11-06 19:35:44
         compiled from "application/views/CONTENT/default.php" */ ?>
<?php /*%%SmartyHeaderCode:21119792535277725ccb44f5-57738857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa32f142f7ffc63aa3b0c83bdebbc021ed256ff4' => 
    array (
      0 => 'application/views/CONTENT/default.php',
      1 => 1383762668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21119792535277725ccb44f5-57738857',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5277725ccb5441_88297786',
  'variables' => 
  array (
    'userSession' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5277725ccb5441_88297786')) {function content_5277725ccb5441_88297786($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['userSession']->value&&isset($_smarty_tpl->tpl_vars['userSession']->value['email'])){?>
    <?php if (isset($_smarty_tpl->tpl_vars['userSession']->value['banned'])&&$_smarty_tpl->tpl_vars['userSession']->value['banned']){?>
        <?php echo $_smarty_tpl->getSubTemplate ("ELEMENTS/banned.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }else{ ?>
        <?php echo $_smarty_tpl->getSubTemplate ("ELEMENTS/overview.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
<?php }else{ ?>
    <?php echo $_smarty_tpl->getSubTemplate ("ELEMENTS/login.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>