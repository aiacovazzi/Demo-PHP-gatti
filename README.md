# Demo PHP Colonia Felina

Questo repository contiene una piccola demo scritta in PHP come esercizio per la prova pratica del concorso docenti B016.

Il dominio dell'esercizio è quello di una colonia felina, molto semplice in realtà. Nel database ci sono solo due entità: utenti e gatti.

Gli utenti, oltre allo username e la password, possiedono anche un ruolo che di default sarà "base", ovvero un utente che può solo visualizzare il database.

Modificando opportunamente un utente e cambiando il suo ruolo da "base" ad "admin", tale utente potrà anche inserire, modificare e cancellare le informazioni inerenti ai gatti, implementando di fatto le CRUD spesso richieste durante la prova.

La demo prevede un meccanismo di registrazione e login con password che, se compreso, può rendere l'oggetto della prova più completo e ottenere una maggiore valutazione.

Non ho dato molto peso alla parte estetica in CSS, vi consiglio di modificare liberamente il codice per migliorarne la gradevolezza estetica come esercizio per padroneggiare meglio CSS.

## Utilizzo

Per utilizzarla, scarica il codice usando questo [link di download](https://github.com/aiacovazzi/Demo-PHP-gatti/archive/refs/heads/main.zip).

All'interno troverai:

- Il file `script_sql.sql` da eseguire tramite PHPMyAdmin, contiene lo script per la creazione del database con le due semplici tabelle già discusse e i relativi indici.
- La cartella `myApp` contenente il codice PHP. Questa cartella va posta sotto la directory `xampp\htdocs\` se usi XAMPP, altrimenti seguendo le specifiche del tuo web server.

Dopo di che, avvia il web server e usa l'applicazione. Di default, verrà caricata la pagina `index.php` che contiene la schermata di login.

Il codice non è molto commentato perché personalmente l'ho usato come esercizio di ripasso. Tuttavia, utilizzando ChatGPT, potete ottenere facilmente una versione commentata di ogni file .php!

Se questo mio lavoro ti è stato utile, considera l'idea di donarmi un caffè simbolico tramite il seguente indirizzo [PayPal](https://paypal.me/aiacovazzi).

Buono studio!
