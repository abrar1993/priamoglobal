<?php
if(isset($_POST['submit'])){
    $to = "ch.abrar50@gmail.com";



    $name = $_POST['name'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];
    $qualification= $_POST['qualification'];
    $state= $_POST['state'];
    $course=$_POST['course'];
    $course=$_POST['message'];
    $subject= $_POST['subject'];
    $body= $_POST['body'];
    $headers = 'From: '.$email . "\r\n";


    $body = "name : ".$name. "\r\n" .
    		"Phone : ".$phone. "\r\n" .
            "email : ".$email. "\r\n" .
            "qualification : ".$qualification. "\r\n" .
            "state : ".$state. "\r\n" .
            "course : ".$course. "\r\n" .
            
    		"Message : " . $body;
    if(mail($to, $subject, $body , $headers)){
        echo "Mail Sent!";
    }else{
         echo "Failed To Send Mail";
    }
}

?>
<html lang="en">
<head>
       
       <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TCWC9RG');</script>
<!-- End Google Tag Manager -->


      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="yandex-verification" content="e190585423a00ce3" />
      <meta name="msvalidate.01" content="41C726EECA2550F63F038E38672658DB" />
      <title>Apply For Study MBBS Abroad | Enroll with Us NoW</title>
   <meta name="description" content="Get the Full information About study MBBS Abroad and Apply For Study MBBS Abroad in the Top Medical Universities. Apply for your seat Now!">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css" >
      <link href="css/normal_header.css" rel="stylesheet">
      <!-- <link href="css/apply.css" rel="stylesheet"> -->
      <link href="css/responsive.css" rel="stylesheet">
      <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script>
         fbq('track', 'FindLocation');
      </script>
      
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
         rel="stylesheet">
    
       <script type="text/javascript">
         var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
         (function(){
         var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
         s1.async=true;
         s1.src='https://embed.tawk.to/5fcdf276920fc91564ce293d/default';
         s1.charset='UTF-8';
         s1.setAttribute('crossorigin','*');
         s0.parentNode.insertBefore(s1,s0);
         })();
      </script>
      <script>
         (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
         'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-TPGPQS4');
      </script>
   </head>
   <body>
   <div id="mySidenav" class="sidenav">
      <div class="query-form-on">
         <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
         <form name="myform" method="POST" action="query-mail.php" onSubmit="return validate()" class="form-horizontal">
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <input type="text" name="name" class="form-control input-text" placeholder="Your Name" required="">
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group">
                     <input type="tel" name="phone" class="form-control input-text" pattern="[0-9]{10}" maxlength="10" placeholder="Mobile"  required="">
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group">
                     <input type="Email" name="email" class="form-control input-text" placeholder="Email" required="">
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group">
                     <input type="text" name="qualification" class="form-control input-text"
                        placeholder="Qualification" required="">
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group">
                     <select name="state" class="form-control" required>
                        <option>Select State</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Jammu and Kashmir"> Jammu and Kashmir</option>
                        <option value="Gujarat"> Gujarat</option>
                        <option value="Karnataka"> Karnataka</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Chhattisgarh"> Chhattisgarh</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Bihar"> Bihar</option>
                        <option value="West Bengal"> West Bengal</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Jharkhand"> Jharkhand</option>
                        <option value="Assam">Assam</option>
                        <option value="Himachal Pradesh"> Himachal Pradesh</option>
                        <option value="Uttarakhand"> Uttarakhand</option>
                        <option value="Punjab"> Punjab</option>
                        <option value="Haryana"> Haryana</option>
                        <option value="Kerala"> Kerala</option>
                        <option value="Meghalaya"> Meghalaya</option>
                        <option value="Manipur"> Manipur</option>
                        <option value="Mizoram"> Mizoram</option>
                        <option value="Nagaland"> Nagaland </option>
                        <option value="Tripura">Tripura</option>
                        <option value="Andaman and Nicobar Islands"> Andaman and Nicobar Islands</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Goa">Goa</option>
                        <option value="Delhi"> Delhi</option>
                        <option value="Puducherry"> Puducherry</option>
                        <option value="Dadra and Nagar Haveli"> Dadra and Nagar Haveli</option>
                        <option value="Chandigarh"> Chandigarh</option>
                        <option value="Daman and Diu"> Daman and Diu</option>
                        <option value="Lakshadweep"> Lakshadweep </option>
                     </select>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group">
                     <select name="course" class="form-control" required>
                        <option>Select Course</option>
                        <option value="MBBS">MBBS</option>
                        <option value="BDS">BDS</option>
                        <option value="MS/MD">MS/MD</option>
                        <option value="MDS">MDS</option>
                        <option value="Other">Other</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group">
                     <textarea class="form-control text-area" name="message" placeholder="Message" rows="3" required></textarea>
                  </div>
               </div>

               <div class="col-md-12">
                  <div class="form-group">
                     <input type="submit" class="btn submit-btn" value="Submit">
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</body>
