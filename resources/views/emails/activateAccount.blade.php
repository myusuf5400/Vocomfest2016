<!DOCTYPE html>
    <html>
        <body>
        	<img src="{{$message->embed($logo)}}">
            <a href="{{ url('activate/'.$code) }}" >
                {{ url('activate/'.$code) }}
            </a>
        </body>
    </html>
