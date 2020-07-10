@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.post.management') }}
                </h4>
            </div><!--col-->

            <div class="col-sm-7 pull-right">
                @include('backend.post.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>{{ __('labels.backend.post.table.title') }}</th>
                            <th>{{ __('labels.backend.post.table.author') }}</th>
                            <th>{{ __('labels.backend.post.table.date') }}</th>
                            <th>{{ __('labels.backend.post.table.last_update') }}</th>
                            <th>{{ __('labels.general.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{!! $post->title_link !!}</td>
                                <td>{!! $post->author_link !!}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>{{ $post->updated_at->diffForHumans() }}</td>
                                <td>{!! $post->action_buttons !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $posts->appends(['limit' => $request->limit])->links() }}
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
