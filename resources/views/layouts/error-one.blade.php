<div>
    @foreach(['danger', 'warning', 'success', 'info'] as $msg)
        @if(session('alert-'.$msg))
            <div
                class="text-{{ $msg }} alert-dismissible fade show text-center py-5">{{ session('alert-'.$msg) }}
           </div>
        @endif
    @endforeach
</div>
