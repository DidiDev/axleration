<?php
/* Smarty version 3.1.39, created on 2021-05-28 00:40:08
  from '/Applications/MAMP/htdocs/ricketmorty/admin1522eeqbe/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b01fc8a7d458_57353809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba6ec5fcd1ef5ca7ff5ad2e5fcdb339a39173d5d' => 
    array (
      0 => '/Applications/MAMP/htdocs/ricketmorty/admin1522eeqbe/themes/default/template/content.tpl',
      1 => 1619601862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b01fc8a7d458_57353809 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
