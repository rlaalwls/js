@include('/inc/head')
@include('/inc/header')
    <div class="login">
        <img src="/img/login_bg.png" alt="" class="mo_none">
        <img src="/img/m_login_bg.png" alt="" class="mo_block">
        <div class="login_inner inner">
            <h3>LOGIN</h3>
            <form action="">
                <p>
                    <label for="">아이디</label>
                    <input type="text" placeholder="ID">
                </p>
                <p>
                    <label for="">비밀번호</label>
                    <input type="password" placeholder="password">
                </p>
                <p class="submit_box">
                    <input type="submit" class="submit" value="로그인">
                    <img src="/img/login_arrow.png" alt="">
                </p>                
            </form>
            <div class="login_another_box">
                <span><a href="/join">회원가입 |</a></span>
                <span><a href="/find_member">아이디찾기</a></span>
                <span><a href="/find_member">| 비밀번호찾기</a></span>
            </div>
        </div>
    </div>
@include('/inc/footer')