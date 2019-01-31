<?php /* Smarty version Smarty-3.1.19, created on 2018-02-16 01:56:58
         compiled from "/home1/amdigita/public_html/orlandomedicalclub.com/themes/default-bootstrap/modules/blockwishlist/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14282739235a868eca69c840-46726960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be810bdc079dc7c1295e1898b11410b712813d83' => 
    array (
      0 => '/home1/amdigita/public_html/orlandomedicalclub.com/themes/default-bootstrap/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1430362325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14282739235a868eca69c840-46726960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a868eca6c6813_53161468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a868eca6c6813_53161468')) {function content_5a868eca6c6813_53161468($_smarty_tpl) {?>

<div class="wishlist">
	<a class="addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" rel="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;">
		<?php echo smartyTranslate(array('s'=>"Add to Wishlist",'mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</div><?php }} ?>
