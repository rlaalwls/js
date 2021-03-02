@include('/inc/head')
@include('/inc/header')
@include('/inc/sub_header')
@include('/inc/sub_menu')
    <div class="research">
        <div class="popup_box">
            <img src="/img/research.jpg" alt="">
            <span>close</span>
        </div>
        <div class="intellectual inner">
            <ul>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
                <li>
                    <img src="/img/research.jpg" alt="">
                </li>
            </ul>
            <div class="pagination">
                <div class="page-item">
                    <a class="page-link" href="#"><img src="/img/prev_ic_n.png" alt="" class="img_m2" /></a>
                </div>
                <div class="page-item">
                    <a class="page-link" href="#"><img src="/img/prev_add_n.png" alt="" /></a>
                </div>
                <div class="num">
                    <div class="page-item on"><a class="page-link" href="#">1</a></div>
                    <div class="page-item"><a class="page-link" href="#">2</a></div>
                    <div class="page-item"><a class="page-link" href="#">3</a></div>
                    <div class="page-item"><a class="page-link" href="#">4</a></div>
                    <div class="page-item"><a class="page-link" href="#">5</a></div>
                    <div class="page-item"><a class="page-link" href="#">6</a></div>
                </div>
                <div class="page-item">
                    <a class="page-link" href="#"><img src="/img/next_ic_n.png" alt="" class="img_m2" /></a>
                </div>
                <div class="page-item">
                    <a class="page-link" href="#"><img src="/img/next_add_n.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
@include('/inc/footer')
<script>
    $(function(){
        $('.intellectual li').click(function(){
            $(this).closest('.intellectual').siblings('.popup_box').addClass('active');
        });
        $('.popup_box span').click(function(){
            $(this).parent().removeClass('active');
        });
    });
</script>