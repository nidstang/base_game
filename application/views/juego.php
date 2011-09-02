<html>
    <head>
        <title>
            {site_name}
        </title>
        <style>
            a:link {
                color: #FFF;
                text-decoration: none
            }
            a:visited {
                color: #FFF;
                text-decoration: none
            }
            body {
                background-image: url(style/images/game-bg.jpg);
                background-color: black;
                background-repeat: no-repeat;
                background-position: center;
                color: white;
            }
            .login{
                background-image: url(style/images/login.png);
                background-repeat: no-repeat;
                background-position: center;
                height: 442px;
            }
            .login2{
                height: 175px;
                background-image: url(style/images/login2.png);
                background-repeat: no-repeat;
                background-position: center;
            }
            .logimp1{
                position: relative;
                top: 210px;
                left: 30px;
            }
            .logimp2{
                position: relative;
                top: 270px;
                left: -128px;
            }
            .logimp3{
                position: relative;
                top: 317px;
                left: -200px;
            }
            .logimp4{
                position: relative;
                top: 370px;
                left: -290px;
            }
            .logimp5{
                position: relative;
                top: 164px;
                left: 385px;
            }
            .logimp6{
                position: relative;
                top: 224px;
                left: 227px;
            }
            .logimp7{
                position: relative;
                top: 275px;
                left: 68px;
            }
            .logimp8{
                position: relative;
                top: 309px;
                left: -50px;
            }
            .logimp9{
                position: relative;
                top: 345px;
                left: -191px;
            }
            table {
                opacity: 0.9;
                background-color: #333;
                -moz-border-radius: 5px 5px 5px 5px;
                border-color: red;
            }
            td, tr, th, img {
                background-color: #333;
                text-align: center;
                border-color: darkred;
                -moz-border-radius: 10px 10px 10px 10px;
            }
            button {
                margin:    4px;
                font-size: 10pt;
                background-color: #220202;
                color:     white;
                border-style: solid;
                border-width: 2px;
                border-color: #887766;
                width: 110px;
                -moz-border-radius: 5px 5px 5px 5px;
            }
            select{
                margin:    4px;
                font-size: 10pt;
                background-color: #220202;
                color:     white;
                border-style: solid;
                border-width: 2px;
                border-color: #887766;
                -moz-border-radius: 5px 5px 5px 5px;
            }
            .cooltd {
                width: 100px;
            }
            .specialtr {
                background-color: lime;
            }
            .specialtr2 {
                background-color: red;
            }
            .logintable{
                background-color: darkred;
                opacity: 0.8;
                -moz-border-radius: 15px 15px 15px 15px;
            }
            input{
                margin:    4px;
                font-size: 10pt;
                background-color: #220202;
                color:     white;
                border-style: solid;
                border-width: 2px;
                border-color: #887766;
                -moz-border-radius: 5px 5px 5px 5px;
            }
            textarea{
                margin:    4px;
                font-size: 10pt;
                background-color: #220202;
                color:     white;
                border-style: solid;
                border-width: 2px;
                border-color: #887766;
                -moz-border-radius: 5px 5px 5px 5px;
            }
            dl.image_map {
                display:block; 
                width:581px; 
                height:443px; 
                background:url(style/images/map-bg.jpg); 
                position:relative; 
                margin:2px auto 2px auto;
            }
            a.LINK0 {
                left:50px; 
                top:200px; 
                background:url(style/images/armery.jpg);
            }
            a.LINK0 {
                display:block; 
                width:64px; 
                height:10; 
                padding-top:52px; 
                border:1px 
                    border-color: darkred; 
                overflow:hidden; 
                position:absolute;
                -moz-border-radius: 5px 5px 5px 5px;
            }
            a.LINK0:hover  {
                background:url(style/images/armery.jpg);
                border-style: solid;
                border-width: 2px;
                border-color: #887766;
                color:black;
            }
            a.LINK1 {
                left:230px; 
                top:300px; 
                background:url(style/images/pot.jpg);
            }
            a.LINK1 {
                display:block; 
                width:64px; 
                height:10; 
                padding-top:52px; 
                overflow:hidden;
                position:absolute;
                -moz-border-radius: 5px 5px 5px 5px;
            }
            a.LINK1:hover  {
                background:url(style/images/pot.jpg); 
                border-style: solid;
                border-width: 2px;
                border-color: #887766;
                color:black;
            }
            a.LINK2 {
                left:400px; 
                top:15px; 
                background:url(style/images/skull.jpg); 
            }
            a.LINK2 {
                display:block; 
                width:64px; 
                height:8; 
                padding-top:52px; 
                overflow:hidden; 
                position:absolute;
                -moz-border-radius: 5px 5px 5px 5px;
            }
            a.LINK2:hover  {
                background:url(style/images/skull.jpg); 
                border-style: solid;
                border-width: 2px;
                border-color: #887766; 
                color:black;
            }
        </style>

    </head>
    <body>
        <div id="topnav">
            <table border="1" width="85%" align="center">
                <tr>
                    <td width="15%" rowspan="2" scope="row"><?php echo $server ?></td>
                    <td width="11%">Usuario</td>
                    <td width="11%">Raza</td>
                    <td width="11%">Nivel</td>
                    <td width="11%">Oro</td>
                    <td width="11%">Alimento</td>
                    <td width="11%">Localizacion</td>
                    <td width="18%" rowspan="2" align="center">
                        Mensajes (<a href="game.php?page=mensj">{num_men}</a>/100)
                    </td>
                </tr>
                <tr>
                    <td>{name}</td>
                    <td>{race2}</td>
                    <td>{lvl}</td>
                    <td>{oro}</td>
                    <td>{alim}</td>
                    <td>Aldea vieja</td>
                </tr>
            </table>
        </div>

        <div>
            <table width="85%" align="center">
                <tr>
                    <th width="150" scope="col" rowspan="100">
                <div>
                    <table width="125" border="1">
                        <tr>
                            <th scope="col">{menu}</th>
                        </tr>
                        <tr>
                            <td>
                                {overview}
                                {inv}
                                {tien}
                                {map}
                                {duel}
                                {hunt}
                                &nbsp;<br />
                                {ali}
                                {mensj}
                                &nbsp;<br />
                                &nbsp;
                                {foro}
                                {sts}
                                {opt}
                                {logout}
                            </td>
                        </tr>
                    </table>
                </div>
                </th>
                <th scope="col" rowspan="100">
                    <?php echo $cuerpo ?>
                </th>
                </tr>
            </table>
        </div>
    </body>
</html>
