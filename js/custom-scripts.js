jQuery(document).ready(function($){
    /* Add random images functionality to slider */

    var sliderLength = $(
        '.randomize-slides .n2-ss-slide-backgrounds > div'
    ).length;
    var randomSlider = Math.floor(Math.random() * sliderLength);
    var sliderTransformStyle =
        'matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -100000, 0, 0, 1)';

    $('.randomize-slides .n2-ss-slide-backgrounds > div').each(function () {
        $(this).css('transform', sliderTransformStyle);
    });

    console.log(randomSlider);

    jQuery(window).on('load', function () {
        setTimeout(function () {
            $('.randomize-slides .n2-ss-slide-backgrounds > div')
                .eq(randomSlider)
                .css('transform', 'initial');
        }, 1000);
    });

    /* End */

    /* Script to hide all newsletters except for the latest year */

    var firstIteration = true;

    $('.newsletter-inner > .nsbf-newsletter').each(function () {
        if (firstIteration) {
            firstIteration = false;
        } else {
            $(this).hide();
        }
    });

    /* Show newsletters by the year that is clicked */

    $('.newsletter-inner .newsletter-header').click(function () {
        $('.nsbf-newsletter').hide();
        $('.newsletter-header').css('background', '#f0f0f0');
        $('.newsletter-header > *').css('color', '#006b94');

        $(this).next().show();
        $(this).css('background', '#dba510');
        $('*', this).css('color', '#fff');

        $('html, body').animate(
            {
                scrollTop: $(this).offset().top - 130,
            },
            1000
        );
    });

    /* End */

    /* Show error message of MemberPress if user "Set Password" has expired */

    if ($('#mepr_jump')[0] && $('.mepr_error')[0]) {
        $('#link-expired').show();
    }

    /* End */

    /**
     * Secondary menu is assigning colors to tab backgrounds
     * The next two scripts addresses the issue
     * 
     * First adds a classname to the last item
     * Second resets the color pattern for all the secondary buttons
     */

    // Select the last <li> element within the specified parent element
    var lastLi = document.querySelector(
        '#header-secondary-outer nav ul.sf-menu li:last-child'
    );

    // Add the required classes to the last <li> element
    lastLi.classList.add('secondary-nav-button');

    /**
     * Resets colors for each of the buttons
     * Using ForEach loop
     */
    // Define the array of classes to cycle through
    var buttonClasses = [
        'gold-button',
        'rust-button',
        'green-button',
        'blue-button',
    ];

    // Select all <li> elements within the specified parent
    var lis = document.querySelectorAll(
        '#header-secondary-outer nav ul.sf-menu li'
    );

    // Loop through the <li> elements and assign classes from the array in order
    lis.forEach(function (li, index) {
        // Remove any existing color-button classes
        buttonClasses.forEach(function (className) {
            li.classList.remove(className);
        });

        // Add the next class in the array, cycling back to the start if necessary
        var classToAdd =
            buttonClasses[index % buttonClasses.length];
        li.classList.add(classToAdd);
    });
});