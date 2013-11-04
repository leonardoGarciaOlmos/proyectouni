<?php
class Basededatos_Controller extends CI_Controller
{

	function __construct()
	{ parent::__construct(); }


	public function backup()
	{
		$js_files['dfsdf'] = base_url().'assets/js/base_dato.js';
		$this->smarty->assign('process', 'backup');
		$output = $this->smarty->fetch('BD.tpl');

	    $this->smarty->assign('output', $output);
	    $this->smarty->assign('css_files','');
	    $this->smarty->assign('js_files',$js_files);
	    $this->smarty->display('index.tpl');
	}

	public function generateBackup()
	{
		$return = false;
		$nombre_BD = 'backup' . date('dmY') . '.gz';
		$prefs = array(
                'tables'      => array(),  		// Array of tables to backup.
                'ignore'      => array(),       // List of tables to omit from the backup
                'format'      => 'gzip',        // gzip, zip, txt
                'filename'    => $nombre_BD,    // File name - NEEDED ONLY WITH ZIP FILES
                'add_drop'    => TRUE,          // Whether to add DROP TABLE statements to backup file
                'add_insert'  => TRUE,          // Whether to add INSERT data to backup file
                'newline'     => "\n"           // Newline character used in backup file
              );
		
		$this->load->dbutil();
		$backup =& $this->dbutil->backup($prefs);
		$this->load->helper('download');
		force_download($nombre_BD, $backup);
		$return = true;

		echo json_encode($return);
	}


	public function restore()
	{
		$js_files['dfsdf'] = base_url().'assets/js/base_dato.js';
		$this->smarty->assign('process', 'restore');
		$output = $this->smarty->fetch('BD.tpl');

	    $this->smarty->assign('output', $output);
	    $this->smarty->assign('css_files','');
	    $this->smarty->assign('js_files',$js_files);
	    $this->smarty->display('index.tpl');
	}

}
?>