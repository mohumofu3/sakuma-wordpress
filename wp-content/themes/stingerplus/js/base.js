new (function () {
	var a = "footer";
	var c = "fixed-footer";
	function b() {
		var h = document.getElementsByTagName("body")[0].clientHeight;
		document.getElementById(a).style.top = "0px";
		var i = document.getElementById(a).offsetTop;
		var f = document.getElementById(a).offsetHeight;
		if (window.innerHeight) {
			var g = window.innerHeight;
		} else {
			if (
				document.documentElement &&
				document.documentElement.clientHeight != 0
			) {
				var g = document.documentElement.clientHeight;
			}
		}
		if (i + f < g) {
			document.getElementById(a).style.position = "relative";
			document.getElementById(a).style.top = g - f - i - 1 + "px";
			if (document.body.classList) {
				document.body.classList.add(c);
			} else {
				document.body.className += " " + c;
			}
		} else {
			if (document.body.classList) {
				document.body.classList.remove(c);
			} else {
				document.body.className = document.body.className.replace(
					new RegExp("(^|\\b)" + c + "(\\b|$)", "gi"),
					" "
				);
			}
		}
	}
	function d(g) {
		var h = document.createElement("div");
		var f = document.createTextNode("S");
		h.appendChild(f);
		h.style.visibility = "hidden";
		h.style.position = "absolute";
		h.style.top = "0";
		document.body.appendChild(h);
		var j = h.offsetHeight;
		function i() {
			if (j != h.offsetHeight) {
				g();
				j = h.offsetHeight;
			}
		}
		setInterval(i, 1000);
	}
	function e(i, g, f) {
		try {
			i.addEventListener(g, f, false);
		} catch (h) {
			i.attachEvent("on" + g, f);
		}
	}
	e(window, "load", b);
	e(window, "load", function () {
		d(b);
	});
	e(window, "resize", b);
})();

// TOPボタンのアニメーション
jQuery(function () {
	var showFlag = false;
	var topBtn = jQuery("#page-top");
	topBtn.css("bottom", "-190px");
	topBtn.css("background-color", "red");
	var showFlag = false;
	$(window).scroll(function () {
		if ($(this).scrollTop() > 150) {
			if (showFlag == false) {
				showFlag = true;
				topBtn.stop().animate({ bottom: "50px" }, 400);
			}
		} else {
			if (showFlag == true) {
				showFlag = false;
				topBtn.stop().animate({ bottom: "-190px" }, 400);
			}
		}
	});
});


// 授業
// inviewを使った投稿ページの画像のアニメーション
// $(function () {
// 	$(".img-inview").on("inview", function (event, isInView) {
// 		if (isInView) {
// 			$(this).hide().fadeIn();
// 		} else {
// 			$(this).hide();
// 		}
// 	});
// });
$(function () {
	$(".imgFade").on("inview", function (event, isInView) {
		if (isInView) {
			$(this).stop().addClass('imgFadeIn');
		} else {
			$(this).stop().removeClass('imgFadeIn');
		}
	});
});


(function (c, j, h) {
	function d() {
		return j("body").hasClass("mobile");
	}
	var i = {
		click: function (k) {
			k.preventDefault();
			k.stopPropagation();
			if (!d() || this.isClickable()) {
				c.location.replace(this.getLink().attr("href"));
				return;
			}
			this.toggle();
		},
		mouseenter: function () {
			this.expand();
		},
		mouseleave: function () {
			this.collapse();
		},
	};
	var e = (function () {
		function m(A, x, y, z) {
			if (!(this instanceof m)) {
				return new m(A);
			}
			x = x || {
				click: function () {},
				mouseenter: function () {},
				mouseleave: function () {},
			};
			this.$element = A;
			this.expanded = typeof y !== "undefined" ? y : false;
			this.$icon = null;
			this.listener = x;
			this.mobile = typeof z !== "undefined" ? z : true;
		}
		m.prototype.getElement = function q() {
			return this.$element;
		};
		m.prototype.getIcon = function t() {
			this.$icon = this.$icon || j("<i></i>").prependTo(this.$element);
			return this.$icon;
		};
		m.prototype.getLink = function s() {
			return this.$element.find("> a").eq(0);
		};
		m.prototype.hasChildren = function w() {
			return !!this.$element.find("> ul").length;
		};
		m.prototype.isExpanded = function o() {
			return this.expanded;
		};
		m.prototype.isClickable = function u() {
			if (!this.getLink().length) {
				return false;
			}
			return !this.hasChildren() || (this.hasChildren() && this.isExpanded());
		};
		m.prototype.initialize = function p() {
			this.$icon = j("<i></i>");
			this.$element.prepend(this.$icon);
			this.refresh(false);
			this.addEventListener();
		};
		m.prototype.refresh = function l(x) {
			x = typeof x !== "undefined" ? x : true;
			if (this.expanded || !this.hasChildren()) {
				this.expand(x);
			} else {
				this.collapse(x);
			}
		};
		m.prototype.expand = function n(y) {
			var x = this;
			this.expanded = true;
			y = typeof y !== "undefined" ? y : true;
			if (y) {
				this.$element.find("> ul").slideDown("fast", function () {
					x.getIcon().attr({ class: "fa fa-angle-right" });
					x.$element
						.removeClass("menu-item-collapsed")
						.addClass("menu-item-expanded");
				});
			} else {
				this.getIcon().attr({ class: "fa fa-angle-right" });
				this.$element
					.removeClass("menu-item-collapsed")
					.addClass("menu-item-expanded");
			}
		};
		m.prototype.collapse = function k(y) {
			var x = this;
			this.expanded = false;
			y = typeof y !== "undefined" ? y : true;
			if (y) {
				this.$element.find("> ul").slideUp("fast", function () {
					x.getIcon().attr({ class: "fa fa-angle-down" });
					x.$element
						.removeClass("menu-item-expanded")
						.addClass("menu-item-collapsed");
				});
			} else {
				this.getIcon().attr({ class: "fa fa-angle-down" });
				this.$element
					.removeClass("menu-item-expanded")
					.addClass("menu-item-collapsed");
			}
		};
		m.prototype.toggle = function v() {
			if (!this.hasChildren()) {
				return;
			}
			this.expanded ? this.collapse() : this.expand();
		};
		m.prototype.addEventListener = function r() {
			this.$element.click(j.proxy(this.listener.click, this));
			if (!this.mobile) {
				this.$element.hover(
					j.proxy(this.listener.mouseenter, this),
					j.proxy(this.listener.mouseleave, this)
				);
			}
		};
		return m;
	})();
	var a = (function () {
		function k(p, q) {
			if (!(this instanceof k)) {
				return new k();
			}
			this.$element = p;
			this.mobile = typeof q !== "undefined" ? q : true;
		}
		k.prototype.initialize = function n() {
			var p = this;
			this.getMenuItems().each(function () {
				var r = j(this);
				var q = new e(r, i, false, p.mobile);
				r.data("st-menu", p);
				r.data("st-menu-item", q);
				q.initialize();
			});
			this.addEventListener();
		};
		k.prototype.getMenuItems = function o() {
			return this.$element.find("li");
		};
		k.prototype.collapseChildren = function m() {
			this.getMenuItems().each(function () {
				j(this).data("st-menu-item").collapse();
			});
		};
		k.prototype.addEventListener = function l() {
			var p = this;
			if (this.mobile) {
				return;
			}
			this.$element.on("mouseleave", function () {
				p.collapseChildren();
			});
		};
		return k;
	})();
	function g() {
		var l = j(".acordion_tree ul.menu");
		var k = d();
		l.each(function () {
			var m = j(this);
			var n = new a(m, k);
			m.data("st-menu", n);
			n.initialize();
		});
	}
	function f() {
		var k = j(".trigger");
		k.click(function (l) {
			var m = j(this);
			l.preventDefault();
			l.stopPropagation();
			m.toggleClass("active");
			m.next(".acordion_tree").slideToggle("normal");
		});
	}
	function b() {
		g();
		f();
	}
	j(b);
})(window, jQuery);
jQuery(function () {
	jQuery("ul.menu li")
		.filter(function () {
			return !jQuery(this).closest(".acordion").length;
		})
		.hover(
			function () {
				jQuery(">ul:not(:animated)", this).slideDown("fast");
			},
			function () {
				jQuery(">ul", this).slideUp("fast");
			}
		);
});
(function (b, a, c, d) {
	if (typeof c.fn.slick === "undefined") {
		return;
	}
	c(function () {
		c("[data-slick]").slick();
	});
})(window, window.document, jQuery);
jQuery("p.copy").append(
	'<a href="//wp-fun.com/" rel="nofollow">powered by STINGER</a>'
);
jQuery(function () {
	jQuery("span.hatenamark").each(function () {
		jQuery(this).prepend('<i class="fa fa-question-circle"></i>');
	});
	jQuery("span.checkmark").each(function () {
		jQuery(this).prepend('<i class="fa fa-check-circle"></i>');
	});
	jQuery("span.attentionmark").each(function () {
		jQuery(this).prepend('<i class="fa fa-exclamation-triangle"></i>');
	});
	jQuery("span.memomark").each(function () {
		jQuery(this).prepend('<i class="fa fa-pencil-square-o"></i>');
	});
});
