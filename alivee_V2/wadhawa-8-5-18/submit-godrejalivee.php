<?php
@ob_start();
@session_start();
$sessid=session_id();

$campaign = $_POST['campaign'];

if($campaign == "Google")
{
	$home_url = "http://godrejalivee.com/google-godrejalivee-page.php";
	$thank_you_url = "http://godrejalivee.com/google-thank-you-godrejalivee.php";
}
else
{
	$home_url = "http://godrejalivee.com/google-godrejalivee-page.php";
	$thank_you_url = "http://godrejalivee.com/google-thank-you-godrejalivee.php";
}

$pdf_url = "/Brochure.pdf";
$location = 'India';

date_default_timezone_set('Asia/Kolkata');

echo "<pre>";
print_r($_POST);
die();
if ($_SERVER['REQUEST_METHOD'] != 'POST')
{
     header("Location: $home_url");
}
if(isset($_POST["enquiry"]))
{
	$name = $_POST['name'];
	$email_id = $_POST['email'];
	$mobile = $_POST['contact'];
	$keep_you_posted = $_POST['keep_you_posted'];
	$campaign = $_POST['campaign'];
	 $utm_source = $_POST['utm_source'];
	$utm_medium = $_POST['utm_medium'];
	$utm_campaign = $_POST['utm_campaign'];
	$email_body = "Name: $name<br><br>
			Email Id: $email_id<br><br>
			Mobile: $mobile";

	if($name == '' || $email_id == '' || $mobile == '' || !(is_string($name)) || !(is_numeric($mobile)))
	{
		header("Location: $home_url?error2=1");
	}
	else
	{		
		$to = array("info@riogapremium.com",$email_id);
		
		$subject = "Enquiry from Godrej Alive - India";
		
		$usermessage = "Good day,<br><br>
				Thank you for your time and interest in <strong>Godrej Alive</strong> Project<br><br>
					We have received your request for a call back and will ensure that one of our sales experts gives you a call within the next 24 hours and provide you with complete information of the projects.<br><br>
					To get in touch directly, you may call us on 9930077799 <br><br>
					Regards,<br>
					<strong>Rioga Premium Real Estate Advisory</strong><br><br>
                    Corporate Office: 946, 9th Floor, Platina,<br>
                    G Block, Bandra Kurla Complex, Mumbai - 400 051<br><br>
                    Branch Office: 302, Glamcent <br>
                    Central Avenue Road, Chembur, Mumbai - 400071<br><br>
                    <strong>Mobile: +919930077799</strong>";

		$usersubject = 'Thank you for your interest in Godrej Alive - India ';

		send_mail($to,$email_body,$subject,$usersubject,$usermessage);
		
		$received_on = date('Y-m-d H:i:s');

		$table = 'enquiry';
		$data = array(
				'fullname' => $name,
				'email_id' => $email_id,
				'mobile' => $mobile,
				'keep_you_posted' => $keep_you_posted,
				'campaign' => $campaign,
				'utm_source' => $utm_source,
		         'utm_medium' => $utm_medium,
		         'utm_campaign' => $utm_campaign,
				'location' => $location,
				'received_on' => $received_on
		);
		insert_in_database($table,$data);

		header("Location: $thank_you_url");
	}
}
if(isset($_POST["enquiry-1"]))
{
	$name = $_POST['name'];
	$email_id = $_POST['email'];
	$mobile = $_POST['contact'];
	$keep_you_posted = $_POST['keep_you_posted'];
	$campaign = $_POST['campaign'];
    $utm_source = $_POST['utm_source'];
	$utm_medium = $_POST['utm_medium'];
	$utm_campaign = $_POST['utm_campaign'];
	$email_body = "Name: $name<br><br>
			Email Id: $email_id<br><br>
			Mobile: $mobile";

	if($name == '' || $email_id == '' || $mobile == '' || !(is_string($name)) || !(is_numeric($mobile)))
	{
		header("Location: $home_url?error11=1");
	}
	else
	{		
		$to = array("info@riogapremium.com",$email_id);
		
		$subject = "Enquiry from Godrej Alive - India";
		
		$usermessage = "Good day,<br><br>
				Thank you for your time and interest in <strong>Godrej Alive</strong> Project<br><br>
					We have received your request for a call back and will ensure that one of our sales experts gives you a call within the next 24 hours and provide you with complete information of the projects.<br><br>
					To get in touch directly, you may call us on 9930077799 <br><br>
					Regards,<br>
					<strong>Rioga Premium Real Estate Advisory</strong><br><br>
                    Corporate Office: 946, 9th Floor, Platina,<br>
                    G Block, Bandra Kurla Complex, Mumbai - 400 051<br><br>
                    Branch Office: 302, Glamcent <br>
                    Central Avenue Road, Chembur, Mumbai - 400071<br><br>
                    <strong>Mobile: +919930077799</strong>";

		$usersubject = 'Thank you for your interest in Godrej Alive - India';

		send_mail($to,$email_body,$subject,$usersubject,$usermessage);
		
		$received_on = date('Y-m-d H:i:s');

		$table = 'enquiry';
		$data = array(
				'fullname' => $name,
				'email_id' => $email_id,
				'mobile' => $mobile,
				'keep_you_posted' => $keep_you_posted,
				'campaign' => $campaign,
				'utm_source' => $utm_source,
		        'utm_medium' => $utm_medium,
		        'utm_campaign' => $utm_campaign,
				'location' => $location,
				'received_on' => $received_on
		);
		insert_in_database($table,$data);

		header("Location: $thank_you_url");
	}
}
if(isset($_POST["Callme"]))
{
	$mobile = $_POST['callme'];
	$form_type = $_POST['form_type'];
	$campaign = $_POST['campaign'];
	$utm_source = $_POST['utm_source'];
	$utm_medium = $_POST['utm_medium'];
	$utm_campaign = $_POST['utm_campaign'];
	$email_body = "Mobile: $mobile";
	if($mobile == '' || !(is_numeric($mobile)))
	{
		header("Location: $home_url?error1=1");
	}
	else
	{
		$to = array("info@riogapremium.com");
		$subject = "Call me request from Godrej Alive - India ";

		send_mail($to,$email_body,$subject);
		
		$received_on = date('Y-m-d H:i:s');

		$table = 'callme';
		$data = array(
			'mobile' => $mobile,
			'form_type' => $form_type,
			'campaign' => $campaign,
			'utm_source' => $utm_source,
	        'utm_medium' => $utm_medium,
	        'utm_campaign' => $utm_campaign,
			'location' => $location,
			'received_on' => $received_on
		);
		
		insert_in_database($table,$data);

		header("Location: $thank_you_url");
	}
}
/*
if(isset($_POST["Callback"]))
{
	$mobile = $_POST['callback'];
	$form_type = $_POST['form_name'];
	$campaign = $_POST['campaign'];
	$email_body = "Mobile: $mobile";

    $to = "info@riogapremium.com";
    $subject = "Enquiry for Unit Pricing from $campaign LP";

    send_mail($to,$email_body,$subject);

    $table = 'callme';
    $data = array(
        'mobile' => $mobile,
        'form_type' => $form_type,
        'campaign' => $campaign,
        'location' => $location
    );

    insert_in_database($table,$data);

    header("Location: $thank_you_url");
}
*/

if(isset($_POST["download_brochure"]))
{
	$fullname = $_POST['name'];
	$email_id = $_POST['email'];
	$mobile = $_POST['number'];
	$campaign = $_POST['campaign'];
	$utm_source = $_POST['utm_source'];
	$utm_medium = $_POST['utm_medium'];
	$utm_campaign = $_POST['utm_campaign'];
	$email_body = "Name: $fullname<br><br>
		Email Id: $email_id<br><br>
		Mobile: $mobile";

    $to = array("info@riogapremium.com",$email_id);
	
    $subject = "Enquiry from Download Brochure Godrej Alive - India ";

	$usermessage = "Good day,<br><br>
				Thank you for your time and interest in <strong>Godrej Alive</strong> Project<br><br>
					We have received your request for a call back and will ensure that one of our sales experts gives you a call within the next 24 hours and provide you with complete information of the projects.<br><br>
					To get in touch directly, you may call us on 9930077799 <br><br>
					Regards,<br>
					<strong>Rioga Premium Real Estate Advisory</strong><br><br>
                    Corporate Office: 946, 9th Floor, Platina,<br>
                    G Block, Bandra Kurla Complex, Mumbai - 400 051<br><br>
                    Branch Office: 302, Glamcent <br>
                    Central Avenue Road, Chembur, Mumbai - 400071<br><br>
                    <strong>Mobile: +919930077799</strong>";

    $usersubject = 'Thank you for your interest in Godrej Alive - India ';

    send_mail($to,$email_body,$subject,$usersubject,$usermessage);
	
	$received_on = date('Y-m-d H:i:s');

    $table = 'download_brochure';
	
    $data = array(
        'fullname' => $fullname,
        'email_id' => $email_id,
        'mobile' => $mobile,
        'campaign' => $campaign,
        'utm_source' => $utm_source,
	    'utm_medium' => $utm_medium,
	    'utm_campaign' => $utm_campaign,
        'location' => $location,
		'received_on' => $received_on
    );
	
    insert_in_database($table,$data);

   // header("Location: http://ltemeraldislepowai.com/landing-page/emerland-isle/index.html");
    
   /*$fileurl = '/landing-page/emerland-isle/Brochure.pdf';

    $url = "http://ltemeraldislepowai.com/landing-page/emerland-isle/index.html"; */

    echo '
	<a style = "display:none" id="link" href="'.$pdf_url.'" download = "'.$pdf_url.'" >Download</a>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		 	DoTheRedirect("' . $thank_you_url . '");
			 
			function DoTheRedirect(url) {
				document.getElementById("link").click();
				window.setTimeout(function(){
                                window.location = url;
                            }, 1);
			}
			</script>';
}
/*
if(isset($_POST["site_visit"]))
{
	$fullname = $_POST['name'];
	$email_id = $_POST['email'];
	$mobile = $_POST['contact'];
    $date = $_POST['date'];
    $format_date = date_format(date_create($date), 'Y-m-d');
	$send_date = date_format(date_create($date), 'd/m/Y');
    $time = $_POST['time'];
    $format_time = gmdate("H:i:s", strtotime($time) + date("Z"));
    $pick_up_location = $_POST['pickup_location'];
	$campaign = $_POST['campaign'];

	$email_body = "Name: $fullname<br><br>
		Email Id: $email_id<br><br>
		Mobile: $mobile<br><br>
		Date: $send_date<br><br>
		Time: $time<br><br>
		Pick up Location: $pick_up_location";

    $to = array("info@riogapremium.com",$email_id);
	
    $subject = "Schedule a Visit from Godrej $campaign LP";

	$usermessage = "Good day,<br><br>
				Thank you for your time and interest in Godrej Platinum Tower 4 Pre Launch!<br><br>
				We’ve received your request for a call back and will ensure that one of our sales experts gives you a call within the next 24 hours and provide you with complete information of the project, pricing and schedule your appointment at site office.<br><br>
				Regards,<br>
				<strong>Rioga Premium Real Estate Advisory</strong><br><br>
				A: 946, 9th Floor, Platina,<br>
				G Block, Bandra Kurla Complex, Mumbai - 400 051<br>
				M: +91 9930 904 488<br>
				D: +91 22 6505 3333";

    $usersubject = 'Thank you for your interest in Godrej Platinum Tower 4 Pre Launch';

    send_mail($to,$email_body,$subject,$usersubject,$usermessage);
	
	$received_on = date('Y-m-d H:i:s');

    $table = 'sitevisit';
    $data = array(
        'fullname' => $fullname,
        'email_id' => $email_id,
        'mobile' => $mobile,
        'date' => $format_date,
        'time' => $format_time,
        'pick_up_location' => $pick_up_location,
        'campaign' => $campaign,
        'location' => $location,
		'received_on' => $received_on
    );
    insert_in_database($table,$data);

    header("Location: $thank_you_url");
}
*/
if(isset($_POST["unit_pricing"]))
{
	$fullname = $_POST['name'];
	$email_id = $_POST['email'];
	$mobile = $_POST['mobile'];
	$flat_type = $_POST['flat_type'];
    $utm_source = $_POST['utm_source'];
	$utm_medium = $_POST['utm_medium'];
	$utm_campaign = $_POST['utm_campaign'];
	$email_body = "Name: $fullname<br><br>
	Email Id: $email_id<br><br>
	Mobile: $mobile<br><br>
	Flat Type: $flat_type<br><br>";

    $to = array("swapnil.a@brightbraintech.com",$email_id);
	
    $subject = "Enquiry for Unit Pricing from Godrej Alive - India ";

	$usermessage = "Good day,<br><br>
				Thank you for your time and interest in <strong>Godrej Alive</strong> Project<br><br>
					We have received your request for a call back and will ensure that one of our sales experts gives you a call within the next 24 hours and provide you with complete information of the projects.<br><br>
					To get in touch directly, you may call us on 9930077799 <br><br>
					Regards,<br>
					<strong>Rioga Premium Real Estate Advisory</strong><br><br>
                    Corporate Office: 946, 9th Floor, Platina,<br>
                    G Block, Bandra Kurla Complex, Mumbai - 400 051<br><br>
                    Branch Office: 302, Glamcent <br>
                    Central Avenue Road, Chembur, Mumbai - 400071<br><br>
                    <strong>Mobile: +919930077799</strong>";

    $usersubject = 'Thank you for your interest in Godrej Alive - India ';

    send_mail($to,$email_body,$subject,$usersubject,$usermessage);
	
	$received_on = date('Y-m-d H:i:s');

    $table = 'unit_pricing';
    $data = array(
        'fullname' => $fullname,
        'email_id' => $email_id,
        'mobile' => $mobile,
        'flat_type' => $flat_type,
        'utm_source' => $utm_source,
	    'utm_medium' => $utm_medium,
	    'utm_campaign' => $utm_campaign,
		'received_on' => $received_on
    );
    insert_in_database($table,$data);

    header("Location: $thank_you_url");
}

function send_mail($to,$content,$subject,$user_subject = "",$user_content = "")
{
	$to_array_cnt = count($to);
	
    require('phpmailer/PHPMailerAutoload.php');

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "admin@brightbraintech.com";
    $mail->Password = "Brightbrain@123";
    $mail->setFrom("amitr@riogapremium.com", "Godrej Alive");
    $mail->addAddress($to[0]);
	//$mail->addAddress("rajeshs@riogapremium.com");
	$mail->addAddress("swapnil.a@brightbraintech.com");
    $mail->addBCC("adwords@brightbraintech.com", "Adwords");
    $mail->Subject = $subject;
    $mail->msgHTML($content);
    $mail->send();

	if($to_array_cnt > 1)
	{
		$mail2 = clone $mail;
		$mail2->ClearAllRecipients();
		$mail2->addAddress($to[1]);
		$mail2->Subject = $user_subject;
		$mail2->msgHTML($user_content);
		$mail2->send();
	}
}

function insert_in_database($table, $data)
{
    $con = mysqli_connect("localhost","godrejal_alivee1","$[3]obe%_!fH","Godrej godrejal_godrejalivee");
	
    $fields = array_keys($data);

    $values = array_map( array($con, 'real_escape_string'), array_values( $data ) );
	
    mysqli_query($con, "INSERT INTO $table(".implode(",",$fields).") VALUES ('".implode("','", $values )."');") or die( mysqli_error($con) );

	mysqli_close($con);
}

?>