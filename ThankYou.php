


<?php 

if(isset($_POST[ 'contact_btn'])){
  require_once 'mail.php';
  $type_design=$_POST['ld'];
  $email=$_POST[ 'email'];  
 $name=$_POST[ 'name'];
 $msg=$_POST['message' ];
$mail->setFrom($email , $name);
$mail->addAddress('designaimaroc@gmail.com');     //Add a recipient
$mail->Subject = 'you have a message from '. $name ;
$mail->Body    = ' <b> Email :</b>'.$email.
                 ' <br/>  <b> type_design :</b>'.$type_design .
                 ' <br/> <b>Nom : </b> '.$name.
                 ' <br/> <b> message:</b>  '.$msg  ;
 $mail->send();
                  
}
?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&family=Rowdies:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="images/icones/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
 
    <title>Thank you</title>
</head>
<style>
    h2{
       
        font-family: 'Cairo', sans-serif;
    }
    h4{
        font-family: 'Cairo', sans-serif;
       color: blue;
    }
</style>
<body>

      <!-- Home-->
      <div class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <div class="container text-white ">
             <a href="index.php" class="navbar-brand text-info"><img src="" alt="">Ai Au Maroc | الذكاء الاصطناعي <em><img style="width: 40px;" src="Images/icones/icon.png" alt=""></em></a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu" ><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse "id="mainmenu" >
                 <ul class=" navbar-nav ms-auto">
                    <li class="  nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="index.php#about" class="nav-link">À propos </a></li>
                    <li class="nav-item"><a href="index.php#Gallerie" class="nav-link">Gallerie</a></li>
                    <li class="nav-item"><a href="index.php#contact"class="nav-link">Contacter</a></li>
               </ul>
          </div>   
         </div>
    </div>
    <section class=" py-5 ">
        <div class="container p-5  text-dark  ">
               <h2 class="text-danger text-center">Votre imagination a Bientot deviendra réalité 😍 طلبكم سيصبح قريبا حقيقة</h2>          
                <hr style="Height:5px; background-color: black;" >
               <div   class="row">
                  <p class="h4 text-center">لقد تم التوصل بطلبكم بنجاح . سوف نتواصل معك(ي) في أقرب وقت ممكن</p>
                   <h2 class="py-5 text-center">Votre Infos | (ي)معلوماتك </h2>
                   <table class="m-auto   text-center ">
                     <tr >
                            <td><h3><b>Nom : </b>         </h3></td>
                           <td> <h3 class="text-info"><?php echo $_POST[ 'name']?>  </h3> </td>
                            <!-- <td><h6><b> :الاسم           </h3></td> -->
                     </tr>
                     <tr>
                        <td> <h3><b>Email : </b>     </h3></td>
                        <td> <h3 class="text-info">  <?php echo $_POST[ 'email']?>  </h3>   </td>
                        <!-- <td> <h6><b> : البريد الالكتروني          </h3></td> -->
                     </tr>
                     <tr>
                        <td> <h3><b>Type Design : </b>       </h3> </td>
                        <td> <h3 class="text-info">  <?php echo $_POST['ld']?> </h3>  </td>
                        <!-- <td>  <h6><b> : نوع التصميم   </b>        </h6> </td> -->
                     </tr>
                   </table>
                        
                  
               </div>
               <hr>
           <p class="">
           اذا كان لديك أي استفسار أو تساؤل يرجى التواصل معنا عبر الواتساب.  للرجوع الى الصفحة الرئيسية   <a   href="index.php">اضغط هنا</a>     
                                                                           
          </p>
                           
         </div>
         <a href="" class="text-center p-2 navbar-brand text-info" > Ai Au Maroc | الذكاء الاصطناعي <img style="width: 40px;" src="Images/icones/icon.png" alt=""></a>
           
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>                

</body>
</html>