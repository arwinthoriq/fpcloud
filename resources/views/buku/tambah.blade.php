@extends('main')


@section('content')
<!DOCTYPE html>
<html lang="en">
<body>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Tambah Buku</strong> 
                    </div>
                    <div class="card-body card-block">
                        <form action="{{ route('name.form.buku') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            {{csrf_field()}}

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Buku</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text"  name="buku" placeholder="Nama Buku" class="form-control" required>
                                </div>
                            </div>
                                                
                            <div class="card-footer">
                                <button class="btn btn-info" type="submit">Submit</button>
                            </div>

                        </form>
                    </div>                         
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

@endsection

