@extends('layouts.admin.master')

@section('title')Portfolio Create
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Portfolio Create</h3>
		@endslot
		<li class="breadcrumb-item">Portfolio</li>
		<li class="breadcrumb-item active">Create</li>
	@endcomponent
    @if(Session::has('error')  )
    <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ Session::get('error') }}
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
    @if(Session::has('success')  )
    <div class="alert alert-success alert-dismissible fade show" role="alert">{{ Session::get('success') }}
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-body">
	                    <form class="form theme-form" method="POST" action="{{route('port.store')}}" enctype="multipart/form-data">
                            @csrf
	                        <div class="row">
	                            <div class="col">
	                                <div class="mb-3">
	                                    <label>Project Title</label>
	                                    <input class="form-control" type="text" placeholder="Project name *" name="nama"/>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col">
	                                <div class="mb-3">
	                                    <label>Type</label>
	                                    <input class="form-control" type="text" placeholder="Type"  name="jenis"/>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col-sm-4">
	                                <div class="mb-3">
	                                    <label>Year</label>
	                                    <input class="form-control" type="text" placeholder="Enter project year"  name="tahun" />
	                                </div>
	                            </div>

	                        </div>
                            <div class="row">
	                            <div class="col">
	                                <div class="mb-3">
	                                    <label>Link</label>
	                                    <input class="form-control" type="text" placeholder="Link Project"  name="link"/>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col">
	                                <div class="mb-3">
	                                    <label>Enter some Details</label>
	                                    <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"  name="deskripsi"></textarea>
	                                </div>
	                            </div>
	                        </div>
                            <div class="row">
                                <div class="col">
	                                <div class="mb-3">
	                                    <label>Thubmnail</label>
                                        <input class="form-control" type="file" id="thumbnail" name="thumbnail" placeholder="Choose JPG/PNG File" accept="image/png, image/jpeg, image/jpg"/>
                                        <img id="uploadPreview" style="width:50%; height: auto" class="mt-1"/>
                                        <div id="thumbnail_fb" class="invalid-feedback"></div>
                                    </div>
	                            </div>
                            </div>
	                        <div class="row">
	                            <div class="col">
	                                <div class="text-end">
                                        <button class="btn btn-secondary me-3" type="submit">Add</button>
                                        <a class="btn btn-danger" href="{{route('port.show')}}">Cancel</a></div>
	                            </div>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>


	@push('scripts')
    <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            if(input.files[0].size <= 5000000){
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#uploadPreview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
            else{
                $('#uploadPreview').attr('src', "");
            }
        }
        else{
            $('#uploadPreview').removeAttr('src');
        }
    }

    $("#thumbnail").change(function(){
        readURL(this);
        for(var i=0; i< $(this).get(0).files.length; ++i){
            var file1 = $(this).get(0).files[i].size;
            if(file1){
                var file_size = $(this).get(0).files[i].size;
                if(file_size > 5000000){
                    $('#uploadPreview').attr('src', "");
                    $('#thumbnail_fb').html("File upload size is larger than 5MB");
                    $('#thumbnail').addClass('is-invalid');
                }else{
                    $('#thumbnail_fb').html("");
                    $('#thumbnail').removeClass('is-invalid');
                }
            }
        }

    });
</script>
	@endpush

@endsection
