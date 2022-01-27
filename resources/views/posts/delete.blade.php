<h2>Delete Post</h2>

<form id ="form">
@csrf

  <label>Are you sure? <br> you want to delete - {{{$post->title}}} - post</label>
  <br>
  <br>

  <button onclick="checkButton()" type="submit">Delete Post</button>
  @csrf()

  <br><br>

    <a href="/" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">back to home page</a>
</form>


<script>  
    function checkButton() {    
         
                    var form = document.getElementById("form");
                    form.setAttribute('action', '{{route('posts.destroy', [$post])}}');
                    form.setAttribute('method', 'POST');
                    
                    
        
          
               
        }         
</script>   










