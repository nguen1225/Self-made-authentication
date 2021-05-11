<!DOCTYPE html>
<html>
    <head>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>ログイン</title>
    </head>
    <body>
        <div style="background: #01579b; padding: 20px; margin-bottom: 30px; color: white; font-size: 20px;">ログイン</div>
        <div style="max-width: 300px; margin: 0 auto;">
          <div class="row">
            <div style="margin-bottom: 20px;">
              @foreach ($errors->all() as $message)
                    {{ $message }}
              @endforeach
            </div>
            <form class="col s12" method="POST" action="{{ route('login') }}">
              @csrf
              <div class="row">
                <div class="input-field col s12">
                  <input type="text" name="id" value="" >
                  <label for="id">ID</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input type="password" name="password" value="">
                  <label for="password">パスワード</label>
                </div>
              </div>
              <button class="btn waves-effect waves-light light-blue darken-4" type="submit" name="action">ログイン</button>
            </form>
          </div>
        </div>
    </body>
</html>
