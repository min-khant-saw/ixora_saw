{{-- <section class="space-y-6"> --}}

    <form action="{{route('logout')}}" method="post">
        @csrf
        @method('post')
        <x-danger-button
            type="submit"
        >{{ __('Logout') }}</x-danger-button>
    </form>

{{-- </section> --}}
