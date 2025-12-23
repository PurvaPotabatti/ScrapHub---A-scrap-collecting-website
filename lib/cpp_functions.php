<?php
session_start();
date_default_timezone_set('asia/kolkata');


  class class_functions
  {
	  private $con;
	  
	  function __construct()
	  {   //database connectivity
		  $this->con=new mysqli("localhost","root","","scraphub");
	  }
	  
	  function login($var_username,$var_mobilenumber,$var_emailid)
	  {
		  $current_date=date("Y-m-d");
		  $current_time=date("H:i:s A");
	  if($stmt=$this->con->prepare("INSERT INTO `login`(`user_name`, `mobile_number`, `email_id`, `date`, `time`) VALUES (?,?,?,?,?)"))
	  {
		  $stmt->bind_param("sssss",$var_username,$var_mobilenumber,$var_emailid,$current_date,$current_time);
		  if($stmt->execute())
		  {
			  return true;
		  }
		  else
		  {
			  return false;
		  }
	  }
	  
	  }
	  
	 
	
	/* function get_users_data()
	  { 
	  
		  if($stmt=$this->con->prepare("SELECT `id`, `first_name`, `last_name`, `needtype`, `mobile_number`,`password`, `email_id`, `detailed_description`, `service_time`, `location`, `city`, `state`, `country`, `offered_amount`,`date`, `time` FROM `compose` ORDER BY `id` DESC "))
		  {
			  $stmt->bind_result($res_id,$res_first_name,$res_last_name,$res_needtype,$res_mobile_number,$res_password,$res_email_id,$res_detailed_description,$res_service_time,$res_location,$res_city,$res_state,$res_country,$res_offered_amount,$res_date,$res_time);
			  if($stmt->execute())
			  {
				  $data=array();
				  $counter=0;
				  while($stmt->fetch())
				  {
					  $data[$counter]['id']=$res_id;
					  $data[$counter]['first_name']=$res_first_name;
					  $data[$counter]['last_name']=$res_last_name;
					  
					  $data[$counter]['needtype']=$res_needtype;
					   
					  $data[$counter]['mobile_number']=$res_mobile_number;
					   $data[$counter]['password']=$res_password;
					  $data[$counter]['email_id']=$res_email_id;
					  $data[$counter]['detailed_description']=$res_detailed_description;
					  $data[$counter]['service_time']=$res_service_time;
					  $data[$counter]['location']=$res_location;
					  $data[$counter]['city']=$res_city;
					  $data[$counter]['state']=$res_state;
					  $data[$counter]['country']=$res_country;
					  $data[$counter]['offered_amount']=$res_offered_amount;
					 
					  $data[$counter]['date']=$res_date;
					  $data[$counter]['time']=$res_time;
					  
					  $counter++;
				  }
				  if(!empty($data))
				  {
					  return $data;
				  }
				  else
				  {
				  return false;
				  }
		  }
	  }
	  
  }
	 */
         /*   function delete_user_record($del_id)	 
			{
			
	           if($stmt=$this->con->prepare("DELETE FROM `compose` WHERE `id`=?"))
			   {
			   
	           $stmt->bind_param("i",$del_id);
	  
	               if($stmt->execute())  
	                  {
		                return true;
	                  }		
	  
	              else
	                  {
		                return false;
	                  }
			   }
			} 
	   */
	    /*   function update_user_record($var_first_name,$var_last_name,$var_needtype,$var_contact_number,$var_email_id,$var_detailed_description,$var_service_time,$var_location,$var_city_location,$var_state_location,$var_country_location,$var_offered_amount,$res_edit_id)
			{
				
				 $current_date=date("Y-m-d");
				 $current_time=date("H:i:s A");
				
				if($stmt=$this->con->prepare("UPDATE `compose` SET `first_name`=?,`last_name`=?,`needtype`=?,`mobile_number`=?,`email_id`=?,`detailed_description`=?,`service_time`=?,`location`=?,`city`=?,`state`=?,`country`=?,`offered_amount`=?, `date`=?, `time`=? WHERE `id` =?"))
				{
					
				 $stmt->bind_param("ssssssssssssssi",$var_first_name,$var_last_name,$var_needtype,$var_contact_number,$var_email_id,$var_detailed_description,$var_service_time,$var_location,$var_city_location,$var_state_location,$var_country_location,$var_offered_amount, $current_date,$current_time,$res_edit_id);
				 
				 if($stmt->execute())
				 {
					 echo $stmt->error;
					 return true;
				 }
				else
				{
					return false;
				}
				
				}
			}
	  */
			/*function get_user_data_from_id($res_edit_id)
	  {
		   if($stmt=$this->con->prepare("SELECT `id`, `first_name`, `last_name`, `needtype`, `mobile_number`, `email_id`, `detailed_description`, `service_time`, `location`, `city`, `state`, `country`, `offered_amount`, `date`, `time` FROM `compose` where `id`=?"))
		  {
			  $stmt->bind_param("i", $res_edit_id);
			  
			  $stmt->bind_result($res_id,$res_first_name,$res_last_name,$res_needtype,$res_mobile_number,$res_email_id,$res_detailed_description,$res_service_time,$res_location,$res_city,$res_state,$res_country,$res_offered_amount,$res_date,$res_time);
			  if($stmt->execute())
			  {
				  $data=array();
				 
				  if($stmt->fetch())
				  {	  $data['id']=$res_id;
					  $data['first_name']=$res_first_name;
					  $data['last_name']=$res_last_name;
					  $data['needtype']=$res_needtype;
					  $data['mobile_number']=$res_mobile_number;
					  $data['email_id']=$res_email_id;
					  $data['detailed_description']=$res_detailed_description;
					  $data['service_time']=$res_service_time;
					  $data['location']=$res_location;
					  $data['city']=$res_city;
					  $data['state']=$res_state;
					  $data['country']=$res_country;
					  $data['offered_amount']=$res_offered_amount;
					  
					  $data['date']=$res_date;
					  $data['time']=$res_time;
				  }
				  if(!empty($data))
				  {
					  return $data;
				  }
				  else
				  {
				  return false;
				  }
		  }
	  }
	  }	  */
  }//end of class
  ?>