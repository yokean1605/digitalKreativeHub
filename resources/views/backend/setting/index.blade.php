@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
{{ html()->form('POST', route('admin.setting.store'))->open() }}

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.setting.management') }}
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#setting-general">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#setting-about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#setting-service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#setting-team">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#setting-mail">Mail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#setting-socmed">Social Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#setting-partner">Partner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#setting-Other">Other</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane container active" id="setting-general">
                            @include('backend.setting.includes.tab-general')
                        </div>
                        <div class="tab-pane container fade" id="setting-about">
                            @include('backend.setting.includes.tab-about')
                        </div>
                        <div class="tab-pane container fade" id="setting-service">
                            @include('backend.setting.includes.tab-service')
                        </div>
                        <div class="tab-pane container fade" id="setting-team">
                            @include('backend.setting.includes.tab-team')
                        </div>
                        <div class="tab-pane container fade" id="setting-mail">
                            @include('backend.setting.includes.tab-mail')
                        </div>
                        <div class="tab-pane container fade" id="setting-socmed">
                            @include('backend.setting.includes.tab-socmed')
                        </div>
                        <div class="tab-pane container fade" id="setting-partner">
                            @include('backend.setting.includes.tab-partner')
                        </div>
                        <div class="tab-pane container fade" id="setting-Other">
                            @include('backend.setting.includes.tab-other')
                        </div>
                    </div>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.setting.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.save')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->

{{ html()->form()->close() }}
@endsection


@push('after-styles')
    <link rel="stylesheet" type="text/css" href="{{ url('css/dropzone.css') }}">
@endpush