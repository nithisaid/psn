<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">


            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ route('logout') }}">Logout</a>
                @else
                    <a href="{{ route('login') }}">Login/Signup</a>
                @endauth
            </div>
             @endif

            <div class="content">
       
                <?php
//   use Jumbojett\OpenIDConnectClient;
//   https://manage.auth0.com/#/applications/qgLLEdEX7t1ob9vFCfokLx2Dz2D0g8sw/quickstart

//   $oidc = new OpenIDConnectClient(
//   'https://ohm.auth0.com', // idp issuer
//   'mPpr3rlx2tnAVM3eLnvQshxzxRvKpn9g', // client id
//   'A_QN3eZ4aVW007R0DreCQh4T3eTItN_gL24o3s0ms-fuO2_NA3suxrwIhOXlawzZ'); //client secret
// $oidc->providerConfigParam(array(
//   'token_endpoint'=>'https://ohm.auth0.com/oauth/token',
//   'jwks_uri'=>'https://ohm.auth0.com/.well-known/jwks.json',
//   'response_type'=>'code',
// ));
// $oidc->setRedirectURL("http://psn.host");
// $oidc->addScope(array('openid')); 
// $oidc->authenticate();
// $sub = $oidc->getVerifiedClaims();
// print_r($sub);
                ?>
               
            </div>
        </div>
    </body>
</html>
