<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 $config = array(
 			   'register/signup'=> array (			
                	array(
                    	'field'   => 'first_name',
                     	'label'   => 'First Name',
                     	'rules'   => 'trim|required'
                  	),
               		array(
                    	 'field'   => 'last_name',
                    	 'label'   => 'Last Name',
                    	 'rules'   => 'trim|required'
                  	),
                  array(
                       'field'   => 'email',
                       'label'   => 'Email',
                       'rules'   => 'trim|required|valid_email'
                    ),
                  array(
                       'field'   => 'phone',
                       'label'   => 'Telephone',
                       'rules'   => 'trim'
                    ),      
                  array(
                       'field'   => 'company',
                       'label'   => 'Company',
                       'rules'   => 'trim'
                    ),   
                  array(
                       'field'   => 'address_1',
                       'label'   => 'Address line 1',
                       'rules'   => 'trim'
                    ),   
                  array(
                       'field'   => 'address_2',
                       'label'   => 'Address line 2',
                       'rules'   => 'trim'
                    ),   
                  array(
                       'field'   => 'city',
                       'label'   => 'City',
                       'rules'   => 'trim'
                    ),   
                  array(
                       'field'   => 'state',
                       'label'   => 'State',
                       'rules'   => 'trim'
                    ),   
                  array(
                       'field'   => 'zip',
                       'label'   => 'zip',
                       'rules'   => 'trim|max_length[9]'
                    ),   
                  array(
                       'field'   => 'website',
                       'label'   => 'Website',
                       'rules'   => 'trim|prep_url'
                    ),   
                  array(
                       'field'   => 'referral',
                       'label'   => 'Referral',
                       'rules'   => 'trim'
                    ),   
               		array(
                    	 'field'   => 'operating_system',
                    	 'label'   => 'Operating System',
                    	 'rules'   => 'trim|is_natural_no_zero|required'
                  	)
                )
            );
