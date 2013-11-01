<?php
	class Usuario_Controller extends CI_Controller{

		public function index( $operation = '', $systemId = '' )
		{
			try{
				$this->load->library('grocery_crud');
			    $crud = new grocery_CRUD();
		      	$crud->set_theme('twitter-bootstrap');
		      	$crud->set_language('spanish');
		     	$crud->set_table('usuario')
		      		 ->set_subject('usuario')
		      		 ->unset_add_fields('direccion','expediente','estatus','tipo','observacion');
				//$crud->field_type('clave', 'password');
				$crud->callback_insert(array($this,'encrypt_password_and_insert_callback'));
		      	$crud->unset_jquery_ui();
 			//	$crud->callback_field('clave',array($this,'field_callback_1'));
		      	 $crud->unset_columns('direccion','est_civil','observacion','nivel_instruccion','clave');
		      	  $crud->required_fields('ci','nombre','apellido','direccion','fecha_nac','sexo','est_civil',
		      	  	'tipo_sangre','nivel_instruccion','correo','etnia','clave');
		      	$crud->unset_print();

		      	$crud->add_fields('ci','nombre','apellido','direccion','fecha_nac','sexo','est_civil',
		      	  	'tipo_sangre','nivel_instruccion','correo','etnia','clave','confirmacion_de_clave');

		      	if($operation == 'insert_validation'){

/*		      		$crud->set_rules('ci', 'Cedula de Identidad', 'required|is_unique[usuario.ci]|exact_length[8]');
			      	$crud->set_rules('nombre', 'Nombre', 'required|min_length[3]|max_length[80]|alpha');
			      	$crud->set_rules('apellido', 'Apellido', 'required|min_length[3]|max_length[80]|alpha');
			      	$crud->set_rules('correo', 'Correo Electronico', 'required|is_unique[usuario.correo]|valid_email');
			      	$crud->set_rules('fecha_nac', 'Fecha de Nacimiento', 'required|min_length[3]|max_length[80]');
			      	$crud->set_rules('clave', 'clave', 'required|min_length[6]|max_length[44]');
			      	$crud->set_rules('confirmacion_de_clave', 'Confirmacion de Clave', 'required|min_length[6]|max_length[44]|matches[clave]');

*/

		      	}else if($operation == 'update_validation'){

/*		      		$crud->set_rules('name', 'nombre del sistema', 'required|callback_name_check|callback_unique_edit_check[name]|min_length[5]|max_length[79]');
			      	$crud->set_rules('alias', 'alias', 'required|alpha|callback_unique_edit_check[alias]|min_length[2]|max_length[5]');
			      	$crud->set_rules('url', 'url', 'required|callback_unique_edit_check[url]|min_length[2]|max_length[149]|callback_url_check');
			      	$crud->set_rules('path', 'path', 'required|callback_unique_edit_check[path]|min_length[5]|max_length[44]|callback_path_check');*/
			    }

			    $crud->unset_delete();

		      	$output = $crud->render();

		      	$output->js_files['hdghjddtjdtjd'] = base_url().'assets/js/chosen-icon.js';
		      	$output->js_files['hdghjddtjdtjl'] = base_url().'assets/js/icon-array.js';
		      	$output->js_files['hdghjddtjdtjy'] = base_url().'assets/js/system-icons.js';
		      	$output->css_files['hdghjddtjdtjy'] = base_url().'assets/chosen/chosen.css';


		    }catch(Exception $e){

		     	show_error($e->getMessage().' --- '.$e->getTraceAsString());

		    }

		    $this->smarty->assign('output',$output->output);
		    $this->smarty->assign('css_files',$output->css_files);
		    $this->smarty->assign('js_files',$output->js_files);
		    $this->smarty->display('index.tpl');


		}

/*function field_callback_1($value = '', $primary_key = null)
{
	return	'<input id="field-clave" name="clave" type="password" value="'.$value.'" maxlength="60">
				<div class="form-field-box" id="clave_confirm_field_box">
					<div class="form-display-as-box" id="clave_confirm_display_as_box">
						Confirmación Clave :
						<span class="required">*</span>
					</div>
					<div class="form-input-box control-group" id="clave_confirm_input_box">
						<input id="field-clave_confirm" name="clave_confirm" type="password" value="'.$value.'" maxlength="60">					</div>
					<div class="clear"></div>
				</div>';
//    return '+30 <input type="text" maxlength="50" value="'.$value.'" name="phone" style="width:462px">';
}*/


		private function encrypt_password_and_insert_callback($post_array) {
		  $this->load->library('encrypt');
		  $key = 'super-secret-key';
		  $post_array['clave'] = $this->encrypt->encode($post_array['password'], $key);
		 
		  return $this->db->insert('db_user',$post_array);
		}



}

?>


