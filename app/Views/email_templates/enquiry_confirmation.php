<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>AKPIS Enquiry Confirmation</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; background: #f4f4f4; padding: 20px; }
        .container { max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; border: 1px solid #ddd; }
        h2 { color: #003366; }
        p { color: #555; }
        .details { margin-top: 20px; }
        .details td { padding: 5px 10px; }
        .footer { margin-top: 30px; font-size: 0.9em; color: #999; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hi <?= esc($name) ?>,</h2>
        <p>Thank you for submitting your enquiry with <strong>AKPIS Professionals</strong>!</p>
        <p>We have received your details and our team will get in touch with you shortly.</p>

        <table class="details" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td><strong>Name:</strong></td>
                <td><?= esc($name) ?></td>
            </tr>
            <tr>
                <td><strong>Email:</strong></td>
                <td><?= esc($email) ?></td>
            </tr>
            <tr>
                <td><strong>Contact:</strong></td>
                <td><?= esc($contact) ?></td>
            </tr>
            <tr>
                <td><strong>Course Interested:</strong></td>
                <td><?= esc($course_name ?? 'N/A') ?></td>
            </tr>
        </table>

        <p>If you have any questions, feel free to reply to this email or contact us at <strong>support@akpisprofessionals.com</strong>.</p>

        <p>Regards,<br><strong>AKPIS Professionals Team</strong></p>

        <div class="footer">
            &copy; <?= date('Y') ?> AKPIS Professionals. All rights reserved.
        </div>
    </div>
</body>
</html>
