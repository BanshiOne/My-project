var $button = $("#menu-btn");
var $nav = $(".nav");

function toggleMenu() {
  if ($button.hasClass("open")) {
    $button.removeClass("open").addClass("close");
  } else {
    $button.removeClass("close").addClass("open");
  }
  $nav.toggleClass("active");
}

// Клик по кнопке бургер-меню
$button.on("click", function (e) {
  e.preventDefault();
  e.stopPropagation();
  toggleMenu();
});

// Клик по документу — закрытие меню
$(document).on("click", function (e) {
  if (!$nav.is(e.target) && $nav.has(e.target).length === 0 && $nav.hasClass("active")) {
    // Закрываем меню и синхронизируем кнопку
    toggleMenu();
  }
});