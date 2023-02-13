<html>
    <head>
        <title>{{$subject}}</title>
    </head>
    <body>
        <table>
            <tr>
            <td>Dear {{$name}}</td>
            </tr>
            <tr>
                <td>{{$subject}}
                </td>
            </tr>
            <tr><td></td></tr>
        <tr><td> {!! $description !!}</td></tr>
        <tr><td>Thanks and Regards</td></tr>
        <tr><td>{{ config('app.name') }}</td></tr>
        </table>
    </body>
</html>