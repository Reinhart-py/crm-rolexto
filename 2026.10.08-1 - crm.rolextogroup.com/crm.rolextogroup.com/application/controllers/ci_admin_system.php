<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Ci_admin_system extends CI_Controller {
function __construct()
	{
    parent::__construct();
	$this->load->library(array('Session','Pagination'));
	$this->load->helper(array('form','url','text','date'));
	$this->load->model(array('ci_admin_model','comman_model'));
	 	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		 header("Cache-Control: no-store, no-cache, must-revalidate");
		 header("Cache-Control: post-check=0, pre-check=0", false);
		 header("Pragma: no-cache");
		 header('Cache-Control: no-cache');

	}


	public function if_not_login($url = '')
    {
        if ($this->session->userdata('manager_id') == '') {
            if ($url != '') {
                redirect($url);
            } else {
                redirect('/manager/login');
            }
        } else {
            $data = array();
           return $data;
        }
    }

    public function is_user_login($url = '')
    {
        if ($this->session->userdata('manager_id') != '') {
            if ($url != '') {
                redirect($url);
            } else {
               redirect('manager/dashboard');
            }
        }
    }


     public function index()
	{

        $data=array();
		$data['info']=array(
			'title'=>'Manager - Verticals',
			'page_heading'=>'All Verticals'
		);
            $data['info2']=$this->if_not_login();
           // $data['cats']= $this->comman_model->getJoinList('ci_basics','v_cat');		
        
		$this->load->view('manager/category/index',$data);
	}




}



/* End of file welcome.php */

/* Location: ./application/controllers/welcome.php */