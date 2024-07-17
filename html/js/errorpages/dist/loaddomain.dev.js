"use strict";

function loadDomain() {
  var proto = location.protocol;
  var port = location.port;
  var url = location.hostname;
  var display = document.getElementById('display-domain');
  display.innerHTML = "".concat(req.protocol, "://").concat(req.get('host'), "/").concat(req.originalUrl);
}