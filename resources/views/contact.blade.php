<x-layouts.app title="contact">
    <header>
    <div class="contact_pagina">
            <h1>Contact</h1>
            <p>
                Welkom op de homepage van Smart-Solutions. 
                We zijn verheugd dat je hier bent. 
                Op deze site vind je meer informatie over wie we zijn en hoe je contact met ons kunt opnemen. 
                Gebruik de navigatie om naar de andere pagina's te gaan.
            </p>
            <form action="#" method="post">
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="subject">Onderwerp:</label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">Tekst:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Verzenden</button>
            </form>
        </div>
    </header>
</x-layouts.app>