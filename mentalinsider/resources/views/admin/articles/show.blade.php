@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.article.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.articles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.id') }}
                        </th>
                        <td>
                            {{ $article->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.slug') }}
                        </th>
                        <td>
                            {{ $article->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.title') }}
                        </th>
                        <td>
                            {{ $article->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.content') }}
                        </th>
                        <td>
                            {{ $article->content }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.image') }}
                        </th>
                        <td>
                            @foreach($article->image as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.date') }}
                        </th>
                        <td>
                            {{ $article->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.time') }}
                        </th>
                        <td>
                            {{ $article->time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.category') }}
                        </th>
                        <td>
                            {{ $article->category->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.articles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection