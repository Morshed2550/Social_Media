<html>
  <head>
    <title>Profile Page</title>
  </head>

  <body background="image1.jpg">
	<h1>News Feed</h1>
    <br />
	<form action="post.php" method="POST">
        <fieldset>
            <legend>ID</legend>
            <table>
				<tr>
					<p>Person Name</p>
				</tr>
			
         
                <tr>
                    <td>Edit/Delete:</td>
                    <td><input type="radio" name="Edit/Delete" value="Edit">Edit</td>
                    <td><input type="radio" name="Edit/Delete" value="Delete">Delete</td>                                  
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
				if(isset($_POST['Edit/Delete']) && isset($_POST['comment'])){
					echo$_POST['Edit/Delete'];
					echo "<br>";
					echo$_POST['comment'];}
			?>
			
		</fieldset>
    </form>
		<a href="profile.html">Back to profile</a><br />
  </body>
</html>
