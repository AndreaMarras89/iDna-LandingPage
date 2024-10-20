<!DOCTYPE html>
<html>
<head>
    <title>Nuovo Messaggio</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Hai ricevuto un nuovo messaggio da {{ $data['name']}}</h1>
    <p>Ciao Andrea vorrei più informazioni riguardo a Surfers Co.</p>
    <p><strong>Nome:</strong> {{ $data['name'] }} </p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Luogo di nascita:</strong> {{ $data['birthplace'] }}</p>
    <p><strong>Data di nascita:</strong> {{ \Carbon\Carbon::parse($data['birthday'])->format('d/m/Y') }}</p>
    <p><strong>Messaggio:</strong> {{ $data['message'] }}</p>
</body>
</html>


