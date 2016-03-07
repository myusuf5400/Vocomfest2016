<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Tabel Anggota
                @if($showNew)
                <div class="btn-new">
                    <a href="{{ url('admin/anggota/new/'.$anggotas->first()->team['id']) }}">
                        <button class="btn btn-success">
                            New
                        </button>
                    </a>
                    </div>
                @endif
            </div>
            @if(session('status'))
            <div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Well</strong> {{ session('status') }}
            </div>
            @endif
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                            <th>Nama</th>
                                <th>Email</th>
                                <th>Nomer Telepon</th>
                                <th>Posisi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1?>
                            @foreach($anggotas as $anggota)
                            <tr class="odd gradeX">
                                <td>{{$i++}}</td>
                                <td>{{$anggota->nama}}</td>
                                <td>{{$anggota->email}}</td>
                                <td>{{$anggota->notelp}}</td>
                                <td>
                                @if($anggota->code==null)
                                    Anggota
                                @else
                                    Ketua
                                @endif
                                </td>
                                <td>
                                    @include('admin.actionAnggota')
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>