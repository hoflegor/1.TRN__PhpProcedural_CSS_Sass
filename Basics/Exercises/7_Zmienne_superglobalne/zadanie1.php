<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        .vh-15 {
            margin-top: 15vh;
        }
    </style>
</head>
<body>

<div class="container vh-15">

    <table class="table-bordered table table-striped">
        <thead >
            <tr>
                <th>VARIABLE</th>
                <th>VALUE</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>REMOTE_ADDR</td>
                <td><?php echo $_SERVER["REMOTE_ADDR"]?></td>
            </tr>
            <tr>
                <td>HTTP_USER_AGENT</td>
                <td><?php echo $_SERVER["HTTP_USER_AGENT"]?></td>
            </tr>
            <tr>
                <td>REQUEST_TIME</td>
                <td><?php echo $_SERVER["REQUEST_TIME"]?></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>

<!-- screen: https://s30.postimg.org/suhle7lmp/Zrzut_ekranu_z_2017-04-12_00-21-16.png -->
