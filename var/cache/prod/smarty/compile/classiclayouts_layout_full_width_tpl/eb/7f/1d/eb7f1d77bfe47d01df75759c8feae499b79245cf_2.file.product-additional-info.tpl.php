<?php
/* Smarty version 3.1.39, created on 2021-05-28 18:18:45
  from '/Applications/MAMP/htdocs/ricketmorty/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b117e5a5bb08_08376324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb7f1d77bfe47d01df75759c8feae499b79245cf' => 
    array (
      0 => '/Applications/MAMP/htdocs/ricketmorty/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1619601862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b117e5a5bb08_08376324 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
