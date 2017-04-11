<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<script>
buildMap('mapBlock');
function buildMap(blockID) {
	var blockID = blockID.charAt(0) == '#' ? blockID.substring(1) : blockID,
		mapBlock = $('#' + blockID ),
		objectsAr = <?=$arResult['POINTS'];?>;
		mapCenter = [objectsAr[0].coord1, objectsAr[0].coord2];
	
	if(mapBlock.find('ymaps').length == 0){
		addScript('https://api-maps.yandex.ru/2.1/?lang=ru_RU');
		var myMap;
		
		mapReady(init);

		function init(){     
			myMap = new ymaps.Map(blockID, {
				center: mapCenter,
				zoom: <?=$arResult['MAP_ZOOM']?>,
				behaviors:['default', 'scrollZoom']
			});
			<?if($arResult['MAP_SCROLL_LOCK'] == 'Y'):?>
				myMap.behaviors.disable('scrollZoom');
			<?endif;?>
			var myCollection = new ymaps.GeoObjectCollection();
			for(obj of objectsAr){
 				myCollection.add(new ymaps.Placemark([obj.coord1, obj.coord2],{
					//balloonContentHeader: obj.NAME,
					balloonContentBody: obj.desc,
					hintContent: '<span class="name-box2 center">'+obj.NAME+'</span>',
				},{
					iconLayout: 'default#image',
					iconImageHref: '/bitrix/components/shaggy/map.yandex/images/baloon.png',
					iconImageSize: [36, 36],
					iconImageOffset: [-16, -35]
				}));
			}
			myMap.geoObjects.add(myCollection);	
			myMap.controls.add('typeSelector');
            myMap.controls.add('zoomControl');
            
			if(objectsAr.length > 1){
				myMap.setBounds(myCollection.getBounds());
			}
			mapBlock.addClass('ready');
			//myCollection.applyBoundsToMap(myMap);	
		}
	}
}
function addScript(src){
	if(document.head.querySelector('script[src="' + src +'"]')){return false;}
	var script = document.createElement('script');
	script.src = src;
	script.async = false; // чтобы гарантировать порядок
	document.head.appendChild(script);
}

function mapReady(init){
	try{
		ymaps.ready(init);
	}catch(err){
		setTimeout(function(){			
			mapReady(init);
		},200);
	}
}
</script>
<div id="mapBlock" style="width: <?=$arResult['MAP_WIDTH']?>; height: <?=$arResult['MAP_HEIGHT']?>"></div>