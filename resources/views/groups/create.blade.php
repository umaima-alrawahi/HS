<h1>create new group </h1>

<form id="group">
    @csrf

    <x-text name="name">
    </x-text>

    <x-textarea name="description" >
    </x-textarea>

    <button onclick="umaima()" type="submit">Add group</button>
    
</form>
 
<script>  
function umaima(){    

                    //var value= getSelectedValue.value;
                    var form = document.getElementById("group");
                    form.setAttribute('action', '{{route('groups.store')}}');
                    form.setAttribute('method', 'POST');
                    console.log("hi group");
               
        }         
</script> 










