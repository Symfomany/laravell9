@extends('layout')


@section('arianne')
  @parent
    <li>Contact</li>
@show

@section('content')
  <h1 class="page-title"><span class="fa fa-envelope-o"></span> Contact</h1>
  <hr />

  <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Contactez-nous <small>en nous laissant vos coordonnées</small></h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br>
          <form method="post" action="{{ url('send-contact') }}" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Sexe</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div id="gender" class="btn-group" data-toggle="buttons">
                  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="gender" value="male" data-parsley-multiple="gender"> &nbsp; Homme &nbsp;
                  </label>
                  <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="gender" value="female" data-parsley-multiple="gender"> Femme
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Prénom <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nom <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">E-Mail <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Sujet <span class="required">*</span>
              </label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="form-control" name="sujet">
                    <option>A propos du site</option>
                    <option>Partenariat</option>
                    <option>Autre</option>
                  </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Message <span class="required">*</span>
              </label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <textarea name="message" class="form-control" rows="3" placeholder="Un petit message..."></textarea>

                @if ($errors->has('message'))
                  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Attention!</strong> {{ $errors->first('message') }}
                  </div>
                @endif


              </div>
            </div>


            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success"><span class="fa fa-envelope-o"></span> Envoyer ce contact</button>
              </div>
            </div>


            {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>






@endsection
