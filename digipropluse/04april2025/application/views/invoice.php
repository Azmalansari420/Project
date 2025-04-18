<?php
// $purchase_detail

$sitesetting = $this->db->get_where('site_setting',array('id'=>1))->result_object();
$address = $this->db->get_where('purchase_kyc_details',array('requestid'=>$purchase_detail[0]->requestid))->result_object();


$imagePath = base_url().'media/uploads/site_setting/'.$sitesetting[0]->logo; // URL or local file path
$imageData = base64_encode(file_get_contents($imagePath));
$sitelogo = 'data:image/png;base64,' . $imageData;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style type="text/css">
    	body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f9f9f9;
}

.invoice-container {
    max-width: 700px;
    margin: auto;
    padding: 20px;
    background: #fff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

.header {
    text-align: center;
}

.logo {
    max-width: 100px;
}

.invoice-details {
    display: flex;
    justify-content: space-between;
    margin: 20px 0;
}

.from, .to {
    width: 45%;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

th {
    background: #007bff;
    color: #fff;
}

.note {
    margin-top: 20px;
    font-size: 14px;
}

.total {
    text-align: right;
    font-size: 18px;
    margin-top: 10px;
    font-weight: bold;
}

.print-btn {
    display: block;
    margin: 20px auto;
    padding: 10px 20px;
    font-size: 16px;
    background: #007bff;
    color: white;
    border: none;
    cursor: pointer;
}

.print-btn:hover {
    background: #0056b3;
}

.logo {
    max-width: 219px;
    background: black;
    padding: 10px;
    border-radius: 15px;
}

    </style>
</head>
<body>
    <div class="invoice-container">
        <div class="header">
            <img src="<?=$sitelogo ?>" alt="Company Logo" class="logo">
            <h2>Invoice</h2>
            <p>Invoice Date Time: <strong><?=date('d M, Y h:i A',strtotime($purchase_detail[0]->addeddate)) ?></strong></p>
        </div>

        <div class="invoice-details">
            <div class="from">
                <h3>Invoice From:</h3>
                <p><strong><?=website_name ?></strong></p>
                <p>GST No: <?=$sitesetting[0]->com_gst ?></br>
                	Email: <?=$sitesetting[0]->email ?></p>
                <!-- <p><?=$sitesetting[0]->address ?></p> -->
            </div>

            <div class="to">
                <h3>Invoice To:</h3>
                <p>
                	<?=$purchase_detail[0]->username ?><br>
                    <?=$purchase_detail[0]->user_id ?><br>
                	<?=$purchase_detail[0]->mobile ?><br>
                	<?=$purchase_detail[0]->email ?><br>                	
                    <?php if(!empty($address)) echo $address[0]->address; ?><br>                    
                </p>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Plan Name</th>
                    <th>Plan Price</th>
                    <th>GST</th>
                    <!-- <th>Payable Amount</th> -->
                    <th>Plan Expire Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><?=$purchase_detail[0]->plan_name ?></td>
                    <td><?=currency_simble($purchase_detail[0]->plan_price) ?></td>
                    <td><?=currency_simble($purchase_detail[0]->gst) ?></td>
                    <!-- <td><?=$purchase_detail[0]->final_amt ?></td> -->
                    <td><?=$purchase_detail[0]->expirey_date ?></td>
                </tr>
            </tbody>
        </table>

        <div class="note">
            <p><strong>Note:</strong> Thanks for joining with us.</p>
        </div>

        <div class="total">
            <p><strong>Total: <?=currency_simble($purchase_detail[0]->final_amt) ?></strong></p>
        </div>

        <button onclick="window.print()" class="print-btn">Print</button>
    </div>
</body>
</html>
