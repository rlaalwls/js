@include('/inc/head')
@include('/inc/header')
    <div id="main">
        <div class="swiper-container main_slide_box">
            <div class="swiper-wrapper">
              <div class="swiper-slide main_slide01">                    
              </div>
              <div class="swiper-slide main_slide02">
              </div>
              <div class="swiper-slide main_slide03">
              </div>
            </div>  
            <div class="pagnation_box">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>   
            </div>    
            <div class="slide_txt_box">          
                <div class="inner">
                    <h2><b>인간</b>과 <b>환경</b>을 <br>
                        <b>소중히 생각하는</b><br>
                        (주)제이에스기술
                    </h2>
                    <p>
                        (주)제이에스기술은 업계 최고의 기술,<br>
                        최고의 품질, 최상의 가치를 추구합니다.
                    </p> 
                </div>                       
            </div>
        </div> 
        <div class="content_box01 inner">
            <div class="s_c_left">
                <div class="s_c_inner01"><a href="/introduction/company">
                    <div class="all_box">
                        <img src="/img/content01_ic01.png" alt="">
                        <p class="P_01">국내건축 및 토목재료 분야의 대표주자</p>
                        <h3>회사개요</h3>
                        <p class="p_02">첨단 기술력으로 신뢰받는<br>
                            전문건설업체</p>
                    </div>                    
                </a></div>                
                <div class="s_c_inner02"><a href="/archives/list">
                    <div class="all_box_02">
                        <div class="rel_div">
                            <div class="abs_div">
                                <h3>자료실</h3>
                                <span>More View <img src="/img/login_arrow.png" alt=""></span>
                            </div>                            
                        </div>                   
                    </div>
                </a></div>                
            </div>
            <div class="s_c_right">
                <div class="s_c_inner03"><a href="/research/intellectual">
                    <div class="all_box_03">
                        <div class="rel_div">
                            <div class="abs_div">
                                <h3>연구개발</h3>
                                <span>More View <img src="/img/login_arrow.png" alt=""></span>
                            </div>                            
                        </div> 
                    </div>
                </a></div>                
                <div class="s_c_inner04"><a href="/construction_result/list">
                    <div class="all_box">
                        <img src="/img/content01_ic02.png" alt="">
                        <p class="P_01">미래를 위한 노력하는 제이에스기술</p>
                        <h3>시공실적</h3>
                        <p class="p_02">앞으로도 풍부한 경험과 기술력으로<br>
                        건설을 선도해 나갈 것입니다.</p>
                    </div>
                </a></div>                
            </div>           
        </div>
        <div class="content_box02">
            <div class="inner">
                <h3>제품 소개</h3>
                <ul>
                    <li><a href="/product/list">JET Spray</a></li>
                    <li><a href="/product/list">SF 몰탈</a></li>
                    <li><a href="/product/list">SM 몰탈</a></li>
                    <li><a href="/product/list">SM A 코트</a></li>
                    <li><a href="/product/list">SM 코트</a></li>
                    <li><a href="/product/list">title</a></li>
                    <li><a href="/product/list">title</a></li>
                    <li><a href="/product/list">title</a></li>
                </ul>
            </div>
        </div>
        <div class="content_box03 inner">
            <div class="s_c_left">
                <div class="s_c_inner01"><a href="/construction_case/list">
                    <div class="all_box">
                        <img src="/img/content03_ic01.png" alt="">
                        <p class="P_01">다양한 시공을 통한 노하우 축적</p>
                        <h3>시공사례</h3>
                        <p class="p_02">다양하고 풍부한 경험을 바탕으로 한<br>
                            (주)제이에스기술의 시공사례</p>
                    </div>                    
                </a></div>              
            </div>
            <div class="s_c_right">
                <div class="s_c_inner03"><a href="/introduction/greeting">
                    <div class="all_box_02">
                        <div class="rel_div">
                            <div class="abs_div">
                                <p>NO1. (주)제이에스기술</p>
                                <h3>아름답고 밝은 미래</h3>                          
                            </div>                            
                        </div> 
                    </div>
                </a></div>                
                <div class="s_c_inner04"><a href="/introduction/map">
                    <div class="all_box_03">
                        <div class="rel_div">
                            <div class="abs_div">
                                <h3>오시는길</h3>
                                <span>More View <img src="/img/login_arrow_b.png" alt=""></span>
                            </div>                            
                        </div> 
                    </div>
                </a></div>                
            </div>           
        </div>

    </div>
@include('/inc/footer')
<script>
    $(function(){
        var mySwiper = new Swiper('.main_slide_box', {
            // Optional parameters
            direction: 'vertical',
            loop: true,
            autoplay : {
                delay:3000,
            },
            speed : 1000,

        
            // If we need pagination
            // pagination: {
            // el: '.swiper-pagination',
            // clickable:true,
            // },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
        });

    });
</script>