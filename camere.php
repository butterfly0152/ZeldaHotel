<?php
require_once("header.php");
require_once("meniu.php");
?>
<div class="galerie">
	<table>
    	<tr>
            <td><img src="./img/rooms00.jpg" onmouseover = "galerie(1)" onmouseout="inchide()"/></td>
            <td><img src="./img/rooms001.jpg" onmouseover = "galerie(2)" onmouseout="inchide()"/></td>
        </tr>
        <tr>   
            <td><img src="./img/rooms002.jpg" onmouseover = "galerie(3)" onmouseout = "inchide()"/></td>
            <td><img src="./img/rooms003.jpg" onmouseover = "galerie(4)" onmouseout= "inchide()"/></td>
        </tr>
        <tr>
            <td><img src="./img/image003.jpg" onmouseover="galerie(5)" onmouseout="inchide()"/></td>
            <td><img src="./img/rooms004.jpg" onmouseover = "galerie(6)" onmouseout="inchide()"/></td>
         </tr>
         <tr>   
           <td><img src="./img/rooms006.jpg" onmouseover = "galerie(7)" onmouseout="inchide()"/></td>
            <td><img src="./img/rooms005.jpg"/ onmouseover = "galerie(8)" onmouseout="inchide()"></td>
         </tr>   
    </table>
</div>   

<div id="galerie1">
	<img src="" width="100%" id="i">
</div> 



<?php
require_once("footer.php");
?>