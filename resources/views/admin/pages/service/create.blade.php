@extends('admin.layouts.master')

@section('title')
Xidmətlərimiz
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Xidmətlərimiz</h3>
        </div>
        <div class="page-header">
            <nav aria-label="breadcrumb">
                
            </nav>
        </div>
        </div>
        </div>
        </div>
        <div class="white_card_body">
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.service.store') }}">
        @csrf
        <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-group" for="">Şəkil</label>
                    <div class="mb-3">
                        <input name="img" class="form-control" type="file" id="formFile">
                    </div>
                    @error('img')
                    <span class="text-danger mt-2">{{ $message }}</span> 
                    @enderror
                </div>
           </div>
        <div class="row mb-3">
         <div class="col-md-12">
            <div class="form-group">
                <label for="">Başlıq</label>
                <input type="text" class="form-control" name="title">
            </div>
            @error('title')
            <span class="text-danger mt-2">{{ $message }}</span> <br>
            @enderror
         </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group">
                   <label for="">Link</label>
                   <input type="text" class="form-control" name="link">
               </div>
               @error('link')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
           </div>


        <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group">
                   <label for="">Açıqlama</label>
                   <textarea id="editor" name="desc"   class="form-control"></textarea>
               </div>
               @error('desc')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
        </div>

        <a href="{{ route('admin.service.index') }}" class="btn btn-success">Geri</a>
        <button type="submit" class="btn btn-primary">Əlavə et</button>
        </form>
        </div>
        </div>
        </div>
        </div>
</div>
</div>

@endsection


@push('js')
<script src="{{ asset('manager/vendors/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('manager/js/cketditor.js') }}"></script>
@endpush    