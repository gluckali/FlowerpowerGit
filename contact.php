<form action="mail.php" method="POST">
  <fieldset>
  <img src="logo.png" alt="" width="250px" >
<p>Name</p> <input type="text" name="name">
<p>Email</p> <input type="text" name="email">
<p>Phone</p> <input type="text" name="phone">

<p>Request Phone Call:</p>
Yes:<input type="checkbox" value="Yes" name="call"><br />
No:<input type="checkbox" value="No" name="call"><br />

<p>Website</p> <input type="text" name="website">

<p>Priority</p>
<select name="priority" size="1">
<option value="Low">Low</option>
<option value="Normal">Normal</option>
<option value="High">High</option>
<option value="Emergency">Emergency</option>
</select>
<br />

<p>Type</p>
<select name="type" size="1">
<option value="update">Website Update</option>
<option value="change">Information Change</option>
<option value="addition">Information Addition</option>
<option value="new">New Products</option>
</select>
<br/>

<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
<input type="submit" value="Send"><input type="reset" value="Clear">
<p>
<h2> Adressen: </h2>
<h4> Utrecht 1082 PE Straat 31 weg 4  </h4>
<h4> Amsterdam 1082 EC straat 30 weg 5  </h4>
<h4> Friesland 1080 ec straat 40 weg 1  </h4>
<h2> Ons telefoonlijn:</h2> 
<h4> +800 124 456 2195 </h4>

</p>
</form>

</fieldset>
