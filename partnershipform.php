  <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
      body{
        font-family: 'HelveticaNeue-Medium';
        font-weight: bold;
        font-size: 25pt;
        padding: 10% 20%;
      }
    </style>
    <?php
    $a=$_SERVER['HTTP_REFERER'];
    header("refresh:2;url=".$a);
    $name = $_POST['name']; 
    $companyname = $_POST['companyname']; 
    $designation = $_POST['designation']; 
    $role = $_POST['role']; 
    $select = $_POST['select']; 
    $reference = $_POST['reference']; 
    $comments = $_POST['comments']; 
    $tel = $_POST['tel'];
    $email = $_POST['email']; 
    

 $body = "Partnership Form <br>Name : ".$name."<br>Company Name : ".$companyname."<br>Designation : ".$designation."<br>Role : ".$role."<br>How did you know about HDS : ".$select."<br>Reference : ".$reference."<br>Comments : ".$comments."<br> Email : ".$email."<br> Phone : ".$tel;
    include('class.phpmailer.php');
    // include($_SERVER['DOCUMENT_ROOT'].'class.phpmailer.php');
// include($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/captcha_number.php');

                $mail = new PHPMailer;
//              $mail->isSMTP();
                $mail->SMTPAuth   = true;
                $mail->Hostname   = 'rortechnologies.com';
                $mail->Host       = 'ssl://smtp.gmail.com';
                $mail->Port       = 465;
                $mail->Username   = 'vignesh@rortechnologies.com';
                $mail->Password   = '9445654757';
                $mail->From = $email;
                $mail->addAddress('vignesh4vi@gmail.com');
                $mail->FromName = $name;
                $mail->Subject  = $email." has contacted you from HDS Partnership";
                $mail->Body     = $body;
                $mail->isHTML(true);
if($mail->Send()){
echo "Thank you for contacting us. We will be in touch with you very soon.";
}
?>

