<?php
/* Smarty version 3.1.39, created on 2021-05-27 22:47:39
  from '/Applications/MAMP/htdocs/ricketmorty/themes/classic/templates/catalog/_partials/product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b0056b440332_24391152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0a5b282e52e1a5cb60a84948a2584fc4feeb6ff' => 
    array (
      0 => '/Applications/MAMP/htdocs/ricketmorty/themes/classic/templates/catalog/_partials/product-flags.tpl',
      1 => 1619601862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b0056b440332_24391152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '187491968160b0056b42c2b0_90108444';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174993721260b0056b433b02_07413719', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_174993721260b0056b433b02_07413719 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_174993721260b0056b433b02_07413719',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
