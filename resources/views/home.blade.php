@extends('layouts.admin')
@section('content')
<div class="content">
    <table class="table table-bordered table-striped">
        <tbody>
        <tr>
            <th>
                {{ trans('cruds.user.fields.name') }}
            </th>
            <td>
                {{ \Illuminate\Support\Facades\Auth::user()->name }}
            </td>
        </tr>
        <tr>
            <th>
                {{ trans('cruds.user.fields.email') }}
            </th>
            <td>
                {{ \Illuminate\Support\Facades\Auth::user()->email }}
            </td>
        </tr>
        <tr>
            <th>
                {{ trans('cruds.user.fields.height') }}
            </th>
            <td>
                {{ \Illuminate\Support\Facades\Auth::user()->height }}
            </td>
        </tr>
        <tr>
            <th>
                {{ trans('cruds.user.fields.weight') }}
            </th>
            <td>
                {{ \Illuminate\Support\Facades\Auth::user()->weight }}
            </td>
        </tr>

        <tr>
            <th>
                {{ trans('cruds.user.fields.gender') }}
            </th>
            <td>
                {{ \Illuminate\Support\Facades\Auth::user()->gender }}
            </td>
        </tr>
        <tr>
            <th>
                {{ trans('cruds.user.fields.program') }}
            </th>
            <td>
                {{ \Illuminate\Support\Facades\Auth::user()->program }}
            </td>
        </tr>
        <tr>
            <th>
                {{ trans('cruds.user.fields.Paid_util') }}
            </th>
            <td>
                {{ \Illuminate\Support\Facades\Auth::user()->Paid_util }}
            </td>
        </tr>
        <tr>
            <th>
                {{ trans('cruds.user.fields.subscriptionType') }}
            </th>
            <td>
                {{ \Illuminate\Support\Facades\Auth::user()->subscriptionType }}
            </td>
        </tr>
        </tbody>
    </table>
</div>
@endsection
@section('scripts')
@parent

@endsection