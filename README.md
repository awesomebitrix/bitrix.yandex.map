//Example
$APPLICATION->IncludeComponent(
	"shaggy:map.yandex",
	".default",
	Array(
		'POINTS' => array(
			array(
					"MAP"=>"55.75399399999374,37.62209300000001",
					"NAME"=>"Россия",
					"DETAIL_PAGE_URL"=>"/rus/",
					"GERB"=>"/icon/ru.png"
				),
			array(
					"MAP"=>"43.010619023222645,41.024900499999895",
					"NAME"=>"Абхазия",
					"DETAIL_PAGE_URL"=>"/abhazia/",
					"GERB"=>"/icon/ab.png"
				),
		),
		'MAP_SCROLL_LOCK' => 'Y'
	),
	false
);
