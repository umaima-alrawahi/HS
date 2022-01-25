<h1>Show Post</h1>
<br><br>

<form>
@csrf()

<lable>the service name:{{$post->title}} </lable>

<br>
<lable>this service belongs to this group: {{$post->group_name}} </lable> 

<br>
<lable>description of post: {{$post->description}}</lable> 




 
</form>




