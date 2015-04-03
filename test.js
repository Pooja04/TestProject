function getPage(pagenum) {

  var ajax = getXMLHttpRequestObject();

  if (ajax) {

    ajax.open('get', 'test.php?pagenum=' + pagenum);

    ajax.onreadystatechange = function() {

      loadPage(ajax);
      // document.getElementById("results").innerHTML=xmlhttp.responseText;

    }

    ajax.send(null);

    return false;

  }

}

function loadPage(ajax) {

  if (ajax.readyState == 4) {

    if (ajax.status == 200) {

      var results = document.getElementById('results');

      results.innerHTML = ajax.responseText;

      results.style.display = 'block';

    }

  }

}