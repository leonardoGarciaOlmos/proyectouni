<?php /* Smarty version Smarty-3.1.14, created on 2013-11-04 19:01:48
         compiled from "application\views\templates\BD.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164755277ef1c360e19-84466533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '682e800919c7f5088fb3d9bbf6620a21743f13d9' => 
    array (
      0 => 'application\\views\\templates\\BD.tpl',
      1 => 1383508877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164755277ef1c360e19-84466533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'process' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5277ef1c3a1388_65560182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5277ef1c3a1388_65560182')) {function content_5277ef1c3a1388_65560182($_smarty_tpl) {?><div id="dropzone">
	<form action="#" class="dropzone dz-clickable">
		
		<div class="dz-default dz-message">
			<span>
				<?php if ($_smarty_tpl->tpl_vars['process']->value=="backup"){?>
					<span class="bigger-150 bolder"><i class="icon-caret-right red"></i> Backup</span> base de dato
					<span class="smaller-80 grey">(click)</span> <br> <i id="upload_button" class="upload-icon icon-cloud-download blue icon-3x" value="basedato/backup"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['process']->value=="restore"){?>
					<input  type="file" id="id-input-file-3">
				<?php }?>


			</span>
		</div>
	</form>
</div>


<form id="form_bd" type="POST" action="">
	<input type="hidden" name="nothing" value="" />
</form><?php }} ?>