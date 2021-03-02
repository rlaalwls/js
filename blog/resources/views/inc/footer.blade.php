            <div id="footer"> 
                <div class="footer_top">
                    <ul class="inner">
                        <li><a href="/introduction/company">회사개요</a></li>
                        <li><a href="/research/intellectual">연구개발</a></li>
                        <li><a href="/introduction/map">오시는길</a></li>
                        <li><a href="">ADMIN</a></li>
                    </ul>
                </div>
                <div class="footer_bottom inner">
                    <span class="m_d_block">(주)제이에스기술</span>
                    <span class="m_d_block">경기도 과천시 찬우물로 30-1 준영빌딩 1층</span>
                    <span>대표전화  02-3679-0479 </span>
                    <span>FAX  02-3679-0470</span>
                    <p>COPYRIGHT &copy; 2020 JS TECHNOLOGY.CO.  LTD., ALL Rights Reserved.</p>
                </div>
                <a href="" class="go_top inner"><img src="/img/go_top.png" alt="top_button"></a>
            </div>
        </div>
    </body>
</html>
<script>
    $(function(){

        var goTop = $('.go_top');
        
        $(window).scroll(function(){
            var goTopSCT = $(this).scrollTop();
            
            if(goTopSCT>1200){
                goTop.addClass('active');
            }else{
                goTop.removeClass('active');
            }
            console.log(goTopSCT);
        });

        goTop.click(function(e){
            e.preventDefault();
            $('html,body').animate({scrollTop:0},500);
        });
    });
</script>