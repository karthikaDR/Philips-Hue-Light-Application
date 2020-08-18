<!DOCTYPE html>
    <html>
        <head>
            <title>Table with database</title>
        </head>
            <body>
            <table>
                <tr>
                    <th>Id</th>
                    <th>User</th>
                    <th>password</th>
                </tr>
                <?php
                    $dbhandle = mysqli_connect("localhost", "root", "root","website");
                    if(!$dbhandle)
                    {   echo("could not connect to database");
                        die();
                    }
                    
                    $sql = "SELECT id, username, password from login";
                    $result = $dbhandle-> query($sql);
                    
                    if($dbhandle-> num_rows> 0)
                    {
                        while ($row = $result-> fetch_assoc())
                        {
                          echo "<tr><td>".$row["id"]."</td><td>".$row["username"].
                          "</td><td>".$row["password"]."</td></tr>";  
                        }
                        echo "</table>";
                    }
                    else 
                        echo "0 result";
                    mysqli_close();
                    
                ?>
            </table>
                
            </body>
    </html>