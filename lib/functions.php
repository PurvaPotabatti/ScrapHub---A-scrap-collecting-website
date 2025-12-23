<?php
session_start();

date_default_timezone_set('Asia/kolkata');

class class_functions
{
	private $con;
	
	function __construct()
	{
		$this->con = new mysqli("localhost","root","","e_doc_services");
	}
	
	function apply($res_name,$res_mb_no,$res_email_id)
	{
		$current_date = date("Y-m-d");
		$current_time = date("H:i:s A");
		
		if($stmt = $this->con->prepare("INSERT INTO `apply`(`name`, `mb_no`, `email_id`, `date`, `time`) VALUES (?,?,?,?,?)"))
		{
			$stmt->bind_param("sssss",$res_name,$res_mb_no,$res_email_id,$current_date,$current_time);
			
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
	
	function get_all_users_data()
	{
		if($stmt = $this->con->prepare("SELECT `id`, `name`,`mb_no`, `email_id`,`date`, `time` FROM `apply`"))
		{
			$stmt->bind_result($res_id,$res_name,$res_mb_no,$res_email_id,$res_date,$res_time);
			
			if($stmt->execute())
			{
				$data = array();
				$counter = 0;
				
				while($stmt->fetch())
				{
					$data[$counter]['id']           =   $res_id;
					$data[$counter]['name']         =   $res_name;
                    $data[$counter]['res_mb_no']	=	$res_mb_no;
					$data[$counter]['email_id']	    =	$res_email_id;
					$data[$counter]['res_date']	    =	$res_date;
					$data[$counter]['res_time']  	=	$res_time;
					
					$counter++;
				}
				
				if(!empty($data))
				{
					echo $stmt->error;
					return $data;
				}
				else
                {
					return false;
				}
				
			}
			
		}
	}
	
	function delete_record($del_id)
	{
		if($stmt = $this->con->prepare("Delete from `apply` where `id`=?"))
		{
			$stmt->bind_param("i",$del_id);
			
			if($stmt->execute())
			{
				return true;
			}
			else{
				return false;
			}
		}
	}
	
	function edit_record($res_name,$res_mb_no,$res_email_id,$res_edit_id)
	{
		$current_date = date("Y-m-d");
		$current_time = date("H:i:s A");
		
		if($stmt = $this->con->prepare("UPDATE `apply` SET `name`=?,`mb_no`=?,`email_id`=?,`date`=?,`time`=? WHERE `id`=?"))
		{
			$stmt->bind_param("sssssi",$res_name,$res_mb_no,$res_email_id,$current_date,$current_time,$res_edit_id);
			
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
	function get_user_data_from_id($edit_id)
	{
		if($stmt = $this->con->prepare("SELECT  `id`,`name`,`mb_no`, `email_id`,`date`, `time` FROM `apply` where `id`=?"))
		{
			$stmt->bind_param("i",$edit_id);
			
			$stmt->bind_result($res_id,$res_name,$res_mb_no,$res_email_id,$res_date,$res_time);
			
			
			if($stmt->execute())
			{
				$data = array();
				
				if($stmt->fetch())
				{
					$data['id']           =   $res_id;
					$data['name']         =   $res_name;
                    $data['res_mb_no']	=	$res_mb_no;
					$data['email_id']	    =	$res_email_id;
					$data['res_date']	    =	$res_date;
					$data['res_time']  	=	$res_time;
					
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
	

  //services functions

  function register_user($res_service_name,$res_name_applicant,$res_name_father,$res_name_mother,$res_dob,$res_gender,$res_age,$res_house_no,
        $res_district,$res_state,$res_pin_code ,$res_aadhar_card_no, $res_poi , $res_poa, $res_pob, $res_por, $res_caste_certificate,$res_father_income,$res_slip, 
		$res_photo_applicant,$res_sign_applicant)
	{
		$current_date = date("Y-m-d");
		$current_time = date("H:i:s A");
	
		if($stmt = $this->con->prepare("INSERT INTO `services`( `service_name`, `name_applicant`, `name_father`, `name_mother`, `dob`, `gender`, `age`, `house_no`, `district`, 
		`state`, `pin_code`, `aadhar_card_no`, `poi`, `poa`, `pob`, `por`, `caste_certificate`, `father_income`, `slip`, `photo_applicant`, `sign_applicant`, `date`, `time`) 
		VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"))
		{
			
			$stmt->bind_param("sssssssssssssssssssssss",$res_service_name,$res_name_applicant,$res_name_father,$res_name_mother,$res_dob,$res_gender,$res_age,$res_house_no,
			 $res_district,$res_state,$res_pin_code ,$res_aadhar_card_no, $res_poi , $res_poa, $res_pob, $res_por, $res_caste_certificate,$res_father_income,$res_slip, 
			 $res_photo_applicant,$res_sign_applicant,$current_date,$current_time);
			
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

	function get_data()
	{
		if($stmt = $this->con->prepare("SELECT `id`, `service_name`, `name_applicant`, `name_father`, `name_mother`, `dob`, `gender`, `age`, `house_no`, `district`,
		 `state`,  `poi`, `poa`, `pob`, `por`, `photo_applicant`, `sign_applicant`, `date`, 
		 `time` FROM `services` "))
		{
			$stmt->bind_result($res_id,$res_service_name,$res_name_applicant,$res_name_father,$res_name_mother,$res_dob,$res_gender,$res_age,$res_house_no,
			$res_district,$res_state, $res_poi , $res_poa, $res_pob, $res_por, $res_photo_applicant
		  ,$res_sign_applicant,$res_date,$res_time);
			
			if($stmt->execute())
			{
				$data = array();
				$counter = 0;
				
				while($stmt->fetch())
				{
					$data[$counter]['id']                   = $res_id;
					$data[$counter]['res_service_name']     = $res_service_name;
					$data[$counter]['res_name_applicant']   = $res_name_applicant; 
					$data[$counter]['res_name_father']      = $res_name_father; 
					$data[$counter]['res_name_mother']      = $res_name_mother; 
					$data[$counter]['res_dob']              = $res_dob; 
					$data[$counter]['res_gender']           = $res_gender; 
					$data[$counter]['res_age']              = $res_age; 
					$data[$counter]['res_house_no']         = $res_house_no; 
					$data[$counter]['res_district']         = $res_district; 
					$data[$counter]['res_state']            = $res_state; 
					$data[$counter]['res_poi']              = $res_poi; 
					$data[$counter]['res_poa']              = $res_poa; 
					$data[$counter]['res_pob']              = $res_pob; 
					$data[$counter]['res_por']              = $res_por; 
					$data[$counter]['res_photo_applicant']  = $res_photo_applicant; 
					$data[$counter]['res_sign_applicant']   = $res_sign_applicant; 
					$data[$counter]['res_date']	            = $res_date;
					$data[$counter]['res_time']         	= $res_time;
					
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

	function delete_service_record($del_id)
	{
		if($stmt = $this->con->prepare("Delete from `services` where `id`=?"))
		{
			$stmt->bind_param("i",$del_id);
			
			if($stmt->execute())
			{
				return true;
			}
			else{
				return false;
			}
		}
	}

	function edit_service_record($res_service_name,$res_name_applicant,$res_name_father,$res_name_mother,$res_dob,$res_gender,$res_age,$res_house_no,
	$res_district,$res_state,$res_pin_code ,$res_aadhar_card_no, $res_poi , $res_poa, $res_pob, $res_por, $res_caste_certificate,$res_father_income,$res_slip,
	$res_photo_applicant,$res_sign_applicant,$res_id)
	{
		$current_date = date("Y-m-d");
		$current_time = date("H:i:s A");
		
		if($stmt = $this->con->prepare("UPDATE `services` SET `service_name`=?,`name_applicant`=?,`name_father`=?,`name_mother`=?,`dob`=?,`gender`=?,`age`=?,
		`house_no`=?,`district`=?,`state`=?,`pin_code`=?,`aadhar_card_no`=?,`poi`=?,`poa`=?,`pob`=?,`por`=?,`caste_certificate`=?,`father_income`=?,`slip`=?,
		`photo_applicant`=?,`sign_applicant`=?,`date`=?,`time`=? WHERE `id`=?"))
		{
			$stmt->bind_param("sssssssssssssssssssssssi",$res_service_name,$res_name_applicant,$res_name_father,$res_name_mother,$res_dob,$res_gender,$res_age,$res_house_no,
			 $res_district,$res_state,$res_pin_code ,$res_aadhar_card_no, $res_poi , $res_poa, $res_pob, $res_por, $res_caste_certificate,$res_father_income,$res_slip,
			 $res_photo_applicant,$res_sign_applicant,$current_date,$current_time,$res_edit_id);
			
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


	function service_update($edit_id)
	{
		if($stmt = $this->con->prepare("SELECT  `id`,`service_name`, `name_applicant`, `name_father`, `name_mother`, `dob`, `gender`, `age`, `house_no`, `district`, 
		`state`, `pin_code`, `aadhar_card_no`, `poi`, `poa`, `pob`, `por`, `caste_certificate`, `father_income`, `slip`, `photo_applicant`, `sign_applicant`, `date`, 
		`time` FROM `services` WHERE `id`=?"))
		{
			$stmt->bind_param("i",$edit_id);
			
			$stmt->bind_result($res_id,$res_service_name,$res_name_applicant,$res_name_father,$res_name_mother,$res_dob,$res_gender,$res_age,$res_house_no,
			$res_district,$res_state,$res_pin_code ,$res_aadhar_card_no,$res_poi,$res_poa,$res_pob,$res_por,$res_caste_certificate,$res_father_income,$res_slip,$res_photo_applicant
		  ,$res_sign_applicant,$res_date,$res_time);
			
			if($stmt->execute())
			{
				$data = array();
								
				if($stmt->fetch())
				{
					$data['id']                      = $res_id;
					$data['res_service_name']        = $res_service_name;
					$data['res_name_applicant']      = $res_name_applicant; 
					$data['res_name_father']         = $res_name_father; 
					$data['res_name_mother']         = $res_name_mother; 
					$data['res_dob']                 = $res_dob; 
					$data['res_gender']              = $res_gender; 
					$data['res_age']                 = $res_age; 
					$data['res_house_no']            = $res_house_no; 
					$data['res_district']            = $res_district; 
					$data['res_state']               = $res_state; 
					$data['res_pin_code']            = $res_pin_code; 
					$data['res_aadhar_card_no']      = $res_aadhar_card_no; 
					$data['res_poi']                 = $res_poi; 
					$data['res_poa']                 = $res_poa; 
					$data['res_pob']                 = $res_pob; 
					$data['res_por']                 = $res_por; 
					$data['res_caste_certificate']   = $res_caste_certificate; 
					$data['res_father_income']       = $res_father_income; 
					$data['res_slip']                = $res_slip; 
					$data['res_photo_applicant']     = $res_photo_applicant; 
					$data['res_sign_applicant']      = $res_sign_applicant; 
					$data['res_date']	             = $res_date;
					$data['res_time']  	             = $res_time;
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
	function get_user_password($var_username)
	{
		
		if($stmt = $this->con->prepare("Select `password` from `admin_login` where `username`=?"))
		{
			$stmt->bind_param("s",$var_username);
			
			$stmt->bind_result($res_password);
			
			if($stmt->execute())
			{
				if($stmt->fetch())
				{
					return $res_password;
				}
				else
				{
					return false;
				}
			}
		}
	}


	function insert_file($res_var_poi_file)
	{
		if($stmt = $this->con->prepare("INSERT INTO `services`(`poi_file`) VALUES (?)"))
		{
			$stmt->bind_param("s",$res_var_poi_file);
			
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

// new try

function my_user($res_service_name,$res_name_applicant,$res_name_father,$res_name_mother,$res_dob,$res_gender,$res_age,$res_house_no,
        $res_district,$res_state,$res_poi,$res_poi_file, $res_poa,$res_poa_file, $res_pob,$res_pob_file,
		 $res_por, $res_por_file, 
		$res_photo_applicant,$res_sign_applicant)
	{
		$current_date = date("Y-m-d");
		$current_time = date("H:i:s A");
		
		if($stmt = $this->con->prepare("INSERT INTO `services`( `service_name`, `name_applicant`, `name_father`, `name_mother`, `dob`
		, `gender`, `age`, `house_no`, `district`, `state`, `poi`, `poi_file`, `poa`, `poa_file`, `pob`
		, `pob_file`, `por`, `por_file`,`photo_applicant`,
		 `sign_applicant`, `date`, `time`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"))
		{
			
			$stmt->bind_param("ssssssssssssssssssssss",$res_service_name,$res_name_applicant,$res_name_father,$res_name_mother,$res_dob,$res_gender,$res_age,$res_house_no,
			$res_district,$res_state, $res_poi,$res_poi_file, $res_poa,$res_poa_file, $res_pob,$res_pob_file,
			 $res_por, $res_por_file, 
			$res_photo_applicant,$res_sign_applicant,$current_date,$current_time);
		
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

	//edit service record new
	
	function edit_service_record_new($res_service_name,$res_name_applicant,$res_name_father,$res_name_mother,$res_dob,$res_gender,$res_age,$res_house_no,
	$res_district,$res_state, $res_poi,$res_poi_file, $res_poa,$res_poa_file, $res_pob,$res_pob_file,
	 $res_por, $res_por_file, 
	$res_photo_applicant,$res_sign_applicant,$res_id)
	{
		$current_date = date("Y-m-d");
		$current_time = date("H:i:s A");
		
		if($stmt = $this->con->prepare("UPDATE `services` SET `service_name`=?,`name_applicant`=?,`name_father`=?,`name_mother`=?,
		`dob`=?,`gender`=?,`age`=?,`house_no`=?,`district`=?,`state`=?,
		`poi`=?,`poi_file`=?,`poa`=?,`poa_file`=?,
		`pob`=?,`pob_file`=?,`por`=?,`por_file`=?,
		`photo_applicant`=?,`sign_applicant`=?,`date`=?,
		`time`=? WHERE `id`=?"))
		{
			
			 $stmt->bind_param("ssssssssssssssssssssssi",$res_service_name,$res_name_applicant,$res_name_father,$res_name_mother,$res_dob,$res_gender,$res_age,$res_house_no,
			$res_district,$res_state,$res_poi,$res_poi_file, $res_poa,$res_poa_file, $res_pob,$res_pob_file,
			 $res_por, $res_por_file, 
			$res_photo_applicant,$res_sign_applicant,$current_date,$current_time,$res_edit_id);

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


	//newww


	function service_update_new($edit_id)
	{
		if($stmt = $this->con->prepare("SELECT `id`, `service_name`, `name_applicant`, `name_father`, `name_mother`, `dob`, `gender`,
		 `age`, `house_no`, `district`, `state`,  `poi`, `poi_file`, `poa`, `poa_file`, `pob`, `pob_file`,
		  `por`, `por_file`, `photo_applicant`, `sign_applicant`, 
		  `date`, `time` FROM `services WHERE `id`=?"))
		{
			$stmt->bind_param("i",$edit_id);
			
			$stmt->bind_result($res_id,$res_service_name,$res_name_applicant,$res_name_father,$res_name_mother,$res_dob,$res_gender,$res_age,$res_house_no,
			$res_district,$res_state, $res_poi,$res_poi_file, $res_poa,$res_poa_file, $res_pob,$res_pob_file,
			 $res_por, $res_por_file, 
			$res_photo_applicant,$res_sign_applicant,$res_date,$res_time);
			
			if($stmt->execute())
			{
				$data = array();
								
				if($stmt->fetch())
				{
					$data['id']                      = $res_id;
					$data['res_service_name']        = $res_service_name;
					$data['res_name_applicant']      = $res_name_applicant; 
					$data['res_name_father']         = $res_name_father; 
					$data['res_name_mother']         = $res_name_mother; 
					$data['res_dob']                 = $res_dob; 
					$data['res_gender']              = $res_gender; 
					$data['res_age']                 = $res_age; 
					$data['res_house_no']            = $res_house_no; 
					$data['res_district']            = $res_district; 
					$data['res_state']               = $res_state; 
					$data['res_poi']                 = $res_poi; 
					$data['res_poi_file']                 = $res_poi_file; 
					$data['res_poa']                 = $res_poa; 
					$data['res_poa_file']                 = $res_poa_file; 
					$data['res_pob']                 = $res_pob; 
					$data['res_pob_file']                 = $res_pob_file; 
					$data['res_por']                 = $res_por; 
					$data['res_por_file']                 = $res_por_file; 
					$data['res_photo_applicant']     = $res_photo_applicant; 
					$data['res_sign_applicant']      = $res_sign_applicant; 
					$data['res_date']	             = $res_date;
					$data['res_time']  	             = $res_time;
					
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

} //End Of Class
	
?>