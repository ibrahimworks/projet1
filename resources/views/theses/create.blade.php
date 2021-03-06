@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Ajouter une  Thèse </h2>
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


                @include('alerts.errors')

                @include('alerts.success')
                <div class="x_content">
                    <br>
                    {!! Form::open(['url' => 'these/','class'=>'form-horizontal form-label-left']) !!}

                    <div class="form-group">
                        {!!  Form::label('titre_propre', 'Titre *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::textarea('titre_propre', '',['placeholder'=>"entrer le titre de la thèse ",'class' => 'form-control col-md-7 col-xs-12','size' => '30x3']) !!}

                        </div>
                    </div>
                    <div class="form-group">
                        {!!  Form::label('nom', 'Auteur *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('nom', '',['placeholder'=>"entrer l'auteur ",'class' => 'form-control col-md-7 col-xs-12']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!!  Form::label('date_soutenue', 'Date de Soutenance ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('date_soutenue', '',['placeholder'=>"entrer la date de soutenance ",'class' => 'form-control col-md-7 col-xs-12']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Type de la thèse</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">

                            {!! Form::select('these_genre', [''=>'','CEA'=>'CEA', 'DES'=>'DES', '3 ème cycle' =>'3 ème cycle', "thèse d'état"=>"thèse d'état","Mémoire DESA (master/doctorat)"=>"Mémoire DESA (master/doctorat)"], '', ['class'=>' form-control','placeholder' => 'Pick a size...']) !!}

                        </div>
                    </div>
                    <div class="form-group">
                        {!!  Form::label('resumme', 'Résumé  ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::textarea('resumme', '',['placeholder'=>"tapez le résumé du livre ",'class' => 'form-control col-md-7 col-xs-12','size' => '30x3']) !!}
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
                {!!  Form::label('langue', 'Langue ', ['placeholder'=>"sélectionner la langue ",'class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::select('langue', ['Arabe'=>'Arabe', 'Englais'=>'Englais', 'Francais' =>'Francais', 'Espagnol'=>'Espagnol'], 'Francais') !!}
                </div>
            </div>
                    <div class="form-group">
                        {!!  Form::label('n_order', 'N° D\'ordre', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('n_ordre', '',['placeholder'=>"entrer le n° ordre",'class' => 'form-control col-md-7 col-xs-12']) !!}
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            {!! Form::submit('Enregistrer',['class'=>'btn btn-success']) !!}
                            <button type="submit" class="btn btn-primary">Annuler</button>

                        </div>
                    </div>

                    {!! Form::close() !!}


                </div>
    </div>
            </div>
        </div>
    </div>


@endsection
