<?php 
try{
  $db = new mysqli("localhost", "root", "", "crud_db");
} catch(Exception $exc){
  echo $exc->getTraceAsString();
}


if(isset($_POST['username']) && isset($_POST['email']) &&  isset($_POST['message'])){
$username = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['message'];

$is_insert = $db->query("INSERT INTO `contact`(`username`, `email`, `message`) VALUES ('$username','$email','$message')");

if($is_insert == TRUE){
  echo "<h2>Ju keni regjistruar te dhenat me sukses...</h2>";
  exit();
} 
}
?>
<?php  include '../comp/header.php'  ?>

<div class="header">
  	<h4>Contact US ★</h4>
  </div>
<form  method="post" action="contact.php">
  	<div class="input-groupp">
  	  <label>Username ⋆</label>
  	  <input id="username" type="text" name="username" value="">
		<span id="err"></span> <br> </br>
  	</div>
  	<div class="input-groupp">
  	  <label>Email ⋆</label>
  	  <input id="email" type="email" name="email" value="">
		<span id="msg"></span> <br> </br>
  	</div>
    <div class="input-groupp">
  	  <label>What information should we know? ⋆</label>
      <textarea id="message" rows="12" name="message" data-required="True" placeholder="Please provide as much detail as possible" value=""></textarea>
  	</div>
    <div class="input-groupp">
  	  <button type="submit" class="button" name="submit">Submit</button>
  	</div>
</form>

 <?php  include '../comp/footer.php'  ?>
