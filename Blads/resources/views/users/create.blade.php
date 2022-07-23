@extends('layouts.main')
@section('title','Create user')
@section('content')


<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="{{ route('home')}}">Home</a>
                </li>

                <li>
                    <a href="{{ route('users.index')}}">Users</a>
                </li>
                <li class="active">Create a new User</li>
            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                        <i class="ace-icon fa fa-search nav-search-icon"></i>
                    </span>
                </form>
            </div><!-- /.nav-search -->
        </div>

        <div class="page-content">
            <div class="panel panel-primary">
                <div class="panel-heading">Add a new user</div>
                <div class="panel-body ">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('users.store') }}">
                                @csrf


                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-4">
                                            <div>
                                                <label for="form-field-mask-2">{{ __('First Name') }}</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="ace-icon fa fa-phone"></i>
                                                    </span>
                                                    <input class="form-control input-mask-phone @error('first_name') is-invalid @enderror" type="text" id="form-field-mask-2 first_name" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus />
                                                    @error('first_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div>
                                                <label for="form-field-mask-2">{{ __('Last Name') }}</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="ace-icon fa fa-text-height"></i>
                                                    </span>
                                                    <input class="form-control input-mask-phone @error('last_name') is-invalid @enderror" type="text" id="form-field-mask-2 last_name" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus />
                                                    @error('last_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div>
                                                <label for="form-field-mask-2">{{ __('E-Mail Address') }}</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="ace-icon fa fa-envelope"></i>
                                                    </span>
                                                    <input class="form-control input-mask-phone @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-4 ">
                                            <label for="form-field-mask-2">{{ __('Username') }}</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="ace-icon fa fa-pencil-square"></i>
                                                </span>
                                                <input class="form-control input-mask-phone @error('username') is-invalid @enderror" type="text" id="username" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus />
                                                @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-sm-4  offset-right-4">
                                            <div class="input-group">
                                                <div class="clearfix button_sytem">
                                                    <button type="text" class="btn-sm " style="background-color: #011936 !important; color:white" id="getUsername" onclick="GetUserName()">{{ __('Auto Generate Username') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">

                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-4">

                                            <label for="form-field-mask-2">{{ __('Password') }}</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="ace-icon fa fa-key"></i>
                                                </span>
                                                <input class="form-control input-mask-phone @error('password') is-invalid @enderror" type="password" id="input-password" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus />
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4  offset-right-4">
                                            <div class="input-group">
                                                <div class="clearfix button_sytem">
                                                    <button type="" class="link-password" id="generate" style="background-color: #011936 !important; color:white">{{ __('Auto Generate Password') }}</button>
                                                    <button type="" class="link-password" id="confirm" style="background-color:green !important; color:white">{{ __('Use Password') }}</button>

                                                </div>
                                                <span class="form-row text-right" id="random" style="font-weight: 700;">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">

                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-4">
                                            <label for="form-field-mask-2">{{ __('Type') }}</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="ace-icon fa fa-key"></i>
                                                </span>
                                                <select class="form-control" name="type">
                                                    <option value="customer">Customer</option>
                                                    <option value="admin">Admin</option>
                                                </select>

                                                @error('type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <div class="clearfix button_sytem">
                                            <button type="submit" class="btn-sm btn btn-success " style="background-color: #82A3A1;"><i class="ace-icon fa fa-check bigger-110"></i>{{ __('Register') }}</button>
                                       
                                            <a href="{{route('users.index') }}" class="btn-sm btn btn-primary "><i class="ace-icon fa fa-undo bigger-110"></i>Reset/Back </a>
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                </div>
            </div>

            <div class="page-header">
            </div><!-- /.page-header -->


        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->
@endsection
@push('ajax_crud')

<script type="text/javascript">
    $.extend({
        password: function(length, special) {
            var iteration = 0;
            var password = "";
            var randomNumber;
            if (special == undefined) {
                var special = false;
            }
            while (iteration < length) {
                randomNumber = (Math.floor((Math.random() * 100)) % 94) + 33;
                if (!special) {
                    if ((randomNumber >= 33) && (randomNumber <= 47)) {
                        continue;
                    }
                    if ((randomNumber >= 58) && (randomNumber <= 64)) {
                        continue;
                    }
                    if ((randomNumber >= 91) && (randomNumber <= 96)) {
                        continue;
                    }
                    if ((randomNumber >= 123) && (randomNumber <= 126)) {
                        continue;
                    }
                }
                iteration++;
                password += String.fromCharCode(randomNumber);
            }
            return password;
        }
    });
    $('#confirm').hide();
    $(document).ready(function() {
        $('.link-password').click(function(e) {
            e.preventDefault();
            linkId = $(this).attr('id');
            if (linkId == 'generate') {
                password = $.password(12, true);
                $('#random').empty().hide().append(password).fadeIn('slow');
                $('#confirm').fadeIn('slow');
            } else {
                $('#input-password').val(password);
                $('#random').empty();
                $(this).hide();
            }

        });
        var createUserName = function(value) {
            var parts = value.split('@');
            var user = parts[0];
            var username = user.replace(/[^a-z\d]+/ig, '');
            return username;
        };
        $('#getUsername').click(function(e) {
            e.preventDefault();
            var value = $('#email').val();
            if (value == '') {
                alert('Please use your email first');
            } else {
                var value = $('#email').val();
                var username = createUserName(value);
                $('#username').val(username);
            }

        });

    });
</script>
@endpush