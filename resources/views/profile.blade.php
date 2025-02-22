@vite(['resources/sass/profile.scss'])

<x-layout.main>
    <img src="/images/james-fish.jpg" alt="James standing with a massive fish he caught." class="center" width="300"
         height="300">
    <!--Personality traits-->
    <section class="personality">
        <h3>Personality</h3>
        <ol>
            <li>Hardworking</li>
            <li>Easygoing</li>
            <li>Friendly</li>
            <li>Optimistic</li>
            <li>Kind</li>
            <li>Funny (sometimes)</li>
        </ol>
    </section>
    <!--Name, age, etc.-->
    <section class="info">
        <ol>
            <li>Name: James Openshaw</li>
            <li>Age: 22</li>
            <li>Birthday: 7 November 2001</li>
            <li>Home town: East London, South Africa</li>
        </ol>
    </section>
    <!--About me-->
    <section class="description">
        <h2>Where I'm from</h2>
        <p>
            I'm from South Africa, but I came to the Netherlands in May last year. I travelled all over to see the
            Dutch side of my family; my mom was born here so I have a ton of uncles, aunts, and cousins. Now I
            live in a studio apartment on the APV campus in Middelburg, a 3 minute walk away from the HZ, so I
            don't have to get up too early.
        </p>
        <h2>What I do</h2>
        <p>
            I work as a waiter at Cafe Tympaan in the city centre, we're always looking for more colleagues so if
            you need a job I can put in a good word for you! I jump around between different hobbies a lot; now that I
            have a laptop I've been gaming again, I'm more into offline story based games than online multiplayer.
            I also enjoy reading, although I don't do it very often, and I like cross stitching, fishing, building
            puzzles, playing board games. Basically I'm an old man.
        </p>
    </section>
    <!--Social media links-->
    <section class="socials">
        <ul>
            <li>
                <a href="https://www.instagram.com/videojames01/" target="_blank">
                    <img src="/images/instagram-icon.png" alt="Instagram">
                </a>
            </li>
            <li>
                <a href="https://www.github.com/videojames01" target="_blank">
                    <img src="/images/github-icon.png" alt="GitHub">
                </a>
            </li>
        </ul>
    </section>
</x-layout.main>
