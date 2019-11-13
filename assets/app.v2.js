$().ready(function () {

    // Set Date

    $(".dt-today").text(getDate());

    // View More Stories...
    var isLast = false;
    $(".btn-v-m").click(function () {
        if (!isLast) {
            $.ajax({
                url: '/api/MoreStories?c=' + window.c + '&l=' + window.l,
                type: "GET",
                success: function (news) {
                    $.each(news.n, function (i, nws) {
                        //var newsHtml = "<tr><td width='35%'><img src='" + nws.CoverImage + "?width=480'></td>";
                        //newsHtml += "<td><h4><a href='" + nws.Url + "'>" + nws.Title + " </a> </h4> ";
                        //newsHtml += "<p>" + nws.Desc + " </p> ";
                        //newsHtml += "<div class='news-info'> <label><i class='fa fa-calendar'></i> " + nws.DatePublished + " </label> ";
                        //newsHtml += "<a href='" + nws.Url + "' class='home-news-rm'> READ MORE<i class='fa fa-arrow-right'></i></a>";
                        //newsHtml += "</div></td></tr>";


                        var newsHtml = "<div class='col-xs-12 col-sm-6 col-md-6 news-list-item'>";
                        newsHtml += "<a href='" + nws.Url + "' title='" + nws.Title + "'>";
                        newsHtml += "<img src='/asset/media/" + nws.Id + "/big' alt='" + nws.Title + "'/> </a>";

                        newsHtml += "<h4 title='" + nws.Title + "'>";
                        newsHtml += "<a href='" + nws.Url + "' title='" + nws.Title + "'>";
                        newsHtml += nws.Title + " </a> </h4>";

                        newsHtml += "</div>"


                        $(".news-list").append(newsHtml);

                        if (news.isLast) {
                            isLast = true;
                            $(".btn-v-m").hide();
                        }


                    });

                    window.l = news.n[news.n.length - 1].Id;
                }
            });
        }
    });

    /* Newsletter */
    $(".n-l-bx label,.footer-nl label").hide();
    $(".n-l-bx button").click(function () {
        $(".n-l-bx label").hide().text("");

        var email = $(".n-l-bx input").val();
        if (email) {

            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {

                $.ajax({
                    url: "https://api.krishijagran.com/api/SubscribeEmail",
                    type: "POST",
                    data: {
                        email: email,
                        lang: "english"
                    },
                    success: function (data) {
                        $(".n-l-bx label").text("Thank you for subscribing to our newsletter").show().addClass("ok").fadeOut(4000);
                        $(".n-l-bx input").val("");
                    },
                    error: function (reason) {
                        $(".n-l-bx label").text("Error saving your email. Please try again").show().addClass("error");
                    }
                });

            }
            else {
                $(".n-l-bx label").text("Enter your valid email").show().addClass("error");
            }
        }

        else {
            $(".n-l-bx label").text("Enter your email").show().addClass("error");
        }

    });

    // Newsletter on Footer

    $(".footer-nl button").click(function () {
        $(".footer-nl label").hide().text("");

        var email = $(".footer-nl input").val();
        if (email) {

            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {

                $.ajax({
                    url: "https://api.krishijagran.com/api/SubscribeEmail",
                    type: "POST",
                    data: {
                        email: email,
                        lang: "english"
                    },
                    success: function (data) {
                        $(".footer-nl label").text("Thank you for subscribing to our newsletter").show().addClass("ok").fadeOut(4000);
                        $(".footer-nl input").val("");
                    },
                    error: function (reason) {
                        $(".footer-nl label").text("Error saving your email. Please try again").show().addClass("error");
                    }
                });

            }
            else {
                $(".footer-nl label").text("Enter your valid email").show().addClass("error");
            }
        }

        else {
            $(".footer-nl label").text("Enter your email").show().addClass("error");
        }
    });



    function getDate() {
        var days = [
            "Sunday",
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday"
        ];

        var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];


        var date = new Date();

        console.log(date);

        var dayName = days[date.getDay()];
        var monthName = monthNames[date.getMonth()];
        return dayName + ", " + monthName + " " + date.getDate() + ", " + date.getFullYear();

    }

    new jQueryCollapse($("#kj-collapse"), {
        open: function () {
            this.slideDown(150);
        },
        close: function () {
            this.slideUp(150);
        }
    });

    $(".album-slides").owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items: 1,
        autoplay: true,
        loop: true,
        nav: true,
        dots: false,
        dotsEach: false,
        navText: ['<i class="glyphicon glyphicon-menu-left"></i>', '<i class="glyphicon glyphicon-menu-right"></i>'],
        //responsive: true,

        //autoWidth: true,
        //autoHeight: true,

        lazyLoad: true,
        autoplayHoverPause: true
    });


    //$(".btn-search").click(function () {
    //    $(".search-form").fadeToggle(500);
    //});
});

// Register Biz Module
 $(document).ready(function () {



            var html = $("#contactItem").html();
            $(".contact-list").html(html);
            // Remove first DEL button

            $(".contact-list li").first().find(".del-contact").remove();

            registerEvents();

            $("#btnAddNewContact").click(function () {

                $("#lblAlert").hide(); // Hide the alert box initially

                if (isOk()) {
                    var html = $("#contactItem").html();
                    $(".contact-list").append(html);

                    registerEvents();
                }
                else {
                    $("#lblAlert").fadeIn("slow");
                    $("#lblAlert span").text("Please enter required information to add new contact.")
                }
            })


            $(".btn-register").click(function () {

                $("#lblAlert").hide();

                if (isDetailOk()) {

                    if (isOk()) {

                        // Prepare Payload


                        // Get contacts List
                        var contacts = [];

                        $.each($("ul.contact-list li"), function (i, contact) {

                            var cType = $(contact).find(".ctype").val();
                            var state = $(contact).find(".state").val();
                            var dist = $(contact).find(".dist").val();
                            var city = $(contact).find(".city").val();
                            var pincode = $(contact).find(".pinode").val();
                            var phone = $(contact).find(".phone").val();
                            var address = $(contact).find(".addr").val();

                            contacts.push({
                                ctype: cType,
                                state: state,
                                dist: dist,
                                city: city,
                                pincode: pincode,
                                phone: phone,
                                address: address
                            })
                        })

                        var companyInfo = {
                            bName: $("#bName").val(),
                            bWebsiteUrl: $("#bWebsiteUrl").val(),
                            bEmail: $("#bEmail").val(),
                            bContactName: $("#bContactName").val(),
                            bType: $("#bType").val(),
                            bCategory: $("#bCategory").val(),
                            products: $("#products").val(),
                            shortInfo: $("#shortInfo").val(),
                            contacts: contacts
                        }

                        console.log(companyInfo);
                      //  return;
                        $.ajax({
                            url: "/b2b/register",
                            type: "POST",
                            data: companyInfo,
                            success: function (data) {

                                if (data == "OK") {
                                    window.location.replace("/b2b/registerok");
                                }
                                else {
                                    $("#lblAlert").fadeIn("slow");
                                    $("#lblAlert span").text(data)
                                }
                            }
                        })

                    }
                    else {
                        $("#lblAlert").fadeIn("slow");
                        $("#lblAlert span").text("Please enter proper contact information.")
                    }

                }
                else {
                    $("#lblAlert").fadeIn("slow");
                    $("#lblAlert span").text("Please enter required company information.")

                }

            });



            function registerEvents() {
                $(".del-contact").off("click").on("click", function () {

                    var contactsCount = $(".contact-list li").length

                    if (contactsCount > 1) {
                        $(this).parent().parent().remove();
                    }

                })

                $(".state").on("change", function () {
                    var stateEl = $(this);

                    console.log(stateEl.html());

                    $.ajax({
                        url: "http://api.krishijagran.com/api/GetDistricts?id=" + $(this).val(),
                        type: "POST",
                        success: function (data) {
                            var districtUi = stateEl.parent().parent().parent().find(".dist");

                            if (data) {


                                districtUi.empty();
                                districtUi.append($('<option>', {
                                    text: "Select district",
                                    value: "-1",
                                    disabled: true,
                                    selected: true
                                }));

                                $.each(data, function (i, dist) {

                                    districtUi.append($('<option>', {
                                        text: dist.District,
                                        value: dist.RefId
                                    }));

                                });
                            }

                        }
                    })

                })
            }

            function isOk() {

                var lastContact = $(".contact-list li").last();

                // Get contact information on last item and check if all entries made are OK

                var cType = lastContact.find(".ctype").val();
                var state = lastContact.find(".state").val();
                var dist = lastContact.find(".dist").val();
                var city = lastContact.find(".city").val();
                var pincode = lastContact.find(".pinode").val();
                var phone = lastContact.find(".phone").val();
                var address = lastContact.find(".addr").val();

                var data = {

                    ctype: cType,
                    state: state,
                    dist: dist,
                    city: city,
                    pincode: pincode,
                    phone: phone,
                    address: address
                }

                console.log(data);

                if (!cType || !state || !dist || !pincode || !phone || !address) {

                    return false;
                }

                return true;
            }

            function isDetailOk() {

                var bName = $("#bName").val();
                var bContactName = $("#bContactName").val();
                var bType = $("#bType").val();
                var bCategory = $("#bCategory").val();
                var products = $("#products").val();

                var data = {
                    name: bName,
                    cName: bContactName,
                    type: bType,
                    bcat: bCategory,
                    prod: products
                }

                //console.log(data);

                if (!bName || !bContactName || !bType || !bCategory || !products) {
                    return false;
                }

                return true;
            }

        });