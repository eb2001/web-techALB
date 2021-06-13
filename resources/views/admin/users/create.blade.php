@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.create') }} {{ trans('cruds.user.title_singular') }}
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.users.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.user.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($user) ? $user->name : '') }}" required>
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">{{ trans('cruds.user.fields.email') }}*</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($user) ? $user->email : '') }}" required>
                @if($errors->has('email'))
                    <p class="help-block">
                        {{ $errors->first('email') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.email_helper') }}
                </p>
            </div>


            <div class="form-group {{ $errors->has('height') ? 'has-error' : '' }}">
                <label for="fee_percent">{{ trans('cruds.user.fields.height') }}</label>
                <input type="text" id="height" name="height" class="form-control" value="{{ old('height', isset($user) ? $user->height : '') }}" >
                @if($errors->has('fee_percent'))
                    <p class="help-block">
                        {{ $errors->first('height') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.height_helper') }}
                </p>
            </div>
            {{--- weight----}}
            <div class="form-group {{ $errors->has('weight') ? 'has-error' : '' }}">
                <label for="fee_percent">{{ trans('cruds.user.fields.weight') }}</label>
                <input type="number" id="weight" name="weight" class="form-control" value="{{ old('weight', isset($user) ? $user->weight : '') }}" step="0.01">
                @if($errors->has('weight'))
                    <p class="help-block">
                        {{ $errors->first('weight') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.weight_helper') }}
                </p>
            </div>
            {{--- weight----}}
            <div class="form-group {{ $errors->has('Paid_util') ? 'has-error' : '' }}">
                <label for="transaction_date">{{ trans('cruds.user.fields.Paid_util') }}l*</label>
                <input type="text" id="Paid_util" name="Paid_util" class="form-control date" value="{{ old('Paid_util', isset($user) ? $user->Paid_util : '') }}" required>
                @if($errors->has('Paid_util'))
                    <p class="help-block">
                        {{ $errors->first('Paid_util') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.Paid_util_helper') }}
                </p>
            </div>



            <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                <label for="project">{{ trans('cruds.user.fields.gender') }}*</label>
                <select name="gender" id="gender" class="form-control select2" required>
                        <option value="Male" >Male</option>
                    <option value="Female" >Female</option>
                </select>
                @if($errors->has('gender'))
                    <p class="help-block">
                        {{ $errors->first('gender') }}
                    </p>
                @endif
            </div>


            <div class="form-group {{ $errors->has('program') ? 'has-error' : '' }}">
                <label for="transaction_date">{{ trans('cruds.user.fields.program') }} *</label>
                <input type="text" id="program" name="program" class="form-control" value="{{ old('program', isset($user) ? $user->program : '') }}" required>
                @if($errors->has('program'))
                    <p class="help-block">
                        {{ $errors->first('program') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.program_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('subscriptionType') ? 'has-error' : '' }}">
                <label for="transaction_date">{{ trans('cruds.user.fields.subscriptionType') }} *</label>
                <input type="text" id="subscriptionType" name="subscriptionType" class="form-control" value="{{ old('subscriptionType', isset($user) ? $user->subscriptionType : '') }}" required>
                @if($errors->has('subscriptionType'))
                    <p class="help-block">
                        {{ $errors->first('subscriptionType') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.subscriptionType_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label for="password">{{ trans('cruds.user.fields.password') }}</label>
                <input type="password" id="password" name="password" class="form-control" required>
                @if($errors->has('password'))
                    <p class="help-block">
                        {{ $errors->first('password') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.password_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('roles') ? 'has-error' : '' }}">
                <label for="roles">{{ trans('cruds.user.fields.roles') }}*
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" required>
                    @foreach($roles as $id => $roles)
                        <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
                    @endforeach
                </select>
                @if($errors->has('roles'))
                    <p class="help-block">
                        {{ $errors->first('roles') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.roles_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection
