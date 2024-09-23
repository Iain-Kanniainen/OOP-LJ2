<?php
/* Smarty version 5.4.1, created on 2024-09-23 12:14:57
  from 'file:result.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66f13fa114e762_45962668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c299b8084b8bde695eb871f9dd025ae72dd30c68' => 
    array (
      0 => 'result.tpl',
      1 => 1727086494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66f13fa114e762_45962668 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\OOP-LJ2\\Smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_80718134366f13fa1144668_39309173', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "templates/layout.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_80718134366f13fa1144668_39309173 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\OOP-LJ2\\Smarty\\templates';
?>

    <h1 class="mt-5">Result</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Waarde</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data'), 'item', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
            <tr>
                <td scope="row"><?php echo $_smarty_tpl->getValue('key');?>
</td>
                <td scope="row"><?php echo $_smarty_tpl->getValue('item');?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>


<?php
}
}
/* {/block "content"} */
}
