<?php  


// error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



function base_path($var='')
{
    if(empty($var))
    {
     return __DIR__;
    }
    else
    {
        return __DIR__.'/'.$var;
    }
}



// Set your Gumlet API key
$api_key = 'gumlet_bc0797e7349770f39e8e997383d6a5a2';

// API endpoint for uploading videos
$api_url = 'https://api.gumlet.com/v1/video/upload';

// List of video URLs to upload
$video_urls = [
    'https://knowledgewaveindia.com/videos/2024-07-15-66951bfab27a6.mp4',
];

// Loop through each video URL and send the request to Gumlet
foreach ($video_urls as $video_url) {
    // Prepare the data
    $data = [
        'source_url' => $video_url
    ];

    // Initialize cURL session
    $ch = curl_init($api_url);
    
    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $api_key
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    // Execute cURL request and get response
    $response = curl_exec($ch);
    
    // Check if the request was successful
    if ($response === false) {
        echo 'Error: ' . curl_error($ch);
    } else {
        echo 'Video uploaded successfully: ' . $video_url . "\n";
        echo 'Response: ' . $response . "\n";
    }

    // Close cURL session
    curl_close($ch);
}





?>