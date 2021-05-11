<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{secure_asset('/assets/css/materialize.css')}}"  media="screen,projection"/>
        

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
        <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                  <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">Last Name</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                  <label for="disabled">Disabled</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="password" type="password" class="validate">
                  <label for="password">Password</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  This is an inline input field:
                  <div class="input-field inline">
                    <input id="email_inline" type="email" class="validate">
                    <label for="email_inline">Email</label>
                    <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                  </div>
                </div>
              </div>
            </form>
          </div>
              
          <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="{{secure_asset('/assets/css/materialize.js')}}"></script>
    </body>
</html>


