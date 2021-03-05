<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<link rel="stylesheet" href="style1.css">

<body>

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
<section id="contact">
			<div class="section-content">
				<h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
				
			</div>
			<div class="contact-section">
			<div class="container">
				<form>
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="fname">First Name:</label>
					    	<input type="text" class="form-control" id="name" placeholder=" Enter First Name" name="fname">
				  		</div>
                          
                        
                          <div class="form-group">
					    	<label for="email">Email:</label>
					    	<input type="email" class="form-control" id="email" placeholder=" Enter Email id" name="email">
					  	</div>	
                      
                      
                          <div class="form-group">
					    	<label for="email">Subject:</label>
					    	<input  class="form-control" id="subject" placeholder="enter subject" >
			  			</div>
			  		</div>
                  
                
                      <div class="col-md-6">
			  			<div class="form-group">
			  				<label for ="comment">Comment:</label>
			  			 	<textarea  class="form-control" rows="5" id="body" placeholder="add comment"></textarea>
			  			</div>
                          
                        
                          <div>

			  				<button type="button" class="btn btn-default submit" onclick="sendEmail()">  Send Message</button>
			  			</div>
			  			
					</div>
				</form>
			</div>
        </section>
        




        <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
        </script>

</body>
</html>