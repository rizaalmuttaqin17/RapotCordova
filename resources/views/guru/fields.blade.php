<!-- Id Users Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nama') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-4">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Jenis Kelamin Field -->
<div class="form-group col-sm-2">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin:') !!}
    {!! Form::select('jenis_kelamin', array('L' => 'Laki - Laki', 'P' => 'Perempuan'), null, ['class' => 'form-control', 'placeholder' => 'Pilih']) !!}
</div>

<!-- Wali Kelas Field -->
<div class="form-group col-sm-3">
    {!! Form::label('id_kelas_wali', 'Wali Kelas') !!}
    <select name="" id="" class="form-control">
        <option value="">I A</option>
        <option value="">I B</option>
        <option value="">I C</option>
        <option value="">I D</option>
    </select>
</div>

<!-- Kontak Field -->
<div class="form-group col-sm-3">
    {!! Form::label('kontak', 'Kontak:') !!}
    {!! Form::number('kontak', null, ['class' => 'form-control']) !!}
</div>

<!-- Agama Field -->
<div class="form-group col-sm-3">
    {!! Form::label('agama', 'Agama') !!}
    {!! Form::select('agama', array('Islam' => 'Islam', 'Kristen Protestan' => 'Kristen Protestan', 'Kristen Katholik' => 'Kristen Katholik', 'Hindu' => 'Hindu', 'Buddha' => 'Buddha', 'Konghuchu' => 'Konghuchu'), null, ['class' => 'form-control', 'placeholder' => 'Pilih Agama', 'required']) !!}
</div>

<!-- NIP Field -->
<div class="form-group col-sm-3">
    {!! Form::label('nip', 'NIP :') !!}
    {!! Form::number('nip', null, ['class' => 'form-control']) !!}
</div>

<!-- Tempat Lahir Field -->
<div class="form-group col-sm-3">
    {!! Form::label('tempat_lahir', 'Tempat Lahir:') !!}
    {!! Form::text('tempat_lahir', null, ['class' => 'form-control','maxlength' => 145,'maxlength' => 145]) !!}
</div>

<!-- Tanggal Lahir Field -->
<div class="form-group col-sm-3">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir:') !!}
    {!! Form::date('tanggal_lahir', null, ['class' => 'form-control','id'=>'tanggal_lahir']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control','rows'=>'3', 'required']) !!}
</div>


<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password :') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Konfirmasi Password :') !!}
    {!! Form::password('password_confirm', ['class' => 'form-control']) !!}
</div>