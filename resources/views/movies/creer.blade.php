@extends('layout')

@section('arianne')
  @parent
    <li>Crée un film</li>
@endsection

@section('css')
  @parent
  <link rel="stylesheet" href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="{{ asset('vendors/google-code-prettify/bin/prettify.min.css')}}" media="screen" title="no title" charset="utf-8">
@endsection

@section('content')
<form action="{{ route('movies.store') }}" method="post" novalidate>
  {{ csrf_field() }}
  <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Créer un film </h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            {{-- <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                  @endforeach
                </div> --}}


              <div class="form-group row">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="synopsis">Titre <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input placeholder="..." class="form-control" type="text" name="titre"
                    id="titre" required="required">
                      @if($errors->has('titre'))
                          <div class="alert alert-danger alert-dismissible">
                            {{ $errors->first("titre") }}
                          </div>
                      @endif
                  </div>


                </div>


                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="synopsis">Image <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input 'mask': 'http://' placeholder="http://" class="form-control" type="text" name="image"
                      id="titre" required="required">
                      @if($errors->has('image'))
                          <div class="alert alert-danger alert-dismissible">
                            {{ $errors->first("image") }}
                          </div>
                      @endif
                    </div>
                  </div>
              <hr />

              <div class="form-group row">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="synopsis">Synopsis <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea placeholder="Petit résumé..." class="form-control resizable_textarea form-control" type="text" name="synopsis"
                    id="synopsis" required="required"
                    class="form-control col-md-7 col-xs-12"></textarea>
                    @if($errors->has('synopsis'))
                        <div class="alert alert-danger alert-dismissible">
                          {{ $errors->first("synopsis") }}
                        </div>
                    @endif
                  </div>
                </div>

              <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="desc">Description <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">

                    <div id="alerts"></div>
                    <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#desc">
                      <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        </ul>
                      </div>

                      <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li>
                            <a data-edit="fontSize 5">
                              <p style="font-size:17px">Huge</p>
                            </a>
                          </li>
                          <li>
                            <a data-edit="fontSize 3">
                              <p style="font-size:14px">Normal</p>
                            </a>
                          </li>
                          <li>
                            <a data-edit="fontSize 1">
                              <p style="font-size:11px">Small</p>
                            </a>
                          </li>
                        </ul>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                        <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                        <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                        <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                        <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                        <div class="dropdown-menu input-append">
                          <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                          <button class="btn" type="button">Add</button>
                        </div>
                        <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                        <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                      </div>
                    </div>

                    <div id="editor" class="editor-wrapper"></div>

                    <textarea style="display:none;"
                    placeholder="Longue description..." rows="6" type="text" name="description"
                    id="desc" required="required"></textarea>
                    @if($errors->has('description'))
                        <div class="alert alert-danger alert-dismissible">
                          {{ $errors->first("description") }}
                        </div>
                    @endif
                    <br />

                </div>
              </div>


              <div class="form-group row">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="synopsis">Date de sortie <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input placeholder="dd/mm/YYYY" class="date-picker form-control" type="text" name="date_release"
                    id="date_release" required="required">
                    @if($errors->has('date_release'))
                        <div class="alert alert-danger alert-dismissible">
                          {{ $errors->first("date_release") }}
                        </div>
                    @endif
                  </div>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="synopsis">Budget <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input placeholder="en €" class="form-control" type="text" name="budget"
                      id="budget" required="required">
                      @if($errors->has('budget'))
                          <div class="alert alert-danger alert-dismissible">
                            {{ $errors->first("budget") }}
                          </div>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="synopsis">Durée <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input placeholder="en nb. heures" class="form-control" type="text" name="duree"
                        id="duree" required="required">
                        @if($errors->has('duree'))
                            <div class="alert alert-danger alert-dismissible">
                              {{ $errors->first("duree") }}
                            </div>
                        @endif
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
                          @if($errors->has('bo'))
                              <div class="alert alert-danger alert-dismissible">
                                {{ $errors->first("bo") }}
                              </div>
                          @endif
                        </div>
                      </div>


                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="synopsis">Langues <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          @if($errors->has('languages'))
                            <div class="alert alert-danger alert-dismissible">
                              {{ $errors->first("languages") }}
                            </div>
                          @endif

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

                        </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="checkbox">
                          <div class="icheckbox_flat-green checked">
                            <input name="visible" type="checkbox" id="visible" class="flat" checked="checked">
                            @if($errors->has('visible'))
                              <div class="alert alert-danger alert-dismissible">
                                {{ $errors->first("visible") }}
                              </div>
                            @endif
                          </div>
                          <label for="visible">Ce film est-il visible?</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        @if($errors->has('visible'))
                          <div class="alert alert-danger alert-dismissible">
                            {{ $errors->first("visible") }}
                          </div>
                        @endif
                        <div class="checkbox">
                          <div class="icheckbox_flat-green checked">
                            @if($errors->has('cover'))
                              <div class="alert alert-danger alert-dismissible">
                                {{ $errors->first("cover") }}
                              </div>
                            @endif
                            <input name="cover" type="checkbox" id="cover" class="flat" checked="checked">
                          </div>
                          <label for="visible">Ce film est-il couverture?</label>
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
<script src="{{ asset('vendors/google-code-prettify/src/prettify.js') }}"></script>
<script src="{{ asset('vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
<script src="{{ asset('vendors/autosize/dist/autosize.min.js') }}"></script>
<script src="{{ asset('vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>

<script type="text/javascript">
$(function() {
   $(":input").inputmask();

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


        autosize($('.resizable_textarea'));


});
</script>
@endsection
