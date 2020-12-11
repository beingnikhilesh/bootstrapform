<?php

namespace beingnikhilesh\bootstrapform\php;

################################################################################
#
# Class FormBuilder
# v0.0.1
# Updated 2020.12.12
# 
# Bootstrapform Initiator for PHP
#
#
################################################################################

//Load/Require/Initialise the Required Files
require("FormBuilder.php");

class Bootstrapform extends FormBuilder{
    
	#Construct Function
    function __construct(){
        parent::__construct();
    }
	
	
	#Library Test Function
	function testinit(){
		echo 'The Library has been correctly Loaded';
	}
    
}

