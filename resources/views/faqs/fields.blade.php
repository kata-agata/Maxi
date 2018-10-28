<!-- Question Pl Field -->
<div class="form-group col-sm-6">
    {!! Form::label('question_pl', 'Question Pl:') !!}
    {!! Form::text('question_pl', null, ['class' => 'form-control']) !!}
</div>

<!-- Question Pl En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('question_pl_en', 'Question Pl En:') !!}
    {!! Form::text('question_pl_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Answer Pl Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('answer_pl', 'Answer Pl:') !!}
    {!! Form::textarea('answer_pl', null, ['class' => 'form-control']) !!}
</div>

<!-- Answer En Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('answer_en', 'Answer En:') !!}
    {!! Form::textarea('answer_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Section Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('section_id', 'Section Id:') !!}
    {!! Form::text('section_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('faqs.index') !!}" class="btn btn-default">Cancel</a>
</div>
