<h1>create a post</h1>

<form id ="form">
    @csrf

    <fieldset >
    
    <x-radio name="group_name">
    </x-radio>


    </fieldset>
  

    <x-text name="title">
    </x-text>

    <x-textarea name="description" >
    </x-textarea>

    <button onclick="checkButton()" type="submit">Add service</button>
    
</form>

<script>  
    function checkButton() {    
            var getSelectedValue = document.querySelector(   
                'input[name="group_name"]:checked');   
                
            if(getSelectedValue != null) {   
                    //var value= getSelectedValue.value;
                    var form = document.getElementById("form");
                    form.setAttribute('action', '{{route('posts.store')}}');
                    form.setAttribute('method', 'POST');
                    
                    
        
            }   
            else {   
                document.getElementById("error").innerHTML   
                    = "*You have not selected any group !";   
            } 
               
        }         
</script>   










