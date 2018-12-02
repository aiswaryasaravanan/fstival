<html>
<head>
    <title>login</title>
    <style>
        table,tr,th,td{
            border:1px solid black;
        }
    </style>
</head>
<body>
        <?php 
            session_start();
        ?>
                        
                        <table>
                                <tr><th>regno</th><td><?php echo $_SESSION["regno"]; ?></td></tr>
                                <tr><th>name</th><td><?php echo $_SESSION["name"]; ?></td></tr>
                                <tr><th>phoneno</th><td><?php echo $_SESSION["phoneno"]; ?></td></tr>
                                <tr><th>email</th><td><?php echo $_SESSION["email"]; ?></td></tr>
                        </table>
                        
                
        
</body>
</html>