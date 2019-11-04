<?php defined('BASEPATH') OR exit('No direct script access allowed');

class menu_model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_items()
    {
        
        return $this->db->get('menu')->result(); 
        
        
        ////$this->$table ต้องเป็นชื่อตาราง แต่เนื่องจากเราสร้างตัวแปล $table เก็บค่าแล้ว จากนั้นใส่ result เพื่อแสดงค่าทั้งหมด
	}

	public function get_menu($menu_id)
    {
		$this->db->select('menu_id','menu_name','mcategory_id','mshop_id');
		$result = $this->db->get_where('menu', array('menu_id' => $mid));
		return $return;
	}
	
	public function menu_insert($menu_id,$menu_name,$mcategory_id,$mshop_id)
	{
		$this->db->query("insert into menu (menu_id,menu_name,mcategory_id,mshop_id) values ('$menu_id','$menu_name','$mcategory_id','$mshop_id')");
	}
	
	public function delete_menu_id($menu_id)
    {
        $this->db->where('menu_id', $menu_id);
        $this->db->delete('menu');  //ชื่อตาราง
	}	
	
	function menu_update($data,$menu_id){
		$this->db->where('menu_id',$menu_id);
		$this->db->update('menu',$data);
	}
}
