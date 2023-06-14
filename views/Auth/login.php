<?php include_once 'views/Layouts/header.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href= "css/authLogin.css">
<h1 id="heading1">Login Here</h1>
       <img src="img/1200px-LiveJournal_icon.svg.png" style="width:100px; height:100px;">
     <div>
         <form action="" class="myForm" name="myForm">
             <div class="input-container">
                 <i class="fa fa-envelope icon"></i>
                 <input type="email" placeholder="Email" name="email" class="input-field" required>
             </div>
             <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input type="password" placeholder="Password" name="password" class="input-field"  required>
               </div>
            <div><input type="submit" class="bttn"></div>
         </form>
     </div>