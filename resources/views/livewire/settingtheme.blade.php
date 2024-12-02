<div class="right-sidebar">
    <div class="switcher-icon">
        <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

        <p class="mb-0">Gaussion Texture</p>
        <hr>

        <ul class="switcher">
            @for ($i = 1; $i <= 6; $i++)
            <form action="{{ route('Update.Theme', Auth::user()->id) }}" method="post" style="display:inline;">
                @csrf
                @method('PUT')
                <input type="hidden" name="theme" value="bg-theme{{ $i }}">
                <button type="submit" >
                    <li id="theme{{ $i }}" ></li>
                </button>
            </form>
        @endfor

        </ul>

        <p class="mb-0">Gradient Background</p>
        <hr>

        <ul class="switcher">
            @for ($i = 7; $i <= 15; $i++)
            <form action="{{ route('Update.Theme', Auth::user()->id) }}" method="post" style="display:inline;">
                @csrf
                @method('PUT')
                <input type="hidden" name="theme" value="bg-theme{{ $i }}">
                <button type="submit" >
                    <li id="theme{{ $i }}" ></li>
                </button>
            </form>
        @endfor
        </ul>
    </div>
</div>
