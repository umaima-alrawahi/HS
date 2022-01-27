<h2>Edit Post</h2>

<form  id="dis">
@csrf()


      <x-text name="title" value="{{$post->title}}">
      </x-text>
      <x-textarea name="description" value="{{$post->description}}" >
      </x-textarea>
      <input type="file" name="image">


  <button onclick="pu()"  type="submit">Done editing</button>
 
</form>

<br><br>

    <a href="/" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">back to home page</a>

<script>

function pu(){    

//var value= getSelectedValue.value;
var form = document.getElementById("dis");
form.setAttribute('action', '{{route('posts.update', [$post])}}');
form.setAttribute('method', 'POST');
form.setAttribute('enctype', 'multipart/form-data');

console.log("hi group");

}         
</script> 


