@extends('layouts.app')
@section('title-block')
    Add art
@endsection
@section('css_links-block')
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />
@endsection
@section('js_links-block')
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
@endsection
@section('content')

    <div class="container">

        <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Add image</div>
                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="/accounts/login/">Sign In</a></div>
                </div>
                <div class="panel-body" >
                    <form method="post" action=".">
                        <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />


                        <form  class="form-horizontal" method="post" >
                            <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                            <div id="div_id_type" class="form-group required">
                                <label for="id_type"  class="control-label col-md-4  requiredField py-1"> Type<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 "  style="margin-bottom: 10px">
                                    <label class="radio-inline"><input type="radio" checked="checked" name="select" id="id_select_1" value="S"  style="margin-bottom: 10px">Photo</label>
                                    <label class="radio-inline"> <input type="radio" name="select" id="id_select_2" value="P"  style="margin-bottom: 10px">Art</label>
                                </div>
                            </div>
                            <div id="div_id_title" class="form-group required">
                                <label for="id_title" class="control-label col-md-4 py-1 requiredField"> Title<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <input class="input-md  textinput textInput form-control" id="id_title_of_art" maxlength="100" name="title" placeholder="Title of art" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>
                            <div id="div_id_author" class="form-group required">
                                <label for="id_author" class="control-label col-md-4 py-1 requiredField"> Author<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="input-md textinput form-control" id="id_first_name_author" name="first_name_author" maxlength="30" style="margin-bottom: 10px" type="text" placeholder="Author`s first name">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="input-md textinput form-control" id="id_last_name_author" name="last_name_author" maxlength="30" style="margin-bottom: 10px" type="text" placeholder="Author`s last name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="div_id_year" class="form-group required">
                                <label for="datepicker" class="control-label col-md-4 py-1 requiredField">Created:<span class="asteriskField">*</span> </label>
                                <div class="form-group controls col-md-8">
                                    <div class='input-group date' id='datetimepicker'>
                                        <input type='text' class="form-control" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar">
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div id="div_id_description" class="form-group required">
                                <label for="id_description" class="control-label col-md-4  requiredField"> Description<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <textarea class="form-control" id="id_description" name="description" placeholder="Description of art" style="margin-bottom: 10px" rows="3"></textarea>
                                </div>
                            </div>
                            <div id="div_id_size" class="form-group required">
                                <label for="id_size" class="control-label col-md-4 py-1 requiredField"> Size,mm<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <div class="row">
                                        <div class="col">
                                            <input type="number" class="input-md form-control" id="id_height" name="id_height" maxlength="30" style="margin-bottom: 10px" placeholder="Height">
                                        </div>
                                        <span class="py-2">X</span>
                                        <div class="col">
                                            <input type="number" class="input-md form-control" id="id_width" name="id_width" maxlength="30" style="margin-bottom: 10px" placeholder="Width">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="div_id_upload_form" class="form-group required">
                                <!-- Standar Form -->
                                <h4>Select files from your computer</h4>
                                <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <input type="file" name="files[]" id="js-upload-files" multiple>
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
                                    </div>
                                </form>

                                <!-- Drop Zone -->
                                <h4>Or drag and drop files below</h4>
                                <div class="upload-drop-zone bg-light" id="drop-zone" style="height: 150px">
                                    Just drag and drop files here
                                </div>

                                <!-- Progress Bar -->
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>

                                <!-- Upload Finished -->
                                <div class="js-upload-finished">
                                    <h3>Processed files</h3>
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-01.jpg</a>
                                        <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-02.jpg</a>
                                    </div>
                                </div>
                            </div> <!-- /container -->
                            <div class="form-group">
                                <div class="controls col-md-offset-4 col-md-8 ">
                                    <div id="div_id_terms" class="checkbox required">
                                        <label for="id_terms" class=" requiredField">
                                            <input class="input-ms checkboxinput" id="id_terms" name="terms" style="margin-bottom: 10px" type="checkbox" />
                                            Agree with the terms and conditions
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="aab controls col-md-4 "></div>
                                <div class="controls col-md-8 ">
                                    <input type="submit" name="Add_art_submit" value="Add art" class="btn btn-primary btn btn-info" id="add_art_submit_id" />
                                </div>
                            </div>

                        </form>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $(function() {
                $('#datetimepicker').datepicker({
                    format: " yyyy",
                    viewMode: "years",
                    minViewMode: "years",
                    autoclose: true
                });
            });
        });
    </script>
@endsection
