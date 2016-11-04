<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">



                <h1>List</h1>
                <?php foreach($doc as $key=>$value) : ?>
                <li><?=$key?> : <a href="<?=$value?>"><?=$value?></a> </li>
                <?php endforeach;?>

                <h1>List</h1>
                <li>cm : <a href="/cm">/cm</a> </li>
                <li>welcome : <a href="/welcome">/welcome</a> </li>
                <li>hello : <a href="/hello">/hello</a> </li>
                <li>docdemo : <a href="/docdemo">/docdemo</a> </li>
                <li>list : <a href="/list">/list</a> </li>
                <li>errors : <a href="/errors">/errors</a> </li>
                <li>404 : <a href="/404">/404</a> </li>


            </h1>
        </div>
    </body>
</html>
