<body style="background-color:LightGray;"  >
@foreach($posts as $post)
<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
<div class="solid" style="background-color:FloralWhite;">
    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">{{$post->title}}</h1>
    <div class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
        <div class="w-full text-center text-base font-bold">{{$post->description}}</div>
        <a href="/posts/edit/{{$post->id}}">edit</a>
        <a href="/posts/delete/{{$post->id}}">delete</a>
        <a href="/posts/show/{{$post->id}}">show</a>
</div>

</div>
<br>
@endforeach
</body>
 <style>
    div.solid {border-style: solid;}
     </style>

