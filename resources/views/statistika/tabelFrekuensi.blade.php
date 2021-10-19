@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col-8">
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Skor</th>
                        <th>Frekuensi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0 ?>
                    <?php foreach ($tabel_frekuensi
                        as $item) : ?>
                        <tr>
                            <td><?= ++$no ?></td>
                            <td><?= $item["key"] ?></td>
                            <td><?= $item["value"] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card -->
    <div class="col-4">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nilai Minimum</th>
                        <th>Nilai Maksimum</th>
                        <th>Nilai Rata-rata</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><?= $min ?></td>
                        <td><?= $max ?></td>
                        <td><?= $avg ?></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection