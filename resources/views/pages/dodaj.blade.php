@extends('master')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
                <!-- Formularz -->

                {!! Form::open(['url'=>'dodaj','class'=>'form-horizontal']) !!}
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
                            {{ Form::select('plec', ['M', 'K']) }}
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
                        {{ Form::select('wlasny_samochod', ['TAK', 'NIE']) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 control-label">
                        {!! Form::label('wyksztalcenie','Wykształcenie:')!!}
                    </div>
                    <div class="col-md-6">
                        {{ Form::select('wyksztalcenie', ['Podstawowe', 'Gimnazjalne','Zasadnicze','Średnie','Wyższe']) }}
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
                        {{ Form::select('pojazd_id', ['Samochód', 'Taxi','Autobus','Pociąg','Samolot']) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        {!! Form::submit('Dodaj osobe',['class'=>'btn btn-primary' ]) !!}
                    </div>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@stop