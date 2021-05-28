<?php
/* Smarty version 3.1.39, created on 2021-05-27 22:47:39
  from '/Applications/MAMP/htdocs/ricketmorty/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b0056bb7fe38_05419542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '810628fc82ad85d801db823a577b6b90525e94b4' => 
    array (
      0 => '/Applications/MAMP/htdocs/ricketmorty/themes/classic/templates/index.tpl',
      1 => 1619601862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b0056bb7fe38_05419542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172242781360b0056bb716e2_57885313', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_64610655360b0056bb73831_54544012 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_89660902860b0056bb78802_14933434 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_88063586560b0056bb769b9_99187349 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89660902860b0056bb78802_14933434', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_172242781360b0056bb716e2_57885313 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_172242781360b0056bb716e2_57885313',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_64610655360b0056bb73831_54544012',
  ),
  'page_content' => 
  array (
    0 => 'Block_88063586560b0056bb769b9_99187349',
  ),
  'hook_home' => 
  array (
    0 => 'Block_89660902860b0056bb78802_14933434',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64610655360b0056bb73831_54544012', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88063586560b0056bb769b9_99187349', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
