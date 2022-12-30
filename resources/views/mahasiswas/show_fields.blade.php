<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $mahasiswa->nama }}</p>
</div>

<!-- Umur Field -->
<div class="col-sm-12">
    {!! Form::label('umur', 'Umur:') !!}
    <p>{{ $mahasiswa->umur }}</p>
</div>

<!-- Jurusan Field -->
<div class="col-sm-12">
    {!! Form::label('jurusan', 'Jurusan:') !!}
    <p>{{ $mahasiswa->jurusan }}</p>
</div>

<!-- Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $mahasiswa->alamat }}</p>
</div>

<!-- Kota Field -->
<div class="col-sm-12">
    {!! Form::label('kota', 'Kota:') !!}
    <p>{{ $mahasiswa->kota }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $mahasiswa->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $mahasiswa->updated_at }}</p>
</div>

