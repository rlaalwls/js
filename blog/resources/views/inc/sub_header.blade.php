<div class="sub_header">
    <div class="sub_banner {{request()->segment(1)}}">
        @if(request()->segment(1) == 'introduction')
            <h2>회사소개</h2>
            @if(request()->segment(2) == 'company')
                <p>회사개요</p>
            @elseif(request()->segment(2) == 'greeting')
                <p>인사말</p>
            @elseif(request()->segment(2) == 'history')
                <p>회사연혁</p>
            @elseif(request()->segment(2) == 'organization')
                <p>조직도</p>
            @elseif(request()->segment(2) == 'map')
                <p>오시는길</p>
            @endif
        @elseif(request()->segment(1) == 'research')
            <h2 class="center_h2">연구개발</h2>
        @elseif(request()->segment(1) == 'product')
            <h2 class="center_h2">제품소개</h2>
        @elseif(request()->segment(1) == 'construction_case')
            <h2 class="center_h2">시공사례</h2>
        @elseif(request()->segment(1) == 'construction_result')
            <h2 class="center_h2">시공실적</h2>
        @elseif(request()->segment(1) == 'archives')
            <h2 class="center_h2">자료실</h2>
        @endif
    </div>
</div>