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
</head>
<body id="home">

    <main>

        <div id="currentlyread">
            <h1>Books Currently Being Read!</h1>

            <div id="imgdiv"></div>
        </div>

        <div id="booksearch">
            <h1>Find Book Here!</h1>
            <input type="text" id="searchbook" placeholder="Enter Book or Author Name!">
            <button id="findbook">Search!</button>
        </div>

        <div id="stored"></div>
    </main>

    <script>

        const findbook = document.getElementById("findbook");
        const searchbook = document.getElementById("searchbook");
        const booksearch = document.getElementById("booksearch");
        const stored = document.getElementById("stored");

        findbook.addEventListener("click" , () => {
            if (searchbook.value == "") {
                errorshow.textContent = "Search Bar Can't Be Empty!";
                booksearch.appendChild(errorshow);
            } else {
                fetch("https://openlibrary.org/search.json?q="+searchbook.value)
                .then(response =>{
                    if (!response.ok) {
                        throw new Error(error)
                    }
                    return response.json();
                })
                .then(value => {
        
                    stored.innerHTML = "";
                    stored.style.display = "block";

                    for(let i = 0 ; i < 20 ; i++) {

                        let showbook = document.createElement("div");
                        let bookimg = document.createElement("img");
                        let title = document.createElement("h1");
                        let authorName = document.createElement("h3");
                        let publishYear = document.createElement("p");

                        showbook.classList.add("showbook");
                        bookimg.classList.add("boookimg");
                        title.classList.add("title");
                        authorName.classList.add("authorname");
                        publishYear.classList.add("publishyear");
                        
                        if(value.docs[i].cover_i) {
                            bookimg.src = `https://covers.openlibrary.org/b/id/${value.docs[i].cover_i}-M.jpg`;
                        } else if(value.docs[i].isbn){
                            bookimg.src = `https://covers.openlibrary.org/b/isbn/${value.docs[i].isbn[0]}-M.jpg`;
                        } else {
                            continue;
                        }

                        title.textContent = value.docs[i].title;

                        for(let j = 0 ; j < value.docs[i].author_name.length ; j++) {
                            authorName.textContent += value.docs[i].author_name[j] + " ";
                        };
                        publishYear.textContent = value.docs[i].first_publish_year;

                        showbook.appendChild(bookimg);
                        showbook.appendChild(title);
                        showbook.appendChild(authorName);
                        showbook.appendChild(publishYear);

                        stored.appendChild(showbook);

                    }
                })
                .catch(error => {
                    errorshow.textContent = "Could Not Fetch Data Of Searched Book/Author!";
                    booksearch.appendChild(errorshow);
                })
            }
        })
        
        const curretlyRead = document.getElementById("currentlyread");
        const imgdiv = document.getElementById("imgdiv");
        const errorshow = document.createElement("p");
        errorshow.classList.add("error");

        window.addEventListener("load", () => {

            let index = 0;
            let imgslide = [];

            function fetchData() {
                fetch("https://openlibrary.org/people/mekBot/books/currently-reading.json")
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(error)
                        }
                        return response.json();
                    })
                    .then(value => {
                        imgslide = value.reading_log_entries;
                        index = 0;
                        updateImage();
                        setInterval(updateImage, 8000);
                    })
                    .catch(error => {
                        errorshow.textContent = `Could Not Fetch Data Of Books Currently Being Read!`;
                        curretlyRead.appendChild(errorshow);
                        // Have to Remove The imgslide part, but how?
                    })
            }

            function updateImage() {
                if (imgslide.length > 0) {
                    imgdiv.innerHTML = "";

                    let imgstore = document.createElement("img");
                    imgstore.classList.add("imgslide");
                    imgstore.src = `https://covers.openlibrary.org/b/id/${imgslide[index].work.cover_id}-L.jpg`;
                    imgdiv.appendChild(imgstore);

                    index = (index + 1) % imgslide.length;
                }
            }

            fetchData();
        });

    </script>
</body>
</html>