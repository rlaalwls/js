<div class="sub_sub_menu">
    <ul class="inner">
        <li class="@if(request()->segment(2) == 'intellectual') on @endif"><a href="/research/intellectual">지적재산권 현황</a></li>
        <li class="@if(request()->segment(2) == 'quality') on @endif"><a href="/research/quality">품질인증 현황</a></li>
        <li class="@if(request()->segment(2) == 'etc') on @endif"><a href="/research/etc">기타인증 현황</a></li>
        <li class="@if(request()->segment(2) == 'premier') on @endif"><a href="/research/premier">수상내역</a></li>
    </ul>
</div>