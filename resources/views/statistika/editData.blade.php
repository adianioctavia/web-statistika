@extends('layouts.base')
@section('content')
    <!-- general form elements -->
<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Edit Data</h3>
    </div>
    <!-- /.card-header -->

    <!-- form start -->
    <form action="{{ route('updateData') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="skor">Skor</label>
                <input value="{{$id}}" name="id" type="hidden">
                <input value="{{$skor}}" type="number" class="form-control" id="skor" name="skor" placeholder="Enter Skor">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-success" name="edit">Edit</button>
        </div>
    </form>
</div>
<!-- /.card -->
@endsection