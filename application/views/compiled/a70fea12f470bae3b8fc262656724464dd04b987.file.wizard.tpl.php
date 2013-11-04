<?php /* Smarty version Smarty-3.1.14, created on 2013-11-04 18:54:55
         compiled from "application\views\templates\wizard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49705277ed7f2e4700-72158313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a70fea12f470bae3b8fc262656724464dd04b987' => 
    array (
      0 => 'application\\views\\templates\\wizard.tpl',
      1 => 1383492584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49705277ed7f2e4700-72158313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'step' => 0,
    'key' => 0,
    'stepConten' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5277ed7f3c4d50_51337791',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5277ed7f3c4d50_51337791')) {function content_5277ed7f3c4d50_51337791($_smarty_tpl) {?><div class="widget-box">
	<div class="widget-header widget-header-blue widget-header-flat">
		<h4 class="lighter"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
	</div>

	<div class="widget-body">
		<div class="widget-main">
			<div id="fuelux-wizard" class="row-fluid" data-target="#step-container">
				<ul class="wizard-steps">
					<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['step']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['key']->value+1==1){?>
							<li data-target="#step<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
" class="active">
						<?php }else{ ?>
							<li data-target="#step<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
" class="">
						<?php }?>
							<span class="step"><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</span>
							<span class="title">Seleccionar Carrea</span>
						</li>
					<?php } ?>
				</ul>
			</div>

			<hr>

			<div class="step-content row-fluid position-relative" id="step-container">
				
				<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stepConten']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['key']->value+1==1){?>
						<div class="step-pane active" id="step<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
">
					<?php }else{ ?>
						<div class="step-pane" id="step<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
">
					<?php }?>

					
					<?php if ($_smarty_tpl->tpl_vars['data']->value=="selectCarre"){?>
						<select>
							<option>Valor</option>
						</select>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['data']->value=="addMateria"){?>
						<select>
							<option>Valor</option>
						</select>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['data']->value=="addElect"){?>
						<select>
							<option>Valor</option>
						</select>
					<?php }?>

					</div>

				<?php } ?>
			</div>

			<hr>

			<div class="row-fluid wizard-actions">
				<button class="btn btn-prev" disabled="disabled">
					<i class="icon-arrow-left"></i>
					Prev
				</button>

				<button class="btn btn-success btn-next" data-last="Finish ">
					Next
					<i class="icon-arrow-right icon-on-right"></i>
				</button>
			</div>


		</div>
	</div>

</div><?php }} ?>