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


        $inputFile = ['2024-07-21-669cd054d16dd.mov'];
        
        $inputFile = glob("videos/*.{mov,mp4}", GLOB_BRACE);
        //  print_r($inputFile);
        
        $outputDir = base_path().'/videos/output';
        $bitrates = ['100k','200k','500k','750k']; // Low bitrate setting
        $resolutions = [
            // '50p' => ['width' => 140, 'height' => 50],
            '360p' => ['width' => 640, 'height' => 360],
            // '720p' => ['width' => 1280, 'height' => 720]
        ];

        $ffmpeg = base_path().'/ffmpeg/ffmpeg';
        $all_com = '';
        $i=0;
        foreach ($inputFile as $key => $value)
        {
            $videoName = str_replace('videos/','',$value);
            $video = base_path('videos').'/'.$videoName;
            
            
            foreach ($resolutions as $key2 => $value2) {
                $resolution = $key2;
                $outputvideo = $outputDir.'/'.$resolution.'/'.explode(".", $videoName)[0].'.webm';
                if (!is_dir($outputDir.'/'.$resolution)) {
                    mkdir($outputDir.'/'.$resolution, 0755, true);                    
                }
                
                
                if (!file_exists($outputvideo)) {
                    $command = "$ffmpeg -i $video -vf scale={$value2['width']}:{$value2['height']} $outputvideo";
                    if($i==0) $all_com = $command;
                    else $all_com .= ' && '.$command;
                    $i++;
                }    
                
                
                // shell_exec($command, $output, $return_var);
                // print_r($output);
            }
            
            
            //     // $ffmpeg = FFMpeg::create();
            //     // $video = $ffmpeg->open($inputFile);

            //     // Resize the video
            //     // $video->filters()->resize(new Dimension(320, 240))->synchronize();

            //     // Save a frame
            //     // $video->frame(TimeCode::fromSeconds(30))->save($outputDir.'frame.jpg');

        }
        // print_r(shell_exec($all_com));
        echo $all_com;





?>