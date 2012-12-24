<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->view_login();
	}
	
	public function view_login(){
		$this->load->view('view_login');
		}
	
	
	public function user_regist(){
		$this->load->view('view_user_regist');
		}
		
	public function build_tree(){
		$this->load->view('view_build_tree');
		}	
		
	public function select_job(){
		$this->load->view('view_select_job');
		}	
		public function company_sign_up(){
		$this->load->view('view_company_regist');
		}
	
}
