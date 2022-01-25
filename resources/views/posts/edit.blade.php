<h2>Edit Post</h2>

<form  id="dis">
@csrf()


<x-text name="title" value="{{$post->title}}">
    </x-text>
    <x-textarea name="description" value="{{$post->description}}" >
    </x-textarea>


  <button onclick="pu()"  type="submit">Done editing</button>
 
</form>

<script>

function pu(){    

//var value= getSelectedValue.value;
var form = document.getElementById("dis");
form.setAttribute('action', '{{route('posts.update', [$post])}}');
form.setAttribute('method', 'POST');
console.log("hi group");

}         
</script> 


