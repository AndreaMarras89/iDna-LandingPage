<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Nuovo Messaggio</title>
</head>

@php
//dd($data['name']);
@endphp
<body>
<h1>Hai ricevuto un nuovo messaggio</h1>
    <p><strong>Nome:</strong> <?php echo $data['name'] ?></p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Luogo di nascita:</strong> {{ $data['birthplace'] }}</p>
    <p><strong>Data di nascita:</strong> {{ $data['birthday'] }}</p>
    <p><strong>Messaggio:</strong> {{ $data['message'] }}</p>
</body>
</html>

