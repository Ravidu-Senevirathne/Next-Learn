<!DOCTYPE html>
<html>
<head>
    <style>
        .header {
            text-align: center;
            padding: 20px;
        }
        .logo {
            max-width: 150px;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ $message->embedData(file_get_contents(public_path('images/logo1.jpeg')), 'logo.jpeg') }}" class="logo" alt="NextLearn Logo">
        <h2>Thank You for Contacting NextLearn</h2>
    </div>
    
    <div class="content">
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Message:</strong></p>
        <p>{{ $data['message'] }}</p>
    </div>
</body>
</html>
