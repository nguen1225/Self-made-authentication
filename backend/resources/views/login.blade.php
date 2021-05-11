<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>ログイン</title>
    </head>
    <body>
        <h2>ログイン</h2>
        <hr>
        <div align="center">
            @foreach ($errors->all() as $message)
                {{ $message }}
            @endforeach
            <table border="0">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <tr>
                        <th>
                            ID
                        </th>
                        <td>
                            <input type="text" name="id" value="" size="24">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            パスワード
                        </th>
                        <td>
                            <input type="password" name="password" value="" size="24">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="ログイン">
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    </body>
</html>


