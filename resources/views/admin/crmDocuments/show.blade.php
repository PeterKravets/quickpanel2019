@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('global.crmDocument.title') }}
                </div>
                <div class="panel-body">

                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('global.crmDocument.fields.customer') }}
                                </th>
                                <td>
                                    {{ $crmDocument->customer->first_name ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('global.crmDocument.fields.document_file') }}
                                </th>
                                <td>
                                    {{ $crmDocument->document_file }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('global.crmDocument.fields.name') }}
                                </th>
                                <td>
                                    {{ $crmDocument->name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('global.crmDocument.fields.description') }}
                                </th>
                                <td>
                                    {!! $crmDocument->description !!}
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