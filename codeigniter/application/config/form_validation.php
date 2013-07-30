<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 $config = array(
 			   'register/signup'=> array (			
                	array(
                    	 'field'   => 'first_name',
                     	'label'   => 'First Name',
                     	'rules'   => 'required'
                  	),
               		array(
                    	 'field'   => 'last_name',
                    	 'label'   => 'Last Name',
                    	 'rules'   => 'required'
                  	),
               		array(
                    	 'field'   => 'email',
                    	 'label'   => 'Email',
                    	 'rules'   => 'trim|required|valid_email'
                  	),   
               		array(
                    	 'field'   => 'mac_pc',
                    	 'label'   => 'Mac / PC',
                    	 'rules'   => 'is_natural_no_zero|required'
                  	)
                )
            );
