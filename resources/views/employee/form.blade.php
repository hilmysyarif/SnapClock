<div class="form-body">
    <h3 class="form-section">Biodata Karyawan</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Nama Depan</label>
                {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <!--/span-->
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Nama Akhir</label>
                {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <!--/span-->
    </div>
    <!--/row-->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Kelamin</label>
                {!! Form::select('kelamin_id', ['' => '', 'P' => 'PRIA', 'W' => 'WANITA'], null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <!--/span-->
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Agama</label>
                {!! Form::select('agama_id', ['' => '', 'I' => 'ISLAM', 'P' => 'PROTESTAN', 'K' => 'KHATOLIK', 'B'=>'BUDHA', 'H'=>'HINDU'], null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <!--/span-->
    </div>
    <!--/row-->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Password</label>
                {!! Form::text('password', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <!--/span-->
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Ulangi Password</label>
                {!! Form::text('password_repeat', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <!--/span-->
    </div>
    <!--/row-->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Username</label>
                {!! Form::text('username', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <!--/span-->
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Email</label>
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <!--/span-->
    </div>
    <!--/row-->
    <h3 class="form-section">Alamat</h3>
    <div class="row">
        <div class="col-md-12 ">
            <div class="form-group">
                <label>Alamat</label>
                {!! Form::text('address1', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <!--/span-->
        <div class="col-md-6">
            <div class="form-group">
                <label>State</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <!--/span-->
    </div>
    <!--/row-->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Post Code</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <!--/span-->
        <div class="col-md-6">
            <div class="form-group">
                <label>Country</label>
                <select class="form-control">
                </select>
            </div>
        </div>
        <!--/span-->
    </div>
</div>
<div class="form-actions right">
    <button type="button" class="btn default">Cancel</button>
    <button type="submit" class="btn blue"><i class="fa fa-check"></i> Save</button>
</div>