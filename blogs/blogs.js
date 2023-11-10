document.addEventListener('DOMContentLoaded', function () {
    let isLiked = localStorage.getItem('isLiked') === 'true';
    let likeCount = parseInt(localStorage.getItem('likeCount')) || 46;

    function updateLike() {
        const likeIcon = document.getElementById('likeIcon');
        const likeCountElement = document.getElementById('likeCount');

        likeCountElement.textContent = likeCount;
        likeIcon.classList.toggle('liked', isLiked);
    }

    window.toggleLike = function () {
        isLiked = !isLiked;
        likeCount = isLiked ? likeCount + 1 : Math.max(0, likeCount + 1);

        // Store like count and state in local storage
        localStorage.setItem('likeCount', likeCount);
        localStorage.setItem('isLiked', isLiked);

        // Update the like display
        updateLike();
    };

    // Initial update
    updateLike();
});


// Path: blogs/blogs.js
var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
(function () {
    var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/652d7fb96fcfe87d54ba5584/1hct0ksqc';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();

$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    nav: true,
    autoplay: true,
    smartSpeed: 3000,
    autoplayTimeout: 7000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('#backToTop').addClass('active');
        } else {
            $('#backToTop').removeClass('active');
        }
    });
    $('#backToTop').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});

function loadShapesContent() {
    fetch('../shapes.html')
        .then(response => response.text())
        .then(data => {
            const shapesContainer = document.getElementById('shapes-container');
            shapesContainer.innerHTML = data;
        })
        .catch(error => {
            console.error('Error loading shapes content:', error);
        });
}

loadShapesContent()


//archieved 
$(document).ready(function () {
    var currentYear = 2023;
    var currentMonth = 9; // October (zero-based)

    // Array of month names
    var monthNames = [
        "January", "February", "March", "April",
        "May", "June", "July", "August",
        "September", "October", "November", "December"
    ];

    // Function to get the number of days in a month
    function daysInMonth(year, month) {
        return new Date(year, month + 1, 0).getDate();
    }

    // Function to update the calendar for a given year and month
    function updateCalendar(year, month) {
        $("#selectedMonthYear").text(monthNames[month] + " " + year);

        $("#calendarBody").empty(); // Clear existing content

        var firstDay = new Date(year, month, 1).getDay();
        var totalDays = daysInMonth(year, month);

        var dayCount = 1;

        // Add rows for the specified year and month
        for (var i = 0; i < 6; i++) {
            var tableRow = "<tr>";
            for (var j = 0; j < 7; j++) {
                var dayIndex = i * 7 + j;
                if (dayIndex < firstDay || dayCount > totalDays || (year !== currentYear || month !== currentMonth)) {
                    // Don't show empty cells before the first day, after the last day, or for other months
                    tableRow += "<td></td>";
                } else {
                    // Cells with the actual date and link to archived blog posts
                    var dayLink = getBlogPostLink(year, month, dayCount);
                    var cellClass = hasArchivedBlogPosts(year, month, dayCount) ? 'has-posts' : 'no-posts';
                    tableRow += "<td class='" + cellClass + "'>" + dayLink + "</td>";
                    dayCount++;
                }
            }
            tableRow += "</tr>";
            $("#calendarBody").append(tableRow);
        }
    }


    // Function to check if there are archived blog posts for a given date (placeholder logic)
    function hasArchivedBlogPosts(year, month, day) {
        // For demonstration purposes, assume every even day in October 2023 has archived posts
        return year === 2023 && month === 9 && day % 2 === 0;
    }

    // Function to get the blog post link for a given date
    function getBlogPostLink(year, month, day) {
        // Replace this array with actual data fetching from your server
        var blogPostData = [
            { year: 2023, month: 9, day: 15, url: "post-2023-10-15.html" },
            { year: 2023, month: 9, day: 5, url: "post-2023-10-05.html" },
            { year: 2023, month: 9, day: 20, url: "post-2023-10-20.html" },
            { year: 2023, month: 9, day: 8, url: "post-2023-10-08.html" },
            { year: 2023, month: 9, day: 25, url: "post-2023-10-25.html" },
            { year: 2023, month: 9, day: 12, url: "post-2023-10-12.html" },
            // Add more blog post data as needed
        ];

        // Find the corresponding blog post data
        var postData = blogPostData.find(post => post.year === year && post.month === month && post.day === day);

        // Return the link or a placeholder if not found
        return postData ? '<a href="' + postData.url + '">' + day + '</a>' : day;
    }

    // Initial load for October 2023
    updateCalendar(currentYear, currentMonth);

    // Event handler for previous month button
    $("#prevMonth").click(function (e) {
        e.preventDefault();
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11; // December
            currentYear--;
        }
        updateCalendar(currentYear, currentMonth);
    });

    // Event handler for next month button
    $("#nextMonth").click(function (e) {
        e.preventDefault();
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0; // January
            currentYear++;
        }
        updateCalendar(currentYear, currentMonth);
    });
});