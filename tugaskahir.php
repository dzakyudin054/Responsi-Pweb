

<link href="layout.css" rel="stylesheet">

<div id="header"> <br>
<h1 style="ont-size: 30px;font-display: block; color: green;">Selamat  Datang Di Web Responsi  </h1></div>


 <div id="menu">
  <strong><font color="white"size="6" face="Courier New, Courier,mono">BUKU TAMU </font></strong>
<form name="form1" method="post" action="proses.php">
<table width="58%" border="0" align="center">
<tr>
<td>Nama Lengkap</td>
<td><input name="nama" type="text" id="nama"></td>
</tr>
<tr>
<td>Alamat</td>
<td><input name="alamat" type="text" id="alamat"></td>
</tr>
<tr>
<td>E-Mail</td>
<td><input name="email" type="text" id="email"></td> </tr>
</tr>
<tr>
<td>Status</td>
<td><select name="status" id="status">
<option>Menikah</option>
<option>Single</option>
</select></td>
</tr>
<tr>
<td>Komentar</td>
<td><textarea name="komentar" id="komentar"></textarea></td> </textarea>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Kirim"><input type="reset"
43.name="Submit2" value="Batal">
</td>
</tr>
</table>
</form>
<div align="center"><strong><a href="lihat.php"><font color="white">::Lihat Buku Tamu::
</a></strong></div></div>


<div class="Kalender"><br><br>
   <?php 
   /*tanggal*/
   $hari = date("d");
   $hariini = $hari;
   /*bulan*/
   $bulan = date("m");
   /*tahun*/
   $tahun = date("Y");
   /*jumlah hari bulan tahun*/
   $jumlahhari = date("t", mktime(0,0,0,$bulan,$hari,$tahun));
?>

<?php 
   switch ($bulan) 
   {
      case 1:
         $nmbulan = "Januari";
         break;
      case 2:
         $nmbulan = "Februari";
         break;
      case 3:
         $nmbulan = "Maret";
         break;
      case 4:
         $nmbulan = "April";
         break;
      case 5:
         $nmbulan = "Mei";
         break;
      case 6:
         $nmbulan = "Juni";
         break;
      case 7:
         $nmbulan = "Juli";
         break;
      case 8:
         $nmbulan = "Agustus";
         break;
      case 9:
         $nmbulan = "September";
         break;
      case 10:
         $nmbulan = "Oktober";
         break;
      case 11:
         $nmbulan = "November";
         break;
      case 12:
         $nmbulan = "Desember";
         break;
   }
   echo "<center><h2>$hari $nmbulan $tahun</h2></center>";
?>
<table style="border: 0px solid #64E7B7" align="center" cellpadding="10">
   <tr bgcolor=black>
      <td align="center"><font color="#FF000">Min</font></td>
      <td align="center">Sen</font></td>
      <td align="center">Sel</font></td>
      <td align="center">Rab</font></td>
      <td align="center">Kam</font></td>
      <td align="center">Jum</font></td>
      <td align="center">Sab</font></td>
   </tr>

   <?php 
      $s = date("w", mktime(0,0,0, $bulan,1,$tahun));
      for ($ds=1; $ds<=$s; $ds++) { 
         echo "<td></td>";
      }

      for ($d=1; $d<=$jumlahhari; $d++) { 
         
         //jika masuk minggu 0, buat new line
         if (date("w", mktime(0,0,0, $bulan, $d, $tahun))==0){
            echo "<tr>";

         }
         $warna = "white"; //warna default
         $warnasel = "#67C592";

         //jika hari minggu beri warna merah
         if (date("l", mktime(0,0,0, $bulan, $d, $tahun))== "Sunday") {
            $warna = "red";
         }


         //sesuai hari ini
         if ($hariini == $d) {
            $warna = "black";
            $warnasel = "magenta";
         }

         //beri warna default tanggal tiap harinya(selain hari minggu)
         echo "<td align=center valign=middle bgcolor=$warnasel > <span style=\"color:$warna\">$d</span></td>";

         
         //if (date("l", mktime(0,0,0, $bulan, $d, $tahun))== "Sunday") {
            

         //jika hari ke enam, akhiri baris
         if(date("w", mktime(0,0,0, $bulan, $d, $tahun)) ==6){
            echo "</tr>";
         }
      }
      echo '</table>';
   ?> </table></div> <br>
<div class="kalkulator">
   <html> 
   <head> 
      <script> 
         function dis(val) 
         { 
             document.getElementById("result").value+=val 
         } 
         function solve() 
         { 
             let x = document.getElementById("result").value 
             let y = eval(x) 
             document.getElementById("result").value = y 
         } 
         function clr() 
         { 
             document.getElementById("result").value = "" 
         } 
      </script> 
      <!-- Style Kalkulator -->
      <style>
         table{

        border-radius: 2%;
        box-shadow: 0px 6px 12px #000;
         }
         tr{
        border-radius: 7%;
         }
         td{
            width: 60px;
        border-radius: 7%;
            font-family: Verdana, Geneva, Tahoma, sans-serif; 
            font-size: 20px;
            color: aliceblue;
            font-weight: bold;
         }
  
         input[type="button"] 
         { 
         height: 50px;
         background-color:rgb(23, 167, 23);
         color: white;
         font-weight: bold;
         font-size: 22px;
         width:100% 
         } 
         .title{ 
         margin-bottom: 10px;
         height: 70px; 
         text-align:center; 
       border-radius: 2%;
         background-color:rgb(23, 167, 23); 
         width: 210px; 
         color:white; 
         } 
         input[type="text"] 
         { 
         font-size: 22px;
       border-radius: 7%;
         background-color:white; 
         height: 50px;
         width:100% 
         }
         input[type="button"].ekor{
         background-color:rgb(218, 23, 23); 
         }
         input[type="button"].kode{
         background-color:rgb(243, 170, 13); 
         }
         
      </style> 
   </head> 
   <body bgcolor="grey"> 
      <table align="center"  border="5" width="330px"> 
         <tr>
            <td colspan="4" class="title">Kalkulator Sederhana</td>
         </tr>
         <tr> 
            <td colspan="3"><input type="text" id="result"/></td> 
            <td><input class="ekor" type="button" value="C" onclick="clr()"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="1" onclick="dis('1')"/> </td> 
            <td><input type="button" value="2" onclick="dis('2')"/> </td> 
            <td><input type="button" value="3" onclick="dis('3')"/> </td>
            <td><input class="kode" type="button" value="+" onclick="dis('+')"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="4" onclick="dis('4')"/> </td> 
            <td><input type="button" value="5" onclick="dis('5')"/> </td> 
            <td><input type="button" value="6" onclick="dis('6')"/> </td> 
            <td><input class="kode" type="button" value="-" onclick="dis('-')"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="7" onclick="dis('7')"/> </td> 
            <td><input type="button" value="8" onclick="dis('8')"/> </td> 
            <td><input type="button" value="9" onclick="dis('9')"/> </td> 
            <td><input class="kode" type="button" value="/" onclick="dis('/')"/> </td>  
         </tr> 
         <tr> 
            <td><input type="button" value="." onclick="dis('.')"/> </td> 
            <td><input type="button" value="0" onclick="dis('0')"/> </td>
            <td><input class="ekor" type="button" value="=" onclick="solve()"/> </td> 
            <td><input class="kode" type="button" value="x" onclick="dis('*')"/> </td> 
         </tr> 
      </table> 
   </body> 
</html>
</div>
 </div>
 <br><br>
 <div id="footer"> <font style="calibiri">Copyright2022@dzaky_udin</div>
