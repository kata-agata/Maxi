<table class="table table-responsive" id="faqs-table">
    <thead>
        <tr>
            <th>Question Pl</th>
        <th>Question Pl En</th>
        <th>Answer Pl</th>
        <th>Answer En</th>
        <th>Section Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($faqs as $faq)
        <tr>
            <td>{!! $faq->question_pl !!}</td>
            <td>{!! $faq->question_pl_en !!}</td>
            <td>{!! $faq->answer_pl !!}</td>
            <td>{!! $faq->answer_en !!}</td>
            <td>{!! $faq->section_id !!}</td>
            <td>
                {!! Form::open(['route' => ['faqs.destroy', $faq->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('faqs.show', [$faq->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('faqs.edit', [$faq->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>