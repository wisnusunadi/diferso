@extends('layouts.admin.master')

@section('title')Portfolio
@endsection

@push('css')
<style>
  </style>
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Portfolio</h3>
		@endslot
		<li class="breadcrumb-item active">Portfolio</li>
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
        <div class="mb-3"><a type="button" class="btn btn-primary btn-sm" href="{{route('port.create')}}"><i
        class="fa fa-plus"></i> Create</a></div>
        <div class="row learning-block">
        <div class="col-xl-12 xl-60">
        {{-- @if(count($data) <= 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert"> No data found in database</div>
        @else --}}
        <div class="row">
            @foreach ($data as $d )
            <div class="col-xl-6 col-sm-6">
                <div class="card">
                    <div class="blog-box blog-list row">
                        <div class="col-xl-4 col-10"><img class="img-fluid sm-100-w" src="{{asset('storage/'.$d->media)}}" alt="" /></div>
                        <div class="col-xl-8 col-12">
                            <div class="blog-details">
                                <div class="blog-date"><span>{{$d->tahun}}</span>
                                    <a id="update_partner" type="button" class="btn btn-warning btn-xs update_partner" href="{{route('port.edit',$d->id)}}"><i class="fa fa-pencil text-light fa-fw"></i></a>
                                    <button  type="button" class="btn btn-danger btn-xs" id="delete_port"  onclick="delete_port({{ $d->id }})" ><i class="fa fa-trash text-light fa-fw"></i></button>
                             </div>
                                <a href="learning-detailed.html"> <h6>{{$d->nama}}</h6></a>
                                <div class="blog-bottom-content">
                                    <ul class="blog-social">
                                        <li>{{$d->jenis}}</li>
                                        <li>{{$d->link}}</li>
                                    </ul>
                                    <hr />
                                    <p class="mt-0">
                                        {{$d->deskripsi}}
                                     </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
	</div>
	</div>
	</div>




	@push('scripts')
    <script src="{{ asset('js/sweet-alert/sweetalert.min.js') }}"></script>
    <script>
           function delete_port(id){
                    swal({
                        title: "Delete Portfolio ?",
                        text: "Once deleted, you will not be able to recover Delete Team",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                url: '/dash/portfolio/delete',
                                type: 'DELETE',
                                dataType: 'json',
                                data: {"id": id, "_method": "DELETE", _token: "{{csrf_token()}}"},
                                success: function(result) {
                                    if(result.info == "success"){
                                        window.location.reload();
                                        swal(result.msg, {
                                            icon: "success",
                                        });
                                        window.location.reload();
                                    }
                                    else{
                                        swal(result.msg, {
                                            icon: "error",
                                        });
                                    }
                                }
                            });
                        } else {
                            swal("Delete has been cancelled");
                        }
                    })
                }
        </script>
	@endpush

@endsection
