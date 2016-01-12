<?php
	$audio = $_GET['audio'];
	if (isset($audio)) {
		if ($audio == 'hdmi' || $audio == 'jack') {
			if ($audio == 'hdmi') {
				exec('sh audio_hdmi.sh');
			} else {
				exec('sh audio_jack.sh');
			}
			echo "Audio {$audio} selected";
		} else {
			echo "Audio {$audio} not valid";
		}
	} else {
		echo 'Audio not selected';
	}
