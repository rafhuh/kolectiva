<?php include('header.php');?>

<h1 class="pink center padding">Let's work together!</h1>
</div>

<div id="contact-area">
            
<!--	<form action="contactengine.php" method="POST">
	    <label for="Name">Name:</label>
	    <input type="text" name="Name" id="Name" />

	    <label for="Email">Email:</label>
	    <input type="text" name="Email" id="Email" />
	    
	    <label for="Message">Message:</label><br />
	    <textarea name="Message" rows="20" cols="20" id="Message"></textarea>

	    <input type="submit" name="submit" value="Submit" class="submit-button" />
	</form> -->


<form action="mail.php" method="POST">
<label for="Name">Name:</label> <input type="text" name="name">
<label for="Email">Email:</label> <input type="text" name="email">
<label for="Phone">Phone:</label> <input type="text" name="phone">

<label for="Call">Request Phone Call:</label>
<div class="wrap">
	Yes:<input type="checkbox" value="Yes" name="call"><br />
	No:<input type="checkbox" value="No" name="call"><br />
</div>

<label for="Website">Website:</label> <input type="text" name="website">

<label for="Priority">Priority:</label>
<select name="priority" size="1">
<option value="Low">Low</option>
<option value="Normal">Normal</option>
<option value="High">High</option>
<option value="Emergency">Emergency</option>
</select>
<br />

<label for="Project">Project:</label>
<div class="wrap">
	<input type="checkbox" name="project" value="value1" />Photography<br />
	<input type="checkbox" name="project" value="value2" />Video Production<br />
	<input type="checkbox" name="project" value="value3" />Identity<br />
	<input type="checkbox" name="project" value="value3" />Branding<br />
	<input type="checkbox" name="project" value="value3" />Website<br />
	<input type="checkbox" name="project" value="value3" />Advertise your website<br />
</div>

<div class="clear"></div>

<label for="Budget">Budget:</label> <input type="number" step="10" name="Budget">

<label for="message">Message:</label><textarea name="message" rows="6" cols="25"></textarea><br />
<input type="submit" name="submit" value="Submit" class="submit-button" />
</form>

        
</div>

<div class="clear"></div>

<div class="divider"></div>

<?php include('footer.php');?>