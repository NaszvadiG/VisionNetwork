<?php /* Smarty version Smarty-3.1.13, created on 2013-11-06 20:21:36
         compiled from "application/views/ELEMENTS/newAccount.php" */ ?>
<?php /*%%SmartyHeaderCode:18825029985279fb371d8244-12294638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df67e7ffecf4287a09659a17c888ed9f379aa830' => 
    array (
      0 => 'application/views/ELEMENTS/newAccount.php',
      1 => 1383765695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18825029985279fb371d8244-12294638',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5279fb371dba82_13210280',
  'variables' => 
  array (
    'user' => 0,
    'messageType' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5279fb371dba82_13210280')) {function content_5279fb371dba82_13210280($_smarty_tpl) {?><div class="container">
    <div class="loginMask">
        <h1 class="text-center login-title">Create a new account</h1>
        <div class="account-wall">
            <form class="form-signin" action="/user/newAccount" method="POST">
                <?php if (!empty($_smarty_tpl->tpl_vars['user']->value['newAccount'])&&$_smarty_tpl->tpl_vars['user']->value['newAccount']['registration']){?>
                <?php  $_smarty_tpl->tpl_vars['messageType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['messageType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user']->value['newAccount']['registration']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['messageType']->key => $_smarty_tpl->tpl_vars['messageType']->value){
$_smarty_tpl->tpl_vars['messageType']->_loop = true;
?>
                <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messageType']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
                <label><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</label>
                <?php } ?>
                <?php } ?>
                <?php }?>
                <input name="email" type="text" class="form-control" placeholder="Email" required autofocus>
                <input name="pass" id="password" type="password" class="form-control" placeholder="Password" required>
                <br/>            
                <input name="user" type="text" class="form-control" placeholder="Username" required>
                <input name="passConfirm" id="passwordConfirm" type="password" class="form-control" placeholder="Password (Confirm)" required>
                <label class="checkbox pull-left">
                    <input name="agb" type="checkbox" value="agb">
                    Accept <a href="#">AGB</a>
                </label>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign up for free</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
            </form>
        </div>
        <a href="/user/login" class="text-center new-account">Already have an account</a>
    </div>
</div><?php }} ?>