
<!--
Nicolas, here is sample code snippets used to create reports from MYSQL data. 
Remember that these are live examples and you need to modify to work for YuTell.
IF, you have any questions, let me know and I will be GLAD to show you how it all works!
You have a great head start into the world of MYSQL/PHP data extraction and presentation.
MarkO
-->

    <head>
        <title>Nicolas Sample Code | PHP for MYSQL Data and Reports</title>

    </head>
  
        <div>Content Start Here</div>
        <h1> Top of code page </h1>
        <br>
        <p> Example of Drop Down list from DBase </p>
        
        <?php 
            // DB Connect area using MYSQLi
            // MarkO Dec 20, 2019 
            // CaribeSoft for Yutell

				$servername = "localhost";
				$username = "root";
				$password = "P3rf3ctM!";
				$dbname = "YuTell1";

            // Create connection
				$conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
        
        
        
             // Here is where you do the initial query - NOTE - after the select there is a * (This is a wildcard for all)
                // Using the Where Command you can choose the field in the table and match to a value        
        $query1 = "SELECT * FROM `pm_videos` where YT_Rated='1' ";
        
		        $result1 = mysqli_query($conn, $query1);

            // NOW we have a query AND it is put into the form of a string for our use
                        

                    
//				Make the String
				$sqlm = "SELECT video_title, video_slug FROM pm_videos where YT_Rated='1'";
				$resultm = $conn->query($sqlm);
//                                               echo "I am ID Number - " . $r;

				if ($resultm->num_rows > 0) {
   				 // output data of each row
   			while($rowm = $resultm->fetch_assoc()) {
        		
		    }
			} else {
		}
				//	echo " I know have variable for member id " . $id;
                        
                        
            // Here we will use the resuts from the query and create a drop down list
                        
            ?>            
       
				      					<select name="Rated" class="form-control" >  
				        <?php while($row1 = mysqli_fetch_array ($result1)):;  ?>
				        <option value="<?php echo $row1[2];?>"> <?php echo $row1[10];?> <?php echo $row1[7];?> (<?php echo $row1[8];?>) Title - <?php echo $row1[2];?></option> 
				        <?php endwhile;?>
			          					</select>
			        		
        <br>
<br><br><br><br>                         
	
          <table width="1000" border="5" align="center" cellpadding="10" cellspacing="10" >
            
              <tr>
                <td width="100" align="center"><h5>Title </h5></td>
				<td width="100" align="center"><h5>Author </h5></td>
                <td width="50" align="center"><h5>YuTell Fun</h5></td>
                <td width="75" align="center"><h5>YuTell Interesting</h5></td>
                <td width="100" align="center"><h5>YuTell Emotional</h5></td>
                <td width="75" align="center"><h5>YuTell Language</h5></td>

              </tr>
              

            
              
              <?php
				$servername = "localhost";
				$username = "root";
				$password = "P3rf3ctM!";
				$dbname = "YuTell1";
				
				setlocale(LC_MONETARY,"en_US");

// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
						if ($conn->connect_error) {
    						die("Connection failed: " . $conn->connect_error);
					}

						$sql = "SELECT  video_title, submitted, video_slug, yt_fun, yt_inte, yt_emot, yt_lang FROM pm_videos WHERE YT_Rated='0'";
						$result = $conn->query($sql);
		   
           if ($result->num_rows > 0) {// output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["video_title"]."</td>";
				echo "<td>".$row["submitted"]."</td>";
                echo "<td>".$row["yt_fun"]."</td>";
                echo "<td>".$row["yt_inte"]."</td>";
				echo "<td>".$row["yt_emot"]."</td>";
				echo "<td>".$row["yt_lang"]."</td>";

             }
             } else {
                 echo "0 results";
                 }
                 $conn->close();
           ?>
           
          </table>
   

