<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("KEYWORDS_INNER", "Профиль");
$APPLICATION->SetPageProperty("TITLE", "Профиль");
$APPLICATION->SetPageProperty("keywords", "Профиль");
$APPLICATION->SetPageProperty("description", "Профиль");
$APPLICATION->SetTitle("Профиль");
?>12312312
<br>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	"",
	Array(
		"CHECK_RIGHTS" => "N",
		"SEND_INFO" => "N",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array(),
		"USER_PROPERTY_NAME" => ""
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>