@extends('layout.index')

@section('title') {{$data->title ? $data->title : $data->name}} @endsection
@section('description') {{$data->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')
<link href="assets/css/contact.css" rel="stylesheet">
@endsection
@section('content')

<div class="contact_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>INDOCHINE 부동산 주식회사</h1>
                <div class="review-map">
                    <ul class="nav review-tabs" role="tablist">
                        <li>
                            <button class="active" data-bs-toggle="tab" data-bs-target="#map-type-1" type="button">하노이</button>
                        </li>
                        <li>
                            <button class="" data-bs-toggle="tab" data-bs-target="#map-type-2" type="button">호찌민</button>
                        </li>
                        <li>
                            <button class="" data-bs-toggle="tab" data-bs-target="#map-type-3" type="button">꽝닌</button>
                        </li>
                        <li>
                            <button class="" data-bs-toggle="tab" data-bs-target="#map-type-4" type="button">박닌</button>
                        </li>
                        <li>
                            <button class="" data-bs-toggle="tab" data-bs-target="#map-type-5" type="button">박장</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="map-type-1">
                            <div class="row">
                                <div class="col-md-5 main-info">
                                    <div class="info">
                                        <h3>본사</h3>
                                        <ul>
                                            <li><i class="icon-building-filled"></i> <strong>주소:</strong> {{$setting->address}}</li>
                                            <li><i class="icon-phone-filled"></i> <strong>전화번호:</strong> {{$setting->hotline}}</li>
                                            <li><i class="icon-mail-filled"></i> <strong>이메일:</strong> {{$setting->email}}</li>
                                            <li><i class="icon-time"></i> <strong>근무 시간:</strong> 월요일~토요일 / 오전 8:00 - 12:00, 오후 1:30 - 5:30</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="maps">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31353.81386504896!2d106.689305!3d10.793939!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528cdeb13ffff%3A0x8db7b80bb49f4899!2zQ8O0bmcgVHkgQ-G7lSBQaOG6p24gQuG6pXQgxJDhu5luZyBT4bqjbiBJbmRvY2hpbmU!5e0!3m2!1svi!2sus!4v1724829804399!5m2!1svi!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="map-type-2">
                            <div class="row">
                                <div class="col-md-5 main-info">
                                    <div class="info">
                                        <h3>본사</h3>
                                        <ul>
                                            <li><i class="icon-building-filled"></i> <strong>주소:</strong> {{$setting->address}}</li>
                                            <li><i class="icon-phone-filled"></i> <strong>전화번호:</strong> {{$setting->hotline}}</li>
                                            <li><i class="icon-mail-filled"></i> <strong>이메일:</strong> {{$setting->email}}</li>
                                            <li><i class="icon-time"></i> <strong>근무 시간:</strong> 월요일~토요일 / 오전 8:00 - 12:00, 오후 1:30 - 5:30</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="maps">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31353.81386504896!2d106.689305!3d10.793939!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528cdeb13ffff%3A0x8db7b80bb49f4899!2zQ8O0bmcgVHkgQ-G7lSBQaOG6p24gQuG6pXQgxJDhu5luZyBT4bqjbiBJbmRvY2hpbmU!5e0!3m2!1svi!2sus!4v1724829804399!5m2!1svi!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="map-type-3">
                            <div class="row">
                                <div class="col-md-5 main-info">
                                    <div class="info">
                                        <h3>본사</h3>
                                        <ul>
                                            <li><i class="icon-building-filled"></i> <strong>주소:</strong> {{$setting->address}}</li>
                                            <li><i class="icon-phone-filled"></i> <strong>전화번호:</strong> {{$setting->hotline}}</li>
                                            <li><i class="icon-mail-filled"></i> <strong>이메일:</strong> {{$setting->email}}</li>
                                            <li><i class="icon-time"></i> <strong>근무 시간:</strong> 월요일~토요일 / 오전 8:00 - 12:00, 오후 1:30 - 5:30</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="maps">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31353.81386504896!2d106.689305!3d10.793939!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528cdeb13ffff%3A0x8db7b80bb49f4899!2zQ8O0bmcgVHkgQ-G7lSBQaOG6p24gQuG6pXQgxJDhu5luZyBT4bqjbiBJbmRvY2hpbmU!5e0!3m2!1svi!2sus!4v1724829804399!5m2!1svi!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="map-type-4">
                            <div class="row">
                                <div class="col-md-5 main-info">
                                    <div class="info">
                                        <h3>본사</h3>
                                        <ul>
                                            <li><i class="icon-building-filled"></i> <strong>주소:</strong> {{$setting->address}}</li>
                                            <li><i class="icon-phone-filled"></i> <strong>전화번호:</strong> {{$setting->hotline}}</li>
                                            <li><i class="icon-mail-filled"></i> <strong>이메일:</strong> {{$setting->email}}</li>
                                            <li><i class="icon-time"></i> <strong>근무 시간:</strong> 월요일~토요일 / 오전 8:00 - 12:00, 오후 1:30 - 5:30</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="maps">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31353.81386504896!2d106.689305!3d10.793939!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528cdeb13ffff%3A0x8db7b80bb49f4899!2zQ8O0bmcgVHkgQ-G7lSBQaOG6p24gQuG6pXQgxJDhu5luZyBT4bqjbiBJbmRvY2hpbmU!5e0!3m2!1svi!2sus!4v1724829804399!5m2!1svi!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="map-type-5">
                            <div class="row">
                                <div class="col-md-5 main-info">
                                    <div class="info">
                                        <h3>본사</h3>
                                        <ul>
                                            <li><i class="icon-building-filled"></i> <strong>주소:</strong> {{$setting->address}}</li>
                                            <li><i class="icon-phone-filled"></i> <strong>전화번호:</strong> {{$setting->hotline}}</li>
                                            <li><i class="icon-mail-filled"></i> <strong>이메일:</strong> {{$setting->email}}</li>
                                            <li><i class="icon-time"></i> <strong>근무 시간:</strong> 월요일~토요일 / 오전 8:00 - 12:00, 오후 1:30 - 5:30</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="maps">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31353.81386504896!2d106.689305!3d10.793939!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528cdeb13ffff%3A0x8db7b80bb49f4899!2zQ8O0bmcgVHkgQ-G7lSBQaOG6p24gQuG6pXQgxJDhu5luZyBT4bqjbiBJbmRvY2hpbmU!5e0!3m2!1svi!2sus!4v1724829804399!5m2!1svi!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
@section('script')

@endsection