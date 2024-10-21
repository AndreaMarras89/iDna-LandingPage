### Descrizione landing page

---

La landing page è una pagina responsive progettata per mostrare i dettagli di un prodotto, con collegamenti ai social media. Includere un modulo di contatto che consente agli utenti di inviare i propri dati via email. Il form effettua una chiamata asincrona per validare i dati inseriti, salvarli nel database e inviare un'email all'amministratore con il riepilogo delle informazioni ricevute.

### Tecnologie utilizzate

- laravel
- html
- css
- bootstrap
- javascript
- mysql

---

### Backend

Il backend utilizza l'architettura MVC (Model-View-Controller) di Laravel. Ho implementato un controller chiamato HomeController che gestisce la logica del form di contatto. Il file JavaScript (home.js) invia i dati del form tramite una chiamata AJAX, che il controller elabora nel seguente modo:

- I dati vengono validati utilizzando Validator.
- Se i dati non sono validi, viene restituita una risposta JSON con errori, e il frontend visualizza un avviso all'utente.
- Se i dati sono validi, vengono salvati nel database e viene inviata un'email di notifica tramite EmailNotification.

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

Ho realizzato una struttura responsive utilizzando le classi HTML e Bootstrap, insieme alle media query CSS (@media). Lo sviluppo è iniziato ottimizzando la visualizzazione per gli schermi desktop, come richiesto dalle specifiche, per poi adattare il design a schermi più piccoli fino alla visualizzazione mobile.

## Gestione del video
Per gli schermi con una larghezza inferiore a 400px, ho riscontrato una scarsa qualità del video. Pertanto, ho deciso di non mostrarlo su dispositivi mobili, mantenendolo visibile solo su tablet e desktop.

## Funzionalità di ancoraggio
Inoltre, ho implementato con JavaScript un'ancora che, al clic sull'icona della mail nell'header o sul link "Contact Us" nel footer, reindirizza l'utente direttamente al modulo di contatto.

### Step per installazione e configurazione

---

- Creare un progetto in Laravel
- Configurazione dell'.env.
- Implementare EmailNotification per la gestione e l'invio delle email
- Copiare i contenuti delle cartelle.
