@extends('layouts.admin.master')

@section('title')Blog Single @endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Blog Single</h3>
		@endslot
		<li class="breadcrumb-item">Blog</li>
		<li class="breadcrumb-item active">Blog Single</li>
	@endcomponent

	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="blog-single">
	                <div class="blog-box blog-details">
	                    <div class="banner-wrraper"><img class="img-fluid w-100 bg-img-cover" src="{{asset('assets/images/blog/blog-single.jpg')}}" alt="blog-main" /></div>
	                    <div class="card">
	                        <div class="card-body">
	                            <div class="blog-details">
	                                <ul class="blog-social">
	                                    <li>25 July 2018</li>
	                                    <li><i class="icofont icofont-user"></i>Mark <span>Jecno </span></li>
	                                    <li><i class="icofont icofont-thumbs-up"></i>02<span>Hits</span></li>
	                                    <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
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
