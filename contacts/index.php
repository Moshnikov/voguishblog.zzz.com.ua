<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><div class="main-head-section">
	<h3>contact</h3>
	<div class="contact-map">
		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937577!2d2.292292615325077!3d48.858370079287496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2z0K3QudGE0LXQu9C10LLQsCDQsdCw0YjQvdGP!5e0!3m2!1sru!2sua!4v1522688105522" width="600" height="151px" frameborder="0" style="border:0"></iframe>
	</div>
</div>
<div class="contact_top">
	<div class="col-md-8 contact_left">
		<h4>Contact Form</h4>
		<p>
			 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt dolor et tristique bibendum. Aenean sollicitudin vitae dolor ut posuere.
		</p>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"contact_form",
	Array(
		"EMAIL_TO" => "admin@bitrix.loc",
		"EVENT_MESSAGE_ID" => "",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => "",
		"USE_CAPTCHA" => "N"
	)
);?>
	</div>
	<div class="col-md-4 company-right">
		<div class="company_ad">
			<h3>Contact Info</h3>
			 Lorem ipsum dolor sit amet, consectetur adipiscing elit velit justo. <address>
			<p>
				 email:<a href="#">info@display.com</a>
			</p>
			<p>
				 phone: 1.306.222.4545
			</p>
			<p>
				 222 2nd Ave South
			</p>
			<p>
				 Saskabush, SK S7M 1T6
			</p>
 </address>
		</div>
	</div>
	<div class="clearfix">
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>