<?php
include 'header.php';

?>


<div class="container">
   <div class="col-sm-12 col-12 banner">
        <span class="mainhead">ড্যাশবোর্ড<br><span class="head">বাংলাদেশ ছাত্রলীগ &nbsp;&nbsp;|&nbsp;&nbsp;ড্যাশবোর্ড</span></span>
      
   </div>
   
</div>



<!---------------------------------End Title--------------------------------------->




<div class="container" >
	<div class="col-sm-12 col-12" id="gray">
		<div class="col-sm-12 col-12" id="white">


			<div class="row">
				<div class="col-sm-4 col-12">

					<div style="border: 1px solid lightgray;">
						<center>
						<img src="img/t6.jpg" class="img-fluid" id="dashimg"><br><br>
						<span>আল নাহিয়ান খান জয়</span><br>
						<span style="font-size: 12px;">সভাপতি (ভারপ্রাপ্ত)</span>
					</center><br>


					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="border-top: 1px solid lightgray;">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-all" role="tab" aria-controls="v-pills-messages" aria-selected="false">All Messages</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Password</a>
                   </div>
					</div>
		
				</div>


				<div class="col-sm-8 col-12">

				 <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                 <form method="POST" style="font-size: 14px;">
                 	 <h4><span uk-icon="icon: info; ratio: 1.2"></span>&nbsp;&nbsp;My Information</h4>
                <div class="form-row">
               
  	               <div class="form-group col-md-6" >
                   <label>First Name :</label>
                   <input type="text" name="firstname" class="form-control log" id="fname" placeholder="First Name">
                  </div>

  	              <div class="form-group col-md-6" >
                  <label>Last Name :</label>
                  <input type="text" name="lastname" class="form-control log" id="lname" placeholder="Last Name">
                  </div>

  	              <div class="form-group col-md-12" >
                  <label>Street Address :</label>
                  <input type="text" name="address" class="form-control log" id="address" placeholder="Street Address">
                 </div>

   	             <div class="form-group col-md-6" >
                 <label>Town/City :</label>
                 <input type="text" name="town" class="form-control log" id="town" placeholder="Town/City ">
                 </div>

   	             <div class="form-group col-md-6" >
                 <label>District :</label>
                 <select class="custom-select log" id="district">
                 <option selected>Open this select menu</option>
                 <option value="1">One</option>
                 <option value="2">Two</option>
                 <option value="3">Three</option>
                </select>
                </div>


  	            <div class="form-group col-md-12" >
                <label>Phone :</label>
                <input type="text" name="phone" class="form-control log" id="phone" placeholder="Phone ">
                </div>


                  <div class="form-group col-md-12" >
                 <label>Email Address :</label>
                 <input type="email" name="email" class="form-control log" id="email" placeholder="Enter email">
                 <br>
                 </div>  

                <button type="submit" name="update" class="update" id="signbtn">UPDATE</button>  

                 </div>
                </form>
              </div><!-----------------------End First Tab----------------->



                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                	<form method="POST" style="font-size: 14px;">
                 	 <h4><span uk-icon="icon: commenting; ratio: 1.2"></span>&nbsp;&nbsp;Message</h4>
                <div class="form-row">

                	  <div class="form-group col-md-12" >
                   <label>Title :</label>
                   <input type="text" name="title" class="form-control log" id="title" placeholder="Title">
                  </div>
               
  	               <div class="form-group col-md-12" >
                   <label>Message :</label>
                   <textarea rows="10" placeholder="Message" name="message" class="form-control logs" id="message"></textarea>
                  </div>



                <button type="submit" name="update" class="update" id="signbtn">SEND</button>  

                 </div>
                </form>
                </div>



                  <div class="tab-pane fade" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                	<form method="POST" style="font-size: 14px;">
                 	 <h4><span uk-icon="icon: commenting; ratio: 1.2"></span>&nbsp;&nbsp;All Message</h4>
                <div class="form-row">

                	<table class="table table-bordered">
                	   <thead>
                	   	 <tr>
                	   	 	<td>SL.</td>
                	   	 	<td>Title</td>
                	   	 	<td>Message</td>
                	   	 	<td>Action</td>
                	   	 </tr>
                	   </thead>

                	   <tbody>
                	   	 <tr>
                	   	 	<td>01</td>
                	   	 	<td>বৃটিশ শাসনের কবল থেকে মুক্ত হয়ে পাকিস্তানী পরাধীনতায় </td>
                	   	 	<td>বৃটিশ শাসনের কবল থেকে মুক্ত হয়ে পাকিস্তানী পরাধীনতায় বৃটিশ শাসনের কবল থেকে মুক্ত হয়ে পাকিস্তানী পরাধীনতায় </td>
                	   	 	<td><a href="#"><span uk-icon="icon: close; ratio: 1"></span></a></td>
                	   	 </tr>
                	   </tbody>
                		
                	</table>

                


              

                 </div>
                </form>
                </div>



                  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                  	          	<form method="POST" style="font-size: 14px;">
                 	 <h4><span uk-icon="icon: lock; ratio: 1.2"></span>&nbsp;&nbsp;Change Password</h4>
                <div class="form-row">

                	<div class="form-group col-md-12" >
                   <label>Old Password :</label>
                   <input type="text" name="oldpassword" class="form-control log" id="oldpassword" placeholder="Old Password">
                  </div>

                   <div class="form-group col-md-12" >
                   <label>New Password :</label>
                   <input type="text" name="newpass" class="form-control log" id="newpass" placeholder="New Password">
                  </div>

                   <div class="form-group col-md-12" >
                   <label>Confirm Password :</label>
                   <input type="text" name="crmpass" class="form-control log" id="crmpass" placeholder="Confirm Password ">
                  </div>

  

                <button type="submit" name="update" class="update" id="signbtn">Submit</button>  

                 </div>
                </form>


                  	
                  </div>
                 </div>
					
				</div>















			</div>











		</div>	
	</div>
</div>








<?php

include 'footer.php';

?>