<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arResult['MAP_WIDTH'] = $arParams['MAP_WIDTH'] ? $arParams['MAP_WIDTH'] : '100%';
$arResult['MAP_HEIGHT'] = $arParams['MAP_HEIGHT'] ? $arParams['MAP_HEIGHT'] : '400px';
$arResult['MAP_CENTER'] = $arParams['MAP_CENTER'] ? $arParams['MAP_CENTER'] : '44.57045362, 38.07887039';
$arResult['MAP_ZOOM'] = $arParams['MAP_ZOOM'] ? $arParams['MAP_ZOOM'] : 2;
$arResult['MAP_SCROLL_LOCK'] = $arParams['MAP_SCROLL_LOCK'] == 'Y' ? $arParams['MAP_SCROLL_LOCK'] : false;
foreach($arParams['POINTS'] as &$points_item){
	$coords = explode(',', $points_item['MAP']);
	$points_item['coord1'] = $coords[0];
	$points_item['coord2'] = $coords[1];
	$points_item['desc'] = '<div class="center">
								<a href="'.$points_item["DETAIL_PAGE_URL"].'">'.
									$points_item["NAME"].'</a><br />';
	$points_item['desc'] .= $points_item["DETAIL_PAGE_URL"] ? '<a href="'.$points_item['DETAIL_PAGE_URL'].'"><img src="' . $points_item["GERB"] . '" alt="' . $points_item["NAME"] .'" /></a>' : '';
	$points_item['desc'] .=	'</div>';
}
$arResult['POINTS'] = json_encode( $arParams["POINTS"] );
$this->IncludeComponentTemplate();
?>