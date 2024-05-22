var Jackpots = Jackpots || (function () {
    var digitsAfterDot, stepCount = 0;
    var isMobile = false;
    function startJack(nodes, numbers) {

        if (nodes.length > 0) {
            for (var i = 0; i < nodes.length; i++) {
                nodes[i].number = numbers[i];
                nodes[i].jackpot = new FlipJackpotNumbers({
                    node: nodes[i],
                    from: numbers[i] == 0 ? 0 : numbers[i] - stepCount,
                    seperateOnly: digitsAfterDot,
                });
            }
        }


        var data = {
            currentLevelI: numbers[0],
            currentLevelII: numbers[1],
            currentLevelIII: numbers[2],
            currentLevelIV: numbers[3],
        }
        flip(data, nodes);

        if (!isMobile) {
            setJackpotHoverPosition();
        }
    }

    function flip(result, nodes) {
        if (nodes[0].number > result.currentLevelI) {
            nodes[0].jackWon = true;
            nodes[0].classList.add('blink');
        } else {
            if (nodes[0].jackWon) {
                nodes[0].jackpot.destroy();
                nodes[0].jackpot = new FlipJackpotNumbers({
                    node: nodes[0],
                    from: nodes[0].number,
                    seperateOnly: digitsAfterDot,
                });
                nodes[0].jackWon = false;
            }
            if ((nodes[0].number - stepCount).toString().length < result.currentLevelI.toString().length) {
                nodes[0].children[0].classList.remove('hide');
            }
            nodes[0].jackpot.flipTo({
                to: result.currentLevelI,
                direct: false
            });
        }
        if (nodes[1].number > result.currentLevelII) {
            nodes[1].jackWon = true;
            nodes[1].classList.add('blink');
        } else {
            if (nodes[1].jackWon) {
                nodes[1].jackpot.destroy();
                nodes[1].jackpot = new FlipJackpotNumbers({
                    node: nodes[1],
                    from: nodes[1].number,
                    seperateOnly: digitsAfterDot,
                });
                nodes[1].jackWon = false;
            }
            if ((nodes[1].number - stepCount).toString().length < result.currentLevelII.toString().length) {
                nodes[1].children[0].classList.remove('hide');
            }
            nodes[1].jackpot.flipTo({
                to: result.currentLevelII,
                direct: false
            });
        }
        if (nodes[2].number > result.currentLevelIII) {
            nodes[2].jackWon = true;
            nodes[2].classList.add('blink');
        } else {
            if (nodes[2].jackWon) {
                nodes[2].jackpot.destroy();
                nodes[2].jackpot = new FlipJackpotNumbers({
                    node: nodes[2],
                    from: nodes[2].number,
                    seperateOnly: digitsAfterDot,
                });
                nodes[2].jackWon = false;
            }
            if ((nodes[2].number - stepCount).toString().length < result.currentLevelIII.toString().length) {
                nodes[2].children[0].classList.remove('hide');
            }
            nodes[2].jackpot.flipTo({
                to: result.currentLevelIII,
                direct: false
            });
        }

        if (nodes[3].number > result.currentLevelIV) {
            nodes[3].jackWon = true;
            nodes[3].classList.add('blink');
        } else {
            if (nodes[3].jackWon) {
                nodes[3].jackpot.destroy();
                nodes[3].jackpot = new FlipJackpotNumbers({
                    node: nodes[3],
                    from: nodes[3].number,
                    seperateOnly: digitsAfterDot,
                });
                nodes[3].jackWon = false;
            }
            if ((nodes[3].number - stepCount).toString().length < result.currentLevelIV.toString().length) {
                nodes[3].children[0].classList.remove('hide');
            }
            nodes[3].jackpot.flipTo({
                to: result.currentLevelIV,
                direct: false
            });
        }
        nodes[0].number = result.currentLevelI;
        nodes[1].number = result.currentLevelII;
        nodes[2].number = result.currentLevelIII;
        nodes[3].number = result.currentLevelIV;

        window.jackInterval = setTimeout(() => {
            $.ajax({
                url: "/NewCommon/GetJack",
                type: "POST",
                datatype: "json",
                success: function (result) {
                    flip(result, nodes);
                }
            })
        }, 30050);
    }

   
    $(window).scroll(function () {
        if (!isMobile && document.querySelector('.top_jackpots__block')) {
            setJackpotHoverPosition();
        }
    });
    

    function setJackpotHoverPosition() {
        let scrolledval = $(window).scrollTop();
        let needScrollVal = $('.top_jackpots__block').offset().top - ($(window).height() / 2);
        if (scrolledval > needScrollVal) {
            $('.top_jackpots__hover_block').css({ 'bottom': 'auto', 'top': '100%' })
        } else {
            $('.top_jackpots__hover_block').css({ 'bottom': '100%', 'top': 'auto' })
        }
    }

    return {
        init: function (data) {
            if (typeof window.jackInterval != 'undefined') {
                clearInterval(window.jackInterval);
            }
            digitsAfterDot = data.digitsAfterDot;
            stepCount = data.stepCount;
            this.isMobile = isMobile = data.isMobile;
            startJack(data.nodes, data.numbers);
        },
        destroy: function (nodes) {

            if (nodes.length > 0) {
                for (var i = 0; i < nodes.length; i++) {
                    if (typeof nodes[i].jackpot == 'object') {
                        nodes[i].jackpot.destroy();
                    }
                }
            }
            if (typeof window.jackInterval != 'undefined') {
                clearInterval(window.jackInterval);
            }

        }
    }


})();
$(document).on('click', '.js_egt_link', function (e) {
    e.preventDefault();
    e.stopPropagation();
    if (document.location.href.toLowerCase().includes('/lobby/')) {
        let slotGroup = $('[data-url="slots"]');
        let egtcat = $('[data-url="amusnetinteractiveegt"]');
        let urlSplitted = document.location.href.toLowerCase().split('main');
        let allowClick = true;
        if (urlSplitted.length > 1 && urlSplitted[1] == '/slots/amusnetinteractiveegt') {
            allowClick = false;
        }
        if (slotGroup.length > 0 && egtcat.length > 0) {
            if (allowClick) {
                $('.js_dl_groups').removeClass('active');
                $('.js_dl_categories').removeClass('active');
                slotGroup[0].classList.add('active');
                egtcat[0].classList.add('active');
                gamesData.Page = 0;
                imgSortIndex = 0;
                gamesData.CategoryId = [egtcat[0].dataset.id];
                gamesData.GroupId = slotGroup[0].dataset.id;
                gamesData.GroupTypeId = slotGroup[0].dataset.typeId;
                gamesData.TakeCount = slotGroup[0].dataset.takeCount;
                GetGames('js_games_lobby');
                setPageUrl();
            }


            if (Jackpots.isMobile) {
                let grScrollCont = $(document.getElementsByClassName('js_dl_groups active')[0]).parents('.scroll-x')[0];
                waitForMenu('.js_dl_groups.active').then(elem => $(grScrollCont).animate({ scrollLeft: elem.offsetLeft - 15 }, 0));

                let catScrollCont = $(document.getElementsByClassName('js_dl_categories active')[0]).parents('.scroll-x')[0];
                waitForMenu('.js_dl_categories.active').then(elem => $(catScrollCont).animate({ scrollLeft: elem.offsetLeft - 15 }, 0));

                $('html, body').animate({
                    scrollTop: $(slotGroup[0]).offset().top - 500
                }, 200);

                $('body').removeClass('ofh');
                $('#js_topJackpot_cover').remove();
                $('.top_jackpots__hover_block').css('bottom', '-500px');
            } else {
                let scrGrNavElem = document.getElementById('js_lobby_groups_nav');
                $(scrGrNavElem).animate({ scrollLeft: slotGroup[0].parentNode.offsetLeft - 40 }, 0);
                setScrollBtnsClass(scrGrNavElem, scrGrNavElem.scrollLeft, 'js_groups_nav_left_btn', 'js_groups_nav_right_btn', 'js_groups_nav_shadow');
                $('html, body').animate({
                    scrollTop: $(slotGroup[0]).offset().top - 500
                }, 200);
            }
        }
    } else {
        document.location.href = '/' + GamesCommon.language + '/Lobby/Casino/Main/Slots/Amusnetinteractiveegt';
    }
});