var MA = {};

MA.Model = (function () {
	var data = {
		prevView: null,
		curView: '#about'
	},
	dispatcher = $('<a>');

	function get(key) {
		return data[key];
	}

	function set(key, value) {
		data[key] = value;
		dispatcher.trigger(key + ':update');
	}

	function on(event, callback) {
		dispatcher.on(event, callback);
	}

	function off(event, callback) {
		dispatcher.off(event, callback);
	}

	function trigger(event, callback) {
		dispatcher.trigger(event, callback);
	}

	return {
		get: get,
		set: set,
		on: on,
		off: off,
		trigger: trigger
	};
}());

MA.Controller = (function () {
	var model = MA.Model;

	function setView(sView) {
		model.set('curView', sView);
	}

	return {
		setView: setView
	};
}());

MA.View = (function () {
	var model = MA.Model,
		controller = MA.Controller,
		_$ = {};

	function _stashEls() {
		_$.window = $(window);
		_$.body = $('body');
		_$.navBurger = $('#nav-burger');
		_$.navMenu = $('nav ul');
		_$.navLinks = $('nav a');
		_$.sections = $('section');
	}

	function _renderView() {
		var curView = model.get('curView');
		_$.body.scrollTop(0, 0);
		_$.sections.hide();
		_$.navLinks.removeClass('active');
		$(curView + '-section').show();
		_$.navLinks.filter('[href=#' + curView + ']').addClass('active');
	}

	function _detectView() {
		controller.setView(window.location.hash);
	}

	function _toggleMobileMenu() {
		if (_$.window.width() <= 550) {
			if (_$.navMenu.is(':visible')) {
				_$.navMenu.css('display', '');
			} else {
				_$.navMenu.css('display', 'block');
			}
		}
	}

	function _listen() {
		model.on('curView:update', _renderView);
		_$.navBurger.on('click', _toggleMobileMenu);
		_$.navLinks.on('click', _toggleMobileMenu);
		_$.window.on('hashchange', _detectView);
	}

	function init() {
		_stashEls();
		_renderView();
		_listen();
	}

	return {
		init: init
	};
}());

$(document).ready(function () {
	MA.View.init();
});