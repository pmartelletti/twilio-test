<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

    $callerId = "malta";

    $number = htmlspecialchars($_REQUEST['PhoneNumber']);
?>
<Response>
    <Say voice="alice">This is a message from CRM Exposed. Please wait while we connect you to Stephen Gill.</Say>
    <Dial record="record-from-ringing" callerId="<?php echo $callerId; ?>">
    	<Number><?php echo $number; ?></Number>
    </Dial>
</Response>