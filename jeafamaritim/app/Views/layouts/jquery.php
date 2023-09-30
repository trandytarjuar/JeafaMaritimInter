<script>
    // function readmore() {
    //     var pNews = document.getElementById('p_news');
    //     var expanded = button.getAttribute('data-expanded') === 'true';

    //     if (expanded) {
    //         // Collapse the text
    //         pNews.classList.add('read-more-content');
    //         button.innerText = 'Read more';
    //     } else {
    //         // Expand the text
    //         pNews.classList.remove('read-more-content');
    //         button.innerText = 'Read less';
    //     }

    //     // Toggle the expanded state
    //     button.setAttribute('data-expanded', !expanded);
    // }
    function toggleReadMore(button) {
    var pNews = document.getElementById('p_news');
    var expanded = button.getAttribute('data-expanded') === 'true';

    if (expanded) {
        // Collapse the text by setting the CSS properties
        pNews.style.whiteSpace = 'nowrap';
        pNews.style.overflow = 'hidden';
        pNews.style.textOverflow = 'ellipsis';
        pNews.style.width = '200px'; // Set the initial width as desired
        button.innerText = 'Read more';
    } else {
        // Expand the text by removing the CSS properties
        pNews.style.whiteSpace = 'normal';
        pNews.style.overflow = 'visible';
        pNews.style.textOverflow = 'clip';
        pNews.style.width = 'auto';
        button.innerText = 'Read less';
    }

    // Toggle the expanded state
    button.setAttribute('data-expanded', !expanded);
}
</script>