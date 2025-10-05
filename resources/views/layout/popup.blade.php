<div class="hotline-phone-ring-wrap form-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle click_popup">
            <a href="javascript:void(0)" class="pps-btn-img">
                <img src="assets/img/icon/dowload.png" alt="전화 걸기" width="50">
            </a>
        </div>
        <div class="hotline-bar click_popup">
            <a href="javascript:void(0)">
                <span class="text-hotline">가격표 다운로드</span>
            </a>
        </div>
    </div>
</div>

<div class="hotline-phone-ring-wrap zalo-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle">
            <a target="_blank" href="https://zalo.me/{{$setting->hotline}}" class="pps-btn-img">
                <img src="assets/img/icon/zalo.png" alt="Zalo 채팅" width="50">
            </a>
        </div>
        <div class="hotline-bar">
            <a target="_blank" href="https://zalo.me/{{$setting->hotline}}">
                <span class="text-hotline">채팅하기</span>
            </a>
        </div>
    </div>
</div>

<div class="hotline-phone-ring-wrap hotline-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle">
            <a href="tel:{{$setting->hotline}}" class="pps-btn-img">
                <img src="assets/img/icon/icon-call-nh.png" alt="전화 걸기" width="50">
            </a>
        </div>
        <div class="hotline-bar">
            <a href="tel:{{$setting->hotline}}">
                <span class="text-hotline">지금 전화하기</span>
            </a>
        </div>
    </div>
</div>

<div id="popup-banggia" class="popup-overlay">
    <div class="popup-content">
        <span class="close-popup">&times;</span>
        <h3>가격표 다운로드</h3>
        <form id="validateForm" method="post" action="question">
            @csrf
            <input type="hidden" id="current-url" name="url" value="">
            <label>
                <input type="text" name="name" placeholder="이름 (*)">
            </label>
            <label>
                <input type="text" name="phone" placeholder="전화번호 (*)">
            </label>
            <label>
                <input type="text" name="email" placeholder="이메일">
            </label>
            <p class="sub">(*) ‘견적 요청’을 클릭하면 개인정보 처리방침에 동의하는 것으로 간주됩니다.</p>
            <button class="btn btn-circle" type="submit">지금 보내기</button>
        </form>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const urlInput = document.getElementById("current-url");
        if (urlInput) {
            urlInput.value = window.location.href;
        }
    });
</script>
