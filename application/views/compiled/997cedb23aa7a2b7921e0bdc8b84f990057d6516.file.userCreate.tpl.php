<?php /* Smarty version Smarty-3.1.14, created on 2013-10-24 01:32:28
         compiled from "application\views\templates\userCreate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:600252651e919de6d3-12299034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '997cedb23aa7a2b7921e0bdc8b84f990057d6516' => 
    array (
      0 => 'application\\views\\templates\\userCreate.tpl',
      1 => 1382560748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '600252651e919de6d3-12299034',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52651e91bc8905_35207397',
  'variables' => 
  array (
    'user' => 0,
    'ajax' => 0,
    'ajax_validate' => 0,
    'arraySystems' => 0,
    'system' => 0,
    'rol' => 0,
    'past_controller' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52651e91bc8905_35207397')) {function content_52651e91bc8905_35207397($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\adsi_v1.1\\application\\libraries\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div id="message-box" class="span12"></div>
<div id="ajax_list">
<div class="span12">
<?php if ($_smarty_tpl->tpl_vars['user']->value!=''){?><?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->get('all'), null, 0);?><?php }?>
<form class="form-horizontal form-menu" id="form-consult" data-ajax="<?php echo $_smarty_tpl->tpl_vars['ajax']->value;?>
" data-ajax-validate="<?php echo $_smarty_tpl->tpl_vars['ajax_validate']->value;?>
">
	<div class="accordion"> <!--  id="accordion2" para que sea padre -->
		<!-- user -->
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
					Usuario
				</a>
			</div>
			<div id="collapseOne" class="accordion-body collapse in">
				<div class="accordion-inner">
					<div class="control-group">
						<label class="control-label" for="username">* Usuario:</label>
						<div class="controls">
							<input type="text" id="username" name="username" value="<?php if ($_smarty_tpl->tpl_vars['user']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
<?php }?>" placeholder="Usuario">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">* Contraseña:</label>
						<div class="controls">
							<input type="password" id="inputPassword" name="inputPassword" placeholder="Contraseña">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPasswordConfirm">* Confirmación Contraseña:</label>
						<div class="controls">
							<input type="password" id="inputPasswordConfirm" name="inputPasswordConfirm" placeholder="Confirmación Contraseña">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /user -->
		<!-- Datos Adicionales -->
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
					Datos Adicionales
				</a>
			</div>
			<div id="collapseThree" class="accordion-body collapse">
				<div class="accordion-inner">
					<div class="control-group">
						<label class="control-label" for="inputNombre">* Nombre:</label>
						<div class="controls">
							<input type="text" id="inputNombre" name="inputNombre" value="<?php if ($_smarty_tpl->tpl_vars['user']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
<?php }?>" placeholder="Nombre">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputApellido">* Apellido:</label>
						<div class="controls">
							<input type="text" id="inputApellido" name="inputApellido" value="<?php if ($_smarty_tpl->tpl_vars['user']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
<?php }?>" placeholder="Apellido">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputEmail">* Email:</label>
						<div class="controls">
							<input type="email" id="inputEmail" name="inputEmail" value="<?php if ($_smarty_tpl->tpl_vars['user']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
<?php }?>" placeholder="Email">
						</div>
					</div>
					<div class="control-group">
						<label  class="control-label" for="optionsRadios1">* Sexo:</label>
						<div class="controls">

							<div class="radio">
								<input type="radio" name="inputSex[]" id="optionsRadios1" value="Masculino" <?php if ($_smarty_tpl->tpl_vars['user']->value!=''){?><?php if ($_smarty_tpl->tpl_vars['user']->value['sex']=='Masculino'){?>CHECKED<?php }?><?php }else{ ?>CHECKED<?php }?>>
								Masculino
							</div>
							<div class="radio">
								<input type="radio" name="inputSex[]" id="optionsRadios2" value="Femenino" <?php if ($_smarty_tpl->tpl_vars['user']->value!=''){?><?php if ($_smarty_tpl->tpl_vars['user']->value['sex']=='Femenino'){?>CHECKED<?php }?><?php }else{ ?><?php }?> >
								Femenino
							</div>
						</div>
					</div>
					<div class="control-group">
						<label  class="control-label" for="inputDate">Fecha de Nacimiento:</label>
						<div class="controls">
							<div class="input-group input-group-sm">
								<input type="text" id="inputDate" name="inputDate" value="<?php if ($_smarty_tpl->tpl_vars['user']->value!=''){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['date_birth'],'%d/%m/%Y');?>
<?php }?>" placeholder="Fecha de Nacimiento">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Datos Adicionales -->
				<!-- roles -->
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
				Roles de Sistema
				</a>
			</div>
			<div id="collapseTwo" class="accordion-body collapse">
				<div class="accordion-inner">
					<?php  $_smarty_tpl->tpl_vars['system'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['system']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arraySystems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['system']->key => $_smarty_tpl->tpl_vars['system']->value){
$_smarty_tpl->tpl_vars['system']->_loop = true;
?>
					<div class="control-group">
						<label class="control-label" for="<?php echo $_smarty_tpl->tpl_vars['system']->value['id'];?>
Select"><?php echo $_smarty_tpl->tpl_vars['system']->value['system'];?>
:</label>
						<div class="controls">
							<select name="inputSelect[]" id="<?php echo $_smarty_tpl->tpl_vars['system']->value['id'];?>
Select">
								<option value="false">No posee</option>
								<?php  $_smarty_tpl->tpl_vars['rol'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rol']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['system']->value['roles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rol']->key => $_smarty_tpl->tpl_vars['rol']->value){
$_smarty_tpl->tpl_vars['rol']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['rol']->value['status']==true){?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['rol']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['rol']->value['name'];?>
</option>
									<?php }else{ ?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['rol']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rol']->value['name'];?>
</option>
									<?php }?>
								<?php } ?>
							</select>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- /roles  -->
	</div>
	<div class="loading hide" id="ajax-loading">Cargando, actualizando cambios...</div>
	<input type="button" value="Guardar" class="btn btn-large btn-primary submit-form">
	<input type="button" value="Guardar y volver a la lista" id="save-and-go-back-button" class="btn btn-large btn-primary">
	<input type="button" value="Cancelar" class="btn btn-large return-to-list">
</form>
</div>
</div>

<script>
	var past_controller = "<?php echo $_smarty_tpl->tpl_vars['past_controller']->value;?>
";
	var controller = "<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
";
</script>
<?php }} ?>