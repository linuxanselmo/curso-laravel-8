<h1>Listagem de Postes</h1>

@foreach ($posts as $post)
    <p>{{  $post->title }}</p>
@endforeach