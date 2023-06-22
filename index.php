<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Asset/css/style.css">
</head>
 
  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap');
  </style>
  <script src="Asset/js/script.js"></script>

<body>

<?php 
if(isset($_POST['length'])) {
	$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()∵‸ ⁁ ⎀©ɔ';
	 $printer = substr(str_shuffle($characters),0,$_POST['length']);
	 
}
else $printer=''; 
?>
  <div class="wrapper flex_box">
    <form action="" method="POST">
      <div class="input">
        <label>
          Length of Password
        </label>
        <input class="name" placeholder="What is the Length of Password...?" type="number" name="length">
      </div>
      <div class="input">
        <label>
          Generated Password
        </label>
        <input id='myInput' value=" <?php echo $printer;	?> " class="comment" >
		<input type="Submit" name="SubmiT">
		<button onclick="copyToClipboard()">Copy</button>			
      </div>
      <div class="button_wrapper">
	   
      </div>
    </form>
  </div>
  
  
</body>

</html>


 <script>
        function copyToClipboard() {
            /* Get the input field */
            var inputField = document.getElementById("myInput");

            /* Select the text inside the input field */
            inputField.select();

            /* Copy the text to the clipboard */
            document.execCommand("copy");

            /* Alert the user that the text has been copied */
            alert("Text copied to clipboard: " + inputField.value);
        }
    </script>
