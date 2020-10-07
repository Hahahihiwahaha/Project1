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
        
        <table >
       <?php
               $query = "SELECT judul, sinopsis
               FROM input ORDER BY judul";
               $sql = mysql_query($query) ;
               while($hasil = mysql_fetch_array($sql)) {
                   $judul = $hasil['judul'];
                   $sinopsis = $hasil['sinopsis'];
               
          ?>
              <tr>
                  <td>
                      <a href = "tampilperson_artikel.php?judul=<?php echo $judul?>">
                          <?php echo $judul?>
            </a>
                  </td>
                  
            </tr>

                  ><tr><td><?php echo $sinopsis?></td></tr>
                  
                 
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
