<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi Pengisian Formulir</title>
</head>

<body style="font-family: Arial, sans-serif;">

    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">

        <h1>Notifikasi Pengisian Formulir Website UD NUSA RAYA</h1>

        <p>Halo 1017studio,</p>

        <p>Anda menerima notifikasi bahwa seorang pengguna telah mengisi formulir.</p>

        <p>Berikut adalah detail yang diberikan oleh pengguna:</p>
        <ul>
            <li><strong>Nama:</strong> {{ $formData['first_name'] }} {{ $formData['last_name'] }}</li>
            <li><strong>Email:</strong> {{ $formData['email'] }}</li>
            <li><strong>Nomor Telepon:</strong> {{ $formData['nomor_wa'] }}</li>
        </ul>

        <p><strong>Pesan:</strong></p>
        <p>{{ $formData['pesan'] }}</p>

        <p>Segera tinjau formulir yang diisi dan tindak lanjuti sesuai kebijakan perusahaan.</p>

        <p>Terima kasih atas perhatiannya.</p>

        <p>Hormat Kami,</p>
        <p>[1017studio]</p>

    </div>

</body>

</html>