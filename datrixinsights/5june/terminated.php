<?php
include_once("include/config.php");

if (isset($_GET['projectid']) && isset($_GET['memberid'])) {
    if (strpos($_GET['memberid'], '-GGL') !== false) {
        $ids = explode("-", $_GET['memberid']);
        $memberid = $ids[0];
        $resp_id = $ids[1];
    } else {
        $memberid = $_GET['memberid'];
        $resp_id = '';
    }

    $value = array(
        'project_id' => $_GET['projectid'],
        'member_id' => $memberid,
        'resp_id' => $resp_id,
        'ip_address' => $_SERVER['REMOTE_ADDR'],
        'register_date' => $date_time,
        'end_time' => $date_time,
        'status' => "Terminated"
    );
    $insert = $con->insert("user", $value);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Terminated</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            
            /*background: linear-gradient(135deg, #ff512f, #f09819);*/
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 35px 25px;
            color: #fff;
            text-align: center;
            width: 90%;
            max-width: 400px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 25px rgba(0,0,0,0.2);
        }

        .logo {
            font-size: 24px;
            font-weight: 600;
            color: white;
            text-decoration: none;
            text-shadow: 1px 2px 3px black;
            margin-bottom: 20px;
            display: inline-block;
        }

        .terminated-img {
            width: 250px;
            margin-bottom: 20px;
        }

        .info {
            font-size: 16px;
            margin: 10px 0;
        }

        .info span {
            font-weight: 600;
            color: #ffce00;
        }

        .animated-title {
            font-size: 22px;
            font-weight: 700;
            background: linear-gradient(90deg, #ff512f, #f09819);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: glow 1.5s infinite alternate;
            margin-bottom: 15px;
        }

        @keyframes glow {
            0% {
                text-shadow: 0 0 8px #f09819;
            }
            100% {
                text-shadow: 0 0 16px #ff512f;
            }
        }

        @media (max-width: 500px) {
            .card {
                padding: 25px 20px;
            }

            .logo {
                font-size: 20px;
            }

            .animated-title {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="card">
        <a href="index.php" class="logo">datrixinsights</a>
        <div class="animated-title">Terminated ✖</div>
        <img src="img/terminated.png" alt="Terminated" class="terminated-img">
        <p class="info">Project ID: <span><?php echo @$_GET['projectid']; ?></span></p>
        <p class="info">Member ID: <span><?php echo @$_GET['memberid']; ?></span></p>
        <p class="info">IP Address: <span><?php echo @$_SERVER['REMOTE_ADDR']; ?></span></p>
    </div>

</body>
</html>
