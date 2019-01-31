<?php /*%%SmartyHeaderCode:121354318459a082f8879b78-24074230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9b5240aa6abd5f0bb0173dc232a983f0abc83fe' => 
    array (
      0 => '/home1/amdigita/public_html/orlandomedicalclub.com/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1430362325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121354318459a082f8879b78-24074230',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b82c3cbdcd955_92497586',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b82c3cbdcd955_92497586')) {function content_5b82c3cbdcd955_92497586($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//orlandomedicalclub.com/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
