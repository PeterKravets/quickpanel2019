@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('global.crmNote.title') }}
                </div>
                <div class="panel-body">

                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('global.crmNote.fields.customer') }}
                                </th>
                                <td>
                                    {{ $crmNote->customer->first_name ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('global.crmNote.fields.note') }}
                                </th>
                                <td>
                                    {!! $crmNote->note !!}
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection