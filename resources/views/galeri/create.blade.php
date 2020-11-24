@extends('layouts.app')
@extends('nav.navi')
@section('contenttwo')
 @section('content')
 <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Masukan Data</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">name:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <select name = "created_by" name="desc"></textarea>
                        <label for="desc">Description:</label>
                        <textarea class="form-control" name="desc"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="picture">input picture:</label>
                        <input type="file" class="form-control-file" name="picture">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
 @endsection