@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Les Cartes <small>different form elements</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                @include('alerts.errors');

                @include('alerts.success');


                <div class="x_content">
                    <br>

                    {!! Form::open(['url' => 'journal/','class'=>'form-horizontal form-label-left']) !!}
                    <div class="form-group">
                        {!!  Form::label('titre_propre', 'Titre *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('titre_propre', '',['placeholder'=>"entrer le titre",'class' => 'form-control col-md-7 col-xs-12']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!!  Form::label('edition', 'Editeur *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('edition', '',['placeholder'=>"entrer l'éditeur",'class' => 'form-control col-md-7 col-xs-12']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!!  Form::label('issn', 'SSN *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('issn', '',['placeholder'=>"entrer l'ISSN",'class' => 'form-control col-md-7 col-xs-12']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!!  Form::label('volume', 'Volume *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('volume', '',['placeholder'=>"entrer le volume",'class' => 'form-control col-md-7 col-xs-12']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!!  Form::label('nsupplement', 'N° Supplément *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('nsupplement', '',['placeholder'=>"entrer le Numéro de supplément",'class' => 'form-control col-md-7 col-xs-12']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!!  Form::label('pagination', 'Pagination *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('pagination', '',['placeholder'=>"entrer la pagination",'class' => 'form-control col-md-7 col-xs-12']) !!}
                        </div>
                    </div>

                        <div class="form-group">
                            {!!  Form::label('resumme', 'Résumé  ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::textarea('resumme', '',['placeholder'=>"tapez le résumé du journal ",'class' => 'form-control col-md-7 col-xs-12','size' => '30x3']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <h4><center> séparer les mots clés par un point vergule ;</center> </h4>
                        </div>

                        <div class="form-group">
                            {!!  Form::label('motCles', 'Mots clés  ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::textarea('motCles', '',['placeholder'=>"entrer les mots clés ",'class' => 'form-control col-md-7 col-xs-12','size' => '30x3']) !!}
                            </div>
                        </div>





                        <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            {!! Form::submit('Enregistrer',['class'=>'btn btn-success']) !!}
                            <button type="submit" class="btn btn-primary">annuler</button>

                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


@endsection
