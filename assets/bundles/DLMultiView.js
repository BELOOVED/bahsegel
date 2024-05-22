function openModalPopup(n, t) {
	searchTxt = "";
	gamesData.Page = 0;
	gamesData.SearchText = "";
	gamesData.CategoryId = [];
	let i = $(n).find(".js_dl_groups.default")[0];
	i == undefined && (i = $(n).find(".js_dl_groups")[0]);
	gamesData.CategoryId.push($(n).find(".js_dl_categories")[0].dataset.id);
	gamesData.GroupId = i.dataset.id;
	gamesData.GroupTypeId = i.dataset.typeId;
	gamesData.TakeCount = i.dataset.takeCount;
	GetGames("js_add_games_lobby");
	var u = '<div class="lca-gv-modal ' + t + '" id="js_gv_modal"><div class="lca-gv-modal-content bg-tert"><div class="lca-gv-modal-header" > <h2 class="lca-gv-modal-title">' + DyLobbyMultiView.trns.AddGame + '<\/h2><button class="lca-gv-modal-close" id="js_modal_close"><\/button ><\/div > ' + n + "<div><\/div>";
	$(u).hide().appendTo($("body")).fadeIn();
	let r = $("body").find(".js_dl_groups.default")[0];
	r == undefined && (r = $("body").find(".js_dl_groups")[0]);
	r.classList.add("active");
	$("body").find(".js_dl_categories")[0].classList.add("active");
	document.getElementById("js_add_game_groups_nav").offsetWidth < document.getElementById("js_add_game_groups_nav").scrollWidth && (document.getElementById("js_groups_nav_right_btn").classList.remove("lca-disabled"), document.getElementById("js_add_game_groups_nav").removeEventListener("wheel", addGameGroupsNavScroll), document.getElementById("js_add_game_groups_nav").addEventListener("wheel", addGameGroupsNavScroll))
}

function drawGames(n, t, i) {
	var u = "",
		r, e, f;
	if (t.length > 0)
		for ($("#" + n).addClass("lca-games-grid lca-games-grid-col-4"), r = 0; r < t.length; r++) {
			for (e = "", f = 0; f < t[r].LanguageIds.length; f++) e += '<div class="lca-card-flag ' + t[r].LanguageIds[f].toLowerCase() + '" style="background-image: url(' + DyLobbyMultiView.cdnUrl + 'Img/sprites/flags_sprite.png)"><\/div>';
			let n = t[r].UseRmCdn ? DyLobbyMultiView.RmCdnUrl : DyLobbyMultiView.cdnUrl;
			u += '<div class="lca-gv-card"><div class="lca-gv-card-body"> <img class="w-100 lca-gv-card-img animated" src="' + n + t[r].Image + '" alt="' + t[r].Description + '"><\/div> <div class="lca-gv-card-hover animate js_add_game_to_gv" data-href="' + t[r].URL + '" data-game-id ="' + t[r].Id + '"><div class="lca-gv-card-hover-header"><div class="lca-gv-card-name">' + t[r].Description + '<\/div><div class="lca-gv-card-badge-wrapper">' + CreateBadges(t[r].BadgeTypeIds) + '<\/div><\/div><span class="lca-gv-card-add-game"><i class="dynamic_icon">&#58160<\/i><\/span><div class="lca-gv-card-hover-footer d-flex">';
			u += t[r].MinMaxLimits[0] == "0" && t[r].MinMaxLimits[1] == "0" ? '<div class="lca-gv-card-price d-flex" ><span><\/span><span class="currency_icon"><\/span><\/div>' : '<div class="lca-gv-card-price d-flex" ><span>' + t[r].MinMaxLimits[0] + " - " + t[r].MinMaxLimits[1] + '<\/span><span class="currency_icon ' + DyLobbyMultiView.currencyCode + '"><\/span><\/div>';
			u += '<div class="lca-gv-card-flag-wrapper">' + e + "<\/div> <\/div ><\/div ><\/div>"
		} else $("#" + n).removeClass("lca-games-grid"), u += gamesData.GroupTypeId == DyLobbyMultiView.favoriteGroupType ? '<div class="casino_nav_fav_game_not_found "><img src="' + DyLobbyMultiView.cdnUrl + 'Img/icons/redesign/favorite_big_star.svg"/><span>' + DyLobbyMultiView.trns.YouHaveNoFavoriteGames + "<\/span><\/div>" : gamesData.SearchText != "" ? '<div class="lca-filter-no-result text-center"><span class="search__icon"><\/span><p>' + DyLobbyMultiView.trns.NoSearchResults + "<\/p><\/div>" : gamesData.GroupTypeId == DyLobbyMultiView.lastPlayedGroupType ? '<div class="casino_nav_fav_game_not_found "><p class="last-played-icon dynamic_icon">&#57944<\/p><span>' + DyLobbyMultiView.trns.YouHaveNoLastPlayedGames + "<\/span><\/div>" : '<div class="lca-no-game"><span class="ic_no-game"><\/span><p>' + DyLobbyMultiView.trns.NoSuchGameFound + "<\/p><\/div>";
	i ? $("#" + n).append(dlAnimate(u)) : $("#" + n).html(dlAnimate(u))
}

function setCatInfo(n) {
	var t = $(".js_dl_categories"),
		u, i, r;
	DyLobbyMultiView.showGamesCount && t.children(".js_dl_cat_count").html("");
	t.parent().addClass("hidden");
	u = document.getElementById("js_open_prvs_btn");
	for (let i = 0; i < t.length; i++) {
		u && t[0].offsetTop < t[i].offsetTop && u.classList.remove("lca-disabled");
		for (let r = 0; r < n.length; r++) $(t[i]).attr("data-id") == n[r].Id && (DyLobbyMultiView.showGamesCount && $(t[i]).children(".js_dl_cat_count").html(' <span class="lca-line">|<\/span> ' + n[r].GamesCount), $(t[i]).parent().removeClass("hidden"))
	}
	if (i = document.getElementById("js_add_game_provs_nav_tab_view"), r = document.getElementById("js_open_prvs_btn"), i) setScrollBtnsClass(i, i.scrollLeft, "js_provs_nav_left_btn", "js_provs_nav_right_btn", "js_provs_nav_shadow"), i.removeEventListener("wheel", addGameProvsNavScroll), i.addEventListener("wheel", addGameProvsNavScroll);
	else if (r) {
		let n = !1;
		for (let i = 0; i < t.length; i++) t[0].offsetTop < t[i].offsetTop ? (n = !0, r.classList.remove("lca-disabled"), t[i].classList.contains("active") && (r.classList.add("open"), document.getElementById("js_provs_nav_shadow").classList.remove("closed"))) : n || r.classList.add("lca-disabled")
	}
}

function drawGamesAndSetCatInfo(n, t, i, r, u) {
	setCatInfo(i);
	u && u(n, t, r);
	document.getElementById("js_add_games_lobby_cont").removeEventListener("scroll", loadGamesOnScroll);
	document.getElementById("js_add_games_lobby_cont").addEventListener("scroll", loadGamesOnScroll)
}

function loadGamesOnScroll() {
	$("#js_add_games_lobby_cont")[0].scrollHeight - $("#js_add_games_lobby_cont").scrollTop() <= $("#js_add_games_lobby_cont").outerHeight() + 100 && allowLazyLoad && (allowLazyLoad = !1, gamesData.Page++, GetGames("js_add_games_lobby", !0))
}

function loadLPSliderGamesOnScroll() {
	var n = this,
		t;
	n.scrollHeight - $(n).scrollTop() <= $(n).outerHeight() + 30 && allowSliderGamesLazyLoad && n.dataset.hasNext.toLowerCase() == "true" && (allowSliderGamesLazyLoad = !1, t = Number(n.dataset.page), gamesByGroupData.input[0] = {
		GroupId: n.dataset.id,
		GroupTypeId: n.dataset.typeId,
		TakeCount: 16,
		Page: t + 1
	}, GetGamesByGroup(n))
}

function GetGamesByGroup(n) {
	$.ajax({
		type: "POST",
		data: gamesByGroupData,
		url: "/DynamicLobbyHelper/GetGamesByGroup",
		success: function(t) {
			for (var i = 0; i < t.length; i++) n.dataset.page = gamesByGroupData.input[0].Page, n.dataset.hasNext = t[i].HasNext, drawSliderGames(n, t[i].GamesOutput), allowSliderGamesLazyLoad = !0
		}
	})
}

function GetGames(n, t, i) {
	$.ajax({
		type: "POST",
		data: gamesData,
		url: "/DynamicLobbyHelper/GetDesktopGames",
		success: function(r) {
			var u, f, e;
			let o = [],
				s = r.CategoryInfo;
			for (u = 0; u < s.length; u++) gamesData.CategoryId.includes(s[u].Id.toString()) && o.push(s[u].Id.toString());
			if (o.length > 0) {
				if (gamesData.CategoryId = o, drawGamesAndSetCatInfo(n, r.GamesOutput, r.CategoryInfo, t, drawGames), allowLazyLoad = r.HasNext, i) {
					for ($(".js_dl_categories").removeClass("active"), f = 0; f < $(".js_dl_categories").length; f++)
						for (e = 0; e < gamesData.CategoryId.length; e++) $(".js_dl_categories")[f].dataset.id == gamesData.CategoryId[e] && $(".js_dl_categories")[f].classList.add("active");
					let n = document.getElementById("js_add_game_provs_nav_tab_view");
					n && ($("#js_add_game_provs_nav_tab_view").animate({
						scrollLeft: $(".js_dl_categories.active")[0].offsetLeft - 40
					}, 0), setScrollBtnsClass(n, n.scrollLeft, "js_provs_nav_left_btn", "js_provs_nav_right_btn", "js_provs_nav_shadow"))
				}
			} else {
				gamesData.CategoryId = ["0"];
				GetGames("js_add_games_lobby", !1, !0);
				let n = document.getElementById("js_add_game_provs_nav_tab_view");
				n && ($("#js_add_game_provs_nav_tab_view").animate({
					scrollLeft: 0
				}, 0), setScrollBtnsClass(n, n.scrollLeft, "js_provs_nav_left_btn", "js_provs_nav_right_btn", "js_provs_nav_shadow"))
			}
		}
	})
}

function drawSliderGames(n, t) {
	for (var f, u, r = "", i = 0; i < t.length; i++) {
		for (f = "", u = 0; u < t[i].LanguageIds.length; u++) f += '<div class="lca-card-flag ' + t[i].LanguageIds[u].toLowerCase() + '"style="background-image: url(' + DyLobbyMultiView.cdnUrl + 'Img/sprites/flags_sprite.png)"><\/div>';
		let n = t[i].UseRmCdn ? DyLobbyMultiView.RmCdnUrl : DyLobbyMultiView.cdnUrl;
		r += '<div class="lca-gv-card"><div class="lca-gv-card-body"><img class="w-100 lca-gv-card-img animated" src="' + n + t[i].Image + '" alt="' + t[i].Description + '"><\/div><div class="lca-gv-card-hover animate js_add_game_from_left_part" data-href="' + t[i].URL + '" data-game-id="' + t[i].Id + '"><div class="lca-gv-card-hover-header"><div class="lca-gv-card-name">' + t[i].Description + '<\/div><div class="lca-gv-card-badge-wrapper">' + CreateBadges(t[i].BadgeTypeIds) + '<\/div><\/div><span class="lca-gv-card-add-game"><i class="dynamic_icon">&#58160<\/i><\/span><div class="lca-gv-card-hover-footer d-flex">';
		r += t[i].MinMaxLimits[0] == "0" && t[i].MinMaxLimits[1] == "0" ? '<div class="lca-gv-card-price d-flex"><span><\/span><span class="currency_icon"><\/span><\/div>' : '<div class="lca-gv-card-price d-flex"><span>' + t[i].MinMaxLimits[0] + " - " + t[i].MinMaxLimits[1] + '<\/span><span class="currency_icon ' + DyLobbyMultiView.currencyCode + '"><\/span><\/div>';
		r += '<div class="lca-gv-card-flag-wrapper">' + f + "<\/div><\/div><\/div><\/div>"
	}
	$(n).append(r)
}

function searchGames(n) {
	var t = n.value.replace(/\s\s+/g, " ");
	isSearchInutTextValid(n, t) && searchTxt != t && (t == "" || t.charAt(0) != " ") && (searchTxt = t, clearTimeout(dlSearchTimeOut), dlSearchTimeOut = setTimeout(function() {
		document.getElementById("js_add_games_lobby_cont").scrollTo({
			top: 0,
			behavior: "smooth"
		});
		gamesData.SearchText = searchTxt;
		gamesData.Page = 0;
		GetGames("js_add_games_lobby")
	}, 400))
}

function isSearchInutTextValid(n, t) {
	const r = new RegExp("^[A-Za-z0-9 '&!-]*$");
	if (r.test(t)) return document.getElementById("js_search_msg") && document.getElementById("js_search_msg").remove(), !0;
	if (!document.getElementById("js_search_msg")) {
		var i = document.createElement("span");
		i.id = "js_search_msg";
		i.innerHTML = DyLobbyMultiView.trns.UseLatinLettersInSearch;
		n.parentNode.appendChild(i)
	}
	return !1
}

function createGameView(n) {
	var t = "";
	$.ajax({
		url: "/DynamicLobbyHelper/GetGVAvailableGroupsAndGames",
		type: "POST",
		data: "gamesTakeCount=4&place=1&lobbyUrl=" + DyLobbyMultiView.lobbyUrl,
		success: function(i) {
			for (var r = 0; r < n; r++) t += '<div class="lca-gv-container-item js_game_view_item"><div class="lca-gv-game-card js_game_view_item_inner">' + i + "<\/div><\/div>";
			$("#js_game_view_cont").append(dlAnimate(t));
			allowChangeGameView = !0
		}
	})
}

function createGameCardContent(n) {
	$.ajax({
		url: "/DynamicLobbyHelper/GetGVAvailableGroupsAndGames",
		type: "POST",
		data: "gamesTakeCount=4&place=1&lobbyUrl=" + DyLobbyMultiView.lobbyUrl,
		success: function(t) {
			$(n).html(dlAnimate(t));
			allowGvClose = !0
		}
	})
}

function createGameBtnBlock(n, t) {
	var i = "",
		r = "",
		u = "";
	return n.IsLiked && (r = "active"), n.IsFavorite && (u = "active"), i = '<div class="lca-gv-game-btn-block  d-flex justify-content-between align-items-center"> <h3 class="lca-gv-game-title">' + n.Name + '<\/h3><div class="lca-gv-game-btns d-flex align-items-center"><span class="hand_icon js_mv_game_like ' + r + '" title="' + DyLobbyMultiView.trns.Like + '"><span class="like-count js_game_likes_count">' + n.LikesCount + '<\/span><\/span><span class="star_icon js_mv_game_fav ' + u + '" title="' + DyLobbyMultiView.trns.AddToFavorites + '"><\/span><span class="sync_icon js_reload_game" title="' + DyLobbyMultiView.trns.Reload + '"><\/span><span class="fullscreen_icon js_to_full_screen" title="' + DyLobbyMultiView.trns.FullScreen + '"><\/span><span class="copy_icon js_to_new_window" title="' + DyLobbyMultiView.trns.OpenInNewWindow + '"><\/span><span class="close_icon js_gv_close" title="' + DyLobbyMultiView.trns.Close + '"><\/span><\/div><\/div>', i + (n.ProviderId == 13 ? '<div id="' + t + '" class="js_iframe_wrapper lca-iframe-wrapper"><\/div><script id="jsndvjvnsd" type="text/javascript" src="' + n.LaunchData.ScriptUrl + '"><\/script>' : '<iframe src="' + n.LuanchUrl + '" allowFullScreen><\/iframe>')
}

function gameViewToOne() {
	var t = $(".js_game_view_item"),
		i = $(".js_game_view_item").length,
		r = $('.js_game_view_item[data-has-game="true"]'),
		n;
	if (r.length > 1) return showWarnMessage(DyLobbyMultiView.trns.ToSwitchGameMode), allowChangeGameView = !0, !1;
	for (n = 0; n < t.length; n++) t[n].dataset.hasGame != "true" && i > 1 && (t[n].remove(), i = $(".js_game_view_item").length);
	return $(".js_game_view_item").addClass("one-item"), $(".js_game_view_item")[0].dataset.advancedview && $(".js_game_view_item")[0].dataset.advancedview.toLocaleLowerCase() == "true" ? $("#js_gv_main").addClass("lca-advanced-view") : $("#js_gv_main").removeClass("lca-advanced-view"), allowChangeGameView = !0, DyLobbyMultiView.allowChangeHeight = !0, !0
}

function gameViewToTwo() {
	var n, t;
	if (removeIframesHeights(), DyLobbyMultiView.allowChangeHeight = !1, $("#js_gv_main").removeClass("lca-advanced-view"), $(".js_game_view_item").removeClass("one-item"), $("#js_gv").removeClass("lca-gv-scroll"), n = $(".js_game_view_item").length, n == 1) return createGameView(1), !0;
	if (n == 4) {
		var i = $(".js_game_view_item"),
			n = $(".js_game_view_item").length,
			r = $('.js_game_view_item[data-has-game="true"]');
		if (r.length > 2) return showWarnMessage(DyLobbyMultiView.trns.ToSwitchGameMode), allowChangeGameView = !0, !1;
		for (t = 0; t < i.length; t++) i[t].dataset.hasGame != "true" && n > 2 && (i[t].remove(), n = $(".js_game_view_item").length);
		return allowChangeGameView = !0, !0
	}
}

function gameViewToFour() {
	removeIframesHeights();
	DyLobbyMultiView.allowChangeHeight = !1;
	$("#js_gv_main").removeClass("lca-advanced-view");
	$(".js_game_view_item").removeClass("one-item");
	$("#js_gv").removeClass("lca-gv-scroll");
	var n = $(".js_game_view_item").length;
	return createGameView(4 - n), !0
}

function removeIframesHeights() {
	let t = document.getElementById("js_game_view_cont"),
		n = t.getElementsByTagName("iframe");
	for (let t = 0; t < n.length; t++) n[t].style.removeProperty("height")
}

function addGameGroupsNavScroll(n) {
	var t = document.getElementById("js_add_game_groups_nav"),
		r = t.scrollLeft,
		i;
	n = window.event || n;
	i = Math.max(-1, Math.min(1, n.wheelDelta || -n.detail));
	t.scrollLeft -= i * 40;
	setScrollBtnsClass(t, r, "js_groups_nav_left_btn", "js_groups_nav_right_btn", "js_groups_nav_shadow");
	n.preventDefault()
}

function addGameProvsNavScroll(n) {
	var t = document.getElementById("js_add_game_provs_nav_tab_view"),
		r = t.scrollLeft,
		i;
	n = window.event || n;
	i = Math.max(-1, Math.min(1, n.wheelDelta || -n.detail));
	t.scrollLeft -= i * 40;
	setScrollBtnsClass(t, r, "js_provs_nav_left_btn", "js_provs_nav_right_btn", "js_provs_nav_shadow");
	n.preventDefault()
}

function closeGVModal() {
	$("#js_gv_modal").fadeOut();
	setTimeout(function() {
		$("#js_gv_modal").remove()
	}, 450)
}

function closeWarnMessage() {
	$("#gv_warn_popup").fadeOut();
	setTimeout(function() {
		$("#gv_warn_popup").remove()
	}, 450)
}

function showWarnMessage(n) {
	var t = '<div class="lca-gv-modal" id="gv_warn_popup"><div class="lca-gv-modal-content bg-tert lca-gv-warn"> <p class="lca-gv-warn-text"> ' + n + '<\/p ><div class="lca-gv-warn-btn-wrapper"><button type="button" class="lca-gv-warn-btn h-bg-primary" id="js_close_gv_warn_popup">OK<\/button > <\/div><\/div><\/div> ';
	$(t).hide().appendTo($("body")).fadeIn()
}

function closeOpenNewWindowWarnMessage() {
	$("body").removeClass("ofh");
	$("#gv_onw_warn_popup").fadeOut();
	setTimeout(function() {
		$("#gv_onw_warn_popup").remove()
	}, 450)
}

function showOpenNewWindowWarnMessage(n) {
	var t = '<div class="lca-gv-modal" id="gv_onw_warn_popup"><div class="lca-gv-modal-content bg-tert lca-gv-warn"> <p class="lca-gv-warn-text"> ' + n + '<\/p ><div class="lca-gv-warn-btn-wrapper"><button type="button" class="lca-gv-warn-btn h-bg-secondary lca-gv-back-btn" id="js_to_new_window_cancel">' + DyLobbyMultiView.trns.GoBack + '<\/button > <button type="button" class="lca-gv-warn-btn h-bg-primary" id="js_to_new_window_confirm">' + DyLobbyMultiView.trns.Open + "<\/button > <\/div > <\/div><\/div> ";
	$(t).hide().appendTo($("body")).fadeIn()
}

function openFullscreen(n) {
	n.requestFullscreen ? (document.removeEventListener("fullscreenchange", fullScreenChangeHandler), document.addEventListener("fullscreenchange", fullScreenChangeHandler), n.requestFullscreen()) : n.webkitRequestFullscreen ? (document.removeEventListener("webkitfullscreenchange", fullScreenChangeHandler), document.addEventListener("webkitfullscreenchange", fullScreenChangeHandler), n.webkitRequestFullscreen()) : n.msRequestFullscreen && (document.removeEventListener("MSFullscreenChange", fullScreenChangeHandler), document.addEventListener("MSFullscreenChange", fullScreenChangeHandler), n.msRequestFullscreen());
	n.classList.add("lca_full_screan");
	let t = n.getElementsByTagName("iframe")[0];
	t.removeAttribute("style")
}

function fullScreenChangeHandler() {
	document.fullscreenElement || document.webkitIsFullScreen || document.mozFullScreen || document.msFullscreenElement || $(".js_game_view_item_inner").removeClass("lca_full_screan")
}

function launchGame(n, t) {
	$.ajax({
		url: "/Play/LaunchGame",
		type: "POST",
		data: "gameUrl=" + n + "&isReal=" + DyLobbyMultiView.isRealMode + "&lobbyUrl=" + DyLobbyMultiView.lobbyUrl,
		success: function(i) {
			if (i && i.Success) {
				let r = "game_wrapper_" + Date.now();
				DyLobbyMultiView.lobbyUrl != undefined ? ChangeToAddedGameUrl(n + "-" + DyLobbyMultiView.lobbyUrl) : ChangeToAddedGameUrl(n);
				changeMetaTags(i.Game.Name + " | " + DyLobbyMultiView.trns.DyLobbyGames + " | " + DyLobbyMultiView.partnerName);
				$(t).html(createGameBtnBlock(i.Game, r));
				i.Game.ProviderId == 13 && waitForElem("#" + r).then(LaunchAggGame(i.Game, r));
				$('a[data-game-view="1"].active').length > 0 ? i.Game.OpenInAdvancedView ? ($("#js_gv_main").addClass("lca-advanced-view"), $("#js_gv_main .js_game_view_item")[0].dataset.advancedview = "true") : ($("#js_gv_main").removeClass("lca-advanced-view"), $("#js_gv_main .js_game_view_item")[0].dataset.advancedview = "false") : $($(t).parents(".js_game_view_item")[0]).attr("data-advancedView", i.Game.OpenInAdvancedView);
				$(t).parents(".js_game_view_item")[0].dataset.gameName = i.Game.Name;
				$(".js_game_view_item_inner").removeClass("place_to_add")
			} else showWarnMessage(i.Message)
		}
	})
}

function launchGameInNewWindow(n) {
	return $.ajax({
		url: "/Play/LaunchGame",
		type: "POST",
		data: "gameUrl=" + n + "&isReal=" + DyLobbyMultiView.isRealMode + "&lobbyUrl=" + DyLobbyMultiView.lobbyUrl
	})
}

function openLogin() {
	DyLobbyMultiView.hasStaticLoginPage ? document.location.href = "/Login/Login" : showPopup("/Login/Login", "loginContent", {
		position: null,
		dialogClass: "tl_popup_dialog js_popup_dialog flex_popup_content",
		responsive: !1
	})
}

function setScrollBtnsClass(n, t, i, r, u) {
	let f = n.offsetWidth,
		e = n.scrollWidth,
		o = t + f >= e,
		s = t > 0;
	DyLobbyMultiView.languageDirection == "rtl" && (o = t > 0, s = t + e - f > 1);
	o ? (document.getElementById(r).classList.add("lca-disabled"), document.getElementById(u).classList.remove("shadow-right")) : (document.getElementById(r).classList.remove("lca-disabled"), document.getElementById(u).classList.add("shadow-right"));
	s ? (document.getElementById(i).classList.remove("lca-disabled"), document.getElementById(u).classList.add("shadow-left")) : (document.getElementById(i).classList.add("lca-disabled"), document.getElementById(u).classList.remove("shadow-left"))
}

function CreateBadges(n) {
	let t = "";
	for (var i = 0; i < n.length; i++) switch (n[i]) {
		case 1:
			t += '<div class="lca-card-badge type-1">Top<\/div>';
			break;
		case 2:
			t += '<div class="lca-card-badge type-2">HOT<\/div>';
			break;
		case 3:
			t += '<div class="lca-card-badge type-3">JackPot<\/div>';
			break;
		case 4:
			t += '<div class="lca-card-badge type-4">New<\/div>';
			break;
		case 5:
			t += '<div class="lca-card-badge type-5">Soon<\/div>';
			break;
		case 6:
			t += '<div class="lca-card-badge type-6">Premium<\/div>'
	}
	return t
}

function ChangeToAddedGameUrl(n) {
	let t = document.location.href.toLocaleLowerCase(),
		i = t;
	i = t.includes("/real") ? t.split("real")[0] + "real/" + n : t.split("fun")[0] + "fun/" + n;
	history.replaceState({
		id: ""
	}, "", i)
}

function handleSgResponse(n) {
	console.log(n)
}

function LaunchAggGame(n, t) {
	let i = setInterval(() => {
		if (typeof sg != "undefined" && allowAggLaunch) {
			allowAggLaunch = !1;
			let r = n.LaunchData.Url.replace(/&quot;/g, '"');
			gameLaunchOptions = {
				target_element: t
			};
			gameLaunchOptions.launch_options = JSON.parse(r);
			clearInterval(i);
			window.sg.launch(gameLaunchOptions, handleSgResponse, handleSgResponse);
			allowAggLaunch = !0
		}
	}, 100)
}

function waitForElem(n) {
	return new Promise(t => {
		if (document.querySelector(n)) return t(document.querySelector(n));
		const i = new MutationObserver(() => {
			document.querySelector(n) && (t(document.querySelector(n)), i.disconnect())
		});
		i.observe(document.body, {
			childList: !0,
			subtree: !0
		})
	})
}
var gamesData = {
		CategoryId: [],
		GroupId: 0,
		GroupTypeId: 0,
		Page: 0,
		TakeCount: 10,
		LobbyUrl: ""
	},
	DyLobbyMultiView = DyLobbyMultiView || function() {
		return {
			init: function(n) {
				$.extend(this, n);
				gamesData.LobbyUrl = n.lobbyUrl;
				n.fromSinglePage ? changeMetaTags(n.gameName + " | " + DyLobbyMultiView.partnerName) : changeMetaTags(n.gameName + " | " + DyLobbyMultiView.trns.DyLobbyGames + " | " + DyLobbyMultiView.partnerName)
			}
		}
	}(),
	searchTxt = "",
	dlSearchTimeOut = "",
	allowLazyLoad = !1,
	addGameClickLock = !0,
	allowSliderGamesLazyLoad = !0,
	allowClick = !0,
	allowChangeGameView = !0,
	gvItem = "",
	allowAggLaunch = !0,
	allowGvClose = !0,
	gamesByGroupData = {
		input: []
	};
$(document).on("click", "#js_add_game", function() {
	addGameClickLock && (addGameClickLock = !1, $(this).parents(".js_game_view_item_inner").addClass("place_to_add"), $.ajax({
		url: "/Play/OpenAddGamePopup",
		type: "POST",
		data: "lobbyUrl=" + DyLobbyMultiView.lobbyUrl,
		success: function(n) {
			openModalPopup(n, "addgame");
			addGameClickLock = !0
		}
	}))
});
$(document).on("click", ".js_gv_close", function() {
	allowGvClose && (allowGvClose = !1, document.location.href = DyLobbyMultiView.fromSinglePage ? "/" : DyLobbyMultiView.referrerUrl != "" && DyLobbyMultiView.referrerUrl.toLowerCase().includes("lobby") ? DyLobbyMultiView.referrerUrl : `/${DyLobbyMultiView.language}/Lobby/${DyLobbyMultiView.lobbyUrl}/Main`)
});
$(document).on("click", "#js_groups_nav_right_btn", function() {
	var t = document.getElementById("js_add_game_groups_nav"),
		n = t.scrollLeft;
	n = n + 600;
	$("#js_add_game_groups_nav").animate({
		scrollLeft: n
	}, 600);
	setScrollBtnsClass(t, n, "js_groups_nav_left_btn", "js_groups_nav_right_btn", "js_groups_nav_shadow")
});
$(document).on("click", "#js_groups_nav_left_btn", function() {
	var t = document.getElementById("js_add_game_groups_nav"),
		n = t.scrollLeft;
	n = n - 600;
	$("#js_add_game_groups_nav").animate({
		scrollLeft: n
	}, 600);
	setScrollBtnsClass(t, n, "js_groups_nav_left_btn", "js_groups_nav_right_btn", "js_groups_nav_shadow")
});
$(document).on("click", "#js_provs_nav_right_btn", function() {
	var t = document.getElementById("js_add_game_provs_nav_tab_view"),
		n = t.scrollLeft;
	n = n + 600;
	$("#js_add_game_provs_nav_tab_view").animate({
		scrollLeft: n
	}, 600);
	setScrollBtnsClass(t, n, "js_provs_nav_left_btn", "js_provs_nav_right_btn", "js_provs_nav_shadow")
});
$(document).on("click", "#js_provs_nav_left_btn", function() {
	var t = document.getElementById("js_add_game_provs_nav_tab_view"),
		n = t.scrollLeft;
	n = n - 600;
	$("#js_add_game_provs_nav_tab_view").animate({
		scrollLeft: n
	}, 600);
	setScrollBtnsClass(t, n, "js_provs_nav_left_btn", "js_provs_nav_right_btn", "js_provs_nav_shadow")
});
$(document).on("click", "#js_close_gv_warn_popup", function() {
	closeWarnMessage()
});
$(document).on("click", "#js_to_new_window_cancel", function() {
	closeOpenNewWindowWarnMessage()
});
$(document).on("click", ".js_to_new_window", function() {
	return showOpenNewWindowWarnMessage(DyLobbyMultiView.trns.ToOpenInNewWindow), $("body").addClass("ofh"), gvItem = $(this), !1
});
$(document).on("click", "#js_to_new_window_confirm", function() {
	let n = $(gvItem).parent().parent().next()[0];
	if (n.tagName.toLowerCase() == "iframe") launchGameInNewWindow($(gvItem).parents(".js_game_view_item")[0].dataset.href).then(n => {
		if (n.Success) {
			let t, i = n.Game.LuanchUrl,
				r = window.innerWidth * .7,
				u = window.innerHeight,
				f = window.innerHeight * .15 + window.screenY,
				e = window.innerWidth * .15 + window.screenX;
			t = window.open(i, "name", "height=" + u + ",width=" + r + ",top=" + f + ",left=" + e);
			window.focus && t.focus();
			closeOpenNewWindowWarnMessage();
			document.location.href = `/${DyLobbyMultiView.language}/Lobby/${DyLobbyMultiView.lobbyUrl}/Main`
		} else showWarnMessage(n.Message)
	});
	else {
		let n;
		n = window.open(document.location.href, "_blank");
		window.focus && n.focus();
		closeOpenNewWindowWarnMessage();
		document.location.href = `/${DyLobbyMultiView.language}/Lobby/${DyLobbyMultiView.lobbyUrl}/Main`
	}
	return !1
});
$(document).on("click", ".js_to_full_screen", function() {
	openFullscreen($(this).parents(".js_game_view_item_inner")[0])
});
$(document).on("click", ".js_reload_game", function() {
	let n = $(this).parent().next()[0];
	var t = $(this).parents(".js_game_view_item")[0].dataset.href;
	$(n).remove();
	launchGame(t, $(this).parents(".js_game_view_item_inner"))
});
$(document).on("click", ".js_add_game_to_gv", function() {
	closeGVModal();
	var n = this.dataset.href,
		t = this.dataset.gameId;
	setTimeout(function() {
		$(".place_to_add").parents(".js_game_view_item").attr("data-has-game", "true");
		$(".place_to_add").parents(".js_game_view_item").attr("data-game-id", t);
		$(".place_to_add").parents(".js_game_view_item").attr("data-href", n);
		launchGame(n, ".place_to_add")
	}, 450)
});
$(document).on("click", ".js_add_game_from_cv", function() {
	var n = this.dataset.href,
		t = this.dataset.gameId;
	launchGame(n, $(this).parents(".js_game_view_item_inner"));
	$(this).parents(".js_game_view_item").attr("data-has-game", "true");
	$(this).parents(".js_game_view_item").attr("data-game-id", t);
	$(this).parents(".js_game_view_item").attr("data-href", n)
});
$(document).on("click", ".js_add_game_from_left_part", function() {
	var n = $(".js_game_view_item:not([data-has-game])"),
		i, t;
	$(".js_game_view_item").length == 1 && (n = $(".js_game_view_item"));
	i = this.dataset.gameId;
	n.length > 0 ? (t = this.dataset.href, launchGame(t, $(n[0]).children(".js_game_view_item_inner")), $(n[0]).attr("data-has-game", "true"), $(n[0]).attr("data-game-id", i), $(n[0]).attr("data-href", t)) : showWarnMessage(DyLobbyMultiView.trns.ToAddGame)
});
$(document).on("click", ".js_dl_categories", function() {
	$(this).hasClass("active") && $(this).attr("data-id") == 0 || ($(this).hasClass("active") ? ($(this).removeClass("active"), $(".js_dl_categories.active").length == 0 && ($($(".js_dl_categories")[0]).addClass("active"), addCategoryIdToObj(gamesData, "0")), document.getElementById("js_add_games_lobby_cont").scrollTo({
		top: 0,
		behavior: "smooth"
	}), removeCategoryIdFromObj(gamesData, $(this).attr("data-id")), gamesData.Page = 0, GetGames("js_add_games_lobby")) : ($(this).attr("data-id") == "0" ? ($(".js_dl_categories").removeClass("active"), gamesData.CategoryId = [], addCategoryIdToObj(gamesData, "0")) : ($($(".js_dl_categories")[0]).removeClass("active"), addCategoryIdToObj(gamesData, $(this).attr("data-id")), removeCategoryIdFromObj(gamesData, "0")), document.getElementById("js_add_games_lobby_cont").scrollTo({
		top: 0,
		behavior: "smooth"
	}), $(this).addClass("active"), gamesData.Page = 0, GetGames("js_add_games_lobby")))
});
$(document).on("click", ".js_dl_groups", function() {
	$(this).hasClass("active") || ($(".js_dl_groups").removeClass("active"), $(this).addClass("active"), document.getElementById("js_add_games_lobby_cont").scrollTo({
		top: 0,
		behavior: "smooth"
	}), gamesData.GroupId = $(this).attr("data-id"), gamesData.GroupTypeId = $(this).attr("data-type-id"), gamesData.TakeCount = $(this).attr("data-take-count"), gamesData.Page = 0, GetGames("js_add_games_lobby", !1, !0))
});
$(document).on("click", "#js_hdr_play_real", function() {
	var i = window.location.href.toLowerCase(),
		t, n;
	for (i = i.replace("/play/fun/", "/play/real/"), history.replaceState("", "", i), t = $(".js_game_view_item"), DyLobbyMultiView.isRealMode = "true", n = 0; n < t.length; n++) t[n].getElementsByTagName("iframe").length > 0 && launchGame(t[n].dataset.href, $(t[n]).children(".js_game_view_item_inner"));
	$(this).parent().remove()
});
$(document).on("click", "#js_header_btn", function() {
	$("#js_gv_header").hasClass("active") ? ($("#js_gv_header").removeClass("active"), $("#js_gv_sidebar").removeClass("open"), $("#js_gv_main").addClass("open")) : ($("#js_gv_sidebar").attr("data-got-data") != "true" && $.ajax({
		url: "/DynamicLobbyHelper/GetGVAvailableGroupsAndGames",
		type: "POST",
		data: "gamesTakeCount=16&place=2&lobbyUrl=" + DyLobbyMultiView.lobbyUrl,
		success: function(n) {
			var i, t;
			for ($("#js_gv_sidebar").append(n), new Swiper("#js_groups_slider_cont", {
					loop: !1,
					slidesPerView: 1,
					preloadImages: !1,
					autoplay: !1,
					effect: "fade",
					navigation: {
						nextEl: "#js_gv_lp_slider_next",
						prevEl: "#js_gv_lp_slider_prev"
					}
				}), i = document.getElementsByClassName("js_gv_lp_gamelist"), t = 0; t < i.length; t++) i[t].addEventListener("scroll", loadLPSliderGamesOnScroll);
			$("#js_gv_sidebar").attr("data-got-data", "true")
		}
	}), $("#js_gv_header").addClass("active"), $("#js_gv_sidebar").addClass("open"), $("#js_gv_main").removeClass("open"))
});
$(document).on("click", "#js_modal_close", function() {
	closeGVModal();
	$(".js_game_view_item_inner").removeClass("place_to_add")
});
$(document).on("click", "#js_close_warn_popup", function() {
	$("#gv_warn_popup").fadeOut();
	setTimeout(function() {
		$("#gv_warn_popup").remove()
	}, 450)
});
$(document).on("click", ".js_mv_game_fav", function(n) {
	if (n.stopPropagation(), DyLobbyMultiView.userId == 0) {
		openLogin();
		return
	}
	if (allowClick) {
		allowClick = !1;
		var t = $(this).parents(".js_game_view_item").attr("data-game-id");
		$(this).hasClass("active") ? $.ajax({
			url: "/DynamicLobbyHelper/DeleteFromFavList",
			type: "POST",
			data: {
				gameId: t
			},
			datatype: "json",
			success: function(n) {
				n.Code > 0 ? showWarnMessage(n.Message) : $('div[data-game-id="' + t + '"] .js_mv_game_fav').removeClass("active");
				allowClick = !0
			}
		}) : $.ajax({
			url: "/DynamicLobbyHelper/AddToFavList",
			type: "POST",
			data: {
				gameId: t
			},
			datatype: "json",
			success: function(n) {
				n.Code > 0 ? showWarnMessage(n.Message) : $('div[data-game-id="' + t + '"] .js_mv_game_fav').addClass("active");
				allowClick = !0
			}
		})
	}
});
$(document).on("click", ".js_mv_game_like", function(n) {
	if (n.stopPropagation(), DyLobbyMultiView.userId == 0) {
		openLogin();
		return
	}
	if (allowClick) {
		allowClick = !1;
		var i = $(this),
			t = $(this).parents(".js_game_view_item").attr("data-game-id");
		$(i).hasClass("active") ? $.ajax({
			url: "/DynamicLobbyHelper/RemoveLike",
			type: "POST",
			data: {
				gameId: t
			},
			datatype: "json",
			success: function(n) {
				if (n.Code > 0) showWarnMessage(n.Message);
				else {
					var r = $(i).children(".js_game_likes_count").text();
					$('div[data-game-id="' + t + '"] .js_mv_game_like').removeClass("active");
					$('div[data-game-id="' + t + '"] .js_game_likes_count').html(Number(r) - 1)
				}
				allowClick = !0
			}
		}) : $.ajax({
			url: "/DynamicLobbyHelper/AddLike",
			type: "POST",
			data: {
				gameId: t
			},
			datatype: "json",
			success: function(n) {
				if (n.Code > 0) showWarnMessage(n.Message);
				else {
					var r = $(i).children(".js_game_likes_count").text();
					$('div[data-game-id="' + t + '"] .js_mv_game_like').addClass("active");
					$('div[data-game-id="' + t + '"] .js_game_likes_count').html(Number(r) + 1)
				}
				allowClick = !0
			}
		})
	}
});
$(document).on("click", "#js_open_prvs_btn", function() {
	this.classList.contains("open") ? (this.classList.remove("open"), document.getElementById("js_provs_nav_shadow").classList.add("closed"), setCookie("_" + DyLobbyMultiView.lobbyUrl + "ClosedPrvListMV", !0, "Session")) : (this.classList.add("open"), document.getElementById("js_provs_nav_shadow").classList.remove("closed"), setCookie("_" + DyLobbyMultiView.lobbyUrl + "ClosedPrvListMV", !1, "Session"))
});
window.addEventListener("message", n => {
	if (n.data.type) switch (n.data.type.toLowerCase()) {
		case "rgs-height-change":
			if (DyLobbyMultiView.allowChangeHeight && document.fullscreenElement == null) {
				let t = document.getElementById("js_game_view_cont");
				t.getElementsByTagName("iframe")[0].style.height = n.data.height + "px";
				document.getElementById("js_gv").classList.add("lca-gv-scroll")
			}
			break;
		case "login":
			if (document.querySelector(".loginDialog") !== null) openLogin();
			else {
				var t = document.location.href;
				document.location.href = t.replace("/play/fun/", "/play/real/")
			}
			break;
		case "rgs-scrollto-top":
			window.scrollTo(0, n.data.value);
			break;
		case "rgs-backtohome":
			document.location.href = n.data.mainDomain
	}
	if (n.data)
		if (n.data.command == "com.egt-bg.exit") window.location.href = DyLobbyMultiView.homeUrl;
		else if (n.data.name) switch (n.data.name.toLowerCase()) {
		case "gamequit":
		case "homebutton":
			window.location.href = DyLobbyMultiView.homeUrl;
			break;
		case "opencashier":
			window.location.href = DyLobbyMultiView.homeUrl + "?deposit=1"
	} else if (n.data.exi_fMessageType_str) switch (n.data.exi_fMessageType_str.toLowerCase()) {
		case "exi_onhomeuseraction":
			window.location.href = DyLobbyMultiView.homeUrl;
			break;
		case "exi_oncashieruseraction":
			window.location.href = DyLobbyMultiView.homeUrl + "?deposit=1"
	}
});
window.addEventListener("scroll", function() {
	DyLobbyMultiView.allowChangeHeight && window.pageYOffset > 36 ? document.getElementById("js_game_view_cont").classList.add("lca-gv-fixed-game-btn-block") : document.getElementById("js_game_view_cont").classList.remove("lca-gv-fixed-game-btn-block")
})