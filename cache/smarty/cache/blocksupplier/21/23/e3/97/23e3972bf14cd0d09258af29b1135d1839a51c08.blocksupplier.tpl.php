<?php /*%%SmartyHeaderCode:3247877265b3e71cb12ac60-92880810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23e3972bf14cd0d09258af29b1135d1839a51c08' => 
    array (
      0 => '/home1/amdigita/public_html/orlandomedicalclub.com/themes/default-bootstrap/modules/blocksupplier/blocksupplier.tpl',
      1 => 1430362325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3247877265b3e71cb12ac60-92880810',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b3e71cb181478_58448256',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3e71cb181478_58448256')) {function content_5b3e71cb181478_58448256($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					<a href="http://orlandomedicalclub.com/supplier" title="Suppliers">
					Suppliers
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="last_item">
                					<a 
					href="http://orlandomedicalclub.com/1__fashion-supplier" 
					title="More about Fashion Supplier">
				                Fashion Supplier
                					</a>
                				</li>
										</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">All suppliers</option>
													<option value="http://orlandomedicalclub.com/1__fashion-supplier">Fashion Supplier</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
