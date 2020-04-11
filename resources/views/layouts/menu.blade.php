<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>





<li class="{{ Request::is('kategoris*') ? 'active' : '' }}">
    <a href="{{ route('kategoris.index') }}"><i class="fa fa-edit"></i><span>Kategoris</span></a>
</li>

<li class="{{ Request::is('tags*') ? 'active' : '' }}">
    <a href="{{ route('tags.index') }}"><i class="fa fa-edit"></i><span>Tags</span></a>
</li>

<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a href="{{ route('posts.index') }}"><i class="fa fa-edit"></i><span>Posts</span></a>
</li>

