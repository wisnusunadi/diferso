@extends('layouts.admin.master')

@section('title')Article | {{ $data->judul }} @endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>{{ $data->judul }}</h3>
		@endslot
		<li class="breadcrumb-item">Article</li>
		<li class="breadcrumb-item active">{{ $data->judul }}</li>
	@endcomponent

	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="blog-single">
	                <div class="blog-box blog-details">
	                    <div class="banner-wrraper"><img class="img-fluid w-100 " src="{{asset('storage/'.$data->media)}}" alt="" /></div>
	                    <div class="card">
	                        <div class="card-body">
	                            <div class="blog-details">
	                                <ul class="blog-social">
	                                    <li>{{ \Carbon\Carbon::parse($data->created_at)->format('d M Y') }}</li>
	                                    <li><i class="icofont icofont-user"></i>Mark <span>Jecno </span></li>
	                                    <li>
                                            @foreach ($data->Category as $dc)
                                            {{ $loop->first ? '' : ', ' }}
                                           {{ $dc->nama }}
                                            @endforeach
                                        </li>
	                                </ul>
	                                <h4>
	                                    All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
	                                </h4>
	                                <div class="single-blog-content-top">
	                                   {!!$data->isi!!}
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>


	@push('scripts')
	@endpush

@endsection
