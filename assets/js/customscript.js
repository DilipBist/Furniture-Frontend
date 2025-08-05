// JQuery 
$(function () {

    // Show and hide account detail
    $('#accountToggle').click(function (e) {
        e.preventDefault();
        $('.account_hover_details').toggleClass('show');
    });


    // Input focus to show dropdown
    $('#searchInput').focus(function () {
        $('#searchDropdown').addClass('active');
    });

    // Blur to hide dropdown after short delay
    $('#searchInput').blur(function () {
        setTimeout(function () {
            $('#searchDropdown').removeClass('active');
        }, 200);
    });

    // Prevent dropdown from closing if clicked inside
    $('#searchDropdown').on('mousedown', function (e) {
        e.preventDefault();
    });

    // show and hide dropdown on click on below xl(1200px)
    $(".navbar .navbar-nav .nav-item .nav-link").click(function (e) {
        e.preventDefault();

        const $clickedLink = $(this);
        const $dropdown = $clickedLink.next(".hover_dropdown_container");
        const $icon = $clickedLink.find("i");

        // Close other dropdowns and reset icons
        $(".hover_dropdown_container").not($dropdown).removeClass("show");
        $(".nav-link i").not($icon).removeClass("ri-subtract-line").addClass("ri-add-line");

        // Toggle current dropdown
        $dropdown.toggleClass("show");

        // Toggle icon class
        if ($dropdown.hasClass("show")) {
            $icon.removeClass("ri-add-line").addClass("ri-subtract-line");
        } else {
            $icon.removeClass("ri-subtract-line").addClass("ri-add-line");
        }
    });

    //  Click outside to close
    $(document).click(function (e) {
        // Close account detail if clicked outside
        if (!$(e.target).closest('.account_show').length) {
            $('.account_hover_details').removeClass('show');
        }

        // Close nav dropdowns if clicked outside
        if (!$(e.target).closest('.nav-item').length) {
            $(".hover_dropdown_container").removeClass("show");
            $(".nav-link i").removeClass("ri-subtract-line").addClass("ri-add-line");
        }
    });


    // scroll top top btn and navbar fixed on scroll 
    const $scrollTopBtn = $('#Scroll_top');
    const $navbar = $('#fixed_nav');
    let lastScrollTop = 0;

    $(window).on('scroll', function () {
        const scrollTop = $(this).scrollTop();
        const docHeight = $(document).height() - $(window).height();
        const scrolledPercent = (scrollTop / docHeight) * 100;

        if (scrollTop > 160) {
            $navbar.addClass('fixed');

            // Detect scroll direction
            if (scrollTop > lastScrollTop) {
                // Scrolling down
                $navbar.addClass('nav-hidden');
            } else {
                // Scrolling up
                $navbar.removeClass('nav-hidden');
            }

            $scrollTopBtn.addClass('show');
        } else {
            $navbar.removeClass('fixed nav-hidden');
            $scrollTopBtn.removeClass('show');
        }

        lastScrollTop = scrollTop;

        // Update progress ring
        $scrollTopBtn.css('--bg', `conic-gradient(var(--primary-color) ${scrolledPercent}%, #ccc ${scrolledPercent}%)`);
    });


    // Scroll to top on click
    $scrollTopBtn.on('click', function () {
        $('html, body').animate({ scrollTop: 0 }, 'smooth');
    });


    // show hide product show case 
    const $firstToggle = $('.toggle_product').first();
    const $firstProduct = $firstToggle.next('.click_product');
    $firstProduct.show(); // Show the first product
    $firstToggle.removeClass('ri-add-line').addClass('ri-close-line');
    $('.toggle_product').click(function () {
        const $icon = $(this);
        const $clickProduct = $icon.next('.click_product');

        // Close all other product sections
        $('.click_product').not($clickProduct).slideUp(200);
        $('.toggle_product').not($icon).removeClass('ri-close-line').addClass('ri-add-line');

        $clickProduct.slideToggle(200);
        $icon.toggleClass('ri-add-line ri-close-line');
    });

    // magnific pop up 
    $('.popup-video').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    // whislist fill 
    $('.wislist_tag').on('click', function () {
        const icon = $(this).find('i');
        icon.toggleClass('ri-heart-line ri-heart-fill');
    });

    // wishlist radio 
    $('.tag_radio').on('click', function () {
        $(this).toggleClass('active');
    });


    // product number increase and decrease btns 
    $('.quantity_input').each(function () {
        var $wrapper = $(this);
        var $input = $wrapper.find('input[type="number"]');
        var $incrementBtn = $wrapper.find('.increment');
        var $decrementBtn = $wrapper.find('.decrement');

        $incrementBtn.on('click', function () {
            var currentVal = parseInt($input.val()) || 1;
            $input.val(currentVal + 1);
        });

        $decrementBtn.on('click', function () {
            var currentVal = parseInt($input.val()) || 1;
            if (currentVal > 1) {
                $input.val(currentVal - 1);
            }
        });

        // force minimum value on manual input
        $input.on('input', function () {
            var val = parseInt($input.val());
            if (isNaN(val) || val < 1) {
                $input.val(1);
            }
        });
    });


    // toggle password on click 
    $('.show_hide_password').on('click', function () {
        const $btn = $(this);
        const $passwordInput = $btn.siblings('input.password');
        // Toggle the input type
        const type = $passwordInput.attr('type') === 'password' ? 'text' : 'password';
        $passwordInput.attr('type', type);
        // Toggle button text
        $btn.text(type === 'password' ? 'Show' : 'Hide');
    });


    // toggle edit(account personal info) 
    $("#editToggleBtn").click(function () {
        const $editSection = $("#editSection");
        const $displayName = $("#displayName");
        const $editBtnText = $("#editBtnText");

        if ($editSection.hasClass("d-none")) {
            $editSection.removeClass("d-none");
            $editSection.addClass("d-flex");
            $displayName.hide();
            $editBtnText.text("Cancel");
        } else {
            $editSection.addClass("d-none");
            $displayName.show();
            $editBtnText.text("Edit");
        }
    });

    // toggle password edit (account personal info)
    $("#passwordEdit").click(function () {
        const $edit_form_password = $(".edit_form_password");
        const $displayPassword = $("#displayPassword");
        const $passwordEditText = $("#passwordEditText");

        if ($edit_form_password.hasClass("d-none")) {
            $edit_form_password.removeClass("d-none").addClass("d-flex");
            $displayPassword.hide();
            $passwordEditText.text("Cancel");
        } else {
            $edit_form_password.addClass("d-none").removeClass("d-flex");
            $displayPassword.show();
            $passwordEditText.text("Edit");
        }
    });


    // review tabs button filter 
    $('.tab-button').click(function () {
        const target = $(this).data('tab');

        // Toggle button active state
        $('.tab-button').removeClass('active');
        $(this).addClass('active');

        // Show the correct tab content
        $('.tab-content').removeClass('active');
        $(`.tab-content[data-content="${target}"]`).addClass('active').show();
    });




});


// swiper slides 
// nav link slider 
var NavFetProducts = new Swiper(".NavFetProducts", {
    pagination: {
        el: ".swiper-pagination",
    },
});

// latest arrival slider 
var LatestArrivalMain = new Swiper(".LatestArrivalMain", {
    pagination: {
        el: ".swiper-latestpagination",
        type: "progressbar",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        576: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
    },

});

// Initialize all pairs of mySwiperDots  and mySwiperInnerImage
document.querySelectorAll('.LatestArrivalMain .swiper-slide').forEach((slide) => {
    const thumbs = slide.querySelector('.mySwiperDots');
    const main = slide.querySelector('.mySwiperInnerImage');

    if (thumbs && main) {
        const thumbsSwiper = new Swiper(thumbs, {
            spaceBetween: 10,
            slidesPerView: 3,
            freeMode: true,
            watchSlidesProgress: true,
        });

        const mainSwiper = new Swiper(main, {
            spaceBetween: 10,
            navigation: {
                nextEl: main.querySelector(".mySwiperInnerImage .swiper-button-next"),
                prevEl: main.querySelector(".mySwiperInnerImage .swiper-button-prev"),
            },
            thumbs: {
                swiper: thumbsSwiper,
            },
        });
    }
});

// for new arrival page 
document.querySelectorAll('.product_filter_div .new_wrapper').forEach((container) => {
    const thumbsEl = container.querySelector('.mySwiperDots');
    const mainEl = container.querySelector('.mySwiperInnerImage');

    if (thumbsEl && mainEl) {
        const thumbsSwiper = new Swiper(thumbsEl, {
            spaceBetween: 10,
            slidesPerView: 3,
            freeMode: true,
            watchSlidesProgress: true,
        });

        const mainSwiper = new Swiper(mainEl, {
            spaceBetween: 10,
            loop: true,
            navigation: {
                nextEl: mainEl.querySelector('.swiper-button-next'),
                prevEl: mainEl.querySelector('.swiper-button-prev'),
            },
            thumbs: {
                swiper: thumbsSwiper,
            },
        });
    }
});


// explore more slider 
var ExploreMore = new Swiper(".ExploreMore", {
    pagination: {
        el: ".swiper-latestpagination",
        type: "progressbar",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        576: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },
});

// client review slider 
var mySwiperClient = new Swiper(".mySwiperClient", {
    pagination: {
        el: ".swiper-latestpagination",
        type: "progressbar",
    },
    navigation: {
        nextEl: ".client_slider_btns .custom-next",
        prevEl: ".client_slider_btns .custom-prev",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
    },
});

// individul proudct slider 
var mySwiperIndividulaProduct = new Swiper(".mySwiperIndividulaProduct", {
    freeMode: true,
    watchSlidesProgress: true,
    // direction: " horizontal",
    slidesPerView: 4,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    watchSlidesProgress: true,
    breakpoints: {
        992: {
            direction: "vertical",
            slidesPerView: 5,
            spaceBetween: 10,
        }
    }

});

var mySwiperIndividulaProduct2 = new Swiper(".mySwiperIndividulaProduct2", {
    spaceBetween: 10,

    thumbs: {
        swiper: mySwiperIndividulaProduct,
    },
});