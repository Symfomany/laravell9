@extends('layout')

@section('arianne')
  @parent
    <li>Crée un film</li>
@endsection

@section('css')
  @parent
  <link rel="stylesheet" href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" media="screen" title="no title" charset="utf-8">
@endsection

@section('content')
<form action="{{ route('movies.store') }}" method="post">
  {{ csrf_field() }}
  <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Créer un film </h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">


              <div class="form-group row">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="synopsis">Titre <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input placeholder="..." class="form-control" type="text" name="titre"
                    id="titre" required="required">
                  </div>
                </div>


                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="synopsis">Image <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input placeholder="http://" class="form-control" type="text" name="image"
                      id="titre" required="required">
                    </div>
                  </div>
              <hr />

              <div class="form-group row">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="synopsis">Synopsis <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea placeholder="Petit résumé..." class="form-control" type="text" name="synopsis"
                    id="synopsis" required="required"
                    class="form-control col-md-7 col-xs-12"></textarea>
                  </div>
                </div>

              <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea placeholder="Longue description..." rows="6" type="text" name="description"
                  id="description" required="required"
                  class="form-control col-md-7 col-xs-12"></textarea>
                </div>
              </div>


              <div class="form-group row">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="synopsis">Date de sortie <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input placeholder="dd/mm/YYYY" class="date-picker form-control" type="text" name="date_release"
                    id="date_release" required="required">
                  </div>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="synopsis">Budget <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input placeholder="en €" class="form-control" type="text" name="budget"
                      id="budget" required="required">
                    </div>
                  </div>

                  <div class="form-group row">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="synopsis">Durée <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input placeholder="en nb. heures" class="form-control" type="text" name="duree"
                        id="duree" required="required">
                      </div>
                    </div>


                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="synopsis">BO <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="bo" class="form-control">
                              <option value="vo">VO</option>
                              <option value="vost">VOST</option>
                              <option value="vostfr">VOSTFR</option>
                          </select>
                        </div>
                      </div>


                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="synopsis">Langues <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <div class="col-md-2">
                              <div class="iradio_flat-green" >
                                <input checked class="flat" type="radio" name="languages" value="en" /><label for="">Anglais</label>
                              </div>
                            </div>

                            <div class="col-md-2">
                              <div class="iradio_flat-green" >
                                <input class="flat" type="radio" name="languages" value="fr" /><label for="">Français</label>
                              </div>
                            </div>


                            <div class="col-md-2">
                              <div class="iradio_flat-green" >
                                <input class="flat" type="radio" name="languages" value="it" /><label for="">Italien</label>
                              </div>
                            </div>

                            <div class="col-md-2">
                              <div class="iradio_flat-green" >
                                <input class="flat" type="radio" name="languages" value="es" /><label for="">Espagnol</label>
                              </div>
                            </div>

                        </div>
                      </div>


                    <hr  class="clear"/>

                    <button class="btn btn-sm btn-success" type="submit">
                      <span class="fa fa-save"></span> Enregistrer ce film
                    </button>

          </div>
        </div>
      </div>






  </form>


@endsection

@section('js')
  @parent
<script src="{{ asset('js/moment/moment.min.js') }}"></script>
<script src="{{ asset('js/datepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('vendors/iCheck/icheck.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
<script type="text/javascript">
$(function() {
  $('#date_release').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_4"
          }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
  });

  $("input.flat").iCheck({
        checkboxClass: "icheckbox_flat-green",
        radioClass: "iradio_flat-green"
    });

    function initToolbarBootstrapBindings() {
          var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
              'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
              'Times New Roman', 'Verdana'
            ],
            fontTarget = $('[title=Font]').siblings('.dropdown-menu');
          $.each(fonts, function(idx, fontName) {
            fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
          });
          $('a[title]').tooltip({
            container: 'body'
          });
          $('.dropdown-menu input').click(function() {
              return false;
            })
            .change(function() {
              $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
            })
            .keydown('esc', function() {
              this.value = '';
              $(this).change();
            });

          $('[data-role=magic-overlay]').each(function() {
            var overlay = $(this),
              target = $(overlay.data('target'));
            overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
          });

          if ("onwebkitspeechchange" in document.createElement("input")) {
            var editorOffset = $('#editor').offset();

            $('.voiceBtn').css('position', 'absolute').offset({
              top: editorOffset.top,
              left: editorOffset.left + $('#editor').innerWidth() - 35
            });
          } else {
            $('.voiceBtn').hide();
          }
        }

        function showErrorAlert(reason, detail) {
          var msg = '';
          if (reason === 'unsupported-file-type') {
            msg = "Unsupported format " + detail;
          } else {
            console.log("error uploading file", reason, detail);
          }
          $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
            '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

        initToolbarBootstrapBindings();

        $('#editor').wysiwyg({
          fileUploadError: showErrorAlert
        });

        window.prettyPrint;
        prettyPrint();
});
</script>
@endsection
