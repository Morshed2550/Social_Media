<html>
  <head>
    <title>Delete</title>
  </head>

  <body>
	<h1>News Feed</h1>
    <br />
	<form action="post.php" method="POST">
        <fieldset>
            <legend>ID</legend>
            <table>
				<tr>
					<p>Person Name :</p>
				</tr>
			
         
                <tr>
                    <td>USER ID:</td>
    
                    <td><input type="radio" name="User Id" value="Delete">Delete</td>                                  
                </tr>
				<tr>
                    <td>Comment:</td>
                    <td><input type="text" name="comment" value=""/></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit">                        
                    </td>
                </tr>
            </table>
			
			<?php
				if(isset($_POST['Delete']) && isset($_POST['comment'])){
					echo$_POST['Delete'];
					echo "<br>";
					echo$_POST['comment'];}
			?>
			
		</fieldset>
    </form>
		<a href="profile.html">Back to profile</a><br />
  </body>
</html>
