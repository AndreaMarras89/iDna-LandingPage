### Descrizione landing page

---

La landing page consiste in una pagina responsive che dovrebbe fornire i possibili dettagli di una tavola da surf con annessi link alle pagine social, a cui segue un form di contatto che manda una email con i dati inseriti effettuando una chiamata asincrona che valida i dati ricevuti in input, li salva nel database, e poi crea una vista in html e invia l'email. 

### Tecnologie utilizzate

- laravel
- html
- css
- bootstrap
- javascript
- mysql come database

---

### Backend

Utilizzando l'MVC ho creato un controller "HomeController.php" che riceve una chiamata ajax dal file "home.js" in cui valida i dati ricevuti in input, se questi non sono validi verrà lanciato un "alert" che avvertirà di compilare i campi correttamente, se invece sono validi verranno inseriti in un'array, inseriti dentro il database e poi spediti usando "EmailNotification".

```bash
public function sendData(Request $request)
  {
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:100',
        'email' => 'required|email|max:254',
        'birthplace' => 'required|string|max:100',
        'birthday' => 'required|date',
        'message' => 'required|string',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'errors' => $validator->errors()
        ], 422);
    }

    $validated = $validator->validated();
    $email_data = Email_Info::create($validated);
    Mail::to('andreamarras634@gmail.com')->send(new EmailNotification($validated));

     return response()->json(['success' => true]);

  }
```

---

### Frontend

Ho creato una struttura responsive sfruttando le classi html e di bootstrap e "@media" di css. Ho iniziato sviluppando per schermi desktop in quanto le specifiche spiegavano che sarebbe stato visto tramite desktop e poi ho fatto schermi più piccoli sino ad arrivare al mobile.
In schermi sotto i 400px notavo come il video iniziasse a vedersi molto male, ho preferito così non mostrarlo in versione mobile mentre rimane disponibile in versioni tablet e desktop.
Ho creato usando javascript un anchor che cliccando sull'icona mail nell'header e nel link "contact us" nel footer portassero l'utente direttamente al form. 

### Step per installazione e configurazione

---

- Creare un progetto in Laravel e aggiungere EmailNotification per la gestione e l'invio delle email.
- Configurare l'.env, io ho usato Google/Gmail quindi ho dovuto crearmi una password per app per poter inviare l'email.
- Copiare i contenuti delle cartelle.