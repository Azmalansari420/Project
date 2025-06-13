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
        'status' => "Quotafull"
    );
    $insert = $con->insert("user", $value);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quota Full</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            text-align: center;
            color: #fff;
            max-width: 400px;
            width: 90%;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .logo {
            font-size: 28px;
            font-weight: 600;
            text-shadow: 0 0 5px rgba(255,255,255,0.6);
            margin-bottom: 20px;
        }

        .quota-img {
            width: 250px;
            margin-bottom: 20px;
        }

        .info {
            font-size: 16px;
            margin: 10px 0;
        }

        .info span {
            font-weight: bold;
            color: #ffe600;
        }

        .animated-title {
            font-size: 20px;
            font-weight: 700;
            background: linear-gradient(90deg, #f7971e, #ffd200);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: glow 1.5s infinite alternate;
            margin-bottom: 15px;
        }

        @keyframes glow {
            0% {
                text-shadow: 0 0 5px #ffe600, 0 0 10px #ffe600;
            }
            100% {
                text-shadow: 0 0 15px #ff0, 0 0 25px #ff0;
            }
        }

        @media (max-width: 500px) {
            .card {
                padding: 20px;
            }

            .logo {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="logo">datrixinsights</div>
        <div class="animated-title">Quota Full ✖</div>
        <img src="img/q1.png" class="quota-img" alt="Quota Full">
        <p class="info">Project ID: <span><?php echo @$_GET['projectid']; ?></span></p>
        <p class="info">Member ID: <span><?php echo @$_GET['memberid']; ?></span></p>
        <p class="info">IP Address: <span><?php echo @$_SERVER['REMOTE_ADDR']; ?></span></p>
    </div>

</body>
</html>
