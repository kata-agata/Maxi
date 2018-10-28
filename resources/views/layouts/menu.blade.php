<li class="{{ Request::is('photos*') ? 'active' : '' }}">
    <a href="{!! route('photos.index') !!}"><i class="fa fa-edit"></i><span>Photos</span></a>
</li>

<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a href="{!! route('posts.index') !!}"><i class="fa fa-edit"></i><span>Posts</span></a>
</li>

<li class="{{ Request::is('faqs*') ? 'active' : '' }}">
    <a href="{!! route('faqs.index') !!}"><i class="fa fa-edit"></i><span>Faqs</span></a>
</li>

