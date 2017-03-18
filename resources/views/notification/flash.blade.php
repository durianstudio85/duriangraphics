@if(Session::has('flash_message'))
	<div class="col-md-12 alert-custom">
        <div class="alert {{ Session::get('flash_message_important') }} ">
            {{ session('flash_message') }}
        </div>
    </div>
@endif