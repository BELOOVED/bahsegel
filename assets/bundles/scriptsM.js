function hideAddressBar() {
	document.documentElement.scrollHeight < window.outerHeight / window.devicePixelRatio && (document.documentElement.style.height = window.outerHeight / window.devicePixelRatio + "px");
	setTimeout(window.scrollTo(1, 1), 0)
}

function sendverificationEmail(n) {
	var t, i;
	$("#js_email_verify_msg").html("");
	t = $(".my_profile_container.new_prof").length > 0;
	n && (i = $.param({
		verificationKay: n
	}), $.ajax({
		url: "/Account/VerifyEmail?" + i,
		type: "post",
		dataType: "json",
		success: function(n) {
			n.Error == null ? (t ? $(".profile_verify_button.email").remove() : document.getElementsByClassName("tbl-list")[1].style.display = "none", n.Message && ($("#js_email_verify_msg").html(n.Message).removeClass("error_color").addClass("succsess_color"), $("#sendverificationEmail").attr("disabled", !0), $("#verificationEmail").attr("disabled", !0))) : n.Message && $("#js_email_verify_msg").html(n.Message).removeClass("succsess_color").addClass("error_color")
		},
		error: function(n) {
			n.Message && $("#js_email_verify_msg").html(n.Message).removeClass("succsess_color").addClass("error_color")
		}
	}))
}

function sendverificationMobile(n) {
	var t, i;
	$("#js_mobile_verify_msg").html("");
	t = $(".my_profile_container.new_prof").length > 0;
	n && (i = $.param({
		verificationKay: n
	}), $.ajax({
		url: "/Account/VerifyMobile?" + i,
		type: "post",
		dataType: "json",
		success: function(n) {
			n.Error == null ? (t ? $(".profile_verify_button.mobile").remove() : $("#sendverificationMobile").closest(".tbl-list").css("display", "none"), n.Message && ($("#js_mobile_verify_msg").html(n.Message).removeClass("error_color").addClass("succsess_color"), $("#sendverificationMobile").attr("disabled", !0), $("#verificationMobile").attr("disabled", !0))) : n.Message && $("#js_mobile_verify_msg").html(n.Message).removeClass("succsess_color").addClass("error_color")
		},
		error: function(n) {
			n.Message && $("#js_mobile_verify_msg").html(n.Message).removeClass("succsess_color").addClass("error_color")
		}
	}))
}

function resendCodeAfter30Sec(n) {
	var t;
	if (clearInterval(interval30), n == "email") {
		event.stopPropagation();
		$("#verificationEmail").attr("disabled", "disabled");
		t = 30;
		$("#verificationEmail").attr("disabled", "disabled");
		interval30 = setInterval(n, 1e3);

		function n() {
			t == 0 ? (clearInterval(interval30), $("#verificationEmail").removeAttr("disabled")) : (t--, $("#verificationEmail").find($(".profile_verify__timer")).html(t))
		}
	} else if (n == "mobile") {
		event.stopPropagation();
		$("#verificationMobile").attr("disabled", "disabled");
		t = 30;
		$("#verificationMobile").attr("disabled", "disabled");
		interval30 = setInterval(n, 1e3);

		function n() {
			t == 0 ? (clearInterval(interval30), $("#verificationMobile").removeAttr("disabled")) : (t--, $("#verificationMobile").find($(".profile_verify__timer")).html(t))
		}
	}
}

function chkBoxFuncMob(n) {
	$(n).is(":checked") ? $(n).val("true") : $(n).val("false")
}

function ResponseHandling(n, t) {
	var i = "#" + t;
	n.Success === !0 ? ($(i).find(".errormassage").html(""), $(i).find(".successmassage").html(n.Message), $(i).find("input:enabled").val("")) : n.Code == "148" ? $(".trigger").click() : n.Code == "418" ? ($(".trigger").click(), $("#CancelActiveBonusYes").attr("disabled", "disabled"), $("#CancelActiveBonusYes").css("display", "none"), $("#CancelActiveBonusNo").text("Ok"), $("#ActiveBonusNotCancalble").text("You Can not make the Withdrawal until your bonus will be expired or is finished")) : ($(i).find(".successmassage").html(""), $(i).find(".errormassage").html(n.Message))
}

function LoginTrigger() {
	let n = document.getElementById("js_mob_sign_in");
	n && n.click()
}

function responsibleGamingChecks(n) {
	var t = n.ShowRealityCheckPopup;
	t == "yes" && getRealityCheckPopupInfo()
}
var JsonPost = {},
	interval30, BalanceUpdater;
JsonPost.Post = function(n, t, i, r) {
	var u = n.serializeObject();
	u = JSON.stringify(u);
	u = "{ " + t + ": " + u + "}";
	$.ajax({
		url: n.attr("action"),
		type: "POST",
		data: u,
		contentType: "application/json; charset=utf-8",
		success: i,
		error: r
	})
};
$.fn.serializeObject = function() {
	var n = {},
		t = this.serializeArray();
	return $.each(t, function() {
		n[this.name] !== undefined ? (n[this.name].push || (n[this.name] = [n[this.name]]), n[this.name].push(this.value || "")) : n[this.name] = this.value || ""
	}), n
};
window.addEventListener("load", function() {
	hideAddressBar()
});
window.addEventListener("orientationchange", function() {
	hideAddressBar()
});
$(function() {
	$("#overlay").on("click", function(n) {
		return n.stopPropagation(), $(".game-play").css("display", "none"), !1
	});
	$(".popup").on("click", function(n) {
		n.stopPropagation();
		var t = $(this).attr("href");
		return $("#overlay").removeClass("hidden"), $(t).slideDown("slow"), !1
	});
	$(".panel-close").on("click", function(n) {
		return n.stopPropagation(), !1
	});
	var n = 0;
	if ($("#inbox").length) $("tr").on("click", function(t) {
		var i;
		if (t.preventDefault(), i = $(this).find(".title"), !$(this).hasClass("message")) {
			if (i.hasClass("active")) {
				$(".active").removeClass("active");
				$(".message").hide();
				return
			}
			$(".active").removeClass("active");
			$(".message").hide();
			i.removeClass("active");
			var f = $(this).closest("tr"),
				r = $(this).closest("tr").next(".message"),
				u = r.attr("messageId");
			i.hasClass("active") || u == n ? n = 0 : (n = u, $(this).addClass("active"), $.ajax({
				type: "POST",
				contentType: "application/json; charset=utf-8",
				url: "/Account/ReadInboxMessage?id=" + u,
				success: function(n) {
					if (r.find(".message-content").html(n.Message), f.hasClass("unread")) {
						var t = document.getElementsByClassName("lblInboxCount")[0].innerHTML;
						document.getElementsByClassName("lblInboxCount")[0].innerHTML = document.getElementsByClassName("lblInboxCount1")[0].innerHTML = --t;
						f.removeClass("unread")
					}
					r.show()
				}
			}))
		}
	});
	$(".collapsible > a").on("click", function(n) {
		n.stopPropagation();
		var t = $(this).closest(".collapsible").hasClass("open");
		$(".collapsible").removeClass("open");
		t || $(this).closest(".collapsible").addClass("open")
	});
	$(".validate-form").length && $.each($(".validate-form"), function() {
		$(this).validate()
	});
	$(".date-picker").length && $(".date-picker").datepicker({
		dateFormat: "dd/mm/yy",
		showOtherMonths: !0,
		beforeShow: function(n) {
			if ($(n).attr("readonly")) return !1
		},
		onSelect: function(n) {
			$(this).attr("value", n)
		}
	});
	$("#verificationEmail").on("click", function() {
		$("#js_email_verify_msg").html("");
		$.ajax({
			url: "/Account/SendVerificationEmail",
			type: "post",
			dataType: "json",
			success: function(n) {
				n && n.Error && n.Error == "1" ? $("#js_email_verify_msg").html(n.Message).removeClass("succsess_color").addClass("error_color") : n.Message && $("#js_email_verify_msg").html(n.Message).removeClass("error_color").addClass("succsess_color")
			}
		})
	});
	$("#reverificationEmail").on("click", function() {
		$("#EmailVerifieError2").html("");
		$("#EmailVerifie2").html("");
		$.ajax({
			url: "/Account/SendVerificationEmail",
			type: "post",
			dataType: "json",
			success: function(n) {
				n.Message && $("#EmailVerifie2").html(n.Message)
			}
		})
	});
	$("#verificationMobile").on("click", function() {
		$("#js_mobile_verify_msg").html("");
		$.ajax({
			url: "/Account/SendVerificationMobile",
			type: "post",
			dataType: "json",
			success: function(n) {
				n && n.Error && n.Error == "1" ? $("#js_mobile_verify_msg").html(n.Message).removeClass("succsess_color").addClass("error_color") : n.Message && $("#js_mobile_verify_msg").html(n.Message).removeClass("error_color").addClass("succsess_color")
			}
		})
	});
	$("#reverificationMobile").on("click", function() {
		$("#MobileVerifieError2").html("");
		$("#MobileVerifie2").html("");
		$.ajax({
			url: "/Account/SendVerificationMobile",
			type: "post",
			dataType: "json",
			success: function(n) {
				n.Message && $("#MobileVerifie2").html(n.Message)
			}
		})
	})
});
BalanceUpdater = {
	PlayerId: 0,
	_intervalId: null,
	_isRunning: !1,
	start: function() {
		this._isRunning || (this._intervalId = setInterval(this.getBalanceAmount.bind(this), 6e4), this._isRunning = !0)
	},
	tryUpdateStatus: function() {
		var n = this;
		this._isRunning || (n._intervalId && clearTimeout(n._intervalId), $.ajax({
			url: "/Common/GetLoginStatus",
			type: "post",
			dataType: "json",
			success: function(t) {
				if ((typeof regClicked == "undefined" || !window.regClicked) && t && t.Reload == "Reload") {
					if (document.location.href.toLowerCase().indexOf("registration/register2") > -1) return;
					document.location.reload()
				} else n._intervalId = setTimeout(n.tryUpdateStatus.bind(n), 6e4)
			}
		}))
	},
	stop: function() {
		clearInterval(this._intervalId);
		this._isRunning = !1
	},
	getBalanceAmount: function() {
		var i = this,
			n, t;
		this.PlayerId > 0 && (n = !1, location.pathname.toLowerCase().includes("sport") && !location.pathname.toLowerCase().includes("virtualsports") && (n = !0), t = $.param({
			isSportUrl: n
		}), $.ajax({
			url: "/Common/GetBalanceStatus?" + t,
			type: "post",
			dataType: "json",
			success: function(n) {
				i.onBalanceStatus(n);
				responsibleGamingChecks(n)
			}
		}))
	},
	onBalanceStatus: function(n) {
		if (n.Balance) {
			if (window.playerBalance && (window.playerBalance.innerText = n.Balance), window.playerBalance1)
				if (window.playerBalance1.classList.contains("js_rm_balance")) {
					let t = n.Balance.lastIndexOf(" ");
					window.playerBalance1.innerText = n.Balance.substring(0, t)
				} else window.playerBalance1.innerText = n.Balance;
			window.playerBalance2 && (window.playerBalance2.innerText = n.Balance1);
			window.playerBonusBalance && (isNaN(n.Bonus1) ? (window.bonusBalanceCont.classList.remove("hidden"), window.playerBonusBalance.innerHTML = n.Bonus1) : n.Bonus1 != 0 ? (window.playerBonusBalance.innerHTML = n.Bonus1.toFixed(2), window.bonusBalanceCont.classList.remove("hidden")) : window.bonusBalanceCont.classList.add("hidden"));
			n.CommonBalance && (window.mobCommonBalance && (window.mobCommonBalance.innerText = n.CommonBalance), window.mobCommonBalanceAccount && (window.mobCommonBalanceAccount.innerText = n.CommonBalance));
			n.SportBalanceMobile && window.mobSportBalance && (window.mobSportBalance.innerText = n.SportBalanceMobile);
			window.playerWithdrawable1 && (window.playerWithdrawable1.innerText = n.Withdrawable1);
			window.playerUsed1 && (window.playerUsed1.innerText = n.Used1);
			window.playerUnused1 && (window.playerUnused1.innerText = n.Unused1);
			window.playerNonWagerable1 && (window.playerNonWagerable1.innerText = n.NonWagerable1)
		} else n.LogOut == "1" && document.location.reload()
	}
}