                    <img src="{{asset('images/logo_color.png')}}">
                    {{ Illuminate\Mail\Markdown::parse($slot) }}
                    {{ $subcopy ?? '' }}
                    {{ $footer ?? '' }}
