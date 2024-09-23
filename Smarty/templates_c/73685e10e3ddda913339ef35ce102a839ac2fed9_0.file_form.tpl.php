<?php
/* Smarty version 5.4.1, created on 2024-09-23 12:12:07
  from 'file:form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66f13ef775f7d3_64333340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73685e10e3ddda913339ef35ce102a839ac2fed9' => 
    array (
      0 => 'form.tpl',
      1 => 1727086323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66f13ef775f7d3_64333340 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\OOP-LJ2\\Smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_115585420466f13ef775b670_23740860', "content");
?>



<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "templates/layout.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_115585420466f13ef775b670_23740860 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\OOP-LJ2\\Smarty\\templates';
?>

    <h1 class="mt-5">Registratie</h1>
    <form action="index.php?page=result" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">registreer</button>
    </form>
<?php
}
}
/* {/block "content"} */
}
