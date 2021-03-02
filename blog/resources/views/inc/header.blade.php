<body>
    <div id="container">
        <span class="respon_menu_aside"></span>
        <div id="header">
            <div class="header_top">
                <p class="inner"><a href="/login">협약사 Log in</a></p>
            </div>
            <div class="header_main">
                <div class="inner">
                    <h1><a href="/"><img src="/img/logo.png" alt="logo" class="logo"></a></h1>
                    <ul class="main_menu">
                        <li class="dep_01">
                            <a href="">회사소개</a>
                            <ul class="sub_menu">
                                <li><a href="/introduction/company">회사개요</a></li>
                                <li><a href="/introduction/greeting">인사말</a></li>
                                <li><a href="/introduction/history">회사연혁</a></li>
                                <li><a href="/introduction/organization">조직도</a></li>
                                <li><a href="/introduction/map">오시는길</a></li>
                            </ul>
                        </li>
                        <li class="dep_01">
                            <a href="">연구개발</a>
                            <ul class="sub_menu">
                                <li><a href="/research/intellectual">지적재산권 현황</a></li>
                                <li><a href="/research/quality">품질인증 현황</a></li>
                                <li><a href="/research/etc">기타인증 현황</a></li>
                                <li><a href="/research/premier">수상내역</a></li>
                            </ul>
                        </li>
                        <li class="dep_01">
                            <a href="">제품소개</a>
                            <ul class="sub_menu">
                                <li><a href="/product/list">제품소개</a></li>
                            </ul>
                        </li>
                        <li class="dep_01">
                            <a href="">시공사례</a>
                            <ul class="sub_menu">
                                <li><a href="/construction_case/list">시공사례</a></li>
                            </ul>
                        </li>
                        <li class="dep_01">
                            <a href="">시공실적</a>
                            <ul class="sub_menu">
                                <li><a href="/construction_result/list">시공실적</a></li>
                            </ul>
                        </li>
                        <li class="dep_01">
                            <a href="">자료실</a>
                            <ul class="sub_menu">
                                <li><a href="/archives/list">자료실</a></li>
                            </ul>
                        </li>                  
                    </ul>
                    <div class="sub_bar_box">
                        <img src="/img/sub_bar.png" alt="메뉴보기" class="sub_bar">
                    </div>
                </div>
              
            </div>
        </div>
        <div class="respon_menu">
            <div>
                <img src="/img/close_btn.png" alt="close" class="close_btn">
            </div>
            <ul class="dep_01">
                <li class="dep_01_li">
                    <a href="javascript:void(0);">회사소개</a>
                    <ul class="dep_02">
                        <li><a href="/introduction/company">회사개요</a></li>
                        <li><a href="/introduction/greeting">인사말</a></li>
                        <li><a href="/introduction/history">회사연혁</a></li>
                        <li><a href="/introduction/organization">조직도</a></li>
                        <li><a href="/introduction/map">오시는길</a></li>
                    </ul>
                </li>
                <li class="dep_01_li">
                    <a href="javascript:void(0);">연구개발</a>
                    <ul class="dep_02">
                        <li><a href="/research/intellectual">지적재산권 현황</a></li>
                        <li><a href="/research/quality">품질인증 현황</a></li>
                        <li><a href="/research/etc">기타인증 현황</a></li>
                        <li><a href="/research/premier">수상내역</a></li>
                    </ul>
                </li>
                <li class="dep_01_li">
                    <a href="javascript:void(0);">제품소개</a>
                    <ul class="dep_02">
                        <li><a href="/product/list">제품소개</a></li>
                    </ul>
                </li>
                <li class="dep_01_li">
                    <a href="javascript:void(0);">시공사례</a>
                    <ul class="dep_02">
                        <li><a href="/construction_case/list ">시공사례</a></li>
                    </ul>
                </li>
                <li class="dep_01_li">
                    <a href="javascript:void(0);">시공실적</a>
                    <ul class="dep_02">
                        <li><a href="/construction_result/list">시공실적</a></li>
                    </ul>
                </li>
                <li class="dep_01_li">
                    <a href="javascript:void(0);">자료실</a>
                    <ul class="dep_02">
                        <li><a href="/archives/list">자료실</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <script>
            $(function(){
                var mainMenu = $('#header .header_main'); 

                mainMenu.mouseover(function(){

                    if($(window).width()>768){
                        mainMenu.addClass('active');
                    }else{
                        mainMenu.removeClass('active');
                    }
                });
                mainMenu.mouseout(function(){
                    $(this).removeClass('active');
                });


                $('.respon_menu .dep_01 > li').click(function(){
                    $(this).find('.dep_02').slideToggle();
                });

                $(' #header .sub_bar').click(function(){
                    $(this).closest('#header').siblings('.respon_menu').addClass('active');
                    $('body').css({position:'fixed'});
                    $('body').addClass('body_bg');
                });

                $('.respon_menu div .close_btn').click(function(){
                    $(this).closest('.respon_menu').removeClass('active');
                    $('body').css({position:''});
                    $('body').removeClass('body_bg');
                });
           });
           
       </script>