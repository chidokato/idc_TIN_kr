@extends('layout.index')

@section('title') {{$data->title ? $data->title : $data->name}} @endsection
@section('description') {{$data->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')
<link href="assets/css/about.css" rel="stylesheet">
@endsection

@section('content')
<section class="section1">
    <div class="img">
        <img src="assets/images/gioithieu/slider.jpg">
    </div>
    <div class="title">
        <h1>회사 소개</h1>
    </div>
</section>

<section class="section2">
    <div class="menu">
        <ul>
            <li> <a class="nav-link" href="#gioithieu">회사 소개</a> </li>
            <li> <a class="nav-link" href="#tamnhin">비전 및 미션</a> </li>
            <li> <a class="nav-link" href="#muctieu">전략적 목표</a> </li>
            <li> <a class="nav-link" href="#dichvu">서비스</a> </li>
            <li> <a class="nav-link" href="#lanhdao">경영진 팀</a> </li>
        </ul>
    </div>
</section>

<div id="gioithieu">
    <section class="section3 bg" >
        <div class="container" >
            <div class="row">
                <div class="col-md-4">
                    <div class="img">
                        <img src="assets/images/gioithieu/gioi-thieu-02.png">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content">
                        <p>열정에서 시작되어, 포부로 세워지고, 헌신으로 성장한 INDOCHINE 부동산 주식회사는 베트남의 선도적인 부동산 기업 중 하나로 성장하고 있습니다.</p>
                        <p>2022년, 부동산 시장은 전례 없는 침체를 겪으며 수백 개의 부동산 기업이 폐업, 해산 또는 축소를 강요받았습니다. 그러나 INDOCHINE은 날카로운 통찰력으로 그 순간을 포착하여 위기를 기회로 전환시켰습니다. 성대한 런칭 이벤트를 통해 공식적으로 데뷔하며 업계의 ‘새로운 별’로 떠올랐습니다. 검증된 성과를 바탕으로 INDOCHINE은 수백 건의 성공적인 거래를 달성하며 얼어붙은 부동산 시장의 ‘빙하를 깨는’ 선구적인 역할을 했습니다. 이러한 추진력을 기반으로 INDOCHINE은 놀라운 성장을 이어가며 베트남 부동산 시장의 ‘다크호스’로서 확고한 명성을 얻고 있습니다.</p>
                        <p>특히 INDOCHINE은 베트남 부동산을 세계 무대에 소개한 선도 기업 중 하나로서 자부심을 가지고 있습니다. 베트남에 정착하거나 투자하려는 해외 고객을 위해 종합적인 부동산 서비스를 개척적으로 제공하고 있습니다. 탁월한 역량, 열정, 전문성, 그리고 깊은 시장 통찰력을 바탕으로 INDOCHINE은 신뢰할 수 있는 가교가 되어, 소중한 고객과 투자자들에게 뛰어난 가치와 높은 유동성을 지닌 우수한 부동산을 제공할 것을 약속드립니다.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section4 bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>선도적인 부동산 개발 및 분양 기업</h2>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="assets/images/gioithieu/quymo-02.png"></div>
                            <div class="swiper-slide"><img src="assets/images/gioithieu/quymo-03.png"></div>
                            <div class="swiper-slide"><img src="assets/images/gioithieu/quymo-04.png"></div>
                            <div class="swiper-slide"><img src="assets/images/gioithieu/quymo-05.png"></div>
                            <div class="swiper-slide"><img src="assets/images/gioithieu/quymo-06.png"></div>
                            <div class="swiper-slide"><img src="assets/images/gioithieu/quymo-07.png"></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
</div>

<div id="tamnhin">
    <section class="section5 bg">
        <div class="container" >
            <div class="row">
                <div class="col-md-7">
                   <div class="img"><img src="assets/images/gioithieu/tam-nhin.png"></div>
                </div>
                <div class="col-md-5">
                    <div class="content">
                        <div class="title">
                            <img src="assets/images/gioithieu/tam-nhin-1.png">
                            <h3>비전</h3>
                        </div>
                        <p>베트남 및 국제 시장에서 역동적이고 유연한 부동산 분양, 임대 및 관리 기업으로 성장하다.</p>
                        <p>디지털 전환을 선도하고 탁월한 가치를 창출하는 대표적인 기업으로 성장하다</p>
                        <p>베트남에서 최고의 선택이 되는 부동산 개발 및 분양 기업이 되다.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section6 bg">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <div class="iteam">
                        <div class="img"><img src="assets/images/gioithieu/bg_sumenh.png"></div>
                        <div class="text">
                            <img class="icon" src="assets/images/gioithieu/icon_su menh.png">
                            <p>우수한 제품과 서비스를 제공하여 삶의 질을 향상시키고 고객의 가치를 높이다</p>
                            <p>전문적인 서비스와 완벽한 솔루션을 제공하다</p>
                            <p>최고 수준의 비즈니스 윤리와 사회적 책임을 준수하며, 성공적인 부동산 브랜드로서 자부심을 세우다</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div id="muctieu">
    <section class="section7">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="img"> <img src="assets/images/icon_muctieu.png"> </div>
                    <h2>전략적 목표</h2>
                    <p>향후 5년 내에 베트남의 부동산 투자, 거래, 분양 및 임대 분야에서 선도적인 기업으로 성장하다</p>
                    <p>서비스를 지속적으로 개선하고 전문화하여 최적의 가치와 가장 적합한 솔루션을 제공하다</p>
                    <p>서비스 사업은 INDOCHINE의 국제 시장 진출을 견인하는 선도적인 핵심 분야가 될 것이다</p>
                </div>
            </div>
        </div>
    </section>
</div>
<div id="dichvu">
<section class="section8">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>종합 부동산 서비스</h2>
                <h3>원스톱 부동산 서비스</h3>

                <div class="swiper mySwiper1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide iteam1">
                            <h4>개발</h4>
                            <p>부동산 프로젝트 개발 및 사업</p>
                        </div>
                        <div class="swiper-slide iteam2">
                            <h4>컨설팅</h4>
                            <p>부동산 프로젝트 브랜드 전략 및 마케팅 컨설팅</p>
                        </div>
                        <div class="swiper-slide iteam3">
                            <h4>자산</h4>
                            <p>부동산 프로젝트 분양 및 임대</p>
                        </div>
                        <div class="swiper-slide iteam4">
                            <h4>호스피탈리티</h4>
                            <p>부동산 운영 및 관리</p>
                        </div>
                        <div class="swiper-slide iteam5">
                            <h4>글로벌</h4>
                            <p>해외 고객을 위한 종합 부동산 서비스</p>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
    </div>
</section>
</div>

<div id="lanhdao">
<section class="section9">
    <div class="container">
        <h2>경영진 팀</h2>
        <div class="row hangle" style="background:url(assets/images/gioithieu/bg_lanhdao1.png); background-size: cover;">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="timeline">
                    <div class="timeline-entry">
                        <div class="timeline-time">2006 - 2020</div>
                        <div class="timeline-content">
                            <p>Novaland, FLC 그룹, Đất Xanh 그룹, Đất Xanh Northern 등 베트남의 주요 부동산 기업에서 고위 임원직을 역임</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">2021년</div>
                        <div class="timeline-content">
                            <p>Vietnam Homes Group 브랜드 설립</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">2022년</div>
                        <div class="timeline-content">
                            <p>INDOCHINE 부동산 브랜드 설립</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info">
                    <div class="img"> <img src="assets/images/gioithieu/C-Hang.png"> </div>
                    <div class="name">레 티 항</div>
                    <div class="function"> 최고경영자(CEO) <br> INDOCHINE 부동산 주식회사 </div>
                </div>
            </div>
        </div>
        <div class="row haianh" style="background:url(assets/images/gioithieu/bg_lanhdao2.png); background-size: cover;">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="info">
                    <div class="img"> <img src="assets/images/gioithieu/hai-anh.png"> </div>
                    <div class="name">응우옌 하이 아잉</div>
                    <div class="function"> 영업이사 <br> INDOCHINE 부동산 주식회사 </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="timeline ">
                    <div class="timeline-entry">
                        <div class="timeline-time">2013 - 2021</div>
                        <div class="timeline-content">
                            <p>베트남 농업농촌개발부 근무</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">2021 - 2022</div>
                        <div class="timeline-content">
                            <p>Đất Xanh Mien Bac 영업부장</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">2022 - 현재</div>
                        <div class="timeline-content">
                            <p>영업이사 <br> INDOCHINE 부동산 주식회사 </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
</div>


@endsection

@section('js')

<script>
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 6,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        // khi màn hình có chiều rộng từ 0px trở lên
        0: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        // khi màn hình có chiều rộng từ 640px trở lên
        640: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
        // khi màn hình có chiều rộng từ 768px trở lên
        768: {
            slidesPerView: 5,
            spaceBetween: 25,
        },
        // khi màn hình có chiều rộng từ 1024px trở lên
        1024: {
            slidesPerView: 6,
            spaceBetween: 30,
        },
    }
});

var swiper = new Swiper(".mySwiper1", {
    slidesPerView: 5,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        // khi màn hình có chiều rộng từ 0px trở lên
        0: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        // khi màn hình có chiều rộng từ 640px trở lên
        640: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        // khi màn hình có chiều rộng từ 768px trở lên
        768: {
            slidesPerView: 4,
            spaceBetween: 25,
        },
        // khi màn hình có chiều rộng từ 1024px trở lên
        1024: {
            slidesPerView: 5,
            spaceBetween: 30,
        },
    }
});

document.addEventListener('DOMContentLoaded', function() {
    var links = document.querySelectorAll('.nav-link');
    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            var href = this.getAttribute('href');
            if (href.startsWith('#')) {
                event.preventDefault();
                var targetId = href.substring(1);
                var targetElement = document.getElementById(targetId);

                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            } else {
                window.location.href = href;
            }
        });
    });

    window.addEventListener('scroll', function() {
        var currentPosition = window.scrollY;
        links.forEach(function(link) {
            var targetId = link.getAttribute('href').substring(1);
            var targetElement = document.getElementById(targetId);

            if (targetElement) {
                var targetPosition = targetElement.offsetTop;
                var targetHeight = targetElement.offsetHeight;

                if (currentPosition >= targetPosition && currentPosition < targetPosition + targetHeight) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            }
        });
    });
});
function smoothScrollTo(target, duration, link) {
    var targetPosition = target.getBoundingClientRect().top + window.scrollY;
    var startPosition = window.scrollY;
    var distance = targetPosition - startPosition;
    var startTime = null;

    function animation(currentTime) {
        if (startTime === null) startTime = currentTime;
        var timeElapsed = currentTime - startTime;
        var run = ease(timeElapsed, startPosition, distance, duration);
        window.scrollTo(0, run);
        if (timeElapsed < duration) {
            requestAnimationFrame(animation);
        } else {
            window.scrollTo(0, targetPosition);
            link.classList.add('active'); // Thêm lớp 'active' vào liên kết sau khi cuộn hoàn tất
        }
    }

    function ease(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    }

    requestAnimationFrame(animation);
}
</script>
@endsection