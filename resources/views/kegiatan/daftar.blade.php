@extends('main')

@section('content')

  <!-- Data Table area Start-->
  <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <center><p><i>Daftar Kegiatan Penjualan & Pembelian</i> </p></center>
                   <a href="{{ url('/home/Kegiatan/Tambah') }}" class="btn btn-info"> Tambah</a><br> <br>
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kegiatan</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                        @foreach ($data as $item)
                                        <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>{{ date("d F Y", strtotime($item->created_at)) }}</td>
                                        </tr>
                                    <?php $no++; ?>    
                                        @endforeach
                                    
                                </tbody>
                                
                                </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

@endsection