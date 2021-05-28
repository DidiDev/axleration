<?php
/* Smarty version 3.1.39, created on 2021-05-28 00:39:59
  from '/Applications/MAMP/htdocs/ricketmorty/admin1522eeqbe/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b01fbf0a4410_74084080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b99b0d2a5f095919c185bc217a5e2dd0d97884f' => 
    array (
      0 => '/Applications/MAMP/htdocs/ricketmorty/admin1522eeqbe/themes/new-theme/template/content.tpl',
      1 => 1619601862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b01fbf0a4410_74084080 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
