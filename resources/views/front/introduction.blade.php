@extends ('layouts.travel')
@section('title')
 {{ $country->name }}
@endsection

@section('content')
<div class="container">
    <div class="justify-content-center">
        <h1 class = "text-center display-4">{{ $country->name }}</h1>
        <div class="country-image mb-4">
            <img src="{{ asset('storage/image/' . $country->image) }}" alt="{{ $country->name }}" class="w-100">
        </div>

        <!-- 国の詳細 -->
        <div class="introduction">
            <h2>観光ガイド</h2>
            <p>{{ $country->infomation }}</p>
        </div>


        <div class= "details">

            <div class="detail">
                <p>所要時間</p>
                <p class="txt-contents">{{ $country->airplane_times }}</p>
            </div>

            <div class="detail">
                <p>気候</p>
                <p class="txt-contents">{{ $country->climate }}</p>
            </div>

            <div class="detail">
                <p>通貨</p> 
                <p class="txt-contents">{{ $country->currency }}</p>
            </div>

            <div class="detail">
                <p>VISA</p> 
                <p class="txt-contents">{{ $country->visa }}</p>
            </div>

            
        </div>

    </div>
    
</div>

@endsection