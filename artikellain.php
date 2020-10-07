<?php
include "skrip_koneksi.php";
?>
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
        
        <table style="color:'white'; border-color: #2f2f2f">
       <?php
               $query = "SELECT judul, sinopsis
               FROM input ORDER BY judul";
               $sql = mysql_query($query) ;
               while($hasil = mysql_fetch_array($sql)) {
                   $judul = $hasil['judul'];
                   $sinopsis = $hasil['sinopsis'];
               
          ?>
              <tr style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 35px; font-weight: 100; float: left; margin-left: 20px; padding: 5">
                  <td>
                      <a href = "tampilperson_artikel.php?judul=<?php echo $judul?>">
                          <?php echo $judul?>
            </a>
                  </td>
                  
            </tr>

                  ><tr style="font-size: 20px;"><td><?php echo $sinopsis?></td></tr>
                  
                 
			<?php }?> 
            </table>

          <script>
          function myfunction(){
                location.href = "tampilperson_artikel.php"
          }
          </script>
          
          </div>

        
       
    </div>
   
    
    
</body>
</html>
