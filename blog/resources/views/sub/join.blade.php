@include('/inc/head')
@include('/inc/header')
    <div class="join">
        <img src="/img/login_bg.png" alt="" class="mo_none">
        <img src="/img/m_login_bg.png" alt="" class="mo_block">
        <div class="join_inner inner">
            <h3>회원가입</h3>
            <form action="">
                <div>
                    <label for="">아이디</label>
                    <input type="text" placeholder="영문, 숫자 포함해서 최소 4 자리~최대 20자리">
                </div>
                <div>
                    <label for="">비밀번호</label>
                    <input type="password" placeholder="최소 4자리이상 입력하세요">
                </div>
                <div>
                    <label for="">비밀번호 재입력</label>
                    <input type="password" placeholder="비밀번호를 재입력하세요">
                </div>
                <div>
                    <label for="">이름</label>
                    <input type="text" placeholder="이름을 입력하세요">
                </div>
                <div>
                    <div class="phone_box">
                        <div>
                            <label for="">휴대폰 번호</label>
                        </div>
                        <div>
                            <div class="phone_div">
                                <p>
                                    <input type="text" placeholder="010" disabled class="phone_n" > 
                                    <span>-</span>               
                                    <input type="text" class="phone_n">
                                    <span>-</span>
                                    <input type="text" class="phone_n">
                                </p>
                                <span class="button_gray"><a href="">본인인증</a></span>
                            </div>
                            <div class="phone_div">
                                <input type="text" class="phone_c">
                                <span class="button_gray"><a href="">확인</a></span>
                            </div>
                        </div>
                    </div>
                </div>              
                <div>
                    <label for="">이메일</label>
                    <input type="email" placeholder="이메일에 ‘@’ 포함해서 입력하세요">
                </div>
                <p class="submit_box">
                    <input type="submit" class="submit" value="회원가입하기">
                    <img src="/img/login_arrow.png" alt="">
                </p>                
            </form>
            
        </div>
    </div>
@include('/inc/footer')