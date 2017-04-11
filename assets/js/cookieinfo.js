var CookieInfo = {
    close: function () {
        this.setCookie('cookieinfo', 1, 365 * 10);
        document.getElementById('cookie-info-message').style.display = 'none';
    },
    setCookie: function (name, value, exdays) {
        var exdate = new Date();
        exdate.setDate(exdate.getDate() + exdays);
        var value2 = escape(value) + ((exdays == null) ? '' : '; expires=' + exdate.toUTCString());
        document.cookie = name + '=' + value2;
    },
};