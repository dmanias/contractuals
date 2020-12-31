<script src="js/captcha.js"></script>

  <div class="container">

	<div class='expand'>
  
      <form class='form-signin' role='form' name='form' method='post' action='send.php' onsubmit='return checkform(this);'>

	  <input name=fullname type='text' class="form-control"  placeholder='Όνομα & Επώνυμο χρήστη'> 

    <input name='phone' type='text' class="form-control" placeholder='Αρ. Τηλεφώνου'> 
	<input name='email' type='text' class="form-control" placeholder='E-mail'> 
	<textarea name='message' rows='6' cols='27' class="form-control" >Περιγραφή προβλήματος</textarea> 

	<input class="btn btn-large btn-primary" type="submit" value='Υποβολή'>
	<span align='right'>
	<input class="btn btn-large btn-primary" type="reset" value='Καθαρισμός'>
	</span>

	
     </form>

	 </div> <!-- /expand-->
	 
    </div> <!-- /container -->

	
		</div> <!-----form-signin--->
 </div> <!----expand--->
	
	
	
	</div> <!-- /wrap -->
