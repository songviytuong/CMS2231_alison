var absolute_url = window.location.protocol + '//' + window.location.hostname;
$.ajaxSetup({
    headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
    }
});
if (typeof Response == 'object') {
    Response.create({
        prop: "width",
        prefix: "min-width- r src",
        breakpoints: [1500, 1200, 1020, 760, 320, 0],
        lazy: true
    });
}! function(a) {
    "use strict";

    function b() {}

    function c() {
        try {
            return document.activeElement
        } catch (a) {}
    }

    function d(a, b) {
        for (var c = 0, d = a.length; d > c; c++)
            if (a[c] === b) return !0;
        return !1
    }

    function e(a, b, c) {
        return a.addEventListener ? a.addEventListener(b, c, !1) : a.attachEvent ? a.attachEvent("on" + b, c) : void 0
    }

    function f(a, b) {
        var c;
        a.createTextRange ? (c = a.createTextRange(), c.move("character", b), c.select()) : a.selectionStart && (a.focus(), a.setSelectionRange(b, b))
    }

    function g(a, b) {
        try {
            return a.type = b, !0
        } catch (c) {
            return !1
        }
    }

    function h(a, b) {
        if (a && a.getAttribute(B)) b(a);
        else
            for (var c, d = a ? a.getElementsByTagName("input") : N, e = a ? a.getElementsByTagName("textarea") : O, f = d ? d.length : 0, g = e ? e.length : 0, h = f + g, i = 0; h > i; i++) c = f > i ? d[i] : e[i - f], b(c)
    }

    function i(a) {
        h(a, k)
    }

    function j(a) {
        h(a, l)
    }

    function k(a, b) {
        var c = !!b && a.value !== b,
            d = a.value === a.getAttribute(B);
        if ((c || d) && "true" === a.getAttribute(C)) {
            a.removeAttribute(C), a.value = a.value.replace(a.getAttribute(B), ""), a.className = a.className.replace(A, "");
            var e = a.getAttribute(I);
            parseInt(e, 10) >= 0 && (a.setAttribute("maxLength", e), a.removeAttribute(I));
            var f = a.getAttribute(D);
            return f && (a.type = f), !0
        }
        return !1
    }

    function l(a) {
        var b = a.getAttribute(B);
        if ("" === a.value && b) {
            a.setAttribute(C, "true"), a.value = b, a.className += " " + z;
            var c = a.getAttribute(I);
            c || (a.setAttribute(I, a.maxLength), a.removeAttribute("maxLength"));
            var d = a.getAttribute(D);
            return d ? a.type = "text" : "password" === a.type && g(a, "text") && a.setAttribute(D, "password"), !0
        }
        return !1
    }

    function m(a) {
        return function() {
            P && a.value === a.getAttribute(B) && "true" === a.getAttribute(C) ? f(a, 0) : k(a)
        }
    }

    function n(a) {
        return function() {
            l(a)
        }
    }

    function o(a) {
        return function() {
            i(a)
        }
    }

    function p(a) {
        return function(b) {
            return v = a.value, "true" === a.getAttribute(C) && v === a.getAttribute(B) && d(x, b.keyCode) ? (b.preventDefault && b.preventDefault(), !1) : void 0
        }
    }

    function q(a) {
        return function() {
            k(a, v), "" === a.value && (a.blur(), f(a, 0))
        }
    }

    function r(a) {
        return function() {
            a === c() && a.value === a.getAttribute(B) && "true" === a.getAttribute(C) && f(a, 0)
        }
    }

    function s(a) {
        var b = a.form;
        b && "string" == typeof b && (b = document.getElementById(b), b.getAttribute(E) || (e(b, "submit", o(b)), b.setAttribute(E, "true"))), e(a, "focus", m(a)), e(a, "blur", n(a)), P && (e(a, "keydown", p(a)), e(a, "keyup", q(a)), e(a, "click", r(a))), a.setAttribute(F, "true"), a.setAttribute(B, T), (P || a !== c()) && l(a)
    }
    var t = document.createElement("input"),
        u = void 0 !== t.placeholder;
    if (a.Placeholders = {
            nativeSupport: u,
            disable: u ? b : i,
            enable: u ? b : j
        }, !u) {
        var v, w = ["text", "search", "url", "tel", "email", "password", "number", "textarea"],
            x = [27, 33, 34, 35, 36, 37, 38, 39, 40, 8, 46],
            y = "#ccc",
            z = "placeholdersjs",
            A = new RegExp("(?:^|\\s)" + z + "(?!\\S)"),
            B = "data-placeholder-value",
            C = "data-placeholder-active",
            D = "data-placeholder-type",
            E = "data-placeholder-submit",
            F = "data-placeholder-bound",
            G = "data-placeholder-focus",
            H = "data-placeholder-live",
            I = "data-placeholder-maxlength",
            J = 100,
            K = document.getElementsByTagName("head")[0],
            L = document.documentElement,
            M = a.Placeholders,
            N = document.getElementsByTagName("input"),
            O = document.getElementsByTagName("textarea"),
            P = "false" === L.getAttribute(G),
            Q = "false" !== L.getAttribute(H),
            R = document.createElement("style");
        R.type = "text/css";
        var S = document.createTextNode("." + z + " {color:" + y + ";}");
        R.styleSheet ? R.styleSheet.cssText = S.nodeValue : R.appendChild(S), K.insertBefore(R, K.firstChild);
        for (var T, U, V = 0, W = N.length + O.length; W > V; V++) U = V < N.length ? N[V] : O[V - N.length], T = U.attributes.placeholder, T && (T = T.nodeValue, T && d(w, U.type) && s(U));
        var X = setInterval(function() {
            for (var a = 0, b = N.length + O.length; b > a; a++) U = a < N.length ? N[a] : O[a - N.length], T = U.attributes.placeholder, T ? (T = T.nodeValue, T && d(w, U.type) && (U.getAttribute(F) || s(U), (T !== U.getAttribute(B) || "password" === U.type && !U.getAttribute(D)) && ("password" === U.type && !U.getAttribute(D) && g(U, "text") && U.setAttribute(D, "password"), U.value === U.getAttribute(B) && (U.value = T), U.setAttribute(B, T)))) : U.getAttribute(C) && (k(U), U.removeAttribute(B));
            Q || clearInterval(X)
        }, J);
        e(a, "beforeunload", function() {
            M.disable()
        })
    }
}(this);
(function(b, c) {
    var $ = b.jQuery || b.Cowboy || (b.Cowboy = {}),
        a;
    $.throttle = a = function(e, f, j, i) {
        var h, d = 0;
        if (typeof f !== "boolean") {
            i = j;
            j = f;
            f = c
        }

        function g() {
            var o = this,
                m = +new Date() - d,
                n = arguments;

            function l() {
                d = +new Date();
                j.apply(o, n)
            }

            function k() {
                h = c
            }
            if (i && !h) {
                l()
            }
            h && clearTimeout(h);
            if (i === c && m > e) {
                l()
            } else {
                if (f !== true) {
                    h = setTimeout(i ? k : l, i === c ? e - m : e)
                }
            }
        }
        if ($.guid) {
            g.guid = j.guid = j.guid || $.guid++
        }
        return g
    };
    $.debounce = function(d, e, f) {
        return f === c ? a(d, e, false) : a(d, f, e !== false)
    }
})(this);
$.ajaxSetup({
    headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
    }
});
(function($, sr) {
    var debounce = function(func, threshold, execAsap) {
        var timeout;
        return function debounced() {
            var obj = this,
                args = arguments;

            function delayed() {
                if (!execAsap)
                    func.apply(obj, args);
                timeout = null;
            };
            if (timeout)
                clearTimeout(timeout);
            else if (execAsap)
                func.apply(obj, args);
            timeout = setTimeout(delayed, threshold || 100);
        };
    }
    jQuery.fn[sr] = function(fn) {
        return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr);
    };
})(jQuery, 'smartresize');
! function(a) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery"], a) : "undefined" != typeof module && module.exports ? module.exports = a(require("jquery")) : a(jQuery)
}(function(a) {
    var b = -1,
        c = -1,
        d = function(a) {
            return parseFloat(a) || 0
        },
        e = function(b) {
            var c = 1,
                e = a(b),
                f = null,
                g = [];
            return e.each(function() {
                var b = a(this),
                    e = b.offset().top - d(b.css("margin-top")),
                    h = g.length > 0 ? g[g.length - 1] : null;
                null === h ? g.push(b) : Math.floor(Math.abs(f - e)) <= c ? g[g.length - 1] = h.add(b) : g.push(b), f = e
            }), g
        },
        f = function(b) {
            var c = {
                byRow: !0,
                property: "height",
                target: null,
                remove: !1
            };
            return "object" == typeof b ? a.extend(c, b) : ("boolean" == typeof b ? c.byRow = b : "remove" === b && (c.remove = !0), c)
        },
        g = a.fn.matchHeight = function(b) {
            var c = f(b);
            if (c.remove) {
                var d = this;
                return this.css(c.property, ""), a.each(g._groups, function(a, b) {
                    b.elements = b.elements.not(d)
                }), this
            }
            return this.length <= 1 && !c.target ? this : (g._groups.push({
                elements: this,
                options: c
            }), g._apply(this, c), this)
        };
    g.version = "master", g._groups = [], g._throttle = 80, g._maintainScroll = !1, g._beforeUpdate = null, g._afterUpdate = null, g._rows = e, g._parse = d, g._parseOptions = f, g._apply = function(b, c) {
        var h = f(c),
            i = a(b),
            j = [i],
            k = a(window).scrollTop(),
            l = a("html").outerHeight(!0),
            m = i.parents().filter(":hidden");
        return m.each(function() {
            var b = a(this);
            b.data("style-cache", b.attr("style"))
        }), m.css("display", "block"), h.byRow && !h.target && (i.each(function() {
            var b = a(this),
                c = b.css("display");
            "inline-block" !== c && "flex" !== c && "inline-flex" !== c && (c = "block"), b.data("style-cache", b.attr("style")), b.css({
                display: c,
                "padding-top": "0",
                "padding-bottom": "0",
                "margin-top": "0",
                "margin-bottom": "0",
                "border-top-width": "0",
                "border-bottom-width": "0",
                height: "100px",
                overflow: "hidden"
            })
        }), j = e(i), i.each(function() {
            var b = a(this);
            b.attr("style", b.data("style-cache") || "")
        })), a.each(j, function(b, c) {
            var e = a(c),
                f = 0;
            if (h.target) f = h.target.outerHeight(!1);
            else {
                if (h.byRow && e.length <= 1) return void e.css(h.property, "");
                e.each(function() {
                    var b = a(this),
                        c = b.attr("style"),
                        d = b.css("display");
                    "inline-block" !== d && "flex" !== d && "inline-flex" !== d && (d = "block");
                    var e = {
                        display: d
                    };
                    e[h.property] = "", b.css(e), b.outerHeight(!1) > f && (f = b.outerHeight(!1)), c ? b.attr("style", c) : b.css("display", "")
                })
            }
            e.each(function() {
                var b = a(this),
                    c = 0;
                h.target && b.is(h.target) || ("border-box" !== b.css("box-sizing") && (c += d(b.css("border-top-width")) + d(b.css("border-bottom-width")), c += d(b.css("padding-top")) + d(b.css("padding-bottom"))), b.css(h.property, f - c + "px"))
            })
        }), m.each(function() {
            var b = a(this);
            b.attr("style", b.data("style-cache") || null)
        }), g._maintainScroll && a(window).scrollTop(k / l * a("html").outerHeight(!0)), this
    }, g._applyDataApi = function() {
        var b = {};
        a("[data-match-height], [data-mh]").each(function() {
            var c = a(this),
                d = c.attr("data-mh") || c.attr("data-match-height");
            d in b ? b[d] = b[d].add(c) : b[d] = c
        }), a.each(b, function() {
            this.matchHeight(!0)
        })
    };
    var h = function(b) {
        g._beforeUpdate && g._beforeUpdate(b, g._groups), a.each(g._groups, function() {
            g._apply(this.elements, this.options)
        }), g._afterUpdate && g._afterUpdate(b, g._groups)
    };
    g._update = function(d, e) {
        if (e && "resize" === e.type) {
            var f = a(window).width();
            if (f === b) return;
            b = f
        }
        d ? c === -1 && (c = setTimeout(function() {
            h(e), c = -1
        }, g._throttle)) : h(e)
    }, a(g._applyDataApi), a(window).bind("load", function(a) {
        g._update(!1, a)
    }), a(window).bind("resize orientationchange", function(a) {
        g._update(!0, a)
    })
});
$(document).ready(function() {
    $('.match-height').matchHeight();
    $('.eq-height').matchHeight();
    $('.same-height').matchHeight();
    $('.sale .close').click(function(e) {
        e.preventDefault();
        $('.sale').slideUp('fast');
        sessionStorage.setItem('sale_banner_closed', 'yes');
    });
    if ($('.sale')) {
        if (!sessionStorage.getItem('sale_banner_closed')) {
            $('.sale').addClass('active');
        }
    }
    if ($('.not-loggedin').length === 0) {
        ttlReset(35);
    }
    scrollbar();
    $(window).load(function() {
        var timeInc = 0;

        function loadRadial(el, progress) {
            setTimeout(function() {
                $(el).attr('data-progress', progress)
            }, timeInc);
            timeInc += 1000;
        }
        $('.start-loading').each(function() {
            var progress = $(this).attr('data-finish');
            loadRadial(this, progress);
        });
    });
    $(window).load(function() {
        if ($('body').height() < $(window).height() && $('body').width() > '1920') {
            adjustWindow();
            var target = document.getElementById('main-holder'),
                observer = new MutationObserver(function(mutation) {
                    adjustWindow();
                });
            observer.observe(target, {
                attributes: true,
                childList: true,
                characterData: true,
                subtree: true
            });
        }
    });

    function adjustWindow() {
        $('body').addClass('sticky-footer');
        ($('body').height() > ($(window).height() - $('footer').height())) ? $('body').removeClass('sticky-footer'): $('body').addClass('sticky-footer');
    }

    function Timer(callback, delay) {
        var timerId, start, remaining = delay;
        this.pause = function() {
            window.clearTimeout(timerId);
            remaining -= new Date() - start;
        };
        this.resume = function() {
            start = new Date();
            window.clearTimeout(timerId);
            timerId = window.setTimeout(callback, remaining);
        };
        this.resume();
    }
    if ($('.viewport').length >= 1) {
        $(window).scroll(check_if_in_view);
    }
    if ($('.course').length >= 1) {
        $(window).resize($.throttle(50, function() {
            if ($(window).width() > 767) {
                clearCourseStyles();
            }
        }));
    }
    $(document).one('focus.autoExpand', 'textarea.autoExpand', function() {
        var savedValue = this.value;
        this.value = '';
        this.baseScrollHeight = this.scrollHeight;
        this.value = savedValue;
    }).on('input.autoExpand', 'textarea.autoExpand', function() {
        var minRows = this.getAttribute('data-min-rows') | 0,
            rows;
        this.rows = minRows;
        rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 17);
        this.rows = minRows + rows;
    });
    $('.back-to-top').click(function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 400, 'swing');
    });
    $(window).load(function() {
        var list = '.module-topics ol li';
        if ($(window).width() >= 1440 && $('.module-topics ol li').length > 0) {
            if (($(list + '.active').position().top + 10) > $('.module-topics').height()) {
                $('.module-topics').mCustomScrollbar("scrollTo", $(list + '.active').position().top);
            }
        }
    });
    if ($('.categories-filter').length >= 1) {
        var checkboxes = $('.categories-filter .checkbox-group li input[type="checkbox"]');
        $(checkboxes).change(function() {
            var btn = $('.categories-filter .btn');
            $(btn).text(Lang.get('form.select_all')).removeClass('active');
        });
        $('.categories-filter .btn').click(function() {
            if ($('.categories-filter .checkbox-group li input[type="checkbox"]:checked').length == $(checkboxes).length) {
                $(checkboxes).prop('checked', false);
                $(this).text(Lang.get('form.select_all')).removeClass('active');
            } else {
                $(checkboxes).prop('checked', true).addClass('checked');
                $(this).text(Lang.get('form.clear_all')).addClass('active');
            }
        });
        $('.dropdown .trigger').on('click', function() {
            $('.categories-filter').slideToggle();
        });
    }
    $('select').change(function() {
        if (!this.value) {
            $(this).addClass('placeholder');
        } else {
            $(this).removeClass('placeholder');
        }
    });
    $('.cert-order').click(function() {
        $(this).parent().prev().find('.slide-up-products').toggleClass('view');
    });
    dashboardProgressBar();
    emailSubscription();
    courseInfo();
    openTab();
    modal();
    formValidation();
    starRating();
    clickEvents();
    hoverEvents();
    sharing();
    smoothScroll();
    homepageBannerBg();
    profile();
    congratulations();
    testimonials();
    widgets();
    read_more_less();
    changeLabel();
    categoriesCollapse();
    filtersCollapse();
    favorite('course');
    selectAllCheckboxes();
    search();
    notes();
    faqFeedback();
    if ($('#cart-page').length >= 1) {
        checkout();
    }
    slideToggleNext();
    getModuleTitle();
    getPositions();
    timeAgo();
    scrollToDownloads();
    if ($('.share-trigger').length) {
        $('.share-trigger').click(function(e) {
            e.preventDefault();
        })
    }
    $('.message').delay(8000).fadeOut();
    $('.sidebar-trigger, .sidebar-close').click(function(e) {
        e.preventDefault();
        $('body').toggleClass('sidebar-container');
    });
    $('.application-form-container input[type="submit"]').click(function(e) {
        $('.upload input:invalid').next().addClass('invalid').next().addClass('invalid');
    });
    $('#btnCloseUpdateBrowser').click(function(e) {
        e.preventDefault();
        $(this).closest('#outdated').hide();
    });
    $('footer .col-3').each(function() {
        var link = $(this).find('a').attr('href'),
            url = window.location.href;
        if (link === url) {
            $('footer .tab.active').removeClass('active');
            $(this).parents('.tab').addClass('active');
            var id = $('footer .tab.active').attr('id');
            $('footer .tab-title.active').removeClass('active');
            $('footer .tab-title[data-name="' + id + '"]').addClass('active');
        }
    });
    $('.course-tab').click(function(e) {
        e.preventDefault();
        var data_type = $(this).attr('data-type');
        $('.loading').fadeIn();
        $.ajax({
            url: '/course-details/' + data_type,
            type: 'POST',
            data: {
                'tab': data_type,
            },
            success: function(data) {
                $('.loading').fadeOut();
                $('.courses-list .wrapper').children().remove();
                $('.courses-list .wrapper').append(data);
                $('.same-height').matchHeight();
                favorite('course');
                courseInfo();
                openTab();
            },
            error: function(e) {
                $('.loading').fadeOut();
            }
        });
    });
});

function ttlReset(duration) {
    var ttlTimer = duration;
    setInterval(function() {
        if (--ttlTimer < 0) {
            ttlTimer = duration;
            $.ajax({
                url: '/user/keepalive',
                method: 'GET',
                success: function(data) {}
            });
        }
    }, 60000);
}

function scrollbar() {
    $(".scrollbar").mCustomScrollbar({
        theme: '3d',
        scrollbarPosition: 'inside',
        scrollInertia: 300,
        autoHideScrollbar: false,
        documentTouchScroll: true,
        scrollButtons: {
            enable: true
        }
    });
}

function imgError() {
    $("img").error(function() {
        $(this).unbind("error").attr("src", "/html/site/img/alison-icon-default.png");
    });
}

function getModuleTitle() {
    var activeModuleTitle = $('.player-slider .active a').attr('title');
    var h4 = $('.module-nav .module-title');
    $(h4).text(activeModuleTitle);
}

function dashboardProgressBar() {
    function progress(percent, element) {
        var progressBarWidth = percent + '%';
        element.find('.bar').animate({
            width: progressBarWidth
        }, 1300).html(percent + "%");
    }
    $('.dashboard-progress-meter').each(function() {
        var element = $(this);
        var percent = $(this).attr('data-percentage');
        progress(percent, element);
    });
}

function emailSubscription() {
    $('#emailSubscription').click(function() {
        $('.loading').fadeIn();
        var dom = this;
        var id = $(this).attr('data-id');
        var label = $('.view-subscription').find('label.on-off');
        $.ajax({
            url: '/emails/subscribe-unsubscribe/' + id,
            method: 'GET',
            success: function(data) {
                $('.loading').fadeOut();
                message(data.status, data.message);
                $(label).text($(dom).attr('data-value') == 1 ? 'ON' : 'OFF');
            },
            error: function(e) {
                $('.loading').fadeOut();
            }
        });
    });
}
$('#course-plan .v-pane .scorm').click(function() {
    $(this).next().slideToggle().parent().toggleClass('down active')
    $(this).closest('.scrollbar').mCustomScrollbar("update");
});

function courseInfo() {
    var courseOriginalPosition;
    $('.course .holder-bottom > a, .course .holder-top > img').click(function(e) {
        e.preventDefault();
        var course = $(this).closest('.course');
        if ($(course).hasClass('active')) {
            return;
        }
        $("html, body").animate({
            scrollTop: ($(course).offset().top - 80)
        }, 400);
        $('.course-info').remove();
        var activeCourse = $('.course.active');
        if ($(activeCourse).length) {
            closeCourseInfo($(activeCourse), loadCourseDetails);
            return;
        } else {
            loadCourseDetails();
            return;
        }

        function loadCourseDetails() {
            $('.loading').fadeIn();
            $.ajax({
                url: '/' + $(course).attr('data-type') + '/?id=' + $(course).attr('data-id') + '/details',
                method: 'POST',
                success: function(data) {
                    $(course).append(data);
                    openTab();
                    closeCourseInfoEvent();
                    scrollbar();
                    $('.loading').fadeOut();
                    openCourseInfo(course);
                },
                error: function(e) {
                    $('.loading').fadeOut();
                }
            });
        }
    });

    function closeCourseInfoEvent() {
        $('.course-info-trigger').click(function(e) {
            e.preventDefault();
            closeCourseInfo($(this).closest('.course'));
        });
    }

    function openCourseInfo(course) {
        var courseHeight = $(course).find('.course-holder').height();
        var windowWidth = window.innerWidth;
        var coursePosition = $(course).position().top + 'px';
        courseOriginalPosition = $(course).children('.course-holder').position();
        if (windowWidth < 768) {
            $('.course').removeClass('active');
            $(course).addClass('active');
            $('.course .course-info').slideUp();
            $(course).children('.course-info').slideToggle(function() {
                $('body,html').scrollTop($('.course.active').offset().top);
            });
            $('body,html').scrollTop($('.course.active').offset().top);
        } else {
            var left = $('.courses-list-inner').length > 0 ? '228px' : '260px';
            $('<div class="course clone"></div>').css('height', courseHeight + 25).insertBefore($(course));
            $(course).children('.course-holder').css({
                'left': courseOriginalPosition.left - 12,
                'top': '0',
                'position': 'absolute'
            }).animate({
                'left': '0px'
            }, 500);
            $(course).children('.course-info').animate({
                'left': left
            }, 700);
            $(course).addClass('active').css('top', coursePosition);
            $.fn.matchHeight._apply('.course.active .course-holder, .course.active .course-info');
        }
    }

    function closeCourseInfo(course, callback) {
        var windowWidth = $(window).width();
        if (windowWidth <= 767) {
            $('.course.clone').remove();
            $('.course').removeClass('active');
            $('.course-holder').removeAttr('style');
            $('.course-info').removeAttr('style');
            $(course).removeClass('active').removeAttr('style');
        } else {
            $(course).children('.course-info').stop(true, true).animate({
                'left': '+=1500',
                'right': '-=1000'
            }, 100);
            if (!callback) {
                $(course).children('.course-holder').css({
                    'position': 'absolute',
                    'top': '0'
                }).stop(true, true).animate({
                    'left': courseOriginalPosition.left - 12
                }, 500, function() {
                    resetCourseCss();
                });
            } else {
                $(course).children('.course-holder').css({
                    'position': 'absolute',
                    'top': '0',
                    'left': courseOriginalPosition.left - 12
                });
                resetCourseCss();
            }
        }
        if (callback) {
            callback(course);
        }

        function resetCourseCss() {
            $('.course.clone').remove();
            $(course).removeClass('active').removeAttr('style');
            $('.course').removeClass('active');
            $('.course-holder').removeAttr('style');
            $('.course-info').removeAttr('style');
        }
        return;
    }
}

function clearCourseStyles() {
    $('.course.clone').remove();
    $('.course').removeClass('active').removeAttr('style');
    $('.course-holder').removeAttr('style').css('position', 'static');
    $('.course-info').removeAttr('style');
}

function changeLabel() {
    $("[type=file]").on("change", function() {
        var file = this.files[0].name,
            labelOld = $('label[for="' + $(this).attr('id') + '"]').text(),
            label = $('label[for="' + $(this).attr('id') + '"]'),
            icon = $(this).parent().find('.icon-upload');
        if (icon.length) {
            icon.addClass('icon-cross2').removeClass('invalid').next().removeClass('invalid');
            $(document).on('click', '.field.upload .icon-cross2', function() {
                var parent = $(this).parent();
                $(this).removeClass('icon-cross2');
                parent.find('label').text(labelOld);
                resetFormElement(parent.find('input'));
            });
        }
        label.text(file);
    });
}

function resetFormElement(e) {
    e.wrap('<form>').closest('form').get(0).reset();
    e.unwrap();
}

function categoriesCollapse() {
    var trigger = $('.categories-trigger');
    if ($(trigger).length) {
        $(trigger).click(function(event) {
            event.preventDefault();
            event.stopImmediatePropagation();
            $('.categories-holder').slideToggle();
        });
        $('.categories-holder, .trigger-search, input[name="q"]').click(function(event) {
            event.stopImmediatePropagation();
        });
        $(window).click(function() {
            $('.categories-holder').slideUp();
        });
    }
}
$('.categories-holder .view-all .btn').click(function(e) {
    var target = '.filter-checkboxes input[type="checkbox"]:checked';
    if ($(target).length > 0) {
        e.preventDefault();
    }
    var url = '?',
        link = $(this).attr('href');
    $(target).each(function() {
        url += $(this).next().find('.check-label').text() + '=1&'
    });
    window.location.href = link + url;
});
$('.filter-checkboxes input[type="checkbox"], .filter-checkboxes label[for="selectAll"], .categories-trigger').click(function() {
    var btn = ".categories-holder .view-all .btn";
    if ($('.filter-checkboxes input[type="checkbox"]:checked').length > 0) {
        $(btn).text(Lang.get('common.view_selected')).addClass('selected');
        $('.select').hide();
        $('.count-hide').show()
    } else {
        $(btn).text(Lang.get('common.view_all')).removeClass('selected');
        $('.select').show();
        $('.count-hide').hide()
    }
});

function filtersCollapse() {
    $('.filters-trigger').click(function(event) {
        event.preventDefault();
        $(this).parent().toggleClass('active');
        $(this).next('.filters-holder,.filters-holder-category').slideToggle();
        $(this).closest('.filters-holder-category').slideToggle();
    });
}

function slideToggleNext() {
    $('.trigger').click(function(event) {
        event.preventDefault();
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).next('.slideToggle').slideUp();
        } else {
            $('.topic-helpers .trigger').removeClass('active');
            $('.topic-helpers .slideToggle').slideUp();
            $(this).addClass('active');
            $(this).next('.slideToggle').slideDown();
        }
    });
}

function selectAllCheckboxes() {
    $("#selectAll").change(function(e) {
        e.preventDefault();
        var status = this.checked;
        $('.filter-checkboxes .filter').each(function() {
            this.checked = status;
            $('.categories-trigger').addClass('active');
        });
        if (!status) {
            $('.categories-trigger').removeClass('active');
        }
        var btn = ".categories-holder .view-all .btn";
        if ($('.filter-checkboxes input[type="checkbox"]:checked').length > 0) {
            $(btn).text(Lang.get('common.view_selected')).addClass('selected');
            $('.select').hide();
            $('.count-hide').show()
        } else {
            $(btn).text(Lang.get('common.view_all')).removeClass('selected');
            $('.select').show();
            $('.count-hide').hide()
        }
        selectAllButton();
    });
    $('.filter-checkboxes .filter').change(function(e) {
        e.preventDefault();
        var selectionCount = $('.filter-checkboxes .filter:checked').length;
        $('.selection-count .count').text(selectionCount);
        if (selectionCount == 1) {
            $('.selection-count .count-text').text(Lang.get('form.category_selected'));
        } else {
            $('.selection-count .count-text').text(Lang.get('form.categories_selected'));
        }
        if (this.checked == false) {
            $("#selectAll")[0].checked = false;
            $(".select-buttons label").text(Lang.get('form.select_all'));
        }
        if ($('.filter-checkboxes .filter:checked').length == $('.filter-checkboxes .filter').length) {
            $("#selectAll")[0].checked = true;
            $(".select-buttons label").text(Lang.get('form.unselect_all'));
        }
        if (selectionCount == 0) {
            $('.categories-trigger').removeClass('active');
        } else {
            $('.categories-trigger').addClass('active');
        }
    });

    function selectAllButton() {
        var selectionCount = $('.filter-checkboxes .filter:checked').length;
        $('.selection-count .count').text(selectionCount);
        if ($("input[name=nbCategories]").val() != selectionCount) {
            $(".select-buttons label").text(Lang.get('form.select_all'));
        } else {
            $(".select-buttons label").text(Lang.get('form.unselect_all'));
        }
    }
    selectAllButton();
}

function search() {
    var searchForm = $('#search');
    $('.filters-holder input[type="checkbox"], select[name=sorting]').change(function(e) {
        $(searchForm).filterSearch();
    });
    $('button.filter-category').click(function() {
        $('input[name="c"]').remove();
        $(searchForm).submit();
    });
    $('.tab-title').click(function(e) {
        e.preventDefault();
        $('input[name="types[]"]').attr('disabled', 'disabled');
        $('input[name="medias[]"]').attr('disabled', 'disabled');
        $('input[name="responsive"]').attr('disabled', 'disabled');
        $(searchForm).attr('action', $(this).attr('data-url')).submit();
    });
    $.fn.filterSearch = function(page) {
        var form = this;
        var data = $(this).serialize();
        var ajaxUrl = $(this).attr('action');
        var segment = window.location.href.split('/');
        if (contains(segment, "tag")) {
            var t = segment[segment.length - 1] || '';
            ajaxUrl = window.location.href;
            data += "&t=" + t;
        }

        function contains(a, obj) {
            for (var i = 0; i < a.length; i++) {
                if (a[i] == obj) {
                    return true;
                }
            }
            return false;
        }
        if (page) {
            data += '&page=' + page;
        }
        $('html, body').animate({
            scrollTop: 0
        }, 475, 'swing');
        $('.loading').fadeIn();
        $.ajax({
            url: ajaxUrl,
            method: 'GET',
            data: data,
            success: function(data) {
                var src = $('.search-results-container');
                $(src).html(data);
                favorite('course');
                courseInfo();
                openTab();
                $('.same-height').matchHeight();
                $('.loading').fadeOut();
            },
            error: function(e) {
                $('.loading').fadeOut();
            }
        });
    };
}

function faqFeedback() {
    $('.helpful a').click(function(event) {
        var id = $(this).attr('data-id');
        var isHelpful = $(this).attr('data-helpful');
        $('.loading').fadeIn();
        $.ajax({
            url: '/faqs/rating/' + id,
            data: {
                'isHelpful': isHelpful
            },
            type: 'PATCH',
            success: function(data) {
                $('.loading').fadeOut();
                if (parseInt(data.isHelpful)) {
                    $('.helpful').hide();
                    $('.is-helpful').slideDown();
                } else {
                    $('.helpful').hide();
                    $('.not-helpful-contact').slideDown();
                }
            },
            error: function(e) {
                $('.loading').fadeOut();
            }
        });
        event.preventDefault();
    });
    var errors = $.find('.error-message');
    if (errors.length) {
        $('.helpful').hide();
        $('.not-helpful-contact').slideDown();
    }
}

function message(status, message) {
    var msg = '<div class="message ' + status.toLowerCase() + '" style="display: none"><h6>' + status + '</h6><p>' + message + '</p></div>';
    $('.messages-q').append(msg);
    $('.message').fadeIn();
    $('.message').delay(8000).fadeOut(function() {
        $(this).remove();
    });
}

function widgets() {
    $('.switch').click(function() {
        var value = parseInt($(this).attr('data-value'));
        if (value) {
            $(this).find('button').removeClass('on');
            $(this).attr('data-value', 0);
        } else {
            $(this).find('button').addClass('on');
            $(this).attr('data-value', 1);
        }
    });
    $('.like-comments-widget > a').click(function(e) {
        var id = $(this).parent().attr('data-id');
        var value = $(this).hasClass('thumb-up') ? 1 : 0;
        var dom = this;
        $('.loading').fadeIn();
        $.ajax({
            url: '/comments/rank/' + id + '/' + value,
            type: 'GET',
            success: function(data) {
                $('.loading').fadeOut();
                if (data.status == 'success') {
                    var thumb_up = $(dom).parent().find('.thumb-up');
                    var thumb_down = $(dom).parent().find('.thumb-down');
                    if (value > 0) {
                        $(dom).addClass('blue');
                        $(thumb_down).removeClass('red');
                    } else {
                        $(dom).addClass('red');
                        $(thumb_up).removeClass('blue');
                    }
                    $(thumb_up).parent().find('.thumb-up').find('label').html(' ' + data.data.likes);
                    $(thumb_down).parent().find('.thumb-down').find('label').html(' ' + data.data.dislikes);
                }
            },
            error: function(e) {
                $('.loading').fadeOut();
            }
        });
        e.preventDefault();
    });
}

function notes() {
    var oldValue = '',
        field = $('textarea[name=note]');
    field.focus(function() {
        oldValue = $(this).val()
    });
    field.blur(function(e) {
        var className = e.relatedTarget !== null ? e.relatedTarget.className : '';
        if (className != 'mail-note' && oldValue !== field.val()) {
            $(this).saveNote(field, function(data) {
                if (data.message) {
                    var status = data.status !== 'success' ? Lang.get('errors.error') : Lang.get('success.success');
                    message(status, data.message);
                }
            });
        }
    });
    $('.save-note').click(function(e) {
        e.preventDefault();
        $(this).saveNote(field, function(data) {
            if (data.message) {
                var status = data.status !== 'success' ? Lang.get('errors.error') : Lang.get('success.success');
                message(status, data.message);
            }
        });
    });
    $('.mail-note').click(function(e) {
        e.preventDefault();
        var a = this;
        $(this).saveNote(field, function(data) {
            $('.loading').fadeIn();
            $.ajax({
                url: '/user/note/' + $(a).parent().attr('data-id') + '/mail',
                method: 'GET',
                success: function(data) {
                    $('.loading').fadeOut();
                    var status = data.status !== 'success' ? Lang.get('errors.error') : Lang.get('success.success');
                    message(status, data.message);
                },
                error: function(e) {
                    $('.loading').fadeOut();
                }
            });
        });
    });
    $('.download-note').click(function(e) {
        e.preventDefault();
        var a = this;
        $(this).saveNote(field, function(data) {
            if ($(a).attr('href') == '#') {
                $(a).attr('href', $(a).attr('data-dlink'));
            }
            var status = data.status !== 'success' ? Lang.get('errors.error') : Lang.get('success.success');
            message(status, data.message);
            $(location).attr("href", $(a).attr('href'));
        });
    });
    $.fn.saveNote = function(field, callback) {
        var scoid = $(this).parent().attr('data-id');
        var note = $('textarea[name=note]').val();
        $('.loading').fadeIn();
        $.ajax({
            url: '/user/note/' + scoid,
            method: 'PATCH',
            data: {
                note: note
            },
            success: function(data) {
                var m = data.messages ? data.messages.note : null;
                $(field).validationMessage(m);
                if (data.status == 'success') {
                    callback(data);
                }
                $('.loading').fadeOut();
            },
            error: function(e) {
                $('.loading').fadeOut();
            }
        });
    };
    $('.submit-topic-comment').click(function(e) {
        e.preventDefault();
        var inputValue = $('#comment').val();
        var scoId = $(this).attr('data-sco-id');
        $('.loading').fadeIn();
        $.ajax({
            url: '/comments',
            method: 'POST',
            data: {
                'content': inputValue,
                'type': 'scos',
                'id': scoId
            },
            success: function(data) {
                $('.loading').fadeOut();
                message(Lang.get('success.success'), data.message + Lang.get('success.user_comment_approved'));
            },
            error: function(data) {
                $('.loading').fadeOut();
                message(Lang.get('errors.error'), Lang.get('errors.comment'));
            }
        });
    });
}

function profile() {
    if (!$('#profile').length) {
        return;
    }
    if ($('.public').length) {
        return;
    }
    $.fn.updateProfileCompletion = function(value) {
        $(this).updateRadial(value);
        $(this).parent().find('label.profile_completion').text(value);
    };

    function initCroppic() {
        if (!$('#profile').length) {
            return;
        }
        var ajax_param = {
            userid: $('#profile input[name=user]').val()
        };
        var croppicContainerModalOptions = {
            uploadUrl: 'user/avatar/upload',
            uploadData: ajax_param,
            sidebarObj: $('.sidebar-profile-img'),
            cropUrl: 'user/avatar/crop',
            outputUrlId: 'user_avatar',
            allowedExtensions: '.png,.jpg',
            rotateFactor: 90,
            cropData: ajax_param,
            modal: true,
            singleZoomControls: false,
            loaderHtml: '<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> '
        };
        var cropContainerModal = new Croppic('avatar', croppicContainerModalOptions);
    }

    function initEventsListeners() {
        var old_value = null;
        $('[type=date]').blur(function() {
            var pVal = (this.value) ? '' : $(this).attr('original_placeholder');
            $(this).attr('placeholder', pVal);
        });
        $(document).on('submit', '#profile form', function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            var postData = $(this).serializeArray();
            var formURL = $(this).attr("action");
            var form = $(this);
            postData.push({
                'name': 'is_default',
                'value': $('#is_default:checked').length
            });
            $('.loading').fadeIn();
            $.ajax({
                url: formURL,
                type: 'POST',
                data: postData,
                success: function(data) {
                    $('.loading').fadeOut();
                    if (data.status && data.status == 'error') {
                        $(form).validate(data.messages);
                    } else {
                        $(form).parent().slideUp(function() {
                            $('#' + $(form).attr('data-type')).html(data.view);
                            message(Lang.get('success.success'), data.message);
                            $('#user_avatar').updateProfileCompletion(data.profile_completion);
                        });
                    }
                },
                error: function(e) {
                    $('.loading').fadeOut();
                }
            });
        });
        $(document).on('click', '#profile .add', function() {
            var icon = $(this).find('i');
            if ($(icon).hasClass('icon-plus')) {
                var infobox = $(this).parent().next('.info-box'),
                    form = $(infobox).find('form');
                $(form)[0].reset();
                $(infobox).find("input[type=checkbox]").removeAttr('checked');
                $(infobox).find('.errors').hide();
                $(infobox).slideDown(function() {
                    $(icon).attr('class', 'icon-minus');
                });
            } else {
                $(this).parent().next('.info-box').slideUp(function() {
                    $(icon).attr('class', 'icon-plus');
                });
            }
        });
        $('#profile .edit-user-detail').focus(function(e) {
            old_value = $(this).val();
        });
        $('#profile .edit-user-detail:not(.hasDatepicker)').blur(function(e) {
            if ($(this).val() == old_value) {
                return;
            }
            updateInfo(this);
        });
        $(document).on('focus', '.date-of-birth, input[name="time_start"], input[name="time_end"]', function() {
            if (!$(this).hasClass('hasDatepicker')) {
                initialiseDatePicker(this);
            }
        });

        function initialiseDatePicker(el) {
            $(el).datepicker({
                dateFormat: 'yy-mm-dd',
                changeYear: true,
                changeMonth: true,
                showMonthAfterYear: true,
                yearRange: '1900:2017',
                changeYear: true,
                onSelect: function() {
                    if ($(this).parents('.complete').length >= 1) {
                        if ($(this).val() == old_value) {
                            return;
                        }
                        if ($(this).hasClass('edit-user-dependencies')) {
                            updateUserDependencies(this);
                        } else {
                            updateInfo(this);
                        }
                    }
                }
            });
        }

        function updateInfo(field) {
            $('.loading').fadeIn();
            $.ajax({
                url: '/user/' + $('input[name=user]').val(),
                method: 'PATCH',
                data: {
                    field: $(field).attr('name'),
                    value: $(field).val()
                },
                success: function(data) {
                    $('.loading').fadeOut();
                    if (data.status == 'success') {
                        $(field).val(data.value);
                        message(Lang.get('success.success'), data.message);
                        $(field).validationMessage();
                        $('#user_avatar').updateProfileCompletion(data.profile_completion);
                    } else {
                        $(field).validationMessage(data.message);
                    }
                },
                error: function(e) {
                    $('.loading').fadeOut();
                }
            });
        }
        $('.delete-address').click(function(e) {
            e.preventDefault();
            var addressID = $(this).attr('data-address-id');
            $('.loading').fadeIn();
            $.ajax({
                url: '/user/address/' + addressID,
                method: 'DELETE',
                success: function(data) {
                    $('.loading').fadeOut();
                    message('success', data.message);
                    $('.address-holder-' + addressID).slideUp('fast').delay(400).remove();
                },
                error: function(e) {
                    $('.loading').fadeOut();
                }
            });
        });
        $('#profile #is_public').click(function() {
            var value = parseInt($(this).attr('data-value'));
            value = value ? 0 : 1;
            $('.loading').fadeIn();
            $.ajax({
                url: '/user/' + $('input[name=user]').val() + '/set-public',
                method: 'PATCH',
                data: {
                    is_public: value
                },
                success: function(data) {
                    $('.loading').fadeOut();
                    if (data.status == 'success') {
                        message(Lang.get('success.success'), data.message);
                        $('#profile .view-profile').text(data.message);
                    }
                },
                error: function(e) {
                    $('.loading').fadeOut();
                }
            });
        });
        $('#profile .edit-user-dependencies').focus(function(e) {
            old_value = $(this).val();
        });
        $('#profile .edit-user-dependencies').blur(function(e) {
            if ($(this).val() == old_value) {
                return;
            }
            updateUserDependencies(this);
        });

        function updateUserDependencies(target) {
            var form = $(target).closest('form');
            var field = target;
            $('.loading').fadeIn();
            $.ajax({
                url: $(form).attr("action"),
                method: 'PATCH',
                data: {
                    field: $(field).attr('name'),
                    value: $(field).val()
                },
                success: function(data) {
                    $('.loading').fadeOut();
                    if (data.status === 'error') {
                        $(field).validationMessage(data.message);
                    } else {
                        message(Lang.get('success.success'), data.message);
                        $(field).validationMessage();
                    }
                    if (data.status == 'info') {
                        $(field).val(data.value);
                    }
                },
                error: function(e) {
                    $('.loading').fadeOut();
                }
            });
        }
        $("#profile input[id^='default']").change(function(e) {
            e.preventDefault();
            var url = 'user/address/' + $(this).attr('data-id') + '/default';
            $('.loading').fadeIn();
            $.ajax({
                url: url,
                method: 'PATCH',
                data: {
                    default: $(this).val()
                },
                success: function(data) {
                    $('.loading').fadeOut();
                    $('#address').html(data.view);
                    initEventsListeners();
                    message(Lang.get('success.success'), data.message);
                },
                error: function(e) {
                    $('.loading').fadeOut();
                }
            });
        });
        $('#profile .cancel').click(function() {
            $(this).closest('.info-box').slideUp(function() {
                $(this).prev().find('button').find('i').attr('class', 'icon-plus');
            });
        });
        $('#profile .delete').click(function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            var r = confirm(Lang.get('common.are_you_sure'));
            if (r == false) {
                return;
            }
            var type = $(this).attr('data-type');
            var id = $(this).attr('data-id');
            var box = $(this).parent().parent().parent().parent();
            $('.loading').fadeIn();
            $.ajax({
                url: 'user/' + type + '/' + id,
                type: 'DELETE',
                success: function(data) {
                    $('.loading').fadeOut();
                    if (data.status != 'success') {
                        message(Lang.get('errors.error'), data.message);
                        return;
                    }
                    $(box).slideUp(function() {
                        $('#' + type).html(data.view);
                        $('#user_avatar').updateProfileCompletion(data.profile_completion);
                        initEventsListeners();
                        message(Lang.get('success.success'), data.message);
                    });
                },
                error: function(e) {
                    $('.loading').fadeOut();
                }
            });
        });
        $('#profile .field > input,textarea,select').keyup(function(event) {
            if (event.keyCode == 13) {
                $(this).blur();
            }
        });
    }
    initCroppic();
    initEventsListeners();
}
$.fn.updateRadial = function(value) {
    $(this).closest('[class^=radial-progress]').attr('data-progress', value)
};

function timeAgo(selector) {
    var templates = {
        prefix: "",
        suffix: Lang.get('time.suffix'),
        seconds: Lang.get('time.less_than_a_minute'),
        minute: Lang.get('time.about_a_minute'),
        minutes: Lang.get('time.since_minutes'),
        hour: Lang.get('time.about_an_hour'),
        hours: Lang.get('time.since_an_hour'),
        day: Lang.get('time.a_day'),
        days: Lang.get('time.since_days'),
        month: Lang.get('time.about_a_month'),
        months: Lang.get('time.since_months'),
        year: Lang.get('time.about_a_year'),
        years: Lang.get('time.since_years')
    };
    var template = function(t, n) {
        return templates[t] && templates[t].replace(/%d/i, Math.abs(Math.round(n)));
    };
    var timer = function(time) {
        if (!time)
            return;
        time = time.replace(/\.\d+/, "");
        time = time.replace(/-/, "/").replace(/-/, "/");
        time = time.replace(/T/, " ").replace(/Z/, " UTC");
        time = time.replace(/([\+\-]\d\d)\:?(\d\d)/, " $1$2");
        time = new Date(time * 1000 || time);
        var now = new Date();
        var seconds = ((now.getTime() - time) * .001) >> 0;
        var minutes = seconds / 60;
        var hours = minutes / 60;
        var days = hours / 24;
        var years = days / 365;
        return templates.prefix + (seconds < 45 && template('seconds', seconds) || seconds < 90 && template('minute', 1) || minutes < 45 && template('minutes', minutes) || minutes < 90 && template('hour', 1) || hours < 24 && template('hours', hours) || hours < 42 && template('day', 1) || days < 30 && template('days', days) || days < 45 && template('month', 1) || days < 365 && template('months', days / 30) || years < 1.5 && template('year', 1) || template('years', years)) + templates.suffix;
    };
    var elements = document.getElementsByClassName('timeago');
    for (var i in elements) {
        var $this = elements[i];
        if (typeof $this === 'object') {
            $this.innerHTML = timer($this.getAttribute('title') || $this.getAttribute('datetime'));
        }
    }
    setTimeout(timeAgo, 60000);
};

function read_more_less() {
    var ellipsestext = "...";
    var moretext = Lang.get('common.read_more');
    var lesstext = Lang.get('common.read_less');;
    $('.more').each(function() {
        var content = $(this).html();
        if ($(this).hasClass("longtext")) {
            var showChar = 250;
        } else {
            var showChar = 150;
        }
        if (content.length > showChar) {
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
            var html = c + '<span class="moreellipses">' + ellipsestext + '</span><span class="morecontent"><span>' + h + '</span><a href="" class="morelink">' + moretext + '</a></span>';
            $(this).html(html);
        }
    });
    $(".morelink").click(function() {
        if ($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        $.fn.matchHeight._update();
        return false;
    });
}

function testimonials() {
    if (!$('#testimonials').length) {
        return;
    }
    $('#addTestimonial').submit(function(e) {
        var form = $(this);
        $('.loading').fadeIn();
        $.ajax({
            url: $(form).attr("action"),
            type: 'POST',
            data: $(this).serializeArray(),
            success: function(data) {
                $('.loading').fadeOut();
                $('#modalAddTestimonial').closeModal();
                message(Lang.get('success.success'), data.message);
            },
            error: function(data) {
                $('.loading').fadeOut();
                $(form).validate(data.responseJSON);
            }
        });
        e.preventDefault();
    });
}

function formValidation() {
    $.fn.validationMessage = function(message) {
        if (!message) {
            $(this).next().fadeOut();
            $(this).next().children('p').html('');
        } else {
            $(this).next().removeClass('hide');
            $(this).next().fadeIn();
            $(this).next().children().last().html(message);
        }
    };
    $.fn.validate = function(errorMessages) {
        var message = null;
        for (var i in errorMessages) {
            message = Array.isArray(errorMessages[i]) ? errorMessages[i].join() : errorMessages[i];
            $(this).find('[name=' + i + ']').validationMessage(message);
        }
        return errorMessages.length;
    };
}
if ($('.read-more-expand').length > 0) {
    $(window).resize(hideMoreButton);
    hideMoreButton();
    $('.read-more-expand .trigger').click(function() {
        var pHeight = $(this).siblings('.expand')[0].scrollHeight;
        var expand = $(this).siblings('.expand');
        if (pHeight > $(expand).height()) {
            $(expand).height(pHeight);
        } else {
            $(expand).height('73');
        }
    });

    function hideMoreButton() {
        if ($('.expand')[0].scrollHeight < 95) {
            $('.tag-description').find('.trigger').hide();
        } else {
            $('.tag-description').find('.trigger').show();
        }
    }
}
$('#shop-container .colour').click(function() {
    var type = $(this).attr('data-colour');
    var itemImageHolder = $(this).closest('.item-desc').siblings('.item-image');
    $(this).closest('.item-desc').find('.merchandise-name span').html(type);
    $(this).siblings().removeClass('active');
    $(this).addClass('active');
    $(itemImageHolder).children().removeClass('active').find('.' + type).addClass('active');
    $(itemImageHolder).find('.' + type).addClass('active');
});
$('#shop-container .size').click(function() {
    $(this).siblings('.size').removeClass('active');
    $(this).addClass('active');
});
$('.tshirt-add-to-cart').click(function() {
    var productID = $(this).closest('.item-desc').siblings('.item-image').find('.active').attr('data-product-id');
    var sizeID = $(this).siblings('ul').find('.size.active').attr('data-size');
    var cartLink = $('header .cart .number');
    var cartItems = Number($(cartLink).text());
    var data = {
        'product_id': productID,
        'products_option_id': sizeID
    };
    $('.loading').fadeIn();
    $.ajax({
        url: '/shop/add-to-cart',
        type: 'POST',
        data: data
    }).then(function(response) {
        $('header .cart .number').addClass('zoomIn');
        $('header .cart').fadeIn();
        $(cartLink).text(cartItems + 1);
        message(Lang.get('success.success'), Lang.get('success.user_added_to_cart'));
        $('#adblockAlert').fadeOut();
        if (window.location.href.indexOf("cart") > -1) {
            location.reload();
        } else {
            $('.loading').fadeOut();
        }
        setTimeout(function() {
            $('header .cart .number').removeClass('zoomIn');
        }, 2000);
    }, function(error) {
        $('.loading').fadeOut();
        if (error.status === 401) {
            window.location.href = absolute_url + '/login';
        } else {
            message(Lang.get('errors.error'), 'Error occured.');
        }
    });
});
$('.add-to-cart').click(function(e) {
    e.preventDefault();
    var product_id = $(this).attr('data-product-id'),
        course_id = $(this).attr('data-course-id'),
        cartLink = $('header .cart .number'),
        cartItems = Number($(cartLink).text()),
        data = {
            'product_id': product_id,
            'course_id': course_id
        },
        $this = $(this);
    $('.loading').fadeIn();
    $.ajax({
        url: '/shop/add-to-cart',
        type: 'POST',
        data: data
    }).then(function(response) {
        $('header .cart .number').addClass('zoomIn');
        $('header .cart').fadeIn();
        $(cartLink).text(cartItems + 1);
        $('#adblockAlert').fadeOut();
        message(Lang.get('success.success'), Lang.get('success.user_added_to_cart'));
        setTimeout(function() {
            $('header .cart .number').removeClass('zoomIn');
        }, 2000);
        if (!$this.hasClass('open-popup') && window.location.href != absolute_url + '/shop/merchandise') {
            window.location.href = absolute_url + '/shop/cart';
        } else {
            $('.loading').fadeOut();
        }
    }, function(error) {
        $('.loading').fadeOut();
        if (error.status === 401) {
            window.location.href = absolute_url + '/login';
        } else {
            message(Lang.get('errors.error'), 'Error occured.');
        }
    });
});
$('.edit-name-cart').blur(function(e) {
    var field = this;
    var id = $(this).attr('data-id');
    $('.loading').fadeIn();
    $.ajax({
        url: '/user/' + $(this).attr('data-user-id'),
        method: 'PATCH',
        data: {
            field: $(field).attr('name'),
            value: $(field).val()
        },
        success: function(data) {
            $('.loading').fadeOut();
            $('.name-static strong').text($('#firstname-' + id).val() + ' ' + $('#lastname-' + id).val());
            $('.fname').val($('#firstname-' + id).val());
            $('.lname').val($('#lastname-' + id).val());
            message(Lang.get('success.success'), data.message);
        },
        error: function(e) {
            $('.loading').fadeOut();
        }
    });
});
$('.cart-name-update').click(function(e) {
    e.preventDefault();
    $(this).prev('.name-holder').slideToggle();
    if ($(this).text() == 'Update my name') {
        $(this).text('Done');
    } else {
        $(this).text('Update my name');
    }
});
$('#toggle-currency-converter').click(function(e) {
    $('#currency-converter').slideToggle();
});

function checkout() {
    var addressID;
    var allowPayment = false;
    var shippingType = 'normalShipping';
    var shippingPrice = 0;
    var old_value = null;
    if ($('.body').hasClass('no-shipping')) {
        $('.order-details .payment .section-title .number').text('1');
        $('.shipping-holder .selected-shipping').text('0.00');
    }
    $('#cart-page .next-page').click(function(e) {
        if ($('#cart-page .body ul').children().length == 0) {
            e.preventDefault();
            message('warning', 'Your cart is empty. Please add items to it in order to continue.');
        }
    });
    if ($('.checkout-page').length == 1) {
        checkForReturningUser();
    }

    function checkForReturningUser() {
        var order_id = $('#cart-page').attr('data-order-id');
        var url = window.location.protocol + '//' + window.location.host + '/shop/cart';
        $('.loading').fadeIn();
        var data = {
            'order_id': order_id
        };
        $.ajax({
            url: '/shop/buy/disperse',
            type: 'POST',
            data: data
        }).then(function(response) {
            $('.loading').fadeOut();
            if (response == 'reload') {
                window.location.replace(url);
            }
        }, function(error) {
            $('.loading').fadeOut();
        });
    }

    function updatePrices(sub, ship, total) {
        var subtotal = parseFloat(sub);
        var shipping = parseFloat(ship);
        var discount = parseFloat(sub - total).toFixed(2);
        var totalAmount = total;
        $('.subtotal-price .element-price').text(subtotal);
        $('.coupon-price .coupon-discount').text(discount);
        if ($('#cart-page').hasClass('checkout-process')) {
            if (discount > 0) {
                totalAmount = parseFloat(shipping + subtotal - discount).toFixed(2);
            } else {
                totalAmount = parseFloat(shipping + subtotal).toFixed(2);
            }
            $('.shipping-holder .selected-shipping').text(shipping);
        } else {
            if (discount > 0) {
                totalAmount = parseFloat(subtotal - discount).toFixed(2);
            }
        }
        if (totalAmount < 0) {
            totalAmount = 0;
        }
        $('.total-price .final-price').text(totalAmount);
    }
    $('.additional-payment-trigger').click(function() {
        $(this).toggleClass('active');
        $('.additional-payment-options').slideToggle();
        $('.payment input[type="radio"]').each(function() {
            this.checked = false;
        });
    });
    $('#paypal, #credit-card').on('change', function() {
        $('.additional-payment-trigger').removeClass('active');
        $('.additional-payment-options').fadeOut();
    });
    $('.address-line').on('click', function() {
        allowPayment = false;
        $('#choose_address').show();
    });
    $('.pay-btn').click(function(e) {
        e.preventDefault();
        var paymentID = $(this).siblings('.payment-method').val();
        var data = {
            'id': paymentID,
            'shipping': shippingType,
            'address_id': addressID
        };
        if ($('#cart-page .body').hasClass('no-shipping')) {
            allowPayment = true;
            data = {
                'id': paymentID,
                'shipping': '',
                'address_id': ''
            }
        }
        if (allowPayment) {
            $('.loading').fadeIn();
            $.ajax({
                url: '/shop/buy/prepare',
                type: 'POST',
                data: data
            }).then(function() {
                window.location.href = 'buy/run';
            }, function(error) {
                $('.loading').fadeOut();
                message(Lang.get('errors.error'), Lang.get('errors.unknown'));
            });
        } else {
            message(Lang.get('warnings.warning'), Lang.get('warnings.confirm'));
        }
    });
    $('#choose_address').click(function(e) {
        e.preventDefault();
        addressID = Number($('.address option:selected').val()) || '';
        var address1 = $('.address #address_1').val();
        var address2 = $('.address #address_2').val();
        var city = $('.address #city').val();
        var county = $('.address #county').val();
        var country = $('.address #country option:selected').text();
        var countryCode = $('.address #country option:selected').val();
        var postcode = $('.address #postcode').val();
        var poBox = $('.address #po-box').val();
        var phone = $('.address #phone').val();
        var data = {
            'id': addressID,
            'line1': address1,
            'line2': address2,
            'city': city,
            'state': county,
            'postcode': postcode,
            'pobox': poBox,
            'phone': phone,
            'country': countryCode
        };
        if (data.line1.length != 0 && data.city.length != 0) {
            $('.loading').fadeIn();
            $.ajax({
                type: 'POST',
                url: '/shop/buy/shipping-address-save',
                data: data
            }).then(function(response) {
                $('.loading').fadeOut();
                if (response.expressShipping && response.normalShipping) {
                    allowPayment = true;
                    message(Lang.get('success.success'), Lang.get('success.order_address'));
                } else if (!response.expressShipping && response.normalShipping) {
                    allowPayment = true;
                    message('Warning', 'Unable to verify this address for express shipping. You may still continue.');
                } else {
                    message('Warning', 'Unable to verify this address for express shipping. You may still continue, we will be in touch if we encounter problems.');
                    allowPayment = true;
                    return;
                }
                if (addressID == '') {
                    addressID = response.addressId;
                    var option = '<option selected value="' + addressID + '" ' + 'data-address-1="' + address1 + '" ' + 'data-address-2="' + address2 + '" ' + 'data-city="' + city + '" ' + 'data-county="' + county + '" ' + 'data-postcode="' + postcode + '" ' + 'data-po-box="' + poBox + '" ' + 'data-country="' + country + '" ' + 'data-country-code="' + countryCode + '" ' + 'data-phone="">' + address1 + ', ' + city + ',' + country + '</option>';
                    $('#select-address').append(option);
                }
                $('#choose_address').hide();
                if (typeof response.normalShipping.price != 'undefined') {
                    shippingPrice = response.normalShipping.price;
                    $('.shipping #standard').attr('data-price', response.normalShipping.price);
                } else {
                    $('.shipping #standard').attr('data-price', "");
                }
                if (typeof response.expressShipping.price != 'undefined') {
                    $('.shipping #express').attr('data-price', response.expressShipping.price);
                } else {
                    $('.shipping #express').attr('data-price', "");
                }
                if (typeof response.normalShipping.delivered_at != 'undefined') {
                    $('.standard').fadeIn();
                    $('.shipping .standard-arrival .highlight').text(response.normalShipping.delivered_at);
                } else {
                    $('.standard').fadeOut();
                    $('.shipping #express').prop('checked', 'checked');
                }
                if (typeof response.expressShipping.delivered_at != 'undefined') {
                    var express = response.expressShipping.delivered_at.date;
                    $('.express').fadeIn();
                    $('.shipping .express-arrival .highlight').text(express.substr(0, 10));
                } else {
                    $('.express').fadeOut();
                    $('.shipping #standard').prop('checked', 'checked');
                }
                $.each(response.order.orders_products, function(i, item) {
                    var product = $('*[data-o-product-id="' + item.id + '"] .price');
                    product.text('€' + item.price);
                });
                if (response.expressShipping.price == 0 || response.expressShipping == false) {
                    $('.express').fadeOut();
                    $('.shipping #standard').prop('checked', 'checked');
                    message('Warning', 'Express shipping not available for this order.');
                }
                $('li.shipping').removeClass('shipping-disabled');
                updatePrices(response.order.amount, response.order.shipping.price, response.order.total);
            }, function(error) {
                allowPayment = false;
                $('.loading').fadeOut();
                message(Lang.get('errors.error'), Lang.get('errors.general_error'));
            });
        } else {
            if (address1.length == 0) {
                message(Lang.get('warnings.warning'), Lang.get('warnings.complete_address_line_1'));
            }
            if (city.length == 0) {
                message(Lang.get('warnings.warning'), Lang.get('warnings.complete_address_city'));
            }
        }
    });
    $('#select-address').on('change', function() {
        var address1 = $(this).find(':selected').attr('data-address-1');
        var address2 = $(this).find(':selected').attr('data-address-2');
        var city = $(this).find(':selected').attr('data-city');
        var county = $(this).find(':selected').attr('data-county');
        var country = $(this).find(':selected').attr('data-country');
        var countryCode = $(this).find(':selected').attr('data-country-code');
        var postcode = $(this).find(':selected').attr('data-postcode');
        var poBox = $(this).find(':selected').attr('data-po-box');
        var phone = $(this).find(':selected').attr('data-phone');
        $('#choose_address').show();
        $('.address #address_1').val(address1);
        $('.address #address_2').val(address2);
        $('.address #city').val(city);
        $('.address #county').val(county);
        $('.address #country').val(countryCode);
        $('.address #postcode').val(postcode);
        $('.address #po-box').val(poBox);
        $('.address #phone').val(phone);
    });
    $('.shipping input[type="radio"]').on('change', function() {
        $(this).prop('checked');
        var priceSubtotal = Number($('.total-holder .subtotal-price .element-price').text());
        var discount = Number($('.total-holder .coupon-discount').text()) ? Number($('.total-holder .coupon-discount').text()) : 0;
        shippingPrice = Number($(this).attr('data-price'));
        shippingType = $(this).val();
        var calculation = parseFloat(priceSubtotal + shippingPrice - discount).toFixed(2);
        $('.total-holder .total-price .final-price').text(calculation);
        $('.total-holder .selected-shipping').text(shippingPrice);
    });
    $('.current-quantity').each(function(index, item) {
        if ($(item).text() == 1) {
            $(item).siblings('.decrease').attr('disabled', 'disabled');
        }
    });
    $('.increase').click(function() {
        var orderID = $(this).attr('data-id');
        var triggerBtn = $(this);
        var currentQuantity = $(this).siblings('.current-quantity').text();
        $(this).attr('disabled', 'disabled');
        $('.loading').fadeIn();
        $.ajax({
            type: 'GET',
            url: 'increase-amount-cart/' + orderID,
            success: function(response) {
                $('.loading').fadeOut();
                currentQuantity = Number(currentQuantity) + 1;
                $(triggerBtn).siblings('.current-quantity').text(currentQuantity);
                $(triggerBtn).siblings('.decrease').removeAttr('disabled');
                $(triggerBtn).removeAttr('disabled');
                $('#product-id-' + orderID + ' .price').text('€' + response.changed_product.new_price);
                updatePrices(response.order.amount, response.order.shipping.price, response.order.total);
            },
            error: function(error) {
                message(Lang.get('errors.error'), Lang.get('errors.increase_quantity'));
                $('.loading').fadeOut();
                $(triggerBtn).removeAttr('disabled');
            }
        });
    });
    $('.decrease').click(function() {
        var orderID = $(this).attr('data-id');
        var triggerBtn = $(this);
        var currentQuantity = $(this).siblings('.current-quantity').text();
        $(this).attr('disabled', 'disabled');
        if (currentQuantity == 1) {
            $(this).attr('disabled', 'disabled');
        } else {
            $('.loading').fadeIn();
            $.ajax({
                type: 'GET',
                url: 'decrease-amount-cart/' + orderID,
                success: function(response) {
                    $('.loading').fadeOut();
                    currentQuantity = Number(currentQuantity) - 1;
                    $(triggerBtn).siblings('.current-quantity').text(currentQuantity);
                    if (currentQuantity === 1) {
                        $(triggerBtn).attr('disabled', 'disabled');
                    } else {
                        $(triggerBtn).removeAttr('disabled');
                    }
                    $('#product-id-' + orderID + ' .price').text('€' + response.changed_product.new_price);
                    updatePrices(response.order.amount, response.order.shipping.price, response.order.total);
                },
                error: function(error) {
                    $('.loading').fadeOut();
                    message(Lang.get('errors.error'), Lang.get('errors.decrease_quantity'));
                    $(triggerBtn).removeAttr('disabled');
                }
            });
        }
    });
    $('.addFrame').on('click', function(e) {
        e.preventDefault();
        var orderID = $(this).attr('data-id');
        var product = $('#product-id-' + orderID);
        var image = $(product).children().find('.product-image');
        var imageProductId = $(image).attr('data-product');
        $('.loading').fadeIn();
        $.ajax({
            type: 'GET',
            url: 'upgrade-product-cart/' + orderID,
            success: function(response) {
                var productID = response.changed_product.new_product_id;
                var newImage = $(image).attr('src').replace('/' + imageProductId + '/', '/' + (Number(imageProductId) + 1) + '/');
                $(image).attr('data-product', (Number(imageProductId) + 1));
                $(image).attr('src', newImage);
                $('.loading').fadeOut();
                if (productID == 3 || productID == 5) {
                    $(product).find('.frame-status').remove();
                    $(product).find('.item-frame').children().remove();
                } else {
                    $(product).removeClass('pdf');
                    $(product).find('.frame-status').children('.status').text(Lang.get('common.not_framed'));
                    $(product).find('.frame-status').children('.addFrame').text(Lang.get('common.add_frame'));
                    $(product).find('.item-frame').children('.option').text(Lang.get('common.not_framed'));
                    $(product).find('.item-frame').children('.addFrame').text(Lang.get('common.add_frame'));
                }
                $('#product-id-' + orderID + ' .price').text('€' + response.changed_product.new_price);
                $(product).find('.item').children('.text').children('.product-name').text(response.changed_product.new_name);
                updatePrices(response.order.amount, response.order.shipping.price, response.order.total);
            },
            error: function(error) {
                message(Lang.get('errors.error'), Lang.get('errors.upgrade'));
                $('.loading').fadeOut();
            }
        });
    });
    $('.item .remove').click(function(e) {
        e.preventDefault();
        var cartLink = $('header .cart .number');
        var cartItems = Number($(cartLink).text());
        var orderID = $(this).attr('data-id');
        $('.loading').fadeIn();
        $.ajax({
            type: 'GET',
            url: 'remove-from-cart/' + orderID,
            success: function(response) {
                $('.loading').fadeOut();
                $('#product-id-' + orderID).remove();
                if (cartItems == 1) {
                    $(cartLink).text(0);
                } else {
                    $(cartLink).text(cartItems - 1);
                }
                updatePrices(response.order.amount, response.order.shipping.price, response.order.total);
            },
            error: function(error) {
                message(Lang.get('errors.error'), Lang.get('errors.removed'));
                $('.loading').fadeOut();
            }
        });
    });
    $('.voucherBtn').click(function(e) {
        e.preventDefault();
        var couponCode = $.trim($('.coupon-holder #coupon').val());
        if (couponCode.length > 0) {
            $('.loading').fadeIn();
            $.ajax({
                type: 'GET',
                url: 'promo-code/' + couponCode,
                success: function(response) {
                    $('.loading').fadeOut();
                    if (response.voucher_status.voucher_status == 'success') {
                        message(Lang.get('success.success'), response.voucher_status.voucher_message);
                        $('.coupon-holder .notice').html('<strong class="success">' + Lang.get('success.valid_promotion_applied') + ' ' + response.voucher_status.voucher_message + '</strong>');
                        $('.coupon-holder #coupon').val(response.voucher_status.voucher_message).attr('disabled', 'disabled').removeAttr('id');
                        $('.coupon-holder button[type="submit"]').text('Code Applied').attr('disabled', 'disabled').removeClass('voucherBtn');
                        updatePrices(response.order.amount, response.order.shipping.price, response.order.total);
                    } else if (response.voucher_status.voucher_status == 'failed') {
                        $('.coupon-holder .notice').html('<strong class="error">' + Lang.get('voucher.no_voucherable_items') + '</strong>');
                        message(Lang.get('warnings.warning'), Lang.get('voucher.no_voucherable_items'));
                    } else {
                        $('.coupon-holder .notice').html('<strong class="error">' + Lang.get('errors.voucher_not_valid') + '</strong>');
                        message(Lang.get('errors.error'), Lang.get('errors.voucher_not_valid'));
                    }
                },
                error: function(error) {
                    message(Lang.get('errors.error'), Lang.get('errors.add_code'));
                    $('.loading').fadeOut();
                }
            });
        } else {
            $('.coupon-holder .notice').html('<strong class="error">' + Lang.get('errors.voucher_not_valid') + '</strong>');
            message(Lang.get('errors.error'), Lang.get('errors.voucher_not_valid'));
        }
    });
}

function clickEvents() {
    $('.search-trigger').click(function() {
        $('.alternative-search').slideToggle();
        $(this).toggleClass('open');
        $('.menu-trigger').removeClass('open').find('.trigger').removeClass('open');;
        $('.dropdown-nav').slideUp();
        $('.lang .trigger').removeClass('open');
        $('.dropdown-lang').slideUp();
    });
    $('.link .trigger').click(function() {
        $(this).siblings('.dropdown-lang').fadeToggle();
    });
    $('.coupon-trigger').click(function(e) {
        e.preventDefault();
        $(this).next('.coupon-holder-main').slideToggle();
    });
    $('.lang .trigger').click(function() {
        if (!$(this).hasClass('open')) {
            $(this).toggleClass('open');
            $('.dropdown-lang').slideDown();
            if ($('.search-trigger').hasClass('open')) {
                $('.alternative-search').slideToggle();
                $('.search-trigger').toggleClass('open');
            }
            if ($('.menu-trigger .trigger').hasClass('open')) {
                $('.menu-trigger').toggleClass('open').find('.trigger').toggleClass('open');
                $('.dropdown-nav').slideToggle();
            }
        } else {
            $(this).toggleClass('open');
            $('.dropdown-lang').slideUp();
        }
    });
    $('.menu-trigger').click(function() {
        if (!$(this).hasClass('open')) {
            $(this).toggleClass('open').find('.trigger').toggleClass('open');
            $('.dropdown-nav').slideDown();
            if ($('.search-trigger').hasClass('open')) {
                $('.alternative-search').slideToggle();
                $('.search-trigger').toggleClass('open');
            }
            if ($('.lang .trigger').hasClass('open')) {
                $('.lang .trigger').toggleClass('open');
                $('.dropdown-lang').slideToggle();
            }
        } else {
            $(this).toggleClass('open').find('.trigger').toggleClass('open');
            $('.dropdown-nav').slideUp();
        }
    });
        
}

function hoverEvents() {
    var timeHover;
    $('.dropdown-nav').on('mouseleave', function() {
        timeHover = setTimeout(function() {
            $('.menu-trigger').removeClass('open').find('.trigger').removeClass('open');
            $('.dropdown-nav').slideUp();
        }, 400);
    }).on('mouseenter', function() {
        clearTimeout(timeHover);
    });
    $('.dropdown-lang').on('mouseleave', function() {
        $('.lang .trigger').removeClass('open');
        $('.dropdown-lang').slideUp();
    });
    $('.alternative-search').on('mouseleave', function() {
        $('.alternative-search').slideToggle();
        $('.search-trigger').toggleClass('open');
    });
}

function starRating() {
    var stars = $('.stars');
    var starsChildren = $(stars).toArray();
    $.fn.starFill = function() {
        $(this).removeClass('icon-star');
        $(this).addClass('icon-filled-star')
    };
    $.fn.starLine = function() {
        $(this).parent().find('.line').html($(this).attr('data-line'));
    };
    $.fn.starUnfill = function() {
        $(this).removeClass('icon-filled-star');
        $(this).addClass('icon-star')
        $(this).parent().find('.line').html('');
    };
    $.fn.starsSet = function(nb) {
        var children = $(this).children('span');
        var count = 0;
        $(children).each(function() {
            if (count < nb) {
                $(this).starFill();
            }
            count++;
        });
    };
    $(starsChildren).each(function() {
        var children = $(this).children('span');
        var starNumber = $(this).attr('data-fill');
        $(children).slice(0, starNumber).starFill();
    });
    $('.rating').each(function() {
        var children = $(this).children('span');
        $(children).hover(function() {
            $(this).starFill();
            $(this).starLine();
            var after = false;
            var count = 1;
            $(children).each(function() {
                if ($(this).hasClass('icon-filled-star')) {
                    after = true;
                }
                if (!after) {
                    count++;
                    $(this).starFill();
                }
            });
            $(this).parent().attr('data-fill', count);
        });
        $(children).on('mouseout', function() {
            $(children).starUnfill();
        });
        $(children).click(function() {
            var star = $(this);
            var widget = $(star).parent();
            var id = $(widget).attr('data-id');
            var path = $(widget).attr('data-path');
            var nb = $(widget).attr('data-fill');
            $('.loading').fadeIn();
            $.ajax({
                url: '/' + path + '/' + id + '/rating',
                type: 'post',
                data: {
                    rating: $(this).parent().attr('data-fill')
                },
                success: function(data) {
                    $('.loading').fadeOut();
                    if (!data.status || data.status != 'success') {
                        return;
                    }
                    $(star).starLine();
                    $(widget).starsSet(nb);
                    $(widget).children().off();
                    $(widget).children().css('cursor', 'default');
                    message(Lang.get('success.success'), data.message);
                },
                error: function(error) {
                    $('.loading').fadeOut();
                }
            });
        });
    });
}
$('.toggle-button').click(function() {
    $('#support').toggleClass('open');
});
if (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i)) {
    var viewport = document.querySelector('meta[name="viewport"]');
    if (viewport) {
        viewport.content = 'width=device-width, minimum-scale=1.0, maximum-scale=1.0';
        document.body.addEventListener('gesturestart', function() {
            viewport.content = 'width=device-width, minimum-scale=1.0, maximum-scale=2.0';
        }, false);
    }
}

function openTab() {
    $('.tab-title').on('click', function(e) {
        if ($(this).attr('data-url')) {
            return;
        }
        e.preventDefault();
        e.stopImmediatePropagation();
        if (!$(this).hasClass('active')) {
            var attrName = $(this).attr('data-name');
            var elemName = $.find('#' + attrName);
            if (attrName === 'login' || attrName === 'signup' || attrName === 'forgotpassword') {
                if (!($(this).hasClass('active'))) {
                    $(this).insertBefore($(this).prev());
                }
                if (attrName === 'login') {
                    $('#welcome').show();
                    $('#join-us').hide();
                    $('.tab-title').removeClass('active');
                } else if (attrName === 'signup') {
                    $('#welcome').hide();
                    $('#join-us').show();
                    $('.tab-title').removeClass('active');
                } else {
                    $('.tab-title').removeClass('active');
                }
            }
            $(this).siblings('.tab-title').removeClass('active');
            $(this).addClass('active');
            $('.tab-content').find(elemName).siblings().removeClass('active').hide();
            $('.tab-content').find(elemName).fadeIn('fast').addClass('active');
        }
    });
    var errors = $.find('.error-message');
    if (errors.length) {
        var tab = $(errors).first().closest('.tab');
        $(tab).parent().children().removeClass('active');
        $(tab).addClass('active');
    }
}
$('.login-modal .switch-tab').click(function(e) {
    e.preventDefault();
    if (!$(this).hasClass('login-account')) {
        $('#login.tab').removeClass('active').hide().next().addClass('active').show();
    } else {
        $('#signup.tab').removeClass('active').hide().prev().addClass('active').show();
    }
    $('.login-modal').toggleClass('register');
});
if ($('.login-modal').length > 0) {
    if ($('.inner-modal #login .error-message').length > 0) {
        $('.login-modal').fadeIn(function() {
            $('.inner-modal').fadeIn();
        })
    } else if ($('.inner-modal #signup .error-message').length > 0) {
        $('#signup').addClass('active').show().prev().removeClass('active').hide();
        $('.login-modal').fadeIn(function() {
            $('.inner-modal').fadeIn();
        });
        $('.login-modal').toggleClass('register');
    }
}
if (typeof localStorage !== "undefined" && $('.modal-outer').length > 0) {
    if (!localStorage.getItem('modalClosed')) {
        setTimeout(function() {
            $('.login-modal').fadeIn(function() {
                $('.inner-modal').fadeIn();
            });
        }, 30000);
    }
    $('.close-modal').click(function() {
        $('.login-modal').fadeOut();
        localStorage.setItem('modalClosed', 'true');
    });
    $('.modal-outer .login-modal').click(function(e) {
        var empty = true;
        $('.modal-outer .form-control').each(function() {
            if ($(this).val() !== '') {
                empty = false;
            }
        });
        if (e.target.className === 'login-modal' && empty === true) {
            $('.login-modal').fadeOut();
            localStorage.setItem('modalClosed', 'true');
        }
    });
}

function homepageBannerBg() {
    $('.card-title').click(function() {
        var type = $(this).attr('data-name');
        $('.banner').removeAttr('id').attr('id', type + '-banner');
    });
}

function smoothScroll() {
    $('a[href*="#"]:not([href="#"], .cancel-scroll)').click(function(e) {
        e.preventDefault();
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 90
                }, 475, 'swing');
                $('html, body').animate({
                    scrollTop: target.offset().top - 90
                }, 475, 'swing');
                return false;
            }
        }
    });
}
$.fn.scrollEnd = function(callback, timeout) {
    $(this).scroll(function() {
        var $this = $(this);
        if ($this.data('scrollTimeout')) {
            clearTimeout($this.data('scrollTimeout'));
        }
        $this.data('scrollTimeout', setTimeout(callback, timeout));
    });
};
var sections = {};
$(window).load(function() {
    getPositions();
});

function getPositions() {
    var l = $('.viewport').length;
    sections = {};
    for (var x = 0; x < l; x++) {
        var curSection = $('.viewport').eq(x);
        sections[curSection.offset().top] = curSection.attr('id');
    }
}

function check_if_in_view() {
    var windowW = $(window).width();
    for (var key in sections) {
        if (!sections.hasOwnProperty(key)) {
            continue;
        }
        if ($(window).scrollTop() < ((parseInt(key) + $('#' + sections[key]).height()) - 350) && $(window).scrollTop() > (parseInt(key) - 350)) {
            if ($('.hp-nav.active a').attr('href') !== '#' + sections[key]) {
                $('.in-view').removeClass('in-view');
                $('#' + sections[key]).addClass('in-view');
                if (sections[key] === 'hp-separator') {
                    $('#' + sections[key]).addClass('animate');
                }
                $('.hp-nav.active').removeClass('active');
                $('a[href="#' + sections[key] + '"]').parent().addClass('active');
                if (windowW <= 1020) {
                    $('#' + sections[key]).addClass('mob');
                } else {
                    $('#' + sections[key]).removeClass('mob');
                }
            }
        }
    }
}

function rankSkills() {
    $(".skill-score").each(function(index) {
        var i = index
        $(this).on("click", function() {
            if ($(this).hasClass('skill-checked')) {
                $(this).toggleClass('skill-checked');
                $(this).nextAll().removeClass('skill-checked');
            } else {
                $(this).prevAll().addClass('skill-checked');
                $(this).addClass('skill-checked');
            }
            if (index > 0) {
                if (!($(this).hasClass('skill-checked'))) {
                    $(this).parent().attr("data", i);
                } else {
                    $(this).parent().attr("data", ++i);
                }
            } else {
                if (!($(this).hasClass('skill-checked'))) {
                    $(this).parent().attr("data", 0);
                } else {
                    $(this).parent().attr("data", 1);
                }
            }
        });
    });
}

function submitSkills() {
    var skillValue = $("#skill-value").val();
    var skillsDisplayed = 0;
    var skillName = [];
    $("#skill-results").find("p").each(function(index) {
        skillName.push($(this).html());
        skillsDisplayed = ++index;
    });
    if (skillValue !== "" && skillsDisplayed < 10 && !($.inArray(skillValue, skillName) > -1)) {
        var test = $("#skill-form").find(".results");
        var test2 = test.attr("data");
        $("<div id=" + ++skillsDisplayed + "><p>" + skillValue + "</p></div>").appendTo("#skill-results");
        test.clone().appendTo("#" + skillsDisplayed).parent().attr("data-sid", test2);
    }
    $('#skill-results div').sort(function(a, b) {
        return $(a).data('sid') < $(b).data('sid');
    }).appendTo('#skill-results');
}

function sharing() {
    var popupSize = {
        width: 780,
        height: 550
    };
    $(document).on('click', '.social-buttons > a', function(e) {
        var verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
            horizontalPos = Math.floor(($(window).height() - popupSize.height) / 2);
        var popup = window.open($(this).prop('href'), 'social', 'width=' + popupSize.width + ',height=' + popupSize.height + ',left=' + verticalPos + ',top=' + horizontalPos + ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');
        if (popup) {
            popup.focus();
            e.preventDefault();
        }
    });
}

function favorite(type) {
    $('.favorite-' + type).click(function(e) {
        e.preventDefault();
        var element = this;
        $('.loading').fadeIn();
        $.ajax({
            url: '/user/' + type + '/favorite/' + $(element).attr('data-id'),
            type: 'GET',
            success: function(data) {
                $('.loading').fadeOut();
                message(Lang.get('success.success'), data.message);
                if (data.attached) {
                    $(element).addClass('favorite');
                } else {
                    $(element).removeClass('favorite');
                }
            },
            error: function(data) {
                $('.loading').fadeOut();
                message(Lang.get('errors.error'), data.message);
            }
        });
    });
}

function modal() {
    $('button[data-type="modal"]').click(function() {
        var modalId = $('#' + $(this).attr('data-id'));
        $(modalId).find('.errors').hide();
        $(modalId).find('textarea,[type=text]').val('');
        $(modalId).find('.modal-content').show();
        $(modalId).show();
    });
    $('.close').click(function() {
        var parent = $(this).parent().parent().parent();
        if ($(parent).hasClass('modal')) {
            $(parent).closeModal();
            return;
        }
        parent = $(parent).parent();
        if ($(parent).hasClass('modal')) {
            $(parent).closeModal();
            return;
        }
    });
    $(window).click(function(event) {
        if ($(event.target).hasClass('modal')) {
            if ($(event.target).hasClass('modal-no-close-on-click-out')) {
                return;
            }
            $(event.target).closeModal();
        }
    });
    $.fn.closeModal = function() {
        $(this).find('.modal-content').slideUp(function() {
            $(this).parent().fadeOut('fast');
        });
    };
}

function congratulations() {
    if (!$('#congratulations').length) {
        return;
    }
    $('#congratulations form').submit(function(e) {
        var form = $(this);
        $('.loading').fadeIn();
        $.ajax({
            url: $(this).attr("action"),
            type: 'POST',
            data: $(this).serializeArray(),
            success: function(data) {
                $('.loading').fadeOut();
                if (!data.status || data.status != 'success') {
                    return;
                }
                message(Lang.get('success.success'), data.message);
                $(form).find("input,textarea").prop("disabled", true);
                $('.errors').hide();
                $(form).find(".btn").slideUp(function() {
                    $(form).find(".footer").slideUp();
                });
            },
            error: function(data) {
                $('.loading').fadeOut();
                $(form).validate(data.responseJSON);
            }
        });
        e.preventDefault();
    });
}

function scrollToDownloads() {
    var url = window.location.hash.split('#')[1];
    if (typeof url !== 'undefined' && url === 'download_history') {
        $('.tab-title[data-name="' + url + '"] a').trigger("click");
        $('html, body').animate({
            scrollTop: $('.tab-title[data-name="' + url + '"]').offset().top - 120
        }, 500);
    }
}

function coursePlanAccordion() {}