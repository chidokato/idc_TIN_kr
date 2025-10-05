@extends('layout.index')

@section('title') {{$data->title ? $data->title : $data->name}} @endsection
@section('description') {{$data->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')
<link href="assets/css/widget.css" rel="stylesheet">
@endsection

@section('content')
<form action="{{ url()->current() }}" method="GET">
<section class="sec-fiter-search floating-label">
    <div class="container">
        <div data-bs-toggle="button" class="d-md-none"><button type="button" class="btn btn-circle btn-toggle"><span class="icon-search"></span></button></div>
        
            <div class="row g-3 justify-content-lg-end">
                <div class="col-lg-4">
                    <div class="input-group search-input">
                        <span class="input-group-text border100"><i class="icon-search"></i></span>
                        <input value="{{ request()->key ?? '' }}" name="key" type="text" class="form-control" placeholder="주소 또는 프로젝트 입력">
                    </div>
                    <button type="submit" class="btn btn-circle">검색</button>
                </div>
            </div>
        
    </div>
</section>

<!------------------- CARD ------------------->
<section class="card-grid sales-sec list-tindang">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block">
                <div class="widget widget-list widget-hightlight mb-3">
                    <h4><span>유형</span></h4>
                    @foreach($cats as $val)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="categories[]" value="{{$val->id}}" id="flexCheck{{$val->id}}" {{ in_array($val->id, request()->input('categories', [])) ? 'checked' : '' }}>
                            <label class="form-check-label aa22" for="flexCheck{{$val->id}}">
                                <span>{{$val->name}}</span> <span>({{ count($val->Post) }})</span>
                            </label>
                        </div>
                    @endforeach
                    <hr>
                    <h4><span>성/시</span></h4>
                    @foreach($provinces as $val)
                        @if(count($val->Post) > 1)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="provinces[]" value="{{$val->id}}" id="flexCheck{{$val->id}}">
                            <label class="form-check-label aa22" for="flexCheck{{$val->id}}">
                                <span>{{$val->name}}</span> <span>({{ count($val->Post) }})</span>
                            </label>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-lg-9">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{asset('')}}">Indochine</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$data->name}}</li>
                    </ol>
                </nav>
                <h1 class="text-uppercase title-cat">전국 부동산 프로젝트</h1>
                <div class="option-cat">
                    <div class="iteam"><a href="">현재 분양 중</a></div>
                    <div class="iteam"><a href="">Indochine 독점 분양</a></div>
                </div>
                <div class="sort-box">
                    <span>총 <span class="text-main font-weight-semibold">{{ $posts->total() }}</span> 개의 매물</span>
                    <div class="sort-ct">
                        <div class="dropdown">
                            <a class="btn ripple-effect dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>정렬: 가격 낮음→높음 <i class="icon-down ms-2"></i></span>
                            </a>
                            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item checked" href="#">가격: 낮음→높음</a></li>
                            <li><a class="dropdown-item" href="#">가격: 높음→낮음</a></li>
                            <li><a class="dropdown-item" href="#">최신순</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row" id="load-product">
                    @foreach($posts as $key => $val)
                        <div class="col-md-4 mb-3">
                            @include('pages.iteam.product')
                        </div>
                    @endforeach
                </div>

                <div class="paginate-search">
                    <div>표시: </div>
                    <select class="paginate" name="per_page" onchange="this.form.submit()">
                        <option value="12" {{ request()->per_page == 12 ? 'selected' : '' }}>12</option>
                        <option value="24" {{ request()->per_page == 24 ? 'selected' : '' }}>24</option>
                        <option value="48" {{ request()->per_page == 48 ? 'selected' : '' }}>48</option>
                        <option value="96" {{ request()->per_page == 96 ? 'selected' : '' }}>96</option>
                    </select>
                    <div> 표시 {{ $posts->firstItem() }} - {{ $posts->lastItem() }} / 총 {{ $posts->total() }} </div>
                    {{ $posts->appends(request()->all())->links() }}
                </div>
                
            </div>
            
        </div>
    </div>
</section>
<!------------------- END CARD ------------------->
</form>
@endsection


@section('js')

@endsection
