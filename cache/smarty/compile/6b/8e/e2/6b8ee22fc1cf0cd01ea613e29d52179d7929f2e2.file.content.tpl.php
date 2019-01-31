<?php /* Smarty version Smarty-3.1.19, created on 2017-08-25 16:52:50
         compiled from "/home1/amdigita/public_html/orlandomedicalclub.com/admin-1503691498/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149444253459a09c327a5233-59739206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b8ee22fc1cf0cd01ea613e29d52179d7929f2e2' => 
    array (
      0 => '/home1/amdigita/public_html/orlandomedicalclub.com/admin-1503691498/themes/default/template/content.tpl',
      1 => 1430362334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149444253459a09c327a5233-59739206',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59a09c327ac059_04588290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a09c327ac059_04588290')) {function content_59a09c327ac059_04588290($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
