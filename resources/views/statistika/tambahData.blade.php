@extends('layouts.base')
@section('content')
<!-- general form elements -->
<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Tambah Data</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="skor">Skor</label>
                <input type="number" class="form-control" id="skor" name="skor" placeholder="Enter Skor">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-success" name="save">Save</button>
        </div>
    </form>
</div>
<!-- /.card -->
@endsection