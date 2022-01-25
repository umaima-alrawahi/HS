
 @foreach($groups as $group)

<div class="flex-1 bg-gray rounded-t rounded-b-none overflow-hidden shadow">
    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">{{$group->name}}</h1>
    <div class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
        <div class="w-full text-center text-base font-bold">{{$group->description}}</div>
</div>


                               
 @endforeach

 <style>{
     bg-gray{
    --tw-bg-opacity: 1;
    background-color: rgba(243,244,246,var(--tw-bg-opacity));}
}
 </style>

