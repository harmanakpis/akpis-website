<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Webinar Enquiry</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; color: #333; }
        .container { max-width: 600px; margin: 0 auto; background: #fff; padding: 20px; border-radius: 8px; }
        .header { background: #EE2737; color: #fff; padding: 10px; text-align: center; border-radius: 8px 8px 0 0; }
        .content { margin: 20px 0; }
        .footer { font-size: 12px; color: #777; text-align: center; margin-top: 20px; }
        .btn { display: inline-block; padding: 10px 20px; background: #EE2737; color: #fff; text-decoration: none; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>AKPIS CMA USA Webinar</h2>
        </div>
        <div class="content">
            <p>Hi <?= esc($name) ?>,</p>
            <p>Thank you for registering for our webinar. Here are the details you submitted:</p>
            <ul>
                <li><strong>Email:</strong> <?= esc($email) ?></li>
            </ul>
            <p>We look forward to seeing you at the webinar!</p>
            <p><a href="#" class="btn">Visit AKPIS</a></p>
        </div>
        <div class="footer">
            &copy; <?= date('Y') ?> AKPIS. All rights reserved.
        </div>
    </div>
</body>
</html>
