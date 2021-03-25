laravel_mail_exo_1
Dans le projet middleware
- Créez une page contact dans la partie siteweb qui contient un formulaire de contact "Adresse Email" et "Message"
- Ce formulaire de contact vous envoi un mail avec le contenu de votre view
{̴{̴$̴n̴i̴c̴o̴}̴}̴ — Hier à 15:27
laravel_mail_exo_2
Dans le projet middleware
- Créez une page contact dans la partie siteweb qui contient un formulaire de contact "Adresse Email" et "Message"
- Ce formulaire de contact vous envoi un mail avec l’adresse email et le message de la personne
laravel_mail_exo_3
Continuez dans le même projet
- Designez le mail avec du css
- Ajoutez un input 'sujet' (sujet du mail) dans le formulaire de contact
- Faites en sorte que le sujet soit le sujet du mail(regardez dans la documentation) https://laravel.com/docs/8.x/mail#writing-mailables
laravel_mail_exo_4
Continuez dans le même projet
- Créez une table "emails" dans la quelle vous allez stocker vos emails
- Affichez tous les mails dans le backoffice dans une nouvelle page "Emails"
laravel_mail_exo_5
Continuez dans le même projet
- Créez une table "email_subjects" dans la quelle vous y mettez plusieurs sujets prédéfinis 'Besoin de conseils' , 'Demande d'information supplémentaires',  'Devis'
- Rendez ses choix possible dans la page contact au lieu d'un input text pour le sujet passez a un select
laravel_mail_exo_6
Continuez dans le même projet
- Faites un input inscription newsletter dans la navbar
- Quand quelqun met son adresse email dans la newsletter et appuis sur s'inscrire, cela met son adresse email dans une table "newsletters"
- La personne qui vient de s'inscrire a la newsletter recoit un mail de confirmation (il faut faire une nouvelle template de mail,etc)
laravel_mail_exo_7
Continuez dans le même projet
- Faites une page d'inscription
- A l'inscription on reçoit un mail avec notre nom d'utilisateur, notre email, notre mot de passe et un message de bienvenue.