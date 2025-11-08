<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>AKPIS Enquiry Received</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; background: #f4f4f4; padding: 20px; }
        .container { max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; border: 1px solid #ddd; }
        h2 { color: #003366; }
        table { margin-top: 15px; width: 100%; border-collapse: collapse; }
        td { padding: 5px 10px; border-bottom: 1px solid #eee; }
        .footer { margin-top: 20px; font-size: 0.9em; color: #999; }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Enquiry Received</h2>
        <p>A new enquiry has been submitted on AKPIS Professionals website. Here are the details:</p>

        <table>
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
            <tr>
                <td><strong>Qualification:</strong></td>
                <td><?= esc($qualification) ?></td>
            </tr>
            <tr>
                <td><strong>Work Experience:</strong></td>
                <td><?= esc($work_experience) ?></td>
            </tr>
            <tr>
                <td><strong>Preferred Time:</strong></td>
                <td><?= esc($preferred_time) ?></td>
            </tr>
            <tr>
                <td><strong>Comment:</strong></td>
                <td><?= esc($comment) ?></td>
            </tr>
        </table>

        <div class="footer">
            &copy; <?= date('Y') ?> AKPIS Professionals
        </div>
    </div>
</body>
</html>
