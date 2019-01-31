<?php /* Smarty version Smarty-3.1.19, created on 2018-02-16 01:56:58
         compiled from "/home1/amdigita/public_html/orlandomedicalclub.com/themes/default-bootstrap/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3774709125a868eca227463-30382764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac7b8497c02dd2b4e420e2aee212d5b50fd0ca16' => 
    array (
      0 => '/home1/amdigita/public_html/orlandomedicalclub.com/themes/default-bootstrap/category-count.tpl',
      1 => 1430362324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3774709125a868eca227463-30382764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a868eca244ae6_91733239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a868eca244ae6_91733239')) {function content_5a868eca244ae6_91733239($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
