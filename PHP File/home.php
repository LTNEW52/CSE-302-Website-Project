<?php
    session_start();
    include("../HTML File/header.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enthusiast Reader Club</title>
    <link rel="icon" type="Image/jpg" href="../Image/Favicon2.jpg">
    <link rel="stylesheet" href="../CSS File/style.css">
    <script src="https://kit.fontawesome.com/bcb160f71f.js" crossorigin="anonymous"></script>
</head>
<body id="home">

    <main>
        <div id="welcomebanner">
            <p id="greetings">Welcome <?php echo $_SESSION["username"] ?>!</p>
        </div>

        <div id="intro">
            <h1>What It Is About?</h1>
            <p>Enthusiast Reader Club is a online based book club. Our main goal is to gather enthusiast peoples in one place. As the world is embracing technology more and more, book reading also moved from paper to online. Our goal is to make a heaven for readers with proper resources and make a lovely community!</p>
            
            <h1>What Makes Us Unique?</h1>
            <P>Our website has a vast amount of resources. Not only you can buy books, you can review it and even suggest us which book you want! A vast database for books and a user friendly environment is what you will get. And not only that, it comes with its own community, so you can discuss as much as you want!</P>
        </div>

        <div id="blog_event">

            <div id="blog">
                <h1>News!</h1>

                <div class="blogcontainer">
                    <button class="bloghead">Romanian poet Ana Blandiana wins 2024 Princess of Asturias Award for Literature</button>
                    <div class="blogdetails">
                        <img src="../Image/news1.jpg" alt="Ana Blandiana">
                        <p>Ana Blandiana has won the Princess of Asturias Foundation's coveted Literature prize at a ceremony broadcast live from the north-western Spanish town of Oviedo.</p>
                        <p>The annual award recognises "the work of cultivating and perfecting literary creation in all its genres".</p>
                        <p>The president of the jury, Santiago Muñoz, declared that Blandiana was selected for being "a radically singular creator", whose writing, "combines transparency and complexity, raises fundamental questions about the existence of human beings in solitude and society in the face of nature and history".</p>
                        <p>Blandiana, according to the jury, "has shown with her indomitable poetry an extraordinary capacity for resistance in the face of censorship."</p>
                        <p>Her first book of poems was published in 1964 and she became an established poet in the same decade with the works 'The Vulnerable Heel' and 'The Third Sacrament'.</p>
                        <p>Blandiana has since developed cult status in Europe and her work has been translated into more than twenty languages. </p>
                        <p>Born in Timisoara in 1942, Blandiana is also known for her political activism. Following the 1989 Revolution in Romania she founded a campaign promoting the elimination of the country's communist legacy and lobbied for the creation of an open society.</p>
                        <p>She is a founding member and president of the Civic Alliance Foundation since 1994, an apolitical movement counteracting the impact of 50 years of communism in Romania. </p>
                        <p>The Princess of Asturias Award echoes the broad consensus of critics, who highlighted that the author (essayist and politician as well as poet) embodies "the conscience and testimony of her time, the emblematic opposition to the regime and the fight against censorship", while offering "a reflection on artistic creation and the human condition".</p>
                        <p>Previous winners include Haruki Murakami, Philip Roth, Anne Carson, Leonardo Padura, and Antonio Muñoz Molina, among others. A total of 38 candidates from 21 nationalities competed for the prestigious award in this year's edition.</p>
                        <p>Commenting on her win, Blandiana said "It is difficult for me to express my emotion and gratitude for the great honour that the Princess of Asturias Award represents for me." </p>
                        <p>"Thank you for the echo that your prestigious prize will give to my ideas and my poems and that it will amplify them in the conscience of Spanish readers all over the world", added the author.</p>
                    </div>
                </div>

                <div class="blogcontainer">
                    <button class="bloghead">Pulitzer-winning writer David Mamet calls Hollywood’s diversity efforts 'fascist totalitarianism'</button>
                    <div class="blogdetails">
                        <img src="../Image/news2.jpg" alt="David Mamet">
                        <p>During the L.A. Times Festival of Books, David Mamet spoke out against the initiatives in Hollywood to create diversity, equity, and inclusion - referred to as DEI.</p>
                        <p>Legendary playwright, filmmaker and Pulitzer Prize-winning screenwriter David Mamet did not mince his words </p>
                        <p>The scribe, who is behind The Untouchables, Glengarry Glen Ross, Oleanna, The Postman Always Rings Twice, and the very underrated Wag the Dog, talked about the entertainment industry’s efforts to drive greater diversity, equity and inclusion (DEI) in its ranks. And he's no fan. </p>
                        <p>“DEI is garbage,” Mamet told the Los Angeles Times Festival of Books.</p>
                        <p>He added the industry’s DEI efforts amounted to “fascist totalitarianism.”</p>
                        <p>The playwright and director, who has worked in Hollywood since the 1980s, was there to talk about his tell-all memoir "Everywhere an Oink Oink: An Embittered, Dyspeptic, and Accurate Report of Forty Years in Hollywood". </p>
                        <p>He further lambasted the liberal establishment in Hollywood when talking about the inclusion rules the Academy of Motion Picture Arts and Sciences has implemented for films to be considered in the Oscar Best Picture category.</p>
                        <p>About the new diversity rules, to help advance the representation of LGBTQ+, women, ethnic minorities and disabled people, Mamet said: “I can’t give you a stupid fucking statue unless you have 7% of this, 8% of that … it’s intrusive.”</p>
                        <p>In his book, Mamet describes the leaders of these diversity, equity and inclusion initiatives as “diversity capos" and “diversity commissars.”</p>
                        <p>“The (film industry) has little business improving everybody’s racial understanding as does the fire department,” Mamet said, further arguing that his colleagues are better off selling popcorn than trying to improve the representation marginalized groups.</p>
                        <p>Mamet also rejected that his children, including Zosia Mamet, who starred in HBO’s Girls and most recently in the dire Madame Web, are nepo babies. </p>
                        <p>According to the prize-winning writer, his children ever got work because of their association with him.</p>
                        <p>“They haven’t benefited from any type of privilege,” insisted Mamet. “They earned it by merit... Nobody ever gave my kids a job because of who they were related to.”</p>
                        <p>David Mamet’s memoir "Everywhere an Oink Oink: An Embittered, Dyspeptic, and Accurate Report of Forty Years in Hollywood" is set to be published in the fall.</p>
                    </div>
                </div>

                <div class="blogcontainer">
                    <button class="bloghead">Al Pacino announces release of 'astonishingly revelatory' memoir ‘Sonny Boy’ after Oscars</button>
                    <div class="blogdetails">
                        <img src="../Image/news3.jpg" alt="Al Pachino">
                        <p>Oscar-winning actor Al Pacino has announced the release of an "astonishingly revelatory" memoir ‘Sonny Boy’ after his rather anticlimactic performance at this year's Oscars.</p>
                        <p>Aside from giving us a strangely underwhelming finale at the Oscars on Sunday / Monday morning, Al Pacino has made amends by announcing the release of his “astonishingly revelatory” memoir.</p>
                        <p>For those of you who missed it, Pacino took to the stage at the 96th edition of the Academy Awards to announce the top prize of the evening: Best Film – which ended up going to Oppenheimer.</p>
                        <p>The veteran actor, 83, abruptly announced the winner without first listing the nominees, as is customary. He mumbled "my eyes see 'Oppenheimer'," leaving everyone momentarily disorientated as to whether the film had won, and leading to a quite anticlimactic final note to a predictable-if-excellent evening.</p>
                        <p>"It was not my intention to omit them," Pacino said in a statement, adding that it was "a choice by the producers not to have (the nominees) said again since they were highlighted individually throughout the ceremony".</p>
                        <p>"I realise being nominated is a huge milestone in one's life and to not be fully recognised is offensive and hurtful," Pacino said. "I say this as someone who profoundly relates with film-makers, actors and producers so I deeply empathise with those who have been slighted by this oversight and it's why I felt it necessary to make this statement."</p>
                        <p>After the ceremony ended, host Jimmy Kimmel said of Pacino’s presentation: “I guess he’s never watched an awards show before. It seems like everyone in America knows the rhythm of how it’s supposed to go ‘And the Oscar goes to …’ But not Al Pacino! God bless him.”</p>
                        <p>Bless him, indeed. All is forgiven, Al. Especially since the nine-time acting nominee – who has only won the Oscar for Best Actor for 1992’s Scent of a Woman - announced his memoir after the ceremony.</p>
                        <p>The highly anticipated book, "Sonny Boy", has been described as “astonishingly revelatory” and will be published by Penguin Random House.</p>
                        <img src="../Image/news3.1.jpg" alt="Sonny Boy">
                        <p>The “memoir of a man who has nothing left to fear and nothing left to hide” will cover the actor’s childhood in New York, his upbringing with his “fiercely loving but mentally unwell mother and her parents”, and his time at New York’s High School of Performing Arts. It will also delve into his work in New York’s avant garde theatre scene in the 1960s and 70s before his major movie break with The Panic of Needle Park, The Godfather, The Godfather Part II, Serpico and Dog Day Afternoon.</p>
                        <p>A press statement elaborated further: “The book’s golden thread, however, is the spirit of love and purpose. Love can fail you, and you can be defeated in your ambitions – the same lights that shine bright can also dim. But Al Pacino was lucky enough to fall deeply in love with a craft before he had the foggiest idea of any of its earthly rewards, and he never fell out of love. That has made all the difference.” </p>
                        <p>Speaking of "Sonny Boy" in a press release, Pacino shared: “I wrote Sonny Boy to express what I’ve seen and been through in my life. It has been an incredibly personal and revealing experience to reflect on this journey and what acting has allowed me to do and the worlds it has opened up. My whole life has been a moonshot, and I’ve been a pretty lucky guy so far.”</p>
                        <p>"Sonny Boy", which has been years in the making, is set for release on 8 October.</p>
                    </div>
                </div>

                <div class="blogcontainer">
                    <button class="bloghead">Fanfiction author who sued Tolkien estate and Amazon over a LOTR sequel loses copyright case</button>
                    <div class="blogdetails">
                        <img src="../Image/news4.jpg" alt="Lord Of the Rings">
                        <p>Author Demetrious Polychron accused Amazon and the Tolkien estate of copyright infringement of his Lord of the Rings-inspired book. His lawsuit backfired and now he owes $134,000 (€122,000).</p>
                        <p>US-based author Demetrious Polychron thought he was being proactive when he sued the Tolkien estate and Amazon for copyright infringement.</p>
                        <p>Polychron is the author of a fanfiction novel called ‘The Fellowship of the King,’ what he called a “picture-perfect” sequel to the Lord of the Rings franchise, and the first in a seven-part series of books.</p>
                        <p>In April, the author attempted to sue the Tolkien estate and Amazon, claiming that ‘Rings of Power’ stole ideas from his book and demanding $250 million (€228 million) in compensation.</p>
                        <p>According to court documents, Polychron had sent Simon Tolkien, director of the Tolkien estate and grandson of Lord of the Rings author JRR Tolkien, a manuscript of his book long before it was published. He asked to collaborate with the Tolkien Estate on the sequel, but received no response.</p>
                        <p>Polychron published ‘The Fellowship of the King’ independently in September 2022, around the same time the TV series ‘The Lord of the Rings: The Rings of Power’ premiered on Amazon Prime Video.</p>
                        <p>His case was dismissed by a US court in August, with the judge describing the lawsuit as “frivolous and unreasonably filed,” considering Polychron had clearly presented his work as a sequel to The Lord of the Rings.</p>
                        <img src="../Image/news4.1.jpg" alt="The Fellowship of the King">
                        <p>Last week, a California judge ruled against Polychron once again, in a countersuit filed by the Tolkien Estate.</p>
                        <p>Tolkien estate's lawsuit claims that the book copied plot points and even lifted some phrases verbatim from Tolkien's trilogy. </p>
                        <p>‘The Fellowship of the King’ takes place two decades after the end of the Lord of the Rings series and features characters from Tolkien’s trilogy including Samwise Gamgee, Aragorn and Legolas, according to the lawsuit.</p>
                        <p>The court ordered the fanfiction author to destroy all physical and digital copies of ‘The Fellowship of the King’ and granted a permanent injunction to prevent him from selling or keeping any of his stories. Polychron was also ordered to pay $134,000 (€122,000) worth of legal fees to the Tolkien Estate and Amazon. </p>
                        <p>The Tolkien estate’s lawyers hailed the decision as a victory for intellectual property.</p>
                        <p>"This is an important success for the Tolkien Estate, which will not permit unauthorised authors and publishers to monetise JRR Tolkien's much-loved works in this way," attorney Steven Maier said.</p>
                        <p>"This case involved a serious infringement of The Lord of the Rings copyright, undertaken on a commercial basis, and the estate hopes that the award of a permanent injunction and attorneys' fees will be sufficient to dissuade others who may have similar intentions."</p>
                    </div>
                </div>
            </div>

            <div id="event">

                <h1>Event Happening Soon!</h1>

                <div class="eventcontainer">
                    <button class="eventhead">Annual Meeting Of Club Members 2024!</button>
                    <div class="eventdetails">
                        <p>Our 4th Anniversary & Also 4th Annual Club meeting is happening this July 8th, 2024!</p>
                        <p>Location: Los Angeles, California, USA</p>
                        <p>Join us and many fellow enthusiast from all over the globe to celebrate our anniversary! Don't forget about the chance to meetup with renowned authors of some of the best sellers!</p>
                    </div>
                </div>

                <div class="eventcontainer">
                    <button class="eventhead">Month Wide Open Book Selection Chance!</button>
                    <div class="eventdetails">
                        <p>From March 15th, 2024 to April 15th,2024, our dear members can have a chance to select any book of their liking!</p>
                        <p>Requirement: you have to be a member, so <a href="../PHP File/signup.php">Join Us</a> if you are not still a member!</p>
                        <p>Members can select upto 3 book of their choices, so select them wisely!</p>
                    </div>
                </div>

                <div class="eventcontainer">
                    <button class="eventhead">Annual Price Giving Ceremony 2023!</button>
                    <div class="eventdetails">
                        <p>This 22nd December 2023, Our Annual Price giving Ceremony will be held!</p>
                        <p>A zoom meeting will be held for this ceremony and various price will be given out to our dear members.</p>
                        <p>We added 'Best Reviewer of The Year' alongside with the 'Best Reader' & 'Best Contirbuter' from previous years. Good luck to everyone!</p>
                    </div>

                    <div class="eventcontainer">
                    <button class="eventhead">Review Contest 2023!</button>
                    <div class="eventdetails">
                        <p>We are going to hold our first review contest this august 25th, 2023!</p>
                        <p>All members can choose and give reviews on their favourite books. Review doesn't have any word limitation, the sky is the limit!</p>
                        <p>First 3 best reviews will be choosen for prize! The winners will get special discount in their future purchase. Not only that, winners will also get a hard copy of their choosen book signed by the author(if possible!). Happy Reviewing!</p>
                    </div>
                </div>

            </div>
        </div>

    </main>

    <script>

        const welcomebanner = document.getElementById("welcomebanner");

        const dayname = ["Sunday" , "Monday" , "Tuesday" , "Wednesday" , "Thursday" , "Friday" , "Saturday"];

        const timeshow = document.createElement("p");
        const dateshow = document.createElement("p");

        timeshow.className = "timeshow";
        dateshow.className = "dateshow";

        function clockrun () {

            const date = new Date();
            let hour = date.getHours();
            let minute = date.getMinutes();
            let second = date.getSeconds();
            let day = date.getDay();
            let meridian = hour >= 12 && hour <= 23 ? "PM" : "AM";

            if (hour == 0) {
                hour = 12;
            } else if (hour >= 13 && hour <= 23) {
                hour -= 12;
            } else {
                hour = hour;
            }

            timeshow.textContent = `${hour.toString().padStart(2 , 0)} : ${minute.toString().padStart(2 , 0)} : ${second.toString().padStart(2 , 0)} ${meridian}`;

            dateshow.textContent = `A Happy ${dayname[day]} to You!`;
        }

        welcomebanner.appendChild(timeshow);
        welcomebanner.appendChild(dateshow);

        window.onload = clockrun();

        setInterval(clockrun , 1000);

        const eventhead = document.querySelectorAll(".eventhead");

        eventhead.forEach((event) => {
            event.addEventListener("focus" , () => {
                event.nextElementSibling.style.display = "block";
            })
            event.addEventListener("blur" , () => {
                event.nextElementSibling.style.display = "none";
            })
        })

        const bloghead = document.querySelectorAll(".bloghead");

        bloghead.forEach((blog) => {
            blog.addEventListener("focus" , () => {
                blog.nextElementSibling.style.display = "block";
            })
            blog.addEventListener("blur" , () => {
                blog.nextElementSibling.style.display = "none";
            })
        })
        
    </script>
</body>
</html>

<?php
    include("../HTML File/footer.html");
?>