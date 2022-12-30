<div class="table-responsive">
    <table class="table" id="makuls-table">
        <thead>
        <tr>
            <th>Nama Makul</th>
        <th>Dosen</th>
        <th>SKS</th>
        <th>Jumlah</th>
        <th>Ruangan</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($makuls as $makul)
            <tr>
                <td>{{ $makul->nama_makul }}</td>
            <td>{{ $makul->dosen }}</td>
            <td>{{ $makul->sks }}</td>
            <td>{{ $makul->jumlah }}</td>
            <td>{{ $makul->ruangan }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['makuls.destroy', $makul->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('makuls.show', [$makul->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('makuls.edit', [$makul->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
