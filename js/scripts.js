(function ( $ ) {
	var self = window.FLYINGTILE = window.FLYINGTILE || {};

	self.toggleNav = function toggleNav () {
		var navId = $(this).attr('data-toggle-id');

		$("#" + navId).toggleClass('mobile-menu-visible');
	}

	self.registerEvents = function registerEvents () {
		$('#toggle-nav').on('click', self.toggleNav);
	}

	self.registerEvents();

}) ( jQuery );