<?php
/**
*Plugin Name: Display Unique Customer ID's
*Plugin URI: https://olufemiadeleke.portfoliobox.net/
*Author: Femi Adeleke
*Author URI: mailto:femiaadeleke@gmail.com
*Description: This plugin Displays your unique user ID in your Website. TO use in page content or widgets insert shortcode [customerID]
*Version: 1.0
**/

/*  Copyright 2018  Femi Adeleke   (email : femiaadeleke@gmail.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as 
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
    function unique_customer_ID()      
        {   
            $customer_id = get_current_user_id();
            if ($customer_id == 0) {
                echo 'You are not logged in.';
            } 
		    elseif($customer_id < 10){
                echo 'YOUR UNIQUE CUSTOMER ID:  #000'.$customer_id.'UQD';
            }
			elseif($customer_id >= 10){
                echo 'YOUR UNIQUE CUSTOMER ID:  #00'.$customer_id.'UQD';
            }
			elseif($customer_id >= 100){
                echo 'YOUR UNIQUE CUSTOMER ID:  #0'.$customer_id.'UQD';
            }
			else {
                echo 'YOUR UNIQUE CUSTOMER ID:  #'.$customer_id.'UQD';
            }
        }
        add_shortcode('customerID','unique_customer_ID');
