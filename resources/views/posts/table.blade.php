<table class="table table-responsive" id="posts-table">
    <thead>
        <tr>
            <th>Title Pl</th>
        <th>Title En</th>
        <th>Text Pl</th>
        <th>Text En</th>
        <th>Photo Link</th>
        <th>Section Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{!! $post->title_pl !!}</td>
            <td>{!! $post->title_en !!}</td>
            <td>{!! $post->text_pl !!}</td>
            <td>{!! $post->text_en !!}</td>
            <td>{!! $post->photo_link !!}</td>
            <td>{!! $post->section_id !!}</td>
            <td>
                {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('posts.show', [$post->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('posts.edit', [$post->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>