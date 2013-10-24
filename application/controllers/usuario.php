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
		      		 ->set_subject('usuario');
		    //  		 ->columns('id','name','alias')
		      //		 ->fields('name','alias','url','path','logo','id')
		      	//	 ->field_type('id', 'hidden', $systemId)
		      	//	 ->display_as('name', 'Nombre del Sistema');

		      	$crud->unset_jquery_ui();

		    //  	$crud->add_action('Urls', base_url().'assets/grocery_crud/themes/flexigrid/css/images/link.png', '','',array($this,'urls'));
		      //	$crud->add_action('Roles', '', '','ui-icon-imagen',array($this,'roles'));
		      	//$crud->add_action('Menu', '', '','ui-icon-imagen',array($this,'menu'));

		      	$crud->callback_add_field('logo', array($this, 'callback_logo_add_field'));
		      	$crud->callback_edit_field('logo', array($this, 'callback_logo_edit_field'));
		      	$crud->callback_after_insert(array($this, 'system_callback_after_insert'));
		      	$crud->callback_after_update(array($this, 'system_callback_after_update'));

		      	 $crud->unset_columns('direccion','est_civil','observacion','nivel_instruccion','clave');
		      	  $crud->required_fields('ci','nombre','apellido','direccion','fecha_nac','sexo','est_civil','tipo_sangre','nivel_instruccion','correo','tipo','estatus','etnia','expediente');
		      	$crud->unset_print();

		      	if($operation == 'insert_validation'){

		      		$crud->set_rules('ci', 'Cedula de Identidad', 'required|is_unique[usuario.ci]|exact_length[10]');
			      	$crud->set_rules('correo', 'Correo Electronico', 'required|is_unique[usuario.correo]|valid_email');
			      	$crud->set_rules('nombre', 'Nombre', 'required|min_length[3]|max_length[80]|alpha');
			      	$crud->set_rules('apellido', 'Apellido', 'required|min_length[3]|max_length[80]|alpha');
			      	$crud->set_rules('fecha_nac', 'Fecha de Nacimiento', 'required|min_length[3]|max_length[80]|alpha');
			      	$crud->set_rules('path', 'path', 'required|is_unique[system.path]|min_length[5]|max_length[44]|callback_path_check');

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

}

?>


