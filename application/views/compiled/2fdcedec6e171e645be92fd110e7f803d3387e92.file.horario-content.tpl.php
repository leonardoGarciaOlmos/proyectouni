<?php /* Smarty version Smarty-3.1.14, created on 2013-11-03 17:43:06
         compiled from "application\views\templates\horario-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1969152768b2ac91d45-04889092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fdcedec6e171e645be92fd110e7f803d3387e92' => 
    array (
      0 => 'application\\views\\templates\\horario-content.tpl',
      1 => 1383492744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1969152768b2ac91d45-04889092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiporef' => 0,
    'horas' => 0,
    'hora' => 0,
    'key' => 0,
    'dias' => 0,
    'datos' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52768b2adc0c75_81741416',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52768b2adc0c75_81741416')) {function content_52768b2adc0c75_81741416($_smarty_tpl) {?><h1>Generador de Horarios</h1>
<hr>

<a id='tipo_consulta' tipo='<?php echo $_smarty_tpl->tpl_vars['tiporef']->value;?>
'></a>
<div class="CSSTableGenerator" >
    <table id="format" border="1">
        <thead>    
            <tr>
                <th class="day-hour ">Horas</th>
                <th class="day-hour ">Lunes</th>
                <th class="day-hour ">Martes</th>
                <th class="day-hour ">Miercoles</th>
                <th class="day-hour ">Jueves</th>
                <th class="day-hour ">Viernes</th>
            </tr>
        </thead>
        <tbody>    
            <?php  $_smarty_tpl->tpl_vars['hora'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hora']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['horas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hora']->key => $_smarty_tpl->tpl_vars['hora']->value){
$_smarty_tpl->tpl_vars['hora']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['hora']->key;
?>
                <tr data-hora="<?php echo $_smarty_tpl->tpl_vars['hora']->value['hora_inicio'];?>
 - <?php echo $_smarty_tpl->tpl_vars['hora']->value['hora_final'];?>
">
                    <td class="horas"><?php echo $_smarty_tpl->tpl_vars['hora']->value['hora_inicio'];?>
 - <?php echo $_smarty_tpl->tpl_vars['hora']->value['hora_final'];?>
</td>
                 <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dias']->value[$_smarty_tpl->tpl_vars['key']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?> 
                    <td data-dia="<?php echo $_smarty_tpl->tpl_vars['datos']->value['dia'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
"></td>
                <?php } ?>   
                
                </tr>
            <?php } ?>
        </tbody>   

        <tfoot></tfoot> 
    </table>
</div>
    <hr>
    <div class="modal-footer">
        <buttom id="" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/horario/principal'" class="btn btn-danger btn-app" ><i class="icon-circle-arrow-left bigger-60"></i>Regresar</buttom>
        <buttom id="consult" class="btn btn-success btn-app" ><i class="icon-eye-open bigger-160"></i>Consultar</buttom>
        <buttom id="insert_data" class="btn btn-primary btn-app" ><i class="icon-save bigger-160"></i>Guardar</buttom>
    </div>


    <div id="modal" style="display:none" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Seleccion de informacion de Bloque</h3>
        </div>

        <div class="modal-body">
                <table id="table-modal">
                    <thead>
                        <tr>
                            <td>Seleccion</td>
                            <td>Horas No Disponibles</td>
                        </tr>
                    </thead>
                    <tbody>
                        <td> <span id="combo">
                            <h5>Materia</h5>
                            <select id="matter">
                                <option value="vacio">Seleccione Materia</option>
                            </select>
                        </span>
                        <span id="combo">
                           <h5>Docente</h5>
                           <select id="teacher">
                               <option value="vacio">Seleccione Docente</option>
                           </select>
                       </span>

                   </td>
                   <td ><div id="occupied"></div></td>
               </tbody>
             </table>   
            
            <div id="alert" class="alert alert-danger" style="display:none">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="icon-remove"></i>
                </button>
                <strong>Disculpe!</strong>
                <span id="notification"></span>
                <br>
            </div>
        </div>
        <div class="modal-footer">
            <a id='cerrar' href="#" class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</a>
            <a id='borrar' href="#" class="btn" data-dismiss="modal" aria-hidden="true">Borrar</a>
            <a id="insert_info" class="btn btn-primary">Insertar Datos</a>
        </div>
</div><?php }} ?>