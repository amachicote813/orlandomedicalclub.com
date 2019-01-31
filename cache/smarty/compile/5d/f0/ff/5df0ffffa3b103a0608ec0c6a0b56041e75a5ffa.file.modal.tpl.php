<?php /* Smarty version Smarty-3.1.19, created on 2017-08-25 16:52:00
         compiled from "/home1/amdigita/public_html/orlandomedicalclub.com/admin-1503691498/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59965704459a09c00e689c7-70239220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5df0ffffa3b103a0608ec0c6a0b56041e75a5ffa' => 
    array (
      0 => '/home1/amdigita/public_html/orlandomedicalclub.com/admin-1503691498/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1430362334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59965704459a09c00e689c7-70239220',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59a09c00e6b4a3_63501658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a09c00e6b4a3_63501658')) {function content_59a09c00e6b4a3_63501658($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>
