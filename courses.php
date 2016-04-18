<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		//$this->load->view('course_list');
		//echo "You made it to the courses controller!";

		$this->load->model("Course");

		$list_of_courses = $this->Course->get_all_courses();

		//var_dump($list_of_courses);

		$this->load->view('course_list', [ "list_of_courses" => $list_of_courses]);

	}

	public function add()
	{
		var_dump($this->input->post());
		die();
	}




}
