<?php
	$audio = $_GET['audio'];
	if (isset($audio)) {
		if ($audio == 'hdmi' || $audio == 'jack') {
			if ($audio == 'hdmi') {
				// Execute Bash command line
				exec('sh audio_hdmi.sh');
			} else {
				// Execute Bash command line
				exec('sh audio_jack.sh');
			}
			echo "Audio {$audio} selected";
		} else {
			echo "Audio {$audio} not valid";
		}
	} else {
		echo 'Audio not selected';
	}
