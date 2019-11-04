<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage_menu extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('menu_model');
	}

	public function index()
	{
		$this->load->view('formenu');
	}

	public function show()
	{
                $data['items'] = $this->menu_model->get_items();
                $this->load->view('formenu',$data);

                
        }

	public function view()
	{
		$result = $this->menu->getShow();
		$this->load->view('view_all',$result);
	}

	public function fordelete(){
                
		$menu_id=$this->input->get('bookid');
		$this->menu_model->delete_menu_id($menu_id);
		$this->load->view('manage_menu/show');
		
}

public function foredit(){
                
	$menu_id=$this->input->get('bookid');
	$this->menu_model->get_menu($menu_id);
	$this->load->view('manage_menu/show');
	
}

	public function data_submit()
	{
        $menu_id = $this->input->post('menu_id');
        $menu_name = $this->input->post('menu_name');
        $mcategory_id = $this->input->post('mcategory_id');
        $mshop_id = $this->input->post('mshop_id');       
        echo $menu_id; 
        echo "<br/>";
        echo $menu_name;
        echo "<br/>";
        echo $mcategory_id;
        echo "<br/>";
        echo $mshop_id;

        $this->menu_model->menu_insert($menu_id,$menu_name,$mcategory_id,$mshop_id);
		}
		
		public function update(){
			$menu = array(
				'menu_id' => $this->input->post('menu_id'),
				'menu_name' => $this->input->post('menu_name'),
				'mcategory_id' => $this->input->post('mcategory_id'),
				'mshop_id' => $this->input->post('mshop_id'),
			);
	
			$this->menu_model->menu_update($menu,$this->input->post('menu_id'));
			$result = $this->menu_model->getmenu();
			$this->load->view('formenu',$result);
		}

		

}