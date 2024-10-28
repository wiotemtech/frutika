<?php
// Check for CSRF token
if (empty($_POST['token']) || $_POST['token'] != 'FsWga4&@f6aw') {
    echo '<span class="notice">Error: Invalid token!</span>';
    exit;
}

// Sanitize and validate inputs
$name = trim($_POST['name']);
$from = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$phone = trim($_POST['phone']);
$subject = stripslashes(nl2br(trim($_POST['subject'])));
$message = stripslashes(nl2br(trim($_POST['message'])));

// Validate the email
if (!filter_var($from, FILTER_VALIDATE_EMAIL)) {
    echo '<span class="notice">Error: Invalid email address!</span>';
    exit;
}

// Set up email headers
$headers = "From: Form Contact <$from>\n";
$headers .= "Reply-To: $from\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-Type: text/html; charset=UTF-8\n";

// Build the email body
ob_start();
?>
Hi imransdesign!<br /><br />
<?php echo ucfirst($name); ?> has sent you a message via contact form on your website!<br /><br />
Name: <?php echo ucfirst($name); ?><br />
Email: <?php echo $from; ?><br />
Phone: <?php echo $phone; ?><br />
Subject: <?php echo $subject; ?><br />
Message:<br /><br />
<?php echo $message; ?>
<br /><br />
============================================================
<?php
$body = ob_get_contents();
ob_end_clean();

// Set the recipient email address
$to = 'namronny12@gmail.com';

// Send the email
$s = mail($to, $subject, $body, $headers, "-f $from");

if ($s) {
    echo '<div class="success"><i class="fas fa-check-circle"></i><h3>Thank You!</h3>Your message has been sent successfully.</div>';
} else {
    echo '<div>Your message sending failed! Please try again later.</div>';
}
?>
