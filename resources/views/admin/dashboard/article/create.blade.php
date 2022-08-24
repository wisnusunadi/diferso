@extends('layouts.admin.master')

@section('title')Article @endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/select2.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/summernote.css') }}">
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/summernote.css')}}"> --}}
@endpush

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>Create Article</h3>
        @endslot
        <li class="breadcrumb-item"><a href="{{route('article.show')}}">Article</a></li>
        <li class="breadcrumb-item active">Create Article</li>
    @endcomponent

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
            @if(Session::has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ Session::get('error') }}
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      @endif
                        @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">{{ Session::get('success') }}
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      @endif
				<div class="card">
					<div class="card-body">
                    <form class="theme-form mega-form" method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">
                    @csrf
                        <h6>Article Information</h6>
                        <div class="mb-3 row">
                        	<label class="col-form-label col-12">Title</label>
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <input class="form-control" type="text" id="title" name="title" placeholder="Enter Article Title" />
                                <div id="title_fb" class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-12">Category</label>
                            <div class="col-lg-8 col-md-8 col-sm-12">
                            <select class="js-example-basic-multiple col-sm-12" multiple="multiple" id="category_id" name="category_id[]">
                                {{-- @foreach($c as $cs)
                                    <option value="{{$cs->id}}">{{$cs->name}}</option>
                                @endforeach --}}
                            </select>
                            <div id="title_fb" class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                        	<label class="col-form-label">Thumbnail</label>
                            <div class="col-lg-6 col-md-8 col-sm-12">
                        	    <input class="form-control" type="file" id="thumbnail" name="thumbnail" placeholder="Choose JPG/PNG File" accept="image/png, image/jpeg, image/jpg"/>
                                <img id="uploadPreview" style="width:50%; height: auto" class="mt-1"/>
                                <div id="thumbnail_fb" class="invalid-feedback"></div>
                            </div>
                        </div>

                        <hr class="mt-4 mb-4" />
                        <h6>Web Information</h6>
                        <div class="mb-3">
                        	<label class="col-form-label">Status</label>
                            <div class="form-group m-t-15 m-checkbox-inline mb-0 custom-radio-ml">
                                <div class="radio radio-primary">
                                    <input id="radioinline1" type="radio" name="status" value="1">
                                    <label class="mb-0" for="radioinline1">Available</label>
                                </div>
                                <div class="radio radio-primary">
                                    <input id="radioinline2" type="radio" name="status" value="0" checked>
                                    <label class="mb-0" for="radioinline2">Not Available</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                        	<label class="col-form-label col-12">Meta (desc)</label>
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <input class="form-control" type="text" id="slug" name="slug" placeholder="Enter Meta (desc)" />
                                <div id="slug_fb" class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                        	<label class="col-form-label col-12">Slug (url)</label>
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <input class="form-control" type="text" id="slug" name="slug" placeholder="Enter Slug (url)" />
                                <div id="slug_fb" class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Content</label>
                        	<textarea class="form-control " id="editor1" name="content"></textarea>
                            <div id="content_fb" class="invalid-feedback"></div>
                        </div>
                        <div class="mt-4 d-flex justify-content-between">
                            <button type="button" class="btn btn-danger">Cancel</button>
                            <button type="submit" class="btn btn-success" id="submit">Submit</button>
                        </div>
					</form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/select2/select2-custom.js') }}"></script>
    {{-- <script src="{{asset('js/editor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('js/editor/ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{asset('js/editor/ckeditor/styles.js')}}"></script>
    <script src="{{asset('js/editor/ckeditor/ckeditor.custom.js')}}"></script> --}}

    <script src="{{asset('js/editor/summernote/summernote.js')}}"></script>

    <script>
        $(function(){
//             $('#editor1').summernote({
//               toolbar: [
//             ['style', ['bold', 'italic', 'underline', 'clear']],
//             ['font', ['strikethrough', 'superscript', 'subscript']],
//             ['fontsize', ['fontsize']],
//             ['color', ['color']],
//             ['para', ['ul', 'ol', 'paragraph']],
//            ['height', ['height']]
//   ]
// });
$('#editor1').summernote({
  toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['table', [
        ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
       ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
    ]],
    ['insert', ['link', 'picture', 'video']],
    ['para', ['ul', 'ol', 'paragraph']],
    // ['fontsize', ['fontsize']],

    // ['table', [
    //     ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
    //     ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
    // ]],

  ]
});


            //$('#submit').attr('disabled', true);


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
                            $('#uploadPreview').attr('src', "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=='");
                            $('#thumbnail_fb').html("File upload size is larger than 5MB");
                            $('#thumbnail').addClass('is-invalid');
                        }else{
                            $('#thumbnail_fb').html("");
                            $('#thumbnail').removeClass('is-invalid');
                        }
                    }
                }
                validate();
            });



            function validateSlug($slug){
                var slugReg = /^\S*$/;
                return slugReg.test($slug);
            }

            $('#slug').on("keyup change", function(){
                if($(this).val() != ""){
                    if(!validateSlug($(this).val())){
                        $('#slug_fb').html("Cannot contain whitespace");
                        $(this).addClass("is-invalid");
                    }else{
                        $('#slug_fb').html("");
                        $(this).removeClass("is-invalid");
                    }
                }else{
                    $('#slug_fb').html("Slug is Required");
                    $(this).addClass("is-invalid");
                }

            })




        });
    </script>
	@endpush

@endsection
