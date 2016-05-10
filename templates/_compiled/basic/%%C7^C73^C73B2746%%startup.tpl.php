<?php /* Smarty version 2.6.19, created on 2012-02-12 13:00:10
         compiled from includes/pages/startup/startup.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/page-title.tpl", 'smarty_include_vars' => array('title' => ($this->_tpl_vars['lang']['welcome']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['startup_html'] != ''): ?>
<?php echo $this->_tpl_vars['startup_html']; ?>

<?php else: ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col">

<p align="left">
<font size="5"><strong>WNA-WiND - Developers copy </strong></font>
<br />
<br />
<font size="2" face="Verdana, Arial, Helvetica, sans-serif">Η έκδοση αυτή είναι εδώ για δοκιμαστικούς λόγους απευθείας από το SVN</font></p>
<p align="left">Σελίδα project:   <a href="http://www.wna.gr/trac/wiki/wind-wna">http://www.wna.gr/trac/wiki/wind-wna</a> </p>
<p align="left">Δεν μπορείτε να κάνετε εγγραφή εδώ</p>
<p align="left">Δοκιμαστικός λογαριασμός χρήστη: user/demo</p>
<p align="left">Δοκιμαστικός λογαριασμός χρήστη: user2/demo</p>
<p align="left">Δοκιμαστικός λογαριασμός χρήστη: user3/demo</p>
<p align="left">Δοκιμαστικός λογαριασμός χρήστη hostmaster: hostmaster/demo   </p>
<p align="left">Δοκιμαστικός λογαριασμός διαχειριστή ασύρματης κοινότητας: coadmin/demo   </p>
<p align="left">Δοκιμαστικός λογαριασμός διαχειριστή ασύρματης κοινότητας: coadmin2/demo   </p>
<p>&nbsp;</p>
  </th>
    <th scope="col">
<script type='text/javascript'><!--//<![CDATA[
   var m3_u = (location.protocol=='https:'?'https://adserver.vivanet.gr/www/delivery/ajs.php':'http://adserver.vivanet.gr/www/delivery/ajs.php');
   var m3_r = Math.floor(Math.random()*99999999999);
   if (!document.MAX_used) document.MAX_used = ',';
   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
   document.write ("?zoneid=149");
   document.write ('&amp;cb=' + m3_r);
   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
   document.write ("&amp;loc=" + escape(window.location));
   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
   if (document.context) document.write ("&context=" + escape(document.context));
   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
   document.write ("'><\/scr"+"ipt>");
//]]>--></script><noscript><a href='http://adserver.vivanet.gr/www/delivery/ck.php?n=afb829d2&amp;cb=00000000000' target='_blank'><img src='http://adserver.vivanet.gr/www/delivery/avw.php?zoneid=149&amp;cb=0000000000&amp;n=afb829d2' border='0' alt='' /></a></noscript>
</th>
  </tr>
</table>









<?php endif; ?>