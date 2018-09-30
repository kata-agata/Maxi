<!-- Title Pl Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_pl', 'Title Pl:') !!}
    {!! Form::text('title_pl', null, ['class' => 'form-control']) !!}
</div>

<!-- Title En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_en', 'Title En:') !!}
    {!! Form::text('title_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Text Pl Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('text_pl', 'Text Pl:') !!}
    {!! Form::textarea('text_pl', null, ['class' => 'form-control']) !!}
</div>

<!-- Text En Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('text_en', 'Text En:') !!}
    {!! Form::textarea('text_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Photo Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo_link', 'Photo Link:') !!}
    {!! Form::text('photo_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Section Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('section_id', 'Section Id:') !!}
    {!! Form::number('section_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('posts.index') !!}" class="btn btn-default">Cancel</a>
</div>
