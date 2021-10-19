@extends('layouts.base')

@section('content')
   <!-- /.card-header -->
<div class="card-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Skor</th>
                <th style="width: 150px">Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($datas as $item) : ?>
                <tr>
                    <td><?= $item["skor"] ?></td>
                    <td>
                        <a href="{{ route('editData', $item['id']) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('deleteData', $item['id']) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>
    {{ $datas->links() }}
</div>
<!-- /.card --> 
@endsection
