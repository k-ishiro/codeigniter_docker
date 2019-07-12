<?php
class Blog extends CI_Controller {

 public function __construct(){
 	parent::__construct();
 	
 	//ヘルパの追加
 	$this->load->helper('url');
	$this->load->helper('form');
 }

  public function index()
  {
  	$data['title'] = "My Real Title";
  	$data['heading'] = "My Real Heading";
    echo 'test';  
    var_dump($data);
      exit;
  	$data['query'] = $this->db->get('entry');	//select * from entry;
  	
  	$this->load->view('blog_view', $data);
  }
  
  public function comments()
  {
  	$data['title'] = "comment Title";
  	$data['heading'] = "comment Heading";
  	
  	$this->db->where('entry_id',$this->uri->segment(3));
  	$data['query'] = $this->db->get('comments');

  	$this->load->view('comment_view', $data);
  }
  
  public function comment_insert()
  {
  	$this->db->insert('comments',$_POST);
  	
  	redirect('blog/comments/'.$_POST['entry_id']);
  }
}
?>