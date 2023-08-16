<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	/*
	public function hello()
		{
			echo "hell";
		}

	
	public function hello($param1='',$param='')
		{
			echo "hell..$param1..$param";
		}
	*/
		public function biodata()
		{
			echo "Nama:Mochammad Yoggy Pramana Putra";
			echo "<br>";
			echo "Kelas:TI-2G";
			echo "<br>";
			echo "Alamat:Jl.Bukirsari No.14";
			echo "<br>";
			echo "Nim:1541180228";
		}
		public function biodata1($a='',$b='',$c='')
			{
				echo "
				nama=$a <br>
				Nim=$b <br>
				Alamat=$c <br>


				";

			}


}
	