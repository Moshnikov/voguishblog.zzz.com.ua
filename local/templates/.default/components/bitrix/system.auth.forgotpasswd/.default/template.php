<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?

ShowMessage($arParams["~AUTH_RESULT"]);

?>

<div class="login-right">

    <form name="bform" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
<?
if (strlen($arResult["BACKURL"]) > 0)
{
?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?
}
?>
	<input type="hidden" name="AUTH_FORM" value="Y">
	<input type="hidden" name="TYPE" value="SEND_PWD">
	<p>
	<?=GetMessage("AUTH_FORGOT_PASSWORD_1")?>
	</p>

		<div>
			<b><?=GetMessage("AUTH_GET_CHECK_STRING")?></b>
		</div>

		<div>
			<span><?=GetMessage("AUTH_LOGIN")?></span>
			<input type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>" />&nbsp
		</div>
        <?=GetMessage("AUTH_OR")?>
		<div>
			<span><?=GetMessage("AUTH_EMAIL")?></span>
            <input type="text" name="USER_EMAIL" maxlength="255" />
		</div>
	<?if($arResult["USE_CAPTCHA"]):?>
		<div>
            <input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
            <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
		</div>
		<div>
			<span><?echo GetMessage("system_auth_captcha")?></span>
			<input type="text" name="captcha_word" maxlength="50" value="" />
		</div>
	<?endif?>
		<div>
            <input type="submit" name="send_account_info" value="<?=GetMessage("AUTH_SEND")?>" />
		</div>

<p>
<a href="<?=$arResult["AUTH_AUTH_URL"]?>"><b><?=GetMessage("AUTH_AUTH")?></b></a>
</p> 
</form>

</div>

<script type="text/javascript">
document.bform.USER_LOGIN.focus();
</script>
