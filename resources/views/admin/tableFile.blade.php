<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Tabel File
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
                                <th>Kategori</th>
                                <th>status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1?>
                            @foreach($files as $file)
                            <tr class="odd gradeX">
                                <td>{{$i++}}</td>
                                <td>{{$file->nama}}</td>
                                <td>
                                @if($file->status)
                                    
                                @else

                                @endif
                                </td>
                                <td>
                                    @if($file->status)
                                        Lokal
                                    @else
                                        Server
                                    @endif
                                </td>
                                <td>
                                    dfs
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