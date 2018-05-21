@extends('master')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="panel-body">
                    <!-- Formularz -->

                    {!! Form::open(['wiek'=>'people','class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('wiek','Wiek:')!!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('wiek',null,['class'=>'form-control' ]) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('plec','Płeć:')!!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('plec',null,['class'=>'form-control' ]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('odleglosc','Odległość:')!!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('odleglosc',null,['class'=>'form-control' ]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('wlasny_samochod','Własny samochód:')!!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('wlasny_samochod',null,['class'=>'form-control' ]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('wyksztalcenie','Wykształcenie:')!!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('wyksztalcenie',null,['class'=>'form-control' ]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('dochod','Dochód:')!!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('dochod',null,['class'=>'form-control' ]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('pojazd_id','Środek Transportu:')!!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('pojazd_id',null,['class'=>'form-control' ]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Dodaj osobe',null,['class'=>'btn btn-primary' ]) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@stop