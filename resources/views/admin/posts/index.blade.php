<h1>Listagem de Postes</h1>
<a href="{{ route("posts.create") }}">Criar post</a>
@foreach ($posts as $post)
    <p>{{  $post->title }}</p>
@endforeach