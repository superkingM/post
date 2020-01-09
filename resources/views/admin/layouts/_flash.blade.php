@if (count($errors) > 0)
    <div class="am-alert am-alert-danger" data-am-alert>
        <button type="button" class="am-close">&times;</button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if (session('success'))
    <div class="am-alert am-alert-block am-alert-success flash_msg">
        {{ session('success') }}
    </div>
@endif


@if (session('error'))
    <div class="am-alert am-alert-block am-alert-danger flash_msg">
        {{ session('error') }}
    </div>
@endif