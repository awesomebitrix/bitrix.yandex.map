<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); 
$arComponentDescription = array(
		"NAME" => GetMessage("Яндекс-Карта"),
		"DESCRIPTION" => GetMessage("Конструктор яндекс-карт по координатам"),
		"PATH" => array(
			"ID" => "shaggy_components",
			"CHILD" => array(
				"ID" => "yandexmap",
				"NAME" => "Яндекс-карта"
			)
		),
		"ICON" => "/images/icon.png",
	);
?>