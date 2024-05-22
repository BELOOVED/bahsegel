function waitForMenu(n, t) {
    return new Promise(i=>{
        if (document.querySelector(n) && document.querySelector(n).offsetLeft > 0 && (!t || document.querySelector(n).querySelector(".js_lca_line")))
            return i(document.querySelector(n));
        const r = new MutationObserver(()=>{
            document.querySelector(n) && document.querySelector(n).offsetLeft > 0 && (!t || document.querySelector(n).querySelector(".js_lca_line")) && (i(document.querySelector(n)),
            r.disconnect())
        }
        );
        r.observe(document.body, {
            childList: !0,
            subtree: !0
        })
    }
    )
}
function getDLPageContent(n, t, i) {
    var r = document.querySelector('[data-tabId="' + n + '"]');
    $.ajax({
        type: "GET",
        url: "/DynamicLobbyHelper/GetDyLobbyMobileViews?viewName=" + n + "&lobbyUrl=" + DyLobbyMob.lobbyUrl,
        success: function(u) {
            var s, h, e, f, c, o;
            if ($("#js_dl_content").html(u),
            $("#js_dl_content").find("video").attr("muted", "muted"),
            n == "Main") {
                prepareLobby(t);
                s = $(document.getElementsByClassName("js_dl_groups active")[0]).parents(".scroll-x")[0];
                waitForMenu(".js_dl_groups.active", !1).then(n=>$(s).animate({
                    scrollLeft: n.offsetLeft - 15
                }, 0));
                h = $(document.getElementsByClassName("js_dl_categories active")[0]).parents(".scroll-x")[0];
                waitForMenu(".js_dl_categories.active", DyLobbyMob.showGamesCount).then(n=>$(h).animate({
                    scrollLeft: n.offsetLeft - 15
                }, 0));
                let i = document.getElementsByClassName("js_top_winners_item_names active");
                i != null && i.length > 0 && GetBigWinsWidget(i[0].dataset.lobbyWidgetType, i[0].dataset.winsType, i[0]);
                let n = document.getElementsByClassName("js_dl_mLkd_games");
                if (n != null && n.length > 0) {
                    let t = {
                        input: []
                    }
                      , i = {
                        GroupId: n[0].dataset.id,
                        GroupTypeId: n[0].dataset.typeId,
                        TakeCount: n[0].dataset.takeCount,
                        Page: 0,
                        LobbyUrl: n[0].dataset.lobbyurl
                    };
                    n[0].dataset.page = 0;
                    t.input.push(i);
                    GetGamesByGroup(!1, t)
                }
            } else if (n == "MyGames") {
                t && changePageUrlWithoutRefreshing("/" + GamesCommon.language + "/Lobby/" + DyLobbyMob.lobbyUrl + "/MyGames", "js_dl_my_games");
                let n = {
                    input: []
                };
                for (e = document.getElementsByClassName("js_lobby_groups"),
                f = 0; f < e.length; f++)
                    c = {
                        GroupId: e[f].dataset.id,
                        GroupTypeId: e[f].dataset.typeId,
                        TakeCount: e[f].dataset.takeCount,
                        Page: 0,
                        LobbyUrl: e[f].dataset.lobbyurl
                    },
                    e[f].dataset.page = 0,
                    n.input.push(c);
                GetGamesByGroup(!1, n);
                myGamesPromoData.Page = 1;
                GetMyGamesPromotions();
                document.getElementById("js_my_games_promotion").parentNode.removeEventListener("scroll", loadPromotionsOnHzlScroll);
                document.getElementById("js_my_games_promotion").parentNode.addEventListener("scroll", loadPromotionsOnHzlScroll)
            } else if (n == "Filter") {
                if (t && changePageUrlWithoutRefreshing("/" + GamesCommon.language + "/Lobby/" + DyLobbyMob.lobbyUrl + "/Filter", "js_dl_filter"),
                $("#js_dl_search_game").val(filterData.SearchText),
                $("#js_advanced_search").addClass("checked"),
                $("#js_search_filter_title").html(DyLobbyMob.trns.GamesFilter),
                isOpenFilter = !0,
                setCatsAndGroups(),
                document.getElementById("js_stake_range")) {
                    stakeSlider = noUiSlider.create(document.getElementById("js_stake_range"), {
                        start: [filterData.MinLimit, filterData.MaxLimit],
                        connect: !0,
                        step: 1,
                        direction: "ltr",
                        range: {
                            min: rangeMinLimit,
                            max: rangeMaxLimit
                        },
                        format: {
                            to: function(n) {
                                return Math.round(n)
                            },
                            from: function(n) {
                                return Math.round(n)
                            }
                        }
                    });
                    var a = document.getElementById("js_st_rg_min")
                      , v = document.getElementById("js_st_rg_max")
                      , l = [a, v];
                    stakeSlider.on("update", function(n, t) {
                        setFilterData();
                        resetClicked = !1;
                        l[t].value = setStrFormatWithSpChar(n[t].toString(), ".")
                    });
                    stakeSlider.on("set", function() {
                        allowCheckGamesCount && checkFilterGamesCount("js_dl_filter_gm_count", !0)
                    });
                    l.forEach(function(n, t) {
                        n.removeEventListener("change", handleStakeRangeChange);
                        n.removeEventListener("keydown", handleStakeSliderKeyDown);
                        n.addEventListener("change", function() {
                            handleStakeRangeChange(t, this.value)
                        });
                        n.addEventListener("keydown", function(n) {
                            handleStakeSliderKeyDown(n, t, this.value)
                        })
                    })
                }
                setFilterData();
                checkFilterGamesCount("js_dl_filter_gm_count", !0);
                i && closeFilter()
            } else
                n == "Promotions" && (t && changePageUrlWithoutRefreshing("/" + GamesCommon.language + "/Lobby/" + DyLobbyMob.lobbyUrl + "/Promotions", "js_dl_promotions"),
                $(".tl_prom_slider_items").removeClass("promo_clicked"),
                $('.tl_prom_slider_items[val="0"]').addClass("promo_clicked"));
            for (o = 0; o < js_dl_menu_links.length; o++)
                js_dl_menu_links[o].classList.remove("active");
            i && document.getElementById("js_dl_search") ? document.getElementById("js_dl_search").classList.add("active") : r.classList.add("active");
            window.scrollTo(0, 0)
        }
    })
}
function setStakeRangeInpVals(n, t) {
    allowCheckGamesCount = !0;
    switch (n) {
    case 0:
        stakeSlider.set([t, null]);
        break;
    case 1:
        stakeSlider.set([null, t])
    }
}
function handleStakeRangeChange(n, t) {
    keyDownPressed || setStakeRangeInpVals(n, t)
}
function handleStakeSliderKeyDown(n, t, i) {
    keyDownPressed = !1;
    var e = stakeSlider.get(), u = Number(e[t]), o = stakeSlider.steps(), f = o[t], r;
    switch (n.which) {
    case 13:
        keyDownPressed = !0;
        setStakeRangeInpVals(t, i);
        break;
    case 38:
        keyDownPressed = !0;
        r = f[1];
        r === !1 && (r = 1);
        r !== null && setStakeRangeInpVals(t, u + r);
        break;
    case 40:
        keyDownPressed = !0;
        r = f[0];
        r === !1 && (r = 1);
        r !== null && setStakeRangeInpVals(t, u - r)
    }
}
function setCatsAndGroups() {
    var n, e, t, o;
    if (filterData) {
        var i = $(".js_dl_filter_groups")
          , r = $(".js_dl_filter_categories")
          , u = $(".js_dl_filter_themes")
          , f = $(".js_dl_filter_tournaments");
        if (filterData.GroupId.length > 0)
            for (n = 0; n < i.length; n++)
                for ($(i[n]).removeClass("active"),
                e = 0; e < filterData.GroupId.length; e++)
                    $(i[n]).attr("data-id") == filterData.GroupId[e] && ($(i[n]).addClass("active"),
                    n > 5 && (i.removeClass("hidden"),
                    i.siblings(".js_more_filter_items").addClass("open")));
        if (filterData.CategoryId.length > 0)
            for (t = 0; t < r.length; t++)
                for ($(r[t]).removeClass("active"),
                o = 0; o < filterData.CategoryId.length; o++)
                    $(r[t]).attr("data-id") == filterData.CategoryId[o] && ($(r[t]).addClass("active"),
                    t > 5 && (r.removeClass("hidden"),
                    r.siblings(".js_more_filter_items").addClass("open")));
        if (filterData.ThemeId.length > 0)
            for (let n = 0; n < u.length; n++) {
                $(u[n]).removeClass("active");
                for (let t = 0; t < filterData.ThemeId.length; t++)
                    $(u[n]).attr("data-themeid") == filterData.ThemeId[t] && ($(u[n]).addClass("active"),
                    n > 5 && (u.removeClass("hidden"),
                    u.siblings(".js_more_filter_items").addClass("open")))
            }
        if (filterData.TournamentId.length > 0)
            for (let n = 0; n < f.length; n++) {
                $(f[n]).removeClass("active");
                for (let t = 0; t < filterData.TournamentId.length; t++)
                    $(f[n]).attr("data-tournamentid") == filterData.TournamentId[t] && ($(f[n]).addClass("active"),
                    n > 5 && (f.removeClass("hidden"),
                    f.siblings(".js_more_filter_items").addClass("open")))
            }
    }
}
function closeFilter() {
    $("#js_advanced_search").removeClass("checked");
    $("#js_search_filter_title").html(DyLobbyMob.trns.Search);
    $("#js_dl_search_cont").addClass("hidden");
    $("#js_dl_search_game").val() != undefined && $("#js_dl_search_game").val() != "" && searchGames(document.getElementById("js_dl_search_game"), !0);
    isOpenFilter = !1
}
function openFilter() {
    $("#js_dl_searchedGames").html("");
    $("#js_advanced_search").addClass("checked");
    $("#js_search_filter_title").html(DyLobbyMob.trns.GamesFilter);
    $("#js_dl_search_cont").removeClass("hidden");
    isOpenFilter = !0;
    setFilterData();
    checkFilterGamesCount("js_dl_filter_gm_count", !0)
}
function GetGames(n, t, i) {
    allowLazyLoad = !1;
    $.ajax({
        type: "POST",
        data: gamesData,
        url: "/DynamicLobbyHelper/GetGames",
        success: function(r) {
            let f = []
              , e = r.CategoryInfo;
            for (var u = 0; u < e.length; u++)
                gamesData.CategoryId.includes(e[u].Id.toString()) && f.push(e[u].Id.toString());
            f.length > 0 ? (gamesData.CategoryId = f,
            allowLazyLoad = r.HasNext,
            drawGamesAndSetCatInfo(n, r.GamesOutput, r.CategoryInfo, t, GamesCommon.lobbyGridType, setCatInfo),
            i && (setPageUrl(),
            $("#js_dl_cats_cont").animate({
                scrollLeft: $(".js_dl_categories.active")[0].offsetLeft - 15
            }, 0))) : (gamesData.CategoryId = ["0"],
            GetGames("js_games_lobby", !1, !0),
            $("#js_dl_cats_cont").animate({
                scrollLeft: 0
            }, 0))
        }
    })
}
function GetMyGamesPromotions(n) {
    $.ajax({
        type: "POST",
        url: "/Promotions/GetPromotions",
        data: myGamesPromoData,
        success: function(t) {
            allowMyGamesPromoLazyLoad = t.HasNext;
            t && t.length > 0 || t.Promotions && t.Promotions.length > 0 ? drawMyGamesPromotions(t, n) : $("#js_my_games_promotion").parents(".js_widget_cont").remove()
        }
    })
}
function drawGamesAndSetCatInfo(n, t, i, r, u, f) {
    drawGames(n, t, r, u, GamesCommon.lobbyPreviewType, DyLobbyMob.lobbyUrl);
    f && f(i);
    window.removeEventListener("scroll", loadGamesOnScroll);
    window.addEventListener("scroll", loadGamesOnScroll)
}
function loadGamesOnScroll() {
    document.getElementById("js_cat_main_cont") && (window.pageYOffset + 55 >= document.getElementById("js_cat_main_cont").offsetTop ? document.getElementById("js_fixed_cont").classList.add("lc-fixed-menu") : document.getElementById("js_fixed_cont").classList.remove("lc-fixed-menu"));
    $(window).scrollTop() + $(window).height() >= $(document).height() - $("#footer").height() - 400 && document.getElementById("js_dl_current").classList.contains("active") && allowLazyLoad && !isOpenSearchInp && (allowLazyLoad = !1,
    gamesData.Page++,
    GetGames("js_games_lobby", !0))
}
function loadPromotionsOnHzlScroll() {
    this.scrollWidth - this.scrollLeft - 200 <= this.clientWidth && document.getElementById("js_dl_my_games").classList.contains("active") && allowMyGamesPromoLazyLoad && (allowMyGamesPromoLazyLoad = !1,
    myGamesPromoData.Page++,
    GetMyGamesPromotions(!0))
}
function drawMyGamesPromotions(n, t) {
    var r = "";
    let i = n.Promotions;
    for (let n = 0; n < i.length; n++) {
        let t = i[n].Description == "" ? "no_desc" : "";
        r += '<div class="dynamic_promo_lobby_item dynamic_promo_item js_news_promo_btn ' + t + '" data-href="' + i[n].Url + '" data-target="' + i[n].Target + '"><img alt="' + i[n].Name + '" class="" src="' + i[n].ImgSrc + '" />';
        i[n].Badge != "" && (r += '<span class="dynamic_promo_badge">' + i[n].Badge + "<\/span>");
        r += '<div class="dynamic_promo_inner"><div class="dynamic_promo_info"><span class="dynamic_promo_item_title">' + i[n].Title + "<\/span>";
        i[n].Categories != "" && (r += '<span class="dynamic_promo_item_category">' + i[n].Categories + "<\/span>");
        r += '<\/div><div class="dynamic_promo_item_descr">' + i[n].Description + "<\/div><\/div><\/div>"
    }
    t ? $("#js_my_games_promotion").append(dlAnimate(r)) : $("#js_my_games_promotion").html(dlAnimate(r))
}
function setCatInfo(n) {
    var t = $(".js_dl_categories"), i, r;
    for (DyLobbyMob.showGamesCount && t.children(".js_dl_cat_count").html(""),
    t.parent().addClass("hidden"),
    i = 0; i < t.length; i++)
        for (r = 0; r < n.length; r++)
            $(t[i]).attr("data-id") == n[r].Id && (DyLobbyMob.showGamesCount && $(t[i]).children(".js_dl_cat_count").html(' <span class="lca-line js_lca_line">|<\/span> ' + n[r].GamesCount),
            $(t[i]).parent().removeClass("hidden"))
}
function searchGames(n, t) {
    document.getElementById("js_clear_search_val").style.display = n.value.length > 0 ? "block" : "none";
    var i = n.value.replace(/\s\s+/g, " ");
    (resetClicked = !1,
    isSearchInutTextValid(n, i) && (searchTxt != i || t) && (i == "" || i.charAt(0) != " ")) && (searchTxt = i,
    clearTimeout(dlSearchTimeOut),
    dlSearchTimeOut = setTimeout(function() {
        if (setFilterData(),
        isOpenFilter)
            checkFilterGamesCount("js_dl_filter_gm_count", !0);
        else {
            var n = {
                searchText: searchTxt,
                lobbyUrl: DyLobbyMob.lobbyUrl
            };
            getSearchGames(n, "#js_dl_searchedGames")
        }
    }, 400))
}
function searchGamesFromLobby(n) {
    let t = n.value.replace(/\s\s+/g, " ");
    isSearchInutTextValid(n, t) && searchTxtFromLobby != t && (t == "" || t.charAt(0) != " ") && (searchTxtFromLobby = t,
    clearTimeout(dlSearchTimeOut),
    dlSearchTimeOut = setTimeout(function() {
        fromLobbSearchData.searchText != searchTxtFromLobby && (fromLobbSearchData = {
            searchText: searchTxtFromLobby,
            lobbyUrl: DyLobbyMob.lobbyUrl
        },
        getSearchGames(fromLobbSearchData, "#js_games_lobby"))
    }, 400))
}
function isSearchInutTextValid(n, t) {
    const r = new RegExp("^[A-Za-z0-9 '&!-\"™:]*$");
    if (r.test(t))
        return document.getElementById("js_search_msg") && document.getElementById("js_search_msg").remove(),
        !0;
    if (!document.getElementById("js_search_msg")) {
        var i = document.createElement("span");
        i.id = "js_search_msg";
        i.innerHTML = DyLobbyMob.trns.UseLatinLettersInSearch;
        n.parentNode.appendChild(i)
    }
    return !1
}
function getSearchGames(n, t, i) {
    $.ajax({
        type: "POST",
        url: "/DynamicLobbyHelper/SearchGames",
        data: n,
        success: function(n) {
            handleSearchResult(n, t, i)
        }
    })
}
function handleSearchResult(n, t, i) {
    if (n.GamesResult == null)
        $(t).html("");
    else if (n.GamesResult != null && n.GamesResult.GamesOutput.length == 0)
        $(t).removeClass("lca-games-grid"),
        $(t).html(GamesCommon.trns.NoSearchResults);
    else if ($(t).addClass("lca-games-grid"),
    i) {
        $("#js_dl_search_gm_see_more").remove();
        let t = createDyLobbyGamesHtml(n.GamesResult.GamesOutput, n.RestGamesCount, "js_dl_search_gm_see_more");
        $("#js_dl_search_gm_cont").append(dlAnimate(t))
    } else {
        let i = "";
        i += '<div id="js_dl_games_main_cont"><h3 class="lca-search-result-subtitle">' + DyLobbyMob.trns.DyLobbyGames + '<\/h3><div id="js_dl_search_gm_cont" class="lca-games-grid lca-games-container">';
        i += createDyLobbyGamesHtml(n.GamesResult.GamesOutput, n.RestGamesCount, "js_dl_search_gm_see_more");
        i += "<\/div><\/div>";
        $(t).html(dlAnimate(i));
        dlPage = 0
    }
}
function createDyLobbyGamesHtml(n, t, i) {
    for (var r = "", u = 0; u < n.length; u++)
        r += drawGamesWrapper(n[u], "", GamesCommon.lobbyPreviewType, DyLobbyMob.lobbyUrl, "lca-card-wrapper-50"),
        (GamesCommon.lobbyPreviewType == "0" || GamesCommon.lobbyPreviewType == "1") && (r += GamesCommon.gameCardType == 4 ? drawGamesCardFooterSpec(n[u]) : drawGamesCardFooter(n[u])),
        r += "<\/div><\/div>";
    return t > 0 && (r += '<div id="' + i + '" class="lca-card-wrapper lca-card-wrapper-50 lca-card-more-wrapper"><a class="lca-card-more d-flex flex-column justify-content-center align-items-center js_dl_see_more"><span>' + DyLobbyMob.trns.SeeMore + "<\/span><span>+" + t + "<\/span><\/a><\/div>"),
    r
}
function setFilterData() {
    filterData.CategoryId = [];
    filterData.GroupId = [];
    filterData.ThemeId = [];
    filterData.TournamentId = [];
    filterData.MinLimit = 0;
    filterData.MaxLimit = 0;
    filterData.SearchText = searchTxt;
    let n = $(".js_dl_filter_categories.active")
      , t = $(".js_dl_filter_groups.active")
      , i = $(".js_dl_filter_themes.active")
      , r = $(".js_dl_filter_tournaments.active");
    for (let t = 0; t < n.length; t++)
        filterData.CategoryId.push(n[t].dataset.id);
    for (let n = 0; n < t.length; n++)
        filterData.GroupId.push(t[n].dataset.id);
    for (let n = 0; n < i.length; n++)
        filterData.ThemeId.push(i[n].dataset.themeid);
    for (let n = 0; n < r.length; n++)
        filterData.TournamentId.push(r[n].dataset.tournamentid);
    document.getElementById("js_stake_range") && (filterData.MinLimit = stakeSlider.get()[0],
    filterData.MaxLimit = stakeSlider.get()[1])
}
function checkFilterGamesCount(n, t) {
    $.ajax({
        type: "POST",
        url: "/DynamicLobbyHelper/CheckFilterGamesCount",
        data: filterData,
        success: function(i) {
            t ? $("#" + n).html("( " + i + " )") : $("#" + n).html(i)
        }
    })
}
function filterGames() {
    filterData.GroupId.length == 0 && filterData.GroupId.push($($(".js_dl_filter_groups")[0]).attr("data-id"));
    filterData.groupBy = 1;
    isOpenFilter = !1;
    $.ajax({
        type: "POST",
        url: "/DynamicLobbyHelper/GetFilteredGames",
        data: filterData,
        success: function(n) {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
            $("#js_dl_content").html(n);
            checkFilterGamesCount("js_games_count_in_result")
        }
    })
}
function setPageUrl() {
    var f = $('.js_dl_groups[data-id="' + gamesData.GroupId + '"]')[0].dataset.url, i = [], n, r, u, t;
    for ($(".js_dl_categories").removeClass("active"),
    n = 0; n < $(".js_dl_categories").length; n++)
        for (r = 0; r < gamesData.CategoryId.length; r++)
            $(".js_dl_categories")[n].dataset.id == gamesData.CategoryId[r] && (i.push($(".js_dl_categories")[n].dataset.url),
            $(".js_dl_categories")[n].classList.add("active"));
    for (u = "/" + GamesCommon.language + "/Lobby/" + DyLobbyMob.lobbyUrl + "/Main/" + CapitalizeText(f) + "/",
    t = 0; t < i.length; t++)
        u += t == 0 ? CapitalizeText(i[t]) : "-" + CapitalizeText(i[t]);
    changePageUrlWithoutRefreshing(u, "js_dl_current")
}
function prepareLobby(n) {
    for (var s, h, r, f, u, c, e, l, o = "", a = "", i = document.location.pathname.split("/"), t = 0; t < i.length; t++)
        i[t].toLowerCase() == "main" && i.splice(0, t + 1);
    for (o = i[0] != undefined ? i[0].toLowerCase() : "",
    a = i[1] != undefined ? i[1].toLowerCase() : "",
    s = document.getElementsByClassName("js_dl_groups"),
    t = 0; t < s.length; t++)
        s[t].classList.remove("active");
    if (gamesData.CategoryId = [],
    o == "")
        h = document.getElementsByClassName("js_dl_categories")[0],
        r = document.getElementsByClassName("js_dl_groups default")[0],
        r == undefined && (r = document.getElementsByClassName("js_dl_groups")[0]),
        h.classList.add("active"),
        gamesData.CategoryId.push(h.dataset.id),
        r.classList.add("active"),
        gamesData.GroupId = r.dataset.id,
        gamesData.GroupTypeId = r.dataset.typeId,
        gamesData.TakeCount = r.dataset.takeCount,
        n && changePageUrlWithoutRefreshing("/" + GamesCommon.language + "/Lobby/" + DyLobbyMob.lobbyUrl + "/Main", "js_dl_current");
    else {
        for (l = i[0] + "/" + i[1],
        f = document.querySelectorAll('.js_dl_groups[data-url="' + o + '"]')[0],
        gamesData.GroupId = f.dataset.id,
        gamesData.GroupTypeId = f.dataset.typeId,
        gamesData.TakeCount = f.dataset.takeCount,
        f.classList.add("active"),
        u = document.getElementsByClassName("js_dl_categories"),
        c = a.split("-"),
        t = 0; t < u.length; t++)
            for (u[t].classList.remove("active"),
            e = 0; e < c.length; e++)
                u[t].dataset.url == c[e] && (u[t].classList.add("active"),
                gamesData.CategoryId.push(u[t].dataset.id));
        n && (l = window.location.href,
        history.replaceState({
            id: "js_dl_current"
        }, "", l))
    }
    gamesData.Page = 0;
    imgSortIndex = 0;
    GetGames("js_games_lobby")
}
function GetBigWinsWidget(n, t, i) {
    $.ajax({
        type: "GET",
        url: "/DynamicLobbyHelper/GetBigWins?lobbyWidgetType=" + n + "&winsType=" + t,
        success: function(n) {
            $(".js_top_winners_item").removeClass("active");
            $(".js_top_winners_item_names").removeClass("active");
            i.classList.add("active");
            $("#js_top_winners_content").append(n)
        }
    })
}
var i;
(function(n) {
    typeof define == "function" && define.amd ? define([], n) : typeof exports == "object" ? module.exports = n() : window.noUiSlider = n()
}
)(function() {
    "use strict";
    function nt(n) {
        return typeof n == "object" && typeof n.to == "function" && typeof n.from == "function"
    }
    function c(n) {
        n.parentElement.removeChild(n)
    }
    function l(n) {
        return n !== null && n !== undefined
    }
    function a(n) {
        n.preventDefault()
    }
    function tt(n) {
        return n.filter(function(n) {
            return this[n] ? !1 : this[n] = !0
        }, {})
    }
    function it(n, t) {
        return Math.round(n / t) * t
    }
    function rt(n, t) {
        var r = n.getBoundingClientRect()
          , u = n.ownerDocument
          , f = u.documentElement
          , i = p(u);
        return /webkit.*Chrome.*Mobile/i.test(navigator.userAgent) && (i.x = 0),
        t ? r.top + i.y - f.clientTop : r.left + i.x - f.clientLeft
    }
    function r(n) {
        return typeof n == "number" && !isNaN(n) && isFinite(n)
    }
    function v(n, i, r) {
        r > 0 && (t(n, i),
        setTimeout(function() {
            e(n, i)
        }, r))
    }
    function y(n) {
        return Math.max(Math.min(n, 100), 0)
    }
    function o(n) {
        return Array.isArray(n) ? n : [n]
    }
    function ut(n) {
        n = String(n);
        var t = n.split(".");
        return t.length > 1 ? t[1].length : 0
    }
    function t(n, t) {
        n.classList && !/\s/.test(t) ? n.classList.add(t) : n.className += " " + t
    }
    function e(n, t) {
        n.classList && !/\s/.test(t) ? n.classList.remove(t) : n.className = n.className.replace(new RegExp("(^|\\b)" + t.split(" ").join("|") + "(\\b|$)","gi"), " ")
    }
    function ft(n, t) {
        return n.classList ? n.classList.contains(t) : new RegExp("\\b" + t + "\\b").test(n.className)
    }
    function p(n) {
        var t = window.pageXOffset !== undefined
          , i = (n.compatMode || "") === "CSS1Compat"
          , r = t ? window.pageXOffset : i ? n.documentElement.scrollLeft : n.body.scrollLeft
          , u = t ? window.pageYOffset : i ? n.documentElement.scrollTop : n.body.scrollTop;
        return {
            x: r,
            y: u
        }
    }
    function et() {
        return window.navigator.pointerEnabled ? {
            start: "pointerdown",
            move: "pointermove",
            end: "pointerup"
        } : window.navigator.msPointerEnabled ? {
            start: "MSPointerDown",
            move: "MSPointerMove",
            end: "MSPointerUp"
        } : {
            start: "mousedown touchstart",
            move: "mousemove touchmove",
            end: "mouseup touchend"
        }
    }
    function ot() {
        var n = !1, t;
        try {
            t = Object.defineProperty({}, "passive", {
                get: function() {
                    n = !0
                }
            });
            window.addEventListener("test", null, t)
        } catch (i) {}
        return n
    }
    function st() {
        return window.CSS && CSS.supports && CSS.supports("touch-action", "none")
    }
    function s(n, t) {
        return 100 / (t - n)
    }
    function h(n, t, i) {
        return t * 100 / (n[i + 1] - n[i])
    }
    function ht(n, t) {
        return h(n, n[0] < 0 ? t + Math.abs(n[0]) : t - n[0], 0)
    }
    function ct(n, t) {
        return t * (n[1] - n[0]) / 100 + n[0]
    }
    function f(n, t) {
        for (var i = 1; n >= t[i]; )
            i += 1;
        return i
    }
    function lt(n, t, i) {
        if (i >= n.slice(-1)[0])
            return 100;
        var r = f(i, n)
          , e = n[r - 1]
          , o = n[r]
          , u = t[r - 1]
          , h = t[r];
        return u + ht([e, o], i) / s(u, h)
    }
    function at(n, t, i) {
        if (i >= 100)
            return n.slice(-1)[0];
        var r = f(i, t)
          , e = n[r - 1]
          , o = n[r]
          , u = t[r - 1]
          , h = t[r];
        return ct([e, o], (i - u) * s(u, h))
    }
    function vt(n, t, i, r) {
        if (r === 100)
            return r;
        var u = f(r, n)
          , e = n[u - 1]
          , o = n[u];
        return i ? r - e > (o - e) / 2 ? o : e : t[u - 1] ? n[u - 1] + it(r - n[u - 1], t[u - 1]) : r
    }
    function yt(t, i, u) {
        var f;
        if (typeof i == "number" && (i = [i]),
        !Array.isArray(i))
            throw new Error("noUiSlider (" + n + "): 'range' contains invalid value.");
        if (f = t === "min" ? 0 : t === "max" ? 100 : parseFloat(t),
        !r(f) || !r(i[0]))
            throw new Error("noUiSlider (" + n + "): 'range' value isn't numeric.");
        u.xPct.push(f);
        u.xVal.push(i[0]);
        f ? u.xSteps.push(isNaN(i[1]) ? !1 : i[1]) : isNaN(i[1]) || (u.xSteps[0] = i[1]);
        u.xHighestCompleteStep.push(0)
    }
    function pt(n, t, i) {
        if (t) {
            if (i.xVal[n] === i.xVal[n + 1]) {
                i.xSteps[n] = i.xHighestCompleteStep[n] = i.xVal[n];
                return
            }
            i.xSteps[n] = h([i.xVal[n], i.xVal[n + 1]], t, 0) / s(i.xPct[n], i.xPct[n + 1]);
            var r = (i.xVal[n + 1] - i.xVal[n]) / i.xNumSteps[n]
              , u = Math.ceil(Number(r.toFixed(3)) - 1)
              , f = i.xVal[n] + i.xNumSteps[n] * u;
            i.xHighestCompleteStep[n] = f
        }
    }
    function i(n, t, i) {
        this.xPct = [];
        this.xVal = [];
        this.xSteps = [i || !1];
        this.xNumSteps = [!1];
        this.xHighestCompleteStep = [];
        this.snap = t;
        var r, u = [];
        for (r in n)
            n.hasOwnProperty(r) && u.push([n[r], r]);
        for (u.length && typeof u[0][0] == "object" ? u.sort(function(n, t) {
            return n[0][0] - t[0][0]
        }) : u.sort(function(n, t) {
            return n[0] - t[0]
        }),
        r = 0; r < u.length; r++)
            yt(u[r][1], u[r][0], this);
        for (this.xNumSteps = this.xSteps.slice(0),
        r = 0; r < this.xNumSteps.length; r++)
            pt(r, this.xNumSteps[r], this)
    }
    function k(t) {
        if (nt(t))
            return !0;
        throw new Error("noUiSlider (" + n + "): 'format' requires 'to' and 'from' methods.");
    }
    function wt(t, i) {
        if (!r(i))
            throw new Error("noUiSlider (" + n + "): 'step' is not numeric.");
        t.singleStep = i
    }
    function bt(t, i) {
        if (!r(i))
            throw new Error("noUiSlider (" + n + "): 'keyboardPageMultiplier' is not numeric.");
        t.keyboardPageMultiplier = i
    }
    function kt(t, i) {
        if (!r(i))
            throw new Error("noUiSlider (" + n + "): 'keyboardDefaultStep' is not numeric.");
        t.keyboardDefaultStep = i
    }
    function dt(t, r) {
        if (typeof r != "object" || Array.isArray(r))
            throw new Error("noUiSlider (" + n + "): 'range' is not an object.");
        if (r.min === undefined || r.max === undefined)
            throw new Error("noUiSlider (" + n + "): Missing 'min' or 'max' in 'range'.");
        if (r.min === r.max)
            throw new Error("noUiSlider (" + n + "): 'range' 'min' and 'max' cannot be equal.");
        t.spectrum = new i(r,t.snap,t.singleStep)
    }
    function gt(t, i) {
        if (i = o(i),
        !Array.isArray(i) || !i.length)
            throw new Error("noUiSlider (" + n + "): 'start' option is incorrect.");
        t.handles = i.length;
        t.start = i
    }
    function ni(t, i) {
        if (t.snap = i,
        typeof i != "boolean")
            throw new Error("noUiSlider (" + n + "): 'snap' option must be a boolean.");
    }
    function ti(t, i) {
        if (t.animate = i,
        typeof i != "boolean")
            throw new Error("noUiSlider (" + n + "): 'animate' option must be a boolean.");
    }
    function ii(t, i) {
        if (t.animationDuration = i,
        typeof i != "number")
            throw new Error("noUiSlider (" + n + "): 'animationDuration' option must be a number.");
    }
    function ri(t, i) {
        var r = [!1], u;
        if (i === "lower" ? i = [!0, !1] : i === "upper" && (i = [!1, !0]),
        i === !0 || i === !1) {
            for (u = 1; u < t.handles; u++)
                r.push(i);
            r.push(!1)
        } else if (Array.isArray(i) && i.length && i.length === t.handles + 1)
            r = i;
        else
            throw new Error("noUiSlider (" + n + "): 'connect' option doesn't match handle count.");
        t.connect = r
    }
    function ui(t, i) {
        switch (i) {
        case "horizontal":
            t.ort = 0;
            break;
        case "vertical":
            t.ort = 1;
            break;
        default:
            throw new Error("noUiSlider (" + n + "): 'orientation' option is invalid.");
        }
    }
    function d(t, i) {
        if (!r(i))
            throw new Error("noUiSlider (" + n + "): 'margin' option must be numeric.");
        i !== 0 && (t.margin = t.spectrum.getDistance(i))
    }
    function fi(t, i) {
        if (!r(i))
            throw new Error("noUiSlider (" + n + "): 'limit' option must be numeric.");
        if (t.limit = t.spectrum.getDistance(i),
        !t.limit || t.handles < 2)
            throw new Error("noUiSlider (" + n + "): 'limit' option is only supported on linear sliders with 2 or more handles.");
    }
    function ei(t, i) {
        var u;
        if (!r(i) && !Array.isArray(i))
            throw new Error("noUiSlider (" + n + "): 'padding' option must be numeric or array of exactly 2 numbers.");
        if (Array.isArray(i) && !(i.length === 2 || r(i[0]) || r(i[1])))
            throw new Error("noUiSlider (" + n + "): 'padding' option must be numeric or array of exactly 2 numbers.");
        if (i !== 0) {
            for (Array.isArray(i) || (i = [i, i]),
            t.padding = [t.spectrum.getDistance(i[0]), t.spectrum.getDistance(i[1])],
            u = 0; u < t.spectrum.xNumSteps.length - 1; u++)
                if (t.padding[0][u] < 0 || t.padding[1][u] < 0)
                    throw new Error("noUiSlider (" + n + "): 'padding' option must be a positive number(s).");
            var f = i[0] + i[1]
              , e = t.spectrum.xVal[0]
              , o = t.spectrum.xVal[t.spectrum.xVal.length - 1];
            if (f / (o - e) > 1)
                throw new Error("noUiSlider (" + n + "): 'padding' option must not exceed 100% of the range.");
        }
    }
    function oi(t, i) {
        switch (i) {
        case "ltr":
            t.dir = 0;
            break;
        case "rtl":
            t.dir = 1;
            break;
        default:
            throw new Error("noUiSlider (" + n + "): 'direction' option was not recognized.");
        }
    }
    function si(t, i) {
        if (typeof i != "string")
            throw new Error("noUiSlider (" + n + "): 'behaviour' must be a string containing options.");
        var e = i.indexOf("tap") >= 0
          , o = i.indexOf("drag") >= 0
          , r = i.indexOf("fixed") >= 0
          , u = i.indexOf("snap") >= 0
          , s = i.indexOf("hover") >= 0
          , f = i.indexOf("unconstrained") >= 0;
        if (r) {
            if (t.handles !== 2)
                throw new Error("noUiSlider (" + n + "): 'fixed' behaviour must be used with 2 handles");
            d(t, t.start[1] - t.start[0])
        }
        if (f && (t.margin || t.limit))
            throw new Error("noUiSlider (" + n + "): 'unconstrained' behaviour cannot be used with margin or limit");
        t.events = {
            tap: e || u,
            drag: o,
            fixed: r,
            snap: u,
            hover: s,
            unconstrained: f
        }
    }
    function hi(t, i) {
        if (i !== !1)
            if (i === !0) {
                t.tooltips = [];
                for (var r = 0; r < t.handles; r++)
                    t.tooltips.push(!0)
            } else {
                if (t.tooltips = o(i),
                t.tooltips.length !== t.handles)
                    throw new Error("noUiSlider (" + n + "): must pass a formatter for all handles.");
                t.tooltips.forEach(function(t) {
                    if (typeof t != "boolean" && (typeof t != "object" || typeof t.to != "function"))
                        throw new Error("noUiSlider (" + n + "): 'tooltips' must be passed a formatter or 'false'.");
                })
            }
    }
    function ci(n, t) {
        n.ariaFormat = t;
        k(t)
    }
    function li(n, t) {
        n.format = t;
        k(t)
    }
    function ai(t, i) {
        if (t.keyboardSupport = i,
        typeof i != "boolean")
            throw new Error("noUiSlider (" + n + "): 'keyboardSupport' option must be a boolean.");
    }
    function vi(n, t) {
        n.documentElement = t
    }
    function yi(t, i) {
        if (typeof i != "string" && i !== !1)
            throw new Error("noUiSlider (" + n + "): 'cssPrefix' must be a string or `false`.");
        t.cssPrefix = i
    }
    function pi(t, i) {
        if (typeof i != "object")
            throw new Error("noUiSlider (" + n + "): 'cssClasses' must be an object.");
        if (typeof t.cssPrefix == "string") {
            t.cssClasses = {};
            for (var r in i)
                i.hasOwnProperty(r) && (t.cssClasses[r] = t.cssPrefix + i[r])
        } else
            t.cssClasses = i
    }
    function g(t) {
        var i = {
            margin: 0,
            limit: 0,
            padding: 0,
            animate: !0,
            animationDuration: 300,
            ariaFormat: w,
            format: w
        }, r = {
            step: {
                r: !1,
                t: wt
            },
            keyboardPageMultiplier: {
                r: !1,
                t: bt
            },
            keyboardDefaultStep: {
                r: !1,
                t: kt
            },
            start: {
                r: !0,
                t: gt
            },
            connect: {
                r: !0,
                t: ri
            },
            direction: {
                r: !0,
                t: oi
            },
            snap: {
                r: !1,
                t: ni
            },
            animate: {
                r: !1,
                t: ti
            },
            animationDuration: {
                r: !1,
                t: ii
            },
            range: {
                r: !0,
                t: dt
            },
            orientation: {
                r: !1,
                t: ui
            },
            margin: {
                r: !1,
                t: d
            },
            limit: {
                r: !1,
                t: fi
            },
            padding: {
                r: !1,
                t: ei
            },
            behaviour: {
                r: !0,
                t: si
            },
            ariaFormat: {
                r: !1,
                t: ci
            },
            format: {
                r: !1,
                t: li
            },
            tooltips: {
                r: !1,
                t: hi
            },
            keyboardSupport: {
                r: !0,
                t: ai
            },
            documentElement: {
                r: !1,
                t: vi
            },
            cssPrefix: {
                r: !0,
                t: yi
            },
            cssClasses: {
                r: !0,
                t: pi
            }
        }, u = {
            connect: !1,
            direction: "ltr",
            behaviour: "tap",
            orientation: "horizontal",
            keyboardSupport: !0,
            cssPrefix: "noUi-",
            cssClasses: b,
            keyboardPageMultiplier: 5,
            keyboardDefaultStep: 10
        }, e;
        t.format && !t.ariaFormat && (t.ariaFormat = t.format);
        Object.keys(r).forEach(function(f) {
            if (!l(t[f]) && u[f] === undefined) {
                if (r[f].r)
                    throw new Error("noUiSlider (" + n + "): '" + f + "' is required.");
                return !0
            }
            r[f].t(i, l(t[f]) ? t[f] : u[f])
        });
        i.pips = t.pips;
        var f = document.createElement("div")
          , o = f.style.msTransform !== undefined
          , s = f.style.transform !== undefined;
        return i.transformRule = s ? "transform" : o ? "msTransform" : "webkitTransform",
        e = [["left", "top"], ["right", "bottom"]],
        i.style = e[i.dir][i.ort],
        i
    }
    function wi(i, r, f) {
        function nt(n, i) {
            var r = vt.createElement("div");
            return i && t(r, i),
            n.appendChild(r),
            r
        }
        function sr(n, i) {
            var f = nt(n, r.cssClasses.origin)
              , u = nt(f, r.cssClasses.handle);
            return nt(u, r.cssClasses.touchArea),
            u.setAttribute("data-handle", i),
            r.keyboardSupport && (u.setAttribute("tabindex", "0"),
            u.addEventListener("keydown", function(n) {
                return tu(n, i)
            })),
            u.setAttribute("role", "slider"),
            u.setAttribute("aria-orientation", r.ort ? "vertical" : "horizontal"),
            i === 0 ? t(u, r.cssClasses.handleLower) : i === r.handles - 1 && t(u, r.cssClasses.handleUpper),
            f
        }
        function pi(n, t) {
            return t ? nt(n, r.cssClasses.connect) : !1
        }
        function hr(n, t) {
            var u = nt(t, r.cssClasses.connects), i;
            for (h = [],
            ut = [],
            ut.push(pi(u, n[0])),
            i = 0; i < r.handles; i++)
                h.push(sr(t, i)),
                k[i] = i,
                ut.push(pi(u, n[i + 1]))
        }
        function cr(n) {
            t(n, r.cssClasses.target);
            r.dir === 0 ? t(n, r.cssClasses.ltr) : t(n, r.cssClasses.rtl);
            r.ort === 0 ? t(n, r.cssClasses.horizontal) : t(n, r.cssClasses.vertical);
            var i = getComputedStyle(n).direction;
            return i === "rtl" ? t(n, r.cssClasses.textDirectionRtl) : t(n, r.cssClasses.textDirectionLtr),
            nt(n, r.cssClasses.base)
        }
        function lr(n, t) {
            return r.tooltips[t] ? nt(n.firstChild, r.cssClasses.tooltip) : !1
        }
        function wi() {
            return b.hasAttribute("disabled")
        }
        function fi(n) {
            var t = h[n];
            return t.hasAttribute("disabled")
        }
        function ei() {
            ct && (wt("update" + u.tooltips),
            ct.forEach(function(n) {
                n && c(n)
            }),
            ct = null)
        }
        function bi() {
            ei();
            ct = h.map(lr);
            li("update" + u.tooltips, function(n, t, i) {
                if (ct[t]) {
                    var u = n[t];
                    r.tooltips[t] !== !0 && (u = r.tooltips[t].to(i[t]));
                    ct[t].innerHTML = u
                }
            })
        }
        function ar() {
            wt("update" + u.aria);
            li("update" + u.aria, function(n, t, i, u, f) {
                k.forEach(function(n) {
                    var t = h[n]
                      , u = ni(w, n, 0, !0, !0, !0)
                      , e = ni(w, n, 100, !0, !0, !0)
                      , o = f[n]
                      , c = r.ariaFormat.to(i[n]);
                    u = s.fromStepping(u).toFixed(1);
                    e = s.fromStepping(e).toFixed(1);
                    o = s.fromStepping(o).toFixed(1);
                    t.children[0].setAttribute("aria-valuemin", u);
                    t.children[0].setAttribute("aria-valuemax", e);
                    t.children[0].setAttribute("aria-valuenow", o);
                    t.children[0].setAttribute("aria-valuetext", c)
                })
            })
        }
        function vr(t, i, r) {
            if (t === "range" || t === "steps")
                return s.xVal;
            if (t === "count") {
                if (i < 2)
                    throw new Error("noUiSlider (" + n + "): 'values' (>= 2) required for mode 'count'.");
                var u = i - 1
                  , f = 100 / u;
                for (i = []; u--; )
                    i[u] = u * f;
                i.push(100);
                t = "positions"
            }
            return t === "positions" ? i.map(function(n) {
                return s.fromStepping(r ? s.getStep(n) : n)
            }) : t === "values" ? r ? i.map(function(n) {
                return s.fromStepping(s.getStep(s.toStepping(n)))
            }) : i : void 0
        }
        function yr(n, t, i) {
            function c(n, t) {
                return (n + t).toFixed(7) / 1
            }
            var r = {}
              , f = s.xVal[0]
              , e = s.xVal[s.xVal.length - 1]
              , o = !1
              , h = !1
              , u = 0;
            return i = tt(i.slice().sort(function(n, t) {
                return n - t
            })),
            i[0] !== f && (i.unshift(f),
            o = !0),
            i[i.length - 1] !== e && (i.push(e),
            h = !0),
            i.forEach(function(f, e) {
                var a, l, y, p = f, v = i[e + 1], w, b, k, d, nt, g, tt, it = t === "steps";
                if (it && (a = s.xNumSteps[e]),
                a || (a = v - p),
                p !== !1)
                    for (v === undefined && (v = p),
                    a = Math.max(a, 1e-7),
                    l = p; l <= v; l = c(l, a)) {
                        for (w = s.toStepping(l),
                        b = w - u,
                        nt = b / n,
                        g = Math.round(nt),
                        tt = b / g,
                        y = 1; y <= g; y += 1)
                            k = u + y * tt,
                            r[k.toFixed(5)] = [s.fromStepping(k), 0];
                        d = i.indexOf(l) > -1 ? ri : it ? ui : gt;
                        !e && o && l !== v && (d = 0);
                        l === v && h || (r[w.toFixed(5)] = [l, d]);
                        u = w
                    }
            }),
            r
        }
        function pr(n, i, u) {
            function c(n, t) {
                var i = t === r.cssClasses.value
                  , u = i ? s : h
                  , f = i ? o : e;
                return t + " " + u[r.ort] + " " + f[n]
            }
            function l(n, t, e) {
                if (e = i ? i(t, e) : e,
                e !== er) {
                    var o = nt(f, !1);
                    o.className = c(e, r.cssClasses.marker);
                    o.style[r.style] = n + "%";
                    e > gt && (o = nt(f, !1),
                    o.className = c(e, r.cssClasses.value),
                    o.setAttribute("data-value", t),
                    o.style[r.style] = n + "%",
                    o.innerHTML = u.to(t))
                }
            }
            var f = vt.createElement("div"), o = [], e, s, h;
            return o[gt] = r.cssClasses.valueNormal,
            o[ri] = r.cssClasses.valueLarge,
            o[ui] = r.cssClasses.valueSub,
            e = [],
            e[gt] = r.cssClasses.markerNormal,
            e[ri] = r.cssClasses.markerLarge,
            e[ui] = r.cssClasses.markerSub,
            s = [r.cssClasses.valueHorizontal, r.cssClasses.valueVertical],
            h = [r.cssClasses.markerHorizontal, r.cssClasses.markerVertical],
            t(f, r.cssClasses.pips),
            t(f, r.ort === 0 ? r.cssClasses.pipsHorizontal : r.cssClasses.pipsVertical),
            Object.keys(n).forEach(function(t) {
                l(t, n[t][0], n[t][1])
            }),
            f
        }
        function oi() {
            pt && (c(pt),
            pt = null)
        }
        function si(n) {
            oi();
            var t = n.mode
              , i = n.density || 1
              , r = n.filter || !1
              , u = n.values || !1
              , f = n.stepped || !1
              , e = vr(t, u, f)
              , o = yr(i, t, e)
              , s = n.format || {
                to: Math.round
            };
            return pt = b.appendChild(pr(o, r, s))
        }
        function ki() {
            var n = it.getBoundingClientRect()
              , t = "offset" + ["Width", "Height"][r.ort];
            return r.ort === 0 ? n.width || it[t] : n.height || it[t]
        }
        function lt(n, t, i, u) {
            var f = function(f) {
                if ((f = wr(f, u.pageOffset, u.target || t),
                !f) || wi() && !u.doNotReject || ft(b, r.cssClasses.tap) && !u.doNotReject || n === ht.start && f.buttons !== undefined && f.buttons > 1 || u.hover && f.buttons)
                    return !1;
                yi || f.preventDefault();
                f.calcPoint = f.points[r.ort];
                i(f, u)
            }
              , e = [];
            return n.split(" ").forEach(function(n) {
                t.addEventListener(n, f, yi ? {
                    passive: !0
                } : !1);
                e.push([n, f])
            }),
            e
        }
        function wr(n, t, i) {
            var c = n.type.indexOf("touch") === 0, h = n.type.indexOf("mouse") === 0, o = n.type.indexOf("pointer") === 0, r, u, s, f, e;
            if (n.type.indexOf("MSPointer") === 0 && (o = !0),
            n.type === "mousedown" && !n.buttons && !n.touches)
                return !1;
            if (c)
                if (s = function(n) {
                    return n.target === i || i.contains(n.target) || n.target.shadowRoot && n.target.shadowRoot.contains(i)
                }
                ,
                n.type === "touchstart") {
                    if (f = Array.prototype.filter.call(n.touches, s),
                    f.length > 1)
                        return !1;
                    r = f[0].pageX;
                    u = f[0].pageY
                } else {
                    if (e = Array.prototype.find.call(n.changedTouches, s),
                    !e)
                        return !1;
                    r = e.pageX;
                    u = e.pageY
                }
            return t = t || p(vt),
            (h || o) && (r = n.clientX + t.x,
            u = n.clientY + t.y),
            n.pageOffset = t,
            n.points = [r, u],
            n.cursor = h || o,
            n
        }
        function di(n) {
            var i = n - rt(it, r.ort)
              , t = i * 100 / ki();
            return t = y(t),
            r.dir ? 100 - t : t
        }
        function br(n) {
            var t = 100
              , i = !1;
            return h.forEach(function(r, u) {
                if (!fi(u)) {
                    var e = w[u]
                      , f = Math.abs(e - n)
                      , o = f === 100 && t === 100
                      , s = f < t
                      , h = f <= t && n > e;
                    (s || h || o) && (i = u,
                    t = f)
                }
            }),
            i
        }
        function kr(n, t) {
            n.type === "mouseout" && n.target.nodeName === "HTML" && n.relatedTarget === null && hi(n, t)
        }
        function dr(n, t) {
            if (navigator.appVersion.indexOf("MSIE 9") === -1 && n.buttons === 0 && t.buttonsProperty !== 0)
                return hi(n, t);
            var i = (r.dir ? -1 : 1) * (n.calcPoint - t.startCalcPoint)
              , u = i * 100 / t.baseSize;
            gi(i > 0, u, t.locations, t.handleNumbers)
        }
        function hi(n, t) {
            t.handle && (e(t.handle, r.cssClasses.active),
            ii -= 1);
            t.listeners.forEach(function(n) {
                kt.removeEventListener(n[0], n[1])
            });
            ii === 0 && (e(b, r.cssClasses.drag),
            vi(),
            n.cursor && (dt.style.cursor = "",
            dt.removeEventListener("selectstart", a)));
            t.handleNumbers.forEach(function(n) {
                l("change", n);
                l("set", n);
                l("end", n)
            })
        }
        function ci(n, i) {
            var u, e;
            if (i.handleNumbers.some(fi))
                return !1;
            i.handleNumbers.length === 1 && (e = h[i.handleNumbers[0]],
            u = e.children[0],
            ii += 1,
            t(u, r.cssClasses.active));
            n.stopPropagation();
            var f = []
              , o = lt(ht.move, kt, dr, {
                target: n.target,
                handle: u,
                listeners: f,
                startCalcPoint: n.calcPoint,
                baseSize: ki(),
                pageOffset: n.pageOffset,
                handleNumbers: i.handleNumbers,
                buttonsProperty: n.buttons,
                locations: w.slice()
            })
              , s = lt(ht.end, kt, hi, {
                target: n.target,
                handle: u,
                listeners: f,
                doNotReject: !0,
                handleNumbers: i.handleNumbers
            })
              , c = lt("mouseout", kt, kr, {
                target: n.target,
                handle: u,
                listeners: f,
                doNotReject: !0,
                handleNumbers: i.handleNumbers
            });
            f.push.apply(f, o.concat(s, c));
            n.cursor && (dt.style.cursor = getComputedStyle(n.target).cursor,
            h.length > 1 && t(b, r.cssClasses.drag),
            dt.addEventListener("selectstart", a, !1));
            i.handleNumbers.forEach(function(n) {
                l("start", n)
            })
        }
        function gr(n) {
            n.stopPropagation();
            var i = di(n.calcPoint)
              , t = br(i);
            if (t === !1)
                return !1;
            r.events.snap || v(b, r.cssClasses.tap, r.animationDuration);
            yt(t, i, !0, !0);
            vi();
            l("slide", t, !0);
            l("update", t, !0);
            l("change", t, !0);
            l("set", t, !0);
            r.events.snap && ci(n, {
                handleNumbers: [t]
            })
        }
        function nu(n) {
            var t = di(n.calcPoint)
              , i = s.getStep(t)
              , r = s.fromStepping(i);
            Object.keys(d).forEach(function(n) {
                "hover" === n.split(".")[0] && d[n].forEach(function(n) {
                    n.call(bt, r)
                })
            })
        }
        function tu(n, t) {
            var c;
            if (wi() || fi(t))
                return !1;
            var e = ["Left", "Right"]
              , o = ["Down", "Up"]
              , h = ["PageDown", "PageUp"]
              , a = ["Home", "End"];
            r.dir && !r.ort ? e.reverse() : r.ort && !r.dir && (o.reverse(),
            h.reverse());
            var u = n.key.replace("Arrow", "")
              , v = u === h[0]
              , y = u === h[1]
              , f = u === o[0] || u === e[0] || v
              , p = u === o[1] || u === e[1] || y
              , k = u === a[0]
              , b = u === a[1];
            if (!f && !p && !k && !b)
                return !0;
            if (n.preventDefault(),
            p || f) {
                var d = r.keyboardPageMultiplier
                  , g = f ? 0 : 1
                  , nt = ur(t)
                  , i = nt[g];
                if (i === null)
                    return !1;
                i === !1 && (i = s.getDefaultStep(w[t], f, r.keyboardDefaultStep));
                (y || v) && (i *= d);
                i = Math.max(i, 1e-7);
                i = (f ? -1 : 1) * i;
                c = at[t] + i
            } else
                c = b ? r.spectrum.xVal[r.spectrum.xVal.length - 1] : r.spectrum.xVal[0];
            return yt(t, s.toStepping(c), !0, !0),
            l("slide", t),
            l("update", t),
            l("change", t),
            l("set", t),
            !1
        }
        function iu(n) {
            n.fixed || h.forEach(function(n, t) {
                lt(ht.start, n.children[0], ci, {
                    handleNumbers: [t]
                })
            });
            n.tap && lt(ht.start, it, gr, {});
            n.hover && lt(ht.move, it, nu, {
                hover: !0
            });
            n.drag && ut.forEach(function(i, u) {
                if (i !== !1 && u !== 0 && u !== ut.length - 1) {
                    var e = h[u - 1]
                      , o = h[u]
                      , f = [i];
                    t(i, r.cssClasses.draggable);
                    n.fixed && (f.push(e.children[0]),
                    f.push(o.children[0]));
                    f.forEach(function(n) {
                        lt(ht.start, n, ci, {
                            handles: [e, o],
                            handleNumbers: [u - 1, u]
                        })
                    })
                }
            })
        }
        function li(n, t) {
            d[n] = d[n] || [];
            d[n].push(t);
            n.split(".")[0] === "update" && h.forEach(function(n, t) {
                l("update", t)
            })
        }
        function ru(n) {
            return n === u.aria || n === u.tooltips
        }
        function wt(n) {
            var t = n && n.split(".")[0]
              , i = t ? n.substring(t.length) : n;
            Object.keys(d).forEach(function(n) {
                var u = n.split(".")[0]
                  , r = n.substring(u.length);
                t && t !== u || i && i !== r || ru(r) && i !== r || delete d[n]
            })
        }
        function l(n, t, i) {
            Object.keys(d).forEach(function(u) {
                var f = u.split(".")[0];
                n === f && d[u].forEach(function(n) {
                    n.call(bt, at.map(r.format.to), t, at.slice(), i || !1, w.slice(), bt)
                })
            })
        }
        function ni(n, t, i, u, f, e) {
            var o;
            return (h.length > 1 && !r.events.unconstrained && (u && t > 0 && (o = s.getAbsoluteDistance(n[t - 1], r.margin, 0),
            i = Math.max(i, o)),
            f && t < h.length - 1 && (o = s.getAbsoluteDistance(n[t + 1], r.margin, 1),
            i = Math.min(i, o))),
            h.length > 1 && r.limit && (u && t > 0 && (o = s.getAbsoluteDistance(n[t - 1], r.limit, 0),
            i = Math.min(i, o)),
            f && t < h.length - 1 && (o = s.getAbsoluteDistance(n[t + 1], r.limit, 1),
            i = Math.max(i, o))),
            r.padding && (t === 0 && (o = s.getAbsoluteDistance(0, r.padding[0], 0),
            i = Math.max(i, o)),
            t === h.length - 1 && (o = s.getAbsoluteDistance(100, r.padding[1], 1),
            i = Math.min(i, o))),
            i = s.getStep(i),
            i = y(i),
            i === n[t] && !e) ? !1 : i
        }
        function ai(n, t) {
            var i = r.ort;
            return (i ? t : n) + ", " + (i ? n : t)
        }
        function gi(n, t, i, r) {
            var u = i.slice(), e = [!n, n], o = [n, !n], f;
            r = r.slice();
            n && r.reverse();
            r.length > 1 ? r.forEach(function(n, i) {
                var r = ni(u, n, u[n] + t, e[i], o[i], !1);
                r === !1 ? t = 0 : (t = r - u[n],
                u[n] = r)
            }) : e = o = [!0];
            f = !1;
            r.forEach(function(n, r) {
                f = yt(n, i[n] + t, e[r], o[r]) || f
            });
            f && r.forEach(function(n) {
                l("update", n);
                l("slide", n)
            })
        }
        function nr(n, t) {
            return r.dir ? 100 - n - t : n
        }
        function uu(n, t) {
            w[n] = t;
            at[n] = s.fromStepping(t);
            var i = 10 * (nr(t, 0) - or)
              , u = "translate(" + ai(i + "%", "0") + ")";
            h[n].style[r.transformRule] = u;
            tr(n);
            tr(n + 1)
        }
        function vi() {
            k.forEach(function(n) {
                var t = w[n] > 50 ? -1 : 1
                  , i = 3 + (h.length + t * n);
                h[n].style.zIndex = i
            })
        }
        function yt(n, t, i, r, u) {
            return (u || (t = ni(w, n, t, i, r, !1)),
            t === !1) ? !1 : (uu(n, t),
            !0)
        }
        function tr(n) {
            var t, i;
            if (ut[n]) {
                t = 0;
                i = 100;
                n !== 0 && (t = w[n - 1]);
                n !== ut.length - 1 && (i = w[n]);
                var u = i - t
                  , f = "translate(" + ai(nr(t, u) + "%", "0") + ")"
                  , e = "scale(" + ai(u / 100, "1") + ")";
                ut[n].style[r.transformRule] = f + " " + e
            }
        }
        function ir(n, t) {
            return n === null || n === !1 || n === undefined ? w[t] : (typeof n == "number" && (n = String(n)),
            n = r.format.from(n),
            n = s.toStepping(n),
            n === !1 || isNaN(n)) ? w[t] : n
        }
        function ti(n, t, i) {
            var f = o(n), e = w[0] === undefined, u;
            for (t = t === undefined ? !0 : !!t,
            r.animate && !e && v(b, r.cssClasses.tap, r.animationDuration),
            k.forEach(function(n) {
                yt(n, ir(f[n], n), !0, !1, i)
            }),
            u = k.length === 1 ? 0 : 1; u < k.length; ++u)
                k.forEach(function(n) {
                    yt(n, w[n], !0, !0, i)
                });
            vi();
            k.forEach(function(n) {
                l("update", n);
                f[n] !== null && t && l("set", n)
            })
        }
        function fu(n) {
            ti(r.start, n)
        }
        function eu(t, i, r, u) {
            if (t = Number(t),
            !(t >= 0 && t < k.length))
                throw new Error("noUiSlider (" + n + "): invalid handle number, got: " + t);
            yt(t, ir(i, t), !0, !0, u);
            l("update", t);
            r && l("set", t)
        }
        function rr() {
            var n = at.map(r.format.to);
            return n.length === 1 ? n[0] : n
        }
        function ou() {
            wt(u.aria);
            wt(u.tooltips);
            for (var n in r.cssClasses)
                r.cssClasses.hasOwnProperty(n) && e(b, r.cssClasses[n]);
            while (b.firstChild)
                b.removeChild(b.firstChild);
            delete b.noUiSlider
        }
        function ur(n) {
            var e = w[n], t = s.getNearbySteps(e), f = at[n], i = t.thisStep.step, u = null, o;
            return r.snap ? [f - t.stepBefore.startValue || null, t.stepAfter.startValue - f || null] : (i !== !1 && f + i > t.stepAfter.startValue && (i = t.stepAfter.startValue - f),
            u = f > t.thisStep.startValue ? t.thisStep.step : t.stepBefore.step === !1 ? !1 : f - t.stepBefore.highestStep,
            e === 100 ? i = null : e === 0 && (u = null),
            o = s.countStepDecimals(),
            i !== null && i !== !1 && (i = Number(i.toFixed(o))),
            u !== null && u !== !1 && (u = Number(u.toFixed(o))),
            [u, i])
        }
        function su() {
            return k.map(ur)
        }
        function hu(n, t) {
            var e = rr(), u = ["margin", "limit", "padding", "range", "animate", "snap", "step", "format", "pips", "tooltips"], i;
            u.forEach(function(t) {
                n[t] !== undefined && (f[t] = n[t])
            });
            i = g(f);
            u.forEach(function(t) {
                n[t] !== undefined && (r[t] = i[t])
            });
            s = i.spectrum;
            r.margin = i.margin;
            r.limit = i.limit;
            r.padding = i.padding;
            r.pips ? si(r.pips) : oi();
            r.tooltips ? bi() : ei();
            w = [];
            ti(n.start || e, t)
        }
        function cu() {
            it = cr(b);
            hr(r.connect, it);
            iu(r.events);
            ti(r.start);
            r.pips && si(r.pips);
            r.tooltips && bi();
            ar()
        }
        var ht = et(), fr = st(), yi = fr && ot(), b = i, it, h, ut, pt, ct, s = r.spectrum, at = [], w = [], k = [], ii = 0, d = {}, bt, vt = i.ownerDocument, kt = r.documentElement || vt.documentElement, dt = vt.body, er = -1, gt = 0, ri = 1, ui = 2, or = vt.dir === "rtl" || r.ort === 1 ? 0 : 100;
        return cu(),
        bt = {
            destroy: ou,
            steps: su,
            on: li,
            off: wt,
            get: rr,
            set: ti,
            setHandle: eu,
            reset: fu,
            __moveHandles: function(n, t, i) {
                gi(n, t, w, i)
            },
            options: f,
            updateOptions: hu,
            target: b,
            removePips: oi,
            removeTooltips: ei,
            getTooltips: function() {
                return ct
            },
            getOrigins: function() {
                return h
            },
            pips: si
        }
    }
    function bi(t, i) {
        if (!t || !t.nodeName)
            throw new Error("noUiSlider (" + n + "): create requires a single element, got: " + t);
        if (t.noUiSlider)
            throw new Error("noUiSlider (" + n + "): Slider was already initialized.");
        var u = g(i, t)
          , r = wi(t, u, i);
        return t.noUiSlider = r,
        r
    }
    var n = "%%REPLACE_THIS_WITH_VERSION%%";
    i.prototype.getDistance = function(t) {
        for (var u = [], r, i = 0; i < this.xNumSteps.length - 1; i++) {
            if (r = this.xNumSteps[i],
            r && t / r % 1 != 0)
                throw new Error("noUiSlider (" + n + "): 'limit', 'margin' and 'padding' of " + this.xPct[i] + "% range must be divisible by step.");
            u[i] = h(this.xVal, t, i)
        }
        return u
    }
    ;
    i.prototype.getAbsoluteDistance = function(n, t, i) {
        var r = 0;
        if (n < this.xPct[this.xPct.length - 1])
            while (n > this.xPct[r + 1])
                r++;
        else
            n === this.xPct[this.xPct.length - 1] && (r = this.xPct.length - 2);
        i || n !== this.xPct[r + 1] || r++;
        for (var e = 1, h = t[r], c = 0, s = 0, o = 0, u = 0, f = i ? (n - this.xPct[r]) / (this.xPct[r + 1] - this.xPct[r]) : (this.xPct[r + 1] - n) / (this.xPct[r + 1] - this.xPct[r]); h > 0; )
            c = this.xPct[r + 1 + u] - this.xPct[r + u],
            t[r + u] * e + 100 - f * 100 > 100 ? (s = c * f,
            e = (h - 100 * f) / t[r + u],
            f = 1) : (s = t[r + u] * c / 100 * e,
            e = 0),
            i ? (o = o - s,
            this.xPct.length + u >= 1 && u--) : (o = o + s,
            this.xPct.length - u >= 1 && u++),
            h = t[r + u] * e;
        return n + o
    }
    ;
    i.prototype.toStepping = function(n) {
        return lt(this.xVal, this.xPct, n)
    }
    ;
    i.prototype.fromStepping = function(n) {
        return at(this.xVal, this.xPct, n)
    }
    ;
    i.prototype.getStep = function(n) {
        return vt(this.xPct, this.xSteps, this.snap, n)
    }
    ;
    i.prototype.getDefaultStep = function(n, t, i) {
        var r = f(n, this.xPct);
        return (n === 100 || t && n === this.xPct[r - 1]) && (r = Math.max(r - 1, 1)),
        (this.xVal[r] - this.xVal[r - 1]) / i
    }
    ;
    i.prototype.getNearbySteps = function(n) {
        var t = f(n, this.xPct);
        return {
            stepBefore: {
                startValue: this.xVal[t - 2],
                step: this.xNumSteps[t - 2],
                highestStep: this.xHighestCompleteStep[t - 2]
            },
            thisStep: {
                startValue: this.xVal[t - 1],
                step: this.xNumSteps[t - 1],
                highestStep: this.xHighestCompleteStep[t - 1]
            },
            stepAfter: {
                startValue: this.xVal[t],
                step: this.xNumSteps[t],
                highestStep: this.xHighestCompleteStep[t]
            }
        }
    }
    ;
    i.prototype.countStepDecimals = function() {
        var n = this.xNumSteps.map(ut);
        return Math.max.apply(null, n)
    }
    ;
    i.prototype.convert = function(n) {
        return this.getStep(this.toStepping(n))
    }
    ;
    var w = {
        to: function(n) {
            return n !== undefined && n.toFixed(2)
        },
        from: Number
    }
      , b = {
        target: "target",
        base: "base",
        origin: "origin",
        handle: "handle",
        handleLower: "handle-lower",
        handleUpper: "handle-upper",
        touchArea: "touch-area",
        horizontal: "horizontal",
        vertical: "vertical",
        background: "background",
        connect: "connect",
        connects: "connects",
        ltr: "ltr",
        rtl: "rtl",
        textDirectionLtr: "txt-dir-ltr",
        textDirectionRtl: "txt-dir-rtl",
        draggable: "draggable",
        drag: "state-drag",
        tap: "state-tap",
        active: "active",
        tooltip: "tooltip",
        pips: "pips",
        pipsHorizontal: "pips-horizontal",
        pipsVertical: "pips-vertical",
        marker: "marker",
        markerHorizontal: "marker-horizontal",
        markerVertical: "marker-vertical",
        markerNormal: "marker-normal",
        markerLarge: "marker-large",
        markerSub: "marker-sub",
        value: "value",
        valueHorizontal: "value-horizontal",
        valueVertical: "value-vertical",
        valueNormal: "value-normal",
        valueLarge: "value-large",
        valueSub: "value-sub"
    }
      , u = {
        tooltips: ".__tooltips",
        aria: ".__aria"
    };
    return {
        __spectrum: i,
        version: n,
        cssClasses: b,
        create: bi
    }
});
var filterData = {
    CategoryId: [0],
    GroupId: [],
    ThemeId: [],
    TournamentId: [],
    MinLimit: 1,
    MaxLimit: 1e3,
    TakeCount: 11,
    SearchText: "",
    groupBy: 1,
    LobbyUrl: ""
}
  , gamesData = {
    CategoryId: [],
    GroupId: 0,
    GroupTypeId: 0,
    Page: 0,
    TakeCount: 10,
    LobbyUrl: ""
}
  , searchData = fromLobbSearchData = {
    searchText: "",
    lobbyUrl: ""
}
  , myGamesPromoData = {
    CategoryId: [0],
    Page: 1,
    TakeCount: 12
}
  , rangeMinLimit = 1
  , rangeMaxLimit = 1e3
  , isOpenSearchInp = !1
  , DyLobbyMob = DyLobbyMob || function() {
    return {
        init: function(n) {
            var u, i;
            $.extend(this, n);
            filterData.MinLimit = rangeMinLimit = parseInt(n.minLimit);
            filterData.MaxLimit = rangeMaxLimit = parseInt(n.maxLimit);
            gamesData.LobbyUrl = filterData.LobbyUrl = n.lobbyUrl;
            u = parseInt(n.allLobbiesCount);
            u > 2 && document.getElementById("js_more_menu_links_cont") && document.getElementById("js_more_menu_btns").classList.add("more-cont-item-" + $("#js_more_menu_links_cont a").length);
            var f = window.location.href
              , r = f.split("/")
              , t = "Main";
            for (i = 0; i < r.length; i++)
                r[i].toLowerCase() == n.lobbyUrl.toLowerCase() && r[i + 1] != undefined && (t = r[i + 1]);
            switch (t.toLowerCase()) {
            case "filter":
                t = "Filter";
                break;
            case "search":
                t = "Search";
                break;
            case "promotions":
                t = "Promotions";
                break;
            case "mygames":
                t = "MyGames";
                break;
            default:
                t = "Main"
            }
            t == "Search" ? getDLPageContent("Filter", !1, !0) : getDLPageContent(t, !0)
        }
    }
}()
  , js_dl_menu_links = document.getElementsByClassName("js_dl_bottom_menu_items");
for (i = 0; i < js_dl_menu_links.length; i++)
    js_dl_menu_links[i].addEventListener("click", function() {
        let n = window.location.pathname.split("/");
        if (n[n.length - 1] == this.dataset.tabid) {
            if (!this.classList.contains("active")) {
                for (let n = 0; n < js_dl_menu_links.length; n++)
                    js_dl_menu_links[n].classList.remove("active");
                this.classList.add("active")
            }
        } else
            isOpenSearchInp = !1,
            searchTxtFromLobby = "",
            this.id == "js_dl_search" ? (getDLPageContent("Filter", !1, !0),
            changePageUrlWithoutRefreshing("/" + GamesCommon.language + "/Lobby/" + DyLobbyMob.lobbyUrl + "/Search", "js_dl_search")) : getDLPageContent(this.dataset.tabid, !0)
    });
var dlPage = 0, searchTxt = "", searchTxtFromLobby = "", dlSearchTimeOut = "", allowLazyLoad = !1, allowMyGamesPromoLazyLoad = !1, allowCheckGamesCount = !0, resetClicked = !0, isOpenFilter = !1, keyDownPressed = !1, stakeSlider, stakeRangeInpVal = 0, activeTab = "";
$(document).on("click", "#js_more_lobbies", function(n) {
    if (n.stopPropagation(),
    document.getElementById("js_more_menu_btns").classList.contains("opened_lobbies"))
        document.getElementById("js_more_menu_btns").classList.remove("opened_lobbies"),
        activeTab.classList.add("active"),
        this.classList.remove("active");
    else {
        document.getElementById("js_more_menu_btns").classList.add("opened_lobbies");
        for (var t = 0; t < js_dl_menu_links.length; t++)
            js_dl_menu_links[t].classList.contains("active") && (activeTab = js_dl_menu_links[t]);
        this.classList.add("active");
        activeTab.classList.remove("active")
    }
});
$(document).on("click", function(n) {
    document.getElementById("js_more_menu_btns") && document.getElementById("js_more_menu_btns").classList.contains("opened_lobbies") && $(n.target).parents("#js_more_menu_btns").length == 0 && (document.getElementById("js_more_menu_btns").classList.remove("opened_lobbies"),
    document.getElementById("js_more_lobbies").classList.remove("active"))
});
window.onpopstate = function() {
    var n, t;
    if (history.state)
        if (document.getElementById("js_more_menu_btns") && document.getElementById("js_more_menu_btns").classList.contains("opened_lobbies") && (document.getElementById("js_more_menu_btns").classList.remove("opened_lobbies"),
        document.getElementById("js_more_lobbies").classList.remove("active")),
        n = document.getElementById(history.state.id),
        n == null || n.classList.contains("active") || n.id == "js_dl_search") {
            if (history.state.id == "js_dl_current")
                prepareLobby(),
                window.pageYOffset + 55 >= document.getElementById("js_cat_main_cont").offsetTop && window.scrollTo(0, document.getElementById("js_cat_main_cont").offsetTop - 55);
            else if (history.state.id == "js_dl_filter")
                getDLPageContent("Filter");
            else if (history.state.id == "js_dl_search")
                if (document.getElementById("js_dl_searchedGames")) {
                    if (closeFilter(),
                    document.getElementById("js_dl_search")) {
                        for (t = 0; t < js_dl_menu_links.length; t++)
                            js_dl_menu_links[t].classList.remove("active");
                        document.getElementById("js_dl_search").classList.add("active")
                    }
                } else
                    getDLPageContent("Filter", !1, !0)
        } else
            getDLPageContent(n.dataset.tabid)
}
;
$(document).on("click", "#js_dl_search_gm_see_more", function() {
    dlPage++;
    let n = ""
      , t = "";
    document.getElementById("js_search_lobby_game") ? (n = document.getElementById("js_search_lobby_game").value,
    t = "#js_games_lobby") : (n = document.getElementById("js_dl_search_game").value,
    t = "#js_dl_searchedGames");
    var i = {
        searchText: n,
        dlPage: dlPage,
        lobbyUrl: DyLobbyMob.lobbyUrl
    };
    getSearchGames(i, t, !0)
});
$(document).on("click", ".js_dl_categories", function() {
    $(this).hasClass("active") && $(this).attr("data-id") == 0 || ($(this).hasClass("active") ? ($(this).removeClass("active"),
    $(".js_dl_categories.active").length == 0 && ($($(".js_dl_categories")[0]).addClass("active"),
    addCategoryIdToObj(gamesData, 0)),
    removeCategoryIdFromObj(gamesData, $(this).attr("data-id")),
    gamesData.Page = 0,
    imgSortIndex = 0,
    GetGames("js_games_lobby"),
    window.pageYOffset + 55 >= document.getElementById("js_cat_main_cont").offsetTop && window.scrollTo(0, document.getElementById("js_cat_main_cont").offsetTop - 55),
    setPageUrl()) : ($(this).attr("data-id") == 0 ? ($(".js_dl_categories").removeClass("active"),
    gamesData.CategoryId = [],
    addCategoryIdToObj(gamesData, 0)) : ($($(".js_dl_categories")[0]).removeClass("active"),
    addCategoryIdToObj(gamesData, $(this).attr("data-id")),
    removeCategoryIdFromObj(gamesData, 0)),
    $(this).addClass("active"),
    gamesData.Page = 0,
    imgSortIndex = 0,
    GetGames("js_games_lobby"),
    window.pageYOffset + 55 >= document.getElementById("js_cat_main_cont").offsetTop && window.scrollTo(0, document.getElementById("js_cat_main_cont").offsetTop - 55),
    setPageUrl()))
});
$(document).on("click", ".js_dl_groups", function() {
    $(this).hasClass("active") || ($(".js_dl_groups").removeClass("active"),
    $(this).addClass("active"),
    gamesData.GroupId = $(this).attr("data-id"),
    gamesData.GroupTypeId = $(this).attr("data-type-id"),
    gamesData.TakeCount = $(this).attr("data-take-count"),
    gamesData.Page = 0,
    imgSortIndex = 0,
    GetGames("js_games_lobby", !1, !0),
    window.pageYOffset + 55 >= document.getElementById("js_cat_main_cont").offsetTop && window.scrollTo(0, document.getElementById("js_cat_main_cont").offsetTop - 55))
});
$(document).on("click", "#js_advanced_search", function() {
    $(this).hasClass("checked") ? (closeFilter(),
    changePageUrlWithoutRefreshing("/" + GamesCommon.language + "/Lobby/" + DyLobbyMob.lobbyUrl + "/Search", "js_dl_search"),
    document.getElementById("js_dl_search") && (document.getElementById("js_dl_search").classList.add("active"),
    document.getElementById("js_dl_filter").classList.remove("active"))) : (openFilter(),
    changePageUrlWithoutRefreshing("/" + GamesCommon.language + "/Lobby/" + DyLobbyMob.lobbyUrl + "/Filter", "js_dl_filter"),
    document.getElementById("js_dl_search") && (document.getElementById("js_dl_search").classList.remove("active"),
    document.getElementById("js_dl_filter").classList.add("active")))
});
$(document).on("click", ".js_dl_filter_groups", function() {
    $(this).hasClass("active") && $(".js_dl_filter_groups.active").length == 1 || ($(this).hasClass("active") && $(".js_dl_filter_groups.active").length > 1 ? $(this).removeClass("active") : $(this).addClass("active"),
    setFilterData(),
    checkFilterGamesCount("js_dl_filter_gm_count", !0),
    resetClicked = !1)
});
$(document).on("click", ".js_dl_filter_categories", function() {
    $(this).hasClass("active") && $(this).attr("data-id") == 0 || ($(this).hasClass("active") ? ($(this).removeClass("active"),
    $(".js_dl_filter_categories.active").length == 0 && $($(".js_dl_filter_categories")[0]).addClass("active")) : ($(this).attr("data-id") == 0 ? $(".js_dl_filter_categories").removeClass("active") : $($(".js_dl_filter_categories")[0]).removeClass("active"),
    $(this).addClass("active")),
    setFilterData(),
    checkFilterGamesCount("js_dl_filter_gm_count", !0),
    resetClicked = !1)
});
$(document).on("click", ".js_dl_filter_themes", function() {
    $(this).hasClass("active") ? $(this).removeClass("active") : ($(this).attr("data-themeid") == 0 ? $(".js_dl_filter_themes").removeClass("active") : $($(".js_dl_filter_themes")[0]).removeClass("active"),
    $(this).addClass("active"));
    setFilterData();
    checkFilterGamesCount("js_dl_filter_gm_count", !0);
    resetClicked = !1
});
$(document).on("click", ".js_dl_filter_tournaments", function() {
    $(this).hasClass("active") ? $(this).removeClass("active") : ($(this).attr("data-tournamentid") == 0 ? $(".js_dl_filter_tournaments").removeClass("active") : $($(".js_dl_filter_tournaments")[0]).removeClass("active"),
    $(this).addClass("active"));
    setFilterData();
    checkFilterGamesCount("js_dl_filter_gm_count", !0);
    resetClicked = !1
});
$(document).on("click", "#js_dl_reset_filter", function() {
    resetClicked || ($("#js_dl_search_game").val(""),
    searchTxt = "",
    $(".js_filter_items").removeClass("active"),
    $($(".js_dl_filter_groups")[0]).addClass("active"),
    $($(".js_dl_filter_categories")[0]).addClass("active"),
    document.getElementById("js_search_msg") && document.getElementById("js_search_msg").remove(),
    document.getElementById("js_stake_range") && (allowCheckGamesCount = !1,
    stakeSlider.set([rangeMinLimit, rangeMaxLimit])),
    resetClicked = !0,
    setFilterData(),
    checkFilterGamesCount("js_dl_filter_gm_count", !0))
});
$(document).on("click", "#js_dl_filter_show", function() {
    filterGames()
});
$(document).on("click", "#js_btn_group_by", function() {
    $(this).hasClass("open") ? ($(this).removeClass("open"),
    $(this).next().addClass("hidden")) : ($(this).addClass("open"),
    $(this).next().removeClass("hidden"))
});
$(document).on("click", ".js_group_by_items", function() {
    var n = $(this).attr("data-group-by");
    $("#js_btn_group_by").removeClass("open");
    $("#js_btn_group_by").next().addClass("hidden");
    n != filterData.groupBy && ($("#js_btn_group_by").html($(this).text() + '<i class="icon_arrow_down"><\/i>'),
    filterData.groupBy = n,
    $.ajax({
        type: "POST",
        url: "/DynamicLobbyHelper/GroupByFilterGames",
        data: filterData,
        success: function(n) {
            var i, t;
            if (n) {
                for (i = "",
                t = 0; t < n.GamesFilterOutput.length; t++)
                    n.GamesFilterOutput[t].GamesOutput.length > 0 && (i += '<div class="rd_title__block mb-2 single_title d-flex align-items-center justify-content-between"><h3 class="rd_title">' + n.GamesFilterOutput[t].Name + "<\/h3><\/div>",
                    i += '<div class="d-flex flex-wrap js_filter_games_cont" data-id="' + n.GamesFilterOutput[t].Id + '" data-page="0">' + createDyLobbyGamesHtml(n.GamesFilterOutput[t].GamesOutput, n.GamesFilterOutput[t].RestGamesCount, "") + "<\/div>");
                $("#js_filtered_games").html(dlAnimate(i))
            }
        }
    }))
});
$(document).on("click", ".js_dl_see_more", function() {
    var n;
    if (!$(this).parent().attr("id")) {
        var t = $(this).parents(".js_filter_games_cont")
          , i = t.attr("data-id")
          , r = t.attr("data-page");
        $(this).parent().remove();
        n = {
            CategoryId: filterData.CategoryId,
            GroupId: filterData.GroupId,
            ThemeId: filterData.ThemeId,
            TournamentId: filterData.TournamentId,
            MinLimit: filterData.MinLimit,
            MaxLimit: filterData.MaxLimit,
            TakeCount: 10,
            groupBy: filterData.groupBy,
            SearchText: filterData.SearchText
        };
        filterData.groupBy == 1 ? (n.CategoryId = [],
        n.CategoryId.push(i)) : (n.GroupId = [],
        n.GroupId.push(i));
        n.Page = Number(r) + 1;
        t.attr("data-page", n.Page);
        $.ajax({
            type: "POST",
            url: "/DynamicLobbyHelper/GroupByFilterGames",
            data: n,
            success: function(n) {
                var r, i;
                if (n) {
                    for (r = "",
                    i = 0; i < n.GamesFilterOutput.length; i++)
                        n.GamesFilterOutput[i].GamesOutput.length > 0 && (r += createDyLobbyGamesHtml(n.GamesFilterOutput[i].GamesOutput, n.GamesFilterOutput[i].RestGamesCount, ""));
                    t.append(dlAnimate(r))
                }
            }
        })
    }
});
$(document).on("click", "#js_filter_result_go_back", function() {
    getDLPageContent("Filter", !1)
});
$(document).on("click", ".js_more_filter_items", function() {
    if ($(this).hasClass("open")) {
        let t = $(this).parent().find(".js_filter_items");
        $(this).removeClass("open");
        for (var n = 6; n < t.length; n++)
            $(t[n]).addClass("hidden")
    } else
        $(this).addClass("open"),
        $(this).parent().find(".js_filter_items").removeClass("hidden")
});
$(document).on("focus", ".js_st_rg_min_max", function() {
    stakeRangeInpVal = $(this).val();
    $(this).val("")
});
$(document).on("blur", ".js_st_rg_min_max", function() {
    $(this).val() == "" && $(this).val(stakeRangeInpVal)
});
$(document).on("focus", "#js_dl_search_game", function() {
    $(".blinking_cursor").hide()
});
$(document).on("click", "#js_clear_search_val", function() {
    var n = document.getElementById("js_dl_search_game");
    n.value = "";
    n.dispatchEvent(new Event("keyup"));
    n.focus()
});
$(document).on("click", ".js_top_winners_item_names", function() {
    if (this.dataset.gotData != "true")
        GetBigWinsWidget(this.dataset.lobbyWidgetType, this.dataset.winsType, this),
        this.dataset.gotData = !0;
    else if (!this.classList.contains("active")) {
        $(".js_top_winners_item_names").removeClass("active");
        this.classList.add("active");
        let n = document.getElementsByClassName("js_top_winners_item");
        for (let t = 0; t < n.length; t++)
            n[t].classList.remove("active"),
            this.dataset.lobbyWidgetType == n[t].dataset.lobbyWidgetType && n[t].classList.add("active")
    }
});
$(document).on("click", "#js_close_news_promo_popup", function(n) {
    n.stopPropagation();
    n.preventDefault();
    $("#js_news_promo_popoup_cont").remove();
    $("body").css("overflow", "visible")
});
$(document).on("keyup", function(n) {
    n.stopPropagation();
    n.preventDefault();
    n.keyCode == 27 && document.getElementById("js_news_promo_popoup_cont") != null && ($("#js_news_promo_popoup_cont").remove(),
    $("body").css("overflow", "visible"))
});
$(document).on("click", ".js_news_promo_btn", function(n) {
    n.stopPropagation();
    n.preventDefault();
    let t = this.dataset.href
      , i = this.dataset.target;
    switch (i) {
    case "3":
        window.open(t, "_blank").focus();
        break;
    case "1":
        window.location.href = t;
        break;
    case "2":
        $("body").css("overflow", "hidden");
        var r = '<div class="promo_popup_container" id="js_news_promo_popoup_cont"><div class="promo_popup"><div class="promo_popup_inner"><iframe class="promo_popup_iframe" src="' + t + '"><\/iframe><div class="promo_popup_close" id="js_close_news_promo_popup"><\/div><\/div><\/div><\/div>';
        $("body").append(r)
    }
});
$(document).on("click", "#js_open_lobby_search", function() {
    isOpenSearchInp = !0;
    fromLobbSearchData.searchText = "";
    fromLobbSearchData.lobbyUrl = "";
    $("#js_lobby_search_cont").addClass("active");
    $("#js_dl_groups_cont").addClass("hidden");
    $("#js_dl_cats_cont").addClass("hidden");
    $("#js_games_lobby").html("")
});
$(document).on("click", "#js_close_lobby_search", function() {
    if ($("#js_lobby_search_cont").hasClass("active")) {
        isOpenSearchInp = !1;
        searchTxtFromLobby = "";
        var n = document.getElementById("js_search_lobby_game");
        $("#js_lobby_search_cont").removeClass("active");
        $("#js_search_msg").remove();
        n.value = "";
        $("#js_dl_groups_cont").removeClass("hidden");
        document.getElementsByClassName("js_dl_categories").length > 2 && $("#js_dl_cats_cont").removeClass("hidden");
        gamesData.Page = 0;
        imgSortIndex = 0;
        GetGames("js_games_lobby")
    }
})
