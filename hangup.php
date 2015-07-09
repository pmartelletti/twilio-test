<?php
    header("content-type: text/xml");
    header("Cache-Control: no-cache, must-revalidate");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

    // we have the CALL id in RecordingUrl parameter
    // we save this to the database and we hangup

?>
<Response>
	<Hangup/>
</Response>