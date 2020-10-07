
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style2.css">
    <title>Artikel Lainnya</title>
</head>

<body>
    <div class="box-area">
        <header>
            <div class="wrapper">
                <div class="logo">
                    <h2>Artikel Lainnya</h2>
                    
                </div>
                
            </div>
        </header>

    </div>
    <div class="content-area">
        <form action="input_artikel.php">
        <button class="button button1" type="submit"> + Tambah Artikel</button>
        </form>
        <P></P>
        <div class="column" style="background-color:#1e1e1e; color: white; float: left; margin-left: 20px;">
       <?php
               $connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
               mysql_select_db('pemrograman');
               
               $query = "SELECT * FROM input"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
               
               echo "<table>"; // start a table tag in the HTML
               
               while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
               echo "<tr><td onclick=\"myFunction()\">" . $row['judul'] . "</td></tr><tr><td>" . $row['sinopsis'] . "</td></tr>";  //$row['index'] the index here is a field name
               }
               
               echo "</table>"; //Close the table in HTML
               
               mysql_close(); //Make sure to close out the database connection
          ?>

          <script>
          function myfunction(){

          }
          </script>
          
          </div>

        
       
    </div>
   
    
    
</body>
</html>
