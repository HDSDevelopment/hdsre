 <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <style type="text/css">
      body{
        font-family: 'HelveticaNeue-Medium';
        font-weight: bold;
        font-size: 25pt;
        padding: 10% 20%;
      }
    </style>
    <?php
    // $a=$_SERVER['HTTP_REFERER'];

    // header("refresh:4;url=".$a);

    $name = $("input#name").val();
    $comapnyname = $("input#comapnyname").val();
    $designation = $("input#designation").val();
    $role = $("textarea#role").val();
    $how = $("textarea#how").val();
    $reference = $("textarea#reference").val();
    $comments = $("textarea#comments").val();
    $tel = $("textarea#tel").val();
    $email = $("textarea#email").val();


$body = "You have received a new message from your website partnership form.\n\n"."Here are the details:\n\nName: $name\n\nCompany Name: $comapnyname\n\nDesignation: $designation\n\nRole: $role\n\nHow did you know HDS: $how\n\nReferences: $reference\n\nEmail: $email\n\nPhone: $phone\n\Comments:\n$comments";

 include('class.phpmailer.php');
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
                $mail->addAddress('jagan@rortechnologies.com');
                $mail->FromName = $name;
                $mail->Subject  = $email." has contacted you from HighBrow Diligence";
                $mail->Body     = $body;
                $mail->isHTML(true);
              //$result = $mail->Send();
echo $body;

if($mail->Send()){
echo "Thank you for contacting us. We will be in touch with you very soon.";
  header('Content-type: application/pdf');
  header('Content-disposition: attachment; filename=filename.pdf');
  readfile($filename);
 
}

?>
