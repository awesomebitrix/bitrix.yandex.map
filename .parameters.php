<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentParameters = array(
	"GROUPS" => array(),
	"PARAMETERS" => array(
		'POINTS' => array(
            'NAME' => 'Координаты точек на карте',
            'TYPE' => 'CUSTOM',
			'DEFAULT' => null,
            'PARENT' => 'BASE',
		),
		'MAP_CENTER' => array(
			'NAME' => 'Координаты центра карты',
			'TYPE' => 'STRING',
			'DEFAULT' => "44.57045362, 38.07887039",
			'PARENT' => 'BASE',
		),
		'MAP_ZOOM' => array(
			'NAME' => 'Зум карты',
			'TYPE' => 'STRING',
			'DEFAULT' => "2",
			'PARENT' => 'BASE',
		),
		'MAP_SCROLL_LOCK' => array(
			'NAME' => 'Заблокировать зум карты',
			'TYPE' => 'STRING',
			'DEFAULT' => "N",
			'PARENT' => 'BASE',
		),
		'MAP_WIDTH' => array(
			'NAME' => 'Ширина карты',
			'TYPE' => 'STRING',
			'DEFAULT' => "100%",
			'PARENT' => 'BASE',
		),
		'MAP_HEIGHT' => array(
			'NAME' => 'Высота карты',
			'TYPE' => 'STRING',
			'DEFAULT' => "400px",
			'PARENT' => 'BASE',
		),
		'CACHE_TIME'  =>  array('DEFAULT'=>3600),
	),
);