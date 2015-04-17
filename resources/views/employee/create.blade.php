@extends('layouts.default')

@section('content')
    <div class="rows">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-equalizer font-red-sunglo"></i>
                    <span class="caption-subject font-red-sunglo bold uppercase">Data Karyawan</span>
                    <span class="caption-helper">Biodata Karyawan</span>
                </div>
            </div>
            <div class="portlet-body form">
                {!! Form::open(['route' => 'employee.store', 'role' => 'form', 'class' => 'horizontal-form']) !!}
                    @include('employee.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop