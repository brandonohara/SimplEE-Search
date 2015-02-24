<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	* SimplEE Search Installer
	*
	* @package   SimplEE Search
	* @author    Brandon O'Hara <brandon@brandonohara.com>
	* @copyright Copyright (c) 2014 Brandon O'Hara
*/
require_once(PATH_THIRD."simplee_search/config.php");

class Simplee_search_upd {

	var $module_name = SIMPLEE_SEARCH_EE_NAME;
    var $version = SIMPLEE_SEARCH_VERSION;
    
    function install(){
	    ee()->load->dbforge();
	    
	    $data = array(
	        'module_name' => $this->module_name,
	        'module_version' => $this->version,
	        'has_cp_backend' => 'n',
	        'has_publish_fields' => 'n'
	    );
	    ee()->db->insert('modules', $data);
	    
		return TRUE;
	}
	
	function uninstall(){
	    ee()->load->dbforge();
	    
		ee()->db->where('module_name', $this->module_name);
	    ee()->db->delete('modules');
	
	    return TRUE;
	}
	
	function update($current = ''){
	    return FALSE;
	}
}
/* End of file upd.simplee_search.php */
/* Location: system/expressionengine/third_party/simplee_search/upd.simplee_search.php */