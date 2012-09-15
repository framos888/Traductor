<?php
   $useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{}else{ 

/// header('Location: http://traductordigital.site50.net/pc.php');

}
try{
    $del = $_REQUEST['de'];
    $al = $_REQUEST['a'];
    $texto = $_REQUEST['miTexto'];
    if($del == '' || $al == ''){$del='es';$al='es';$texto='Escriba un texto en el recuadro...';}
    $cadena = 'text=' . urlencode($texto) . '&from=' . $del . '&to=' . $al;
    $homepage = file_get_contents('http://api.microsofttranslator.com/v2/Http.svc/Translate?appId=F8766D9B5F4F9DBFB7B1D275A54BE18823896BFF&'. $cadena . '&contentType=text/html');
    $homepage = str_replace('<string xmlns="http://schemas.microsoft.com/2003/10/Serialization/">'," ",$homepage); 
    $homepage = str_replace('</string>'," ",$homepage);
    $homepage = str_replace('<?xml version="1.0"?>'," ",$homepage);
 } catch (Exception $e) {
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Traductor</title>
</head>
<html>
<body>
<form name="mainForm" method="post" action="default.php">
  <table width="100%" height="38%">
    <tr> 
      <td height="24" colspan="11" bordercolor="#0033CC" bgcolor="#999999">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="13"><div id="translationResult"> 
          <?php echo $homepage;?>
        </div></td>
    </tr>
    <tr> 
      <td height="26" colspan="13"> <div align="left"> 
          <input type="text" name="miTexto"  size="20" />
          </div></td>
    </tr>
    <tr> 
      <td width="2%" height="38"><div align="right"><font color="#500D0A" size="5"><strong><font color="#500D0A" size="5"><strong><font color="#500D0A" size="5"><strong><font color="#500D0A" size="5"><strong><font color="#000000" size="1">Del:</font></strong></font></strong></font></strong></font><font color="#000000" size="4"> 
          </font></strong></font> </div></td>
      <td width="7%"><font color="#500D0A" size="5"><strong><font color="#000000" size="4"> 
        <select  size="1" name="de" style="font-size:9pt">
          <option value="">(ELIJA)</option>
          <option value="es">Espa&ntilde;ol</option>
          <option value="en">Ingles</option>
          <option value="fr">Frances</option>
          <option value="de">Aleman</option>
        </select>
        </font></strong></font></td>
      <td width="2%"><div align="left"><font color="#500D0A" size="5"><strong><font color="#500D0A" size="5"><strong><font color="#000000" size="4"><font size="3"><font size="1">Al</font></font><font size="1">:</font></font></strong></font><font color="#000000" size="4"> 
          </font></strong></font></div></td>
      <td width="7%"><font color="#500D0A" size="5"><strong><font color="#000000" size="4"> 
        <select size="1"  name="a" style="font-size:9pt" >
          <option value="">(ELIJA)</option>
          <option value="es">Espa&ntilde;ol</option>
          <option value="en">Ingles</option>
          <option value="fr">Frances</option>
          <option value="de">Aleman</option>
        </select>
        </font></strong></font></td>
      <td width="5%"><input type="submit" name="traduce" value="Traducir" /></td>
      <td width="17%"><a id="myAnchor" target="_blank" href="<?php echo 'http://api.microsofttranslator.com/v2/Http.svc/Speak?appId=F8766D9B5F4F9DBFB7B1D275A54BE18823896BFF&text=' . $homepage . '&language=' . $al?>"><img src="imagenes/altavoz.jpg"></a> 
      </td>
      <td width="13%"></td>
      <td width="0%"></td>
      <td width="0%"></td>
      <td width="0%"></td>
      <td width="0%"></td>
      <td width="0%"></td>
      <td width="47%"></td>
    </tr>
  </table>
  <font color="#500D0A" size="5"><strong><font color="#000000" size="4"><font size="3"> 
  </font></font></strong></font><font size="1"> </font><br>
  <br>
  <br>
</form>
</body>
</html>
