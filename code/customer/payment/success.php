<?php
  session_start();
  require('../connection.php');
  if(isset($_SESSION['name'])){}
	else{
		header("../customer-login.php");
		
	}

    header("location:../ticket.pdf");

// Include the TCPDF library
//   require_once("../printit/tcpdf.php");
//   $seats=['1A','2A','3A','4A','5A','6A','7A'];
//   // Create a new PDF document
//   $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
  
//   // Set the document metadata
//   $pdf->SetCreator(PDF_CREATOR);
//   $pdf->SetAuthor('Your Name');
//   $pdf->SetTitle('Ticket');
//   $pdf->SetSubject('Ticket');
//   $pdf->SetKeywords('ticket, PDF');

//   // Add a page
//   $pdf->AddPage();
  
  
//   // Set the font and font size
//   $pdf->SetFont('helvetica', '', 14);
//   echo $_SESSION['name'];
//   // Add the passenger's name
//   $pdf->MultiCell(0, 0, 'Passenger: ' . $_SESSION['f_name'], 0, 'L', 0, 1, '', '', true, 0, false, true, 0); //$_SESSION['f_name']

//   // Add the seats
//   $seats_number=$_SESSION['passenger_count'];
//   $schedule_id=$_SESSION['schedule'];
//   for($i=0;$i<$seats_number;$i++)
//   $pdf->MultiCell(0, 0, 'Seats: ' .$seats[$i], 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
//   $sql="Select route_id from schedule where id=$schedule_id";
//   $result=mysqli_query($conn,$sql);
//   $row=mysqli_fetch_assoc($result);
//   $route_id=$row['route_id'];
//   $sql2="Select * from route where id=$route_id";
//   $result2=mysqli_query($conn,$sql2);
//   $row2=mysqli_fetch_assoc($result2);

//   // Add the destination
//   $pdf->MultiCell(0, 0, 'From: ' .$row2['start'] . ' To: ' . $row2['stop'], 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
//   $pdf->MultiCell(0, 0, "Total Amount paid: ".$_SESSION['total_fare'], 0, 'L', 0, 1, '', '', true, 0, false, true, 0);
//   // Output the PDF document as a string
//    // Output the PDF to the browser
//    $pdfContent = $pdf->Output('my_pdf.pdf', 'S');
//    $pdfBase64 = base64_encode($pdfContent);
   // Save the PDF to a file
  // file_put_contents('my_pdf.pdf', $pdfContent);
?>
<!DOCTYPE html>
<html>
<head>
	<title> Reservation </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	</link>
	<link href="../css/Default.css" rel="stylesheet">
	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});

	</script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	<!--bootstrap-css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
	 <!--custom-css-->
	 <link rel="stylesheet" href="../css/style.css">
	
</head>
<body>
	<div class="wrap">
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="image/logo.jpg"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:100px;">
			<?php
			 if(isset($_SESSION['name']))
			 {
			 echo "Welcome,".$_SESSION['f_name']."&nbsp;&nbsp;&nbsp;<a href=\"../logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 ?>
			
			</div>
			<div id="heading">
				<a href="home.php">RailTickets.com</a>
			</div>
			</div>
			<nav class="navbar navbar-expand-lg bg-light shadow fixed-top">
            <div class="container">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="../img/flogo.png" alt="" width="60" height="60" class="d-inline-block align-text-top">
                        </a>
						<a href="#" class="logo-text"><span> <div style="color:black">RailTickets.com</div> </span></a>
                    </div>
                </nav>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mr-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="reservation.php">Home</a>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
			
			<br>
      <div style="top: 120px" >
				<div align='center' style="margin-top: 120px; background: rgb(109,105,180);
background: linear-gradient(153deg, rgba(109,105,180,1) 0%, rgba(255,255,255,1) 18%, rgba(6,205,164,1) 100%, rgba(0,212,255,1) 100%);">
<!-- Add a button to print the PDF -->
<form action="../printing_module.php" method="post">
  <button type="submit" name="download_pdf">Download PDF</button>
</form>
<?php
    // Check if the download button was clicked
    if (isset($_POST['download_pdf'])) {
      // Set the HTTP headers for the PDF download
      header('Content-Type: application/pdf');
      header('Content-Disposition: attachment; filename="my_pdf.pdf"');
  
      // Output the PDF content
      echo $pdfContent;
    }
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>
<iframe src="data:application/pdf;base64,<?php echo $pdfBase64; ?>" width="50%" height="500"></iframe>
<!-- Add a script to print the PDF -->
</html>




<?php
$val_id=urlencode($_POST['val_id']);
$store_id=urlencode("railt63a8a33d4d01f");
$store_passwd=urlencode("railt63a8a33d4d01f@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

$result = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle)))
{

	# TO CONVERT AS ARRAY
	# $result = json_decode($result, true);
	# $status = $result['status'];

	# TO CONVERT AS OBJECT
	$result = json_decode($result);

	# TRANSACTION INFO
	$status = $result->status;
	$tran_date = $result->tran_date;
	$tran_id = $result->tran_id;
	$val_id = $result->val_id;
	$amount = $result->amount;
	$store_amount = $result->store_amount;
	$bank_tran_id = $result->bank_tran_id;
	$card_type = $result->card_type;

	# EMI INFO
	$emi_instalment = $result->emi_instalment;
	$emi_amount = $result->emi_amount;
	$emi_description = $result->emi_description;
	$emi_issuer = $result->emi_issuer;

	# ISSUER INFO
	$card_no = $result->card_no;
	$card_issuer = $result->card_issuer;
	$card_brand = $result->card_brand;
	$card_issuer_country = $result->card_issuer_country;
	$card_issuer_country_code = $result->card_issuer_country_code;

	# API AUTHENTICATION
	$APIConnect = $result->APIConnect;
	$validated_on = $result->validated_on;
	$gw_version = $result->gw_version;




	//echo $amount." ".$tran_id." ".$bank_tran_id." ".$card_type;

} else {

	echo "Failed to connect with SSLCOMMERZ";
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////
?>




<!-- <!DOCTYPE html>
<html>
<body>

<h1>Success</h1>
<p>Payment Completed</p>



</body>
</html> -->

