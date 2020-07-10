@extends ('backend.layouts.app')

@section('content')
{{ html()->form('PUT', route('admin.post.update', $post))->class('form-horizontal')->id('form-post')->open() }}
    <div class="row">
        <div class="col-9">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <h4 class="card-title mb-0">
                                {{ __('labels.backend.post.management') }}
                                <small class="text-muted">{{ __('labels.backend.post.edit') }}</small>
                            </h4>
                        </div><!--col-->
                    </div><!--row-->

                    <hr />

                    <div class="row mt-4">
                        <div class="col">
                            <div class="form-group">
                                {{ html()->label(__('validation.attributes.backend.post.title'))->for('title') }}
                                    {{ html()->text('title')
                                        ->class('form-control post-title')
                                        ->placeholder(__('validation.attributes.backend.post.title'))
                                        ->attribute('maxlength', 191)
                                        ->required()
                                        ->value($post->title) }}
                            </div><!--form-group-->
                            <div class="form-group">
                                {{ html()->label(__('validation.attributes.backend.post.slug'))->for('slug') }}
                                
                                {{ html()->text('slug')
                                    ->class('form-control post-slug')
                                    ->placeholder(__('validation.attributes.backend.post.slug'))
                                    ->attribute('maxlength', 191)
                                    ->required()
                                    ->attribute('old-slug', $post->slug)
                                    ->value($post->slug) }}
                            </div><!--form-group-->
                            <div class="form-group">
                                {{ html()->label(__('validation.attributes.backend.post.content'))->for('content') }}

                                {{ html()->hidden('content') }}
                                <div id="post-editor" style="height: 300px;">{!! $post->content !!}</div>
                            </div><!--form-group-->

                        </div><!--col-->
                    </div><!--row-->
                </div><!--card-body-->

            </div><!--card-->
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        {{ __('labels.backend.post.status') }}
                    </h4>
                    <hr />
                    <div class="row mt-4">
                        <div class="col">
                            <div class="form-group">
                                <label>Select status</label>
                                <select class="form-control" name="status" required>
                                    <option value="" disabled selected>-- Select --</option>
                                    @foreach(config('post.status') as $status)
                                        <option value="{{ $status['name'] }}" {{ ($post->status == $status['name']) ? 'selected' : '' }}>{{ $status['label'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <p>{!! $post->preview !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col">
                            {{ form_cancel(route('admin.post.index'), __('buttons.general.cancel')) }}
                        </div><!--col-->

                        <div class="col text-right">
                            {{ form_submit(__('buttons.general.crud.edit')) }}
                        </div><!--col-->
                    </div><!--row-->
                </div><!--card-footer-->
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Featured Image</h4>
                    <hr />
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                @if(isset($post->postmeta->keyBy('meta_key')['thumbnail']))
                                    <?php $thumbnail = $post->postmeta->keyBy('meta_key')['thumbnail']->meta_value ?>
                                    <div class="dropzone do-upload dz-square hidden" data-url="/admin/post/upload" data-name="thumbnail" is-large="0" data-recm-size="medium"></div>
                                    <div class="img-dz"><img class="img-dz img-fluid" src="{{ url(config('storage.images.post.thumbnail.url_path').$thumbnail) }}" />
                                        <button class="btn btn-primary btn-img-dz del-img-dz">Hapus Gambar</button>
                                        <input type="hidden" name="avatar-member" value="{{ $thumbnail }}" />
                                    </div>
                                @else
                                    <div class="dropzone do-upload dz-square" data-url="/admin/post/upload" data-name="thumbnail" is-large="0"></div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{ html()->form()->close() }}
@endsection

@push('after-styles')
	<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css" />
@endpush

@push('after-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.js"></script>
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

	<script type="text/javascript">
	var quill = new Quill('#post-editor', {
		theme: 'snow'
	});

    $('#form-post').submit(function(e) {
        var myEditor = document.querySelector('#post-editor')
        var html = myEditor.children[0].innerHTML
        $('input[name="content"]').val(html)
    })

	</script>

@endpush