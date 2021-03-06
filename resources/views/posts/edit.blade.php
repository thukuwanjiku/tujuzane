@extends('layouts.app')

@section('title', 'Edit Post')
@section('content')

<style type="text/css">
    img{
      max-height: 150px;
    }
</style>

<div class="container">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">

<form id="postEditForm" method="POST" action="{{ route('post.edit.save', ['post' => $post]) }}" enctype="multipart/form-data">
	{{ csrf_field() }}

    <div class="panel panel-default">
      
      <p style="margin: 10px;">Editing your post</p>
      {{-- <input type="hidden" name="id" value="{{ $post->id }}"> --}}
      <div class="panel-footer">
        <input type="text" name="post_title" style="width:100%;font-size: 20px; padding: 10px;border:none;" placeholder="Heading" value="{{ $post->post_title }}" autofocus required>
      </div>

      <div class="panel-body">
        <textarea name='post_body' cols="80" rows="5" style="width:100%;border:solid 1px lightgray; border-radius: 10px; margin:0; font-size: 16px; padding: 5px;" placeholder="Tell your story here..." required>{{ $post->post_body }}</textarea>
      </div>

      <div class="panel-footer" style="padding: 10px;">

        <div class="alert alert-info" style=""> 
          You can also change the image associated with your story. (JPEG or PNG only)
        </div>
        {{-- <input type="hidden" name="UPLOADCARE_PUB_KEY" value="3f7f757fee6f8c69eb27">
        <input type="hidden" name="UPLOADCARE_ACTION" value="{{ route('post.edit.save') }}">
        <input id="fileButton" type="file" name="image" onchange="readURL(this)"> --}}
        <input type="hidden" role="uploadcare-uploader" name="image" data-crop="">
        <br>
        <img id="blah" style="" src="{{ $post->post_photo }}" class="img-responsive" height="100" width="200" alt="story image" />
      </div>

    </div>

    <div class="form-check">
        <button type="submit" class="btn btn-primary btn-14">Save Changes</button>
    </div>
</form>


</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

@endsection