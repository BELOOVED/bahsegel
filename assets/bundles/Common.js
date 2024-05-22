function addCategoryIdToObj(n, t) {
	n.CategoryId.push(t)
}

function removeCategoryIdFromObj(n, t) {
	for (var i = 0; i < n.CategoryId.length; i++) n.CategoryId[i] == t && (n.CategoryId.splice(i, 1), i--)
}

function addThemeToObj(n, t) {
	n.ThemeId.push(t)
}

function removeThemeFromObj(n, t) {
	for (var i = 0; i < n.ThemeId.length; i++) n.ThemeId[i] == t && (n.ThemeId.splice(i, 1), i--)
}

function addTournamnetToObj(n, t) {
	n.TournamentId.push(t)
}

function removeTournamnetFromObj(n, t) {
	for (var i = 0; i < n.TournamentId.length; i++) n.TournamentId[i] == t && (n.TournamentId.splice(i, 1), i--)
}

function changePageUrlWithoutRefreshing(n, t) {
	var i = window.location.origin;
	n = i + n;
	history.pushState({
		id: t
	}, null, n)
}

function CapitalizeText(n) {
	return n.charAt(0).toUpperCase() + n.slice(1).toLowerCase()
}

function dlAnimate(n) {
	return $(n).css("opacity", "0").animate({
		opacity: "1"
	}, 300)
}

function setStrFormatWithSpChar(n, t) {
	for (var r = reverseString(n), u = "", i = 0; i < r.length; i++) u += r[i], (i + 1) % 3 == 0 && i + 1 != r.length && (u += t);
	return reverseString(u)
}

function reverseString(n) {
	return n.split("").reverse().join("")
}

function setDataSrc(n) {
	let t = n.getElementsByTagName("img");
	if (t.length > 0) {
		let n = t[0].src;
		t[0].src = t[0].dataset.src;
		t[0].dataset.src = n
	}
}

function showErrorPopup(n) {
	clearInterval(errorPopupInterval);
	$("#js_error_popup").remove();
	var t = '<div class="lca-info-content" id="js_error_popup"><div class="flex flexCol w100"><div class="flex jb w100"><span class="bold">Error<\/span><span id="js_close_err_popup" class="reg_close"><\/span><\/div><span>' + n + "<\/span><\/div><\/div>";
	$(t).hide().appendTo($("body")).fadeIn();
	errorPopupInterval = setTimeout(function() {
		$("#js_error_popup").fadeOut();
		$("#js_error_popup").remove()
	}, 7e3)
}

function setActiveClassToPrMenuItems(n) {
	const e = document.documentElement.getAttribute("lang"),
		i = document.getElementsByClassName(n),
		c = i.length,
		s = document.location.href.split(document.location.host),
		r = s.length > 1 ? s[1].replace("/" + e + "/", "/") : s[0].replace("/" + e + "/", "/"),
		l = r.split("/").length;
	let o = "",
		t = "",
		u = "",
		f = 0,
		h = 0;
	for (let n = 0; n < c; n++)
		if (i[n].classList.remove("tl_main_nav_item-active"), i[n].href) {
			o = i[n].href.split(document.location.host);
			t = o.length > 1 ? o[1].replace("/" + e + "/", "/") : o[0].replace("/" + e + "/", "/");
			switch (l) {
				case 1:
				case 2:
					r.toLowerCase() == t.toLowerCase() && (f < t.length && (f != 0 && removeActiveClassFromItem(u), f = t.length, u = i[n]), addActiveClassToItem(u), h++);
					break;
				default:
					r.toLowerCase().includes(t.toLowerCase()) && (!r.toLowerCase().includes("#") || r.toLowerCase().includes("#") && r.toLowerCase() == t.toLowerCase()) && (f < t.length && (f != 0 && removeActiveClassFromItem(u), f = t.length, u = i[n]), addActiveClassToItem(u), h++)
			}
		} return h
}

function addActiveClassToItem(n) {
	n.classList.add("tl_main_nav_item-active");
	let t = n.parentNode.parentNode;
	t && t.classList.contains("js_header_dropdown") && t.firstElementChild.classList.add("tl_main_nav_item-active")
}

function removeActiveClassFromItem(n) {
	n.classList.remove("tl_main_nav_item-active");
	let t = n.parentNode.parentNode;
	t && t.classList.contains("js_header_dropdown") && t.firstElementChild.classList.remove("tl_main_nav_item-active")
}

function removeLangParamFromUrl(n) {
	let t = n.split("/"),
		i = n;
	if (t.length > 1 && t[1].length == 2) {
		i = "";
		for (let n = 2; n < t.length; n++) i += "/" + t[n]
	}
	return i
}

function changeMetaTags(n) {
	let u = n,
		t = n,
		i = n,
		r = n;
	if (typeof getCustomMetaTexts == "function") {
		let n = getCustomMetaTexts();
		n.pageTitle && n.pageTitle != "" && (u = n.pageTitle);
		n.metaTitle && n.metaTitle != "" && (t = n.metaTitle);
		n.metaDesc && n.metaDesc != "" && (i = n.metaDesc);
		n.metaKeywords && n.metaKeywords != "" && (r = n.metaKeywords)
	}
	if (u != "" && (document.title = u), t != "") {
		let n = document.querySelector('meta[name="title"]');
		if (n != null) n.setAttribute("content", t);
		else {
			let n = document.createElement("meta");
			n.setAttribute("name", "title");
			n.setAttribute("content", t);
			document.getElementsByTagName("head")[0].appendChild(n)
		}
	}
	if (i != "") {
		let n = document.querySelector('meta[name="description"]');
		if (n != null) n.setAttribute("content", i);
		else {
			let n = document.createElement("meta");
			n.setAttribute("name", "description");
			n.setAttribute("content", i);
			document.getElementsByTagName("head")[0].appendChild(n)
		}
	}
	if (r != "") {
		let n = document.querySelector('meta[name="keywords"]');
		if (n != null) n.setAttribute("content", r);
		else {
			let n = document.createElement("meta");
			n.setAttribute("name", "keywords");
			n.setAttribute("content", r);
			document.getElementsByTagName("head")[0].appendChild(n)
		}
	}
}

function showInfoPopup(n, t, i) {
	let r = i != "undefined" && i != "" ? i : "Close",
		u = `<div class="backdrop open" id="js_info_popup_cont"> <div class="join-popup"> <div class="join-popup__head"> <p class="join__head">${n}</p></div>` + `<div class="join-popup__body"> <p class="join__head">${t}</p></div><div class="join-popup__footer">` + `<button data-role="none" class="btn-transparent" type="button" id="js_close_info_popup">${r}</button></div></div></div>`;
	$("body").append(dlAnimate(u));
	document.body.classList.add("ofh")
}

function closeInfoPopup() {
	document.getElementById("js_info_popup_cont") != null && document.getElementById("js_info_popup_cont").remove();
	document.body.classList.remove("ofh")
}

function createToast(n, t, i, r = 4e3) {
	var u = document.createElement("div"),
		o, e, h, s, f;
	u.classList.add("toast");
	n && u.classList.add(n);
	o = document.createElement("p");
	o.classList.add("t-title");
	e = "";
	n == "system" ? e = '<span class="dynaimc_icon">&#57876<\/span>' : n == "success" ? e = '<span class="dynamic_icon">&#57489<\/span>' : n == "warning" ? e = '<span class="dynamic_icon">&#57972<\/span>' : n == "error" && (e = '<span class="dynamic_icon">&#57476<\/span>');
	o.innerHTML += e + t;
	u.appendChild(o);
	h = document.createElement("p");
	h.classList.add("t-close");
	u.appendChild(h);
	s = document.createElement("p");
	s.classList.add("t-text");
	s.innerHTML = i;
	u.appendChild(s);
	f = document.getElementById("js-toast-cont");
	f == null && (f = document.createElement("div"), f.classList.add("toast-container"), f.id = "js-toast-cont", document.body.appendChild(f));
	f.appendChild(u);
	setTimeout(function() {
		u.classList.add("active")
	}, 1);
	r > 0 ? setTimeout(function() {
		u.classList.remove("active");
		setTimeout(function() {
			u.remove()
		}, 350)
	}, r) : r == null && setTimeout(function() {
		u.classList.remove("active");
		setTimeout(function() {
			u.remove()
		}, 350)
	}, 3e3)
}

function playAndMuteBannerVideo(n) {
	let t = $(n).find("video"),
		i = "";
	if (typeof $(n).parents(".swiper-initialized")[0].swiper != "undefined" && (i = $(n).parents(".swiper-initialized")[0].swiper), t) {
		i != "" && i.autoplay.start();
		for (let n = 0; n < t.length; n++) t[n] && (t[n].muted = !0, $(t[n]).siblings(".js_voice_icon").addClass("muted"))
	}
}

function addToVideoBannersObserver(n, t) {
	let i = document.getElementById(n);
	if (t) videoBannersObserver.observe(i);
	else {
		let n = i.querySelectorAll("video");
		n.forEach(n => {
			videoBannersObserver.observe(n)
		})
	}
}

function customPauseResumeTimer(n, t) {
	let i, r, u = t;
	this.pause = function() {
		window.clearTimeout(i);
		i = null;
		u -= Date.now() - r
	};
	this.resume = function() {
		i || (r = Date.now(), i = window.setTimeout(n, u))
	};
	this.cancel = function() {
		window.clearTimeout(i)
	};
	this.resume()
}

function initPresslHoldEvent(n, t, i, r) {
	function a(n) {
		o == "function" && (s = n.type == "touchstart" ? n.touches[0].clientX : n.clientX);
		requestAnimationFrame(v);
		n.preventDefault()
	}

	function h(t) {
		e = !0;
		cancelAnimationFrame(c);
		u < l ? o == "function" && (f.clientX = t.type == "touchend" ? t.changedTouches[0].clientX : t.clientX, Math.abs(s - f.clientX) < 5 && n.dispatchEvent(f)) : n.dispatchEvent(p);
		u = 0
	}

	function v() {
		c = requestAnimationFrame(v);
		u++;
		u >= l && e && (e = !1, n.dispatchEvent(y))
	}
	let c, u = 0,
		e = !0,
		y = new CustomEvent("pressHoldStart"),
		p = new CustomEvent("pressHoldEnd"),
		f = new CustomEvent("customClick"),
		o = typeof r,
		l = 10,
		s = "";
	n.addEventListener("mousedown", a, !1);
	n.addEventListener("mouseup", h, !1);
	n.addEventListener("mouseleave", h, !1);
	n.addEventListener("touchstart", a, !1);
	n.addEventListener("touchend", h, !1);
	typeof t == "function" && n.addEventListener("pressHoldStart", t, !1);
	typeof i == "function" && n.addEventListener("pressHoldEnd", i, !1);
	o == "function" && n.addEventListener("customClick", r, !1)
}
async function writeToClipboard(n) {
	try {
		if (typeof CwPwapp != "undefined" && CwPwapp) {
			navigator.clipboard && await navigator.clipboard.writeText(n);
			let t = window.parent || window;
			await t.postMessage({
				type: "cw_copy",
				data: {
					text: n
				}
			}, "*")
		} else await navigator.clipboard.writeText(n)
	} catch (t) {
		console.error("Failed to copy: ", t)
	}
}

function openYoutubeVideo(n) {
	document.getElementById("js_ytb_video_cont") == null && $("body").append('<div id="js_ytb_video_cont" style="display: none;" class="youtube_banner"><\/div>');
	$("#js_ytb_video_cont").html('<div class="tl_head_close js_close_ytb_popup close_youtube_banner transition200ms"><\/div><iframe width="100%" height="100%" src="' + n + '?autoplay=1"><\/iframe>').show()
}

function handleDocumentScroll() {
	toTopBtnCont != null && toTopBtnCont != "" && (window.scrollY > 300 ? toTopBtnCont.classList.remove("hidden") : toTopBtnCont.classList.add("hidden"));
	webHdr != null && webHdr != "" && (window.scrollY > 54 ? webHdr.classList.add("fixed_head") : webHdr.classList.remove("fixed_head"))
}

function getUrlPathQueryHash() {
	let n = document.location.href.split(document.location.host);
	return n.length > 0 ? n[1] : document.location.pathname
}

function setDatePickerValues() {
	const i = Number(document.getElementById("js_filter_period").value),
		n = document.getElementById("js_filter_from"),
		t = document.getElementById("js_filter_to");
	n.setAttribute("readonly", !0);
	t.setAttribute("readonly", !0);
	switch (i) {
		case 1:
			n.value = formatDate(addDays(new Date, -1));
			t.value = formatDate(addDays(new Date, 0));
			break;
		case 2:
			n.value = formatDate(addDays(new Date, -7));
			t.value = formatDate(addDays(new Date, 0));
			break;
		case 3:
			n.value = formatDate(addDays(new Date, -14));
			t.value = formatDate(addDays(new Date, 0));
			break;
		case 4:
			n.value = formatDate(addDays(new Date, -30));
			t.value = formatDate(addDays(new Date, 0));
			break;
		case 5:
			n.removeAttribute("readonly");
			t.removeAttribute("readonly")
	}
}

function addDays(n, t) {
	return n.setDate(n.getDate() + t), n
}

function formatDate(n) {
	let r = new Date(n),
		t = "" + (r.getMonth() + 1),
		i = "" + r.getDate(),
		u = r.getFullYear();
	return t.length < 2 && (t = "0" + t), i.length < 2 && (i = "0" + i), [u, t, i].join("-")
}

function checkFromToDates(n) {
	const t = document.getElementById("js_filter_from"),
		i = document.getElementById("js_filter_to");
	if (t.value == "" || i.value == "" || new Date(t.value) > new Date(i.value)) {
		switch (n.name) {
			case "From":
				t.value = i.value;
				break;
			case "To":
				i.value = t.value
		}
		createToast("error", "Error", "From date cannot be greater than the To date", 4e3)
	}
}

function loaderInsideShowHide(n, t) {
	let i = document.getElementById(n);
	if (i) {
		let n = i.querySelector("#js_loader_inside"),
			r = i.querySelector("#js_loading_replace");
		n && r && (n.style.display = t ? "block" : "none", r.style.display = t ? "none" : "block")
	}
}

function getCss(n, t) {
	return document.getElementById("js_st_" + n.toLowerCase()) ? Promise.resolve() : $.ajax({
		type: "GET",
		url: "/Account/GetCss?name=" + n + "&v=" + t,
		success: function(n) {
			$("head").append(n)
		}
	})
}

function startEgtJackBorderAnim(n, t) {
	function u(n) {
		let i = 0,
			u = setInterval(function() {
				r[n].style.backgroundPosition = "0px -" + i + "px";
				i = i + 92.6;
				i > 2500 && clearInterval(u)
			}, t)
	}
	let r = document.getElementsByClassName("js_jacpkpots");
	for (let t = 0; t < 4; t++) r[t].style.backgroundImage = "url(" + n + "Img/icons/redesign/jackpot_backgr.png)";
	for (var i = 0; i < 4; i++)(function(n) {
		setTimeout(function() {
			u(n)
		}, n * 400)
	})(i)
}

function CheckClientCashback() {
	return $.ajax({
		url: "/Account/CheckCashback",
		type: "GET",
		datatype: "json",
		success: function(n) {
			n && n != "" && $("body").append(n).addClass("ofh")
		}
	})
}

function showHideLoader(n) {
	n ? typeof showSpinner == "function" && showSpinner() : typeof hideSpinner == "function" && hideSpinner()
}

function toggleLeftSidebar() {
	document.body.classList.contains("cw_mob_root-sidebar_opened") ? closeLeftSideBar() : openLeftSideBar()
}

function openLeftSideBar() {
	document.body.classList.contains("cw_mob_root-right_sidebar_opened") && closeRightSidebar();
	document.body.classList.add("cw_mob_root-sidebar_opened");
	document.body.style.overflow = "hidden";
	$("#js_to_top_cont").css("z-index", "0")
}

function closeLeftSideBar() {
	document.body.classList.remove("cw_mob_root-sidebar_opened");
	document.body.removeAttribute("style");
	$("#js_to_top_cont").removeAttr("style")
}

function toggleRightSidebar() {
	document.body.classList.contains("cw_mob_root-right_sidebar_opened") ? closeRightSidebar() : openRightSidebar()
}

function openRightSidebar() {
	let i = document.getElementById("js_nav_right_toggle_btn"),
		r = document.getElementById("js_mob_sign_in"),
		t = document.querySelectorAll(".js_bm_nav_items");
	for (var n = 0; n < t.length; n++) t[n].classList.contains("tl_main_nav_item-active") && (bottomActiveNavItem = t[n]);
	i && i.classList.add("tl_main_nav_item-active");
	r && document.body.classList.add("login_sidebar");
	bottomActiveNavItem && bottomActiveNavItem != "" && bottomActiveNavItem.classList.remove("tl_main_nav_item-active");
	document.body.classList.add("cw_mob_root-right_sidebar_opened");
	document.body.style.overflow = "hidden";
	$("#js_to_top_cont").css("z-index", "0")
}

function closeRightSidebar() {
	let n = document.getElementById("js_nav_right_toggle_btn"),
		t = document.getElementById("js_mob_sign_in");
	document.body.classList.remove("cw_mob_root-right_sidebar_opened");
	document.body.removeAttribute("style");
	bottomActiveNavItem && bottomActiveNavItem != "" && bottomActiveNavItem.classList.add("tl_main_nav_item-active");
	n && n.classList.remove("tl_main_nav_item-active");
	t && document.body.classList.remove("login_sidebar");
	$("#js_to_top_cont").removeAttr("style")
}

function hideBottomNavBar() {
	document.body.classList.add("without_navbar");
	document.getElementById("js_bn_nav_bar").classList.add("cw_mob_mav_fixed_bot_hide")
}

function showBottomNavBar() {
	document.body.classList.remove("without_navbar");
	document.getElementById("js_bn_nav_bar").classList.remove("cw_mob_mav_fixed_bot_hide")
}

function handleSpAppEventDispatch(n, t) {
	if (n) switch (n.type) {
		case 3:
			if (n.message && n.message.path) switch (n.message.path.toLowerCase()) {
				case "/bet-history":
				case "/chat":
					hideBottomNavBar();
					break;
				case "/live":
					showBottomNavBar();
					t && setSpActiveClassToNavBar("live");
					break;
				case "/pre-match":
					showBottomNavBar();
					t && setSpActiveClassToNavBar("prematch");
					break;
				case "/event-details":
					showBottomNavBar();
					t && n.message.qs && setSpActiveClassToNavBar(n.message.qs.isLive == "0" ? "prematch" : "live");
					break;
				case "/":
					showBottomNavBar();
					t && setSpActiveClassToNavBar("sport");
					break;
				default:
					showBottomNavBar()
			}
			break;
		default:
			showBottomNavBar()
	}
}

function setSpActiveClassToNavBar(n) {
	let t = document.querySelectorAll(".js_bm_nav_items"),
		u = t.length,
		i = !1,
		r = 0;
	for (let f = 0; f < u; f++) t[f].href && (i = n == "sport" ? t[f].href.toLowerCase().endsWith("/sport") || t[f].href.toLowerCase().endsWith("/sport/reactindex") : t[f].href.toLowerCase().endsWith("/sport/live") || t[f].href.toLowerCase().endsWith("#live/page") || t[f].href.toLowerCase().endsWith("#live"), i = n == "prematch" ? t[f].href.toLowerCase().endsWith("/sport/prematch") || t[f].href.toLowerCase().endsWith("#pre-match") : i, t[f].classList.remove("tl_main_nav_item-active"), i && r == 0 && (r++, t[f].classList.add("tl_main_nav_item-active")))
}
var errorPopupInterval;
let toTopBtnCont = "",
	webHdr = "",
	copyBtnClicked = !1,
	bottomActiveNavItem = "";
let videoBannersObserver = new IntersectionObserver(function(n) {
	n.forEach(n => {
		if (n.target.tagName == "VIDEO") n.isIntersecting ? n.target.play() : n.target.pause();
		else {
			let t = n.target.querySelectorAll("video");
			t.length > 0 && (n.isIntersecting ? t.forEach(n => {
				n.play()
			}) : t.forEach(n => {
				n.pause()
			}))
		}
	})
}, {
	threshold: [.4]
});
document.addEventListener("click", function(n) {
	if (n.target.matches(".t-close")) {
		var t = n.target.parentElement;
		t.classList.remove("active");
		setTimeout(function() {
			t.remove()
		}, 350)
	} else return
});
$(document).on("click", "#js_close_err_popup", function() {
	clearInterval(errorPopupInterval);
	$("#js_error_popup").remove()
});
$(document).on("click", ".js_banner_video_link", function(n) {
	if ($(n.target).hasClass("js_voice_icon") || $(n.target).parents().hasClass("js_voice_icon")) {
		let r = $(n.target).hasClass("js_voice_icon") ? n.target : $(n.target).parents(".js_voice_icon")[0],
			i = $(r).siblings("video")[0],
			t = "";
		$(this).parents(".swiper-initialized").length > 0 && typeof $(this).parents(".swiper-initialized")[0].swiper != "undefined" && (t = $(this).parents(".swiper-initialized")[0].swiper);
		i && (i.muted ? (i.muted = !1, $(r).removeClass("muted"), t != "" && t.autoplay.stop()) : ($(r).addClass("muted"), i.muted = !0, t != "" && t.autoplay.start()))
	} else if ($(this).attr("data-href")) {
		let n = $(this).attr("data-target");
		n == "_self" ? location.href = $(this).attr("data-href") : window.open($(this).attr("data-href"), "_blank").focus()
	}
});
$(document).on("click", ".js_close_ytb_popup", function() {
	$("#js_ytb_video_cont").html("").hide()
});
window.addEventListener("DOMContentLoaded", () => {
	toTopBtnCont = document.getElementById("js_to_top_cont"), webHdr = document.getElementById("header_fix"), document.removeEventListener("scroll", handleDocumentScroll, !1), document.addEventListener("scroll", handleDocumentScroll, !1), document.getElementById("js_to_top") && document.getElementById("js_to_top").addEventListener("click", function() {
		window.scrollTo({
			top: 0,
			behavior: "smooth"
		})
	}), handleDocumentScroll()
});
$(document).on("click", ".js_copy_button", function() {
	let n = $(this).siblings(".js_copy_val")[0],
		t = "";
	t = n.tagName == "INPUT" ? n.value : n.innerText;
	let i = this.dataset.valMsg != undefined ? this.dataset.valMsg : "Copied";
	if (!copyBtnClicked) {
		copyBtnClicked = !0;
		writeToClipboard(t);
		let n = `<div class='copy_msg js_copy_msg_info'> <span class='dynamic_icon'>&#57477</span>${i}</div>`;
		$(this).parent().append(n);
		setTimeout(function() {
			$(".js_copy_msg_info").fadeOut(300, function() {
				$(".js_copy_msg_info").remove()
			})
		}, 1e3);
		setTimeout(function() {
			copyBtnClicked = !1
		}, 1500)
	}
});
$(document).on("click", ".js_sidebar_ddwn_btn", function() {
	$(this).parents(".js_sidebar_ddwn").toggleClass("opened")
})