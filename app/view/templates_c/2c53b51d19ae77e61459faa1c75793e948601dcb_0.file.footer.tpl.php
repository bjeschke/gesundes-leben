<?php /* Smarty version 3.1.27, created on 2015-12-23 04:23:41
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/stylofish/app/view/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:720564032567a13bddba7c7_94137072%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c53b51d19ae77e61459faa1c75793e948601dcb' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/stylofish/app/view/templates/footer.tpl',
      1 => 1450841012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '720564032567a13bddba7c7_94137072',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_567a13bddbe195_81938711',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567a13bddbe195_81938711')) {
function content_567a13bddbe195_81938711 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '720564032567a13bddba7c7_94137072';
?>
<div class="footer">
    <span class="fooBrand">TOYFINDER18</span><br>
    <span class="hidden-xs">HIER KANNST DU UNS AUCH FOLGEN:<br></span>
    <span class="visible-xs">FOLGE UNS:</span>
    <a class="facebookBtn socialBtnFooter" href="http://www.facebook.com/toyfinder18" rel="nofollow" target="_blank"></a>
    <a class="twitterBtn socialBtnFooter" href="http://www.twitter.com/toyfinder18" rel="nofollow" target="_blank"></a>
    <a id="newsletter_anker"></a>

    <div class="momo hidden-xs">
    	<img src="/toyfinder18/img/lana/lana.png" class="img-responsive" alt="Momo Newsletter-Logo"/>
      <span>TRAGE DICH JETZT KOSTENLOS IN DEN NEWSLETTER EIN!</span>
    </div>

    <div class="visible-xs">Newsletter abonnieren:</div>

    <div class="input-group fooBtnGrp">
    <div id="newsletter_msg"></div>
    	<input class="form-control" id="newsletteremail" type="text" name="newsletteremail" placeholder="&#64;Email Adresse hier eingeben.." />
      <input class="btn btn-default btn-raised" type="button" id="newsletter_damen" value="DAMEN" name="newslettersubmit_damen"/>
      <input class="btn btn-default btn-raised" type="button" id="newsletter_herren" value="HERREN" name="newslettersubmit_herren"/>
    </div>

    <a href=">Impressum</a>&nbsp; &#8226; &nbsp;
    <a href="">Datenschutz</a>

    <div class="fooRights">
        Alle Angaben ohne Gew&auml;hr. Alle Preise inkl. der gesetzlichen Mehrwertsteuer.
        <br>Copyright &copy; 2015 TOYFINDER18.
    </div>

</div>
</body>
</html><?php }
}
?>