<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HUNTQL</title>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="
        https://cdn.jsdelivr.net/npm/prismjs@1.29.0/themes/prism.min.css
        " rel="stylesheet" />

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        @charset "UTF-8";
        @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');

        body {

            width: 98%;
            height: 100vh;
        }

        body .card {
            width: 800px;
            height: 400px;
            background: transparent;
            position: absolute;
            left: 0;
            right: 0;
            margin: auto;
            top: 0;
            bottom: 0;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            box-shadow: 0px 20px 30px 3px rgba(0, 0, 0, 0.55);
        }

        body .card_left {

            width: 40%;
            height: 400px;
            float: left;
            overflow: hidden;
            color: #01c5d1;
        }

        body .card_left img {
            width: 100%;
            height: auto;
            border-radius: 10px 0 0 10px;
            -webkit-border-radius: 10px 0 0 10px;
            -moz-border-radius: 10px 0 0 10px;
            position: relative;
        }

        body .card_right {
            width: 60%;
            float: left;
            /* background: rgb(1,197,209);*/
            /*background: #056af9;*/
            height: 400px;
            border-radius: 0 10px 10px 0;
            -webkit-border-radius: 0 10px 10px 0;
            -moz-border-radius: 0 10px 10px 0;
            padding-top: 10px;
        }

        body .card_right h1 {
            color: #01c5d1;
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            text-align: left;
            font-size: 30px;
            margin: 30px 0 0 0;
            padding-left: 30px;
            letter-spacing: 1px;
            display: inline;
        }

        body .card_right h4 {
            color: #01c5d1;
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            text-align: left;
            font-size: 18px;
            margin: 30px 0 0 0;
            padding: 0px;
            letter-spacing: 1px;
            display: inline;
        }

        body .card_right__button {
            padding: 0 0 0 40px;
            margin: 30px 0 0 0;
        }

        body .card_right__button a {
            color: #01c5d1;
            text-decoration: none;
            font-family: "Roboto", sans-serif;
            border: 2px solid #01c5d1;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: 500;
            background-size: 12px 12px;
            background-repeat: no-repeat;
            background-position: 7% 50%;
            border-radius: 5px;
            transition-property: all;
            transition-duration: 0.5s;
        }

        body .card_right__button a:hover {
            color: #000000;
            background-color: #01c5d1;
            background-size: 12px 12px;
            background-repeat: no-repeat;
            background-position: 10% 50%;
            cursor: pointer;
            transition-property: all;
            transition-duration: 0.5s;
        }
    </style>
</head>

<body>

    <div class='card'>
        <div class='card_left'>
            <img src='https://i.ibb.co/KGL6L73/have-you-seen-this-bird.png'>
        </div>
        <div class='card_right'>
            <h1>Huntress<span style="color:#056af9;">QL</span> </h1>
            {{-- | </h1> <h4>Canary Based Queries</h4> --}}

            <div class='card_right__details'>

                <div class='card_right__rating'>

                </div>
                <div class='card_right__review'>
                    <p>
                        <pre>
                        <code class="language-graphql">
{
    incidentReports {
        indicator_counts {
            ransomware_canaries
        }
    }
}</code></pre>
                    </p>

                </div>
                <div class='card_right__button'>
                    <a href='/graphiql' target='_blank'>GraphQL Explorer</a>
                    <a href='https://www.youtube.com/watch?v=ot6C1ZKyiME' target='_blank'>Source Code</a>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
