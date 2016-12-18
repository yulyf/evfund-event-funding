<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DisplayHook
 *
 * @author Nolan
 */
class DisplayHook
{
	public function captureOutput()
	{
		$this->CI =& get_instance();
		$output = $this->CI->output->get_output();

		if (ENVIRONMENT != 'testing') {
			echo $output;
		}
	}
}
