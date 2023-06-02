@if($errors->any())
 <diV class="bg-bermuda">
    <div class="alert alert-danger w-1/2 mx-auto rounded-lg bg-register px-6 py-5 text-base text-white" role="alert">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
 </diV>
@endif

@if(Session::get('success'))
<diV class="bg-bermuda">
    <div class="alert alert-success w-1/2 mx-auto rounded-lg bg-temu px-6 py-5 text-base text-white " role="alert">
        {{ Session::get('success') }}      
    </div>
</diV>

@endif