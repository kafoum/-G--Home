<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="CSS\contact.css">

</head>
<body>

<?php include 'BASE\header.php'; ?>  

    <div class="container">
        <h2>Contactez Nous</h2>
        <div class="contact-wrapper">
            <div class="contact-form">
                <h3>Envoyez un message</h3>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Votre Nom :</label>
                        <input type="text" id="name" name="name" placeholder="Entrez votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Votre Email :</label>
                        <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message :</label>
                        <textarea id="message" name="message" placeholder="Entrez votre message" required></textarea>
                    </div>
                    <button type="submit">Envoyer le message</button>
                </form>
            </div>
            <div class="contact-info">
                <h3>Nos Informations</h3>
                <button class="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" viewBox="0 0 32 32" height="32" fill="none" class="svg-icon">
                        <path stroke-width="2" stroke-linecap="round" stroke="#fff" fill-rule="evenodd" d="m24.8868 19.1288c-1.0274-.1308-2.036-.3815-3.0052-.7467-.7878-.29-1.6724-.1034-2.276.48-.797.8075-2.0493.9936-2.9664.3258-1.4484-1.055-2.7233-2.3295-3.7783-3.7776-.6681-.9168-.4819-2.1691.3255-2.9659.5728-.6019.7584-1.4748.4802-2.2577-.3987-.98875-.6792-2.02109-.8358-3.07557-.2043-1.03534-1.1138-1.7807-2.1694-1.77778h-3.18289c-.60654-.00074-1.18614.25037-1.60035.69334-.40152.44503-.59539 1.03943-.53345 1.63555.344 3.31056 1.47164 6.49166 3.28961 9.27986 1.64878 2.5904 3.84608 4.7872 6.43688 6.4356 2.7927 1.797 5.9636 2.9227 9.2644 3.289h.1778c.5409.0036 1.0626-.2 1.4581-.569.444-.406.6957-.9806.6935-1.5822v-3.1821c.0429-1.0763-.7171-2.0185-1.7782-2.2046z" clip-rule="evenodd">
                        </path>
                    </svg>
                </button>
                <p>Contact: +1 123 456 789</p>
                <p>Mail: contact@exemple.com</p>
                <p>Adresse: 123 Rue Jean Martin, France</p>
            </div>
        </div>
    </div>
</section>

<?php include 'BASE\footer.php'; ?>  
       
</body>
</html>
