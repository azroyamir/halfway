<!doctype html>
<html>
<head>
<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
    body,td,th {
	font-family: "SF Fourche";
	font-size: 14px;
	color: #FFF;
}
    </style>
<meta charset="utf-8">
<title>Transport Reservation & Managment System</title>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body background="images/Modern-Black-Wallpaper.jpg" onLoad="MM_preloadImages('images/newBtn/btn2_02.gif','images/newBtn/btn2_03.gif','images/newBtn/btn2_04.gif','images/newBtn/btn2_05.gif','images/newBtn/btn2_06.gif','images/newBtn/btn2_07.gif','images/btnLogin2.gif','images/btnRegister2.gif')">
<table width="1024" border="0" align="center">
  <tr>
    <td width="840"><img src="images/logoAA.gif" width="141" height="122"  alt=""/><img src="images/AA.gif" width="320" height="112"  alt=""/> </td>
    <td width="80"><a href="login.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('btnLogin','','images/btnLogin2.gif',1)"><img src="images/btnLogin1.gif" alt="" width="95" height="28" id="btnLogin"></a></td>
    <td width="82"><a href="register.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('btnRegister','','images/btnRegister2.gif',1)"><img src="images/btnRegister1.gif" alt="" width="107" height="28" id="btnRegister"></a></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="1040" border="0" align="center">
  <tr>
    <td width="1017"><img src="images/newBtn/btnleft.gif" width="251" height="34"  alt=""/><a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('btnHome','','images/newBtn/btn2_02.gif',1)"><img src="images/newBtn/btn1_02.gif" alt="" width="76" height="34" id="btnHome"></a><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('btnTransport','','images/newBtn/btn2_03.gif',1)"><img src="images/newBtn/btn1_03.gif" alt="" width="100" height="34" id="btnTransport"></a><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('btnBooking','','images/newBtn/btn2_04.gif',1)"><img src="images/newBtn/btn1_04.gif" alt="" width="85" height="34" id="btnBooking"></a><a href="feedback.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('btnFeedback','','images/newBtn/btn2_05.gif',1)"><img src="images/newBtn/btn1_05.gif" alt="" width="102" height="34" id="btnFeedback"></a><a href="aboutus.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('btnAbout','','images/newBtn/btn2_06.gif',1)"><img src="images/newBtn/btn1_06.gif" alt="" width="97" height="34" id="btnAbout"></a><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('btnOthers','','images/newBtn/btn2_07.gif',1)"><img src="images/newBtn/btn1_07.gif" alt="" width="89" height="34" id="btnOthers"><img src="images/newBtn/btnright.gif" width="224" height="34"  alt=""/></a></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="1024" height="158" border="0" align="center">
  <tr>
    <td><p><img src="images/booking.gif" width="209" height="29"  alt=""/></p>
      <p>&nbsp;</p>
      <form id="form1" name="form1" method="post">
        <table width="589" border="0" align="left">
          <tr>
            <td width="178" style="text-align: right">Username :</td>
            <td width="401"><input name="username" type="text" id="username" size="30"></td>
          </tr>
          <tr>
            <td style="text-align: right">Full Name :</td>
            <td><input name="fullname" type="text" id="fullname" size="30"></td>
          </tr>
          <tr>
            <td style="text-align: right">ID/Passport Number : </td>
            <td><input type="text" name="idnumber" id="idnumber"></td>
          </tr>
          <tr>
            <td style="text-align: right">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td style="text-align: right">Vehicle ID : </td>
            <td><label for="vehicleID">
              <input type="text" name="vehicleid" id="vehicleid">
            </label></td>
          </tr>
          <tr>
            <td style="text-align: right">Price :</td>
            <td><input type="text" name="price" id="price"></td>
          </tr>
          <tr>
            <td style="text-align: right">Booking Date :</td>
            <td><input type="date" name="bookingdate" id="bookingdate"></td>
          </tr>
          <tr>
            <td style="text-align: right">Days of Booking</td>
            <td><select name="dayBooking" id="dayBooking" tabindex="1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
            </select></td>
          </tr>
          <tr>
            <td style="text-align: right">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td style="text-align: right">Pickup Location :</td>
            <td><select name="pickup" id="pickup">
              <option>Kuala Lumpur International Airport</option>
              <option>Air Asia Terminal (Sepang)</option>
              <option>Cyberjaya</option>
              <option>Putrajaya</option>
              <option>Kuala Lumpur</option>
            </select></td>
          </tr>
          <tr>
            <td style="text-align: right">Return Location :</td>
            <td><select name="pickup2" id="pickup2">
              <option>Kuala Lumpur International Airport</option>
              <option>Air Asia Terminal (Sepang)</option>
              <option>Cyberjaya</option>
              <option>Putrajaya</option>
              <option>Kuala Lumpur</option>
            </select></td>
          </tr>
          <tr>
            <td style="text-align: right">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td style="text-align: right">Payment Mode :</td>
            <td><select name="paymentmode" id="paymentmode">
              <option>Online Payment</option>
              <option>Cash</option>
              <option>Credit Card</option>
            </select></td>
          </tr>
          <tr>
            <td style="text-align: right">Total Payment :</td>
            <td><input name="textfield2" type="text" id="textfield2" size="25"></td>
          </tr>
          <tr>
            <td style="text-align: right">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td style="text-align: right"><input type="submit" name="submit2" id="submit2" value="Submit"></td>
            <td><input type="reset" name="reset" id="reset" value="Reset"></td>
          </tr>
        </table>
      </form>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="1024" border="0" align="center">
  <tr>
    <td height="46" colspan="2"><img src="images/index1 .gif" width="335" height="31"  alt=""/></td>
    <td width="335"><img src="images/index2.gif" width="335" height="31"  alt=""/></td>
    <td width="335"><img src="images/index3.gif" width="335" height="31"  alt=""/></td>
  </tr>
  <tr>
    <td width="60"><img src="images/samsung_p.gif" width="52" height="69"  alt=""/></td>
    <td width="269">Introducing the easiest way to book from your Android phone:</td>
    <td><ul>
      <li>Special low rates available here.</li>
      <li>Huge selection of cars, locations, agencies.</li>
      <li>Easy searching. Easy booking.</li>
      <li>Convenient to view or modify reservation</a></li>
      <li>Exclusive car rental coupons and discounts</a></li>
    </ul></td>
    <td><p>Keep me updated on great car rental deals.</p>
      <p>
        <label for="textfield">Email :</label>
        <input type="text" name="textfield" id="textfield">
        <input type="submit" name="submit" id="submit" value="Submit">
        <br>
      </p></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>