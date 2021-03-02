@include('/inc/head')
@include('/inc/header')
    <div class="find_member">
        <img src="/img/login_bg.png" alt="" class="mo_none">
        <img src="/img/m_login_bg.png" alt="" class="mo_block">       
        <div class="find_member_inner">
            <h2>아이디 / 비밀번호 찾기</h2>
            <div class="find_member_box inner">
                <h3>아이디 찾기</h3>
                <form action="">
                    <p>
                        <label for="">이름</label>
                        <input type="text" placeholder="이름">
                    </p>
                    <p>
                        <label for="">이메일</label>
                        <input type="email" placeholder="이메일에 ‘@’ 포함해서 입력하세요">
                    </p>
                    <p class="submit_box">
                        <input type="submit" class="submit" value="확인">
                        <img src="/img/login_arrow.png" alt="">
                    </p>                                
                </form>
            </div>
            <div class="find_member_box inner">
                <h3>비밀번호 찾기</h3>
                <form action="">
                    <p>
                        <label for="">아이디</label>
                        <input type="text" placeholder="아이디">
                    </p>
                    <p>
                        <label for="">이름</label>
                        <input type="text" placeholder="이름">
                    </p>
                    <p>
                        <label for="">이메일</label>
                        <input type="email" placeholder="이메일에 ‘@’ 포함해서 입력하세요">
                    </p>
                    <p class="submit_box">
                        <input type="submit" class="submit" value="확인">
                        <img src="/img/login_arrow.png" alt="">
                    </p>                                
                </form>
            </div>
        </div>
        
    </div>
@include('/inc/footer')