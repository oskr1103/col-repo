var theToggle = document.getElementById("toggle");

function hasClass(elem, className) {
  return new RegExp(" " + className + " ").test(" " + elem.className + " ");
}

function addClass(elem, className) {
  if (!hasClass(elem, className)) {
    elem.className += " " + className;
  }
}

function removeClass(elem, className) {
  var newClass = " " + elem.className.replace(/[\t\r\n]/g, " ") + " ";
  if (hasClass(elem, className)) {
    while (newClass.indexOf(" " + className + " ") >= 0) {
      newClass = newClass.replace(" " + className + " ", " ");
    }
    elem.className = newClass.replace(/^\s+|\s+$/g, "");
  }
}

function toggleClass(elem, className) {
  var newClass = " " + elem.className.replace(/[\t\r\n]/g, " ") + " ";
  if (hasClass(elem, className)) {
    while (newClass.indexOf(" " + className + " ") >= 0) {
      newClass = newClass.replace(" " + className + " ", " ");
    }
    elem.className = newClass.replace(/^\s+|\s+$/g, "");
  } else {
    elem.className += " " + className;
  }
}

theToggle.onclick = function () {
  toggleClass(this, "on");
  return false;
};

// if (localStorage.getItem("colpensionesAcc") != null) {
//   $("html")[0].className = localStorage.getItem("colpensionesAcc");
// }

// function tamañoLetra() {
//   if (localStorage.getItem("colpensionesAcc") != null) {
//     return;
//   }
//   size = $(".zoom").css("font-size");
//   size = parseInt(size, 10);
//   $(".tamaño-actual").text(size);
//   localStorage.setItem("colpensionesAcc", $(".zoom").css("font-size"));
// }
var local = localStorage.getItem("colpensionesAcc") != null;

function letterSize() {
  if (local) {
    size = $("html").css("font-size", localStorage.getItem("colpensionesAcc"));
  } else {
    size = $("html").css("font-size");
  }
  size = parseInt(size, 10);
}

letterSize();

$(".aumentar").on("click", function () {
  if (size + 2 <= 22) {
    $("html").css("font-size", "+=2");
    localStorage.setItem("colpensionesAcc", $("html").css("font-size"));
  } else {
    if (local) {
      $("html").css("font-size", "+=2");
      localStorage.setItem("colpensionesAcc", $("html").css("font-size"));
    }
  }
});

$(".disminuir").on("click", function () {
  if (size - 2 >= 10) {
    $("html").css("font-size", "-=2");
    localStorage.setItem("colpensionesAcc", $("html").css("font-size"));
  } else {
    if (local) {
      $("html").css("font-size", "-=2");
      localStorage.setItem("colpensionesAcc", $("html").css("font-size"));
    }
  }
});

$("#btn-contrast").click(function () {
  // Asigna o desasigna la clase black
  $("body").toggleClass("contrast");
  localStorage.setItem("colpensionesCon");
});
