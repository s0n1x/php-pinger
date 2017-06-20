<!DOCTYPE html>
<html>
<head>
<title>Pinger</title>
<meta charset="windows-1251">
<style>
#content {
    border-left: 1px black solid;
    border-top: 1px black solid;
    display: inline-block;
    }
.block {
    height: 40px;
    width: 90px;
    border-bottom: 1px black solid;
    border-right: 1px black solid;
    display: inline-block;
}

.ip, .status {
    height: 50%;
    width: 100%;
    border: none;
    text-align: center;
    line-height: 20px;
    font-size: 12px;
    font-family: Times New Roman, serif;
    display: inline-block;
}
</style>
</head>
<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
<div id="content"></div>
<?php
/**
 * Created by PhpStorm.
 * User: szaikin
 * Date: 20.06.2017
 * Time: 12:04
 */

$start_ip = ip2long('192.168.137.1');
$end_ip = ip2long('192.168.137.45');

//pingIP($_GET['ip']);
?><script type="text/javascript"><?php
for ($ulIP = $start_ip; $ulIP <= $end_ip; $ulIP++ ) { ?>

    $(document).ready(function(){
        $.ajax({
            url:    'pingip.php',
            data:   {
                IP: '<?php echo long2ip($ulIP); ?>'
            },
            success:function(data){
                $('#content').append(data);
            }
        });
    });

<?php }
?>
</script>
</body>
</html>