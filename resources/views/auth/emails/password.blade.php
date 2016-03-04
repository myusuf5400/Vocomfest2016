<!DOCTYPE html>
<html>
<head>
  <title>Reset Password Akun Vocomfest 2016</title>
</head>
<body>
Untuk mereset akun Vocomfest 2016 anda, silahkan klik alamat dibawah ini.

<a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>

Terima kasih,

Vocomfest 2016
</body>
</html>
