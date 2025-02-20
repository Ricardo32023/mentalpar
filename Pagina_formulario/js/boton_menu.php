<?php
@session_start();
if($_SESSION[$_SESSION['controlacceso']]=="si")
{
?>
<style>
button:hover{
	background:#dfdfdf;
}
</style>
<div align="right">
	<table align="right">
    	<tr> 
        	<td><button type="button" onClick="fbuscar()"><img src="../imagenes/lupa.png" width="30" height="30" style="cursor:pointer" /></button></td>
            <td><button type="button" onClick="fnuevo()"><img src="../imagenes/nuevo.png" width="30" height="30" style="cursor:pointer" /></button></td>
        	<td><button type="button" id="btnguardar" name="btnguardar" onClick="fguardar()"><img src="../imagenes/guardarb.png" width="30" height="30" style="cursor:pointer" /></button></td>
            
            <td><button type="button" onClick="fimprimir()"><img src="../imagenes/impresora.png" width="30" height="30" style="cursor:pointer" /></button></td>
            <div id="divotrosbotonoes"></div>
           
        </tr>
     </table>  
</div>
<?
}
?>