@include('/inc/head')
@include('/inc/header')
@include('/inc/sub_header')
    <div class="introduction">
        <div class="maps inner">
            <div class="map_top">
                <img src="/img/map_ic.png" alt="">
                <h3>LOCATION</h3>
            </div>
            <div class="map map01">
                <div class="map_text">
                    <span>본사</span>
                    <p>13840 경기 과천시 찬우물로 30-1, 1층(갈현동 11-5)</p>
                </div>                
                <div id="daumRoughmapContainer1614236611943" class="m_map root_daum_roughmap root_daum_roughmap_landing"></div>
            </div>
            <div class="map map02">
                <div class="map_text">
                    <span>공장</span>
                    <p>27651 충북 음성군 삼성면 대성로 547번길 31(덕정리 824-1)</p>
                </div>     
                <div id="daumRoughmapContainer1614236674190" class="m_map root_daum_roughmap root_daum_roughmap_landing"></div>
            </div>
        </div>
    </div>
@include('/inc/footer')
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1614236611943",
		"key" : "24m5y",
		"mapWidth" : "1200",
		"mapHeight" : "738"
	}).render();

    new daum.roughmap.Lander({
		"timestamp" : "1614236674190",
		"key" : "24m6z",
		"mapWidth" : "1200",
		"mapHeight" : "738"
	}).render();
</script>